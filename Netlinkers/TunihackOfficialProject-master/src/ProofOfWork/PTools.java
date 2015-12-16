package ProofOfWork;


import java.security.MessageDigest;
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
public class PTools {
     public static byte[] sha1(byte[] input ) throws NoSuchAlgorithmException {
        MessageDigest mDigest = MessageDigest.getInstance("SHA1");
        return mDigest.digest( input );
      }
      
      public  static String next(String s) {
            int length = s.length();
            char c = s.charAt(length - 1);

        if(c == (char)255)
             return length > 1 ? next(s.substring(0, length - 1)) + (char)0 : (char)0 + (char)0+"";

             return s.substring(0, length - 1) + ++c;
    }
}
