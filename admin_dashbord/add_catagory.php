<?php

session_start();
include './config.php';


$name = trim($_POST ['name']);
$img_name = trim($_FILES ['image']['name']);
$temp_name = $_FILES ['image']['tmp_name'];


$insert =  "INSERT INTO category (name, image) VALUES ('{$name}', '{$img_name}')";
 
move_uploaded_file($temp_name, '../Upload_images/' . $img_name);

$result = mysqli_query($connect, $insert);


if($result){
    $_SESSION['category_success'] = ["category added successfully"];
 }


header("Location:  $base_url/admin_dashbord/add_data.php");

?>
