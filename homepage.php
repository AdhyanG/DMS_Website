<!-- php -->
<?php
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{
  $username=mysqli_real_escape_string($conn,$_POST['username']);

  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $password=md5($_POST['password']);
  $usertype=$_POST['usertype'];
  
 
  $select="SELECT * FROM `dms_tb` WHERE email='$email' && password='$password' ";

  $result=mysqli_query($conn,$select);
  if(mysqli_num_rows($result)>0)
  {
    // for checking username
    $row=mysqli_fetch_array($result);
    if($row['usertype']=='superadmin')
    {
      
    header('location:.superadmin.php');
    }

  }
  
  

};





?>





<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/9788dfdf15.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="homepage.css">
  <title>Home Page</title>

  <style>
  span {
    color: floralwhite;
  }

  #emblem {
    border: 0;
  }
  #marq
  {
    font-weight: bolder;
  
  }

  .topnav-right {
    float: right
  }
  #signUp{
    font-size: 13px;
  }
  #signUp:hover
  {
    font-size: 15px;
 
  }

  </style>

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

      <a href="./signup.php">
        <span class="topnav-right"><i id="ikon" class="fa-solid fa-user"> &nbsp; <span id="signUp">Sign Up</span> </i></span></a>

    </div>

  </nav>

                   <!-- php code -->
 


  <!--main -->

  <div class="container">
        
    <form class="form" action="" method="post">
      <h2>Log In</h2>
    <input class="box" type="email" name="email" id="email" placeholder="enter your email">
    <input class="box" type="password" name="password" id="password" placeholder="enter your password">
   <input type="submit" name="submit" value="login now" id="submit">
   <a href="">Forgot Password?</a>

</form>
<div class="side">
  <img src="./images/DMS2.jpg" alt="" srcset="" height="450px" width="450px">
</div>
  </div>




  <!-- Footer -->
  <footer id="last" class="bg-light fixed text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="">Jammu Authority</a>
  </div>
  <!-- Copyright -->
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>



</body>

</html>