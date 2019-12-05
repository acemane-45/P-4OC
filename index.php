<?php
require 'Controleur/Routeur.php';
session_start(); // Start session 
/*
$_SESSION['login'] = ;
$_SESSION['password'] = ';  */




//define('LOGIN','jean');
//define('PASSWORD','fortoche');


  // ******************************* */ 
$routeur = new Routeur();
$routeur->routerRequete();


