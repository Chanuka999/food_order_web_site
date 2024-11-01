<?php  include('partials-front/menu.php');  ?>

      <section class="food-search text-center">
        <div class="container">
           <h2 class="text-center text-white">Fill this form to confirm your order</h2>

           <form action="#" class="order">
            <fieldset>
                <legend>Selected Food</legend>

                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="chicke Hawin pizza" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h3>Food Title</h3>
                   <p class="food-price">$2.3</p>

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
