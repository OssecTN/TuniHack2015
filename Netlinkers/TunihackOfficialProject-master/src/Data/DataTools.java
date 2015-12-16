package Data;


import java.io.ByteArrayOutputStream;
import java.io.IOException;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
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
public class DataTools {
    int PROOFSIZE = 0 ; 
    
    public boolean verify (FileThread ft ) throws IOException, NoSuchAlgorithmException {
        ArrayList<byte[]> files = ft.getFiles() ; 
        ArrayList<byte[]> hashes = ft.getFiles() ; 
        ByteArrayOutputStream outputStream = new ByteArrayOutputStream( );
        for(int i = 0 ; i<files.size() ; i++){
             
             outputStream.write(sha1((byte[])files.get(i)));
             outputStream.write((byte[])hashes.get(i) );
             byte[]result = sha1(outputStream.toByteArray());
             for(int j = 0 ; j<PROOFSIZE ; j++){
                 if(result[i] !=0 )return false; 
             }
        }
        return true ; 
    }
    public boolean partialVerify (FileThread ft ) throws IOException, NoSuchAlgorithmException {
        ArrayList<byte[]> files = ft.getFiles() ; 
        ArrayList<byte[]> hashes = ft.getFiles() ; 

        for(int i = 0 ; i<files.size()-1 ; i++){
             ByteArrayOutputStream outputStream = new ByteArrayOutputStream( );
             outputStream.write(sha1((byte[])files.get(i)));
             outputStream.write((byte[])hashes.get(i) );
             byte[]result = sha1(outputStream.toByteArray());
             for(int j = 0 ; j<PROOFSIZE ; j++){
                 if(result[i] !=0 )return false; 
             }
        }
        return true ; 
    }
    
    public static byte[] sha1(byte[] input ) throws NoSuchAlgorithmException {
        MessageDigest mDigest = MessageDigest.getInstance("SHA1");
        return mDigest.digest( input );
      }
}
