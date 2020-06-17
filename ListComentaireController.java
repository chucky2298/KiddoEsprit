/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev;

import entite.comment;
import java.net.URL;
import java.util.ArrayList;
import java.util.Optional;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.ButtonType;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.layout.BorderPane;
import service.CommentService;
import service.ForumService;

/**
 * FXML Controller class
 *
 * @author Moez
 */
public class ListComentaireController implements Initializable {

    @FXML
    private BorderPane borderpane;
    
    public TableView<comment> listCommentaires;
    @FXML
    private TableColumn<?, ?> id;
    @FXML
    private TableColumn<?, ?> id_Ques;
    @FXML
    private TableColumn<?, ?> id_User;
    @FXML
    private TableColumn<?, ?> description;
    @FXML
    private TableColumn<?, ?> date;
    CommentService commentService = new CommentService();

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        CommentService commentService = new CommentService();
        ArrayList arrayList = (ArrayList) commentService.ListCommentaire();
        
   
        
        ObservableList observableList = FXCollections.observableArrayList(arrayList);
        
        id.setCellValueFactory(new PropertyValueFactory<>("idCommentaire"));
        id_Ques.setCellValueFactory(new PropertyValueFactory<>("idForum"));
        id_User.setCellValueFactory(new PropertyValueFactory<>("user"));
        description.setCellValueFactory(new PropertyValueFactory<>("contenu"));
        date.setCellValueFactory(new PropertyValueFactory<>("date"));
        
        listCommentaires.setItems(observableList);
    }    
    
    private int index() {
        int selectedItem = listCommentaires.getSelectionModel().getSelectedItem().getIdCommentaire();
        int selectedIndex = listCommentaires.getSelectionModel().getSelectedIndex();
        System.out.println(selectedItem);
        return selectedItem;
    }
    
    @FXML
    private void supprimer(ActionEvent event) {
        int x = index();
        Alert a1 = new Alert(Alert.AlertType.WARNING);
        a1.setTitle("Supprimer commentaire");
        a1.setContentText("Vous voulez vraiment supprimer cet commentaire ?");
        Optional<ButtonType> result = a1.showAndWait();
        if (result.get() == ButtonType.OK) {
            commentService.supprimer(x);
            Alert a2 = new Alert(Alert.AlertType.INFORMATION);
            a2.setTitle("Supprimer commentaire");
            a2.setContentText("Commentaire supprimé avec succés!");
            a2.show();

            listCommentaires.getItems().clear();
            listCommentaires.getItems().addAll(commentService.ListCommentaire());

        } else {
            a1.close();
        }
        
    }
}
