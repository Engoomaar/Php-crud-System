<?php
//contect index file
//locolhost
//user name
//password
//database name

$conn = new mysqli("localhost","root","","mydb");
    if($conn->connect_error){
        echo $conn-error;
    }
    // else{
    //     echo "success";
    // }


?>