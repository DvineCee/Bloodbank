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
    <link rel="stylesheet" href="style.css"/>
    

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bloodbank</title>
</head>
<body>

<div class="sidebar">
        <div class="logo-content">
             <div class="logo">
             <img src="images/bloodbanklogo2.png">
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
                <li>
                    <a href="donor.php">
                    <span class="material-icons">cloud_download</span>
                    <span class="links-name">Download App</span>
                    </a>
                    <span class="tooltip">Get the App</span>
                    
                </li>
            </ul>
    </div>
       
        <nav>
            <a href="#" class="logo">
                <img src="images/bloodbanklogo.png"/>
            </a>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="donor.php">Become a Donor</a></li>
                <a href="signup.php"><button>Sign up</button></a>
                <a href="login.php"><button>Login</button></a>
                <a href="getApp.php"><button>Get the App</button></a>
            </ul>
        </nav>
        

        
        <div class="home-content">
            <div class="image-slider">
                <div class="image-item active">
                    <img src="images/blood-donation-1654774436.webp" alt="">
                    <div class="info">
                        <h1 data-text="Welcome">Welcome to e-BloodBank</h1>
                        <p>Connecting Donors to save lives</p>
                        <button id="dnr">Become a Donor</button>
                    </div>
                     
                </div>
                <div class="image-item">
                    <img src="images/6553670.jpg" alt="">
                    <div class="info">
                        <h1 class="donate" data-text=""></h1>
                        <p class="save">Become a donor today, help save a life</p>
                        <button id="dnr2">Become a Donor</button>
                    </div>
                </div>

                <div class="image-item">
                    <img src="images/donate_blood_rotator.jpg" alt="">
                    <div class="info">
                        <h1 data-text="Give">Give Blood, Give life</h1>
                        <p>Becoming a donor is beneficial to your health</p>
                        <button id="dnr">Become a Donor</button>
                    </div>
                </div>

                <div class="image-item">
                    <img src="images/Blood-facts_10-illustration-graphics__canteen.png" alt="">
                    <div class="info">
                        <h1 data-text="Save">Save a Life</h1>
                        <p>Give the gift of blood</p>
                        <button id="dnr">Become a Donor</button>
                    </div>
                </div>

                <div class="image-item">
                    <img src="images/_107317099_blooddonor976.jpg" alt="">
                    <div class="info">
                        <h1 data-text="Welcome">Welcome to e-BloodBank</h1>
                        <p>Connecting Donors to save lives</p>
                        <button id="dnr">Become a Donor</button>
                    </div>
                </div>

                <div class="navigation">
                  <div class="btn active"></div>
                  <div class="btn"></div>
                  <div class="btn"></div>
                  <div class="btn"></div>
                  <div class="btn"></div>
                </div>
            </div>
        
        </div>
        

        <section id="about">
            <h1> E-BloodBank</h1>
            <div class="e-box">
                <div class="e-box-one">
                  <div class="box-cnt">
                    <span class="overlay"></span>
                    <div class="lg-image">
                        <img src="images/blood-donation-male-characters-donate-blood-diseased-people-female-nurse-taking-lifeblood-into-plastic-container-men-donor-sitting-medical-chair-clinic-cartoon-people-vector-illustration_877.webp">
                    </div>
                    </div>
                    <div class="txt">
                        <h2>Donate</h2>
                        <p class="one">The need for blood is ever rising and patients all across Nigeria need blood donors
                            Become a Donor today <a href="donor.php"> Click here to save a life</a> </p>
                    </div>
                </div>

                <div class="e-box-two">
                <div class="box-cnt">
                    <span class="overlay"></span>
                    <div class="lg-image">
                        <img src="images/hospital.jpg">
                    </div>
                </div>
                    <div class="txt">
                        <h2>Connect to Hospitals</h2>
                        <p>Donating blood is beneficial as it reduces the risk of heart and liver ailments that are caused due to iron overload in the body. 
                                                                    </p></div>
                </div>
                <div class="e-box-three">
                 <div class="box-cnt">
                    <span class="overlay"></span>
                    <div class="lg-image">
                        <img src="images/lifeblood-transfusion-from-human-hand-plastic-container-doctor-blood-donation-laboratory_7737-2251.webp">
                    </div>
                    </div>
                    <div class="txt">
                        <h2>What we do</h2>
                        <p>E-BloodBank connects hospitals to donors reducing the risks of losing a loved one for lack of blood </p></div>
                </div>
            </div>
        </section>
        
        <section class="sec-01">
      <div class="container">
        <h2 class="main-title">Donate Blood, Save a Life</h2>
        <div class="content">
          <div class="image">
            <img src="images/volunteer-collecting-blood-donation-free-vector.jpg" alt="">
          </div>
          <div class="text-box">
            <h3></h3>
            <p>Blood is high in demand globally. Human blood cannot be manufactured by industries. Blood can be received only from donors. 

There are a lot of myths surrounding donating blood. Donating blood has a lot of health benefits. 

Donating blood doesn’t just limit its benefits to the receiver but also offers health benefits to the donors.
            </p>
          </div>
        </div>
      </div>
    </section>
       
    <?php include 'footer.php' ?>
        
        


        


















        
        
        
    


    
    <script>
        let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function() {
        sidebar.classList.toggle("active");
    }
    </script>

    <script type="text/javascript">
        var slides = document.querySelectorAll('.image-item');
        var btns = document.querySelectorAll('.btn');
        let currentSlide = 1;


        var manualNav = function(manual){
           
            slides.forEach((slide) => {
             slide.classList.remove('active');

             btns.forEach((btn) => {
             btn.classList.remove('active');
            });
        });
           
            

         slides[manual].classList.add('active');
         btns[manual].classList.add('active');
        }

        btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
              manualNav(i);
              currentSlide = i;  
            });
        });



        var repeat = function(activeClass){
            let active = document.getElementsByClassName('active');
            let i = 1;

            var repeater = () => {
                setTimeout(function(){
                    [...active].forEach((activeSlide) => {
                        activeSlide.classList.remove('active');
                    });

                    slides[i].classList.add('active');
                    btns[i].classList.add('active');
                    i++;

                    if (slides.length == i){
                        i = 0;
                    }
                    if (i >= slides.length){
                        return;
                    }
                    repeater();
                },20000);
            }
            repeater();
        }
        repeat();
    </script>




<script>
      //common reveal options to create reveal animations
      ScrollReveal({
        //reset: true,
        distance: '60px',
        duration: 2500,
        delay: 400
      });

      //target elements, and specify options to create reveal animations
      ScrollReveal().reveal('.main-title, .section-title', { delay: 500, origin: 'left' });
      ScrollReveal().reveal('.sec-01 .image, .info', { delay: 600, origin: 'bottom' });
      ScrollReveal().reveal('.text-box', { delay: 700, origin: 'right' });
      ScrollReveal().reveal('.media-icons i', { delay: 500, origin: 'bottom', interval: 200 });
      ScrollReveal().reveal('.sec-02 .image, .sec-03 .image', { delay: 500, origin: 'top' });
      ScrollReveal().reveal('.media-info li', { delay: 500, origin: 'left', interval: 200 });
    </script>
</body>
</html>