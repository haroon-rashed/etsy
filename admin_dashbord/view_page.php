
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
            height: 70vh;
            overflow: hidden !important;
        }
    </style>
    <title>Document</title>
</head>

<body>


    <?php
    include "./popup.php";
    displayMessage("category_success", "success");
    ?>

    <div class="" style="background-color: #F2EDF3">
        <?php include "admin_nav.php"; ?>
        <div class="row">
            <div class=" col-xl-2 col-lg-3 col-sm-4 bg-white p-0 shadow" style="height: 85vh; overflow-y : scroll;">
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
                                    <td class="fw-semibold text-secondary">Categarios</td>
                                    <td class="fw-semibold text-secondary">Total Products</td>
                                    <td class="fw-semibold text-secondary">Total Earnings</td>
                                    <td class="fw-semibold text-secondary">Action</td>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include "./config.php";
                                $slect = "SELECT * FROM category";

                                $res = mysqli_query($connect, $slect);

                                foreach ($res as $item) { ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="" id="">
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <img class="rounded-3 p-1 " height="50px" width="50px" src="../Upload_images/<?php trim(print_r($item['image'])) ; ?>" alt="image">
                                                <div class="d-flex flex-column">
                                                    <h6 class="m-0"><?php echo $item[
                                                        "name"
                                                    ]; ?></h6>
                                                    <p class="text-secondary m-0">Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>12000</td>
                                        <td>$98,000</td>
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