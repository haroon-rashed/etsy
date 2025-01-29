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
        body {
            overflow-x: hidden !important;
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
            <div class=" col-xl-2 col-lg-3 col-sm-4 bg-white p-0 shadow" style="height: 85vh; overflow-y : scroll;">
                <?php
                include "./sidebar.php";
                ?>
            </div>

            <div class="col-xl-10 col-lg-9 col-md-8 col-sm-8 my-5">
                <form action="./add_catagory.php" class="bg-white shadow col-6 mx-auto p-5" method="POST" enctype="multipart/form-data">
                    <h2 class="text-dark display-4 text-center">Add Category</h2>
                    <div class="form-group">
                        <label class="form-label" for="name">Name</label>
                        <input type=" text" name="name" class="form-control" placeholder="Enter the name... " required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="name">Image</label>
                        <input type="file" name="image" class="form-control" placeholder="Upload your file... " required>
                    </div>
                    <button class="btn w-100 rounded-3 text-white fw-semibold my-2" style="background-color: #F1641E;">Add Category</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>