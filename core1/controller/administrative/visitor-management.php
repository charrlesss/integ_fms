<?php
$controller_filename =basename(__FILE__);
$controller_request = $_SERVER['REQUEST_URI'];
include("../../dotenv.php");
include("$dir/controller/index.php");
use Ramsey\Uuid\Uuid;





function logout_visitor_account(){
    session_destroy();
    $response = array(
        "logout"=>"Logout Successfully",
        "success"=>true
    );
    echo json_encode($response);
}

function get_all_appointment_request(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");
    $response = array(
        "appoint_req"=>getAllAppointmentRequest($db),
        "success"=>true
    );
    echo json_encode($response);
}


function visitor_create_appointment_request(){
        include("../../dotenv.php");
        include("$dir/model/index.php");
        include("$dir/model/administrative/visitor-management.php");

        $id_picture = $_FILES['file'];
        $uuid = Uuid::uuid4();
        $fileNameParts = explode('.',$id_picture['name']);
        $ext = end($fileNameParts);
        $secretname =$uuid->toString();
        $filename = "$secretname.$ext";
        $uploaddir = $dir."/assets/request-appointment-id-picture/";
        $uploadfile = $uploaddir . basename($filename);

        if(!move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
            $response = array(
                "message"=>"Server Error",
                "success"=>$_POST['visitor_id']
            );
            header('Content-Type: application/json; charset=utf-8');
            echo   json_encode($response);
            return;
        }

    createAppointmentRequestVisitor($db,
    $_POST['visitor_id'],
    $filename,
    $_POST['email'],
    $_POST['fullname'],
    $_POST['date'],
    $_POST['time'],
    $_POST['purpose']);
    $response = array(
        "message"=>"Create Request Appointment Successfully",
        "success"=>$db 
    );
    echo json_encode($response);
}


function visitor_edit_appointment_request(){
    include("../../dotenv.php");
    include("$dir/model/index.php");
    include("$dir/model/administrative/visitor-management.php");

    $prev_req = getAppointmentRequestById($db,$_POST['visitor_id']);
    $prev_req['id_picture'];

    $id_picture = $_FILES['file'];
    $uuid = Uuid::uuid4();
    $fileNameParts = explode('.',$id_picture['name']);
    $ext = end($fileNameParts);
    $secretname =$uuid->toString();
    $filename = "$secretname.$ext";
    $uploaddir = $dir."/assets/request-appointment-id-picture/";
    $uploadfile = $uploaddir . basename($filename);

    if($id_picture['name'] === $prev_req['id_picture']){

    }
  

    if(!move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
        $response = array(
            "message"=>"Server Error",
            "success"=>$_POST['visitor_id']
        );
        header('Content-Type: application/json; charset=utf-8');
        echo   json_encode($response);
        return;
    }

        createAppointmentRequestVisitor($db,
        $_POST['visitor_id'],
        $filename,
        $_POST['email'],
        $_POST['fullname'],
        $_POST['date'],
        $_POST['time'],
        $_POST['purpose']);

        $response = array(
            "message"=>"Create Request Appointment Successfully",
            "success"=>false 
        );
        echo json_encode($response);
}





call_user_func_array($function_name,$slice_function_params);
exit();
?>