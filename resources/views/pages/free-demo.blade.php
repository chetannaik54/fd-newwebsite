
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Axtra HTML5 Template">

  <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.png">

  <title>Free Demo - FidelisGroup</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="assets/imgs/icon/logo-3.html">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/index.html">
  <link rel="preconnect" href="https://fonts.gstatic.com/index.html" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- All CSS files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/progressbar.css">
  <link rel="stylesheet" href="assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="assets/css/master.min.css">
  <style>    #myVideo {
    width: 100vw;
    height: 100vh;
    object-fit: cover;
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: -1;
}
#clientLogo .swiper{padding-bottom:60px!important;height:250px}#clientLogo .swiper .swiper-wrapper{align-items:center}#clientLogo .swiper .swiper-slide{border-radius:5px;height:180px!important;background-color:#000;border:1px solid #fff;transition:.2s}#clientLogo .swiper .swiper-slide.active{height:230px!important}#clientLogo .swiper .next,#clientLogo .swiper .prev{cursor:pointer;z-index:100;position:absolute;top:50%;transform:translateY(-50%);opacity:.65;transition:.2s}#clientLogo .swiper .next:hover,#clientLogo .swiper .prev:hover{opacity:1}#clientLogo .swiper .next svg,#clientLogo .swiper .prev svg{width:20px;height:20px}#clientLogo .swiper .next svg path,#clientLogo .swiper .prev svg path{fill:#fff}#clientLogo .swiper .prev{left:25px}#clientLogo .swiper .next{right:25px}#clientLogo .swiper .pagination{margin-left:8px!important;display:flex;align-items:center;justify-content:center;margin-top:40px;z-index:100}#clientLogo .swiper .pagination span{font-size:0;opacity:1;margin:0 6px!important;border:1px solid #fff}#clientLogo .swiper .pagination span.swiper-pagination-bullet-active{background-color:transparent;transform:scale(1.5)}
</style>

</head>


<body>

  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>

  <!-- Preloader -->
  <div class="preloader">
    <div class="loading">
    </div>
  </div>

  <!-- Scroll Smoother -->
  <div class="has-smooth" id="has_smooth"></div>

  <!-- Go Top Button -->
  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>

  @include('components/nav')

  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main>
        <div class="home-wrapper-4">

          <!-- Hero area start -->
          <section class="hero__area-6 positon-relative" >

            {{-- <video autoplay muted loop id="myVideo">
                <source src="{{ asset('videos/pexels-pavel-danilyuk-5495781.mp4') }}" type="video/mp4">
            </video> --}}

            <div class="container g-0 line_4">
              <div class="line-col-4">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </div>

              <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6" style="padding-top: 17rem;">
                    <div class="contact__form">
                      <form method="POST" id="user-contact-form" data-action="{{ route('contactRequestPost') }}">
                        @csrf
                        <div class="row g-3">
                          <div class="col-xxl-6 col-xl-6 col-12">
                            <input type="text" name="name" placeholder="Name *">
                          </div>
                          <div class="col-xxl-6 col-xl-6 col-12">
                            <input type="email" name="email" placeholder="Email *">
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-xxl-6 col-xl-6 col-12">
                            <input type="tel" name="phone" placeholder="Phone">
                          </div>
                          <div class="col-xxl-6 col-xl-6 col-12">
                            <label for="">Select</label>
                            <select name="subject" id="Subject" class="form-control">
                              <option value="NOC">NOC</option>
                              <option value="SOC">SOC</option>
                              <option value="AMS">AMS</option>
                            </select>
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-12">
                            <textarea name="message" placeholder="Messages *"></textarea>
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-12">
                            <div class="btn_wrapper">
                              <button class="wc-btn-primary btn-hover btn-item"><span></span> Send <br>Messages <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                  <div class="hero__right-6">
                    <img src="assets/imgs/hero/4/hero-4.png" alt="Hero Image">
                  </div>
                </div>
              </div>
            </div>
            <img class="hero__shape" src="assets/imgs/hero/4/hero-shape.png" alt="Shape Image">
            <img class="hero__shape-2" src="assets/imgs/hero/4/hero-shape-2.png" alt="Layout">
            <img class="hero__shape-3" src="assets/imgs/hero/4/hero-shape-3.png" alt="Star Icon">
            <img class="shape-4" src="assets/imgs/shape/20.png" alt="Star Icon">
          </section>
          <!-- Hero area end -->


          <!-- Workflow area start -->
          <section class="workflow__area-4">
            <div class="container line_4 pt-100 pb-130">
              <div class="line-col-4">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </div>

              <div class="row animation_workflow_6">
                <div class="col-xxl-12">
                  <div class="title-wrapper-6 text-anim">
                    <h3 class="sec-title-6 title-anim">Our Products</h3>
                    <p>Give directions to your needs through a wide range of Highly Customisable & affordable IT Solutions <br>
                    </p>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                  <div class="workflow__item-4">
                    <img src="assets/imgs/thumb/1.png" alt="Work Image">
                    <h4 class="workflow__title-4">NOC</h4>
                    <p>NOC aka Network Operations Center solutions that help organizations monitor and manage their infrastructure support to ensure its stability and performance. </p>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                  <div class="workflow__item-4">
                    <img src="assets/imgs/thumb/2.png" alt="Work Image">
                    <h4 class="workflow__title-4">AMS</h4>
                    <p>Fidelis Asset Management (AMS) is a comprehensive solution designed to help organizations manage, control, and track their assets</p>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                  <div class="workflow__item-4">
                    <img src="assets/imgs/thumb/3.png" alt="Work Image">
                    <h4 class="workflow__title-4">SOC</h4>
                    <p>SOC aka Security Operating Center solution provides a comprehensive approach to securing your IT environment</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Workflow area end -->


          <!-- Feature area start -->
          <section class="feature__area-6">
            <div class="container line_4">
              <div class="line-col-4">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </div>

              <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6">
                  <div class="feature__content-left">
                    <h2 class="sec-subtile-6">NOC</h2>
                    <h3 class="sec-title-6 title-anim">Network Operation Center</h3>
                  </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6">
                  <div class="feature__content-right">
                    <h4 class="feature__title-6">Features of Fidelis NOC Solutions include</h4>
                    <p> Proactive monitoring for quick issue detection and resolution.</p>
                    <div class="row grid">
                      <div class="col-md-6 float-start"><p class="p-0">+ Customizable solutions that meet the unique needs of each organization.</p></div>
                      <div class="col-md-6 float-start"><p class="p-0">+ 24/7 monitoring to ensure issues are addressed quickly regardless of the time of day.</p></div>
                      <div class="col-md-6 float-start pt-3"><p class="p-0">+ Increased uptime and high-quality support to improve customer satisfaction.</p></div>
                      <div class="col-md-6 float-start pt-3"><p class="p-0">+ Cost-effective solutions that provide necessary support without exceeding budget.</p></div>
                    </div>

                    <img class="feature__img-2" src="assets/imgs/feature/4/2.png" alt="Icon">
                    <img class="feature__img-3" src="assets/imgs/feature/4/3.png" alt="Icon">
                  </div>
                </div>

                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6">
                  <div class="feature__content-right">
                    <h4 class="feature__title-6">Features of Fidelis SOC Solutions</h4>
                    <div class="row grid">
                      <div class="col-md-6 float-start"><p class="p-0">+ AI Threat Detection for Early Prevention</p></div>
                      <div class="col-md-6 float-start"><p class="p-0">+ Real-Time Monitoring & Automated Response</p></div>
                      <div class="col-md-6 float-start pt-3"><p class="p-0">+ Integrated Security Tools for Consolidation</p></div>
                      <div class="col-md-6 float-start pt-3"><p class="p-0">+ Enhanced Visibility for Proactive Measures</p></div>
                      <div class="col-md-6 float-start pt-3"><p class="p-0">+ 24/7 IT Environment Monitoring for Security</p></div>
                    </div>

                    <img class="feature__img-2" src="assets/imgs/feature/4/2.png" alt="Icon">
                    <img class="feature__img-3" src="assets/imgs/feature/4/3.png" alt="Icon">
                  </div>
                </div>

                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6">
                  <div class="feature__content-left">
                    <h2 class="sec-subtile-6">SOC</h2>
                    <h3 class="sec-title-6 title-anim">Security Operation Center</h3>
                  </div>
                </div>

                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6">
                  <div class="feature__content-left">
                    <h2 class="sec-subtile-6">AMS</h2>
                    <h3 class="sec-title-6 title-anim">Asset Management Solutions</h3>
                  </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6">
                  <div class="feature__content-right">
                    <h4 class="feature__title-6">Fidelis Asset Management (AMS) is a comprehensive solution designed to help organizations manage, control, and track their assets</h4>
                    <div class="row grid">
                      <div class="col-md-6 float-start"><p class="p-0">+ Asset Tracking: Real-time info and lifecycle management</p></div>
                      <div class="col-md-6 float-start"><p class="p-0">+ Cost Optimization: Informed decision-making, maximizing utilization</p></div>
                      <div class="col-md-6 float-start pt-2"><p class="p-0">+ Vendor Performance: Measuring and improving service delivery</p></div>
                      <div class="col-md-6 float-start pt-2"><p class="p-0">+ IT Asset Management: Secure and effective operations</p></div>
                      <div class="col-md-6 float-start pt-2"><p class="p-0">+ Data Security: Best-in-class security, performance, and availability</p></div>
                      <div class="col-md-6 float-start pt-2"><p class="p-0">+ Real-time Monitoring: Quick response and mobile-friendly asset tracking</p></div>
                    </div>

                    <img class="feature__img-2" src="assets/imgs/feature/4/2.png" alt="Icon">
                    <img class="feature__img-3" src="assets/imgs/feature/4/3.png" alt="Icon">
                  </div>
                </div>

              </div>
            </div>
          </section>
          <!-- Feature area end -->

          {{-- @include('components.clients-slider'); --}}

          @include('components.testimonial')

        </div>
      </main>

      @include('components.footer')

    </div>
  </div>



  <!-- All JS files -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/gsap.min.js"></script>
  <script src="assets/js/ScrollTrigger.min.js"></script>
  <script src="assets/js/ScrollToPlugin.min.js"></script>
  <script src="assets/js/ScrollSmoother.min.js"></script>
  <script src="assets/js/SplitText.min.js"></script>
  <script src="assets/js/chroma.min.js"></script>
  <script src="assets/js/mixitup.min.js"></script>
  <script src="assets/js/vanilla-tilt.js"></script>
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <script src="assets/js/main.js"></script>


  @section('script')
  <script>
      $(document).ready(function(){
  
      var form = '#user-contact-form';
  
      $(form).on('submit', function(event){
          event.preventDefault();
  
          var url = $(this).attr('data-action');

          $('.wc-btn-primary').html("Sending... <i class='fa fa-spinner fa-spin' style='font-size:24px'></i>");

          $.ajax({
              url: url,   
              method: 'POST',
              data: new FormData(this),
              dataType: 'JSON',
              contentType: false,
              cache: false,
              processData: false,
              success:function(response)
              {
                  $(form).trigger("reset");
                  $('.wc-btn-primary').html("Thank You... <i class='fa fa-thumbs-o-up' aria-hidden='true'></i>");
              },
              error: function(response) {
                  $('.wc-btn-primary').html("Oops... <i class='fa fa-thumbs-o-down' aria-hidden='true'></i>");
                  $('#error').html(response);
              }
          });
      });
  });  
  </script>
    <script>
      const swiper = new Swiper("#clientLogo", {
          slidesPerView: 8,
          spaceBetween: 70,
          loop: true,
          grabCursor: true,
          centeredSlides: true,
          slideActiveClass: "active",
          autoplay: {
              enabled: true,
              delay: 3000
          },
          // Media
          breakpoints: {
            // when window width is >= 320px
            320: {
              slidesPerView: 2,
              spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
              slidesPerView: 4,
              spaceBetween: 30
            },
            997: {
              slidesPerView: 8,
              spaceBetween: 60
            },
          }
      });
  </script>
</body>


</html>