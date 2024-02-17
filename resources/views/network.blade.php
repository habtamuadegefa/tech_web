@include('layouts.header')


<body>

 

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/net.png');height: 100vh;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Network Solution</h2>
              <p>network becomes an outstanding business asset. A properly designed and well maintained communication network means</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Network</li>
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
                <img src="assets/img/networksolution.png" class="img-fluid" alt="">
              </div>
              <div class="col-md-7">
                <h3>Network Solutions
                </h3>
                <p class="fst-italic">
                    We have a strong heritage in systems integration, mature managed services and technical expertise. Our expertise extends to datacenter, security, end-user computing solutions and IT services.
<br>
                    Our Software-Defined Networking (SDN) Solution is a network architecture approach that enables the network to be intelligently and centrally controlled or programmed, using software applications. This helps operators manage the entire network consistently and holistically, regardless of the underlying network technology. SD-WAN virtualizes resources to apply enhanced performance, accelerated services delivery and improved availability over the WAN providing choice in automation and programmability across wide area networks.   </p>
 
              </div>
            </div><!-- Features Item -->
    
            <div class="row gy-4 align-items-center features-item" data-aos="fade-right">
              <div class="col-md-5 order-1 order-md-2">
                <img src="assets/img/wlan.png" class="img-fluid" alt="">
              </div>
              <div class="col-md-7 order-2 order-md-1">
                <h3>WLAN Solutions

                </h3>
                802.11AC WAVE 2 is the newest version of the latest Wi-Fi standard. It builds on first-generation 802.11ac technology by delivering a faster data rate. We provide two kinds of Wi-Fi Solutions which is indoor, outdoor and cloud-managed Wi-Fi solutions.
<br>
                In our cloud-Managed Wi-Fi we provide cloud-managed 802.11ac wave 2 Wi-Fi products with advanced management capability that deliver high capacity and fast installation in an affordable package.      <ul>
                    <li><i class="bi bi-check"></i> Deploy Complex Wireless Infrastructure
                    </li>
                    <li><i class="bi bi-check"></i>Integration</li>
                  </ul>  
                
                </div>
                 
                </div><!-- Features Item -->
    
            <div class="row gy-4 align-items-center features-item" data-aos="fade-left">
              <div class="col-md-5">
                <img src="assets/img/col.png" class="img-fluid" alt="">
              </div>
              <div class="col-md-7">
                <h3>Collaboration Solution
                </h3>
                <p>
                    Communication and collaboration are more critical than ever in today’s enterprise and as collaboration-oriented capabilities continue to advance, new themes are evolving that challenge the way organizations operate. Working across traditional boundaries has become business-critical as enterprises look to expand their global and intercompany value chains and achieve competitive advantage.
<br>
                    Unified communication improves with easy-to-use and easy-to-deploy solutions that empower people to engage and innovate, anywhere, on any device.ZCRADLE provides flexible, right-sized, right-priced collaboration solutions that help improve productivity, reduce costs, speed decision making and enhance customer relationships.
                 
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