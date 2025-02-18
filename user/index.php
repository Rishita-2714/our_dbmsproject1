<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OceanOasis - HOME </title>

  <?php require ('inc/links.php'); ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    * {
      font-family: "Poppins", sans-serif;
    }

    .h-font {
      font-family: "Merienda", cursive;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type=number] {
      -moz-appearance: textfield;
    }

    .custom-bg {
      background-color: #2ec1ac;
    }

    .custom-bg:hover {
      background-color: #279e8c;
    }

    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }

    .card:hover img.hover-img {
      display: block;
    }

    .card img.main-img {
      display: block;
    }

    .card img.hover-img {
      display: none;
    }

    .swiper-container {
      overflow-x: auto;
    }

    .swiper-container::-webkit-scrollbar {
      background-color: transparent;
    }
  </style>
</head>

<body class="bg-light">

  <?php require ('inc/header.php'); ?>

  <!-- Swiper Container -->
  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/IMG_40905.png" class="w-100" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_62045.png" class="w-100" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_93127.png" class="w-100" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_99736.png" class="w-100" />
        </div>
      </div>
    </div>
  </div>

  <!-- Check Availability Form -->
  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form id="book-room-form" action="../ajax/book_room.php" method="POST" enctype="multipart/form-data">
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-in</label>
              <input name="checkin_date" type="date" class="form-control shadow-none" required>
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-out</label>
              <input name="checkout_date" type="date" class="form-control shadow-none" required>
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Adult</label>
              <select name="adult" class="form-select shadow-none" required>
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500;">Children</label>
              <select name="children" class="form-select shadow-none" required>
                <option value="0" selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- Our Rooms -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/IMG_11892.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">$200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/IMG_78809.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">$200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/IMG_65019.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Room Name</h5>
            <h6 class="mb-4">$200 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                2 Rooms
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Bathroom
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                1 Balcony
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                3 Sofa
              </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Wifi
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Television
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                Room Heater
              </span>
            </div>
            <div class="guests mb-4">
              <h6 class="mb-1">Guests</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
                4 Children
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">
          More Rooms>>>
        </a>
      </div>
    </div>
  </div>

  <!-- Facilities -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/IMG_43553.svg" width="40px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/IMG_43553.svg" width="40px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/IMG_43553.svg" width="40px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/IMG_43553.svg" width="40px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More
            facilities>>></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonials -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONALS</h2>
  <div class="container mt-5">
    <div class="swiper swiper-testimonal">
      <div class="swiper-wrapper">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Shree</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eaque
            cupiditate quo. Omnis saepe neque totam dignissimos praesentium! Ea, dolor.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Rishita</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eaque cupiditate
            quo. Omnis saepe neque totam dignissimos praesentium! Ea, dolor.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Shabnam</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eaque cupiditate quo.
            Omnis saepe neque totam dignissimos praesentium! Ea, dolor.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Shree</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eaque
            cupiditate quo. Omnis saepe neque totam dignissimos praesentium! Ea, dolor.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Rishita</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eaque cupiditate
            quo. Omnis saepe neque totam dignissimos praesentium! Ea, dolor.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Shabnam</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eaque cupiditate quo.
            Omnis saepe neque totam dignissimos praesentium! Ea, dolor.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Shree</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eaque
            cupiditate quo. Omnis saepe neque totam dignissimos praesentium! Ea, dolor.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Rishita</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eaque cupiditate
            quo. Omnis saepe neque totam dignissimos praesentium! Ea, dolor.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Shabnam</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eaque cupiditate quo.
            Omnis saepe neque totam dignissimos praesentium! Ea, dolor.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Shree</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eaque
            cupiditate quo. Omnis saepe neque totam dignissimos praesentium! Ea, dolor.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Rishita</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eaque cupiditate
            quo. Omnis saepe neque totam dignissimos praesentium! Ea, dolor.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center p-4">
            <i class="bi bi-star-fill"></i>
            <h6 class="m-0 ms-2">Shabnam</h6>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eaque cupiditate quo.
            Omnis saepe neque totam dignissimos praesentium! Ea, dolor.
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Reach Us -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.0770643920673!2d77.56053246968297!3d13.030764359199834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17dedd4dcca9%3A0x6075bd8d8aed97ab!2sRamaiah%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1719762267580!5m2!1sen!2sin"></iframe>

      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call Us</h5>
          <a href="tel:+914536437657" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +91 4536437657
          </a><br>
          <a href="tel:+914536437657" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +91 4536437657
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter me-1"></i> Twitter
            </span>
          </a><br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i> Facebook
            </span>
          </a><br>
          <a href="#" class="d-inline-block">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i> Instagram
            </span>
          </a>
        </div>
        <div class="bg-white p-4 rounded">
          <h5>Email Us</h5>
          <a href="mailto:info@domain.com" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-envelope-fill"></i> info@domain.com
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php require ('inc/footer.php'); ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qNVz6+cpwAk3peZ0QdX3y+GJbIekOW69JEmNE1X+OfhLzgy5R9p2Q07Eh9LJ5nSl"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });

    var swiper = new Swiper(".swiper-testimonal", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  </script>
</body>

</html>