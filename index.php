<?php  include('partials-front/menu.php');  ?>

    <section class="food-search text-center">
        <div class="container">
            <form action="form-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for foods" required>
                <input type="submit" name="submit" value="search" class="btn btn-primary"> 
            </form>
        </div>

    </section>

    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

      <?php
          
          $sql = "SELECT * FROM tbl_category WHERE active='yes' AND featured='yes' LIMIT 3";

          $res = mysqli_query($conn,$sql);

          $count = mysqli_num_rows($res);

          if($count>0){
            while($row=mysqli_fetch_assoc($res)){
             $id = $row['id'];
             $title=$row['title'];
             $image_name = $row['image_name'];
             ?>
            <a href="category-foods.html">
            <div class="box-3 float-container">
                <?php  
                if($image_name==""){
                    echo "<div class='error'>Image not available</div>";
                }else{
                    ?>

                  
                    <img src="<?php echo SITEURL;  ?>images/category/<?php echo $image_name; ?>" alt="burger" class="img-responsive img-curve">
                    <?php
                }
                ?>
                
                <h3 class="float-text text-container"><?php echo $title; ?></h3>
                </div>
                </a>

            <?php
            }
          }else{
            echo "<div class='error'>category not added.</div>";
          }


       ?>

           
        
       
        <div class="clearfix"></div>
        </div>

    </section>

    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>


            <?php
              
              $sql2 = "SELECT * FROM tbl_food WHERE active='yes' AND featured='yes'";

              $res2 = mysqli_query($conn,$sql2);

              $count2 =mysqli_num_rows($res2);

              if($count2>0){
                 $id = $row['id'];
                 $title=$row['title'];
                 $pride=$row['price'];
                 $description = $row['description'];
                 $image_name=$row['image_name'];
                 ?>
                <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="chicke Hawin pizza" class="img-responsive img-curve">

                </div>
                <div class="food-menu-desc">
                    <h4>Food Title</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Italian Sauce,Chicken,and organic vegetables.
                    </p>
                    <br>

                    <a href="order.html">Order Now</a>
                </div>
            </div>
            
                 <?php
              }else{
                echo "<div class='error'>Image not found.</div>";
              }


            ?>
            
            
            <div class="clearfix"></div>
        </div>
        <p class="text-center">
          <a href="#">See All Foods</a>
        </p>
    </section>
    <?php  include('partials-front/footer.php');  ?>