@extends('layouts.pages')

@section('customcss')
    <style>
      .bestaward{
        width: 75%;
      }
      @media (max-width: 480px) { 
          .bestaward{
            width: 200px;
          }
      }
      .custom-accordion,.custom-accordion>.item:nth-of-type(6){padding-bottom:2rem}.custom-accordion{background:var(--black-2);color:#fff;font-family:Sunflower,sans-serif}.custom-accordion>.item{padding:1rem 2rem;margin:0 auto;max-width:30rem}.custom-accordion>.item:last-of-type{background:#12121200;text-align:center;border-radius:.5rem}.custom-accordion>.item:last-of-type>.icon{color:#fff}.custom-accordion>.item>.icon{color:#462521;font-size:2rem}.custom-accordion>.item>.title{font-size:1.5rem}@media screen and (min-width:800px) and (min-height:270px){.custom-accordion{display:table;width:100%;margin:0 auto;height:50vh;max-height:1000px;overflow:hidden;padding-bottom:0}.custom-accordion>.item{display:table-cell;position:relative;height:100%;padding:2rem 1rem;text-align:center;transform-origin:0 50%;transition:.3s cubic-bezier(.8, .16, .42, .89)}.custom-accordion>.item:hover:not(:last-of-type){transform:scaleX(2) translateX(-1px);box-shadow:0 0 3rem #301916;background:#2e5a7d;border-color:transparent}.custom-accordion>.item:hover+.item{opacity:.1}.custom-accordion>.item:hover+.item:last-of-type{opacity:.1;background:#2e5a7d}.custom-accordion>.item:not(:last-of-type){border-right:1px solid #462521}.custom-accordion>.item:last-of-type{background:#12121200;width:25%;border-radius:0}.custom-accordion>.item>.content,.custom-accordion>.item>.title{position:absolute;left:50%;width:200%;transition:.3s cubic-bezier(.8, .16, .42, .89)}.custom-accordion>.item:last-of-type .heart-icon{font-size:6rem}.custom-accordion>.item:hover:last-of-type .heart-icon{transform:scale(2)}.custom-accordion>.item:last-of-type>.title{transform:rotate(0) translateX(-50%) translateY(-2.5rem);padding:0;text-align:center}.custom-accordion>.item:last-of-type>.content{opacity:1;transform:translateX(-50%) translateY(-50%)}.custom-accordion>.item:hover:not(:last-of-type)>.icon{transform:scaleX(.5)}.custom-accordion>.item:hover:not(:last-of-type)>.title{transform:scaleX(.5) translateX(-50%);background:#ca2e55;text-align:center;padding:0}.custom-accordion>.item:hover:not(:last-of-type)>.title>.text{transform:translateX(-50%);left:50%}.custom-accordion>.item:hover:not(:last-of-type)>.content{opacity:1}.custom-accordion>.item>.icon{position: absolute; font-weight:700;font-size:2rem;transition:.3s cubic-bezier(.8, .16, .42, .89);color:#fff}.custom-accordion>.item>.title{bottom:0;height:1.5rem;text-align:left;transform-origin:0 50%;transform:rotate(-90deg);font-size:1.2rem}.custom-accordion>.item>.title>.text{position:absolute;left:2rem;bottom:0;white-space:nowrap;transition:.3s cubic-bezier(.8, .16, .42, .89)}.custom-accordion>.item>.content{top:50%;height:auto;transform:translateX(-50%) translateY(-50%) scaleX(.5);opacity:0;padding:1rem;pointer-events:none}}.heart-icon{color:#ca2e55;font-size:3rem;transition:.3s cubic-bezier(.8, .16, .42, .89)}
    </style>
@endsection

@section('content')
  <!-- Team Cursor -->
  <div class="cursor" id="team_cursor">Drag</div>

        <!-- Hero area start -->
        <section class="hero__about">
            <div class="container g-0 line">
              <span class="line-3"></span>
              <div class="row">
                <div class="col-xxl-12">
                  <div class="hero__about-content">
                    <h1 class="hero-title animation__word_come">Leading in build a better system of innovation, execution and sustained growth for our clients.</h1>
                    <div class="hero__about-info">
                      <div class="hero__about-btn">
                        <div class="btn_wrapper">
                          <a href="{{ route('solutions') }}" class="wc-btn-primary btn-hover btn-item"><span></span> Solutions & <br> Services
                            <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                      </div>
                      <div class="hero__about-text title-anim">
                        <p>we have experienced and understood the growing part that solving real world problems plays in everyday life as we are spontaneously building on our heritage and business culture and reinventing ourselves just as the legendary phoenix bird always takes a new birth from its ashes to assume a new life.</p>
                      </div>
                      <div class="hero__about-award">
                        <img src="/assets/imgs/awards/msp-alliance.png" alt="Best Studio Award" class="bestaward">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row hero__about-row">
                <div class="col-xxl-12">
                  <div class="hero__about-video">
                    <video loop muted autoplay playsinline>
                      <source src="assets/video/video.mp4" type="video/mp4">
                    </video>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Hero area end -->
  
  
          <!-- Story area start -->
          <section class="story__area">
            <div class="container g-0 line pt-140">
              <span class="line-3"></span>
              <div class="sec-title-wrapper">
                <div class="from-text">from <span>2007</span></div>
  
                <div class="row">
                  <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <h2 class="sec-sub-title title-anim">Services Redefined</h2>
                    <h3 class="sec-title title-anim">Our story</h3>
                  </div>
                  <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                    <div class="story__text">
                      <p>To facilitate a better and sustained “tomorrow” for people and organizations we work with. Not only at work, but in life and to be recognized as the industry leader in all facets by nurturing customer engagement through accelerated solutions and processes, better return on investment and proven delivery models.</p>
                      <p>Transform Fidelis into the premiere performance organization by creating benchmarks in execution, leadership, and become an industry leader by running key -business processes for our clients while they focus on their core operations.</p>
                    </div>
                  </div>
  
                </div>
              </div>
              <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                  <div class="story__img-wrapper">
                    <img src="assets/imgs/story/1.jpg" alt="Story Thumbnail" class="w-100">
                  </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                  <div class="story__img-wrapper img-anim">
                    <img src="assets/imgs/story/2.jpg" alt="Story Thumbnail" data-speed="auto">
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                  <div class="story__img-wrapper">
                    <img src="assets/imgs/story/3.jpg" alt="Story Thumbnail">
                    <img src="assets/imgs/story/4.jpg" alt="Story Thumbnail">
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Story area end -->
  
  
          <!-- Counter area start -->
          <section class="counter__area">
            <div class="container g-0 line pb-140 pt-140">
              <span class="line-3"></span>
  
              <div class="row">
                <div class="col-xxl-12">
                  <div class="counter__wrapper-2 counter_animation">
                    <div class="counter__item-2 counter__anim">
                      <h2 class="counter__number">20k+</h2>
                      <p>Fidelis <br>Alumni</p>
                      <span class="counter__border"></span>
                    </div>
                    <div class="counter__item-2 counter__anim">
                      <h2 class="counter__number">8+</h2>
                      <p>Offices in the <br>world</p>
                      <span class="counter__border"></span>
                    </div>
                    <div class="counter__item-2 counter__anim">
                      <h2 class="counter__number">16+</h2>
                      <p>Years <br>experiences</p>
                      <span class="counter__border"></span>
                    </div>
                    <div class="counter__item-2 counter__anim">
                      <h2 class="counter__number">2500</h2>
                      <p>Full time <br>Employees</p>
                      <span class="counter__border"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Counter area end -->
  
  
          <!-- Team area start -->
          <section class="team__area pt-140 pb-140">
            <div class="sec-title-wrapper">
              <h2 class="sec-sub-title title-anim">Our Team</h2>
              <h3 class="sec-title title-anim">How we work</h3>
            </div>
  
            <div class="swiper team__slider">
              <div class="swiper-wrapper">
                  @foreach ($team as $item)
                  <div class="swiper-slide team__slide">
                    <a href="{{ route('team-member', $item->name) }}">
                      <img src="{{ asset('assets/imgs/team/'.$item->img) }}" alt="Team Member">
                      <div class="team__info">
                        <h4 class="team__member-name">{{ $item->name }}</h4>
                        <h5 class="team__member-role">{{ $item->designation }}</h5>
                      </div>
                    </a>
                  </div>
                  @endforeach
                  {{-- navigation: {
                    nextEl: '.swiper-button-next-unique',
                    prevEl: '.swiper-button-prev-unique'
                  } --}}
                
              </div>
            </div>
          </section>
          <!-- Team area end -->
          
        <!-- Team area start -->
        {{-- <section class="team__area-7" style="display: none;">
          <div class="container">
            <div class="row">
              <div class="col-xxl-12">
                <div class="team__items-7">
                  <a href="team-details.html">
                    <div class="team__item-7 fade_bottom_3">
                      <div class="team__name-wrap-7">
                        <p class="tm-serial">01</p>

                        <h3 class="tm-name">Saymon D. Halk</h3>
                      </div>
                      <h4 class="tm-role">Web <br> Developer</h4>
                      <div class="tm-link"><i class="fa-solid fa-arrow-right"></i></div>
                      <div class="team__hover-7" style="background-image: url(assets/imgs/team/1.jpg);"></div>
                    </div>
                  </a>

                  <a href="team-details.html">
                    <div class="team__item-7 fade_bottom_3">
                      <div class="team__name-wrap-7">
                        <p class="tm-serial">02</p>

                        <h3 class="tm-name">Aliya D. Albert</h3>
                      </div>
                      <h4 class="tm-role">Founder <br> CEO</h4>
                      <div class="tm-link"><i class="fa-solid fa-arrow-right"></i></div>
                      <div class="team__hover-7" style="background-image: url(assets/imgs/team/2.jpg);"></div>
                    </div>
                  </a>

                  <a href="team-details.html">
                    <div class="team__item-7 fade_bottom_3">
                      <div class="team__name-wrap-7">
                        <p class="tm-serial">03</p>
                        <h3 class="tm-name">Jassica Oliver</h3>
                      </div>
                      <h4 class="tm-role">Creative <br> Content Writer </h4>
                      <div class="tm-link"><i class="fa-solid fa-arrow-right"></i></div>
                      <div class="team__hover-7" style="background-image: url(assets/imgs/team/3.jpg);"></div>
                    </div>
                  </a>
                  <a href="team-details.html">
                    <div class="team__item-7 fade_bottom_3">
                      <div class="team__name-wrap-7">
                        <p class="tm-serial">04</p>
                        <h3 class="tm-name">Daniyel Adamson</h3>
                      </div>
                      <h4 class="tm-role">Head of <br> Researcher</h4>
                      <div class="tm-link"><i class="fa-solid fa-arrow-right"></i></div>
                      <div class="team__hover-7" style="background-image: url(assets/imgs/team/4.jpg);"></div>
                    </div>
                  </a>
                  <a href="team-details.html">
                    <div class="team__item-7 fade_bottom_3">
                      <div class="team__name-wrap-7">
                        <p class="tm-serial">05</p>
                        <h3 class="tm-name">Hardiya Kethrine</h3>
                      </div>
                      <h4 class="tm-role">Digital <br> Marketer</h4>
                      <div class="tm-link"><i class="fa-solid fa-arrow-right"></i></div>
                      <div class="team__hover-7" style="background-image: url(assets/imgs/team/5.jpg);"></div>
                    </div>
                  </a>
                  <a href="team-details.html">
                    <div class="team__item-7 fade_bottom_3">
                      <div class="team__name-wrap-7">
                        <p class="tm-serial">06</p>
                        <h3 class="tm-name">Julian B. Folder</h3>
                      </div>
                      <h4 class="tm-role">Creative <br> Designer</h4>
                      <div class="tm-link"><i class="fa-solid fa-arrow-right"></i></div>
                      <div class="team__hover-7" style="background-image: url(assets/imgs/team/6.jpg);"></div>
                    </div>
                  </a>
                  <a href="team-details.html">
                    <div class="team__item-7 fade_bottom_3">
                      <div class="team__name-wrap-7">
                        <p class="tm-serial">07</p>
                        <h3 class="tm-name">Denial Karlos</h3>
                      </div>
                      <h4 class="tm-role">Backend <br> Developer</h4>
                      <div class="tm-link"><i class="fa-solid fa-arrow-right"></i></div>
                      <div class="team__hover-7" style="background-image: url(assets/imgs/team/6.jpg);"></div>
                    </div>
                  </a>
                  <div class="team7__img-wrap">
                    <div class="team7__img"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> --}}
        <!-- Team area end -->


          <section style="background: var(--black-2);">

            <div class="custom-accordion" style="position: relative;">
              <div class="item">
                <div class="icon">2007</div>
                <div class="title">
                  <div class="text">The Beginning</div>
                </div>
                <div class="content">Fidelis started its journey in the name of Paylink Financial services as a payroll and accounts partner</div>
              </div>
              <div class="item">
                <div class="icon">2010</div>
                <div class="title">
                  <div class="text">25 Resources</div>
                </div>
                <div class="content">In the year 2011 we forayed into large scale operations and captured our first retail client with staffing solutions</div>
              </div>
              <div class="item">
                <div class="icon">2011</div>
                <div class="title">
                  <div class="text">Spread Wings</div>
                </div>
                <div class="content">Fidelis Retail India Pvt Ltd – a group company of fidelis group was formed to spread our wings towards Retail trade and business</div>
              </div>
              <div class="item">
                <div class="icon">2012</div>
                <div class="title">
                  <div class="text">Set Focus</div>
                </div>
                <div class="content">We commenced our incredible journey with a core focus on payroll and accounts services under the able leadership of our CEO Subrahmanya. B.A.</div>
              </div>
              <div class="item">
                <div class="icon">2013</div>
                <div class="title">
                  <div class="text">International retail market</div>
                </div>
                <div class="content">In the year 2013 we took a major stride in the international retail market by facilitating a major import of a rare food from Italy.</div>
              </div>
              <div class="item">
                <div class="icon">2014</div>
                <div class="title">
                  <div class="text">Skill development space</div>
                </div>
                <div class="content">In the year 2014 we reached major milestones and emerged as key player for staffing solutions and forayed into the skill development space with a major government body liasion.</div>
              </div>

              <div class="item">
                <div class="icon">2015</div>
                <div class="title">
                  <div class="text">Awards Landed in house</div>
                </div>
                <div class="content">Fidelis was awarded a skill development project by name DDUGKY to set up training centers in rural places of Karnataka</div>
              </div>
              <div class="item">
                <div class="icon">2016</div>
                <div class="title">
                  <div class="text">Initiatives for rural areas</div>
                </div>
                <div class="content">In the year 2016 we forayed into large scale skill development programs and implementations in association with government advisory for initiatives for rural areas.</div>
              </div>
              <div class="item">
                <div class="icon">2017</div>
                <div class="title">
                  <div class="text">Branch office in USA</div>
                </div>
                <div class="content">In the year 2017, we set foot on international soil with a branch office in USA and a large team of employees to drive our work ahead.</div>
              </div>
              <div class="item">
                <div class="icon">2019</div>
                <div class="title">
                  <div class="text">2000 Employees</div>
                </div>
                <div class="content">In the year 2019 we set benchmarks and emerged as a powerful workforce as we reached a milestone of 2000 Employees</div>
              </div>
              <div class="item">
                <div class="icon">2020</div>
                <div class="title">
                  <div class="text">Record of handling</div>
                </div>
                <div class="content">We spontaneously keep innovating and improve on our service delivery models as we at Fidelis reached a record of handling</div>
              </div>

              <div class="item">
              </div>
            </div>
          </section>
  
  
        <!-- Service area start -->
        <section class="service__area-1 py-5">
          <div class="container">
            <h2 class="text-center py-5">Core Values</h2>
            <div class="row">
                <div class="col-md-12">
                  <div class="col-md-3 col-sm-12 py-3 float-start">
                    <h4>Commitment</h4>
                    <p>Be accountable, work together as a team, and communicate clearly. </p>
                  </div>
                  <div class="col-md-3 py-3 float-start">
                    <h3>Innovation</h3>
                    <p> Think outside the box, challenge constructively</p>
                  </div>
                  <div class="col-md-3 py-3 float-start">
                    <h3>Excellence</h3>
                    <p>Always deliver exceptional value, <br> accomplish goals </p>
                  </div>
                  <div class="col-md-3 py-3 float-start">
                    <h3>Community</h3>
                    <p> Creating a positive place to work and supportin </p>
                  </div>
                </div>
            </div>

            <div class="row pt-140">
              <div class="col-xxl-12">
                <div class="service__list-2 animation__service-2">
                  <div class="service__item-2">
                    <div>
                      <img src="assets/imgs/service/2/1.png" alt="Service Icon">
                      <h3 class="service__title-2">Our<br>Mission</h3>
                      <p>To facilitate a better and sustained “tomorrow” for people and organizations we work with. Not only at work </p>
                      <p> But in life and to be recognized as the industry leader in all facets by nurturing customer engagement through accelerated solutions and processes, better return on investment and proven delivery models.</p>
                    </div>
                  </div>
                  <div class="service__item-2">
                    <div>
                      <img src="assets/imgs/service/2/2.png" alt="Service Icon">
                      <h3 class="service__title-2 ">Our <br>Vision</h3>
                      <p>Transform Fidelis into the premiere performance organization by creating benchmarks in execution, leadership.</p>
                        <p>Becoming an industry leader by running key - business processes for our clients.while they focus on their core operations.</p>
                    </div>
                  </div>
                  <div class="service__item-2">
                    <div>
                      <img src="assets/imgs/service/2/3.png" alt="Service Icon">
                      <h3 class="service__title-2">Our <br>Values</h3>
                      <p>Our values are the guiding principles upon which Fidelis Group was founded and how we strive to conduct our business across all verticals.</p>
                      <p>Our Values establish foundation as we shape a thriving future. They determine how we go about working towards our growth across verticals. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Service area end -->

          <!-- Brand area start -->
          <section class="brand__area">
            <div class="container g-0 line pt-140 pb-140">
              <span class="line-3"></span>
              <div class="row g-0">
                <div class="col-xxl-12">
                  <div class="sec-title-wrapper">
                    {{-- <h2 class="sec-sub-title title-anim">International Brands</h2> --}}
                    <h3 class="sec-title title-anim">We are happy to work with global <br> largest brands</h3>
                  </div>
                </div>
  
                <div class="brand__list">
                  @for($i = 2; $i < 20; $i++)
                  <div class="brand__item fade_bottom">
                    <img src="https://fidelisgroup.in/wp-content/uploads/2020/10/Picture{{ $i }}.png" class="w-75" alt="Brand Logo">
                  </div>
                  @endfor
                </div>
              </div>
            </div>
          </section>
          <!-- Brand area end -->
  
  
          <!-- Testimonial area start -->
          <section class="testimonial__area-2">
            <div class="container g-0 line pb-140">
              <span class="line-3"></span>
  
              <div class="row g-0">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                  <div class="testimonial__video">
                    <video autoplay muted loop>
                      <source src="assets/video/testimonial.mp4" type="video/mp4">
                    </video>
                  </div>
                </div>
  
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                  <div class="testimonial__slider-wrapper-2">
                    <div class="swiper testimonial__slider">
                      <div class="swiper-wrapper">
  
                        <div class="swiper-slide testimonial__slide">
                          <div class="testimonial__inner-2">
                            <h2 class="testimonial__title-2">Awesome Atmosphere</h2>
                            <p class="testimonial__text-2">Fidelis has been a wonderful company starting out. Several things worth pointing out are within the overall atmosphere. Since Fidelis is in it's growth phase, it allows the management team to easily help everyone get acquainted with the overall job feel. My fellow team members and HR have been wonderful. Fidelis is fun place to work at, we don't miss celebration's and festivals. The hiring process is easily streamlined. All expectations were made clear throughout the entire process. Looking forward to many more years with this company</p>
                            <h3 class="testimonial__author">Priyanka MR</h3>
                          </div>
                        </div>
  
                        <div class="swiper-slide testimonial__slide">
                          <div class="testimonial__inner-2">
                            <h2 class="testimonial__title-2">Amazing Service</h2>
                            <p class="testimonial__text-2">Fidelis is a great place to work and build up the career in right path to make a challenging and innovative skills  , Good collaboration with the clients like service  based and product based which can help to build up longer career.</p>
                            <h3 class="testimonial__author">Sivaramireddy Vemannagari</h3>
                          </div>
                        </div>
  
                        <div class="swiper-slide testimonial__slide">
                          <div class="testimonial__inner-2">
                            <h2 class="testimonial__title-2">Amazing digital service</h2>
                            <p class="testimonial__text-2">We were there right at the beginning just when the concept
                              for
                              search
                              engine optimisation taking office and the full of internet. So wewe’ve grown to employ
                              than 50
                              talented specialists with diverse experiences and broad skill sets of huge markers.</p>
                            <h3 class="testimonial__author">Adam Syndera</h3>
                            <h4 class="testimonial__role">CEO, Agency</h4>
                          </div>
                        </div>
  
                      </div>
                    </div>
  
                    <div class="testimonial__pagination">
                      <div class="prev-button"><i class="fa-solid fa-arrow-right"></i></div>
                      <div class="next-button"><i class="fa-solid fa-arrow-left"></i></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Testimonial area end -->
  

@endsection