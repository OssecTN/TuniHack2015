<?php 


function cle_public()
{
 
    $ad= shell_exec('sudo -i multichain-cli amine getaddresses');

list($part1, $part2, $part3, $part4, $part5, $part6, $part7, $part8, $part9, $part10, $part11, $part12, $part13, $part14) = split('"', $ad);
return $part14;

}
function solde()
{
   $ad=shell_exec('sudo -i multichain-cli amine gettotalbalances | grep qty');

list($part1, $part2) = split(':', $ad);
return $part2;
    
}
 $reponse = array(); 
$reponse["cle_public"] = cle_public(); 
$reponse["solde"] = solde(); 
echo (json_encode($reponse));

?>
