<?php include('config/constants.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restuarant</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="navbar" style="background-color: gray;">
        <div class="container" >
          <div class="logo">
              <a href="#" title="logo">
                  <img src="images/logo.png" alt="Restaurant">
              </a>
          </div>
          <div class="menu text-right">
              <ul>
                  <li>
                      <a href="<?php echo SITEURL; ?>">Home</a>
                  </li>
                  <li>
                      <a href="<?php echo SITEURL; ?>categories.php">Categories</a>
                  </li>
                  <li>
                      <a href="<?php echo SITEURL; ?>foods.php">Foods</a>
                  </li>
                  <li>
                      <a href="#">Contact</a>
                  </li>
              </ul>
          </div>
          <div class="clearfix"></div>
        </div>
      </section>
