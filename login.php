<?php

require 'db.php';

if (isset($_POST['admission']))
{
    extract($_POST);
    $password = crypt($password,'nvjnvjnvjnv');
    $sql ="select * from students where admission ='$admission' and password='$password'";

    $results = mysqli_query($conn, $sql ) or die(mysqli_error($conn));
    $count = mysqli_num_rows($results);
   // die("Count is $count ");
    if ($count == 1)
    {
        //success
        $students = mysqli_fetch_assoc($results);
        //sessions
        session_start();
        $_SESSION['students'] = $students;
        header('location:home.php');
    }

    else {
      $error = "wrong admission or password";
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card" style="margin-top: 60px">
                <div class="card-header text-center">
                    <strong>LOGIN</strong>
                </div>

                <div class="card-body">
                    <form action="login.php" method="post">

                        <div class="form-group">
                            <label>Admission:</label>
                            <input type="text" class="form-control" name="admission" required>
                        </div>

                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" class="form-control" name="password"  required>
                        </div>

                        <button type="submit" class="btn btn-outline-primary btn-block">Login</button>
                        <?php
                         if (isset($error))
                             echo $error;

                        ?>
                    </form>

                </div>


            </div>

        </div>
    </div>
</div>


</body>
</html>