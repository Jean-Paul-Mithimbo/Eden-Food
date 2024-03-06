<?php
    try{
        $base=new PDO("mysql:host=localhost;dbname=Edenfood","root","");
    }
    catch(PDOException $exept){
        die("Erreur:".$exept->getMessage());
    }
?>