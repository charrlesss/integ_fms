<?php
    session_start();
        session_destroy();
        $response = array(
            "message"=>'Successfully Logout',
            "success"=>true
        );
        echo json_encode($response);







?>