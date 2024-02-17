@include('layouts.header')


<body>

  

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/about.jpg'); height: 80vh;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Our Product</h2>
                   </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Products</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
             
              <img src="assets/img/edms.jpg" alt="">
               <h3>eDMS</h3>
               
               <p>Now is the time to make way for eDMS (Electronics Document Management System). The days of filing cabinets and paper documents are over.zcradle trading plc offers fit-to-purpose solutions to meet the requirements placed by authorities on organizing and managing records that improve efficiency and enable organizations to correctly implement regulatory requirements. Our eDMS allows automation that guarantees 
                more efficient and transparent business processes via its sophisticated encryption.</p>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <img src="assets/img/eschool.jpg" alt="">
              <h3>E-service</h3>
              <h4></h4>
               <p>Our eService System improves efficiency and enable organizations
                 to correctly implement regulatory requirements. Aszcradle trading plc, we strongly believe that we have the effective solution and capabilities to implement to the selected government agencies. Our eService solution will address the requirements, needs and challenges of the platform and is the ideal business software for transparent, streamlined processes in all your departments. Offering digital, 
                revision-controlled filing </p>
 
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <img src="assets/img/emedical.jpg" alt="">
              <h3>eMedical</h3>
               
              <p>A system for patient records, financial, and administrative data for Medical Centers. Telemedicine and e-health are changing the world of healthcare. The industry is highly regulated and there are stringent requirements for dealing with and storing sensitive patient data. Our eMedical System offers Appointment Scheduling. Billing. Communication. Cumulative Patient Profile. Document Management. Electronic Medical Records. 
                Encounters and Progress Notes. Financial Controller. Laboratory Results.</p>
               
            </div>
          </div><!-- End Pricing Item -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <img src="assets/img/eservice.jpg" alt="">
              <h3>eSchool</h3>
               
              <p>Take Your School to the Next Level. The digital era is 
                transforming the educational landscape. Learning is more technology-based,
                 preparing students to successfully compete in a globalized world. 
                 Our eSchool System enables educational institutions to streamline processes 
                 and digitize all teaching – learning processes. Our eSchool helps all
                  sorts of educational institutes to modernize education through online classrooms, 
                  virtual labs, immersive learning, 
                and technologies along with automating their administration processes.</p>
 
            </div>
          </div><!-- End Pricing Item --><div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <img src="assets/img/smart.jpg" alt="">
              <h3>eSmartWaterMeter</h3>
              
             <p>We offer ideal Smart Water Metering System solutions. 
              The system includes water meters, supervision software and network management systems etc. Our Smart Water Meter System will create a two way communication between the customer and the utility company, thereby benefiting from accurate billing, elimination of “no read” occasions and costs associated with it, 
              anti-tampering features, leak detection, increased revenue and reduction in losses and wastage.</p>
            
            </div>
          </div><!-- End Pricing Item -->
        </div>

      </div>
    </section><!-- End Pricing Section -->

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