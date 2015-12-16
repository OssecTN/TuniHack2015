package ProofOfWork;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Dark
 */ 
import java.io.ByteArrayOutputStream;
import java.io.IOException;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.util.ArrayList;

public class Creator { 
       
      public String getProof(byte[] file )throws NoSuchAlgorithmException, IOException{
          String proof = (char)0+"" ; 
          byte result[] ; 
          while (true){  
            ByteArrayOutputStream outputStream = new ByteArrayOutputStream( );
            outputStream.write( PTools.sha1(file) );
            outputStream.write(proof.getBytes());
            result = PTools.sha1(outputStream.toByteArray());
            boolean fail = false ; 
            for(int i = 0 ; i< Requirements.PROOFSIZE ; i++){
                if(result[i] != 0 ){
                    proof = PTools.next(proof) ; 
                    fail = true ; 
                }
            }
            if(!fail){
                return proof ; 
            }; 
          }
      }
      
      public String getProof(ArrayList<byte[]> files , ArrayList<byte []> hashes) throws IOException, NoSuchAlgorithmException{
        ByteArrayOutputStream outputStream = new ByteArrayOutputStream( );
        for(int i = 0 ; i<files.size()-1 ; i++){
         
             outputStream.write(PTools.sha1((byte[])files.get(i)));
             if(i<files.size()-1)outputStream.write((byte[])hashes.get(i) );
         }
        String proof = (char)0+"" ; 
        while (true){  
            ByteArrayOutputStream osTemp = new ByteArrayOutputStream( );
            osTemp.write( outputStream.toByteArray());
            outputStream.write(proof.getBytes());
            byte[] result = PTools.sha1(outputStream.toByteArray());
            boolean fail = false ; 
            for(int i = 0 ; i< Requirements.PROOFSIZE ; i++){
                if(result[i] != 0 ){
                    proof = PTools.next(proof) ; 
                    fail = true ; 
                }
            }
            
            if(!fail) return proof ; 
        }
      }
      
     
}
