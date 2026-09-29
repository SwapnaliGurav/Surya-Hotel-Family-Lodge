<?php include 'layouts/header.php'; ?>


      <section
        class="site-hero overlay"
        style="background-image: url(images/hero_4.jpg)"
        data-stellar-background-ratio="0.5"
      >
        <div class="container">
          <div
            class="row site-hero-inner justify-content-center align-items-center"
          >
            <div class="col-md-10 text-center" data-aos="fade-up">
              <span class="custom-caption text-uppercase text-white d-block mb-3"
                >Welcome to Your Peaceful Staycation Spot</span
              >
              <h1 class="heading">Feel at Home, Wherever You Are</h1>
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

<section class="section bg-light pb-0">
  <div class="container">
    <div class="row check-availabilty" id="next">
      <div class="block-32 text-center" data-aos="fade-up" data-aos-offset="-200">

        <!-- Attractive Heading and Description -->
        <div class="mb-4">
          <h2 class="font-weight-bold text-primary">Book Your Stay at Surya Hotel & Family Lodge</h2>
          <p class="lead text-secondary">
            Experience unmatched comfort, exceptional service, and serene surroundings. 
            Secure your perfect getaway today — luxury rooms, family-friendly amenities, best local location, and affordable rates await you!
          </p>
        </div>

        <!-- Booking Form with only Reserve Now button -->
        <form action="reservation.php" method="post">
          <div class="row">
            <div class="col-md-6 col-lg-3 align-self-end mx-auto">
              <button type="submit" class="btn btn-primary btn-block text-white btn-lg">
                Book Now 
              </button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>



      <section class="section pt-4 pb-5 bg-light">
        <div class="container">
          <div class="row feature-strip text-center">
            <div class="col-6 col-md-3 mb-4 mb-md-0" data-aos="fade-up">
              <div class="feature-item">
                <span class="ion-ios-wifi"></span>
                <h5>Free Wi-Fi</h5>
              </div>
            </div>
            <div class="col-6 col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
              <div class="feature-item">
                <span class="ion-ios-people"></span>
                <h5>Family Friendly</h5>
              </div>
            </div>
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-item">
                <span class="ion-ios-car"></span>
                <h5>Free Parking</h5>
              </div>
            </div>
            <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
              <div class="feature-item">
                <span class="ion-ios-time"></span>
                <h5>24x7 Reception</h5>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5 bg-light">
        <div class="container">
          <div class="row align-items-center">
            <div
              class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5"
              data-aos="fade-up"
            >
              <figure class="img-absolute">
                <img src="images/food-1.jpg" alt="Image" class="img-fluid" />
              </figure>
              <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded" />
            </div>
            <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
              <h2 class="heading">Welcome!</h2>
              <p class="mb-4">
                Far away from the noise of the world, in a place wrapped in
                silence and lush greenery, mornings begin with the gentle songs of
                birds. Surrounded by nature’s calm, it feels as if you’ve stepped
                into a peaceful world where everything slows down, and you
                reconnect with the beauty of the earth.
              </p>
            
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
              <h2 class="heading" data-aos="fade-up">Rooms &amp; Suites</h2>
              <p data-aos="fade-up" data-aos-delay="100">
              Discover cozy and comfortable stays designed to make you feel at home. Whether you're traveling solo, with family, or on a short getaway, our well-maintained rooms offer the perfect blend of simplicity, cleanliness, and peace. Enjoy restful nights, fresh mornings, and all the essentials you need for a relaxing stay.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <a href="reservation.php?room_type=Standard" class="room">
                <figure class="img-wrap">
                  <img
                    src="images/img_7.jpg"
                    alt="Free website template"
                    class="img-fluid mb-3"
                  />
                </figure>
                <div class="p-3 text-center room-info">
                  <h2>Standard Room</h2>
                  <span class="text-uppercase letter-spacing-1"
                    >800₹ / per night</span
                  >
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up">
             <a href="reservation.php?room_type=Family " class="room">
                <figure class="img-wrap">
                  <img
                    src="images/img_3.jpg"
                    alt="Free website template"
                    class="img-fluid mb-3"
                  />
                </figure>
                <div class="p-3 text-center room-info">
                  <h2>Family Room</h2>
                  <span class="text-uppercase letter-spacing-1"
                    >1400₹ / per night</span
                  >
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up">
             <a href="reservation.php?room_type=Premium " class="room">
                <figure class="img-wrap">
                  <img
                    src="images/img_2.jpg"
                    alt="Free website template"
                    class="img-fluid mb-3"
                  />
                </figure>
                <div class="p-3 text-center room-info">
                  <h2>Premium Room</h2>
                  <span class="text-uppercase letter-spacing-1"
                    >1100₹ / per night</span
                  >
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="section slider-section bg-light">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
              <h2 class="heading" data-aos="fade-up">
                Explore Our Space Through Photos
              </h2>
              <p data-aos="fade-up" data-aos-delay="100">
                Take a visual tour of our cozy lodge. From peaceful rooms to the
                lush greenery outside, every corner is designed for your comfort
                and relaxation. Let our photos give you a glimpse of the warm,
                welcoming experience that awaits you.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div
                class="home-slider major-caousel owl-carousel mb-5"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <div class="slider-item">
                  <a
                    href="images/img_7.jpg"
                    data-fancybox="images"
                    data-caption="Caption for this image"
                    ><img
                      src="images/img_7.jpg"
                      alt="Image placeholder"
                      class="img-fluid"
                  /></a>
                </div>
                <div class="slider-item">
                  <a
                    href="images/img_2.jpg"
                    data-fancybox="images"
                    data-caption="Caption for this image"
                    ><img
                      src="images/img_2.jpg"
                      alt="Image placeholder"
                      class="img-fluid"
                  /></a>
                </div>
                <div class="slider-item">
                  <a
                    href="images/img_3.jpg"
                    data-fancybox="images"
                    data-caption="Caption for this image"
                    ><img
                      src="images/img_3.jpg"
                      alt="Image placeholder"
                      class="img-fluid"
                  /></a>
                </div>
                <div class="slider-item">
                  <a
                    href="images/img_4.jpg"
                    data-fancybox="images"
                    data-caption="Caption for this image"
                    ><img
                      src="images/img_4.jpg"
                      alt="Image placeholder"
                      class="img-fluid"
                  /></a>
                </div>
                <div class="slider-item">
                  <a
                    href="images/img_5.jpg"
                    data-fancybox="images"
                    data-caption="Caption for this image"
                    ><img
                      src="images/img_5.jpg"
                      alt="Image placeholder"
                      class="img-fluid"
                  /></a>
                </div>
                <div class="slider-item">
                  <a
                    href="images/img_8.jpg"
                    data-fancybox="images"
                    data-caption="Caption for this image"
                    ><img
                      src="images/img_8.jpg"
                      alt="Image placeholder"
                      class="img-fluid"
                  /></a>
                </div>
                <div class="slider-item">
                  <a
                    href="images/img_9.jpg"
                    data-fancybox="images"
                    data-caption="Caption for this image"
                    ><img
                      src="images/img_9.jpg"
                      alt="Image placeholder"
                      class="img-fluid"
                  /></a>
                </div>
              </div>
              <!-- END slider -->
            </div>
          </div>
        </div>
      </section>
      <!-- END section -->

    
      <section class="section testimonial-section">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
              <h2 class="heading" data-aos="fade-up">What Our Guests Say</h2>
            </div>
          </div>
          <div class="row">
            <div
              class="js-carousel-2 owl-carousel mb-5"
              data-aos="fade-up"
              data-aos-delay="200">
              <div class="testimonial text-center slider-item">
                <div class="author-image mb-3">
                  <img
                    src="images/person_1.jpg"
                    alt="Image placeholder"
                    class="rounded-circle mx-auto"/>
                </div>
                <blockquote>
                  <p>
                    &ldquo;The environment is so peaceful and green! I loved
                    waking up to the sound of birds in the morning. Felt like I
                    was truly close to nature.&rdquo;
                  </p>
                </blockquote>
                <p><em>&mdash; Priya Deshmukh</em></p>
              </div>

              <div class="testimonial text-center slider-item">
                <div class="author-image mb-3">
                  <img
                    src="images/person_2.jpg"
                    alt="Image placeholder"
                    class="rounded-circle mx-auto"
                  />
                </div>
                <blockquote>
                  <p>
                    &ldquo;Very clean rooms, polite staff, and a perfect location
                    to relax. Highly recommended for families and weekend
                    getaways!&rdquo;
                  </p>
                </blockquote>
                <p><em>&mdash; Ramesh Patil</em></p>
              </div>

              <div class="testimonial text-center slider-item">
                <div class="author-image mb-3">
                  <img
                    src="images/person_3.jpg"
                    alt="Image placeholder"
                    class="rounded-circle mx-auto"
                  />
                </div>
                <blockquote>
                  <p>
                    &ldquo;A hidden gem! Affordable and surrounded by greenery.
                    The fresh air and calm vibes made it a perfect escape from the
                    city.&rdquo;
                  </p>
                </blockquote>
                <p><em>&mdash; Rahul Shinde</em></p>
              </div>

              <div class="testimonial text-center slider-item">
                <div class="author-image mb-3">
                  <img
                    src="images/person_4.jpg"
                    alt="Image placeholder"
                    class="rounded-circle mx-auto"
                  />
                  <!-- <h5 class="mt-2">Rahul Shinde</h5> -->
                  <!-- Added name here -->
                </div>
                <blockquote>
                  <p>
                    &ldquo;We celebrated a birthday here and everything was just
                    perfect. Great atmosphere, good service, and beautiful natural
                    surroundings.&rdquo;
                  </p>
                </blockquote>
                <p><em>&mdash; Omkar Bhosle</em></p>
              </div>

            
            <!-- END slider -->
          </div>
        </div>
      </section>

      <section class="section blog-post-entry bg-light">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
              <h2 class="heading" data-aos="fade-up">Events</h2>
              <p data-aos="fade-up">
                Whether it’s a family gathering, a birthday celebration, or a
                small corporate meetup, our lodge offers a peaceful and beautiful
                setting for all your events. Surrounded by nature and comfort, we
                make every occasion feel warm, memorable, and perfectly managed.
              </p>
            </div>
          </div>
          <div class="row">
            <div
              class="col-lg-4 col-md-6 col-sm-6 col-12 post"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="media media-custom d-block mb-4 h-100">
                <a href="#" class="mb-4 d-block"
                  ><img
                    src="images/family.png"
                    alt="Image placeholder"
                    class="img-fluid"
                /></a>
                <div class="media-body">
                  <span class="meta-post">July 09, 2025</span>
                  <h2 class="mt-0 mb-3"><a href="#">Family Gatherings</a></h2>
                  <p>
                    Create lasting memories with your loved ones in a peaceful and
                    homely environment. Whether it’s a reunion or a weekend
                    getaway, our space is perfect for relaxed family time.
                  </p>
                </div>
              </div>
            </div>
            <div
              class="col-lg-4 col-md-6 col-sm-6 col-12 post"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="media media-custom d-block mb-4 h-100">
                <a href="#" class="mb-4 d-block"
                  ><img
                    src="images/birthday.png"
                    alt="Image placeholder"
                    class="img-fluid"
                /></a>
                <div class="media-body">
                  <span class="meta-post">July 09, 2025</span>
                  <h2 class="mt-0 mb-3"><a href="#">Birthday Celebrations</a></h2>
                  <p>
                    Celebrate birthdays surrounded by nature and comfort. With
                    open spaces, cozy interiors, and a friendly staff, we make
                    your special day feel truly joyful and stress-free.
                  </p>
                </div>
              </div>
            </div>
            <div
              class="col-lg-4 col-md-6 col-sm-6 col-12 post"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="media media-custom d-block mb-4 h-100">
                <a href="#" class="mb-4 d-block"
                  ><img
                    src="images/camp.png"
                    alt="Image placeholder"
                    class="img-fluid"
                /></a>
                <div class="media-body">
                  <span class="meta-post">July 09, 2025</span>
                  <h2 class="mt-0 mb-3"><a href="#">Corporate Retreats</a></h2>
                  <p>
                    Escape the city and bring your team closer in a calm,
                    distraction-free setting. Ideal for team-building, meetings,
                    or just a refreshing work break in a natural atmosphere.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="section bg-image overlay"
        style="background-image: url('images/hero_4.jpg')"
      >
        <div class="container">
          <div class="row align-items-center">
            <div
              class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left"
              data-aos="fade-up"
            >
              <h2 class="text-white font-weight-bold">
                A Best Place To Stay. Reserve Now!
              </h2>
            </div>
            <div
              class="col-12 col-md-6 text-center text-md-right"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a
                href="reservation.php"
                class="btn btn-outline-white-primary py-3 text-white px-5"
                >Book Now</a
              >
            </div>
          </div>
        </div>
      </section>

 <?php include 'layouts/footer.php'; ?>