/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


import java.util.ArrayList;
import java.util.List;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.property.StringProperty;

/**
 *
 * @author manel
 */
public class Fichier
{
  
        StringProperty title;
        StringProperty description;

    public Fichier(String title, String description) {
        this.title = new SimpleStringProperty(title);
        this.description = new SimpleStringProperty(description);
    }
 
    public String getTitle() {
        return title.get();
    }
 
  

    public StringProperty titleProperty() {
        return title;
    }
      public StringProperty descriptionProperty() {
        return description;
    }

    
    public void setTitle(String value) {
        title.set(value);
    }
 
    public String getDescription() {
        return description.get();
    }

    public void setDescription(String value) {
        description.set(value);
    }

     
     

   
      
      
 }
