package ProofOfWork;


import java.io.ByteArrayOutputStream;
import java.io.IOException;
import java.security.NoSuchAlgorithmException;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Dark
 */
public class Verifier {
    
    
    public boolean verify( byte[] file , String proof) throws IOException, NoSuchAlgorithmException{
        ByteArrayOutputStream outputStream = new ByteArrayOutputStream( );
        outputStream.write( PTools.sha1(file) );
        outputStream.write(proof.getBytes());
        byte[]result = PTools.sha1(outputStream.toByteArray());
        for (int i = 0 ; i< Requirements.PROOFSIZE ; i++){
            if(result[i] != 0 ){
                return false ;
            }
        }
        return true  ;    
    }
}
