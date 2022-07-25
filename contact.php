<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>contact us</title>
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
       
    <section id="home">
    <div class="container">
        <h1>Connect with Us</h1>
        <p>We would love to respond to your queries and help you enjoy our services</p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>send your request</h3>
                <form>

                    <div class="input-row">
                        <div class="input-group">
                            <label for="">Name</label>
                            <input type="text" placeholder="name">
                        </div>
                        <div class="input-group">
                            <label for="">Phone</label>
                            <input type="text" placeholder="phone number">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label for="">Email</label>
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="input-group">
                            <label for="">subject</label>
                            <input type="text" placeholder="type here">
                        </div>
                    </div>

                    <label>message</label>
                    <textarea  rows="5" placeholder="Your Message"></textarea>

                    <button type="submit">send</button>
            
                </form>
            </div>
            <div class="contact-right">
                <h3>Reach Us</h3>

                <table>
                    <tr>
                        <td>Email</td>
                        <td>contactus@example.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>+234 8123456789</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>12 Me Avenue, calabar</td>
                    </tr>
                </table>
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

</body>
</html>