<?php
session_start();

    $_SESSION;
?>
<?php include('server.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/signup.css">
    <title>Login</title>
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
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="donor.php">Become a Donor</a></li>
                <a href="signup.php"><button>Sign up</button></a>
            
            </ul>
        </nav>
        

        <div class="page">
        <div class="form-contnr">
            <div class="sign-dnr-hsp">
                <form action="login.php" class="sign-up-prsn" method="POST">
                    <h2 class="title">Login</h2>
                    <?php include('errors.php'); ?>

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
                        <input type="password" name="password" placeholder="Password">
                        </div>

                        
                        <input type="submit" value="Sign In" name="Log_person" class="btn solid">
                        <p class="so-text">New here? <a href="signup.php">Sign Up</a> to create account</p>
                </form>

                <form action="login.php" class="sign-up-hsptl" method="POST">
                    <h2 class="title">Login</h2>

                    <div class="input-field">
                        <span class="material-icons">
                            email
                        </span>
                        <input type="email" placeholder="Email">
                    </div>
                        
                        <div class="input-field">
                        <span class="material-icons">
                            lock
                        </span>
                        <input type="password" placeholder="Password" name="password">
                        </div>

                        <input type="submit" value="Sign In" name="Log_hosptl" class="btn">
                        <p class="so-text">New here? <a href="signup.php">Sign Up</a> to create account</p>   
                </form>
             </div>
            </div>

            <div class="panels-contnr">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Hospital?</h3>
                        <p>Login as Hospital here, hit the Sign In button below
                            to continue Login as hospital, Save a life today.
                        </p>
                        <button class="btn transparent" id="sign-hsptl">Sign In</button>
                    </div>
                    <img src="images/undraw_medicine_b-1-ol.svg" class="image" alt=""/>
                </div>
                
                <div class="panel right-panel">
                    <div class="content">
                        <h3>Individual?</h3>
                        <p>Hit the button below to Login, 
                            Donate blood, save a life
                        </p>
                        <button class="btn transparent" id="sign-prsn">Sign In</button>
                    </div>
                    <img src="images/undraw_access_account_re_8spm.svg" class="image" alt="">
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

        <script src="/js/slide.js"></script>


</body>
</html>