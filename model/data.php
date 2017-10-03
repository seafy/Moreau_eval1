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

function getProjet($prout) {
	$bdd = getBdd();
	$projet = $bdd->prepare('SELECT * FROM projets WHERE id=? ');
	$projet -> execute(array($prout));
	$result = $projet->fetch(PDO::FETCH_ASSOC);
	return $result;
}

function getProjets() {
	$bdd = getBdd();
	$projets = $bdd->query('SELECT * FROM projets');
	return $projets;
}



function addUser() {
	$bdd = getBdd();
	$addUser = $bdd->query('INSERT INTO `user`(`id`, `name`, `firstname`, `age`, `email`, `password`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])');
	return $addUser;
}













?>