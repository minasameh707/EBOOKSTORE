<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart | Ebookstore</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?
      family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <body>
    <style>
     

.clearfix:before, .clearfix:after{
     content: "";
     display: table;
}
.clearfix:after{
     clear: both;
}
a{
     color:#0067ab;
     text-decoration:none;
}
a:hover{
     text-decoration:underline;
}
.form{
     width: 300px;
     margin: 100px auto;
}
input[type='text'], input[type='email'],
input[type='password'] {
     width: 200px;
     border-radius: 2px;
     border: 1px solid #CCC;
     padding: 10px;
     color: #333;
     font-size: 14px;
     margin-top: 10px;
}
input[type='submit']{
     width:200px;
     height:50px;
     padding: 10px 25px 8px;
     color: #fff;
     background-color: #0067ab;
     text-shadow: rgba(0,0,0,0.24) 0 1px 0;
     font-size: 16px;
     box-shadow: rgba(255,255,255,0.24) 0 2px 0 0 inset,#fff 0 1px 0 0;
     border: 1px solid #0164a5;
     border-radius: 2px;
     margin-top: 10px;
     cursor:pointer;
}
input[type='submit']:hover {
     background-color: #024978;
}
    </style>
   
        <!----------  Nav Bar ------------------>
       <nav class="nav">
	<div class="logo">
    <a href="index.html">
    <img src="images/EbookStore-Logo.png" alt="EbookStore-Logo"/></a>
	</div>
	
	<ul class="nav-menu">	
		<li> <a href="index.html"> Home </a> </li>
		<li> <a href="ebooks.html"> Ebooks </a> </li>
		<li> <a href="purchase.html"> purchase </a> </li>
		<li> <a href="account.html"> Account </a> </li>
	</ul>
</nav>


    <!-- ---------- account page------------- -->
    <title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
<div class="form">
<p>Dashboard</p>
<p>This is another secured page.</p>
<p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a>
</div>

    <!-- ---------------------footer------------------- -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download App for Android and ios mobile phone.</p>
            <div class="app-logo">
              <img src="images/Playstore.png" />
              <img src="images/Applestore.png" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="images/EbookStore-Logo-footer.png" />
            <p>
              This site is valid for all age groups.
            </p>
          </div>
          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Youtube</li>
              <li>Instagram</li>
              <li>Twitterr</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copyright">Copyright 2020 - EbookStore</p>
      </div>
    </div>
    <!-- ---------Javascript for toggle menu------------- -->
    <script>
      var MenuItems = document.getElementById("MenuItems");
      MenuItems.style.maxHeight = "0px";
      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>
    <!-- -----------js for toggle form------------------ -->
    <script>
      var signInForm = document.getElementById("signInForm");
      var signUpForm = document.getElementById("signUpForm");
      var indicator = document.getElementById("indicator");

      function signIn() {
        signUpForm.style.transform = "translateX(300px)";
        signInForm.style.transform = "translateX(300px)";
        indicator.style.transform = "translateX(0px)";
      }
      function signUp() {
        signUpForm.style.transform = "translateX(0px)";
        signInForm.style.transform = "translateX(0px)";
        indicator.style.transform = "translateX(100px)";
      }
    </script>
    <!-- -----------------js for form validation ------------------ -->
    <script>
      function formvalidate() {
        var ptrn = /^([^0-9\W]*)$/;
        if (ptrn.test(document.myform.uname.value)) {
          document.getElementById("uname").textContent = "User Name is Valid";
          document.getElementById("uname").style.background = "#72EF57";
          document.getElementById("uname").style.fontSize = "12px";
        } else {
          document.getElementById("uname").textContent = "User Name is Invalid";
          document.getElementById("uname").style.background = "#EF6257";
          document.getElementById("uname").style.fontSize = "12px";
        }
      }

      document.myform.uname.addEventListener("blur", formvalidate);
    </script>
	
	
  </body>
</html>

<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Dashboard</p>
<p>This is another secured page.</p>
<p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>