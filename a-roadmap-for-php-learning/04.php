<?php
// set up document
include_once 'database.php';
include_once 'functions.php';
include_once 'classes/twig.class.php';
$cupcakes = ['cupcakes' => getCupcakes($database)];
$twig->render('cupcake.html', $cupcakes);