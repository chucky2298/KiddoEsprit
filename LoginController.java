/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev;

import entite.Utilisateur;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.HashMap;
import java.util.List;
import java.util.Map;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.regex.Pattern;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.CheckBox;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.Label;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.paint.Color;
import javafx.stage.Stage;
import org.mindrot.jbcrypt.BCrypt;
import service.ServiceLogin;
import utils.DataSource;

/**
 * FXML Controller class
 *
 * @author Takwa
 */
public class LoginController {
    ObservableList<String> maritalStatusList = FXCollections.observableArrayList("parent","enseignant");

    private AnchorPane GUI;
    @FXML
    private TextField login_nom_utilisateur_fx;
    @FXML
    private PasswordField login_mot_de_passe_utilisateur_fx;
    private TextField inscription_nom_utilisateur_fx;
    private TextField inscription_email_utilisateur_fx;
    private PasswordField inscription_mot_de_passe_utilisateur_fx;
    private TextField inscription_nom_fx;
    private TextField inscription_prenom_utilisateur_fx;
   
    
     double x = 0;
    double y = 0;
    @FXML
    private AnchorPane btn_mot_passe_oublier;
    
    

   

    @FXML
    void dragged(MouseEvent event) {
        Node node = (Node) event.getSource();
        Stage stage = (Stage) node.getScene().getWindow();
        stage.setX(event.getScreenX() - x);
        stage.setY(event.getScreenY() - y);

    }

    @FXML
    void pressed(MouseEvent event) {
        x = event.getSceneX();
        y = event.getSceneY();
    }

    /**
     * en d design login *
     */
    void Inscription(ActionEvent event) {
        

        String nomUtilisateur = inscription_nom_utilisateur_fx.getText();
        String motDePasseUtilisateur = inscription_mot_de_passe_utilisateur_fx.getText();

        String emailUtilisateur = inscription_email_utilisateur_fx.getText();
        String nom = inscription_nom_fx.getText();
        String prenomUtilisateur = inscription_prenom_utilisateur_fx.getText();

        String role = "a:1:{i:0;s:11:\"ROLE_PARENT\";}";
        String mdp = BCrypt.hashpw(motDePasseUtilisateur, BCrypt.gensalt(13));
        mdp = mdp.replaceFirst("2a", "2y");
        Connection con = null;
        con = DataSource.getInstance().getConnection();
        PreparedStatement preparedStatement = null;

        //Utilisateur utilisateur = new Utilisateur();
        if (nomUtilisateur.isEmpty() || motDePasseUtilisateur.isEmpty() || emailUtilisateur.isEmpty() || nom.isEmpty() || prenomUtilisateur.isEmpty() ) {
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setHeaderText(null);
            alert.setContentText("Veuillez vérifier votre saisie...");
            alert.showAndWait();
        } else {
            //query
            try {
                String st = "INSERT INTO fos_user ( username,nom,prenom,email,password,roles,enabled,username_canonical,email_canonical,nom_enfant) VALUES (?,?,?,?,?,?,?,?,?,?)";
                preparedStatement = (PreparedStatement) con.prepareStatement(st);
                preparedStatement.setString(1, nomUtilisateur);
                preparedStatement.setString(2, nom);
                preparedStatement.setString(3, prenomUtilisateur);
                preparedStatement.setString(4, emailUtilisateur);
                preparedStatement.setString(5, mdp);
                preparedStatement.setString(6, role);
                preparedStatement.setInt(7, 1);
                preparedStatement.setString(8, nomUtilisateur);
                preparedStatement.setString(9, emailUtilisateur);
                

                preparedStatement.executeUpdate();

                Alert alert = new Alert(Alert.AlertType.INFORMATION);
                alert.setHeaderText(null);
                alert.setContentText("vous etre inscrit AVEC SUCCES");
                alert.showAndWait();

                //clearFields();
                return;

            } catch (SQLException ex) {
                Alert alert = new Alert(Alert.AlertType.ERROR);
                alert.setHeaderText(null);
                alert.setContentText("ERREUR D'inscription");
                alert.showAndWait();
            }
        }

        Utilisateur utilisateur = new Utilisateur();
         utilisateur.setNom_Utilisateur(nomUtilisateur);
         utilisateur.setMotDePasse_Utilisateur(motDePasseUtilisateur);
         utilisateur.setEmail(emailUtilisateur);
         utilisateur.setNom(nom);
         utilisateur.setPrenom(prenomUtilisateur);
         
         int status = ServiceLogin.Inscription(utilisateur);

         if (status > 0) {
         Alert alert = new Alert(Alert.AlertType.INFORMATION);
         alert.setHeaderText(null);
         alert.setContentText("vous etes inscrit AVEC SUCCES");
         alert.showAndWait();
         return;

         } else {
         Alert alert = new Alert(Alert.AlertType.ERROR);
         alert.setHeaderText(null);
         alert.setContentText("ERREUR D'inscription");
         alert.showAndWait();
         }
        
    }
    void Inscription1(ActionEvent event) {

        String nomUtilisateur = inscription_nom_utilisateur_fx.getText();
        String motDePasseUtilisateur = inscription_mot_de_passe_utilisateur_fx.getText();

        String emailUtilisateur = inscription_email_utilisateur_fx.getText();
        String nom = inscription_nom_fx.getText();
        String prenomUtilisateur = inscription_prenom_utilisateur_fx.getText();
       
        String role = "a:1:{i:0;s:11:\"ROLE_PARENT\";}";
        String mdp = BCrypt.hashpw(motDePasseUtilisateur, BCrypt.gensalt(13));
        mdp = mdp.replaceFirst("2a", "2y");
        Connection con = null;
        con = DataSource.getInstance().getConnection();
        PreparedStatement preparedStatement = null;

        //Utilisateur utilisateur = new Utilisateur();
        if (nomUtilisateur.isEmpty() || motDePasseUtilisateur.isEmpty() || emailUtilisateur.isEmpty() || nom.isEmpty() || prenomUtilisateur.isEmpty() ) {
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setHeaderText(null);
            alert.setContentText("Veuillez vérifier votre saisie...");
            alert.showAndWait();
        } else {
            //query
            try {
                String st = "INSERT INTO fos_user ( username,nom,prenom,email,password,roles,enabled,username_canonical,email_canonical,nom_enfant) VALUES (?,?,?,?,?,?,?,?,?,?)";
                preparedStatement = (PreparedStatement) con.prepareStatement(st);
                preparedStatement.setString(1, nomUtilisateur);
                preparedStatement.setString(2, nom);
                preparedStatement.setString(3, prenomUtilisateur);
                preparedStatement.setString(4, emailUtilisateur);
                preparedStatement.setString(5, mdp);
                preparedStatement.setString(6, role);
                preparedStatement.setInt(7, 1);
                preparedStatement.setString(8, nomUtilisateur);
                preparedStatement.setString(9, emailUtilisateur);
               

                preparedStatement.executeUpdate();

                Alert alert = new Alert(Alert.AlertType.INFORMATION);
                alert.setHeaderText(null);
                alert.setContentText("vous etre inscrit AVEC SUCCES");
                alert.showAndWait();

                //clearFields();
                return;

            } catch (SQLException ex) {
                Alert alert = new Alert(Alert.AlertType.ERROR);
                alert.setHeaderText(null);
                alert.setContentText("ERREUR D'inscription");
                alert.showAndWait();
            }
        }

        /* 
         utilisateur.setNom_Utilisateur(nomUtilisateur);
         utilisateur.setMotDePasse_Utilisateur(motDePasseUtilisateur);
         utilisateur.setEmail(emailUtilisateur);
         utilisateur.setNom(nom);
         utilisateur.setPrenom(prenomUtilisateur);
         utilisateur.setNom_enfant(nom_enfantUtilisateur);
         int status = ServiceLogin.Inscription(utilisateur);

         if (status > 0) {
         Alert alert = new Alert(Alert.AlertType.INFORMATION);
         alert.setHeaderText(null);
         alert.setContentText("vous etre inscrit AVEC SUCCES");
         alert.showAndWait();
         return;

         } else {
         Alert alert = new Alert(Alert.AlertType.ERROR);
         alert.setHeaderText(null);
         alert.setContentText("ERREUR D'inscription");
         alert.showAndWait();
         }*/
    }

 

    @FXML
    void connexionUtilisateur(ActionEvent event) throws IOException {

        if (login_nom_utilisateur_fx.getText().isEmpty()) {
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setHeaderText(null);
            alert.setContentText("nom d'utilisateur est vide");
            alert.showAndWait();
            return;

        } else if (login_mot_de_passe_utilisateur_fx.getText().isEmpty()) {

            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setHeaderText(null);
            alert.setContentText("mot de passe est vide");
            alert.showAndWait();
        }

        List<Utilisateur> listUtilisateur = ServiceLogin.getTtUtilisateur();
        HashMap<String, String> hashmapUtilisateur = new HashMap<>();

        for (Utilisateur utilisateur : listUtilisateur) {
            hashmapUtilisateur.put(utilisateur.getNom_Utilisateur(), utilisateur.getMotDePasse_Utilisateur());
        }

        /**
         * test *
         */
        for (Map.Entry<String, String> Uti : hashmapUtilisateur.entrySet()) {
            System.out.println(Uti.getKey() + " / " + Uti.getValue());

        }

        String nomUtilisater = login_nom_utilisateur_fx.getText();
        String motDePasseUtilisateur = login_mot_de_passe_utilisateur_fx.getText();
        for (Map.Entry<String, String> Uti : hashmapUtilisateur.entrySet()) {
            if (nomUtilisater.equals(Uti.getKey())) {
                if (ServiceLogin.testMotDePasse(motDePasseUtilisateur, Uti.getValue())) {
                    Utilisateur utilisateur = ServiceLogin.getUtilisateur(Uti.getKey());
                    System.out.println("enabled : "+utilisateur.getEnabled());
                    if (utilisateur.getEnabled() == 0) {
                        Alert alert = new Alert(Alert.AlertType.INFORMATION);
                        alert.setHeaderText(null);
                        alert.setContentText("Ce compte a été désactiver ");
                        alert.showAndWait();
                        return;
                    }
                    else {
                        if (utilisateur.getRole_Utilisateur().equals("a:1:{i:0;s:11:\"ROLE_PARENT\";}")) {
                        
                        //Stage stage = (Stage) GUI.getScene().getWindow();
                        //stage.close();
                          

                        System.out.println("vous etre connecté entant que parent");
                        System.out.println(ServiceLogin.getUtilisateur(Uti.getKey()).getId_Utilisateur());

                        FXMLLoader loader = new FXMLLoader(getClass().getResource("Kiddo.fxml"));
                        Parent root = loader.load();
                        KiddoController controller = (KiddoController) loader.getController();
                        controller.recupererUtilisateurConnecte = (ServiceLogin.getUtilisateur(Uti.getKey()));

                        Stage primaryStage = new Stage();
                        Scene scene = new Scene(root);
                        scene.getStylesheets().add(getClass().getResource("login.css").toExternalForm());
                        primaryStage.setScene(scene);
                        primaryStage.show();
                        return;
                    } else {
                        System.out.println("vous etre connecté entant qu'enseignant");
                        System.out.println(ServiceLogin.getUtilisateur(Uti.getKey()).getId_Utilisateur());

                        FXMLLoader loader = new FXMLLoader(getClass().getResource("DashboardGUI.fxml"));
                        Parent root = loader.load();
                        DashboardGUIController controller = (DashboardGUIController) loader.getController();
                        controller.recupererUtilisateurConnecte = (ServiceLogin.getUtilisateur(Uti.getKey()));

                        Stage primaryStage = new Stage();
                        Scene scene = new Scene(root);
                        scene.getStylesheets().add(getClass().getResource("login.css").toExternalForm());
                        primaryStage.setScene(scene);
                        primaryStage.show();
                        return;
                    }

                } }
                else {
                    Alert alert = new Alert(Alert.AlertType.INFORMATION);
                    alert.setHeaderText(null);
                    alert.setContentText("mot de passe incorrect");
                    alert.showAndWait();
                    return;
                }
            }
        }
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setHeaderText(null);
        alert.setContentText("nom incorrect");
        alert.showAndWait();

    }

    @FXML
    public void CreerCompte(ActionEvent even) throws IOException {
        try {
            Stage primaryStage = new Stage();
            //

            Parent root = FXMLLoader.load(getClass().getResource("InscriptionGUI.fxml"));
            Scene scene = new Scene(root);
            //scene.getStylesheets().add(getClass().getResource("login.css").toExternalForm());
            primaryStage.setScene(scene);
            primaryStage.show();
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    @FXML
    private void quitter() {
        // get a handle to the stage
        //Stage stage = (Stage) GUI.getScene().getWindow();
        // do what you have to do
        //stage.close();
        System.exit(0);
    }

    @FXML
    private void MotDePasseOublier(ActionEvent event) {
         try {
            //add you loading or delays - ;-)
            Node node = (Node) event.getSource();
            Stage stage = (Stage) node.getScene().getWindow();
            //stage.setMaximized(true);
            stage.close();
            Scene scene = new Scene(FXMLLoader.load(getClass().getResource("MotDePasseOublier.fxml")));
            stage.setTitle("Mot de passe oublier");
            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            Logger.getLogger(LoginController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }


}
