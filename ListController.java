/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev;

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
import service.ServiceLogin;
import service.UtilisateurService;
import entite.Utilisateur;
import java.io.FileOutputStream;
import java.io.IOException;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.control.Dialog;
import javafx.stage.StageStyle;
import javax.swing.JFileChooser;
import utils.DataSource;
import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;



/**
 * FXML Controller class
 *
 * @author Takwa
 */
public class ListController implements Initializable {
    @FXML
    private BorderPane borderpane;
    @FXML
    private TableView<Utilisateur> listParents;
    private TableColumn<?, ?> id;
    @FXML
    private TableColumn<?, ?> nom;
    @FXML
    private TableColumn<?, ?> prenom;
    @FXML
    private TableColumn<?, ?> email;
    @FXML
    private TableColumn<?, ?> username;
    
     private XSSFWorkbook wb;
    private XSSFSheet sheet;
    private XSSFRow header;
    private ResultSet rs = null;

    ServiceLogin utilisateurService = new ServiceLogin();
   
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
      Connection con = null;
         ServiceLogin utilisateurService = new  ServiceLogin();
        ArrayList arrayList = (ArrayList) utilisateurService.ListUtilisateur();
        
   
        
        ObservableList observableList = FXCollections.observableArrayList(arrayList);
        ;
    
//        id.setCellValueFactory(new PropertyValueFactory<>("id_Utilisateur"));
        nom.setCellValueFactory(new PropertyValueFactory<>("nom"));
        prenom.setCellValueFactory(new PropertyValueFactory<>("prenom"));
        email.setCellValueFactory(new PropertyValueFactory<>("email"));
        username.setCellValueFactory(new PropertyValueFactory<>("nom_Utilisateur"));
        
        
        listParents.setItems(observableList);

        // TODO
    }    
    
    private int index() {
        int selectedItem = listParents.getSelectionModel().getSelectedItem().getId_Utilisateur();
        int selectedIndex = listParents.getSelectionModel().getSelectedIndex();
        System.out.println(selectedItem);
        return selectedItem;
    }
    
    
    @FXML
    private void supprimer(ActionEvent event) {
        int x = index();
        Alert a1 = new Alert(Alert.AlertType.WARNING);
        a1.setTitle("Supprimer parent");
        a1.setContentText("Vous voulez vraiment supprimer ce parent ?");
        Optional<ButtonType> result = a1.showAndWait();
        if (result.get() == ButtonType.OK) {
            utilisateurService.supprimer(x);
            Alert a2 = new Alert(Alert.AlertType.INFORMATION);
            a2.setTitle("Supprimer parent");
            a2.setContentText("Parent supprimé avec succés!");
            a2.show();

            listParents.getItems().clear();
            listParents.getItems().addAll(utilisateurService.ListUtilisateur());

        } else {
            a1.close();
        }
    }

    @FXML
    private void modifier(ActionEvent event) {
        try {
            Utilisateur u = listParents.getSelectionModel().getSelectedItem();
            FXMLLoader Loader = new FXMLLoader();
            Loader.setLocation(getClass().getResource("ModifierUnUtilisateur.fxml"));
            Parent p = Loader.load();
            ModifierUtilisateurController display = Loader.getController();
            display.setUtilisateur(u);
            Dialog dialog = new Dialog();
            dialog.getDialogPane().setContent(p);
            dialog.initStyle(StageStyle.UNDECORATED);
            dialog.show();
        } catch (IOException ex) {
            Logger.getLogger(ListController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void exporter(ActionEvent event) throws SQLException, IOException {
        String role = "a:1:{i:0;s:11:\"ROLE_PARENT\";}";
        String query = "select * from `fos_user` where roles =" + "'" + role + "'";
        Connection con = ServiceLogin.creationConnexion();
        String qry = "select * from fos_user where roles =" + "'" + role + "'";
        ResultSet rs = con.createStatement().executeQuery(qry);
        System.out.println("kk");
        int i = 1;
        wb = new XSSFWorkbook();
        System.out.println("n");
        
        
        
        
        
        
        
        
        
        sheet = wb.createSheet("Parents Details");
        System.out.println("d");
        header = sheet.createRow(0);
        System.out.println("f");
        header.createCell(1).setCellValue("Nom");
        header.createCell(2).setCellValue("Prénom");
        header.createCell(3).setCellValue("Nom d'utilisateur ");
        header.createCell(4).setCellValue("E-Mail");
        header.createCell(5).setCellValue("Status");
        System.out.println("4");
        while (rs.next()) {
            System.out.println("9");
            XSSFRow row = sheet.createRow(i);
            System.out.println("o");
            row.createCell(0).setCellValue(rs.getInt("id"));
            System.out.println("qs");
            row.createCell(1).setCellValue(rs.getString("nom"));
            row.createCell(2).setCellValue(rs.getString("prenom"));
            row.createCell(3).setCellValue(rs.getString("username"));
            row.createCell(4).setCellValue(rs.getString("email"));
  
            int enabled = rs.getInt("enabled");
            String state;
            if (enabled == 1) {
                state = "Activer";
            } else {
                state = "Désactiver";
            }
            row.createCell(5).setCellValue(state);
            i++;
        }
        JFileChooser chooser = new JFileChooser();
        chooser.setCurrentDirectory(new java.io.File("."));
        chooser.setDialogTitle("choose title");
        chooser.setFileSelectionMode(JFileChooser.DIRECTORIES_ONLY);
        chooser.setAcceptAllFileFilterUsed(false);
        if (chooser.showOpenDialog(null) == JFileChooser.APPROVE_OPTION) {
            System.out.println("getCurrentDirectory(): " + chooser.getCurrentDirectory());
            System.out.println("getSelectedFile() : " + chooser.getSelectedFile());
            System.out.println("dd");
            
       
            
            FileOutputStream fileOut = new FileOutputStream(chooser.getSelectedFile() + "\\Parents.xlsx");
            System.out.println("qs");
            wb.write(fileOut);
            fileOut.close();
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Information Dialog");
            alert.setHeaderText(null);
            alert.setContentText("La liste des Parents en format Exel a été exporter .");
            alert.showAndWait();
            
            rs.close();
        } else {
             System.out.println("No Selection ");
        }

    }
    }

