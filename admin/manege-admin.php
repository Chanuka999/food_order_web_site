<?php  include('partials/menu.php'); ?>

    <div class="main-content">
    <div class="wrapper">
      <h1>MANEGE ADMIN</h1>
      <br><br>


     <?php
    if(isset($_SESSION['add'])){
      echo $_SESSION['add'];
      unset($_SESSION['add']);
    }

    
    ?>
    <br><br><br>
      <a href="add-admin.php" class="btn-primary">Add admin</a>
      <br><br><br>
      <table class="tbl-full">
        <tr>
          <th>S.N</th>
          <th>Full Name</th>
          <th>Username</th>
          <th>Action</th>
        </tr>

        <?php

         $sql = "SELECT * FROM tbl_admin";

         $res = mysqli_query($conn,$sql);

         if($res=TRUE){
         

       
         }

     ?>
        <tr>
          <td>1</td>
          <td>chanuka</td>
          <td>chanuu</td>
          <td>
            <a href="#" class="btn-secondery">Update account</a>
            <a href="#" class="btn-danger">delete account</a>
          </td>
        </tr>

        <tr>
          <td>1</td>
          <td>chanuka</td>
          <td>chanuu</td>
          <td>
          <a href="#" class="btn-secondery">Update account</a>
          <a href="#" class="btn-danger">delete account</a>
          </td>
        </tr>

        <tr>
          <td>1</td>
          <td>chanuka</td>
          <td>chanuu</td>
          <td>
          <a href="#" class="btn-secondery">Update account</a>
          <a href="#" class="btn-danger">delete account</a>
          </td>
        </tr>

        <tr>
          <td>1</td>
          <td>chanuka</td>
          <td>chanuu</td>
          <td>
          <a href="#" class="btn-secondery">Update account</a>
          <a href="#" class="btn-danger">delete account</a>
          </td>
        </tr>
      </table>
      
    </div>
   </div>

   <?php include('partials/footer.php')  ?>