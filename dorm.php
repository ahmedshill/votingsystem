<?php
require 'db.php';
session_start();
$adm=$_SESSION['students']["admission"];
$sql_check ="select * from checks where admission='$adm' and post='female_hostels' ";
$results=mysqli_query($conn, $sql_check);
if(mysqli_num_rows($results)==1)
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
            width: 350px;
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
    <form action="dorm.php" method="post">
    <div class="row justify-content-center">
        <?php

        $sql="select * from candidates where position='female_hostels'";
        $results = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        while ($row=mysqli_fetch_assoc($results)){
            extract($row);
            echo "<div class=\"col-sm-4\">
                        <img src=\"photos/vector-cartoon-illustration-small-dorm-450w-1060802036.jpg\" alt=\"\">
            
                        <h4>$name</h4>
            
                        <label class=\"radio-inline\"><input type=\"radio\" name=\"id\" value=\"$id\">Option 3</label>
            
            
                   </div>";


        }
        ?>
        <input type="submit" class="btn btn-block" name="submit">

    </div>
    </form>
</div>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
    extract($_POST);
    session_start();
    $adm=$_SESSION['students']["admission"];
    $sql_check ="select * from checks where admission='$adm' and post='female_hostels' ";
    $results=mysqli_query($conn, $sql_check);
    if(mysqli_num_rows($results)==0)
    {
        $query = "update votes set vote_count= vote_count+1 where candidate_id=$id ";
        $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

        if($query){
            $today=date("Y-m-d");
            $sql_save="INSERT INTO `checks`(`id`, `admission`, `post`, `date_voted`) VALUES (null,'$adm','female_hostels','$today')";
            mysqli_query($conn, $sql_save);
            header("location:home.php");

        } else {
            die('query failed : ' . mysqli_error($conn));
        }
    }

}
?>