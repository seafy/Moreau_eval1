<?php 

include '../view/layout/header_view.php';

include '../model/data.php';

$connexion = getBdd();

$lesprojets = getProjet();

$users = getUser();



include '../view/layout/article_view.php';

include '../view/layout/footer_view.php';