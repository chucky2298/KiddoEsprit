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
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.HBox;
import javafx.scene.shape.Circle;


/**
 * FXML Controller class
 *
 * @author Moez
 */
public class WorldfriendshipController implements Initializable {
    public static Utilisateur recupererUtilisateurConnecte;

    @FXML
    private BorderPane borderpane;
    @FXML
    private HBox bl_search;
    @FXML
    private Button button_search;
    @FXML
    private Circle notification;
    @FXML
    private Circle userImage;
    
    

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void forumAction(MouseEvent event) {
        loadUI("Forum");
    }
    public void loadUI(String ui){
        
        
        FXMLLoader loader = new FXMLLoader(getClass().getResource("/pidev/List.fxml"));
        Parent root = null;
        try {
            root = loader.load();
        } catch (IOException ex) {
            Logger.getLogger(ListController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        
        borderpane.setLeft(root);
        
    }

    @FXML
    private void openPanier(MouseEvent event) {
    }
    
}
