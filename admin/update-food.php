<?php  include('partials/menu.php'); ?>

<?php
if(isset($_GET['id'])){
 
    $id = $_GET['id'];

    $sql2 = "SELECT * FROM tbl_food WHERE id=$id";

    $res2 = mysqli_query($conn,$sql2);

    $row2=mysqli_fetch_assoc($res2);

    $title = $row2['title'];
    $description = $row2['description'];
    $price = $row2['price'];
    $current_image=$row2['image_name'];
    $current_category = $row2['category_id'];
    $featured = $row2['featured'];
    $active = $row2['active'];

}else{
     header('location:'.SITEURL.'admin/manege-food.php');
}

?>


<div class="main-content">
    <div class="wrapper">
        <h1>Update Food</h1>
        <br><br>
<form action="" method="POST" enctype="multipart/form-data">
         <table>
            <tr>
                <td>title</td>
                <td>
                    <input type="text" name="title" value="<?php echo $title;  ?>">
                </td>
            </tr>
            <tr>
                <td>Description</td>
                <td>
                    <textarea name="description" cols="30" rows="5"><?php $description; ?></textarea>
                </td>
            </tr>
           <tr>
            <td>Price</td>
            <td>
                <input type="number" name="price" placeholder="enter price">
            </td>
           </tr>
           <tr>
            <td>Current Image</td>
            <td>
               <p>display the image if available</p>
            </td>
           </tr>

           <tr>
             <td>Select New Image</td>
             <td>
                <input type="file" name="image">
              </td>
            
           </tr>
           <tr>
            <td>Category</td>
            <?php
            $sql = "SELECT * FROM tbl_category WHERE active='yes'";
 
            $res = mysqli_query($conn,$sql);

            $count=mysqli_num_rows($res);

            if($count>0){
                while($row=mysqli_fetch_assoc($res)){
                    $category_title=$row['title'];
                    $category_id=$row['id']; 

                  //echo "<option value='$category_id'>$category_title</option>";
                  ?>
                     <option value="<?php echo $category_id; ?>"><?php echo $category_title; ?></option>    
                    <?php
                }
            }else{
              ?>
                  <option value="0">No category found.</option>
              <?php
            }
 
             ?>

            <td>
            <select name="category">
                <option value="1">pizza</option>
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
</div>
</div>
<?php  include('partials/footer.php'); ?>