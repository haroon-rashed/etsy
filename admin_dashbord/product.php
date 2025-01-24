<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://th.bing.com/th/id/R.3f0e24d8d47348843868d0aee7d70232?rik=Ygn8rCh%2bYpzEZA&riu=http%3a%2f%2ficons.iconarchive.com%2ficons%2flimav%2fflat-gradient-social%2f512%2fEtsy-icon.png&ehk=K%2fjwdi0Kjfar8sHkGY8p1fqsx0bFlJIqLzfNw8npqjc%3d&risl=&pid=ImgRaw&r=0">
    <?php
    include "../bootstrap.php";
    ?>
    <link rel="stylesheet" href="../style.css">

    <style>
        body{
            overflow-x: hidden !important ;
        }
    </style>
    <title>Document</title>
</head>
<body>


<?php
include "./popup.php";
displayMessage('category_success', 'success');
?>

<div class="" style="background-color: #F2EDF3">
    <?php
    include "admin_nav.php";
    ?>
    <div class="row">
        <div class=" col-xl-2 col-lg-3 col-sm-4 bg-white p-0 shadow" style="height: 80vh; overflow-y : scroll;">
      <?php
      include "./sidebar.php";
      ?>
    </div>

    <div class="col-xl-10 col-lg-9 col-md-8 col-sm-8 my-5">
      <form action="./add_product.php">
        <div class="  p-1">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column ">
                    <h3>Add Products</h3>
                    <p class="text-secondary m-0">Lorem ipsum dolor sit amet.</p>
                </div>
                <button  class="btn test-semibold text-white px-2 py-2" style="background-color: #F1641E;"><i class="bi bi-plus"></i>Add Categories</button>
            </div>

            <div class="row">
                <div class="col-md-8 py-3">
                    <div class="card shadow p-3">
                    <input type="text" placeholder="Search Products" class="form-control">
                    <div class="d-flex gap-2 py-4" >
                    <input type="color" placeholder="" class="form-control-color w-100">
                    <input type="text" placeholder="Search Products Barcode w-100" class="form-control">
                    </div>



                    <div class="card ">
                        <div class="card-header w-50">
                            <div class="d-flex justify-content-between gap-3">
                                <div class="d-flex-align-items-center justify-content-between edit-operation">
                                    <i class="bi bi-type-bold"></i>
                                </div>
                                <div class="d-flex-align-items-center justify-content-between edit-operation">
                                <i class="bi bi-stripe"></i>
                                </div>
                                <div class="d-flex-align-items-center justify-content-between edit-operation">
                                    <i class="bi bi-type-underline"></i>
                                </div>
                                <div class="d-flex-align-items-center justify-content-between edit-operation">
                                    <i class="bi bi-type-italic"></i>
                                </div>
                                <div class="d-flex-align-items-center justify-content-between edit-operation">
                                    <i class="bi bi-text-left"></i>
                                </div>
                                <div class="d-flex-align-items-center justify-content-between edit-operation">
                                    <i class="bi bi-text-center"></i>
                                </div>
                                <div class="d-flex-align-items-center justify-content-between edit-operation">
                                    <i class="bi bi-justify"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-4"></div>
            </div>
        </div>
      </form>
    </div>
    </div>
    </div>





    
</body>
</html>