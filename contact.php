<?php include 'layouts/header.php'; ?>


    <section
      class="site-hero inner-page overlay"
      style="background-image: url(images/hero_4.jpg)"
      data-stellar-background-ratio="0.5"
    >
      <div class="container">
        <div
          class="row site-hero-inner justify-content-center align-items-center"
        >
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Contact</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="index.php">Home</a></li>
              <li>&bullet;</li>
              <li>Contact</li>
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

    <section class="section contact-section" id="next">
      <div class="container">
        <div class="row">
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <form
              action="https://api.web3forms.com/submit"
              method="POST"
              class="bg-white p-md-5 p-4 mb-5 border"
            >
              <!-- Web3Forms Access Key -->
              <input
                type="hidden"
                name="access_key"
                value="ad85ff48-645b-4ddb-8365-ea16913ccd7c"
              />

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Name</label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control"
                    required
                  />
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Phone</label>
                  <input
                    type="text"
                    id="phone"
                    name="phone"
                    class="form-control"
                    required
                  />
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control"
                    required
                  />
                </div>
              </div>

              <div class="row mb-4">
                <div class="col-md-12 form-group">
                  <label for="message">Write Message</label>
                  <textarea
                    name="message"
                    id="message"
                    class="form-control"
                    cols="30"
                    rows="8"
                    required
                  ></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <input
                    type="submit"
                    value="Send Message"
                    class="btn btn-primary text-white font-weight-bold"
                  />
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
              <div class="col-md-10 ml-auto contact-info">
                <p>
                  <span class="d-block">Address:</span>
                  <span>
                    Surya Hotel & Family Lodge, <br />
                    near yashodhan petrol pump and ajinkya dhaba , Sangli Vita
                    road , Borgaon , Tasgaon</span
                  >
                </p>
                <p>
                  <span class="d-block">Phone:</span>
                  <span> (+91) 7666502402</span>
                </p>
                <p>
                  <span class="d-block">Email:</span>
                  <span> gvpratap@yahoo.com</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section testimonial-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up">People Says</h2>
          </div>
        </div>
        <div class="row">
          <div
            class="js-carousel-2 owl-carousel mb-5"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="testimonial text-center slider-item">
              <div class="author-image mb-3">
                <img
                  src="images/person_1.jpg"
                  alt="Image placeholder"
                  class="rounded-circle mx-auto"
                />
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
              A Best Place To Stay. Book Now!
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