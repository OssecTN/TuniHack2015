package P2PTransfer;


import Data.FileThread;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.*;
import java.math.BigInteger;
import java.net.Socket;
import java.security.NoSuchAlgorithmException;
import java.security.SecureRandom;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Dark
 */
public class Upload {
    private ObjectOutputStream outputStream = null;
    
    public void broadCast( Socket[] s , FileThread ft ) throws IOException{
        for ( int i =0 ; i< s.length  ; i++){
            outputStream = new ObjectOutputStream(s[i].getOutputStream());
            outputStream.writeObject(ft);
        }
        
    }
       
}
