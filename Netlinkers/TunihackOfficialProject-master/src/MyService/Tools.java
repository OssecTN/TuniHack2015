package MyService;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author toshiba
 */
public class Tools {
    public ArrayList<Socket> getClientSockets() {
        try {
            
        
        ArrayList<Socket>sockets=new ArrayList<Socket>();
        BufferedReader br = new BufferedReader(new FileReader("IPconfig.txt"));
        String sCurrentLine;
		while ((sCurrentLine = br.readLine()) != null){
                    String[] parts= sCurrentLine.split(":");
                    int port=Integer.parseInt(parts[1]);
                    String ip=parts[0];
                    sockets.add( new Socket(ip, port));
                }
                return sockets;
        }catch(Exception e){
            return null; 
        }
    }
    
    public ServerSocket createServerSocket( int port) throws IOException
    {
        ServerSocket serverSocket=new ServerSocket(port);
        return serverSocket;
    }
    
}
