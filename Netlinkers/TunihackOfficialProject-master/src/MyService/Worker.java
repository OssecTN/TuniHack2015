package MyService;


import ProofOfWork.Creator;
import Data.FileThread;
import java.io.IOException;
import java.net.Socket;
import java.security.NoSuchAlgorithmException;
import java.util.logging.Level;
import java.util.logging.Logger;
import jdk.net.Sockets;
import P2PTransfer.* ; 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Dark
 */
public class Worker {
    public boolean Add(byte[] file , String title  ,  String desc , String id ) {
        Creator c = new Creator () ; 
        try { 
            String proof = c.getProof(file) ;
            FileThread ft = new FileThread( file , proof.getBytes() , ".txt") ;
            ft.setMeta(title, desc ,id);
            P2PTransfer.Upload u = new P2PTransfer.Upload() ; 
            u.broadCast((Socket[])LoadSockets.clients.toArray(), ft);
            P2PTransfer.Receive.save(ft);
            return true  ; 
        } catch (NoSuchAlgorithmException ex) {
            Logger.getLogger(Worker.class.getName()).log(Level.SEVERE, null, ex);
        } catch (IOException ex) {
            Logger.getLogger(Worker.class.getName()).log(Level.SEVERE, null, ex);
        }
        return false; 
    }
    
    public boolean Add(byte []file , FileThread ft ){
        ft.Add(file);
        Upload u = new Upload() ; 
        try {
            u.broadCast((Socket[])LoadSockets.clients.toArray(), ft);
            return true  ; 
        } catch (IOException ex) {
            Logger.getLogger(Worker.class.getName()).log(Level.SEVERE, null, ex);
        }
        return false  ; 
    }
}
