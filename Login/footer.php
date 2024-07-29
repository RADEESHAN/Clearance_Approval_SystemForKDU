<footer class="footer-distributed">

<div class="footer-left">
    <h3>KDU <span>Clearance</span></h3>

    <p class="footer-links">
        <a href="../home/Home.php">Home</a>
        |
        <a href="#">About</a>
        |
        <a href="#">Contact</a>
        
 
    </p>

    <p class="footer-company-name">Copyright © 2023 <strong>Pramuditha Radeeshan</strong> All rights reserved</p>
</div>

<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Rathmalana</span>
            Mount Lavenia</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>047 20 30 800</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:sagar00001.co@gmail.com">kduclearace@gmail.com</a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>About the Clearance </span>
        <strong>developers </strong> create this site. this is a web site where you can find instructon for getting a Clearance from the university
        and
        apply a Clearance through this in this web application it help to minimize your work.
    </p>
    <div class="footer-icons">
        <a href="https://www.facebook.com/kdusoutherncampus"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
       
        <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com/@KDU443"><i class="fa fa-youtube"></i></a>
    </div>
</div>
</footer>
<style>
    @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');
* {
    padding: 0;
    margin: 0;
}

body {
    font-family: 'Poppins', sans-serif;
}

html {
    background-color: #eaf0f2;
}

header {
    text-align: center;
    padding-top: 100px;
    margin-bottom: 300px;
    font-size: 35px;
}

header h2 {
    color: #f0525f;
}

header span {
    color: #eaa03f;
}

/* The footer is fixed to the bottom of the page */

footer {
    position: fixed;
    bottom: 0;
}

@media (max-height:800px) {
    footer {
        position: static;
    }
    header {
        padding-top: 40px;
    }
}

.footer-distributed {
    background-color: #2d2a30;
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 50px 50px 60px 50px;
    margin-top: 80px;
}

.footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
    display: inline-block;
    vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left {
    width: 30%;
}

.footer-distributed h3 {
    color: #ffffff;
    font: normal 36px 'Cookie', cursive;
    margin: 0;
}


.footer-distributed h3 span {
    color: #e0ac1c;
}

/* Footer links */

.footer-distributed .footer-links {
    color: #ffffff;
    margin: 20px 0 12px;
}

.footer-distributed .footer-links a {
    display: inline-block;
    line-height: 1.8;
    text-decoration: none;
    color: inherit;
}

.footer-distributed .footer-company-name {
    color: #8f9296;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center {
    width: 35%;
}

.footer-distributed .footer-center i {
    background-color: #33383b;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
    font-size: 17px;
    line-height: 38px;
}

.footer-distributed .footer-center p {
    display: inline-block;
    color: #ffffff;
    vertical-align: middle;
    margin: 0;
}

.footer-distributed .footer-center p span {
    display: block;
    font-weight: normal;
    font-size: 14px;
    line-height: 2;
}

.footer-distributed .footer-center p a {
    color: #e0ac1c;
    text-decoration: none;
    ;
}

/* Footer Right */

.footer-distributed .footer-right {
    width: 30%;
}

.footer-distributed .footer-company-about {
    line-height: 20px;
    color: #92999f;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}

.footer-distributed .footer-company-about span {
    display: block;
    color: #ffffff;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer-distributed .footer-icons {
    margin-top: 25px;
}

.footer-distributed .footer-icons a {
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color: #33383b;
    border-radius: 2px;
    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;
    margin-right: 3px;
    margin-bottom: 5px;
}

.footer-distributed .footer-icons a:hover {
    background-color: #3F71EA;
}

.footer-links a:hover {
    color: #3F71EA;
}

@media (max-width: 880px) {
    .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }
    .footer-distributed .footer-center i {
        margin-left: 0;
    }
}       
</style>