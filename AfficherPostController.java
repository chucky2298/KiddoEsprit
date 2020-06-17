/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev;

import entite.comment;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.sql.Timestamp;
import java.time.LocalDate;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Dialog;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.TextField;
import javafx.stage.StageStyle;
import service.CommentService;

/**
 * FXML Controller class
 *
 * @author Moez
 */
public class AfficherPostController implements Initializable {

    @FXML
    public ListView<String> ListView_commentaire;

    @FXML
    private TextField commentaire_text_fx;

    @FXML
    public Label nomForum;

    /**
     * Initializes the controller class.
     */
    public String forum;
    //private forum forum;

    @Override
    public void initialize(URL url, ResourceBundle rb) {

    }

    public int idForumRecuperer;
        
    @FXML
    public void ajouterCommentaire() {

        nomForum.setText(forum);
        Timestamp date = new Timestamp(System.currentTimeMillis());
        CommentService cs = new CommentService();
        String contenueCommentaireEvenement = commentaire_text_fx.getText();

        ListView_commentaire.getItems().add(LocalDate.now() + "   Utilisateur " + WorldfriendshipController.recupererUtilisateurConnecte.getNom_Utilisateur() + " Contenu " + contenueCommentaireEvenement);
        comment commentaire = new comment(idForumRecuperer, WorldfriendshipController.recupererUtilisateurConnecte.getId_Utilisateur(), contenueCommentaireEvenement);
        cs.ajouterCommentaireForum(commentaire);
        commentaire_text_fx.clear();
        String phonee = AjouterPostsController.mail_user;
        //String phonee ="23911535";
        //*** API SMS
        
        sendSms(phonee);
    }

    private void sendSms(String phone) {
        // TODO Auto-generated method stub
        try {
            // Construct data
            String apiKey = "apikey=MfkkwMIH6Qg-6snwHbwPtODWkEwFf6RnIkIaw8XRW5";
            String message = "&message=" + "Tu as un commentaire sur votre question ";
            String sender = "&sender=" + "worldfriend";
            String numbers = "&numbers=+216"+ phone ;

            // Send data
            HttpURLConnection conn = (HttpURLConnection) new URL("https://api.txtlocal.com/send/?").openConnection();
            String data = apiKey + numbers + message + sender;
            conn.setDoOutput(true);
            conn.setRequestMethod("POST");
            conn.setRequestProperty("Content-Length", Integer.toString(data.length()));
            conn.getOutputStream().write(data.getBytes("UTF-8"));
            final BufferedReader rd = new BufferedReader(new InputStreamReader(conn.getInputStream()));
            final StringBuffer stringBuffer = new StringBuffer();
            String line;
            while ((line = rd.readLine()) != null) {
                stringBuffer.append(line);
            }
            rd.close();
            System.out.println("ghjdksxjvkjvj");

        } catch (Exception e) {
            System.out.println("Error SMS " + e);
        }

    }
    /*
    @FXML
    private void modifier(ActionEvent event) throws IOException {

        comment co = ListView_commentaire.getSelectionModel().getSelectedItem();
        FXMLLoader Loader = new FXMLLoader();
        Loader.setLocation(getClass().getResource("ModifierComment.fxml"));
        Parent p = Loader.load();

        ModifierPostController display = Loader.getController();
        display.setComment(co);
        Dialog dialog = new Dialog();
        dialog.getDialogPane().setContent(p);
        dialog.initStyle(StageStyle.UNDECORATED);
        dialog.show();
    }
    
    */
    
    

    //****
}
