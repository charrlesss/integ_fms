<?php 

include("$dir/admin/logistic-one/project-management/condbproject.php");

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `projectlist` WHERE id=$id";
    $result = $connection->query($sql);
    if($result){
        echo "Deleted successfull";
    }else{
        die(mysqli_error($con));
    }
}

?>