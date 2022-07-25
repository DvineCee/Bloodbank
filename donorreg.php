<?php
session_start();

    $_SESSION;
?>
<?php include('donorconn.php') ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/donorreg.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>Donor Reg..</title>
</head>
<body>
<div class="sidebar">
        <div class="logo-content">
             <div class="logo">
             <img src="/images/bloodbanklogo2.png">
            </div>
            <span class="material-icons" id="btn">menu</span>
            </div>
            <ul class="nav-list">
                <li>
                    <a href="home.php">
                    <span class="material-icons">home</span>
                    <span class="links-name">Home</span>
                    </a>
                    <span class="tooltip">Home</span>
                </li>

                <li>
                    <a href="contact.php">
                    <span class="material-icons">contact_page</span>
                    <span class="links-name">Contact</span>
                    </a>
                    <span class="tooltip">Contact</span>
                </li>
                <li>
                    <a href="aboutus.php">
                    <span class="material-icons">groups_2</span>
                    <span class="links-name">About Us</span>
                    </a>
                    <span class="tooltip">About Us</span>
                </li>
                <li>
                    <a href="bdonor.php">
                    <span class="material-icons">bloodtype</span>
                    <span class="links-name">Become a donor</span>
                    </a>
                    <span class="tooltip">Become a donor</span>
                    
                </li>
            </ul>
    </div>


    <div class="page">
        <div class="form-contnr">
            <div class="banner">
            <img src="/images/set-people-donating-blood_52683-19547.jpg" alt="">
            </div>
             <div class="container">
    <div class="content">
      <form action="donorreg.php" method="POST">
      <div class="title"><h2>Become A Donor</h2>
    <i class='bx bxs-donate-blood bx-tada bx-flip-horizontal' ></i>
    </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="date" name="DOB" placeholder="Enter Date of birth" class="form-control" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" placeholder="Enter Phone no." required>
          </div>
          <div class="input-box">
            <span class="details">Blood Group</span>
            <select name="blood_group" class="form-control" required>
                <option value="">Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          
          </div>
        </div>
        <div class="button">
          <input type="submit" name="donorreg" value="Continue">
        </div>
      </form>
    </div>
    
  </div>
  <?php include 'footer.php' ?>


  <script>
        let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function() {
        sidebar.classList.toggle("active");
    }
    </script>
</body>
</html>