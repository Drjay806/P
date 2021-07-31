<?php
session_start();



// initializing variables
$fname = "null";
$lname = "null";
$email    ="null";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'garage_project');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['first_name']);
  $lname = mysqli_real_escape_string($db, $_POST['last_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
 

  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required");}
  if (empty($lname)) { array_push($errors, "Name is required"); }
  if (empty($fname)) { array_push($errors, "Name is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same email
  $customer_check_query = "SELECT * FROM customer WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $customer_check_query);
  $customer = mysqli_fetch_assoc($result);

    if ($customer['email'] === $email) {
      array_push($errors, "email already exists");
    }

  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO customer (email, online_password, fist_name, last_name ) VALUES('$email', '$password', '$fname', '$lname')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
    session_destroy();
  }

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: account.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}




$card_number = "null";
$card_month= "null";
$card_year ="null";
$errors = array(); 


// REGISTER USER
if (isset($_POST['payment'])) {
  // receive all input values from the form
  $card_number = mysqli_real_escape_string($db, $_POST['cc']);
  $card_month = mysqli_real_escape_string($db, $_POST['mmyy']);
  $card_year = mysqli_real_escape_string($db, $_POST['mmyy']);

 

  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($card_year)) { array_push($errors, "required"); }
  if (empty($card_month)) { array_push($errors, "required");}
  if (empty($card_number)) { array_push($errors, " required"); }
  if (empty($fname)) { array_push($errors, "Name is required"); }

 
  // Finally, payment  
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO paymentmethod( card_number,card_month, card_year,)VALUES('$card_number','$card_year', $mmyy')";
  	mysqli_query($db, $query);
  	$_SESSION['card_number'] = $email;
  	$_SESSION['success'] = "we have ptment info";
    session_destroy();
  }
}

?>
