<?php
    $con = mysqli_connect('localhost','root');
    
    if($con) {
        echo "Connection Successfull";
    }
    else{
        echo "Connection failed";
    }

    mysqli_select_db($con, 'users');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO users (name, email, comment) VALUES('$name','$email','$comment')";

    mysqli_query($con, $query);
    header('location:index.php#contact');

?>
