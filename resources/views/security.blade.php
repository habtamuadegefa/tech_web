@include('layouts.header')


<body>

 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/cyber.jpg');height: 100vh;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Cyber Security</h2>
              <p>
                Ensuring proper firewalls and software are in place to protect your network from constant attacks.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Security</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Featured Services Section ======= -->
 

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
    
        <section id="features" class="features">
          <div class="container">
    
            <div class="row gy-4 align-items-center features-item" data-aos="fade-left">
    
              <div class="col-md-5">
                <img src="assets/img/secure.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-md-7">
                <h3>Security Solutions
                </h3>
                <p class="fst-italic">
                  The increase in number as well as the expanding threat landscape, threats are becoming more sophisticated to evade traditional security. With outdated and disparate government networks, security IT staff shortages and budget constraints, breaches are going to continue to happen if effective security is not implemented.
<br>
                  As a company we are ideally suited to help government agencies, NGO and private companies with the most comprehensive, effective and adaptive cybersecurity solutions built on the industry’s top performing, compliant and value-driven security technologies.
              </div>
            </div><!-- Features Item -->
    
            <div class="row gy-4 align-items-center features-item" data-aos="fade-right">
              <div class="col-md-5 order-1 order-md-2">
                <img src="assets/img/safty.png" class="img-fluid" alt="">
              </div>
              <div class="col-md-7 order-2 order-md-1">
                <h3>Safety & Security

                </h3>
 <p>
  A data center is a space or facility dedicated to storing an organization’s entire IT infrastructure. Such a facility offers various services such as organizing, processing and storing data, data recovery, backup and more. Essentially, data centers store the most critical systems and data vital for the operation of that organization, so keeping these facilities secure is a top priority.
<br>
Data center security alludes to the practices, policies, measures and technologies used for both physical and virtual protection of the facility. Security measures need to protect data centers from both external and internal threats. Data loss, data alteration and corruption, DDoS attacks, SQL injection, eavesdropping, tailgating, theft of intellectual property and other types of cyber crime pose a constant threat to data center infrastructure.
 </p>
                
                </div>
                 
                </div><!-- Features Item -->
    
        
    
         
          
           
    
          </div>
        </section><!-- End Features Section -->
    

      </div>
    </section><!-- End Services Section -->

 

    
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