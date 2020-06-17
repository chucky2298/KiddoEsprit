/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev;

import entite.forum;
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
import service.ForumService;

/**
 * FXML Controller class
 *
 * @author Moez
 */
public class ListQuestionController implements Initializable {

    @FXML
    private BorderPane borderpane;
    
    public TableView<forum> listPosts;
    @FXML
    private TableColumn<?, ?> id;
    @FXML
    private TableColumn<?, ?> id_Cat;
    @FXML
    private TableColumn<?, ?> id_User;
    @FXML
    private TableColumn<?, ?> title;
    @FXML
    private TableColumn<?, ?> description;
    @FXML
    private TableColumn<?, ?> date;
    ForumService forumService = new ForumService();
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        
        ForumService forumService = new ForumService();
        ArrayList arrayList = (ArrayList) forumService.ListQuestion();
        
   
        
        ObservableList observableList = FXCollections.observableArrayList(arrayList);
        
        id.setCellValueFactory(new PropertyValueFactory<>("id"));
        id_Cat.setCellValueFactory(new PropertyValueFactory<>("idCategorie"));
        id_User.setCellValueFactory(new PropertyValueFactory<>("user"));
        title.setCellValueFactory(new PropertyValueFactory<>("title"));
        description.setCellValueFactory(new PropertyValueFactory<>("description"));
        date.setCellValueFactory(new PropertyValueFactory<>("date"));
        
        listPosts.setItems(observableList);

        // TODO
    }    
    
    private int index() {
        int selectedItem = listPosts.getSelectionModel().getSelectedItem().getId();
        int selectedIndex = listPosts.getSelectionModel().getSelectedIndex();
        System.out.println(selectedItem);
        return selectedItem;
    }
    
    
    @FXML
    private void supprimer(ActionEvent event) {
        int x = index();
        Alert a1 = new Alert(Alert.AlertType.WARNING);
        a1.setTitle("Supprimer question");
        a1.setContentText("Vous voulez vraiment supprimer cet question ?");
        Optional<ButtonType> result = a1.showAndWait();
        if (result.get() == ButtonType.OK) {
            forumService.supprimer(x);
            Alert a2 = new Alert(Alert.AlertType.INFORMATION);
            a2.setTitle("Supprimer question");
            a2.setContentText("Question supprimé avec succés!");
            a2.show();

            listPosts.getItems().clear();
            listPosts.getItems().addAll(forumService.ListQuestion());

        } else {
            a1.close();
        }
    }

    
    
    
}
