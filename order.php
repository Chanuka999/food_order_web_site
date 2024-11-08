<?php  include('partials-front/menu.php');  ?>

  <?php
  if(isset($_GET['food_id'])){
   $food_id= $_GET['food_id'];

   $sql = "SELECT * FROM tbl_food WHERE id= $food_id";

   $res = mysqli_query($conn,$sql);

   $count = mysqli_num_rows($res);

   if($count==1){
      $row = mysqli_fetch_assoc($res);
      $title = $row['title'];
      $price=$row['price'];
      $image_name=$row['image_name'];

   }else{
    header('location:'.SITEURL);
   }
  }else{
   header('lacation:'.SITEURL);
  }

  ?>

      <section class="food-search text-center">
        <div class="container">
           <h2 class="text-center text-white">Fill this form to confirm your order</h2>

           <form action="#" class="order">
            <fieldset>
                <legend>Selected Food</legend>

                <div class="food-menu-img">
                    <?php
                      
                      if($image_name == ""){
                        echo "<div class='error'>Image not available.</div>";
                      }else{
                          ?>
                          <img src="<?php echo SITEURL; ?>images/food/<?php  echo $image_name; ?>" alt="chicke Hawin pizza" class="img-responsive img-curve">
                          <?php
                      }
                    ?>
                   
                </div>
                <div class="food-menu-desc">
                    <h3><?php echo $title; ?></h3>
                   <p class="food-price"><?php echo $price; ?></p>

                   <div class="order-label">Quantity</div>
                   <input type="number" name="qty" class="input-responsive" value="1" required>
                </div>
            </fieldset>

            <fieldset>
                <legend>Delivery Details</legend>
                <div class="order-label">Full Name</div>
                <input type="text" name="full-name" placeholder="E.g. chanuka randitha" class="input-responsive" required>

                <div class="order-label">Phone Number</div>
                <input type="tel" name="Contact" placeholder="E.g. 077284xxxxx" class="input-responsive" required>
               
                <div class="order-label">Email</div>
                <input type="email" name="email" placeholder="E.g. chanukaranditha21@gmail.com" class="input-responsive" required>

                <div class="order-label">Address</div>
                <input type="address" name="submit" value="Confirm order" class="btn btn-primary" required>

            </fieldset>
           </form>
        </div>

    </section>

    <?php  include('partials-front/footer.php');  ?>
