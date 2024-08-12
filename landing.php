<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="landing.css" />
  </head>
  <body>
    <header>
      <section class="banner">
        <img src="img/banner3.jpg" alt="" />
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
                <a
                  class="nav-link active text-light fs-5"
                  aria-current="page"
                  href="#"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-5" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-5" href="#">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light fs-5" href="#">Contact</a>
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
        <button class="see-more">see more</button>
      </section>
    </header>

    <main>
      <section class="about-us container">
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
      </section>

      <section class="review container">
        <h1 class="review-title">what people say about us</h1>
        <div class="review-detail row row-cols-1 row-cols-md-3 g-4">
          <div class="col card-first">
            <div class="card h-100">
              <div class="card-body text-bg-dark">
                <h5 class="card-title">King Of King</h5>
                <p class="card-text">
                  The Exponent Wine delivers perfection in every bottle. Simply
                  outstanding
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
            <button>make a reservation</button>
          </div>
        </div>
      </section>

      <section class="product">
        <h1 class="product-title">our product</h1>
        <section class="product-list container">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100 product-card">
                <img src="img/wine10.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Stella Rosa</h5>
                  <p class="card-text">
                    A harmonious blend of rich plum and cherry flavors with a
                    velvety finish, Stella Rosa is a wine that sings on the
                    palate. It pairs beautifully with fine dining or a quiet
                    night in.
                  </p>
                  <div class="price d-flex justify-content-center">
                    <button>discover</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 product-card">
                <img src="img/wine13.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Maria Ana</h5>
                  <p class="card-text">
                    Warm and inviting, Maria Ana offers a smooth palate with
                    flavors of dark chocolate, blackberries, white grapes and a
                    hint of smoke. Its a comforting choice for cozy gatherings
                  </p>
                  <div class="price d-flex justify-content-center">
                    <button>discover</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 product-card">
                <img src="img/wine12.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Marques Casa Concha</h5>
                  <p class="card-text">
                    Inspired by the golden moonlit nights, Marques Casa Concha
                    is a bright, aromatic white wine with hints of citrus,
                    honey, and floral notes. A delightful companion to seafood
                    and light fare.
                  </p>
                  <div class="price d-flex justify-content-center">
                    <button>discover</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 product-card">
                <img src="img/wine9.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Maison Castel</h5>
                  <p class="card-text">
                    A graceful rosé with a delicate balance of strawberry and
                    rose petal notes, Maison Castel offers a refreshing and
                    light finish. Ideal for warm afternoons and romantic
                    evenings.
                  </p>
                  <div class="price d-flex justify-content-center">
                    <button>discover</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 product-card">
                <img src="img/wine7.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Chateau Morin</h5>
                  <p class="card-text">
                    A luxurious blend of ripe red berries and subtle oak,
                    chateau Morin envelops the senses with its smooth texture
                    and lingering finish. Perfect for an elegant evening or a
                    special celebration.
                  </p>
                  <div class="price d-flex justify-content-center">
                    <button>discover</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card h-100 product-card">
                <img src="img/wine8.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Winetage Otterazu</h5>
                  <p class="card-text">
                    Winetage Otterazu is an exquisite red blend that combines
                    the best of old-world elegance with modern winemaking. With
                    layers of black currant, leather, and earth, its a wine for
                    the connoisseur.
                  </p>
                  <div class="price d-flex justify-content-center">
                    <button>discover</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
    </main>

    <script src="./bootstrap/js/bootstrap.bundle.js"></script>
    <script src="landing.js"></script>
  </body>
</html>
