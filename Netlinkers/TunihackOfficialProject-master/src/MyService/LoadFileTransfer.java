package MyService;


import Data.FileThread;
import java.io.File;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.util.ArrayList;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Dark
 */
public class LoadFileTransfer {
   public static ArrayList<FileThread> memory ; 
    
    public void init() throws IOException, ClassNotFoundException{
        File[] children = new File(".").listFiles();
        if (children != null) {
        for (File child : children) {
            if(child.getName().indexOf(".ser")>0){
                FileInputStream inputFileStream = new FileInputStream("ser/emp.ser");
                ObjectInputStream objectInputStream = new ObjectInputStream(inputFileStream);
                memory.add((FileThread)objectInputStream.readObject());
                objectInputStream.close();
                inputFileStream.close();    
            }
        }
    }
              
    }
    
}
