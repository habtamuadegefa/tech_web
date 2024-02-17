@include('layouts.header')


<body>

  

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/cta-bg.jpg');height: 80vh;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Career</h2>
             </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Careers</li>
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
              <h3>Responsible</h3>
               
               <p>
            Please do not apply if you are not self-directed learner who takes full responsibility for growth and skill development even if it’s at the price of social commitment.
               </p>
              
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item ">
              <h3> Committed</h3>
          
              Please do not apply if you are not committed to meeting deadlines regardless of working on weekends, holidays, and beyond normal working hours.
             
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3> Accountable</h3>
           <p>
          
            Please do not apply if you are not take ownership of problems and shepherd the process until it is 
            resolved even if you are not the one who will not ultimately fix it.
           </p>
              
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->
    <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">
    <div class="section-header">
        <span>Career Opportunities</span>
        <h2>Career Opportunities</h2>


    </div>
<p>XYZ Technologies is a young and ambitious organization with abundant opportunities for professional growth. Working atzcradle trading plc is not just a job; it goes well beyond that. It’s a journey to fulfill your aspirations. We provide a challenging and enjoyable work environment.zcradle trading plc realizes your real potential and recognize your work.
<br>

    We are growing at a rapid pace and always need enthusiastic, talented and exceptional achievers like you who will outperform customer expectations, be catalysts for innovation and drive technological advancement.</p>
   
<hr>

</div>
<div class="section-header"> 
    <h3>Current Job Openings</h3>
<p>No list found.</p></div>
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