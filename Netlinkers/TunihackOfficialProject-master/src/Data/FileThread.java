package Data;


import java.io.Serializable;
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
public class FileThread implements Serializable{
    
    private ArrayList<byte[]> files  ; 
    private ArrayList<String> types ; 
    private ArrayList <byte[]> hashes ; 
    private boolean solved = false ; 
    public String title =""; 
    public String desc =""; 
    public String id ="" ; 
    
    public FileThread(){} ; 
    public FileThread(byte [] file , byte [] proof , String type) {
        files = new ArrayList<>();
        types = new ArrayList<>(); 
        hashes = new ArrayList<>();
        files.add(file) ; 
        hashes.add(proof) ;
        types.add(type) ;
        solved = true  ; 
    }
    public void setMeta(String t , String des , String id){
        title = t ; 
        this.id = id ; 
        desc = des ; 
    }
    
    public boolean getSolved (){
        return solved ; 
    }
    public void Add(byte[] file){
        files.add(file);
        solved = false  ; 
    }
    public void Add( byte [] file , byte[] proof){
        solved = true  ; 
        files.add(file) ; 
        hashes.add(proof) ; 
    }
    public void InsertHash(byte [] proof){
        solved = true ; 
        hashes.add(proof) ;
    }
    
    
    
    public  ArrayList<byte[]>getFiles(){
        return files ; 
    }
    public ArrayList<byte[]>getHashes(){
        return hashes ; 
    }
}
