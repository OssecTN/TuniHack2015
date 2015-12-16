/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


import java.io.File;
import java.io.IOException;
import java.net.Socket;
import java.net.URL;
import java.nio.file.Files;
import java.security.NoSuchAlgorithmException;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.TextField;
import javafx.stage.FileChooser;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author manel
 */
public class HomeController implements Initializable {
    
    private boolean okClicked = false;
    @FXML
    private TextField firstNameField;
   
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
         
    }    
     public void handleIt() throws NoSuchAlgorithmException, IOException{
        FileChooser fileChooser = new FileChooser();
        fileChooser.setTitle("Open Resource File");
        File f = fileChooser.showOpenDialog(new Stage());
        if(f != null ){
            byte [] ff = Files.readAllBytes(f.toPath());
              //u.broadCast((Socket[])ls.clients.toArray(), ft);
            Alert a = new Alert(Alert.AlertType.INFORMATION,"File was Sent" )  ;
            a.setTitle("Success");
            a.setHeaderText("Success");
            a.show();
        }
     }
        public void ShowDetails()
        {
            
        }
        public void Download()
        {}
    
}
