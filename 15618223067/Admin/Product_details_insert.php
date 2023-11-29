<?php
$Product_name = $_GET['product_name'];
$Product_description = $_GET['product_description'];
$Product_category = $_GET['product_caegory'];
$Product_price = $_GET['product_price'];
$Product_sku = $_GET['product_sku'];
$Product_barcode = $_GET['product_barcode'];
$Product_weight = $_GET['product_weight'];
$Product_dimensions = $_GET['product_dimensions'];
$Product_quantity = $_GET['product_quantity'];
$Product_variants = $_GET['product_variants'];
$Shipping_info = $_GET['shipping_info'];
$Seo_info = $_GET['seo_info'];
$Product_brand = $_GET['product_brand'];
$Product_feature = $_GET['product_features'];
$Product_benefits = $_GET['product_benefites'];
$Related_product = $_GET['related_products'];
$Product_reviews = $_GET['product_reviews'];
$Image_filename = $_GET['image_filenames'];

$connection = mysqli_connect("localhost","root","","15618223067");
$insert = "INSERT INTO `product_details`(`product_name`, `product_description`, `product_category`, `product_price`, `product_sku`, `product_barcode`, `product_weight`, `product_dimensions`, `product_quantity`, `product_variants`, `shipping_info`, `seo_info`, `product_brand`, `product_features`, `product_benefits`, `related_products`, `product_review`,`image_filename`)
    VALUES ('$Product_name','$Product_description','$Product_category','$Product_price','$Product_sku','$Product_barcode','$Product_weight','$Product_dimensions','$Product_quantity','$Product_variants','$Shipping_info','$Seo_info','$Product_brand','$Product_feature','$Product_benefits','$Related_product','$Product_reviews','$Image_filename')";
$query = mysqli_query($connection,$insert);
?>