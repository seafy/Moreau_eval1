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
	$addUser = $bdd->prepare('INSERT INTO user(name, firstname, age, email, password) VALUES(:nom, :prenom, :age, :email, :motdepasse)');
	
	$addUser->execute(array(
	'nom' => $_POST['nom'],
	'prenom' => $_POST['prenom'],
	'age' => $_POST['age'],
	'email' => $_POST['email'],
	'motdepasse' => $_POST['motdepasse']
	));
	
}













?>