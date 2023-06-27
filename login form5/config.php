<?php
 $DATABASE_HOST = 'localhost'; 
 $DATABASE_USER = 'root';
 $DATABASE_PASS = ''; 
 $DATABASE_NAME = 'form';
 
 $conn = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);

if ($conn->connect_error){
    die('Failed to connect to server'. $conn->connect_error);
}
?>