<?php include('partials/menu.php');   ?>

<div class="main-content">
    <div class="wrapper">
        <h1>ADD CATEGORY</h1>
      <br><br>

      <?php

      if(isset($_SESSION['add'])){
        echo $_SESSION['add'];
        unset($_SESSION['add']);
      }



        ?>
        <br><br>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>title:</td>
                    <td>
                        <input type="text" name="title" placeholder="category title">
                    </td>
                </tr>
                <tr>
                    <td>Featured:</td>
                    <td>
                        <input type="radio" name="featured" value="yes">Yes
                        <input type="radio" name="featured" value="No">No
                    </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td>
                        <input type="radio" name="active"value="yes">Yes
                        <input type="radio" name="active"value="No">No 
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="add category" class="btn-secondery">
                    </td>
                </tr>
            </table>
        </form>

       <?php
      
      if(isset($_POST['submit'])){
        $title = $_POST['title'];

        if(isset($_POST['featured'])){
            $featured = $_POST['featured'];

        }else{
            $featured = "No";
        }

        if(isset($_POST['active'])){
            $active = $_POST['active'];
        }else{
            $active = "No";
        }

        $sql ="INSERT INTO tbl_category(title,featured,ative)
        values('$title','$featured','$active');"
        ;

       $res = mysqli_query($conn,$sql);

       if($res==true){
         $_SESSION['add'] = "<div class='success'>Category added Successfully.</div>";

         header('location:'.SITEURL.'admin/manege-category.php');
       }else{
        $_SESSION['add'] = "<div class='error'>Failed to add Category.</div>";

        header('location:'.SITEURL.'admin/add-category.php');
       }

      }


    ?>

    </div>
</div>

<?php include('partials/footer.php');   ?>