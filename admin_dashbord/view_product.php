
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://th.bing.com/th/id/R.3f0e24d8d47348843868d0aee7d70232?rik=Ygn8rCh%2bYpzEZA&riu=http%3a%2f%2ficons.iconarchive.com%2ficons%2flimav%2fflat-gradient-social%2f512%2fEtsy-icon.png&ehk=K%2fjwdi0Kjfar8sHkGY8p1fqsx0bFlJIqLzfNw8npqjc%3d&risl=&pid=ImgRaw&r=0">
    <?php include "../bootstrap.php"; ?>
    <link rel="stylesheet" href="../style.css">

    <style>
        body {
            height: 75vh;
            overflow-x: hidden !important;
        }
    </style>
    <title>View Product</title>
</head>

<body>


    <?php
    include "./popup.php";
    displayMessage("product_success", "success");
    ?>

    <div class="" style="background-color: #F2EDF3">
        <?php include "admin_nav.php"; ?>
        <div class="row">
            <div class=" col-xl-2 col-lg-3 col-sm-4 bg-white p-0 shadow" style="height: 80vh; overflow-y : scroll;">
                <?php include "./sidebar.php"; ?>
            </div>

            <div class="col-xl-10 col-lg-9 col-md-8 col-sm-8 my-5">
                <div class="card shadow p-2">
                    <div class="d-flex justify-content-between">
                        <form action="">
                            <input type="search" name="" placeholder="search" class="form-control" id="">
                        </form>
                        <a href="./add_data.php" class="btn test-semibold text-white" style="background-color: #F1641E;"><i class="bi bi-plus"></i>Add Categories</a>
                    </div>
                    <div class="table-responsive" style="height: 65vh; overflow-y: scroll">
                        <table class="table table-striped">
                            <thead class="p-3">
                                <tr>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td class="fw-semibold text-secondary">Products</td>
                                    <td class="fw-semibold text-secondary">Name</td>
                                    <td class="fw-semibold text-secondary">Color</td>
                                    <td class="fw-semibold text-secondary">Barcode</td>
                                    <td class="fw-semibold text-secondary">Base Price</td>
                                    <td class="fw-semibold text-secondary">Discount Price</td>
                                    <td class="fw-semibold text-secondary">Tax</td>
                                    <td class="fw-semibold text-secondary">Stock</td>
                                    <td class="fw-semibold text-secondary">Slect Category</td>
                                    <td class="fw-semibold text-secondary">Status</td>
                                    <td class="fw-semibold text-secondary">Tags</td>
                                    <td class="fw-semibold text-secondary">Action</td>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include "./config.php";
                                $slect = "SELECT * FROM product";

                                $result = mysqli_query($connect, $slect);

                                foreach ($result as $item) { ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="" id="">
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <img class="rounded-3 p-1 " height="50px" width="50px" src="./upload_product_images/<?php trim(print_r($item['image'])) ; ?>" alt="image">
                                                <div class="d-flex flex-column">
                                                    <h6 class="m-0"><?php echo $item[
                                                        "name"
                                                    ]; ?></h6>
                                                    <p class="text-secondary m-0">Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?php
                                        echo $item['name'];
                                        ?></td>
                                        </td>
                                        <td><?php
                                        echo $item['color'];
                                        ?></td>
                                        <td><?php
                                        echo $item['barcode'];
                                        ?></td>
                                        <td><?php
                                        echo $item['base_price'];
                                        ?></td>
                                        <td><?php
                                        echo $item['discount_price'];
                                        ?></td>
                                        <td><?php
                                        echo $item['tax'];
                                        ?></td>
                                        <td><?php
                                        echo $item['stock'];
                                        ?></td>
                                        <td><?php
                                        echo $item['status'];
                                        ?></td>
                                        <td><?php
                                        echo $item['tags'];
                                        ?></td>
                                        <td><?php
                                        echo $item['select_category'];
                                        ?></td>
                                       
                                        <td>
                                            <div class="d-flex gap-2">
                                                <i class="bi bi-pencil-square"></i>
                                                <i class="bi bi-three-dots"></i>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>