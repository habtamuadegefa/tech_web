@include('layouts.header')


<body>

 
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/datacenter.jpg' );height: 100vh;">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Data Center
                & Cloud</h2>
              <p>Whether you are looking for cloud applications, cloud software or private cloud computing, Cloud Computing Services streamline your business’s productivity.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Data Center</li>
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
                <img src="assets/img/end.png" class="img-fluid" alt="">
              </div>
              <div class="col-md-7">
                <h3>End User Computing</h3>
                <p class="fst-italic">
                  The phrase unstructured data usually refers to information that doesn’t reside in a traditional row-column database this includes things like e-mail messages, word processing documents, videos, photos, audio files, presentations, webpages and many other kinds of business documents. Internally, almost every corporate department uses unstructured data in some form; externally, unstructured data is used to monitor and report on movements of shipments and/or assets with sensors and more. Many organizations believe that their unstructured data stores include information that could help them make better business decisions.
                   Unfortunately, it’s often very difficult to analyze unstructured data.
                </p>
 
              </div>
            </div><!-- Features Item -->
    
            <div class="row gy-4 align-items-center features-item" data-aos="fade-right">
              <div class="col-md-5 order-1 order-md-2">
                <img src="assets/img/cloude.png" class="img-fluid" alt="">
              </div>
              <div class="col-md-7 order-2 order-md-1">
                <h3>Cloud Services
                </h3>
               
                  Cloud computing is the delivery of computing service including servers, storage, databases, networking, software, analytics and intelligence over the Internet (“the cloud”) to offer faster innovation, flexible resources and economies of scale. You typically pay only for cloud services you use, helping you lower your operating costs, 
                  run your infrastructure more efficiently, and scale as your business needs change.  
                 <ul>
                    <li><i class="bi bi-check"></i> Office365 Cloud Service</li>
                    <li><i class="bi bi-check"></i> Amazon Web Services (AWS).</li>
                  </ul>  
                
                </div>
                 
                </div><!-- Features Item -->
    
            <div class="row gy-4 align-items-center features-item" data-aos="fade-left">
              <div class="col-md-5">
                <img src="assets/img/infra.png" class="img-fluid" alt="">
              </div>
              <div class="col-md-7">
                <h3>Converged Infrastructure</h3>
                <p>
                  Converged infrastructure, sometimes known as converged architecture, is an approach to data center management that packages computing, networking, servers, storage and virtualization tools on a prequalified turnkey appliance. Converged systems include a toolkit of management software.

<br>
AtZCRADLE we use CI which will help customers to have the momentum to shift away from owning and managing hardware to a flexible self service model in which resources are consumed on demand.</p>
                 
              </div>
            </div><!-- Features Item -->
    
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
              <div class="col-md-5 order-1 order-md-2">
                <img src="assets/img/data.png" class="img-fluid" alt="">
              </div>
              <div class="col-md-7 order-2 order-md-1">
                <h3>Data Center Infrastructure

                  </h3>
                
                <p>
                  With ever-increasing data center (DC) size and complexity, DC managers and IT professionals require the right configurations and equipment to meet their specific environment needs, as well as remote management solutions that enable them to quickly and effectively access servers, network devices and other mission-critical equipment.
<br>
                  These products are not only vital to run the system efficiently, but can also contribute to an overall strategy that saves your company money. With a vendor independent approach, the experts atZCRADLE Data Center Solutions can review your specific environment and help you find the best infrastructure solutions for your data center, server room, computer closet or server rack.                </p>
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