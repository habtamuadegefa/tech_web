
@include('layouts.header')


<body>

 <!-- ======= Header ======= -->
  

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/about.jpg'); height: 80vh;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>About Us</h2>
             </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li>About </li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/R.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=ZSiXZxVpVhs&ab_channel=TechMagelanic" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <br>
            <br>
            <br>
            
            <h3>Who We Are</h3>
            <p>Welcome toZCRADLE Tech Solutions –provides complete range of High quality Software and Hardware Solutions to its customers enabling them to automate their businesses. We provide business with dynamic and professional IT service backed by a wealth of experience.</p>

            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-phone-flip"></i>
                <div>
                  <h5>Mobile Application Development</h5>
                  <p>We are dedicated to providing mobile applications of the highest quality</p>
                </div>
              </li>
              <li data-aos="fade-right" data-aos-delay="300">
                <i class="bi bi-globe"></i>
                <div>
                  <h5>Website Development</h5>
                  <p>We are dedicated to providing web applications of the highest quality</p>
                </div>
              </li>
             
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="400" data-purecounter-duration="1" class="purecounter"></span>
              <p>Solution</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
         

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 col-md-8 d-flex">
            <div class="member">
              <h2>We bring</h2>
              <div class="member-content">
                <ul>
                  <li>Professional, cost-effective technology services to business, government, and not-for-profit clients</li>
                <li>Objective analysis of your technology needs</li>
                <li>An established endorsement from our clients to prove our success in providing web development and professional IT services</li>
                
              <li>A track record in working with businesses in various states and municipals and individuals who face various challenges in today’s 
                dynamic and global market which requires web presence</li></ul>
  
              
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6 col-md-6 d-flex">
            <div class="member">
              <h2>We deliver IT solutions that</h2>
              <div class="member-content">
                <ul>
                  <li>Enable your business to grow and prosper</li>
                <li>Provide reliable, hassle-free technology</li>
                <li>Include predictable investments</li>
                
              <li>Proactively manage IT resources to reduce risk and downtime</li>
  <li>Allow you to concentrate on your core business rather than computers</li>
              </ul>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Team Section -->
  

    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">
 

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
             
              <p> Addis Ababa, Ethiopia</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>Info@zcradle.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+251-912808387</p>
            </div>
          </div>

        </div>
        </div>
        </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')

  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script>
    
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover:false,
            responsive: [{
                breakpoint: 768,
                setting: {
                    slidesToShow:4
                }
            }, {
                breakpoint: 520,
                setting: {
                    slidesToShow: 3
                }
            }]
        });
    });

    </script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>