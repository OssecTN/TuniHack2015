<?php 
include("common.php");

session_destroy();
session_start();
header('location:login.php');
?>