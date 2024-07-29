<!--?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}
?-->



<!DOCTYPE html>
<html lang="en">

<head>
    <title>ma web page</title>
    <link rel="stylesheet" type="text/css" href="ma.css" >
 

    <script src="https://kit.fontawesome.com/3f91c23995.js" crossorigin="anonymous"></script>
</head>

<body>



    <div id="navbar-container">
        <?php include("navbar.php"); ?>
    </div>

    <section class="hero">
        <style>
            .hero {
                background-image: url('ma2.jpg');
                background-size: cover;
                background-position: center;
                text-align: center;
                padding: 100px;
                color: #1f0535;
                position: relative;
            }

            .blur-card {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5); /* Adjust the alpha value to control transparency */
                backdrop-filter: blur(5px); /* Adjust the blur amount as needed */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                color: white;
                padding: 20px;
            }
        </style>

        <div class="blur-card">
            <h1>Welcome Managment Assistant</h1>
            <p>Providing quality Managment services.</p>
        </div>
    </section>

<div class="service">
    <div class="title">
        <h2>Services</h2>
    </div>

    <div class="box">
        <div class="card ">
            <style>.card{
    height: 365px;
    width: 335px;
    padding: 20px 35px;
    background: #191919;
    border-radius: 20px;
    margin: 15px;
    position: relative;
    overflow: hidden;
    text-align: center ;  }</style>


        <i class="fa-solid fa-file-arrow-up"></i>
            <h5>View student request Clearnce</h5>
            <div class="pra">
                <p>You can see student  apply clearance request here.so it help for your works.
                </p>
                <p style="text-align: center;">
                <a class="button" href="/Clearnce/clearncedisplay/index.php">Click here</a> 
            </p>
            </div>
        </div>

        <div class="card">
        <i class="fa-solid fa-file">
            <style>
                .card i{ font-size: 50px;display: block;text-align: center;margin: 25px 0px;color: #f9004d; 
}
            </style>
        </i>
            <h5>View approved clearance</h5>
            <div class="pra">
                <p>You can see students clearances history here.Those approve or reject</p>
                <p style="text-align: center;">
                <a class="button" href="/Clearnce/Ma/viewIndex.php">Click here</a> 
            </p>
            </div>
        </div>

        


        <div class="card">
        <i class="fa-solid fa-file">
            <style>
                .card i{ font-size: 50px;display: block;text-align: center;margin: 25px 0px;color: #f9004d; 
}
            </style>
        </i>
            <h5>Add students to the system</h5>
            <div class="pra">
                <p>You can add students to system simply click the button and fill the form.</p>
                <p style="text-align: center;">
                <a class="button" href="registration.php">Click here</a> 
            </p>
            </div>
        </div>



    </div>
</div>

<footer>
    <div id="navbar-container">
        <?php include("../Login/footer.php"); ?>
    </div>
    </footer>

    
</body>

</html>