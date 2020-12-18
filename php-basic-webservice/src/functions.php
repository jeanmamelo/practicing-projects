<?php
    function get_price($find) {
        $books = array(
            "java" => 299,
            "c" => 350,
            "php" => 270
        );
        
        foreach($books as $book => $price) {
            if($book == $find) {
                return $price;
                break;
            }
        }
    }

    function deliver_response($status, $status_message, $data) {
        header("HTTP/1.1 $status $status_message");
        
        $response['status'] = $status;
        $response['status_message'] = $status_message;
        $response['data'] = $data;
        
        $json_response = json_encode($response);
        echo $json_response;
    }
?>