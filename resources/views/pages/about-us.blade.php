@extends('layouts.pages')

@section('customcss')
    <style>
        .bestaward {
            width: 75%;
        }

        @media (max-width: 480px) {
            .bestaward {
                width: 200px;
            }
        }
        .offer-area,.offerItem{overflow:hidden;position:relative}.offer-tab-link,.offerItemTitle{text-align:center}.offer-area{z-index:1;width:100%; background: black; }.offer-tab-link ul li{display:inline-block;padding:10px 0;margin:0 -3px}.offer-tab-link ul li a{display:block;color:#000;font-size:20px;padding:10px 60px;border-bottom:4px solid #000;font-weight:500}.offer-tab-link ul{list-style:none;padding:0;margin:0;border:0;justify-content:center}.offer-tab-link ul li a.active{color:#008b8b;border-color:#008b8b}.offer-content p{text-align:left;margin:0;width:100%;color:rgb(255, 255, 255)}.offer-content h2{text-align:left;font-size:24px;color:#000;text-transform:uppercase}.offerItem{padding:0 15px;width:80px;float:left;transition:.3s}.offer-img{margin:0 -15px}.offer-detail{width:800px}.offerItemTitle{position:absolute;left:40px;z-index:99;width:545px;color:#fff;transform:rotate(-90deg);transform-origin:left;margin:0 auto;top:92.6%;height:80px;line-height:80px;background:rgba(0,0,0,.5);cursor:pointer;text-transform:uppercase}.offerItem.active{width:calc(80% - 6*80px)}.offerItem.active .offer-detail{width:1007px}.offerItem.active .offer-img{max-width:415px}.offerItem.active .offer-detail .row .col:first-child{max-width:40%!important}.offer-content{max-width:460px;margin:0 auto;top:50%;position:relative;transform:translate(0,-50%);opacity:0;transition:opacity .3s}.offer-tabs.tab-content{padding:0px 0}.offerslide:after{content:'';clear:both;display:block}.offerItemTitle.hide{display:none}.offerItem.active .offer-content{transition:.3s;opacity:1}.offer-content a{background:#008b8b;color:#fff;padding:10px 20px;display:inline-block;margin-top:10px;border:0;border-radius:3px}@media (max-width:1750px){.container{max-width:1540px}}@media (max-width:1550px){.container{max-width:1340px}}@media (max-width:1450px){.container{max-width:1240px}.offer-content{margin:0;max-width:360px}}@media (max-width:1280px){.container{max-width:1140px}.offerItem.active .offer-detail{width:750px}.offer-detail{width:595px}}@media (max-width:1199px){.container{max-width:960px}h4.offerItemTitle{height:50px;line-height:50px;left:25px;top:94%}.offerItem{width:50px}.offerItem.active{width:calc(100% - 6*50px)}.offerItem.active .offer-content{margin-left:20px}}@media (max-width:991px){.container{max-width:720px}.offer-content p{font-size:14px}.offerItem.active .offer-content{margin-left:0}h4.offerItemTitle{font-size:14px;top:93%;width:280px;font-family:ProximaNovaA-Regular;height:36px;line-height:36px;left:17px}.offerItem.active .offer-detail{width:500px}.offer-content h2{font-size:18px;margin:0}.offer-content a{padding:7px 13px;font-size:16px;margin-top:10px}.offer-detail{width:395px;max-height:279px}.offerItem{width:35px}.offerItem.active{width:calc(100% - 6*35px)}}@media (max-width:767px){.container{max-width:540px}.offerItem,.offerItem.active{width:100%}.offer-detail{width:100%;max-height:unset;display:none}h4.offerItemTitle{text-align:left;padding-left:15px;position:relative;transform:rotate(0);border-bottom:1px solid #999;height:40px;line-height:40px;width:100%;left:0}.offer-img{margin:0}.offer-content{margin:0;max-width:100%}.offerItemTitle.hide{background:#de9400;display:block}.offerItem.active .offer-detail{width:100%;display:block}.offerItem.active .offer-detail .row .col:first-child{max-width:50%!important}}@media (max-width:574px){.container{max-width:100%}.offerItem.active .offer-detail .row{display:block}.offerItem.active .offer-detail .row .col,.offerItem.active .offer-detail .row .col:first-child{max-width:100%!important}.offer-content{transform:translate(0);top:0;padding:10px 0}.offer-img,.offerItem.active .offer-img{width:100%;max-width:unset}.offer-img img{width:100%}}

    </style>
@endsection

@section('content')
    <!-- Team Cursor -->

    <!-- Hero area start -->
    <section class="hero__about">
        <div class="container g-0 line">
            <span class="line-3"></span>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="hero__about-content">
                        <h1 class="hero-title animation__word_come">Building a better system of innovation, execution and
                            sustained growth for our clients.</h1>
                        <div class="hero__about-info">
                            <div class="hero__about-btn">
                                <div class="btn_wrapper">
                                    <a href="{{ route('solutions') }}"
                                        class="wc-btn-primary btn-hover btn-item"><span></span> Our <br> Services
                                        <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="hero__about-text title-anim">
                                <p>We have experienced and understood the growing part that solving real world problems
                                    plays in everyday life as we are spontaneously building on our heritage and business
                                    culture and reinventing ourselves.</p>
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
        <div class="container g-0 line pt-110">
            <span class="line-3"></span>
            <div class="sec-title-wrapper">

                <div class="row">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                        <h3 class="sec-title title-anim">Our story</h3>
                    </div>
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                        <div class="story__text">
                            <p>We believe in focusing future driven solutions across organizations and bring game changing
                                insights to business processes and verticals.</p>
                            <p>Our vertical solutions expertise allows your business to streamline workflow, and increase
                                productivity across all channels.</p>
                            <p>We have a proven process and track record across our clientele to help you move your business
                                forward and augment your growth every step of the way.</p>
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


    <!-- Team area start -->
    <section class="team__area pt-140 pb-140">
        <div class="sec-title-wrapper">
            <h3 class="sec-title title-anim">Our Team</h3>
        </div>

        <div class="swiper team__slider">
            <div class="swiper-wrapper">
                @foreach ($team as $item)
                    <div class="swiper-slide team__slide">
                        <a href="{{ route('team-member', $item->name) }}">
                            <img src="{{ asset('assets/imgs/team/' . $item->img) }}" alt="Team Member">
                            <div class="team__info">
                                <h4 class="team__member-name">{{ $item->name }}</h4>
                                <h5 class="team__member-role">{{ $item->designation }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Team area end -->

<!--offer section area-->
<section class="offer-area section d-none">
  <div class="offer-tabs tab-content">
      <div class="offerslide tab-pane fade active show" id="SOLUTIONS">

        @php $array = array(
          '2007' => 'Fidelis started its journey in the name of Paylink Financial services as a payroll and accounts partner', 
          '2010' => 'Captured 1st retail giant with 25 resources',
          '2011'  => 'Fidelis Retail India Pvt Ltd - a group company of fidelis group was formed to spread our wings towards Retail trade and business',
          '2012'  => 'Fidelis started its journey in the name of Paylink Financial services as a payroll and accounts partner',
          '2013'  => 'Our first import of Antipasti from Italy - a rare food collection in India',
          '2014'  => 'Reached a milestone of 500 resources <br>Started Skill Development Programme By Collaborating With NSDC',
          '2015'  => 'In 2015 after an extensive market study, we decided to foray into into the IT Space and build on our competencies for a wide industry coverage',
          '2016'  => 'Fidelis was awarded a skill development project by name DDUGKY to set up training centers in rural places of Karnataka',
          '2017'  => 'Reached a milestone of 1000 employees',
          '2019'  => 'In the year 2019 we set benchmarks and emerged as a powerful workforce as we reached a milestone of 2000 Employees',
          '2020' => 'We spontaneously keep innovating and improve on our service delivery models as we at Fidelis reached a record of handling',
          ); @endphp

            @foreach ($array as $key => $item)
              <div class="offerItem @if($loop->index==0) active @endif ">
                  <h4 class="offerItemTitle @if($loop->index==0)  hide @endif">{{ $key }}</h4>
                  <div class="offer-detail">
                      <div class="row">
                          <div class="col">
                              <div class="offer-img">
                                  <img src="https://via.placeholder.com/514x676/000000/FFFFFF/?text={{ $key }}" alt="" class="img-fluid">
                              </div>
                          </div>
                          <div class="col">
                              <div class="offer-content">
                                <p>{{ $item }}</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>                
            @endforeach

      </div>

  </div>
</section>
<!--offer section area end-->

    <!-- Service area start -->
    <section class="service__area-1 py-5">
        <div class="container">
            <h2 class="text-center py-5">Core Values</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3 col-sm-12 p-3 float-start">
                        <h4>Commitment</h4>
                        <p>Be accountable, work together as a team, and communicate clearly. </p>
                    </div>
                    <div class="col-md-3 p-3 float-start">
                        <h3>Innovation</h3>
                        <p> Think outside the box, challenge constructively</p>
                    </div>
                    <div class="col-md-3 p-3 float-start">
                        <h3>Excellence</h3>
                        <p>Always accomplish goals and deliver <br> exception values </p>
                    </div>
                    <div class="col-md-3 p-3 float-start">
                        <h3>Community</h3>
                        <p> Creating a positive place to work and supporting ethical initiatives</p>
                    </div>
                </div>
            </div>

            <div class="row pt-140">
                <div class="col-xxl-12">
                    <div class="service__list-2 animation__service-2">
                        <div class="service__item-2">
                            <div>
                                <img src="{{ asset('assets/imgs/about/vision.png') }}" alt="Service Icon" class="w-50">
                                <h3 class="service__title-2 ">Our <br>Vision</h3>
                                <p>Transform Fidelis into the premiere performance organization by creating benchmarks in
                                    execution, leadership.</p>
                                <p>Becoming an industry leader by running key - business processes for our clients.while
                                    they focus on their core operations.</p>
                            </div>
                        </div>
                        <div class="service__item-2">
                            <div>
                                <img src="{{ asset('assets/imgs/about/mission.png') }}" alt="Service Icon"
                                    class="w-50">
                                <h3 class="service__title-2">Our<br>Mission</h3>
                                <p>To facilitate a better and sustained “tomorrow” for people and organizations we work
                                    with. Not only at work </p>
                                <p> But in life and to be recognized as the industry leader in all facets by nurturing
                                    customer engagement through accelerated solutions and processes, better return on
                                    investment and proven delivery models.</p>
                            </div>
                        </div>
                        <div class="service__item-2">
                            <div>
                                <img src="{{ asset('assets/imgs/about/values.png') }}" alt="Service Icon" class="w-50 pt-3">
                                <h3 class="service__title-2">Our <br>Values</h3>
                                <p>Our values are the guiding principles upon which Fidelis Group was founded and how we
                                    strive to conduct our business across all verticals.</p>
                                <p>Our Values establish foundation as we shape a thriving future. They determine how we go
                                    about working towards our growth across verticals. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service area end -->

    <!-- Brand area start -->
    @include('components.clients-slider')
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
                                        <p class="testimonial__text-2">Fidelis has been a wonderful company starting out.
                                            Several things worth pointing out are within the overall atmosphere. Since
                                            Fidelis is in it's growth phase, it allows the management team to easily help
                                            everyone get acquainted with the overall job feel.</p>
                                        <h3 class="testimonial__author">Priyanka MR</h3>
                                    </div>
                                </div>

                                <div class="swiper-slide testimonial__slide">
                                    <div class="testimonial__inner-2">
                                        <h2 class="testimonial__title-2">Amazing Service</h2>
                                        <p class="testimonial__text-2">Fidelis is a great place to work and build up the
                                            career in right path to make a challenging and innovative skills , Good
                                            collaboration with the clients like service based and product based which can
                                            help to build up longer career.</p>
                                        <h3 class="testimonial__author">Sivaramireddy Vemannagari</h3>
                                    </div>
                                </div>

                                <div class="swiper-slide testimonial__slide">
                                    <div class="testimonial__inner-2">
                                        <h2 class="testimonial__title-2">Amazing Experience</h2>
                                        <p class="testimonial__text-2">I think working at Fidelis Technology Services is
                                            worth for me, A Wonderful experience was all the help i got from the management.
                                            Encouraging the employees to upscale the skills which will be beneficial for
                                            one's individual for their career growth.</p>
                                        <h3 class="testimonial__author">Pradeep Raghavendra</h3>
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

@section('script')
<script>
$(document).ready(function(){
$('.offerItemTitle').mouseover(function(){
  $(this).parents('.offerslide').children('.offerItem').removeClass('active');
  $(this).parents('.offerslide').children('.offerItem').children('.offerItemTitle').removeClass('hide');
  $(this).parent('.offerItem').addClass('active');
  $(this).addClass('hide');
  });
});
</script>
@endsection
