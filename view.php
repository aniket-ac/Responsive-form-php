<?php
    include "config.php";

    $sql = "SELECT * FROM users";

    $result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Users</h2>
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
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()) {
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