/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXPasswordField;
import com.jfoenix.controls.JFXTextField;
import com.sun.prism.paint.Color;
import entite.Utilisateur;
import java.io.File;
import java.net.URL;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Optional;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Label;
import javafx.scene.control.RadioButton;
import javafx.scene.control.ToggleGroup;
import javafx.scene.image.Image;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import service.UtilisateurService;
import service.ServiceLogin;

/**
 * FXML Controller class
 *
 * @author ASUS
 */
public class ModifierUtilisateurController implements Initializable {
    @FXML
    private Button btn_close;
    @FXML
    private VBox bp;
    @FXML
    private JFXTextField nom_utilisateur;
    @FXML
    private Label errors_nom;
    @FXML
    private JFXTextField prenom_utilisateur;
    @FXML
    private Label errors_prenom;
    @FXML
    private JFXTextField email_utilisateur;
    @FXML
    private Label errors_email;
    @FXML
    private JFXTextField username_utilisateur;
    @FXML
    private Label errors_username;
    @FXML
    private JFXPasswordField miotdepasse_utilisateur;
    @FXML
    private Label errors_motdepasse;
    @FXML
    private Label statut_utilisateur_label;
    @FXML
    private RadioButton satatus_activer;
    @FXML
    private RadioButton status_desactiver;
    @FXML
    private Label errors_satus;
    @FXML
    private Label errors_globale;
    private Utilisateur utilisateur ;
    @FXML
    private ToggleGroup groupe1;
    @FXML
    private JFXButton modifier_utilisateur_btn;
    @FXML
    private JFXTextField id_utilisateur;

    public ModifierUtilisateurController() {
    }

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void Close_btn(ActionEvent event) {
        Stage stage = (Stage) btn_close.getScene().getWindow();
        stage.close();
    }

    void setUtilisateur(Utilisateur u) {
        utilisateur = u;
        prenom_utilisateur.setText(utilisateur.getPrenom());
        nom_utilisateur.setText(utilisateur.getNom_Utilisateur());
        username_utilisateur.setText(utilisateur.getNom_Utilisateur());
        email_utilisateur.setText(utilisateur.getEmail());
        miotdepasse_utilisateur.setText(utilisateur.getMotDePasse_Utilisateur());

        id_utilisateur.setText(String.valueOf(utilisateur.getId_Utilisateur()));
        int status = utilisateur.getEnabled() ;
 
        if (status == 1)
        {
           statut_utilisateur_label.setText("Activer");
           statut_utilisateur_label.setTextFill(javafx.scene.paint.Color.GREEN);
           satatus_activer.setSelected(true);
           status_desactiver.setSelected(false); 
        }else{
           statut_utilisateur_label.setText("Désactiver");
            statut_utilisateur_label.setTextFill(javafx.scene.paint.Color.RED);
           satatus_activer.setSelected(false);
           status_desactiver.setSelected(true);
        }
       
 
        
    }

    @FXML
    private void ModifierUtilisateur(ActionEvent event) {
         if (prenom_utilisateur.getText().isEmpty() || nom_utilisateur.getText().isEmpty() ||email_utilisateur.getText().isEmpty() ||username_utilisateur.getText().isEmpty()) {
            if (prenom_utilisateur.getText().isEmpty()) {
                errors_prenom.setTextFill(javafx.scene.paint.Color.TOMATO);
                errors_prenom.setText("Le prenom ne peut pas étre un champ vide");
            } else if (nom_utilisateur.getText().isEmpty()) {
                errors_nom.setTextFill(javafx.scene.paint.Color.TOMATO);
                errors_nom.setText("La nom ne peut pas étre un champ vide");
            } 
            else if (email_utilisateur.getText().isEmpty()){
             errors_email.setTextFill(javafx.scene.paint.Color.TOMATO);
             errors_email.setText("L' E-mail ne peut pas étre un champ vide");
            }
            else if (username_utilisateur.getText().isEmpty()){
             errors_username.setTextFill(javafx.scene.paint.Color.TOMATO);
             errors_username.setText("Le nom d'utilisateur ne peut pas étre un champ vide");
            }    
            else {
                errors_globale.setTextFill(javafx.scene.paint.Color.TOMATO);
                errors_globale.setText("Veuillez verifier vos information");
            }
        }
         else {
            ServiceLogin sl = new ServiceLogin();
            String nom = nom_utilisateur.getText();
            String prenom = prenom_utilisateur.getText();
            String email = email_utilisateur.getText();
            String username = username_utilisateur.getText();
            String st = ((RadioButton)groupe1.getSelectedToggle()).getText();
            int enabled = 0 ;
            if (st.equals("Activer")){ enabled = 1 ; }
            else { enabled = 0 ;}
            
            int id = Integer.valueOf(utilisateur.getId_Utilisateur());
           
            Alert a1 = new Alert(Alert.AlertType.CONFIRMATION);
            a1.setTitle("Modification des information d'un client");
            a1.setContentText("vous voulez vraiment Modifier ces information ?");
            Optional<ButtonType> result = a1.showAndWait();
            if (result.get() == ButtonType.OK) {
                sl.modifier(id, nom, prenom,email,username,enabled);

            } else if (result.get() == ButtonType.CANCEL) {
                
            }
            

        }
         
         
         
    }
    
}
