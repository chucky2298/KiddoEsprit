/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import entite.Utilisateur;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import utils.DataSource;

/**
 *
 * @author Takwa
 */
public class UtilisateurService {
    Connection connection=null;
    public UtilisateurService(){
        connection=DataSource.getInstance().getConnection();
    }
    public List<Utilisateur> selectAll(int id_Utilisateur) {
        List<Utilisateur> Utilisateur=new ArrayList<Utilisateur>();
        String req="select * from fos_user WHERE username= ? ORDER BY(id) DESC";
        try {
            PreparedStatement preparedStatement = (PreparedStatement) connection.prepareStatement(req);
            preparedStatement.setInt(1, id_Utilisateur);
            ResultSet resultSet = preparedStatement.executeQuery();
            while(resultSet.next()){
                Utilisateur u=new Utilisateur(resultSet.getInt(1),resultSet.getString(2), resultSet.getString(3), resultSet.getString(4), resultSet.getString(5), resultSet.getString(6),resultSet.getString(7),resultSet.getInt(8));
                Utilisateur.add(u);
            }
        } catch (SQLException ex) {
            Logger.getLogger(CategorieService.class.getName()).log(Level.SEVERE, null, ex);
        }
        return Utilisateur;
    }
    
    public boolean selectAll() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public String getUtilisateurUsername(String username) {
 Connection con = ServiceLogin.creationConnexion();
        String sql = "select * from fos_user WHERE username=" + "'" + username + "'";
         String email = null ;
        try {
            Statement st = con.createStatement();
            ResultSet rs = st.executeQuery(sql);

            rs.next();
             email = rs.getString("email");
        } catch (SQLException ex) {
           // Logger.getLogger(CategorieService.class.getName()).log(Level.SEVERE, null, ex);
            return email ;
        }
        return email;    }

    public void ResetPassword(String username, String mdp) {
 Connection con = ServiceLogin.creationConnexion();

        //PreparedStatement preparedStatement = (PreparedStatement) connection.prepareStatement(req);
        String sql = "UPDATE fos_user SET password=? WHERE username=" + "'" + username + "'";
        try {
            PreparedStatement statement = con.prepareStatement(sql);
            statement.setString(1, mdp);
            statement.executeUpdate();
            System.out.println("Mot de passe Modifiée");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }
   

    public void Inscription(String username, String nom, String prenom, String email, String mdp, String role) {
        
//throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    Connection con = ServiceLogin.creationConnexion();
        PreparedStatement preparedStatement = null;
        try {
            String st = "INSERT INTO fos_user ( username,nom,prenom,email,password,roles,enabled,username_canonical,email_canonical) VALUES (?,?,?,?,?,?,?,?,?)";
            preparedStatement = (PreparedStatement) con.prepareStatement(st);
            preparedStatement.setString(1, username);
            preparedStatement.setString(2, nom);
            preparedStatement.setString(3, prenom);
            preparedStatement.setString(4, email);
            preparedStatement.setString(5, mdp);
            preparedStatement.setString(6, role);
            preparedStatement.setInt(7, 1);
            preparedStatement.setString(8, username);
            preparedStatement.setString(9, email);
            preparedStatement.executeUpdate();
        } catch (SQLException ex) {
            Logger.getLogger(ServiceLogin.class.getName()).log(Level.SEVERE, null, ex);
        }
    
    
    }
    
    
}
