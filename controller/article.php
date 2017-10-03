<?php 

include '../view/layout/header_view.php';

include '../model/data.php';

$connexion = getBdd();

$theprojets = getProjets();

$users = getUser();

$projet = getProjet($_GET['id']);




include '../view/layout/article_view.php';

include '../view/layout/footer_view.php';