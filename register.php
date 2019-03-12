<?php
require 'db.php';
if (isset($_POST["password"]))
{
    extract($_POST);
    $password=crypt($password, "nvjnvjnvjnv");
    $sql="INSERT INTO `students`(`admission`, `email`, `password`) VALUES ('$admission' ,'$email','$password')";
    mysqli_query($conn, $sql);
    header("location:login.php");

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">



            <form action="register.php" method="post">
                <div class="form-group">
                    <label>Admission:</label>
                    <input type="number" class="form-control" name="admission" required>
                </div>
                <div class="form-group">
                    <label>Email address:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="password" id="pwd">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>

            </form>
        </div>
    </div>
</div>

</body>
</html>