package service;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

import org.mindrot.jbcrypt.BCrypt;

import entite.Utilisateur;
import java.sql.DriverManager;
import java.util.logging.Level;
import java.util.logging.Logger;
import utils.DataSource;

public class ServiceLogin {
      
    private static Connection connexion = null;
    
    public static Connection creationConnexion() {
        String dbName = "kiddo";
        String userName = "root";
        String password = "";
        try {
            Class.forName("com.mysql.jdbc.Driver").newInstance();
            connexion = DriverManager.getConnection("jdbc:mysql://localhost/" + "kiddo", "root", "");
        } catch (Exception e) {
            e.printStackTrace();
        }
        
        return connexion;
    }
    
    public static int Inscription(Utilisateur utilisateur) {
        // Define the BCrypt workload to use when generating password hashes. 10-31 is a valid value en regarde le cryptage de fosuserbundle il utilise $2y$13$.
        int workload = 13;
        int status = 0;
        String sql = "INSERT INTO fos_user(username,password,email,nom,prenom,roles,enabled,username_canonical) VALUES(?,?,?,?,?,?,?,?,?)";
        System.out.println(sql);
        
        try {
            Connection connexion = ServiceLogin.creationConnexion();
            PreparedStatement preparedStatement = (PreparedStatement) connexion.prepareStatement(sql);
            preparedStatement.setString(1, utilisateur.getNom_Utilisateur());
            
            String mdp = BCrypt.hashpw(utilisateur.getMotDePasse_Utilisateur(), BCrypt.gensalt(workload));
            preparedStatement.setString(2, mdp.replaceFirst("2a", "2y"));
            preparedStatement.setString(3, utilisateur.getEmail());
            preparedStatement.setString(4, "parent");
            preparedStatement.setInt(5, 1);
            preparedStatement.setString(6, utilisateur.getNom_Utilisateur());
            preparedStatement.setString(7, utilisateur.getNom());
            preparedStatement.setString(8, utilisateur.getPrenom());
            status = preparedStatement.executeUpdate();
            connexion.close();
        } catch (SQLException e) {
            e.printStackTrace();
        }
        return status;
    }
    
    public static boolean testMotDePasse(String motDePasseGUI, String motDePasseBD) {
        boolean password_verified = false;
        
        if (null == motDePasseBD) {
            throw new java.lang.IllegalArgumentException("Invalid hash provided for comparison");
        }

        // en remplaçant 2y par 2a le cryptage on obtient le cryptage par defaut pour que la methode checkpw puisse comparer
        password_verified = BCrypt.checkpw(motDePasseGUI, motDePasseBD.replaceFirst("2y", "2a"));
        
        return (password_verified);
    }
    
    public static List<Utilisateur> getTtUtilisateur() {
        List<Utilisateur> list = new ArrayList<Utilisateur>();
        try {
            String sql = "select * from fos_user ";
            Connection connexion = ServiceLogin.creationConnexion();
            PreparedStatement preparedStatement = (PreparedStatement) connexion.prepareStatement(sql);
            ResultSet resultSet = preparedStatement.executeQuery();
            while (resultSet.next()) {
                Utilisateur utilisateur = new Utilisateur();
                utilisateur.setId_Utilisateur(resultSet.getInt("id"));
                utilisateur.setNom_Utilisateur(resultSet.getString("username"));
                utilisateur.setMotDePasse_Utilisateur(resultSet.getString("password"));
                utilisateur.setNom(resultSet.getString("nom"));
                utilisateur.setPrenom(resultSet.getString("prenom"));
                utilisateur.setRole_Utilisateur(resultSet.getString("roles"));
                list.add(utilisateur);
            }
            connexion.close();
        } catch (SQLException e) {
            e.printStackTrace();
            
        }
        return list;
        
    }
    
    public static Utilisateur getUtilisateur(String nomUtilisateur) {
        Utilisateur utilisateur = new Utilisateur();
        try {
            String sql = "select * from fos_user where username = ?";
            Connection connexion = ServiceLogin.creationConnexion();
            PreparedStatement preparedStatement = (PreparedStatement) connexion.prepareStatement(sql);
            preparedStatement.setString(1, nomUtilisateur);
            ResultSet resultSet = preparedStatement.executeQuery();
            while (resultSet.next()) {
                utilisateur.setId_Utilisateur(resultSet.getInt("id"));
                utilisateur.setNom_Utilisateur(resultSet.getString("username"));
                utilisateur.setEmail(resultSet.getString("email"));
                utilisateur.setNom(resultSet.getString("nom"));
                utilisateur.setPrenom(resultSet.getString("prenom"));
                utilisateur.setEnabled(resultSet.getInt("enabled"));
                utilisateur.setRole_Utilisateur(resultSet.getString("roles"));
            }
            
            connexion.close();
        } catch (SQLException e) {
            e.printStackTrace();
            
        }
        return utilisateur;
        
    }

    public void supprimer(int x) {
        String sql = "DELETE FROM fos_user WHERE id = ? ";
        Connection connexion = ServiceLogin.creationConnexion();
        
        try {
            PreparedStatement preparedStatement = (PreparedStatement) connexion.prepareStatement(sql);
            preparedStatement.setInt(1, x);
            
            preparedStatement.executeUpdate();
            
            System.out.println("Post Supprimer");
            
        } catch (SQLException ex) {
            Logger.getLogger(ForumService.class.getName()).log(Level.SEVERE, null, ex);
        }
        System.out.println("Post nom Supprimer");
    }

    public void modifier(int id, String nom, String prenom, String email, String username, int enabled) {
        Connection con = ServiceLogin.creationConnexion();
        //PreparedStatement preparedStatement = (PreparedStatement) connection.prepareStatement(req);
        String sql = "UPDATE fos_user SET nom=?, prenom=? , email=?, username=?, enabled=? WHERE id =?";
        try {
            PreparedStatement statement = con.prepareStatement(sql);
            statement.setString(1, nom);
            statement.setString(2, prenom);
            statement.setString(3, email);
            statement.setString(4, username);
            statement.setInt(5, enabled);
            statement.setInt(6, id);
            statement.executeUpdate();
            System.out.println("Utilisateur Modifiée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public List<Utilisateur> ListUtilisateur() {
        String c = "a:1:{i:0;s:11:\"ROLE_PARENT\";}";
        List<Utilisateur> utilisateur = new ArrayList<Utilisateur>();
        String req = "select * from fos_user where roles=" + "'" + c + "'" + "ORDER BY(id) DESC";
        Connection connexion = ServiceLogin.creationConnexion();
        
        try {
            PreparedStatement preparedStatement = (PreparedStatement) connexion.prepareStatement(req);
            
            ResultSet resultSet = preparedStatement.executeQuery();
            while (resultSet.next()) {
                
                Utilisateur f = new Utilisateur(resultSet.getInt("id"), resultSet.getString("email"), resultSet.getString("username"), resultSet.getString("roles"), resultSet.getString("nom"), resultSet.getString("prenom"), resultSet.getInt("enabled"));
                utilisateur.add(f);
            }
        } catch (SQLException ex) {
            Logger.getLogger(CategorieService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return utilisateur;
    }
}
