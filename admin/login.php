<?php include('../config/constants.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-food order system</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="login">
        <h1 class="text-center">Login</h1>
           <br><br>

           <?php
        if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        if(isset($_SESSION['no-login-message'])){
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }

        ?>
        <form action="" method="POST" class="text-center">
            <label>USERNAME</label>
            <input type="text" name="username" placeholder="username">
            <br><br>
            <label>PASSWORD</label>
            <input type="password" name="password" placeholder="password">
            <br><br>
            <input type="submit" name="submit" value="login" class="btn-primary">
            <br><br>
        </form>
        <p class="text-center">Created by-<a href="">CHANUKA RANDITHA</a></p>
    </div>

    <?php 
     if(isset($_POST['submit'])){
       $username = $_POST['username'];
       $password = md5($_POST['password']);

      $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

      $res = mysqli_query($conn,$sql);

      $count=mysqli_num_rows($res);

      if($count==1){
        $_SESSION['login'] = "<div class='success'>Login Successfully.</div>";
        $_SESSION['user'] =$username;

        header('location:'.SITEURL.'admin/');
      }else{
        $_SESSION['login'] = "<div class='error'>username and password didi not match.</div>";

        header('location:'.SITEURL.'admin/login.php');
      }
     }
    
    ?>
</body>
</html>