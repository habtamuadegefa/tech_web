@include('layouts.header')


<body>

 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/enterpp.jpg');height: 100vh;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8 text-center">
              <h2> Enterprise Business Solutions</h2>
            


              <p> Enterprise Business Solutions
                Maximize your IT investments through innovative technology solutions</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Enterprise Business </li>
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
                <h3>Digital Office Solution

                </h3>
                <p class="fst-italic">
                    Digital Office aims to drive a smarter and more agile transformation in this age-old architecture, opening new avenues for fast and transparent management and reducing administrative burdens. The system is linked to a comprehensive knowledge management system that serves as an electronic repository of all important government information. 
                    The digital office creates a paperless workplace where paper-based processes are eliminated.   </div>
            </div><!-- Features Item -->
    
            <div class="row gy-4 align-items-center features-item" data-aos="fade-right">
              <div class="col-md-5 order-1 order-md-2">
                <img src="assets/img/erp.png" class="img-fluid" alt="">
              </div>
              <div class="col-md-7 order-2 order-md-1">
                <h3>ERP Solution
                    

                </h3>
 <p>
    Enterprise Resource Planning (ERP) is the integrated management of key business processes, often in real-time and mediated by software and technology. ERP is generally referred to as a category of business management software, usually, a set of integrated applications that an organization can use to collect,
     store, manage and interpret data from many business activities.</p>
                
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