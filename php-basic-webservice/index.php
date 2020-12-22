<?php
    include("functions.php");

    // process client request (VIA URL)
    header("Content-Type: application/json");
    if(!empty($_GET['name'])) {
        $name = $_GET['name'];
        $price = get_price($name);
        
        if(empty($price)) {
            // book not found
            deliver_response(200, "book not found", NULL);
        } else {
            // respond book price
            deliver_response(200, "book found", $price);
        }
    } else {
        // throw invalid request
        deliver_response(400, "invalid request", NULL);
    }
?>
