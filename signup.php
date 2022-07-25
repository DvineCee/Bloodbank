<?php
session_start();

    $_SESSION;
?>
<?php include('server.php') ?>
<?php include('server2.php') ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="css/signup.css">
    <title>signup</title>
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
                    <a href="index.php">
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
                    <a href="donor.php">
                    <span class="material-icons">bloodtype</span>
                    <span class="links-name">Become a donor</span>
                    </a>
                    <span class="tooltip">Become a donor</span>
                    
                </li>
            </ul>
    </div>
       
        <nav>
            <a href="#" class="logo">
                <img src="/images/bloodbanklogo.png"/>
            </a>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="donor.php">Become a Donor</a></li>
                
                <a href="login.php"><button>Login</button></a>
            </ul>
        </nav>
        
    <div class="page">
        <div class="form-contnr">
            <div class="sign-dnr-hsp">
                <form action="signup.php" class="sign-up-prsn" method="POST">
                    <h2 class="title">Sign Up</h2>
                    <?php include('errors.php'); ?>
                    <div class="input-field">
                        <span class="material-icons">
                            person
                        </span>
                        <input type="username" name="username" placeholder="Username">
                        </div>

                    <div class="input-field">
                        <span class="material-icons">
                            email
                        </span>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    
                    <div class="input-field">
                        <span class="material-icons">
                            local_phone
                        </span>
                        <input type="phone" name="phone" placeholder="Phone no.">
                        </div>
                        
                        <div class="input-field">
                        <span class="material-icons">
                            lock
                        </span>
                        <input type="password" name="password_1" placeholder="Password">
                        </div>

                        <div class="input-field">
                        <span class="material-icons">
                            lock
                        </span>
                        <input type="password" name="password_2" placeholder="Confirm Password">
                        </div>

                        <input type="submit" value="Sign Up" name="Sign_person" class="btn solid">
                        <p class="so-text">Already have an account? <a href="login.php">Login</a></p>
                </form>

                <form action="" class="sign-up-hsptl" method="POST">
                    <h2 class="title">Sign Up</h2>
                    
                    <div class="input-field">
                        <span class="material-icons">
                            local_hospital
                        </span>
                        <input type="text" name="name" placeholder="Hospital Name">
                        </div>

                    <div class="input-field">
                        <span class="material-icons">
                            email
                        </span>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                        
                        <div class="input-field">
                        <span class="material-icons">
                            lock
                        </span>
                        <input type="password" placeholder="Password" name="password_1">
                        </div>

                        <div class="input-field">
                        <span class="material-icons">
                            lock
                        </span>
                        <input type="password" name="password_2" placeholder="Confirm Password">
                        </div>

                        <input type="submit" value="Sign Up" name="Sign_hosptl" class="btn">
                        <p class="so-text">Already have an account? <a href="login.php">Login</a></p>   
                </form>
             </div>
            </div>

            <div class="panels-contnr">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Hospital?</h3>
                        <p>Sign Up as Hospital here, hit the Sign Up button below
                            to continue sign Up for hospital, Ask for blood, Save a life.
                        </p>
                        <button class="btn transparent" id="sign-hsptl">Sign Up</button>
                    </div>
                    <img src="images/undraw_doctors_hwty.svg" class="image" alt=""/>
                </div>
                
                <div class="panel right-panel">
                    <div class="content">
                        <h3>Individual?</h3>
                        <p>Are you a Person? looking forward to becoming a donor?
                           Sign Up here, become a donor and save lives.
                        </p>
                        <button class="btn transparent" id="sign-prsn">Sign Up</button>
                    </div>
                    <img src="images/undraw_sign_in_re_o58h.svg" class="image" alt="">
                </div>
            </div>
        </div>
            
        

        <script>
        let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function() {
        sidebar.classList.toggle("active");
    }
    </script>

        
    <script>
        const sign_prsn = document.querySelector("#sign-prsn");
const sign_hsptl = document.querySelector("#sign-hsptl");
const page = document.querySelector(".page")

sign_hsptl.addEventListener('click', () => {
    page.classList.add("sign-up-mode");
});
sign_prsn.addEventListener('click', () => {
    page.classList.remove("sign-up-mode");
});

    </script>
</body>
</html>