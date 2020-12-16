<?php

require_once ('DB.php');

try {
	$db = DB::getInstance();
	DB::setCharsetEncoding();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $postname = $_POST["postname"]; 
        $postcontent = $_POST["postcontent"];
        $metadata = $_POST["metadata"];
        if (!isset($postname)){
          die("S'il vous plaît entrez le post name");
        }
        if (!isset($email)){
          die("S'il vous plaît entrez le post content");
        }  

        if (!isset($metadata)){
            die("S'il vous plaît entrez le metadata");
          }
    
        
        //préparer la requête d'insertion SQL
        $statement = $db->prepare("INSERT INTO users (postname, postcontent, metadata) VALUES(?, ?, ?)"); 
        //Associer les valeurs et exécuter la requête d'insertion
        $statement->bind_param($postname, $postcontent, $metadata); 
        
        if($statement->execute()){
          print "opération réussite";
        }else{
          print $db->error; 
        }
      }
  
} catch (Exception $e) {
	print $e->getMessage();
  
}