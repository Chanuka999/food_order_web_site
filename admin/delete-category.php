<?php
include('../config/constants.php');

if(isset($_GET['id']) AND isset($_GET['image_name'])){
  echo "get values and details";
}else{
  header('location:'.SITEURL.'admin/manege-category.php');
}

?>