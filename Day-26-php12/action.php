<?php

require_once 'vendor/autoload.php';

use App\classes\Category;
use App\classes\Product;
use App\classes\Auth;
use App\classes\AddCategory;
use App\classes\AddBrand;

$product = new Product();

//$category = new Category();
//$categories = $category->getAllCategories();

$category = new AddCategory();
$categories = $category->getAllCategory();

$brand = new AddBrand();
$brands = $brand->getAllBrand();



if (isset($_GET['page'])) {

    if ($_GET['page'] == 'home')
    {

//        $product = new Product();
        $products = $product->getAllProducts();
//
//        $id = $_GET['id'];
//        if ($product['category_id'] == $category['id'])
//        {
//            $products = $product->getAllProducts();
//        }
       if (isset($_GET['category_id']))
       {
           $products = $product->getCategoryWiseProduct($_GET['name']);
       }
//       if (isset($_GET['brand_id']))
//       {
//           $products = $product->getBrandWiseProduct($_GET['brand_id']);
//       }
        include 'pages/home.php';

    }

    elseif ($_GET['page'] == 'add-product') {

        include 'pages/add-product.php';
    }

    elseif ($_GET['page'] == 'category')
    {
        $products = $product->getCategoryWiseProduct($_GET['category_id']);
        include 'pages/category-product.php';
    }

    elseif ($_GET['page'] == 'brand')
    {
        $products = $product->getBrandWiseProduct($_GET['brand_id']);
        include 'pages/brand-product.php';
    }

    elseif ($_GET['page'] == 'login')
    {
        include 'pages/login.php';
    }

    elseif ($_GET['page'] == 'register')
    {

        include 'pages/register.php';
    }

    elseif ($_GET['page'] == 'detail')
    {

        include 'pages/detail.php';
    }

    elseif ($_GET['page'] == 'add-category')
    {

        include 'pages/add-category.php';
    }

    elseif ($_GET['page'] == 'add-brand')
    {

        include 'pages/add-brand.php';
    }
    elseif ($_GET['page'] == 'all-product')
    {

        $products = $product->getAllProducts();
        include 'pages/all-product.php';
    }

}

elseif (isset($_POST['product_btn']))
{
    if ($_POST['product_btn'] == 'Add Product')
    {
        $product = new Product($_POST, $_FILES);
        $message = $product->saveProductInfo();
        include "pages/add-product.php";

    }
}

elseif (isset($_POST['category_btn']))
{
    if ($_POST['category_btn'] == 'Add Category')
    {
        $categories = new AddCategory($_POST);
        $message = $categories->saveProductInfo();
        include "pages/add-category.php";

    }
}

elseif (isset($_POST['brand_btn']))
{
    if ($_POST['brand_btn'] == 'Add Brand')
    {
        $brand = new AddBrand($_POST);
        $message = $brand->saveProductInfo();
        include "pages/add-brand.php";
    }
}

elseif (isset($_POST['login_btn']))
{
    if ($_POST['login_btn'] == 'Login')
    {
        $auth = new Auth($_POST);
        $message = $auth->login();
        include "pages/login.php";
    }
}

//        echo '<pre>';
//        print_r($_FILES);
//        echo $_FILES['image']['type'];
//        echo $_FILES['image']['tmp_name'];
//        exit();





