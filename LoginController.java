package pidev;

import java.util.HashMap;
import java.util.List;
import java.util.Map;

import entite.Utilisateur;
import java.io.IOException;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;

import service.ServiceLogin;
import javafx.scene.Node;
import javafx.scene.Scene;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;

public class LoginController {

    private AnchorPane GUI;
    /* utilisateur inscri + login */
    @FXML
    private TextField inscription_nom_utilisateur_fx;

    @FXML
    private PasswordField inscription_mot_de_passe_utilisateur_fx;

    @FXML
    private TextField inscription_email_utilisateur_fx;

    private TextField login_nom_utilisateur_fx;

    private TextField login_mot_de_passe_utilisateur_fx;

    /* end utilisateur */
    /**
     * design login *
     */
    double x = 0;
    double y = 0;

    void dragged(MouseEvent event) {
        Node node = (Node) event.getSource();
        Stage stage = (Stage) node.getScene().getWindow();
        stage.setX(event.getScreenX() - x);
        stage.setY(event.getScreenY() - y);

    }

    void pressed(MouseEvent event) {
        x = event.getSceneX();
        y = event.getSceneY();
    }

    /**
     * en d design login *
     */
    @FXML
    void Inscription(ActionEvent event) {

        String nomUtilisateur = inscription_nom_utilisateur_fx.getText();
        String motDePasseUtilisateur = inscription_mot_de_passe_utilisateur_fx.getText();

        String emailUtilisateur = inscription_email_utilisateur_fx.getText();
         
        Utilisateur utilisateur = new Utilisateur();
        utilisateur.setNom_Utilisateur(nomUtilisateur);
        utilisateur.setMotDePasse_Utilisateur(motDePasseUtilisateur);
        utilisateur.setEmail(emailUtilisateur);

        int status = ServiceLogin.Inscription(utilisateur);

        if (status > 0) {
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setHeaderText(null);
            alert.setContentText("vous etre inscrit AVEC SUCCES");
            alert.showAndWait();
            return;

        } else {
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setHeaderText(null);
            alert.setContentText("ERREUR D'inscription");
            alert.showAndWait();
        }
    }

    void connexionUtilisateur(ActionEvent event) throws IOException {

        if (login_nom_utilisateur_fx.getText().isEmpty()) {
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setHeaderText(null);
            alert.setContentText("nom d'utilisateur est vide");
            alert.showAndWait();
            return;

        } else if (login_mot_de_passe_utilisateur_fx.getText().isEmpty()) {

            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setHeaderText(null);
            alert.setContentText("mot de passe est vide");
            alert.showAndWait();
        }

        List<Utilisateur> listUtilisateur = ServiceLogin.getTtUtilisateur();
        HashMap<String, String> hashmapUtilisateur = new HashMap<>();

        for (Utilisateur utilisateur : listUtilisateur) {
            hashmapUtilisateur.put(utilisateur.getNom_Utilisateur(), utilisateur.getMotDePasse_Utilisateur());
        }

        /**
         * test *
         */
        for (Map.Entry<String, String> Uti : hashmapUtilisateur.entrySet()) {
            System.out.println(Uti.getKey() + " / " + Uti.getValue());

        }

        String nomUtilisater = login_nom_utilisateur_fx.getText();
        String motDePasseUtilisateur = login_mot_de_passe_utilisateur_fx.getText();
        for (Map.Entry<String, String> Uti : hashmapUtilisateur.entrySet()) {
            if (nomUtilisater.equals(Uti.getKey())) {
                if (ServiceLogin.testMotDePasse(motDePasseUtilisateur, Uti.getValue())) {
                    Utilisateur utilisateur = ServiceLogin.getUtilisateur(Uti.getKey());
                    if (utilisateur.getRole_Utilisateur().equals("a:0:{}")) {
                        
                        Stage stage = (Stage) GUI.getScene().getWindow();
                        stage.close();
                        
                        System.out.println("vous etre connecté entant qu'utilisateur");
                        System.out.println(ServiceLogin.getUtilisateur(Uti.getKey()).getId_Utilisateur());

                        FXMLLoader loader = new FXMLLoader(getClass().getResource("worldfriendship.fxml"));
                        Parent root = loader.load();
                        WorldfriendshipController controller = (WorldfriendshipController) loader.getController();
                        controller.recupererUtilisateurConnecte = (ServiceLogin.getUtilisateur(Uti.getKey()));

                        Stage primaryStage = new Stage();
                        Scene scene = new Scene(root);
                        scene.getStylesheets().add(getClass().getResource("login.css").toExternalForm());
                        primaryStage.setScene(scene);
                        primaryStage.show();
                        return;
                    } else {
                        System.out.println("vous etre connecté entant qu'admin");
                        System.out.println(ServiceLogin.getUtilisateur(Uti.getKey()).getId_Utilisateur());

                        FXMLLoader loader = new FXMLLoader(getClass().getResource("DashboardGUI.fxml"));
                        Parent root = loader.load();
                        DashboardGUIController controller = (DashboardGUIController) loader.getController();
                        controller.recupererUtilisateurConnecte = (ServiceLogin.getUtilisateur(Uti.getKey()));

                        Stage primaryStage = new Stage();
                        Scene scene = new Scene(root);
                        scene.getStylesheets().add(getClass().getResource("login.css").toExternalForm());
                        primaryStage.setScene(scene);
                        primaryStage.show();
                        return;
                    }

                } else {
                    Alert alert = new Alert(Alert.AlertType.INFORMATION);
                    alert.setHeaderText(null);
                    alert.setContentText("mot de passe incorrect");
                    alert.showAndWait();
                    return;
                }
            }
        }
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setHeaderText(null);
        alert.setContentText("nom incorrect");
        alert.showAndWait();

    }

    public void CreerCompte(ActionEvent even) throws IOException {
        try {
            Stage primaryStage = new Stage();
            Parent root = FXMLLoader.load(getClass().getResource("InscriptionGUI.fxml"));
            Scene scene = new Scene(root);
            scene.getStylesheets().add(getClass().getResource("login.css").toExternalForm());
            primaryStage.setScene(scene);
            primaryStage.show();
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    private void quitter() {
        // get a handle to the stage
        Stage stage = (Stage) GUI.getScene().getWindow();
        // do what you have to do
        stage.close();
    }
}
