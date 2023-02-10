
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
  <link rel="stylesheet" href="assets/css/master.css">
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
}</style>

</head>


<body>

  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>

  <!-- Preloader -->
  <div class="preloader">
    <div class="loading">
      <div class="bar bar1"></div>
      <div class="bar bar2"></div>
      <div class="bar bar3"></div>
      <div class="bar bar4"></div>
      <div class="bar bar5"></div>
      <div class="bar bar6"></div>
      <div class="bar bar7"></div>
      <div class="bar bar8"></div>
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
                      <form action="https://wealcoder.com/dev/html/axtra/assets/mail.php" method="POST">
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
                            <input type="text" name="subject" placeholder="Subject *">
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
                              <button class="wc-btn-primary btn-hover btn-item"><span></span> Send <br>Messages <i
                                  class="fa-solid fa-arrow-right"></i></button>
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
                    <h2 class="sec-subtile-6">Processing</h2>
                    <h3 class="sec-title-6 title-anim">Our Products</h3>
                    <p>Adjust your design through a wide range of theme options in the <br> development and instantly.
                    </p>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                  <div class="workflow__item-4">
                    <img src="assets/imgs/thumb/1.png" alt="Work Image">
                    <h4 class="workflow__title-4">NOC</h4>
                    <p>Modern and unique design practically point of view, it risks not meeting the huge expectations
                    </p>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                  <div class="workflow__item-4">
                    <img src="assets/imgs/thumb/2.png" alt="Work Image">
                    <h4 class="workflow__title-4">AMS</h4>
                    <p>Using year-over-year design and latest techs, we will ensure that your new website will be
                      visible
                    </p>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                  <div class="workflow__item-4">
                    <img src="assets/imgs/thumb/3.png" alt="Work Image">
                    <h4 class="workflow__title-4">SOC</h4>
                    <p>Brand strategy tools are made size for marketing teams taken possession of global strategy</p>
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
                    <h2 class="sec-subtile-6">Features</h2>
                    <h3 class="sec-title-6 title-anim">We handle visual <br> design challenges <br> our way.</h3>
                  </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6">
                  <div class="feature__content-right">
                    <h4 class="feature__title-6">Creativity</h4>
                    <p>We are constantly rethinking the future by creating the next generation of products, <span>brands
                        and design features</span> from a
                      hybrid perspective.</p>
                    <p>Regulatory oneven an enterprises such she and the got the did attributing and pushed.</p>
                    <img class="feature__img-1" src="assets/imgs/feature/4/1.png" alt="Icon">
                    <img class="feature__img-2" src="assets/imgs/feature/4/2.png" alt="Icon">
                    <img class="feature__img-3" src="assets/imgs/feature/4/3.png" alt="Icon">
                  </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                  <div class="feature__content">
                    <img src="assets/imgs/feature/4/feature.jpg" alt="Features Image">
                  </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                  <div class="feature__content-btm">
                    <div class="feature__content-item fade_bottom_4">
                      <img src="assets/imgs/feature/4/icon-1.png" alt="Features Image">
                      <h5>Unique Header & <br> Sidebar</h5>
                      <p>Unique digital header widget metaverse wearables</p>
                    </div>
                    <div class="feature__content-item fade_bottom_4">
                      <img src="assets/imgs/feature/4/icon-2.png" alt="Features Image">
                      <h5>5+ Navigation <br> Bars</h5>
                      <p>Content focused grid designs unique social element</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Feature area end -->


          <!-- Service area end -->
          <section class="service__area-4">
            <div class="container g-0 line_4 pt-150 pb-140">
              <div class="line-col-4">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </div>

              <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                  <div class="service__left-6">
                    <h2 class="sec-subtile-6">Services</h2>
                    <h3 class="sec-title-6 title-anim">Our full <br> creative services <br> for you</h3>
                  </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                  <div class="service__right-4">
                    <p>We are constantly rethinking the future by creating the next generation of products, <span>brands
                        and services from a hybrid perspective.</span></p>
                    <a class="btn-view" href="service.html">View All Service <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="service__inner-4">
                <div class="row">
                  <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                    <div class="service__img-left">
                      <img src="assets/imgs/service/4/service-1.png" alt="Service">
                    </div>
                  </div>
                  <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                    <div class="service__list-4">
                      <div class="service__item-4 fade_bottom_2">
                        <div class="service__item-number">
                          <span>01</span>
                        </div>
                        <div class="service__title-wrapper-4">
                          <h4><a class="service__item-title" href="#">Brand Strategy</a></h4>
                        </div>
                        <div class="service__item-icon">
                          <a href="service-details.html"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                      </div>
                      <div class="service__item-4 fade_bottom_2">
                        <div class="service__item-number">
                          <span>02</span>
                        </div>
                        <div class="service__title-wrapper-4">
                          <h4><a class="service__item-title" href="#">Development</a></h4>
                        </div>
                        <div class="service__item-icon">
                          <a href="service-details.html"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                      </div>
                      <div class="service__item-4 fade_bottom_2">
                        <div class="service__item-number">
                          <span>03</span>
                        </div>
                        <div class="service__title-wrapper-4">
                          <h4><a class="service__item-title" href="#">UI/UX Design</a></h4>
                        </div>
                        <div class="service__item-icon">
                          <a href="service-details.html"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                      </div>
                      <div class="service__item-4 fade_bottom_2">
                        <div class="service__item-number">
                          <span>04</span>
                        </div>
                        <div class="service__title-wrapper-4">
                          <h4><a class="service__item-title" href="#">Digital marketing</a></h4>
                        </div>
                        <div class="service__item-icon">
                          <a href="service-details.html"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Service area end -->


          <!-- faq area start -->
          <section class="faq__area-4 pt-150 pb-150">
            <div class="container g-0">
              <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-6">
                  <div class="faq__sec-title text-anim">
                    <h2 class="sec-subtile-6">Expertise</h2>
                    <h3 class="sec-title-6 title-anim">With more than 16+ years of experience, our team has become a
                      leader in
                      digital innovations.</h3>
                    <p>Grow brands through bold, strategic creative</p>
                    <a class="btn-view" href="about.html">Know More <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6">
                  <div class="faq__list-4">
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item fade_bottom_3">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Design should enrich our day
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Using year-over-year design approaches and latest techs, we will ensure that your new
                              website will be <span>accessible, and treads lightly</span>.</p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item fade_bottom_3">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Bring their individual experience and creative
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>This is the second item's accordion body. It is hidden by default, until the
                              collapse plugin adds the appropriate classes that we use to style each element. These
                              classes</p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item fade_bottom_3">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Human centred design to challenges
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Our design services starts and ends with a best-in-class experience strategy that builds
                              brands. Through a process of iteration and prototyping design interfaces that bring joy to
                              people</p>
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item fade_bottom_3">
                        <h2 class="accordion-header" id="headingFour">
                          <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Design should enrich our day
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>Our design services starts and ends with a best-in-class experience strategy that builds
                              brands. Through a process of iteration and prototyping design interfaces that bring joy to
                              people</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <img class="faq__img6-1" src="assets/imgs/bg/4/1.png" alt="Shape">
              <img class="faq__img6-2" src="assets/imgs/bg/4/2.png" alt="Shape">
            </div>
          </section>
          <!-- faq area end -->

          <!-- Brand area start -->
          <section class="brand__area-4">
            <div class="container g-0 line_4 pt-130 pb-150">
              <div class="line-col-4">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </div>

              <div class="row">
                <div class="col-xxl-12">
                  <h2 class="brand__title-3 title-anim" data-speed="1">We worked with global largest
                    brands
                  </h2>
                  <div class="brand__list-3">
                    @for($i = 2; $i < 20; $i++)
                    <div class="brand__item fade_bottom">
                      <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/Picture{{ $i }}.png" class="w-75" alt="Brand Logo">
                    </div>
                    @endfor
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Brand area end -->

          <!-- Testimonial area start -->
          <section class="testimonial__area-4 ">
            <div class="container g-0 line_4">
              <div class="line-col-4">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </div>

              <div class="row">
                <div class="col-xxl-12">
                  <div class="testimonial__sec-title text-anim">
                    <h2 class="sec-subtile-6">Testimonials</h2>
                    <h3 class="sec-title-6 title-anim">Clients feedback</h3>
                    <p>We are Trusted by 1000+ global customers teams like have projects with this template</p>
                  </div>
                </div>
                <div class="swiper testimonial__slider-4" style="padding: 0">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial__slide-4">
                      <img class="testimonial__img-4" src="assets/imgs/testimonial/4/1.jpg" alt="Testimonial Image">
                      <div class="testimonial__info-4">
                        <h4 class="testimonial__feedback-4">Design Quality</h4>
                        <p>Our philosophy is built on people who are addicted on creating, learning, and growing
                          together, which allows us to discover better others miss.</p>
                        <h5 class="testimonial__name-4">Jessica Sherlock</h5>
                        <h6 class="testimonial__role-4">Manager, Oitaka </h6>
                      </div>
                    </div>
                    <div class="swiper-slide testimonial__slide-4">
                      <img class="testimonial__img-4" src="assets/imgs/testimonial/4/2.jpg" alt="Testimonial Image">
                      <div class="testimonial__info-4">
                        <h4 class="testimonial__feedback-4">Clean Code</h4>
                        <p>I am very glod happy with this theme, the website loads much faster than any other theme I
                          have used so far clean code and responsive layout.</p>
                        <h5 class="testimonial__name-4">Sharoon Kavin</h5>
                        <h6 class="testimonial__role-4">CEO, Sharoon</h6>
                      </div>
                    </div>
                    <div class="swiper-slide testimonial__slide-4">
                      <img class="testimonial__img-4" src="assets/imgs/testimonial/4/3.jpg" alt="Testimonial Image">
                      <div class="testimonial__info-4">
                        <h4 class="testimonial__feedback-4">Instant Support</h4>
                        <p>In the next time I hire Axtra as they helping innovators and brands through cultural insight,
                          strategiccal vision, and innovation and look too beyond.</p>
                        <h5 class="testimonial__name-4">Sharly Mehroon</h5>
                        <h6 class="testimonial__role-4">Manager, Kavitan</h6>
                      </div>
                    </div>
                  </div>
                  <div class="testimonial__btn-4">
                    <div class="next-button swipper-btn"><i class="fa-solid fa-arrow-left"></i></div>
                    <div class="prev-button swipper-btn"><i class="fa-solid fa-arrow-right"></i></div>
                    <div class="pagination testimonial__pagination-4">
                      <div class="pag"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Testimonial area end -->

          <!-- Blog area start -->
          <section class="blog__area-4 blog__animation">
            <div class="container g-0 line_4 pt-150 pb-150">
              <div class="line-col-4">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </div>

              <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                  <div class="sec-title-wrapper text-anim">
                    <h2 class="sec-subtile-6">Recent Blog</h2>
                    <h3 class="sec-title-6 title-anim">Updated <br> Journal</h3>
                    <p>We help brands stand out through aweful, elegant visual design. Our design mainly philosophy.</p>
                    <a class="btn-started" href="#">All Articles <span><i
                          class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                  <article class="blog__item-4">
                    <div class="blog__img-4">
                      <a href="blog-details.html">
                        <img src="assets/imgs/blog/4/1.jpg" alt="Blog Image">
                      </a>
                    </div>
                    <h4 class="blog__meta-4"><a href="category.html">UI Design</a> <span>02 May 2019</span></h4>
                    <h5><a href="blog-details.html" class="blog__title-4">Ways of lying to yourself about your new
                        relationship.</a></h5>
                    <a href="blog-details.html" class="blog__btn-4">Read More <span><i
                          class="fa-solid fa-arrow-right"></i></span></a>
                  </article>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                  <article class="blog__item-4">
                    <div class="blog__img-4">
                      <a href="blog-details.html">
                        <img src="assets/imgs/blog/4/2.jpg" alt="Blog Image">
                      </a>
                    </div>
                    <h4 class="blog__meta-4"><a href="category.html">UX Design</a> <span>02 May 2019</span></h4>
                    <h5><a href="blog-details.html" class="blog__title-4">Ways of lying to yourself about your new
                        relationship.</a></h5>
                    <a href="blog-details.html" class="blog__btn-4">Read More <span><i
                          class="fa-solid fa-arrow-right"></i></span></a>
                  </article>
                </div>
              </div>
            </div>
          </section>
          <!-- Blog area end -->

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


</body>


</html>