<?php
try 
{
    $bdd = new PDO('mysql:host=localhost;dbname=tuninvest', 'root', '');
} 
catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}
?>