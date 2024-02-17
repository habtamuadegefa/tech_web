@include('layouts.header')

<body>

 <!-- ======= Header ======= -->
 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/about.jpg');height: 80vh;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Service Details</h2>
             </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Service Details</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Service Details Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Website Development</h3>
               
               <p>
                Web development is the technical process of building and maintaining websites. It includes both front-end development, dealing with the visible aspects of a website that users interact with, and back-end development, which involves server-side scripting, databases, and other behind-the-scenes functionalities. 
                Web developers use programming languages and frameworks to bring web designs to life.
               </p>
              
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item ">
              <h3> Mobile Application Development</h3>
          
Mobile application development is the process of creating software applications designed to run on mobile devices like smartphones and tablets. It involves designing, coding, testing, and deploying applications across different platforms such as iOS and Android. Developers use programming languages and tools to build user-friendly
 and functional mobile apps that serve various purposes, from productivity to entertainment.
             
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3> Web Design:</h3>
           <p>
          
Web design is the process of creating the visual layout and user interface of a website. It involves planning the website's structure, designing its appearance, and arranging elements such as text, images, and interactive components to ensure a pleasant and effective user experience.
 Web designers focus on aesthetics, usability, and responsiveness across different devices.
           </p>
              
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

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