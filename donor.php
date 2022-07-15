<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="/css/donor.css">
    <title>Become a donor</title>
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
                <a href="signup.php"><button>Sign up</button></a>
                <a href="login.php"><button>Login</button></a>
            </ul>
        </nav>

        <div class="home">
            <div class="home-img">
                <div class="image">
                    <img src="/images/2690217 (2).jpg" alt="">
                </div>
                <div class="didtxt">
                    <div class="matdyk">
                        <span class="material-icons">
                            fact_check
                            </span>
                    <h1 class="dyk">Did You Know?</h1>
                    </div>
                    <p class="facts">After a person donates blood, the body will replenish the blood loss by stimulating the production of new blood cells.
                                    The new blood cells would help in maintaining a person’s good health.</p>
                </div>
                <div class="btndnr">
                <a href="signup.php"><button class="dnr-reg">Become a Donor</button></a>
                </div>
            </div>
            </div>

            <section id="reveal">
            <div class="container reveal">
        <h2>Your Title</h2>
        <div class="cards">
          <div class="text-card">
            <h3>Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="text-card">
            <h3>Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="text-card">
            <h3>Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
            </section>
        
 






















        <script>
        let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function() {
        sidebar.classList.toggle("active");
    }
    </script>


<script type="text/javascript">
    window.addEventListener('scroll', reveal);

    function reveal(){
      var reveals = document.querySelectorAll('.reveal');

      for(var i = 0; i < reveals.length; i++){

        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop < windowheight - revealpoint){
          reveals[i].classList.add('active');
        }
        else{
          reveals[i].classList.remove('active');
        }
      }
    }
    </script>

</body>
</html>