<?php

require "functions.php";

$id = $_GET["id"];

$product = show("SELECT * FROM product WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Product</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="detail.css" />
  </head>
  <body>
    <nav
      class="container-fluid bread-nav d-flex justify-content-around align-items-center"
      style="--bs-breadcrumb-divider: '>'"
      aria-label="breadcrumb"
    >
      <ol class="breadcrumb pt-3 pb-2">
        <li class="breadcrumb-item fw-medium fs-5">
          <a href="landing.php#home">Home</a>
        </li>
        <li class="breadcrumb-item fw-medium fs-5">
          <a href="landing.php#product">Product</a>
        </li>
        <li
          class="breadcrumb-item bread-name fw-medium fs-5 actived"
          aria-current="page"
        >
          <?= $product["nama"] ?>
        </li>
      </ol>
      <P class="text-light fs-1 fst-italic pt-3 pb-2"
        >𝐄𝐗𝐏 <span class="fw-medium fs-4">𝘄𝗶𝗻𝗲</span></P
      >
    </nav>

    <main>
      <section class="content">
        <div class="title">
          <h1>product detail</h1>
        </div>

        <div class="detail-content container">
          <div class="row">
            <div class="col-lg-5 img">
              <img src="img/<?= $product["gambar"] ?>" alt="">
            </div>

            <div class="col-lg-6 desc-con">
              <div class="desc">
                <div class="name">
                  <h3>product name :</h3>
                  <p><?= $product["nama"] ?></p>
                </div>

                <div class="product-desc">
                  <h3>description :</h3>
                  <p><?= $product["deskripsi"] ?></p>
                </div>

                <div class="price">
                  <h3>price :</h3>
                  <p><?= $product["harga"] ?></p>
                </div>

                <div class="detail-reserve">
                  <div class="col d-flex flex-row mt-5 justify-content-center">
                    <a href="landing.php#contact"
                      ><button>make a reservation</button></a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="footer">
        <?php
        include "footer.php";
        ?>
      </section>
    </main>
  </body>
</html>
