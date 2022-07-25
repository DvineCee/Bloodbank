<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/donordash.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>My DashBoard</title>
</head>
<body>
<div class="sidebar">
        <div class="logo-content">
             <div class="logo">

                <div class="logo-name"></div>
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
                    <a href="donordash.php">
                    <span class="material-icons">dashboard</span>
                    <span class="links-name">DashBoard</span>
                    </a>
                    <span class="tooltip">DashBoard</span>
                </li>

                <li>
                    <a href="profile.php">
                    <span class="material-icons">person_pin</span>
                    <span class="links-name">My Profile</span>
                    </a>
                    <span class="tooltip">My Profile</span>
                </li>
                <li>
                    <a href="contact.php">
                    <span class="material-icons">contact_page</span>
                    <span class="links-name">contact us</span>
                    </a>
                    <span class="tooltip">contact us</span>
                </li>
                <li>
                    <a href="bdonor.php">
                    <span class="material-icons">bloodtype</span>
                    <span class="links-name">Donate</span>
                    </a>
                    <span class="tooltip">Donate</span>
                    
                </li>
                <div class="logout">
                <li>
                    <a href="bdonor.php">
                    <span class="material-icons">logout</span>
                    <span class="links-name">Logout</span>
                    </a>
                    <span class="tooltip">Logout</span>
                    
                </li>
                </div>
            </ul>
        </div>

        <section class="dashboard">
            <div class="board">
                <h1>DashBoard</h1>
                <div class="boxes">
                    <div class="box-1">
                    <div class="person">
                        <img src="images/20-203432_profile-icon-png-image-free-download-searchpng-ville.png" alt="">
                        <h3>Personal info</h3>
                        </div>
                        <div class="prof">
                            <h4>Name:</h4>
                            <h4>Blood Group:</h4>
                        </div>
                    </div>

                    <div class="box-1">
                    <div class="person">
                        
                        <h3>Donate Today</h3>
                        </div>
                        
                    </div>

                    <div class="box-1">
                    <div class="person">
                        
                        <h3>Blood Requests</h3>
                        </div>
                        <div class="info"><h2>No Requests Available</h2></div>
                    </div>

                    <div class="box-1">
                    <div class="person">
                        <h3>notifications</h3>
                        </div>
                        <span class="material-icons">
                        notifications
                        </span>
                    </div>

                </div>
            </div>

        </section>

        <div class="stats">
                <h1>Donor Statistics<span class="material-icons">donut_small</span></h1>
                
                
            </div>
 





























        <script>
        let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function() {
        sidebar.classList.toggle("active");
    }
    </script>

</body>
</html>