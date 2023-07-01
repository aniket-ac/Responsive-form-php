
<?php
    //This code is used to connect to MySQL database server

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    $con = new mysqli($servername,$username,$password,$dbname);
    if($con->connect_error) {
        die("Connection Failed " .$con->connect_error);
    }
?>