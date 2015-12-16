/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


import java.util.ArrayList;
import java.util.List;
import javafx.application.Application;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ListCell;
import javafx.scene.control.ListView;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.StackPane;
import javafx.stage.Stage;
import javafx.util.Callback;

/**
 *
 * @author manel
 */
public class FinalLastTest extends Application {
      private BorderPane rootLayout;
           List<Fichier> myFiles;

     @Override
    public void start(Stage stage) throws Exception {
         
        prepareMyList();
         ListView<Fichier> listView = new ListView<>();
         ObservableList<Fichier> myObservableList = FXCollections.observableList(myFiles);
        listView.setItems(myObservableList);
     
 
        Parent root = FXMLLoader.load(getClass().getResource("FXML.fxml"));
 
        Scene scene = new Scene(root);
        
        stage.setScene(scene);
        stage.show();
    }
    

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);
    }
    
       
      private void   prepareMyList()
      {
      myFiles=new ArrayList<>();
      myFiles.add(new Fichier("blaba","5orma"));
      myFiles.add(new Fichier("blaba","5orma"));
      myFiles.add(new Fichier("blaba","5orma"));
      myFiles.add(new Fichier("blaba","5orma"));
      }
    
}
