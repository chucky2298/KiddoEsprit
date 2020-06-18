/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev;

import com.jfoenix.controls.JFXTextArea;
import entite.forum;
import java.io.IOException;
import java.net.URL;
import java.util.Optional;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import service.ForumService;

/**
 * FXML Controller class
 *
 * @author Moez
 */
public class ModifierPostController implements Initializable {

    @FXML
    private TextField title;
    @FXML
    private JFXTextArea description;
    @FXML
    private TextField idModifier;

    private forum forum;

    ForumService forumService = new ForumService();
    @FXML
    private Button closeButton;
    @FXML
    private Label errorsTitle;
    @FXML
    private Label errorsDescription;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {

        // TODO
    }

    @FXML
    private void modifier(ActionEvent event) throws IOException {

        ForumService fs = new ForumService();
        String a = title.getText();
        String b = description.getText();
        int id = Integer.valueOf(idModifier.getText());

        Alert a1 = new Alert(Alert.AlertType.CONFIRMATION);
        a1.setTitle("Modifier une experience");
        a1.setContentText("vous voulez vraiment Mdofier cette post?");
        Optional<ButtonType> result = a1.showAndWait();
        if (result.get() == ButtonType.OK) {
            AnchorPane pane = FXMLLoader.load(getClass().getResource("ListPosts.fxml"));
            fs.modifier(id, a, b);

        } else if (result.get() == ButtonType.CANCEL) {
            AnchorPane pane = FXMLLoader.load(getClass().getResource("ListPosts.fxml"));

        }

    }

    public void setForum(forum fo) {
        forum = fo;
        idModifier.setText(String.valueOf(fo.getId()));
        description.setText(fo.getDescription());
        title.setText(fo.getTitle());

    }

    @FXML
    private void closeButtonAction(ActionEvent event) {
        // get a handle to the stage
        Stage stage = (Stage) closeButton.getScene().getWindow();
        // do what you have to do
        stage.close();
    }

}
