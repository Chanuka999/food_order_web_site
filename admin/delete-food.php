<?php
include('../config/constants.php');


if(isset($_GET['id']) && isset($_GET['image_name'])){
   echo "derected";
}else{
   $_SESSION['delete'] = "<div class='error'>unaothorized Method.</div>";
   header('location:'.SITEURL.'admin/manege-food.php');
}

?>