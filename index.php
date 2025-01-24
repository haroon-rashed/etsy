<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    include"./bootstrap.php";
    ?>
    <link rel="shortcut icon" href="https://th.bing.com/th/id/R.3f0e24d8d47348843868d0aee7d70232?rik=Ygn8rCh%2bYpzEZA&riu=http%3a%2f%2ficons.iconarchive.com%2ficons%2flimav%2fflat-gradient-social%2f512%2fEtsy-icon.png&ehk=K%2fjwdi0Kjfar8sHkGY8p1fqsx0bFlJIqLzfNw8npqjc%3d&risl=&pid=ImgRaw&r=0">
    <title>Etsy Pakistan</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
<?php
    include"./nav.php";
    ?>


<div class="container-fluid my-5">
      <div class="row align-items-center">
        <div class="col-lg-8 mb-3 mb-lg-0">
          <div class="card border-0 overflow-hidden right-img" style="background-color: #FFFBD8; border-radius: 20px;height: 400px;">
            <div class="row align-items-center">
              <div class="col-12 col-lg-5 col-sm-6 text-center d-flex flex-column justify-content-center">
                <h2 class="display-4 text-black my-3">Renew your rooms!</h2>
                <h5 class="text-black">Shop original pieces</h5>
                <button class="btn rounded-pill py-3 px-4 bg-black text-white my-3">Shop Now</button>
              </div>
              <div class="col-12 col-lg-7 col-sm-6  d-flex align-items-center">
                <img class="room-design"
                  src="https://i.etsystatic.com/ij/719d6d/6565047903/ij_680x540.6565047903_oojl4vxa.jpg?version=0" 
                  width="100%" height="400px"
                  style="clip-path: circle(70.7% at 71% 50%); border-radius: 20px;; object-fit: cover;" 
                  alt="Decorative room design"
                >
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-4 left-img" >
          <div class="card border-0 position-relative" style="height : 400px">
            <img 
              src="" 
              class="w-100 change-image" height="100%" 
              style="border-radius: 20px; object-fit: cover;" 
              alt="Decorative item"
            >
            <div class="img-overlay w-100 h-100 position-absolute" style="background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,0), rgba(0,0,0,0.8)) !important; border-radius: 20px;"></div>
            <div class="text-parent position-absolute p-3" style="bottom: 0px;">
            <h3 class="text-white p-0 m-0 img-text">Accessiors</h3>
            <button class="btn text-white">Shop Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- section 2 -->
    <section class="container-fluid">
      <h3 class="fw-semibold fs-2 px-3">Featured Categarios</h3>
      <div class=" row border-0 mx-3">
        <div class="col-lg-2 col-md-4 col-sm-6 col-2 ">
          <img src="https://i.etsystatic.com/23824347/r/il/67d7f1/5200553974/il_300x300.5200553974_4yjs.jpg" width="100%" class="my-img" style="border-radius: 10px;" alt="">
          <h6 class="px-1 py-2 fs-5 fw-semibold">Signs</h6>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-2">
          <img src="https://i.etsystatic.com/53120861/c/1428/1428/284/284/il/4f75d4/6368362117/il_300x300.6368362117_ep42.jpg" width="100%" class="my-img" style="border-radius: 10px;" alt="">
          <h6 class="px-1 py-2 fs-5 fw-semibold">Signs</h6>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-2">
          <img src="https://i.etsystatic.com/8375166/c/1960/1558/762/242/il/30ffbb/2494222438/il_300x300.2494222438_q2ur.jpg" width="100%" class="my-img" style="border-radius: 10px;" alt="">
          <h6 class="px-1 py-2 fs-5 fw-semibold">Signs</h6>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-2">
          <img src="https://i.etsystatic.com/24426965/c/2261/1797/0/502/il/64732a/4144763037/il_300x300.4144763037_cm8c.jpg" width="100%" class="my-img" style="border-radius: 10px;" alt="">
          <h6 class="px-1 py-2 fs-5 fw-semibold">Signs</h6>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-2">
          <img src="https://i.etsystatic.com/27931246/r/il/a1dc5e/4055579401/il_300x300.4055579401_i9yn.jpg" width="100%" class="my-img" style="border-radius: 10px;" alt="">
          <h6 class="px-1 py-2 fs-5 fw-semibold">Signs</h6>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-2">
          <img src="https://i.etsystatic.com/24512514/r/il/0bd67a/6333925668/il_300x300.6333925668_j4kz.jpg" width="100%" class="my-img" style="border-radius: 10px;" alt="">
          <h6 class="px-1 py-2 fs-5 fw-semibold">Signs</h6>
        </div>
      </div>
     </section>



<script src="./app.js"></script>
</body>
</html>