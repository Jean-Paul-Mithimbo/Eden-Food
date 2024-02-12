<?php
    try{
        $base=new PDO("mysql:host=localhost;dbname=Eden_food","root","");
    }
    catch(PDOException $exept){
        die("Erreur:".$exept->getMessage());
    }
?>