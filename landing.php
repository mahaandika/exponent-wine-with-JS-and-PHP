<?php

require 'functions.php';

$products = show("SELECT * FROM product");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Exponent Wine</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="landing.css" />
    <script
      src="https://kit.fontawesome.com/273a2c3f4c.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <section class="banner">
        <img src="img/banner3.jpg" alt="" id="home" />
      </section>

      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <P class="text-light fs-1 fst-italic"
            >𝐄𝐗𝐏 <span class="fw-medium fs-4">𝘄𝗶𝗻𝗲</span></P
          >
          <button
            class="navbar-toggler bg-light"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link fs-5" aria-current="page" href="#home"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5 " href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5" href="#product">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="banner-paraf container">
        <h1 class="banner-title">the exponent wine</h1>
        <p class="banner-desc">
          Create Memorable Moments with Exceptional Wine
        </p>
        <a href="#about"><button class="see-more">see more</button></a>
      </section>
    </header>

    <main>
      <section class="about-us container" id="about">
        <h1 class="about-title">the exponent wine</h1>
        <div class="about-detail row gx-5 gy-3">
          <div class="about-img col-lg-5">
            <div
              id="carouselExampleAutoplaying"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/wine3.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                  <img src="img/wine4.jpg" class="d-block w-100" alt="..." />
                </div>
              </div>
              <button
                class="carousel-control-prev btn-prev"
                type="button"
                data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next btn-next"
                type="button"
                data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-lg-6 about-paraf">
            <p class="about-paraf1">
              The Exponent Wine was born from a passion to blend tradition with
              innovation in winemaking. With a deep commitment to the art of
              wine crafting, we have grown into a respected name in the
              industry, delivering high-quality wines designed to enhance your
              most special moments.
            </p>
            <p class="about-paraf2">
              At The Exponent Wine, quality is our top priority. From the
              vineyard to the bottling process, we adhere to the strictest
              quality control standards. This ensures that every bottle we
              deliver to you is a testament to our commitment to excellence and
              craftsmanship.
            </p>
            <p class="about-paraf3">
              The Exponent Wine has received numerous international accolades,
              reflecting the exceptional quality of our products. We are also
              proud of the positive testimonials we consistently receive from
              our loyal customers, who choose our wines to celebrate their most
              cherished moments.
            </p>
          </div>
        </div>

        <section class="review container">
          <h1 class="review-title">what people say about us</h1>
          <div class="review-detail row row-cols-1 row-cols-md-3 g-4">
            <div class="col card-first">
              <div class="card h-100">
                <div class="card-body text-bg-dark">
                  <h5 class="card-title">King Of King</h5>
                  <p class="card-text">
                    The Exponent Wine delivers perfection in every bottle.
                    Simply outstanding
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-body-secondary"
                    >Last updated 1 month ago</small
                  >
                </div>
              </div>
            </div>
            <div class="col card-second">
              <div class="card h-100">
                <div class="card-body text-bg-dark">
                  <h5 class="card-title">Agung Andika</h5>
                  <p class="card-text">
                    Incredible wines with exceptional taste. Highly recommended!
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-body-secondary"
                    >Last updated 1 week ago</small
                  >
                </div>
              </div>
            </div>
            <div class="col card-third">
              <div class="card h-100">
                <div class="card-body text-bg-dark">
                  <h5 class="card-title">Widya Anastasya</h5>
                  <p class="card-text">
                    Absolutely love The Exponent Wine. A must-try for all wine
                    lovers!
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-body-secondary"
                    >Last updated 3 days ago</small
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="reservation-btn">
            <div class="col d-flex flex-row mt-5 justify-content-center">
              <a href="#contact"><button>make a reservation</button></a>
            </div>
          </div>
        </section>
      </section>

      <section class="product" id="product">
        <h1 class="product-title">our product</h1>
        <section class="product-list container">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach($products as $product) : ?>
            <div class="col">
              <div class="card h-100 product-card">
                <div class="front">
                  <img src="img/<?= $product["gambar"] ?>" class="card-img-top"
                  alt="..." />
                  <div class="card-body">
                    <h5 class="card-title"><?= $product["nama"] ?></h5>
                    <p class="card-text">
                      <?= $product["deskripsi"] ?>
                    </p>
                  </div>
                </div>

                <div class="price d-flex justify-content-center">
                  <a href="detail.php?id=<?=$product["id"]?>"><button>discover</button></a>
                </div>
                <div class="back">
                  <img src="img/<?= $product["gambar"] ?>" alt="..." />
                </div>
              </div>
            </div>
            <?php endforeach ?>
          </div>
        </section>
      </section>

      <section class="contact-bg" id="contact">
        <section class="contact">
          <div class="container">
            <h1 class="contact-title">contact us</h1>
            <div class="contact-desc pt-3 pb-3">
              <p>
                Got questions or want to book a table? Reach us by phone, email,
                or through our online form. Follow us on social media for
                updates and events. We can’t wait to see you at The Brass in
                Renon, Bali!
              </p>
            </div>

            <div class="reach-us">
              <h4 class="reach-title">reach us through</h4>

              <div class="map d-flex justify-content-center">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.694055533449!2d115.21638447576126!3d-8.625341687666149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f13f65c8643%3A0x4d8d8205fccbd904!2sGg.%20Mekar%20Sari%20No.20%2C%20Tonja%2C%20Kec.%20Denpasar%20Utara%2C%20Kota%20Denpasar%2C%20Bali%2080239!5e0!3m2!1sen!2sid!4v1724903773635!5m2!1sen!2sid"
                  width="350"
                  height="250"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>

              <div class="reach-icon1 d-flex justify-content-center pt-4">
                <i class="fa-solid fa-location-dot"></i>
                <a
                  href="https://maps.app.goo.gl/N2ayiWUz8GTygQyq8"
                  class="location-link"
                  target="_blank"
                  >Gg. Mekar Sari No.20, Tonja, Kec. Denpasar Utara, Kota
                  Denpasar, Bali 80239</a
                >
              </div>

              <div class="reach-icon2 d-flex justify-content-center pt-4">
                <i class="fa-solid fa-phone phone"></i>
                <a href="tel:(+62)82340506408" target="_blank"
                  >(+62) 823 - 4050 - 6408</a
                >
              </div>

              <div class="reach-icon3 d-flex justify-content-center pt-4">
                <i class="fa-solid fa-envelope mail"></i>
                <a href="mailto:expreservation@gmail.com" target="_blank"
                  >reservation@exp.com</a
                >
              </div>
            </div>
          </div>
        </section>
      </section>

      <section class="footer">
        <?php
        include "footer.php";
        ?>
      </section>
    </main>

    <script src="./bootstrap/js/bootstrap.bundle.js"></script>
    <script src="landing.js"></script>
  </body>
</html>
