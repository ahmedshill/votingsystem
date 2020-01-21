<?php
session_start();
unset($_SESSION['students']);
session_destroy();
header('location:login.php');