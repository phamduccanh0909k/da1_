<?php
if (isset($_GET['act']) && ($_GET['act']) != "") {
  $act = $_GET['act'];
  switch ($act) {
    case 'dashboard':
      include("dashboard.php");
      break;

      // Category
    case 'listCategory':
      include("category/list-category.php");
      break;
    case 'addCategory':
      include("category/add-category.php");
      break;
    case 'updateCate':
      include("category/update-category.php");
      break;

      //Product
    case 'listProduct':
      include("product/list-product.php");
      break;
    case 'addProduct':
      include("product/add-product.php");
      break;
    case 'updateProduct':
      include("product/update-product.php");
      break;
  }
} else {
  include("dashboard.php");
}
