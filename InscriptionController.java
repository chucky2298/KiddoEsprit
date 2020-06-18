/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.Properties;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.regex.Matcher;
import java.util.regex.Pattern;
import javafx.collections.FXCollections;
import static javafx.collections.FXCollections.observableArrayList;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.Label;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.input.KeyEvent;
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
import javax.swing.JOptionPane;
import org.mindrot.jbcrypt.BCrypt;
import service.ServiceLogin;
import service.UtilisateurService;
import utils.DataSource;

/**
 * FXML Controller class
 *
 * @author Takwa
 */
public class InscriptionController implements Initializable {

    ObservableList<String> maritalStatusList = FXCollections.observableArrayList("parent", "enseignant");
    @FXML
    private TextField inscription_nom_utilisateur_fx;
    @FXML
    private TextField inscription_email_utilisateur_fx;
    @FXML
    private Button inscri;
    static String code;
    private static final String ALPHA_NUMERIC_STRING = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    @FXML
    private PasswordField inscription_mot_de_passe_utilisateur_fx;
    @FXML
    private TextField inscription_nom_fx;
    @FXML
    private TextField inscription_prenom_utilisateur_fx;
    @FXML
    private ChoiceBox<String> inscription_role_fx;
   
    static String nomFenere;
    static String nomScene;
    static String status = "Success";

    static String nomUtilisateur;
    static String motDePasseUtilisateur;
    static String nom;
    static String prenomUtilisateur;
    static String emailUtilisateur;
    static String mdp;
    static String role;
    
    @FXML
    private TextField txtcode;
    @FXML
    private Label lblErrors_code;
    @FXML
    private Button btn_verif_code;
    @FXML
    private Label erreur;
    @FXML
    private HBox btn_close_code;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        inscription_role_fx.setItems(maritalStatusList);

    }

    @FXML
    private void Inscription(ActionEvent event) throws MessagingException {
        if (event.getSource() == inscri) {

            signeUp(event);
        }
           
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

    public void signeUp(ActionEvent event) {
         nomUtilisateur = inscription_nom_utilisateur_fx.getText();
         motDePasseUtilisateur = inscription_mot_de_passe_utilisateur_fx.getText();

         emailUtilisateur = inscription_email_utilisateur_fx.getText();
         nom = inscription_nom_fx.getText();
         prenomUtilisateur = inscription_prenom_utilisateur_fx.getText();

        
        System.out.println(role);
        
        if (inscription_role_fx.getValue().toString().equals("enseignant") ){
             role = " a:1:{i:0;s:11:\"ROLE_CLIENT\";}" ;
        }else{
            role ="a:1:{i:0;s:11:\"ROLE_PARENT\";}" ;
        }
        
         mdp = BCrypt.hashpw(motDePasseUtilisateur, BCrypt.gensalt(13));
        mdp = mdp.replaceFirst("2a", "2y");
        Connection con = null;
        con = DataSource.getInstance().getConnection();
        PreparedStatement preparedStatement = null;
        Pattern p = Pattern.compile("[a-zA-Z]+");
        Matcher m = p.matcher(inscription_nom_fx.getText());

        //Utilisateur utilisateur = new Utilisateur();
        if (nomUtilisateur.isEmpty() || motDePasseUtilisateur.isEmpty() || emailUtilisateur.isEmpty() || nom.isEmpty() || prenomUtilisateur.isEmpty()) {
          erreur.setText("Verifier votre saisire....");
          status  = "ERROR";
          
        }
        else if(!emailUtilisateur.matches(".+@.+\\.[a-z]+")){
            erreur.setText("Email invalide");
            status = "Error";
        } 
        else if(!nom.matches( "[a-zA-Z]*" ) || nom.length() < 3){
            erreur.setText("Nom invalide");
            status = "Error";
        } 
        else if(!prenomUtilisateur.matches( "[a-zA-Z]*" ) || prenomUtilisateur.length() < 3){
            erreur.setText("Prenom invalide");
            status = "Error";
        }
        else 
        {
            code = randomAlphaNumeric();
            
            System.out.println("clode 1::" +code);
            String text = "Votre code de vérification est : " + code;
            String ut = inscription_email_utilisateur_fx.getText();
            try {
                sendMail(ut, "Validation de votre adresse mail", text);
            } catch (MessagingException ex) {
                Logger.getLogger(InscriptionController.class.getName()).log(Level.SEVERE, null, ex);
            }
            
            
             System.out.println("TEST 0");
            try {
                System.out.println("TEST");
                //add you loading or delays - ;-)
                Node node = (Node) event.getSource();
                Stage stage = (Stage) node.getScene().getWindow();
                //stage.setMaximized(true);
                //  stage.close();
                
            System.out.println("clode 2::" +code);
                Scene scene = new Scene(FXMLLoader.load(getClass().getResource("VerifierInscriMail.fxml")));

            System.out.println("clode 3::" +code);
                stage.setTitle("Verification");
                stage.setScene(scene);
                stage.show();

            } catch (IOException ex) {
                System.err.println(ex.getMessage());
            }
        
    

            
        }

    }

    private void sendSms(String phone) {
        // TODO Auto-generated method stub
        try {
            // Construct data
            String apiKey = "apikey=" + "yourapiKey";
            String message = "&message=" + "This is your message";
            String sender = "&sender=" + "Jims Autos";
            String numbers = "&numbers=" + "21696925117";

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
                //stringBuffer.append(line);
                JOptionPane.showMessageDialog(null, "message" + line);
            }
            rd.close();

            //return stringBuffer.toString();
        } catch (Exception e) {
            //System.out.println("Error SMS "+e);
            JOptionPane.showMessageDialog(null, e);
            //return "Error "+e;
        }

    }
    
    
    @FXML
    private void handleButtonAction22(MouseEvent event) {
        
            System.out.println("clode 4::" +code);
            
            System.out.println("clode sais::" +txtcode.getText());
            if (txtcode.getText().equals(code)) {
                try {
                    System.out.println("Code :" + code);
                    lblErrors_code.setText("code verifier");
                    lblErrors_code.setTextFill(Color.GREEN);
                    UtilisateurService sl = new UtilisateurService();
                    System.out.println(nomUtilisateur);
                    sl.Inscription(nomUtilisateur, nom, prenomUtilisateur, emailUtilisateur, mdp, role);
                   // clearFields();

                    //add you loading or delays - ;-)
                    Node node = (Node) event.getSource();
                    Stage stage = (Stage) node.getScene().getWindow();
                    //stage.setMaximized(true);
                    stage.close();
                    Scene scene = new Scene(FXMLLoader.load(getClass().getResource("LoginGUI.fxml")));

                    stage.setTitle("Se connecter");
                    stage.setScene(scene);
                    stage.show();
                } catch (IOException ex) {
                    Logger.getLogger(InscriptionController.class.getName()).log(Level.SEVERE, null, ex);
                }

            }
         else {
            lblErrors_code.setText("Code saisie incorrect veuiller réessayer");
        }
    }
    
    @FXML
    private void handleButtonAction2(MouseEvent event) throws IOException {
        //add you loading or delays - ;-)
        Node node = (Node) event.getSource();
        Stage stage = (Stage) node.getScene().getWindow();
        //stage.setMaximized(true);
        stage.close();
        Scene scene = new Scene(FXMLLoader.load(getClass().getResource("LoginGUI.fxml")));

        stage.setTitle("Se connecter");
        stage.setScene(scene);
        stage.show();

    }

}
