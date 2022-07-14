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


    <div class="page">
        <div class="form-contnr">
            <div class="sign-dnr-hsp">
                <form action="donorreg.php" class="donoreg" method="POST">
                    <h2 class="title">Sign Up</h2>
                    
                    <div class="input-field">
                        <span class="material-icons">
                            person
                        </span>
                        <input type="username" name="username" placeholder="Username" required>
                        </div>

                    <div class="input-field">
                        <span class="material-icons">
                            email
                        </span>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    
                    <div class="input-field">
                        <span class="material-icons">
                            local_phone
                        </span>
                        <input type="phone" name="phone" placeholder="Phone no." required>
                        </div>
                        
                        <div class="input-field">
                        <span class="material-icons">
                            lock
                        </span>
                        <input type="password" name="password_1" placeholder="Password" required>
                        </div>

                        <div class="input-field">
                        <span class="material-icons">
                            lock
                        </span>
                        <input type="password" name="password_2" placeholder="Confirm Password" required>
                        </div>

                        <input type="submit" value="Sign Up" name="Sign_person" class="btn solid">
                        <p class="so-text">Already have an account?, <a href="login.php">Login</a></p>
                </form>
                </div>
                
             <div class="container">
    <div class="content">
      <form action="#">
      <div class="title"><h2>Become A Donor</h2>
    <i class='bx bxs-donate-blood bx-tada bx-flip-horizontal' ></i>
    </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="date" placeholder="Enter Date of birth" class="form-control" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter Phone" required>
          </div>
          <div class="input-box">
            <span class="details">Blood Group</span>
            <select name="Blood Group" class="form-control" required>
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
          <input type="submit" value="Continue">
        </div>
      </form>
    </div>
  </div>
</body>
</html>