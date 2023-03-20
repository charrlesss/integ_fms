<?php

$SERVERNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DBNAME='fms_integ';




$conn = new mysqli($SERVERNAME,$USERNAME,$PASSWORD,$DBNAME)
or die("Could not connect to mysql".mysqli_error($conn));