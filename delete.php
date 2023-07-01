<?php

    include "config.php";

    if(isset($_GET['name'])) {
        $user_name = $_GET['name'];

    $sql = "DELETE FROM users WHERE name = '$user_name'";

    $result = $con->query($sql);

    if($result == TRUE) {
        echo "Deleted" ;
    }
    else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

}
?>