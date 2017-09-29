<?php 

function getBdd() {
  $bdd = new PDO('mysql:host=localhost;dbname=MOREAU;charset=utf8',
  'root', 'hasquette', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}


function getUser() {
  $bdd = getBdd();
  $user = $bdd->query('SELECT * FROM user');
  return $user;
}


function getProjet() {
	$bdd = getBdd();
	$projets = $bdd->query('SELECT * FROM projets');
	return $projets;
}

















?>