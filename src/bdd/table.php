<?php
try {
    require_once("connexion.php");
    $base->exec("CREATE TABLE produit(idProd INT AUTO_INCREMENT PRIMARY KEY ,NomProd VARCHAR(200) NOT NULL ,Detail VARCHAR(200),
        PrixProd float ,PhotoProd VARCHAR(200) not null)");

    $base->exec("CREATE TABLE client(idClient INT AUTO_INCREMENT PRIMARY KEY,NomClient VARCHAR(200) NOT NULL,PostNomClient VARCHAR(200)not null,AdresseClient VARCHAR (200)NOT NULL,EmailClient VARCHAR (200)NOT NULL,PasswordClient VARCHAR (200)NOT NULL,
                        PhotoClient VARCHAR(200)NOT NULL)");
    

    $base->exec("CREATE TABLE stock(idStock INT AUTO_INCREMENT PRIMARY KEY,idProd int,NomProd VARCHAR(200) NOT NULL,QntStock float)");
    // cle etrangère 
    $base->exec("ALTER TABLE stock ADD FOREIGN KEY (idProd) REFERENCES produit(idProd)");
    //  table livraison  avec clé etrangère idproduit
    $base->exec("CREATE TABLE livraison(idLivraison INT AUTO_INCREMENT PRIMARY KEY,idProd int,QntLivraison float,PrixLivraison float)");
     $base->exec("ALTER TABLE livraison ADD FOREIGN KEY (idProd) REFERENCES produit(idProd)");
    // trigger
    $base->exec("CREATE TRIGGER `insertion_produit_stock` AFTER INSERT ON `produit`
    FOR EACH ROW INSERT INTO stock(idProd,NomProd,QntStock) VALUES (NEW.idProd,NEW.NomProd,0)");
    
} catch (Exception $exept) {
    die("Erreur: " . $exept->getMessage());
}
?>