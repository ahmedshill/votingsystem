<?php
require 'db.php';

if ($_SESSION["students"]["status"]!="admin")
{
    header("location:home.php");
}
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
            .col-sm-4 img{
                width: 300px;
                height: 200px;
                padding-top: 30px;

            }
            .col-sm-4 a{
                color: white;
                background: black;
            }

        </style>
    </head>
    <body>
    <?php
    require 'navbar.php';
    ?>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>NAMES</th>
                <th>POSITION</th>
                <th>VOTE COUNT</th>
            </tr>
            </thead>
            <tbody>




            <?php

            $sql="SELECT candidates.id, candidates.names, candidates.position, votes.vote_count FROM candidates JOIN votes ON candidates.id = votes.candidate_id ORDER BY candidates.id";
            $results = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            while ($row=mysqli_fetch_assoc($results)) {
                extract($row);
                echo "<tr>
                                <td>$id</td>
                                <td>$names</td>
                                <td>$position</td>
                                <td>$vote_count</td>
                     </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>


    </body>
    </html>
