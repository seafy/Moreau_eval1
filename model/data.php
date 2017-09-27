<?php  
function getUser() {
  $bdd = getBdd();
  $user = $bdd->query('SELECT * FROM user');
  return $user;
}




















?>