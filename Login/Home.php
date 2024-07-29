<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3f91c23995.js" crossorigin="anonymous"></script>

    <script>
        // Disable browser back button
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
    </script>

<style>
        body {
            background-image: url('kduBG.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <div class="nav">
        <a class="navbar-brand" href="#">
            <img src="kdu-logo2.png" alt="Logo">
        </a>
        <input type="checkbox" id="nav-check">
        <div class="nav-header"></div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        <div class="nav-links">
            <a href="#" class="active">Home</a>
            <a href="#" class="active">Contact</a>
            <a href="services.html" class="active">Services</a>
            
            <i class="fa-regular fa-user"></i><a href="login.php" class="btn">Login</a></div>
       
    </div>

    <section class="home" id="home">
        <div class="home-content">
            <b></b><h1>KDU Clearance System</h1></b>
            <div class="text-animate">
                <h3>Clearance Report Generating System</h3>
            </div>
            <p>Welcome to the KDU Clearance Report Generation System! Say goodbye to the hassle of manual paperwork for student sick reports. We've revolutionized the process to make it quick, easy, and efficient. Experience seamless automation that simplifies your life. Welcome to a new era of convenience!</p>
            
        </div> 
        <span class="home-imgHover"></span>
    </section>



    <footer>
        <div id="navbar-container">
            <?php include("footer.php"); ?>
        </div>
 </footer>


</body>
</html>
