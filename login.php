<?php

require 'db.php';
/*require 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;*/

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

        //Send message to phone

       /* $username = 'system101'; // use 'sandbox' for development in the test environment
        $apiKey   = 'd7bd20e85bef94a2988719242906702d946e9767d707b10fac8063273b08cf84'; // use your sandbox app API key for development in the test environment
        $AT       = new AfricasTalking($username, $apiKey);

// Get one of the services
        $sms      = $AT->sms();

// Use the service
        $result   = $sms->send([
            'to'      => '+254723740215',
            'message' => 'Hello World!'
        ]);*/


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
    <style>
        body{
            background-color: black;
            background-image: url("photos/kaba.png");
            background-size: 100%;
        }


        .col-sm-5{
            margin-top: 120px;
        }
        .col-sm-5 label{
            color: black;

        }

    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
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

           <!-- <form action="login.php" method="post">
                <div class="form-group">
                    <label><b>ADMISSION</b>:</label>
                    <input type="number" class="form-control" name="admission" required>
                </div>
                <div class="form-group">
                    <label><b>PASSWORD</b>:</label>
                    <input type="password" class="form-control" name="password" id="pwd">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>-->

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
<!--<table class="table">
    <thead>
    <tr>
        <td>admission</td>
        <td>email</td>
        <td>password</td>
    </tr>
    </thead>

    <tbody>
    <?php
/*    require 'db.php';
    $sql = "select * from students ORDER BY DATE";
    $results = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($results))
    {
        extract($row);
        echo "<tr>
                    <td>$admission</td>
                    <td>$email</td>
                    <td>$password</td>
                </tr>";
    }
    */?>
    </tbody>
</table>
-->

</body>
</html>