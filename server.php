<?php 
session_start();
$username = "";
$password = "";
$errors = array();
require ("dbconnection.php");


//REGISTER AN ACCOUNT
if (isset($_POST['Register'])) {
    //recieve all input values from forms
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password_1 = mysqli_real_escape_string($connection, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($connection, $_POST['password_2']);
    

//form validation
if (empty($username)) {array_push($errors, "Username cannot be blanked");}
if (empty($password_1)) {array_push($errors,"Password cannot be blanked");}
if ($password_1 != $password_2) {array_push($errors, "The two passwords do not match");}

//check the database
    $guests_check_query  = "SELECT * FROM guests ";
    $guests_check_query .= "WHERE username = '$username' ";

    $result =mysqli_query($connection, $guests_check_query);
if (!$result) {
    die ("query is wrong");
}
    $row = mysqli_fetch_assoc($result);
    
    if ($row) {
        if ($row['username'] === $username) {
            array_push ($errors, "Username Already Exists");
            
        }
    }
    
    if (count($errors) == 0 ) {
    $password = md5($password_1); 
    
    $query  = "INSERT INTO guests (username, password) ";
    $query .= "VALUES ('$username' , '$password') ";
 mysqli_query($connection, $query);
       
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
        
    header('location:index.php');
}
}
//Login
if (isset($_POST['LOG-IN'])) {
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query  ="SELECT * FROM guests ";
    $query .="WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($connection, $query);
      if(!$results){
          die("query is wrong");
      }
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
    }
      else{
  		array_push($errors, "Sorry, Unrecognized Username Or  Password");
  	}
  }
}


?>