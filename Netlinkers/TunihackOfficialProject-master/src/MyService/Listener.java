package MyService;


import Data.FileThread;
import java.io.IOException;
import java.io.InputStream;
import java.io.ObjectInputStream;
import java.net.ServerSocket;
import java.net.Socket;
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
public class Listener implements Runnable {
    public static boolean listen = true  ; 
    private boolean init() {
        while(listen){
            try { 
                Socket a = LoadSockets.host.accept() ;
                 new Thread(new Minion(a)).start() ; 
            } catch (IOException ex) {
                Logger.getLogger(Listener.class.getName()).log(Level.SEVERE, null, ex);
                return false ; 
            }
        }
        
        
        return true ; 
    }

    @Override
    public void run() {
        init() ; 
    }
    
    public class Minion implements Runnable {
        private Socket ss ; 
        public Minion(Socket s){
            ss = s ; 
        }
        public void run() {
            try {
        
            ObjectInputStream ois = null;
            InputStream is = ss.getInputStream();
            ois = new ObjectInputStream(is);
        
            while(listen){     
         
                FileThread ft = (FileThread)ois.readObject();    
                if (ft!=null){
                    P2PTransfer.Receive r  = new P2PTransfer.Receive() ; 
                    r.receive(ft) ; 
                }
            }    
            } catch (Exception ex) {
                Logger.getLogger(Listener.class.getName()).log(Level.SEVERE, null, ex);
        }
        }
    }
}
