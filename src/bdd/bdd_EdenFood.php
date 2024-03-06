<?php
    try{
        $base=new PDO("mysql:host=localhost","root","");
        $base->exec("CREATE DATABASE Edenfood") or die(print_r($base->errorInfo()));
    }
    catch(PDOException $exept){
        die("Erreur: ".$exept->$getMessage());
    }
?>