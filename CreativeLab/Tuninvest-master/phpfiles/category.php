<?php 
require 'connect.php';
require 'core.php';

if(isset($_GET['to'])){
  $to=$_GET['to'];
  $from = $_SESSION['user_id'];
  if(!empty($to)){
    $req = "select * from category";

    $sql = $bdd->query($req);
    $arrayobj = new ArrayObject();
    while($donnees = $sql->fetch()){
                $from = $donnees['fromper'];
                $to = $donnees['toper'];
                $text = $donnees['cont'];
                $time = $donnees['time'];
                     $array2 = array(
                         'id'=>$donnees['id'],
                          'name'=> $from,
                         'to' => $to,
                         'cont' => $text,
                         'time' => $time
                      );

            $arrayobj->append($array2);
    }
    echo json_encode($arrayobj);
  }else{
    echo json_encode(array('val' => 'echec1'));
  }
}else{
  echo json_encode(array('val' => 'echec2'));
}