package MyService;


import static com.sun.imageio.plugins.jpeg.JPEG.version;
import java.io.BufferedReader;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.io.PrintWriter;
import java.io.UnsupportedEncodingException;
import java.security.InvalidKeyException;
import java.security.KeyPair;
import java.security.KeyPairGenerator;
import java.security.NoSuchAlgorithmException;
import java.security.PrivateKey;
import java.security.PublicKey;
import java.security.Signature;
import java.security.SignatureException;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 *
 * @author toshiba
 */
public class SignatureTools {

    public KeyPair generateAndExternalizeKeys(String pubKeyfilename) throws NoSuchAlgorithmException, IOException {

        KeyPairGenerator kpg = KeyPairGenerator.getInstance("RSA");
        kpg.initialize(1024);
        KeyPair keyPair = kpg.genKeyPair();
        ObjectOutputStream oos = null;
        try {
            final FileOutputStream fichier = new FileOutputStream(pubKeyfilename);
            oos = new ObjectOutputStream(fichier);
            oos.writeObject(keyPair.getPublic());
            oos.flush();

        } catch (final java.io.IOException e) {
            e.printStackTrace();
        } finally {
            try {
                if (oos != null) {
                    oos.flush();
                    oos.close();
                    return keyPair;
                }
            } catch (final IOException ex) {
                ex.printStackTrace();

            }
        }
        return keyPair;
    }

    public byte[] signMessage(String msg, KeyPair keyPair) throws UnsupportedEncodingException, NoSuchAlgorithmException, InvalidKeyException, SignatureException {
        byte[] data = msg.getBytes("UTF8");
        Signature sig = Signature.getInstance("MD5WithRSA");
        sig.initSign(keyPair.getPrivate());
        sig.update(data);
        byte[] signatureBytes = sig.sign();
        return signatureBytes;
    }

    public boolean verifierMessage(byte[] signatureBytes,byte[] data,String pubKeyFilename) throws NoSuchAlgorithmException, InvalidKeyException, SignatureException {
        Signature sig = Signature.getInstance("MD5WithRSA");
        ObjectInputStream ois = null;
        try {
            final FileInputStream fichier = new FileInputStream(pubKeyFilename);
            ois = new ObjectInputStream(fichier);
            final PublicKey pubKey = (PublicKey) ois.readObject();
            System.out.println("pubKey : " + pubKey.toString());
            sig.initVerify(pubKey);
            sig.update(data);
            return sig.verify(signatureBytes);

        } catch (final java.io.IOException e) {

            e.printStackTrace();

        } catch (final ClassNotFoundException e) {

            e.printStackTrace();

        } finally {
            try {
                if (ois != null) {
                    ois.close();
                }
            } catch (final IOException ex) {
                ex.printStackTrace();
            }
        }
        return false;
    }
    
}
