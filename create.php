<?php
include "config.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $sql1 = "INSERT INTO users (name, email, comment) VALUES ('$name', '$email' , '$comment' )";

    $result1 = $con->query($sql1);

    if ($result1 == TRUE) {
        echo "Post Succesfull";
    } else {
        echo "Error: " . $sql1 . "<br>" . $con->error;
    }
}
$sql2 = "SELECT * FROM users";

$result2 = $con->query($sql2);

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        input[type=button],
        input[type=submit],
        input[type=reset] {
            background-color: #008080;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
        #adjust{
            padding-left: 10px;
            margin-left:20px
        }
    </style>
</head>

<body>
<div style='font-size: 27pt; background-color:#008080;'>
        <center><p style="color:white;">Post here</p></center>   
    </div>
    <center>
    <form method="POST" action="">
        <fieldset>
        <h3><p style="color:#008080;">&nbsp&nbsp Your Post</p></h3>
            &nbsp&nbsp&nbsp Name: <br><input type="text" name="name" id="adjust"><br><br>
            &nbsp&nbsp&nbsp Email ID: <br><input type="email" name="email" id="adjust"><br><br>
            &nbsp&nbsp&nbsp Comments: <br><textarea rows="5" cols="100" name="comment" id="adjust"></textarea><br><br>
            &nbsp&nbsp&nbsp <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
    </center>
    <hr>
    <br>
    <div class="container">
    <h2 style="color:#008080;">Users</h2>
        <table class="table">

            <head>
                <tr>
                    <th>NAME</th>
                    <th>EMAIL ID</th>
                    <th>POST</th>
                </tr>
                </thread>
                <tbody>
                    <?php
                    if ($result2->num_rows > 0) {
                        while ($row = $result2->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['comment']; ?></td>
                                <td><a href="delete.php?name=<?php echo $row['name']; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>

                </tbody>
            </head>
        </table>
    </div>
    
    
    
</body>

</html>