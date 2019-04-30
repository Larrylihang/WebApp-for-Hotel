<?php
 session_start();
 $username = $_SESSION['username'];
$_SESSION['username'] = array();
session_destroy();
header ("location:index.php");
    ?>