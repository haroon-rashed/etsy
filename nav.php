<div class="contnainer-fluid mx-3 " >
      <nav>
        <div class="row py-2 align-items-center">
          <div class="col-lg-1 col-4">
            <h2 class="fs-2 fw-semibold order1" style="color: #f1641e;">Esty</h2>
          </div>
          <div class="col-lg-8 order3">
            <div class="row align-items-center">
              <div class="col-lg-3 col-1">
                <div class="d-flex align-items-center gap-3">
                  <div id="menu-icon" onclick="toggleDropdown()">☰</div>
                  <i class="bi bi-blockquote-right fs-2"></i>

                  <!-- Dropdown menu -->
                   <div class="caret"></div>
                  <div id="dropdown-menu" class="hidden bg-white" style="z-index: 222; height: 400px; overflow: scroll;">
                    <ul>
                      <li><a href="#" class="text-dark">Accessiors</a></li>
                      <li><a href="#" class="text-dark">Arts & Collectibles</a></li>
                      <li><a href="#" class="text-dark">Baby</a></li>
                      <li><a href="#" class="text-dark">Bags</a></li>
                      <li><a href="#" class="text-dark">Bath & Beauty</a></li>
                      <li><a href="#" class="text-dark">Films, Music & Novels</a></li>
                      <li><a href="#" class="text-dark">Books</a></li>
                      <li><a href="#" class="text-dark">Clothing</a></li>
                      <li><a href="#" class="text-dark">Electronics</a></li>
                      <li><a href="#" class="text-dark">Gifts</a></li>
                      <li><a href="#" class="text-dark">Accessiors</a></li>
                      <li><a href="#" class="text-dark">Arts & Collectibles</a></li>
                      <li><a href="#" class="text-dark">Baby</a></li>
                      <li><a href="#" class="text-dark">Bags</a></li>
                      <li><a href="#" class="text-dark">Bath & Beauty</a></li>
                      <li><a href="#" class="text-dark">Films, Music & Novels</a></li>
                      <li><a href="#" class="text-dark">Books</a></li>
                      <li><a href="#" class="text-dark">Clothing</a></li>
                      <li><a href="#" class="text-dark">Electronics</a></li>
                      <li><a href="#" class="text-dark">Gifts</a></li>
                    </ul>
                  </div>

                  <h5 class="category">Categarios</h5>
                </div>
              </div>
              <div class="col-lg-9 col-11">
                <div class="card border-0 input-form">
                  <form action="">
                    <input
                      type="text"
                      placeholder="search for anything"
                      class="form-control py-2 border-2 border-black rounded-pill"
                    />
                    <i
                      class="bi bi-search"
                      style="position: absolute; right: 2px; top: 2px"
                    ></i>
                  </form>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-8 order2">
            <div class="row align-items-center justify-content-between position-relative">
                <div class="col-5">
                <button class="btn rounded-pill text-black py-2 px-3 fw-semibold sign">sing in</button>
                </div>
                <div class="col-7">
                    <div class="d-flex justify-content-around align-items-center position-relative">
                      <div class="div p-heart position-relative">
                        <i class="bi bi-heart my-heart fs-3 fw-semibold text-black"></i>
                        <div class="favourite fav rounded-3 py-2 px 2">Favourite</div>
                      </div>
                      <div class="div p-gift position-relative">
                        <i class="bi bi-gift fs-3 fw-semibold text-black"></i>
                        <div class="favourite gift fav rounded-3 py-2 px 2">Gift</div>
                      </div>
                      <div class="div p-basket position-relative">
                        <i class="bi bi-basket2 fs-3 fw-semibold text-black "></i>
                        <div class="favourite basket fav rounded-3 py-2 px 2 position-absolute">Basket</div>
                      </div>
                 
                    </div>
                </div>
            </div>
          </div>
        </div>


      </nav>
      <div class="container">
        <div class=" col-lg-9 mx-auto registory ">
        <ul class="d-flex alingn-items-center list-unstyled justify-content-around">
            <li class="text-black d-flex gap-3 align-items-center"> <i class="bi bi-gift fs-5 fw-semibold text-black"></i><button class="btn rounded-pill text-black py-2 common px-3 fw-semibold sign">Gifts</button></li>
            <li class="text-black"><button class="btn rounded-pill text-black py-2 common px-3 fw-semibold sign">Valentine's Gift</button></li>
            <li class="text-black"><button class="btn rounded-pill text-black py-2 common px-3 fw-semibold sign">Home Favourite</button></li>
            <li class="text-black"><button class="btn rounded-pill text-black py-2 common px-3 fw-semibold sign">Fashion Find</button></li>
            <li class="text-black"><button class="btn rounded-pill text-black py-2 common px-3 fw-semibold sign">Registory</button></li>
        </ul>
    </div>
      </div>
      <div class="w-100 bg-secondary" style="height: 2px;"></div>
    </div>




    <!-- side bar -->

    <div class="min-vh-100 w-100 position-fixed top-0 underlay" style="background: rgba(0, 0, 0, 0.6);">
      <?php
      include'sidebar.php';
      ?>
    </div>
    <div class="min-vh-100 w-100 position-fixed top-0 overlay" style="background: rgba(0, 0, 0, 0.6); z-index:2; visibility:hidden;">
      
    </div>