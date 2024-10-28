<?php include('partials/menu.php');  ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Food</h1>

        <br><br>

        <form action="" method="POST" enctype="multipart/form-data">
         <table>
            <tr>
                <td>title</td>
                <td>
                    <input type="text" name="title" placeholder="title of the food">
                </td>
            </tr>
            <tr>
                <td>Description</td>
                <td>
                    <textarea name="description" cols="30" rows="5" placeholder="description of the food"></textarea>
                </td>
            </tr>
           <tr>
            <td>Price</td>
            <td>
                <input type="number" placeholder="enter price">
            </td>
           </tr>
           <tr>
            <td>Image</td>
            <td>
                <input type="file" name="image">
            </td>
           </tr>
           <tr>
            <td>Category</td>
            <td>
            <select name="category">
            <?php
            $sql = "SELECT * FROM tbl_category WHERE active='yes'";
 
            $res = mysqli_query($conn,$sql);

            $count=mysqli_num_rows($res);

            if($count>0){
                while($row=mysqli_fetch_assoc($res)){
                    $id=$row['id'];
                    $title=$row['title']; 

                    ?>
                     <option value="<?php echo $id; ?>"><?php echo $title; ?></option>    
                    <?php
                }
            }else{
              ?>
                  <option value="0">No category found.</option>
              <?php
            }
 
             ?>


           
                </select>
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
            $description =$_POST['description'];
            $price = $_POST['price'];


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

            if(isset($_FILES['image']['name'])){

                $image_name = $_FILES['image']['name'];

                if($image_name!=""){
                    $ext = end(explode('.',$image_name));

                    $image_name = "Food-name".rand(0000,9999).".".$ext;
                }
            }else{
                $image_name = "";
            }
        }
     

        ?>
    </div>
</div>


<?php include('partials/footer.php');  ?>