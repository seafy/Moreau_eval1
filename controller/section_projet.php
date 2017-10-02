<?php 

include '../view/layout/header_view.php';

include '../model/data.php';

$projets = getProjet();

$connexion = getBdd();

$article = getArticle();


include '../view/layout/section_projet_view.php';

include '../view/layout/footer_view.php';



