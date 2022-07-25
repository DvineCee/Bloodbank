<?php


// initializing variables
$name = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'bloodbank');

// REGISTER DONOR
if (isset($_POST['donorreg'])) {
  // receive all input values from the form
  
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $DOB = mysqli_real_escape_string($db, $_POST['DOB']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $blood_group = mysqli_real_escape_string($db, $_POST['blood_group']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($name)) { array_push($errors, "Hospital Name is required"); }
  //if (empty($email)) { array_push($errors, "Email is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM donors WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $name) {
      array_push($errors, "Donor already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
if (count($errors) == 0) {
  	//$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO donors (name, DOB, email, phone, blood_group, gender) 
  			  VALUES( '$name', '$DOB', '$email', '$phone', '$blood_group', '$gender')";
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: donordash.php');
  }
}

// LOGIN USER
//if (isset($_POST['Log_hosptl'])) {
  //$email = mysqli_real_escape_string($db, $_POST['email']);
  //$password = mysqli_real_escape_string($db, $_POST['password']);

  //if (empty($email)) {
  	//array_push($errors, "Email is required");
  //}
  //if (empty($password)) {
  	//array_push($errors, "Password is required");
  //}

  //if (count($errors) == 0) {
  	//$password = md5($password);
  	//$query = "SELECT * FROM userinfo WHERE email='$email' AND password='$password'";
  	//$results = mysqli_query($db, $query);
  	//if (mysqli_num_rows($results) == 1) {
  	  //$_SESSION['email'] = $email;
  	  //$_SESSION['success'] = "You are now logged in";
  	  //header('location: donordash.php');
  	//}else {
  		//array_push($errors, "Wrong email/password combination");
  	//}
 // }
//}

?>