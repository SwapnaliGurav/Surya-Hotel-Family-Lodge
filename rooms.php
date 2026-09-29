<?php include 'layouts/header.php'; ?>
  <section
    class="site-hero inner-page overlay"
    style="background-image: url(images/hero_4.jpg)"
    data-stellar-background-ratio="0.5">
    <div class="container">
      <div
        class="row site-hero-inner justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade">
          <h1 class="heading mb-3">Rooms</h1>
          <ul class="custom-breadcrumbs mb-4">
            <li><a href="index.php">Home</a></li>
            <li>&bullet;</li>
            <li>Rooms</li>
          </ul>
        </div>
      </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
      <div class="mouse-icon">
        <span class="mouse-wheel"></span>
      </div>
    </a>
  </section>
  <!-- END section -->
<!-- 
  <section class="section pb-4">
    <div class="container">
      <div class="row check-availabilty" id="next">
        <div class="block-32" data-aos="fade-up" data-aos-offset="-200">
          <form action="#">
            <div class="row">
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                <label for="checkin_date" class="font-weight-bold text-black">Check In</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="text" id="checkin_date" class="form-control" />
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                <label for="checkout_date" class="font-weight-bold text-black">Check Out</label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input
                    type="text"
                    id="checkout_date"
                    class="form-control" />
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                <div class="row">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label for="adults" class="font-weight-bold text-black">Adults</label>
                    <div class="field-icon-wrap">
                      <div class="icon">
                        <span class="ion-ios-arrow-down"></span>
                      </div>
                      <select name="" id="adults" class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label for="children" class="font-weight-bold text-black">Children</label>
                    <div class="field-icon-wrap">
                      <div class="icon">
                        <span class="ion-ios-arrow-down"></span>
                      </div>
                      <select name="" id="children" class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 align-self-end">
                <button class="btn btn-primary btn-block text-white">
                  Check Availabilty
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> -->

  <section class="section">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade-up">Rooms &amp; Suites</h2>
          <p data-aos="fade-up" data-aos-delay="100">
            Discover cozy and comfortable stays designed to make you feel at
            home. Whether you're traveling solo, with family, or on a short
            getaway, our well-maintained rooms offer the perfect blend of
            simplicity, cleanliness, and peace. Enjoy restful nights, fresh
            mornings, and all the essentials you need for a relaxing stay.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <a href="reservation.php?room_type=Standard Room" class="room">
            <figure class="img-wrap">
              <img
                src="images/img_7.jpg"
                alt="Free website template"
                class="img-fluid mb-3" />
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Standard Room</h2>
              <span class="text-uppercase letter-spacing-1">800₹ / per night</span>
              <ul class="amenity-chips list-unstyled">
                <li><span class="ion-ios-wifi"></span> Wi-Fi</li>
                <li><span class="ion-ios-people"></span> 2 Guests</li>
                <li><span class="ion-ios-water"></span> Hot Water</li>
              </ul>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up">
             <a href="reservation.php?room_type=Family Room" class="room">
            <figure class="img-wrap">
              <img
                src="images/img_3.jpg"
                alt="Free website template"
                class="img-fluid mb-3" />
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Family Room</h2>
              <span class="text-uppercase letter-spacing-1">1400₹ / per night</span>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up">
             <a href="reservation.php?room_type=Premium Room" class="room">
            <figure class="img-wrap">
              <img
                src="images/img_2.jpg"
                alt="Free website template"
                class="img-fluid mb-3" />
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Premium Room</h2>
              <span class="text-uppercase letter-spacing-1">1100₹ / per night</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="section bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade">Great Offers</h2>
          <p data-aos="fade">
            Enjoy your stay with even more value! We bring you special deals
            and seasonal discounts to make your visit comfortable and
            budget-friendly. Whether it's a weekend escape or a long stay,
            check out our latest offers and book your room at the best price
            today.
          </p>
        </div>
      </div>

      <div
        class="site-block-half d-block d-lg-flex bg-white"
        data-aos="fade"
        data-aos-delay="100">
        <a
          href="#"
          class="image d-block bg-image-2"
          style="background-image: url('images/img_3.jpg')"></a>
        <div class="text">
          <span class="d-block mb-4"><span class="display-4 text-primary">1400₹ </span>
            <span class="text-uppercase letter-spacing-2">/ per night</span>
          </span>
          <h2 class="mb-4">Family Room</h2>
          <p>
            Book a cozy Family Room and get 10% off on stays longer than 2
            nights. Perfect for group getaways or family trips — comfort and
            savings, all in one!
          </p>
          <p>
            <a href="reservation.php" class="btn btn-primary text-white">Book Now</a>
          </p>
        </div>
      </div>
      <div
        class="site-block-half d-block d-lg-flex bg-white"
        data-aos="fade"
        data-aos-delay="200">
        <a
          href="#"
          class="image d-block bg-image-2 order-2"
          style="background-image: url('images/img_2.jpg')"></a>
        <div class="text order-1">
          <span class="d-block mb-4"><span class="display-4 text-primary">1100₹ </span>
            <span class="text-uppercase letter-spacing-2">/ per night</span>
          </span>
          <h2 class="mb-4">Premium Room</h2>
          <p>
            Experience premium comfort in our Presidential Room with 15% off
            on weekday bookings. Ideal for couples or solo travelers looking
            to unwind in peace and privacy.
          </p>
          <p>
            <a href="reservation.php" class="btn btn-primary text-white">Book Now</a>
          </p>
        </div>
      </div>
    </div>
  </section> -->

  <section
    class="section bg-image overlay"
    style="background-image: url('images/hero_4.jpg')">
    <div class="container">
      <div class="row align-items-center">
        <div
          class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left"
          data-aos="fade-up">
          <h2 class="text-white font-weight-bold">
            A Best Place To Stay. Book Now!
          </h2>
        </div>
        <div
          class="col-12 col-md-6 text-center text-md-right"
          data-aos="fade-up"
          data-aos-delay="200">
          <a
            href="reservation.php"
            class="btn btn-outline-white-primary py-3 text-white px-5">Book Now</a>
        </div>
      </div>
    </div>
  </section>

<?php include 'layouts/footer.php'; ?>