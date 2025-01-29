<?php
session_start();
include './config.php';

$name = $_POST['product-name'] ?? '';
$color = $_POST['color'] ?? '';
$barcode = $_POST['barcode'] ?? '';
$description = $_POST['editor-input'] ?? ''; 
$base_price = $_POST['basePrice'] ?? '';
$discount_price = $_POST['discountPrice'] ?? '';
$tax = isset($_POST['tax']) ? $_POST['tax'] : 0;
$stock = $_POST['stock'] ?? '';
$select_category = $_POST['slect-category'] ?? '';
$status = $_POST['select-status'] ?? '';
$tags = $_POST['tags'] ?? '';

$product_image_name = $_FILES['image-input']['name'] ?? '';
$product_image_tmp_name = $_FILES['image-input']['tmp_name'] ?? '';
$upload_dir = './upload_product_images/';

$check_duplicate_query = "SELECT * FROM product WHERE barcode = '{$barcode}'";
$duplicate_result = mysqli_query($connect, $check_duplicate_query);

if (mysqli_num_rows($duplicate_result) > 0) {
    $_SESSION['product_error'] = ['Product with this barcode already exists!'];
    displayMessage('product_error', 'error');
    header("Location: http://localhost/Etsy/admin_dashbord/add_product.php");
    exit;
}

if (!empty($product_image_name) && move_uploaded_file($product_image_tmp_name, $upload_dir . $product_image_name)) {
    // Constructing SQL query
    $insert = "INSERT INTO product (name, color, barcode, description, image, base_price, discount_price, tax, stock, select_category, status, tags) 
    VALUES ('{$name}', '{$color}', '{$barcode}', '{$description}', '{$product_image_name}', '{$base_price}', '{$discount_price}', '{$tax}', '{$stock}', '{$select_category}', '{$status}', '{$tags}')";

    // Execute the query
    $result = mysqli_query($connect, $insert);

    // Check if the query was successful
    if ($result) {
        $_SESSION['product_success']  = ['Product added successfully.'];
}
}

header("Location: http://localhost/Etsy/admin_dashbord/product.php");
exit;

?>
