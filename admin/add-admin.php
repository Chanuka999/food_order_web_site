<?php  include('partials/menu.php'); ?>

<div class="main-content" style="background-image:url('../images/img4.jpg')">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br><br>

        <?php
    if(isset($_SESSION['add'])){
      echo $_SESSION['add'];
      unset($_SESSION['add']);
    }

    
    ?>
        <form action="" method="POST">
        <table class="tbl-30">
          <tr>
            <td>Full Name</td>
            <td>
                <input type="text" name="full_name" placeholder="Enter your name">
            </td>
          </tr>

          <tr>
            <td>User Name</td>
            <td>
                <input type="text" name="username" placeholder=" your username">
            </td>
          </tr>

          <tr>
            <td>Password</td>
            <td>
                <input type="password" name="password" placeholder="your password">
            </td>
          </tr>

          <tr>
            <td colspan="2">
              <input type="submit" name="submit" value="Add Admin" class="btn-secondery">
            </td>
          </tr>
        </table>
        </form>
    </div>
</div>

<?php include('partials/footer.php')  ?>

<?php

if(isset($_POST['submit'])){
   // echo "Button clicked";
  $full_name = $_POST["full_name"];
  $username =$_POST["username"];
  $password =md5($_POST["password"]);

  $sql = "INSERT INTO tbl_admin(full_name,username,password)
  values('$full_name','$username','$password');";



  $res = mysqli_query($conn,$sql) or die();

  if($res == true){
     $_SESSION['add'] = "<div class='success'>.Admin added succesfully.</div>";
     header("location:".SITEURL.'admin/manege-admin.php');
  }else{
    $_SESSION['add'] = "<div class='error'>.Failed to add admin.</div>";
    header("location:".SITEURL.'admin/add-admin.php');
  }

}

?>