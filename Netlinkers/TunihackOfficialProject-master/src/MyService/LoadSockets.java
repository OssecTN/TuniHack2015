package MyService;


import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Dark
 */
public class LoadSockets {
    public static ArrayList<Socket> clients  ; 
    public static ServerSocket host ; 
    public boolean init(){
        try {  
            
            Tools t = new Tools() ; 
            clients = t.getClientSockets(); 
            host = t.createServerSocket(3500);
            return true  ; 
            
        } catch (IOException ex) {
            Logger.getLogger(LoadSockets.class.getName()).log(Level.SEVERE, null, ex);
        }
        return false ;
    }
}
