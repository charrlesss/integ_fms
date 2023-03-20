<?php
$SERVERNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DBNAME='fms_integ';

$conn = new mysqli($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME)
or die("Could not connect to mysql".mysqli_error($conn));

if(isset($_POST['add'])){
    $pro = "approved";
    $sd =  $row['id'] ;
        $mysqli->query("UPDATE claims SET statu_claims ='approved' WHERE id='$sd'") or die ($mysqli->error);
    header('Location: http://localhost/freight-system/index.php?page=includes/listReimbursement1');
    
    }
?>