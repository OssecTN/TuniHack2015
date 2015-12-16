package P2PTransfer;


import ProofOfWork.Creator;
import Data.DataTools;
import Data.FileThread;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.ObjectOutputStream;
import java.math.BigInteger;
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
public class Receive {
    
    public boolean receive(FileThread ft ) throws NoSuchAlgorithmException, IOException{
        DataTools dt = new DataTools() ;     
        if(ft.getSolved()) {
            
            if(dt.verify(ft)){
                // Random String 
                save(ft) ;
                return true  ; 
            }
        }else{
            if(dt.partialVerify(ft)){
                if(tryToSolve(ft)) {
                    save(ft) ; 
                    return true ; 
                }
            }
        }
        
        return false; 
        
    }
    
    public static void save(FileThread ft) throws IOException{
                SecureRandom random = new SecureRandom();
                String name =  new BigInteger(130, random).toString(32);
                FileOutputStream fout = new FileOutputStream(name+".ser");
                ObjectOutputStream oos = new ObjectOutputStream(fout);
                oos.writeObject(ft);
    }
    
    public boolean tryToSolve(FileThread ft) throws IOException, NoSuchAlgorithmException{
        Creator c = new Creator() ; 
        String proof = c.getProof(ft.getFiles(), ft.getHashes()) ; 
        if(proof != null ){
            ft.InsertHash(proof.getBytes());
            return true ; 
        }
        return false ; 
    }
}
