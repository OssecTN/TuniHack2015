 <?php
require 'connect.php';
require 'core.php';
require 'vendor/autoload.php';
$api_key = "3546-fa37-af53-9503";
$Blockchain = new \Blockchain\Blockchain();
if(isset($_GET['email'])&&isset($_GET['mp'])){
	$email=$_GET['email'];
	$mp=$_GET['mp'];
    if(!empty($email)&&!empty($mp)){
    	$requete="select * from users where email='".$email."' and pass='".$mp."'";
    	$sql=$bdd->query($requete);
    	$count=$sql->rowcount();
      echo $count;
    	if ($count==1){
           $donnees=$sql->fetch();
           $user_id = $donnees['id'];
           $_SESSION['user_id'] = $user_id;
           $wallet = $Blockchain->Create->create('acamar77777777', null, $label=null);
           echo json_encode(array('val' => 'success','address' => $wallet->address));
    	}else{
           echo json_encode(array('val' => 'echec1'));
    	}
    }else{
    	echo json_encode(array('val' => 'echec2'));
    }
}else{
echo json_encode(array('val' => 'echec3'));
}
 ?>
