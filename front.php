
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form </title>
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>

    
    <div class="col-md-2">

        <div class="col-md-8">
            <div class="row">
                <h1 class="text-center">Post Something</h1> <br><br>
                <form action="back.php" method="POST">
                    <div class="form-group">

                        <label for="name">NAME: </label>
                        <input type="text" name="name" id="name"><br><br>
                    </div>
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" name="email" id="email"><br><br>
                    </div>

                    <div class="form-group">
                        <label for="comment">POST:</label>
                        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                    </div>
                    <input type="submit" value="Submit">
                </form>
            </div>

        </div>
    </div>

</body>

</html>