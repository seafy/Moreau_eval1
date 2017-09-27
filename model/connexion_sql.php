<?php 
function getBdd() {
  $bdd = new PDO('mysql:host=localhost;dbname=MOREAU;charset=utf8',
  'root', 'hasquette', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}
 ?>