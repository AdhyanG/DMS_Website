<!-- php -->
<?php
include 'connection.php';
if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  $usertype=$_POST['usertype'];
 
  $select="SELECT * FROM `dms_tb` WHERE email='$email' && password='$password'";

  $result=mysqli_query($conn,$select);
  if(mysqli_num_rows($result)>0)
  
  {

    ?>
    <script>
      alert("user already exist");
    </script>
<?php

  }
  else 
  {
    $insert="INSERT INTO `dms_tb`(`username`,`email`,`password`,`usertype`) VALUES ('$username','$email','$password','$usertype')";
    mysqli_query($conn,$insert);
    header('location:homepage.php');
  }

}





?>








<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./signup.css">
    <script src="https://kit.fontawesome.com/9788dfdf15.js" crossorigin="anonymous"></script>

    <title>Sign Up</title>
    <style>
       span {
    color: floralwhite;

  }
  #signUp
  {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
  }
  #signUp:hover
  {
    font-size: 17px;
  }
  #marq
  {
    font-weight: bolder;
  }
  h2{
    color: black;
  }
    </style>
  </head>
  <body>  
    <!-- navbar -->
    <nav class="navbar navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img id="emblem" src="./images/emblem.png" width="40px" height="40px">&nbsp;
        <span>J&K GOVERNMENT</span>
      </a>
      <span id="marq"><marquee width="60%" direction="left" height="40px">
Document Management System by J&K Government
</marquee></span>

      <a href="./homepage.php">
        <span class="topnav-right"><i  class="fa-solid fa-user"> &nbsp; <span id="signUp">Log In</span> </i></span></a>

    </div>

  </nav>

    <section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Sign Up </h2>
      
		    <form class="login-form" action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" class="form-control" placeholder="enter your name" name="username">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Email</label>
    <input type="email" class="form-control" placeholder="enter your email" name="email">
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="enter your password" name="password">
  </div>
  
  
    <div class="form-group">
    <label for="">User type</label>
    <select name="usertype" id="usertype">
    <option selected="selected" value="user">user</option>
    <option value="admin">admin</option>
    <option  value="su peradmin">superadmin</option>
   
    </select>
  </div>
  <button type="submit" class="btn btn-login float-right">Submit</button>
</form>
<div class="copy-text">Created by  ©  <a id="jk" href="#">J&K Govt</a></div>
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
      
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
       
    </div>
  </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>
 

<!-- footer -->
    
<footer id="last" class="bg-light fixed text-center text-lg-start">
  <!-- Copyright -->
  <div id="end" class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="">Jammu Authority</a>
  </div>
  <!-- Copyright -->
</footer>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    
  </body>
</html>