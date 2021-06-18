<?php
$cupcake = "";
// set up document
include_once 'database.php';
include_once 'functions.php';
include_once 'classes/twig.class.php';

$cupcake = new Cupcake($database, $_GET['cupcake_id']);

$twig->render('cupcake.html', $cupcake);