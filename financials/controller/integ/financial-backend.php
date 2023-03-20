<?php
$controller_filename =basename(__FILE__);
$controller_request = $_SERVER['REQUEST_URI'];
include("../../dotenv.php");
include("$dir/controller/index.php");

    // filename/function name/ params /name/last/midle

    function finance_add_payment(){

        $response = array(
            "message"=>'Successfully add',
            "success"=>true
        );
        echo json_encode($response);
    }

    function finance_edit_payment(){


        $response = array(
            "message"=>'Successfully edit',
            "success"=>true
        );
        echo json_encode($response);
    }

    function finance_delete_payment(){


        $response = array(
            "message"=>'Successfully delete',
            "success"=>true
        );
        echo json_encode($response);
    }



call_user_func_array($function_name,$slice_function_params);
?>