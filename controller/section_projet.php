<?php 

include '../view/layout/header_view.php';

include '../model/data.php';

$projets = getProjets();

$connexion = getBdd();




include '../view/layout/section_projet_view.php';

include '../view/layout/footer_view.php';



