<!DOCTYPE html>
<html lang="en">

<head>
  <title>Watercare - raise funds to stop water scarcity in tunisia</title>


  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link + icons link
  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" >
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Roboto:wght@300;400;500;700&family=Oswald:wght@600&display=swap"
    rel="stylesheet">
</head>

<body>
<?php
    if (isset($_POST['con'])) {
      $host = "localhost";
      $user = "root";
      $pass = "";
      $db = "watercareproject";

        try {
            $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
            $pdo = new PDO($dsn, $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Retrieve form data
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Check if user exists in the database
            $query = "SELECT * FROM users WHERE email = ? AND password = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$email, $password]);

            // If user is found, redirect to the donation form page
            if ($stmt->rowCount() > 0) {
                header("Location: donation.php");
                exit();
            } else {
                echo "Invalid email or password.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    ?>
  <header class="header" data-header style="background-color:#2B2B2B ;">
    <div class="container">

      <h1>
        <a href="#" class="logo">Watercare</a>
      </h1>

      <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
        </button>

        <a href="#" class="logo">Watercare</a>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link" data-nav-link>
              <span>Home</span>

              <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>
              <span>About</span>

            </a>
          </li>

          <li>
            <a href="#service" class="navbar-link" data-nav-link>
              <span>Service</span>

            </a>
          </li>

          <li>
            <a href="#event" class="navbar-link" data-nav-link>
              <span>Event</span>

            </a>
          </li>

          <li>
            <a href="#" class="navbar-link" data-nav-link>
              <span>Contact</span>

            </a>
          </li>

        </ul>

      </nav>
      <div class="header-action">
        <a href="index.php">
        <button class="btn btn-primary">
          <span>Go Back</span>

          <ion-icon name="arrow-back-outline" aria-hidden="true"></ion-icon>
        </button>
        </a>

      </div>

    </div>
  </header>


  <section class="form-section">
    <div class="form-container" style="height: 500px;width:700px; align-items:center; margin-left:100px;margin-top:80px;">
      
        <form action="login.php" method="POST" >

          <div class="row">
  
              <div class="col" >
  
                  <h3 class="title">Log In</h3>
                  <table style="margin-left: 60px;">
                    
                    <tr>
                      <th>Email:</th>
                      <td><input type="email" class="personal-info-input" id="email" name="Email"></td>
                    </tr>
                    <tr>
                      <th>Password:</th>
                      <td><input type="password" class="personal-info-input" id="password" name="password"></td>
                    </tr>
                    
                  </table>

  
              </div>
  
      
          </div>
          
  
          <input type="submit" method='POST' value="log in" name="con"  class="btn btn-secondary" style="color:white;" id="donation-button">
          <input type="reset" value="clear"  class="btn btn-secondary" style="color:white; margin-top: 10px;" id="donation-reset">
  
      </form>
    </div>
    <div class="info">
       <h1 style="margin-left: 20px; color:white; ">Why Donate?</h1>
       <p style="color:rgb(255, 255, 255);margin-left: 20px; margin-top: 30px;
       margin-bottom: 40px;">Join us in making a difference 
        for our beloved Tunisia. Water scarcity is threatening the health and wellbeing of our 
        families and communities. With your support, we can provide clean water and hope for a 
        better tomorrow. Every drop counts. Every donation matters. 
        Together,we can bring life back to our land. Thank you for your kindness and generosity.<br>
          <br>
          "Thousands have lived without love, not one without water." - W. H. Auden<br>
          we remind you of our goals :
          </p>
          <ul style=" color:rgb(255, 255, 255);margin-left: 60px;margin-bottom: 40px;">

            <li style="list-style-type: circle;">Empower Change</li>
            <li style="list-style-type: circle;">Raise Awareness</li>
            <li style="list-style-type: circle;">Save Water</li>
            <li style="list-style-type: circle;">Create Solutions</li>

          </ul>
        <img src="./assets/images/kido.jpg" class="img">
    </div>
  
  </section>

<!-- 
    - #FOOTER
  -->

  <footer class="footer" id="footer">
    <div class="container">
      <div class="footer-col1 footer-col" style="padding-right: 40px;">
        <h1>
          <a href="#" class="logo">Watercare</a>
        </h1>
        <p style="margin-top: 20px; margin-right: 20px; color: lightgrey; ">Choosing our fund raising organization for addressing water scarcity is a 
          smart choice because we are committed to making a tangible difference in the 
          lives of those affected by water scarcity in Tunisia. We have a team of dedicated 
          professionals who are passionate about promoting sustainable water use practices, 
          investing in water-saving technologies, and supporting policies that ensure access 
          to safe and reliable water for all. 
        </p>
        
      </div>
        <div class="footer-col">
          <h2>Organization</h2>
          <ul>
            <li><a href="#about">about us</a></li>
            <li><a href="#service">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#event">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h2>Contact</h2>
          <div class="social-links" style="display: flex; flex-direction: column;">
            <div style="display: flex; flex-direction: row;"><a href="mailto:watercare@gmail.com"><i class="fas fa-envelope"></i></a><p style="color:lightgrey;margin-top: 7px;">info@water.co.nz</p></div>
          
          <div  style="display: flex; flex-direction: row;">  <a rel="noreferrer noopener noreferrer" aria-label="Address" target="_blank" href="http://www.google.com/maps/place/36.8592743,10.2039706"><i class="fas fa-map-marker-alt"></i></a><p style="color:lightgrey;margin-top: 7px;">Ariana, Tunisia</p></div>
          <div style="display: flex; flex-direction: row;"><a href="tel:+216 50 754 654"><i class="fas fa-phone-alt"></i></a><p style="color:lightgrey;margin-top: 7px;">+216 50 754 654</p></div>
          </div>
        </div>
        <div class="footer-col">
          <h2>follow us</h2>
          <div class="social-links">
            <a href="https://www.facebook.com/WatercareNZ"><i class="fab fa-facebook-f"></i></a>
            <!--<a href="#"><i class="fab fa-twitter"></i></a>-->
            <a href="https://www.instagram.com/watercare_nz/?fbclid=IwAR2SuThSeivgUokjz4Cg4pvt800aVL5CtC-JTYRMITbDgdAITfwO5sDNQuo"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/watercare-services-limited/"><i class="fab fa-linkedin-in"></i></a>
          </div>
      </div>
        
    </div>
   <p style="text-align: center; color:lightgrey; margin-top: 70px;">Copyright © 2023 All Rights Reserved By WATERCARE Organization</p>
  </footer>
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>
</body>
</html>
