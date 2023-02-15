<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Home - Fidelisgroup</title>

    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/logo/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('assets/imgs/logo/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/imgs/logo/favicon.ico') }}" type="image/x-icon">  

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Cursor Animation -->
    <div class="cursor1"></div>
    <div class="cursor2"></div>

    <!-- Testimonial Play Cursor -->
    <div class="cursor" id="client_cursor">Play</div>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loading"></div>
    </div>

    <!-- Scroll Smoother -->
    <div class="has-smooth" id="has_smooth"></div>

    <!-- Go Top Button -->
    <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>

    @include('components/nav')


    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>

                <!-- Hero area start -->
                <section class="hero__area ">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="hero__content animation__hero_one">
                                    <a href="{{ route('solutions') }}">Strategy, Design and Solution Development <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <div class="hero__title-wrapper">
                                        <h1 class="hero__title">Affordable IT solutions <br> for Businesses</h1>
                                        <p class="hero__sub-title">At Fidelis Group, we converge highly customisable IT
                                            solutions, revolutionary opportunities,
                                            value-based governance, the creation of business processes, and an interface
                                            to collective
                                            consulting for the customers. </p>
                                        {{-- Leading the industry for more than a decade, we endeavoured
                      creating improved innovative systems, executions, and sustainable development for our
                      customers augmented by expertise, knowledge, intelligence, seamless solutions, research,
                      collaboration, talent, the industry, and stakeholders. --}}
                                    </div>
                                    <img src="assets/imgs/icon/arrow-down-big.png" alt="Arrow Down Icon">
                                    {{-- <div class="experience">
                    <h2 class="title">25k+</h2>
                    <p>Projects completed <br>successfully</p>
                  </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <img src="assets/imgs/hero/1/1-bg.png" alt="image" > --}}
                    <video src="videos/earth-video.mp4" class="hero1_bg" autoplay muted playsinline preload="auto"></video>
                </section>
                <!-- Hero area end -->


                <!-- Roll area start -->
                <section class="roll__area">
                    <div class="swiper roll__slider">
                        <div class="swiper-wrapper roll__wrapper">
                            <div class="swiper-slide roll__slide">
                                <a href="{{ route('solutions') }}">
                                    <h2>cloud-led solutions</h2>
                                </a>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <a href="{{ route('solutions') }}">
                                    <h2>Customization</h2>
                                </a>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <a href="{{ route('solutions') }}">
                                    <h2>Robust Support</h2>
                                </a>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <a href="{{ route('solutions') }}">
                                    <h2>cost-effective solutions</h2>
                                </a>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <a href="{{ route('solutions') }}">
                                    <h2>secure ecosystem</h2>
                                </a>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <a href="{{ route('solutions') }}">
                                    <h2>End-to-End Solutions</h2>
                                </a>
                            </div>
                            <div class="swiper-slide roll__slide">
                                <a href="{{ route('solutions') }}">
                                    <h2>Committed </h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Roll area end -->

                <!-- Service area start -->
                <section class="service__area pt-110 pb-150">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="sec-title-wrapper wrap">
                                    {{-- <h2 class="sec-sub-title title-anim">service</h2> --}}
                                    <h3 class="sec-title title-anim">Services we <br>provide</h3>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                <div class="service__top-text text-anim">
                                    <p>We bring improved and <span>affordable solutions</span> to build businessses future ready.</p>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                                <div class="service__top-btn">
                                    <div class="btn_wrapper">
                                        <a href="{{ route('solutions') }}"
                                            class="btn-item wc-btn-secondary btn-hover"><span></span> View <br>all services <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service__list-wrapper">
                            <div class="row">
                                <div class="col-xxl-4 col-xl-4 col-lg-0 col-md-0">
                                    <div class="service__img-wrapper">
                                        <img src="assets/imgs/service/1/1.jpg" alt="Service Image"
                                            class="service__img img-1 active">
                                        <img src="assets/imgs/service/1/2.png" alt="Service Image"
                                            class="service__img img-2">
                                        <img src="assets/imgs/service/1/3.png" alt="Service Image"
                                            class="service__img img-3">
                                        <img src="assets/imgs/service/1/4.png" alt="Service Image"
                                            class="service__img img-4">
                                        <img src="assets/imgs/service/1/2.png" alt="Service Image"
                                            class="service__img img-5">

                                        <span class="shape-box-1 current"></span>
                                        <span class="shape-box-2"></span>
                                        <span class="shape-box-3"></span>
                                        <span class="shape-box-4"></span>
                                        <span class="shape-box-5"></span>
                                    </div>
                                </div>
                                <div class="col-xxl-8 col-xl-8 col-lg-12 col-md-12">
                                    <div class="service__list">
                                        <a href="{{ route('solutions') }}">
                                            <div class="service__item animation_home1_service" data-service="1">
                                                <div class="service__number"><span>01</span></div>
                                                <div class="service__title-wrapper">
                                                    <h4 class="service__title">Security Solutions</h4>
                                                </div>
                                                <div class="service__text">
                                                    <p>Fidelis Group security services includes real time risk
                                                        management, Security process
                                                        implementations, threat mapping and
                                                        mitigation.</p>
                                                </div>
                                                <div class="service__link">
                                                    <p><i class="fa-solid fa-arrow-right"></i></p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="{{ route('solutions') }}">
                                            <div class="service__item  animation_home1_service" data-service="2">
                                                <div class="service__number"><span>02</span></div>
                                                <div class="service__title-wrapper">
                                                    <h4 class="service__title">Time Saver</h4>
                                                </div>
                                                <div class="service__text">
                                                    <p>Fidelis Group provides 24X7 coverage,
                                                        custom coverage, tiered support levels, administration,
                                                        troubleshooting, incident management, real-time reporting.</p>
                                                </div>
                                                <div class="service__link">
                                                    <p><i class="fa-solid fa-arrow-right"></i></p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="{{ route('solutions') }}">
                                            <div class="service__item  animation_home1_service" data-service="3">
                                                <div class="service__number"><span>03</span></div>
                                                <div class="service__title-wrapper">
                                                    <h4 class="service__title">Cost Reduction</h4>
                                                </div>
                                                <div class="service__text">
                                                    <p>We strategically implement <strong>Affordable and customised solution</strong> to engage and align the right process and resources to meet specific demands.
                                                    </p>
                                                </div>
                                                <div class="service__link">
                                                    <p><i class="fa-solid fa-arrow-right"></i></p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="{{ route('solutions') }}">
                                            <div class="service__item  animation_home1_service" data-service="4">
                                                <div class="service__number"><span>04</span></div>
                                                <div class="service__title-wrapper">
                                                    <h4 class="service__title">Accuracy</h4>
                                                </div>
                                                <div class="service__text">
                                                    <p>All round assistanc with open source implementation.</p>
                                                </div>
                                                <div class="service__link">
                                                    <p><i class="fa-solid fa-arrow-right"></i></p>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Service area end -->

                <!-- About area start -->
                <section class="about__area">
                    <div class="container line g-0 pt-140 pb-130">
                        <span class="line-3"></span>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="about__title-wrapper">
                                    <h3 class="sec-title title-anim">Highly Customisable IT solutions</h3>
                                </div>

                                <div class="about__content-wrapper">
                                    <div class="about__img">
                                        <div class="img-anim">
                                            <img src="{{ asset('assets/imgs/home/stylish-businessman-working-cafe-use-laptop.jpg') }}"
                                                class="img-fluid" alt="About Image" data-speed="0.3">
                                        </div>

                                        <div class="about__img-right">
                                            <img src="{{ asset('assets/imgs/home/modern-equipped-computer-lab.jpg') }}" class="img-fluid" alt="About Image Right" data-speed="0.5" style="width: 240px;">
                                            <div class="shape">
                                                <div class="secondary" data-speed="0.9"></div>
                                                <div class="primary"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="about__content text-anim">
                                        <p>At Fidelis Group, our IT Infrastructure Management Services are designed to
                                            reinvent and change enterprises by using transformational and digital-ready IT
                                            infrastructure and proactively leveraging next-generation technology and data.</p>

                                        <p>We offer systems management, virtual and remote assets management, maintenance and upgrades,
                                            data center solutions, native cloud solutions, security, integrations and
                                            management, applications and network solutions.</p>

                                        <div class="cursor-btn btn_wrapper">
                                            <a class="btn-item wc-btn-primary btn-hover"
                                                href="{{ route('about-us') }}"><span></span> Explore Us <i
                                                    class="fa-solid fa-arrow-right"></i></a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- About area end -->

                <!-- Counter area start -->
                <section class="counter__area">
                    <div class="container g-0 line pt-0">
                        <span class="line-3"></span>

                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="counter__wrapper counter_animation">
                                    <div class="counter__item counter__anim">
                                        <h2 class="counter__number">10+</h2>
                                        <p>Global <br>Offices</p>
                                        <span class="counter__border"></span>
                                    </div>
                                    <div class="counter__item counter__anim">
                                        <h2 class="counter__number">15+</h2>
                                        <p>Years <br>experiences</p>
                                        <span class="counter__border"></span>
                                    </div>
                                    <div class="counter__item counter__anim">
                                        <h2 class="counter__number">2000+</h2>
                                        <p>Projects <br>executed</p>
                                        <span class="counter__border"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Counter area end -->

                <!-- Workflow area start -->
                {{-- <section class="workflow__area">
                    <div class="container g-0 line pt-140 pb-140">
                        <div class="line-3"></div>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="sec-title-wrapper">
                                    <h3 class="sec-title title-anim">Workflow</h3>
                                </div>
                            </div>

                            <div class="col-xxl-12">
                                <div class="swiper workflow__slider ">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide workflow__slide fade_left">
                                            <h4 class="workflow__step">step 01</h4>
                                            <h5 class="workflow__number">01</h5>
                                            <h6 class="workflow__title">Audience</h6>
                                            <p>We determine who our target audience is by market research, industry
                                                trends, competitors etc.</p>
                                        </div>

                                        <div class="swiper-slide workflow__slide fade_left">
                                            <h4 class="workflow__step">step 02</h4>
                                            <h5 class="workflow__number">02</h5>
                                            <h6 class="workflow__title">Plan & Sketch</h6>
                                            <p>We develop roadmaps, platform &amp; strategy for implementation of RPA
                                                processes, managing
                                                pitfalls etc.</p>
                                        </div>

                                        <div class="swiper-slide workflow__slide fade_left">
                                            <h4 class="workflow__step">step 03</h4>
                                            <h5 class="workflow__number">03</h5>
                                            <h6 class="workflow__title">Customize</h6>
                                            <p>We provide customized solutions for different sectors like Human
                                                Resources, Banking and
                                                Finance, Healthcare, Manufacturing, FMCG etc.</p>
                                        </div>

                                        <div class="swiper-slide workflow__slide fade_left">
                                            <h4 class="workflow__step">step 04</h4>
                                            <h5 class="workflow__number">04</h5>
                                            <h6 class="workflow__title">Real World Testimony</h6>
                                            <p>Real users in real situations implement and test our tailored strategy.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <!-- Workflow area end -->

                @include('components.clients-slider')

                <!-- Testimonial area start -->
                @include('components.testimonial')
                <!-- Testimonial area end -->

                <!-- Blog area start -->
                {{-- <section class="blog__area no-pb blog__animation">
          <div class="container g-0 line pt-40 pb-40">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                <div class="sec-title-wrapper">
                  <h2 class="sec-sub-title">recent blog</h2>
                  <h3 class="sec-title">News insignt</h3>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                  <div class="blog__img-wrapper">
                    <a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}">
                      <div class="img-box">
                        <img class="image-box__item" src="assets/imgs/blog/1/1.jpg" alt="">
                        <img class="image-box__item" src="assets/imgs/blog/1/1.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta"><a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}">UI Design</a> . 02 May 2019</h4>
                  <h5><a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}" class="blog__title">Ways of lying to yourself about your new
                      relationship.</a></h5>
                  <a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}" class="blog__btn">Read More <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
                </article>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                  <div class="blog__img-wrapper">
                    <a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}">
                      <div class="img-box">
                        <img class="image-box__item" src="assets/imgs/blog/1/2.jpg" alt="">
                        <img class="image-box__item" src="assets/imgs/blog/1/2.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta"><a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}">UI Design</a> . 02 May 2019</h4>
                  <h5><a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}" class="blog__title">How to manage a talented and successful de sign team</a></h5>
                  <a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </article>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                  <div class="blog__img-wrapper">
                    <a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}">
                      <div class="img-box">
                        <img class="image-box__item" src="assets/imgs/blog/1/3.jpg" alt="Blog Thumbnail">
                        <img class="image-box__item" src="assets/imgs/blog/1/3.jpg" alt="BLog Thumbnail">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta"><a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}">UI Design</a> . 02 May 2019</h4>
                  <h5><a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}" class="blog__title">How to bring fold to your startup company with Axtra</a></h5>
                  <a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </article>
              </div>
            </div>
          </div>
        </section> --}}
                <!-- Blog area end -->

            </main>

            @include('components.footer')

        </div>
    </div>

    <!-- All CSS files -->
    {{-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/progressbar.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/master.min.css">

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

    <style type="text/css">
        @media (min-width:1200px) and (max-width:1366px){.main-menu-3>li>a{font-size:12px!important}}.header__area-3.sticky-3 #open_offcanvas,.header__area-3.sticky-3 .main-menu-3>li>a,.header__area-3.sticky-3 .search-icon{color:var(--black-2)}
    </style>
</body class="dir-rtl">

</html>
