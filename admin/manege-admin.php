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

    if(isset($_SESSION['delete'])){
      echo $_SESSION['delete'];
      unset($_SESSION['delete']);
    }

    if(isset($_SESSION['update'])){
      echo $_SESSION['update'];
      unset($_SESSION['update']);
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

         if($res==TRUE){
         $count=mysqli_num_rows($res);

         $n=1;
         if($count>0){
           while($rows=mysqli_fetch_assoc($res)){
               $id=$rows['id'];
               $full_name=$rows['full_name'];
               $username=$rows['username'];

               ?>
                <tr>
              <td><?php echo $n++  ?></td>
              <td><?php echo $full_name  ?></td>
              <td><?php echo $username ?></td>
              <td>
              <a href="<?php echo SITEURL; ?>admin/Update-admin.php?id=<?php echo $id; ?>" class="btn-secondery">Update account</a>
              <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">delete account</a>
             </td>
            </tr>

               <?php
           }
         }else{

         }

       
         }

     ?>
       
       
      
      </table>
      
    </div>
   </div>

   <?php include('partials/footer.php')  ?>