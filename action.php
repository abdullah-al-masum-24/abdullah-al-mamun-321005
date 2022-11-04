<?php

require_once 'vendor/autoload.php';
use App\classes\Categories;
use App\classes\Product;

$productDetail = '';


$categories = new Categories();
$categoryResult = $categories->getCategories();

$product = new Product();




if (isset($_GET['page'])) {

    if ($_GET['page'] == 'home') {

        include './pages/home.php';

    }elseif ( $_GET['page'] == 'category-product') {

        $productShow = $product->getProduct( $_GET['category-id'] );
        include "./pages/category-product.php";

    }
    elseif ( $_GET['page'] == 'all-product') {

        $productShow = $product->product;
        include "./pages/all-product.php";

    }
    elseif ( $_GET['page'] == 'product-detail') {

        $productDetail = $product->productDetails( $_GET['product-id'] );
        include "./pages/product-detail.php";
    }

}
