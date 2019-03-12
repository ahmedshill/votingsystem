<?php
require 'db.php';

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <style>
        .col-sm-6 a{
            width: 100%;
            border: 1px solid black;
            color: white;
            background: black;

        }
          .col-sm-6 img  {
            width: 540px;
            height: 300px;
        }
          .col-sm-6 h4{
              padding-top: 15px;
              padding-bottom: 15px;
          }
        .col-sm-6{
            padding-top: 40px;
        }


    </style>
</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <img src="photos/president-round-stamp-eps-vectors_csp27853230.jpg" alt="">
            <!--<h4>Headboy</h4>-->
            <h4>President</h4>

           <!-- <button class="btn btn-block btn-dark">Vote</button>-->
            <a href="headboy.php" class="btn btn-block">VOTE</a>
           <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima odio recusandae rem sapiente, sed
                tenetur voluptate. Corporis debitis deserunt dolores exercitationem, facere fuga fugiat incidunt optio
                recusandae saepe.</p>-->
        </div>
        <div class="col-sm-6">
            <img src="photos/photo-1529465230221-a0d10e46fcbb.jpg" alt="">
            <h4>Library</h4>

            <!--<button class="btn btn-block btn-dark">Vote</button>-->
            <a href="library.php" class="btn btn-block">VOTE</a>
           <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, assumenda blanditiis commodi corporis
                delectus dolores, esse facere, id labore maxime nam natus praesentium quam quis repellat repellendus sit
                tempora ullam?</p>-->
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <img src="photos/stock-vector-catering-letter-620729036.jpg" alt="">
            <h4>Catering services</h4>
           <!-- <h4>Catering</h4>-->
           <!-- <button class="btn btn-block btn-dark">Vote</button>-->
            <a href="general.php" class="btn btn-block">VOTE</a>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima odio recusandae rem sapiente, sed
                 tenetur voluptate. Corporis debitis deserunt dolores exercitationem, facere fuga fugiat incidunt optio
                 recusandae saepe.</p>-->
        </div>
        <div class="col-sm-6">
            <img src="photos/sports.jpg" alt="">
            <h4>Sporting & Recreation</h4>

           <!-- <button class="btn btn-block btn-dark">Vote</button>-->
            <a href="club.php" class="btn btn-block">VOTE</a>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, assumenda blanditiis commodi corporis
                 delectus dolores, esse facere, id labore maxime nam natus praesentium quam quis repellat repellendus sit
                 tempora ullam?</p>-->
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <img src="photos/vector-cartoon-illustration-small-dorm-450w-1060802036.jpg" alt="">
            <h4>Male Hostels</h4>
            <!--<button class="btn btn-block btn-dark">Vote</button>-->
            <a href="environment.php" class="btn btn-block">VOTE</a>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima odio recusandae rem sapiente, sed
                 tenetur voluptate. Corporis debitis deserunt dolores exercitationem, facere fuga fugiat incidunt optio
                 recusandae saepe.</p>-->
        </div>
        <div class="col-sm-6">
            <img src="photos/stock-vector-vector-cartoon-student-dormitory-room-interior-background-template-university-high-school-college-1045548481.jpg" alt="">
            <h4>Female Hostels</h4>

            <!--<button class="btn btn-block btn-dark">Vote</button>-->
            <a href="dorm.php" class="btn btn-block">VOTE</a>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, assumenda blanditiis commodi corporis
                 delectus dolores, esse facere, id labore maxime nam natus praesentium quam quis repellat repellendus sit
                 tempora ullam?</p>-->
        </div>
    </div>
</div>


</body>
</html>