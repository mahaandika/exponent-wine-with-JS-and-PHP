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
          <h1><?= $product["nama"] ?></h1>
        </div>
      </section>
    </main>
  </body>
</html>
