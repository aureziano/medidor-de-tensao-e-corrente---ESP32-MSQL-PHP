<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
// initializing variables
$username = "";
$email    = "";
$errors = array();
// connect to the database
$db = new mysqli('localhost', 'id14454140_adm', 'Cerveja2020-', 'id14454140_teste');
