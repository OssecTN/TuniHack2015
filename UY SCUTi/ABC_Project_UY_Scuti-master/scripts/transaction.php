<?php 

$pk = $_POST['pk'];
$amount = $_POST['a'];

 $ad= shell_exec('multichain-cli chain1 sendassettoaddress ' . $pk . ' adib '. $amount .' ');

?>
