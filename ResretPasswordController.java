/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev;

import java.io.IOException;
import java.net.URL;
import java.util.Properties;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.HBox;
import javafx.scene.paint.Color;
import javafx.stage.Stage;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;

import org.mindrot.jbcrypt.BCrypt;
import pidev.LoginController;
import service.UtilisateurService;


/**
 * FXML Controller class
 *
 * @author ASUS
 */
public class ResretPasswordController implements Initializable {

    
    @FXML
    private HBox btn_close;
    @FXML
    private HBox btn_close1;
    @FXML
    private TextField txt_mpo_email;
    @FXML
    private Button btnEnvoyer_mpo;
    @FXML
    private TextField txtcode;
    @FXML
    private Label lblErrors_code;
    @FXML
    private Label lblErrorsEmailMPO ;
    @FXML
    private Button btn_reset_password_code;
    @FXML
    private HBox btn_close_code;

    @FXML
    private AnchorPane GUI3;
    @FXML
    private TextField txt_mpo_res;
    @FXML
    private Label lblErrors_ResetPassword;
    @FXML
    private TextField txt_mpo_conf_res;
    @FXML
    private Button btn_renitialiser;
    @FXML
    private HBox btn_close_res;

    static String code;
    private static final String ALPHA_NUMERIC_STRING = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    static String username;
    UtilisateurService sl = new UtilisateurService();

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }

    @FXML
    private void handleButtonAction(MouseEvent event) throws MessagingException {
        if (event.getSource() == btn_close) {
            System.exit(0);
        }
        if (event.getSource() == btnEnvoyer_mpo) {
            System.out.println("envoi ...");
            MotdePasseOublierEmail(event);   
        }

    }

    private void AfficherFenetre(String nomFenere, String nomScene, MouseEvent event) {

        //add you loading or delays - ;-)
        Node node = (Node) event.getSource();
        Stage stage = (Stage) node.getScene().getWindow();
        //stage.setMaximized(true);
        // stage.close();
        Scene scene = null;
        try {
            scene = new Scene(FXMLLoader.load(getClass().getResource(nomFenere)));
        } catch (IOException ex) {
            Logger.getLogger(LoginController.class.getName()).log(Level.SEVERE, null, ex);
        }
    
        stage.setTitle(nomScene);
        stage.setScene(scene);
        stage.show();

    }

    private void MotdePasseOublierEmail(MouseEvent event) throws MessagingException {
        code = randomAlphaNumeric();
        String text = "Votre code de vérification est : " + code;
        username = txt_mpo_email.getText();
        String ut = sl.getUtilisateurUsername(username) ;
        System.out.println(ut);
        if (ut != null)
        {
            sendMail(ut, "Rénitialiser votre mot de passe", text);
            
            String nomFenere = "ResetCode.fxml";
            String nomScene = "Code";
            AfficherFenetre(nomFenere, nomScene, event);
        }else{
            lblErrorsEmailMPO.setText("Nom d'utilisateur introuvable");
        }
        //
    }

    public static String randomAlphaNumeric() {
        int count = 6;
        StringBuilder builder = new StringBuilder();
        while (count-- != 0) {
            int character = (int) (Math.random() * ALPHA_NUMERIC_STRING.length());
            builder.append(ALPHA_NUMERIC_STRING.charAt(character));
        }
        return builder.toString();
    }

    public void sendMail(String addresse, String subject, String message) throws MessagingException {
        String from = "kiddokidstunisie@gmail.com";
        String pass = "takwa2020";
        String[] to = {addresse};
        String host = "smtp.gmail.com";

        Properties prop = System.getProperties();
        prop.put("mail.smtp.starttls.enable", "true");
        prop.put("mail.smtp.host", host);
        prop.put("mail.smtp.user", from);
        prop.put("mail.smtp.password", pass);
        prop.put("mail.smtp.port", "587");
        prop.put("mail.smtp.auth", "true");
        prop.put("mail.smtp.ssl.trust", "smtp.gmail.com");
        prop.put("mail.smtp.host", "smtp.gmail.com");

        Session session = Session.getDefaultInstance(prop);
        MimeMessage meg = new MimeMessage(session);
        meg.setFrom(new InternetAddress(from));
        InternetAddress[] toadress = new InternetAddress[to.length];
        for (int i = 0; i < to.length; i++) {
            toadress[i] = new InternetAddress(to[i]);
        }

        for (int i = 0; i < to.length; i++) {
            meg.setRecipient(Message.RecipientType.TO, toadress[i]);
        }

        meg.setSubject(subject);
        meg.setContent(message, "text/html; charset=utf-8");
        Transport transport = session.getTransport("smtp");
        transport.connect(host, from, pass);
        transport.sendMessage(meg, meg.getAllRecipients());
        transport.close();

    }

    @FXML
    private void handleButtonAction2(MouseEvent event) {
        if (event.getSource() == btn_close_code) {
            System.exit(0);
        }
        if (event.getSource() == btn_reset_password_code) {
            if (txtcode.getText().equals(code)) {
                //System.out.println("Saisie :" + txtcode.getText());
                System.out.println("Code :" + code);
                lblErrors_code.setText("code verifier");
                lblErrors_code.setTextFill(Color.GREEN);
                String nomFenere = "ResetPassword.fxml";
                String nomScene = "Rénitialiser mot de passe";
                AfficherFenetre(nomFenere, nomScene, event);
            } else {
                lblErrors_code.setText("Code saisie incorrect veuiller réessayer");
            }
        }
    }

    @FXML
    private void handleButtonAction3(MouseEvent event) {
        if (event.getSource() == btn_close_res) {
            System.exit(0);
        }
        if (event.getSource() == btn_renitialiser) {
            String motpasse = txt_mpo_res.getText();
            String confMotpasse = txt_mpo_conf_res.getText();
            if (motpasse.isEmpty() || confMotpasse.isEmpty()) {
                lblErrors_ResetPassword.setText("Veuiller saisir les information");
            } else if (motpasse.equals(confMotpasse)) {

                System.out.println("Votre nouveau mot passe est :" + motpasse);
                System.out.println(" confiramation mot passe est :" + confMotpasse);

                String mdp = BCrypt.hashpw(confMotpasse, BCrypt.gensalt(13));
                mdp = mdp.replaceFirst("2a", "2y");
                System.out.println(username+"///" +mdp);
                sl.ResetPassword(username, mdp);
                String nomFenere = "LoginGUI.fxml";
                String nomScene = "Login";
                AfficherFenetre(nomFenere, nomScene, event) ;
            } else {
                lblErrors_ResetPassword.setText("le mot de passe ne correspond pas");
            }
        }
    }

}
