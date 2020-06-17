/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev;

import entite.Utilisateur;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.BorderPane;
import javafx.scene.shape.Circle;

/**
 * FXML Controller class
 *
 * @author Moez
 */
public class DashboardGUIController implements Initializable {
public static Utilisateur recupererUtilisateurConnecte;

    @FXML
    private BorderPane borderpane;
    @FXML
    private Circle circleImage;
    @FXML
    private Circle notification;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void homedashboard(MouseEvent event) {
    }

    @FXML
    private void evenement(MouseEvent event) {
    }

    @FXML
    private void produit(MouseEvent event) {
    }

    @FXML
    private void experience(MouseEvent event) {
    }

    @FXML
    private void CategorieForum(MouseEvent event) {
        loadUI("CategorieForum");
    }

    @FXML
    private void ListQuestion(MouseEvent event) {
        loadUI("ListQuestion");
    }

    @FXML
    private void ListComentaire(MouseEvent event) {
        loadUI("ListComentaire");
    }

    @FXML
    private void commande(MouseEvent event) {
    }
    
    
    private void loadUI(String ui) {

        Parent root = null;
        try {
            root = FXMLLoader.load(getClass().getResource("/pidev/" + ui + ".fxml"));
        } catch (IOException ex) {
            Logger.getLogger(DashboardGUIController.class.getName()).log(Level.SEVERE, null, ex);
        }
        borderpane.setCenter(root);
    }
    
}
