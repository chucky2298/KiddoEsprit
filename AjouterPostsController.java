/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev;

import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXTextArea;
import com.jfoenix.controls.JFXTextField;
import entite.Utilisateur;
import entite.forum;
import java.io.IOException;
import java.net.URL;
import java.sql.Timestamp;
import java.util.HashMap;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.input.KeyEvent;
import javafx.stage.Stage;
import service.CategorieService;
import service.ForumService;

/**
 * FXML Controller class
 *
 * @author Moez
 */
public class AjouterPostsController implements Initializable {

    @FXML
    private JFXTextField title;
    @FXML
    private Label errorsTitle;
    @FXML
    private JFXTextArea description;
    @FXML
    private Label errorsDescription;
    @FXML
    private JFXComboBox<String> categorie;
    @FXML
    private Label errorsCategorie_nom;
    @FXML
    private Button closeButton;

    public static int id_user;
    public static String mail_user;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {

        CategorieService categorieservice = new CategorieService();
        HashMap<String, Integer> mapCategorie = categorieservice.selectAll();

        for (String s : mapCategorie.keySet()) {
            categorie.getItems().add(s);
        }
        // TODO
    }

    @FXML
    private void ajouterPost(ActionEvent event) throws IOException {
        if (title.getText().equals("")) {
            errorsTitle.setText("Title field is required");
        } else if (description.equals("")) {
            errorsDescription.setText("Description field is required");
        } else if (categorie.getValue() == null) {
            errorsCategorie_nom.setText("Category field is required");
        } else {

            //Integer us = Integer.parseInt(user.getText());
            String tit = title.getText();
            String des = description.getText();
            Timestamp date = new Timestamp(System.currentTimeMillis());

            CategorieService c = new CategorieService();
            HashMap<String, Integer> mapCategorie = c.selectAll();
            int Categorie_id = mapCategorie.get(categorie.getValue());

            forum f = new forum(Categorie_id, WorldfriendshipController.recupererUtilisateurConnecte.getId_Utilisateur(), tit, des, date);
            id_user = f.getUser();
            Utilisateur u = new Utilisateur();
            u.setId_Utilisateur(id_user);
            mail_user = u.getEmail();

            ForumService fservice = new ForumService();

            fservice.insert(f);

        }
    }

    private void titleEvent(KeyEvent event) {
        errorsTitle.setText("");

    }

    private void descriptionEvent(KeyEvent event) {
        errorsDescription.setText("");

    }

    private void CategorieEvent(ActionEvent event) {
        errorsCategorie_nom.setText("");
    }

    @FXML
    private void closeButtonAction(ActionEvent event) {
        // get a handle to the stage
        Stage stage = (Stage) closeButton.getScene().getWindow();
        // do what you have to do

        stage.close();
    }
}
