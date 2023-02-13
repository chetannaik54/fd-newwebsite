@extends('layouts.pages')

@section('content')

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
                          <a href="{{ route('solutions') }}" class="wc-btn-primary btn-hover btn-item"><span></span> Trends & <br> technology
                            <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                      </div>
                      <div class="hero__about-text title-anim">
                        <p>we have experienced and understood the growing part that solving real world problems plays in everyday life as we are spontaneously building on our heritage and business culture and reinventing ourselves just as the legendary phoenix bird always takes a new birth from its ashes to assume a new life.</p>
                      </div>
                      <div class="hero__about-award">
                        <img src="assets/imgs/awards/msp-alliance.png" alt="Best Studio Award" class="w-75">
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
                      <h2 class="counter__number">12</h2>
                      <p>Offices in the <br>world</p>
                      <span class="counter__border"></span>
                    </div>
                    <div class="counter__item-2 counter__anim">
                      <h2 class="counter__number">16</h2>
                      <p>Years <br>experiences</p>
                      <span class="counter__border"></span>
                    </div>
                    <div class="counter__item-2 counter__anim">
                      <h2 class="counter__number">160</h2>
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
                <div class="swiper-slide team__slide">
                  {{-- <a href="{{ route('team-member', 'Subrahmanya') }}"> --}}
                  <a>
                    <img src="assets/imgs/team/1.jpg" alt="Team Member">
                    <div class="team__info">
                      <h4 class="team__member-name">Subrahmanya. B.A</h4>
                      <h5 class="team__member-role">Founder & CEO</h5>
                    </div>
                  </a>
                </div>
   
                <div class="swiper-slide team__slide">
                  <a>
                    <img src="assets/imgs/team/2.jpg" alt="Team Member">
                    <div class="team__info">
                      <h4 class="team__member-name">Nagashree .S</h4>
                      <h5 class="team__member-role">Vice President – Finance & Accounts</h5>
                    </div>
                  </a>
                </div>
  
                <div class="swiper-slide team__slide">
                  <a>
                    <img src="assets/imgs/team/4.jpg" alt="Team Member">
                    <div class="team__info">
                      <h4 class="team__member-name">Raghavendra Mesta</h4>
                      <h5 class="team__member-role">Vice President - HR & Operations</h5>
                    </div>
                  </a>
                </div>
  
                <div class="swiper-slide team__slide">
                  <a>
                    <img src="assets/imgs/team/3.jpg" alt="Team Member">
                    <div class="team__info">
                      <h4 class="team__member-name">Raghavendra Prasad</h4>
                      <h5 class="team__member-role">DIRECTOR - GLOBAL SALES</h5>
                    </div>
                  </a>
                </div>
  
                <div class="swiper-slide team__slide">
                  <a>
                    <img src="assets/imgs/team/5.jpg" alt="Team Member">
                    <div class="team__info">
                      <h4 class="team__member-name">Sridhara Sundararaj</h4>
                      <h5 class="team__member-role">Senior Advisor - Technical Services</h5>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide team__slide">
                  <a>
                    <img src="assets/imgs/team/6.jpg" alt="Team Member">
                    <div class="team__info">
                      <h4 class="team__member-name">CHETAN VINOBHA SHETTY </h4>
                      <h5 class="team__member-role">Head of Talent Acquisition</h5>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </section>
          <!-- Team area end -->
          
        <!-- Team area start -->
        <section class="team__area-7" style="display: none;">
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
                      <div class="team__hover-7" style="background-image: url(assets/imgs/team/7.jpg);"></div>
                    </div>
                  </a>
                  <div class="team7__img-wrap">
                    <div class="team7__img"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Team area end -->


          <section style="background: var(--black-2);">

            <div class="custom-accordion">
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
                <div class=draw-container>
                  <div class=backg><div class=an><div class=tank></div><div class=astro><div class=helmet><div class=glass><div class=shine></div></div></div><div class=dress><div class=c><div class=btn1></div><div class=btn2></div><div class=btn3></div><div class=btn4></div></div></div><div class=handl><div class=handl1><div class=glovel><div class=thumbl></div><div class=b2></div></div></div></div><div class=handr><div class=handr1><div class=glover><div class=thumbr></div><div class=b1></div></div></div></div><div class=legl><div class=bootl1><div class=bootl2></div></div></div><div class=legr><div class=bootr1><div class=bootr2></div></div></div><div class=pipe><div class=pipe2><div class=pipe3></div></div></div></div></div></div>
                  <div class=draw><div class=rocket><div class=window></div></div><div class=smoke><div class=one></div><div class=two></div></div><div class=stars><div class="star one"></div><div class="star small two"></div><div class="star small three"></div><div class="star small four"></div><div class="star five"></div><div class="star samll six"></div><div class="star seven"></div><div class="star small eight"></div></div></div></div>
              </div>
            </div>
          </section>
  
  
        <!-- Service area start -->
        <section class="service__area-1 pt-130 pb-110">
          <div class="container">
            <div class="row">
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="sec-text text-anim">
                  <p>We are passionate to create connected brands and services, and campaigns to enable stable and
                    successful relationships between businesses and customers.</p>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                <div class="sec-title-wrapper">
                  <h2 class="sec-title title-anim">We grow your brands through
                    bold service
                    we’re providing</h2>
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
                      <p>Transform Fidelis into the premiere performance organization by creating benchmarks in execution, leadership, and become an industry leader by running key - business processes for our clients.</p>
                        <p>while they focus on their core operations.</p>
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
                    <h2 class="sec-sub-title title-anim">International Brands</h2>
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

@section('customcss')
<style>
  .custom-accordion,.custom-accordion>.item:nth-of-type(6){padding-bottom:2rem}.custom-accordion{background:var(--black-2);color:#fff;font-family:Sunflower,sans-serif}.custom-accordion>.item{padding:1rem 2rem;margin:0 auto;max-width:30rem}.custom-accordion>.item:last-of-type{background:#12121200;text-align:center;border-radius:.5rem}.custom-accordion>.item:last-of-type>.icon{color:#fff}.custom-accordion>.item>.icon{color:#462521;font-size:2rem}.custom-accordion>.item>.title{font-size:1.5rem}@media screen and (min-width:800px) and (min-height:270px){.custom-accordion{display:table;width:100%;margin:0 auto;height:40vh;max-height:1000px;overflow:hidden;padding-bottom:0}.custom-accordion>.item{display:table-cell;position:relative;height:100%;padding:2rem 1rem;text-align:center;transform-origin:0 50%;transition:.3s cubic-bezier(.8, .16, .42, .89)}.custom-accordion>.item:hover:not(:last-of-type){transform:scaleX(2) translateX(-1px);box-shadow:0 0 3rem #301916;background:#2e5a7d;border-color:transparent}.custom-accordion>.item:hover+.item{opacity:.1}.custom-accordion>.item:hover+.item:last-of-type{opacity:.1;background:#2e5a7d}.custom-accordion>.item:not(:last-of-type){border-right:1px solid #462521}.custom-accordion>.item:last-of-type{background:#12121200;width:25%;border-radius:0}.custom-accordion>.item>.content,.custom-accordion>.item>.title{position:absolute;left:50%;width:200%;transition:.3s cubic-bezier(.8, .16, .42, .89)}.custom-accordion>.item:last-of-type .heart-icon{font-size:6rem}.custom-accordion>.item:hover:last-of-type .heart-icon{transform:scale(2)}.custom-accordion>.item:last-of-type>.title{transform:rotate(0) translateX(-50%) translateY(-2.5rem);padding:0;text-align:center}.custom-accordion>.item:last-of-type>.content{opacity:1;transform:translateX(-50%) translateY(-50%)}.custom-accordion>.item:hover:not(:last-of-type)>.icon{transform:scaleX(.5)}.custom-accordion>.item:hover:not(:last-of-type)>.title{transform:scaleX(.5) translateX(-50%);background:#ca2e55;text-align:center;padding:0}.custom-accordion>.item:hover:not(:last-of-type)>.title>.text{transform:translateX(-50%);left:50%}.custom-accordion>.item:hover:not(:last-of-type)>.content{opacity:1}.custom-accordion>.item>.icon{position: absolute; font-weight:700;font-size:2rem;transition:.3s cubic-bezier(.8, .16, .42, .89);color:#fff}.custom-accordion>.item>.title{bottom:0;height:1.5rem;text-align:left;transform-origin:0 50%;transform:rotate(-90deg);font-size:1.2rem}.custom-accordion>.item>.title>.text{position:absolute;left:2rem;bottom:0;white-space:nowrap;transition:.3s cubic-bezier(.8, .16, .42, .89)}.custom-accordion>.item>.content{top:50%;height:auto;transform:translateX(-50%) translateY(-50%) scaleX(.5);opacity:0;padding:1rem;pointer-events:none}}.heart-icon{color:#ca2e55;font-size:3rem;transition:.3s cubic-bezier(.8, .16, .42, .89)}
  .draw-container{overflow:hidden;display:flex;align-items:center;justify-content:center;background:var(--black-2)}.draw-container .draw{height:600px;width:450px;position:relative}.draw-container .rocket{position:absolute;height:180px;width:80px;top:80px;left:50%;transform:translateX(-50%);border-radius:50% 50% 25% 25%/50% 50% 40% 40%;background-color:#dadada;box-shadow:0 -3px 0 #fff;transform-style:preserve-3d;z-index:2;animation:1s linear infinite alternate animateRocket}.draw-container .rocket::before,.draw-container .rocket:after{content:'';position:absolute;left:50%;transform:translateX(-50%)}.draw-container .rocket::before{width:55%;height:10px;background-color:#d43e07;bottom:-10px;border-radius:0 0 25% 25%/50% 50% 40% 40%}.draw-container .rocket:after{height:55px;width:155%;background-color:#9e554f;bottom:0;z-index:-10;transform:translateX(-50%) translateZ(-1px);border-radius:50% 50% 10% 10%/90% 90% 20% 20%}.draw-container .rocket .window{position:absolute;height:30px;width:30px;top:40px;left:50%;transform:translateX(-50%);border-radius:50%;background-color:#9e554f;box-sizing:initial;border:5px solid #adadad}@keyframes animateRocket{to{transform:translateX(-50%) translateY(3px)}}.draw-container .smoke{height:200px;width:32px;top:260px;left:50%;transform:translateX(-50%);position:absolute;z-index:1;background-image:linear-gradient(to bottom,rgba(255,255,255,.1),rgba(255,255,255,.9))}.draw-container .smoke>div{position:absolute;border-radius:50%}.draw-container .smoke .one{height:200px;width:200px;background-color:rgba(255,255,255,.4);top:80px;left:-180px;box-shadow:-50px 80px 0 -30px rgba(255,255,255,.4),160px 80px 0 0 rgba(255,255,255,.4),290px 80px 0 -50px rgba(255,255,255,.4);animation:3s linear infinite alternate animateSmoke;opacity:.9}.draw-container .smoke .two{height:210px;width:210px;top:120px;left:-90px;background-color:#fff;box-shadow:-90px 0 0 -40px #fff,90px 60px 0 -80px #fff,80px -40px 0 -50px #fff;animation:1s linear infinite alternate-reverse animateSmoke;opacity:1}@keyframes animateSmoke{to{opacity:1;transform:scale(.98) translate(1px)}}.draw-container .stars{top:150px}.draw-container .stars .star,.draw-container .stars .star:before{position:absolute;background-color:#fff;border-radius:50%;box-shadow:0 0 7px rgba(255,255,255,.5)}.draw-container .stars .star{height:15px;width:2px}.draw-container .stars .star:before{content:'';width:100%;height:100%;position:absolute;top:0;left:0;transform:rotate(90deg)}.draw-container .stars .star.small{height:10px;width:1px}.draw-container .stars .star.one{top:10%;left:10%}.draw-container .stars .star.two{top:40%;height:10px}.draw-container .stars .star.three{top:50%;left:50%}.draw-container .stars .star.four{top:57%;left:70%}.draw-container .stars .star.five{top:25%;left:70%}.draw-container .stars .star.six{top:15%;left:110%}.draw-container .stars .star.seven{top:60%;left:120%}.draw-container .stars .star.eight{top:75%;left:-10%}
  .an,.astro,.b1,.b2,.backg,.bootl1,.bootl2,.bootr1,.bootr2,.btn1,.btn2,.btn3,.btn4,.c,.dress,.glass,.glovel,.glover,.handl,.handl1,.handr,.handr1,.helmet,.legl,.legr,.pipe,.pipe2,.pipe3,.shad,.shine,.tank,.thumbl,.thumbr{position:relative}.backg,.btn1,.btn2,.btn3,.btn4,.shad{border-radius:50%}.backg{height:500px;width:500px;background-color:rgba(0,0,0,.1);transform:scale(.7)}.astro,.tank{transform:rotate(-30deg)}.shad{background-color:transparent;box-shadow:15px 15px rgba(204,102,0,.3);height:200px;width:200px;bottom:164px;right:16px}.astro{left:131px;bottom:250px}.an{animation-name:flo;animation-duration:5s;animation-iteration-count:infinite;bottom:80px;left:20px}@keyframes flo{50%{transform:translateY(30px)}}.tank{background-color:#a6a6a6;height:120px;width:120px;border-radius:10px;left:95px;top:0px}.helmet{background-color:#fff;height:93px;width:100px;border-radius:45%;left:20px;z-index:5}.glass,.shine{left:10px}.glass{background-color:#666;height:60px;width:80px;border-radius:60% 60% 40% 40%;top:7px}.shine{background-color:rgba(166,166,166,.7);height:15px;width:15px;border-radius:50%;top:15px}.dress{background-color:#f2f2f2;height:100px;width:100px;border-radius:10%;bottom:5px;left:20px}.handl,.handl1,.handr,.handr1{height:26px;background-color:#f2f2f2}.handl,.handr{width:75px;border-radius:40px}.handr{bottom:138px;left:95px;transform:rotate(-20deg)}.handl{bottom:111px;right:29px;transform:rotate(20deg)}.handl1,.handr1{width:57px;border-radius:26px}.glovel,.glover,.thumbl,.thumbr{background-color:#fff}.handr1{bottom:18px;left:35px;transform:rotate(90deg)}.glover,.handl1{transform:rotate(-90deg)}.handl1{bottom:17px;right:17px}.glovel,.glover{height:28px;width:26px;border-top-left-radius:50%;border-top-right-radius:50%;bottom:1px}.glover{right:16px}.glovel{transform:rotate(90deg);left:42px}.thumbl,.thumbr{height:10px;width:10px;border-radius:50%;top:19px}.thumbr{right:7px}.thumbl{left:21px}.b1,.b2{background-color:tomato;width:28px;height:5.5px;border-radius:13px;top:18px;right:1px}.c{background-color:#fff;width:55px;height:30px;border-radius:8px;top:25px;left:23px}.btn1,.btn2,.btn3{height:12px;width:12px}.btn1{background-color:#4775ff;left:5px;top:10px}.btn2{background-color:#ffd147;left:21px;bottom:2px}.btn3{background-color:tomato;bottom:14px;left:38px}.btn4{height:20px;width:20px;background-color:#a6a6a6;left:19px;top:4px}.legl,.legr{height:100px;width:40px;background-color:#f2f2f2}.legl{bottom:68px;left:5px;transform:rotate(20deg)}.legr{bottom:168px;left:96px;transform:rotate(-20deg)}.bootl1,.bootr1{background-color:#fff;width:43px;height:35px;border-top-left-radius:50%;border-top-right-radius:50%;top:65px;right:1.5px}.bootl2,.bootr2{background-color:tomato;width:45px;height:5px;border-radius:21px;top:30px;right:1.5px}.pipe,.pipe2{background-color:transparent}.pipe{height:80px;width:80px;border:10px solid #4775ff;border-radius:40px 0 0 70px;border-right:none;transform:rotate(180deg);bottom:330px;left:130px}.pipe2{height:90px;width:42px;border:10px solid #4775ff;border-radius:40px 0 0;border-right:none;transform:rotate(90deg);border-bottom:none;left:67px;bottom:34px}.pipe3{height:10px;width:10px;background-color:#4775ff;border-radius:65%;bottom:10px;left:37px}.s1,.s2,.s3,.s4,.s5,.s6{background-color:#fff;width:8px;height:8px;border-radius:50%;position:relative}.s1{bottom:150px;left:200px}.s2{top:130px;left:254px}.s3{bottom:98px;left:65px}.s4{top:216px;left:249px}.s5{top:139px;left:100px}.s6{top:60px;left:370px}

</style>
@endsection

@section('script')

@endsection