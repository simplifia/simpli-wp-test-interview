<?php

require_once ('DB.php');

try {
	$db = DB::getInstance();
	DB::setCharsetEncoding();

	$sqlExample = 'SELECT * FROM users WHERE _id = 1';
	$stm = $db->prepare($sqlExample);

	$stm->execute();

	return $stm->fetchAll(PDO::FETCH_ASSOC);
  
} catch (Exception $e) {
	print $e->getMessage();
  
}