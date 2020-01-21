<?php
//security
session_start(); //if you want to work with a session you must start with this

if (!isset($_SESSION['students']))
{
    header("location:login.php");
}else{
    $id = $_SESSION["students"]["admission"];
    $sql = "select * from students where admission = '$id'";
    require 'db.php';
    $results = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if (mysqli_num_rows($results) == 0)
    {
        session_destroy();
        header("location:login.php");
    }
    $user = mysqli_fetch_assoc($results);
    $_SESSION["students"] = $user;
}


