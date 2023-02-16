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
        .cd-horizontal-timeline{opacity:0;margin:2em auto;-webkit-transition:opacity .2s;-moz-transition:opacity .2s;transition:opacity .2s}.cd-horizontal-timeline::before{content:'mobile';display:none}.cd-horizontal-timeline.loaded{opacity:1}.cd-horizontal-timeline .timeline{position:relative;height:100px;width:90%;max-width:800px;margin:0 auto}.cd-horizontal-timeline .events-wrapper{position:relative;height:100%;margin:0 40px;overflow:hidden}.cd-horizontal-timeline .events-wrapper::after,.cd-horizontal-timeline .events-wrapper::before{content:'';position:absolute;z-index:2;top:0;height:100%;width:20px}.cd-horizontal-timeline .events-wrapper::before{left:0;background-image:-webkit-linear-gradient(left ,#f8f8f8,rgba(248,248,248,0));background-image:linear-gradient(to right,#f8f8f8,rgba(248,248,248,0))}.cd-horizontal-timeline .events-wrapper::after{right:0;background-image:-webkit-linear-gradient(right ,#f8f8f8,rgba(248,248,248,0));background-image:linear-gradient(to left,#f8f8f8,rgba(248,248,248,0))}.cd-horizontal-timeline .events{position:absolute;z-index:1;left:0;top:49px;height:2px;background:#dfdfdf;-webkit-transition:-webkit-transform .4s;-moz-transition:-moz-transform .4s;transition:transform .4s}.cd-horizontal-timeline .filling-line{position:absolute;z-index:1;left:0;top:0;height:100%;width:100%;background-color:#09f;-webkit-transform:scaleX(0);-moz-transform:scaleX(0);-ms-transform:scaleX(0);-o-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:left center;-moz-transform-origin:left center;-ms-transform-origin:left center;-o-transform-origin:left center;transform-origin:left center;-webkit-transition:-webkit-transform .3s;-moz-transition:-moz-transform .3s;transition:transform .3s}.cd-horizontal-timeline .events a{position:absolute;bottom:0;z-index:2;text-align:center;font-size:1.3rem;padding-bottom:15px;color:#383838;-webkit-transform:translateZ(0);-moz-transform:translateZ(0);-ms-transform:translateZ(0);-o-transform:translateZ(0);transform:translateZ(0)}.cd-horizontal-timeline .events a::after{content:'';position:absolute;left:50%;right:auto;-webkit-transform:translateX(-50%);-moz-transform:translateX(-50%);-ms-transform:translateX(-50%);-o-transform:translateX(-50%);transform:translateX(-50%);bottom:-5px;height:12px;width:12px;border-radius:50%;border:2px solid #dfdfdf;background-color:#f8f8f8;-webkit-transition:background-color .3s,border-color .3s;-moz-transition:background-color .3s,border-color .3s;transition:background-color .3s,border-color .3s}.cd-horizontal-timeline .events a.selected::after,.no-touch .cd-horizontal-timeline .events a:hover::after{background-color:#09f;border-color:#09f}.cd-horizontal-timeline .events a.selected{pointer-events:none}.cd-horizontal-timeline .events a.older-event::after,.no-touch .cd-timeline-navigation a:hover{border-color:#09f}@media only screen and (min-width:1100px){.cd-horizontal-timeline{margin:6em auto}.cd-horizontal-timeline::before{content:'desktop'}}.cd-timeline-navigation a{position:absolute;z-index:1;top:50%;bottom:auto;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%);height:34px;width:34px;border-radius:50%;border:2px solid #dfdfdf;overflow:hidden;color:transparent;text-indent:100%;white-space:nowrap;-webkit-transition:border-color .3s;-moz-transition:border-color .3s;transition:border-color .3s}.cd-timeline-navigation a::after{content:'';position:absolute;height:16px;width:16px;left:50%;top:50%;bottom:auto;right:auto;-webkit-transform:translateX(-50%) translateY(-50%);-moz-transform:translateX(-50%) translateY(-50%);-ms-transform:translateX(-50%) translateY(-50%);-o-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%)}.cd-timeline-navigation a.prev{left:0;-webkit-transform:translateY(-50%) rotate(180deg);-moz-transform:translateY(-50%) rotate(180deg);-ms-transform:translateY(-50%) rotate(180deg);-o-transform:translateY(-50%) rotate(180deg);transform:translateY(-50%) rotate(180deg)}.cd-timeline-navigation a.next{right:0}.cd-timeline-navigation a.inactive{cursor:not-allowed}.cd-timeline-navigation a.inactive::after{background-position:0 -16px}.no-touch .cd-timeline-navigation a.inactive:hover{border-color:#dfdfdf}.cd-horizontal-timeline .events-content{position:relative;width:100%;margin:2em 0;overflow:hidden;-webkit-transition:height .4s;-moz-transition:height .4s;transition:height .4s}.cd-horizontal-timeline .events-content li{position:absolute;z-index:1;width:100%;left:0;top:0;-webkit-transform:translateX(-100%);-moz-transform:translateX(-100%);-ms-transform:translateX(-100%);-o-transform:translateX(-100%);transform:translateX(-100%);padding:0 5%;opacity:0;-webkit-animation-duration:.4s;-moz-animation-duration:.4s;animation-duration:.4s;-webkit-animation-timing-function:ease-in-out;-moz-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}.cd-horizontal-timeline .events-content li.selected{position:relative;z-index:2;opacity:1;-webkit-transform:translateX(0);-moz-transform:translateX(0);-ms-transform:translateX(0);-o-transform:translateX(0);transform:translateX(0)}.cd-horizontal-timeline .events-content li.enter-right,.cd-horizontal-timeline .events-content li.leave-right{-webkit-animation-name:cd-enter-right;-moz-animation-name:cd-enter-right;animation-name:cd-enter-right}.cd-horizontal-timeline .events-content li.enter-left,.cd-horizontal-timeline .events-content li.leave-left{-webkit-animation-name:cd-enter-left;-moz-animation-name:cd-enter-left;animation-name:cd-enter-left}.cd-horizontal-timeline .events-content li.leave-left,.cd-horizontal-timeline .events-content li.leave-right{-webkit-animation-direction:reverse;-moz-animation-direction:reverse;animation-direction:reverse}.cd-horizontal-timeline .events-content li>*{max-width:800px;margin:0 auto}.cd-horizontal-timeline .events-content h2{font-size:2.6rem;font-family:"Playfair Display",serif;font-weight:700;line-height:1.2}.cd-horizontal-timeline .events-content em{display:block;font-style:italic;margin:10px auto}.cd-horizontal-timeline .events-content em::before{content:'- '}.cd-horizontal-timeline .events-content p{font-size:1.4rem;color:#959595}.cd-horizontal-timeline .events-content em,.cd-horizontal-timeline .events-content p{line-height:1.6}@media only screen and (min-width:768px){.cd-horizontal-timeline .events-content h2{font-size:7rem}.cd-horizontal-timeline .events-content em{font-size:2rem}.cd-horizontal-timeline .events-content p{font-size:1.8rem}}@-webkit-keyframes cd-enter-right{0%{opacity:0;-webkit-transform:translateX(100%)}100%{opacity:1;-webkit-transform:translateX(0)}}@-moz-keyframes cd-enter-right{0%{opacity:0;-moz-transform:translateX(100%)}100%{opacity:1;-moz-transform:translateX(0)}}@keyframes cd-enter-right{0%{opacity:0;-webkit-transform:translateX(100%);-moz-transform:translateX(100%);-ms-transform:translateX(100%);-o-transform:translateX(100%);transform:translateX(100%)}100%{opacity:1;-webkit-transform:translateX(0);-moz-transform:translateX(0);-ms-transform:translateX(0);-o-transform:translateX(0);transform:translateX(0)}}@-webkit-keyframes cd-enter-left{0%{opacity:0;-webkit-transform:translateX(-100%)}100%{opacity:1;-webkit-transform:translateX(0)}}@-moz-keyframes cd-enter-left{0%{opacity:0;-moz-transform:translateX(-100%)}100%{opacity:1;-moz-transform:translateX(0)}}@keyframes cd-enter-left{0%{opacity:0;-webkit-transform:translateX(-100%);-moz-transform:translateX(-100%);-ms-transform:translateX(-100%);-o-transform:translateX(-100%);transform:translateX(-100%)}100%{opacity:1;-webkit-transform:translateX(0);-moz-transform:translateX(0);-ms-transform:translateX(0);-o-transform:translateX(0);transform:translateX(0)}}
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
                        <img src="assets/imgs/about/3.jpg" alt="Story Thumbnail" class="w-100">
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                    <div class="story__img-wrapper img-anim">
                        <img src="assets/imgs/about/2.jpg" alt="Story Thumbnail" data-speed="auto">
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="story__img-wrapper">
                        <img src="assets/imgs/story/3.jpg" alt="Story Thumbnail">
                        <img src="assets/imgs/about/1.jpg" alt="Story Thumbnail" >
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
                            <h2 class="counter__number">2000+</h2>
                            <p>Projects <br>executed</p>
                            <span class="counter__border"></span>
                        </div>
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
                            <h2 class="counter__number">2500+</h2>
                            <p>Fulltime <br>employees</p>
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

    @php $array = array(
        '2007' => 'Fidelis started its journey in the name of Paylink Financial services as a payroll and accounts partner', 
        '2010' => 'Captured 1st retail giant with 25 resources',
        '2011'  => 'In the year 2011 we forayed into large scale operations and captured our first retail client with staffing solutions',
        '2012'  => 'Fidelis Retail India Pvt Ltd - a group company of fidelis group was formed to spread our wings towards Retail trade and business',
        '2013'  => 'Our first import of Antipasti from Italy - a rare food collection in India',
        '2014'  => 'Reached a milestone of 500 resources Started Skill Development Programme By Collaborating With NSDC',
        '2015'  => 'In 2015 after an extensive market study, we decided to foray into into the IT Space and build on our competencies for a wide industry coverage',
        '2016'  => 'Fidelis was awarded a skill development project by name DDUGKY to set up training centers in rural places of Karnataka',
        '2017'  => 'Reached a milestone of 1000 employees',
        '2019'  => 'In the year 2019 we set benchmarks and emerged as a powerful workforce as we reached a milestone of 2000 Employees',
        '2020' => 'We spontaneously keep innovating and improve on our service delivery models as we at Fidelis reached a record of handling',
        '2022' => 'We have transformed ourselves to a tech based company and changed the name to Fidelis Technology Services Pvt Ltd.  Inauguration of our Dubai Office'
        ); @endphp    
    
<!--offer section area-->
<section class="cd-horizontal-timeline">
    <div class="timeline">
        <div class="events-wrapper">
            <div class="events">
                <ol>
                    @foreach ($array as $key => $item)
                    @if($loop->index == 0)
                        <li><a href="#0" data-date="1/1/{{$key}}" class="selected">{{ $key }}</a></li>
                    @else
                        <li><a href="#0" data-date="1/1/{{ $key }}">{{ $key }}</a></li>
                    @endif
                    @endforeach
                </ol>

                <span class="filling-line" aria-hidden="true"></span>
            </div> <!-- .events -->
        </div> <!-- .events-wrapper -->
            
        <ul class="cd-timeline-navigation">
            <li><a href="#0" class="prev inactive"><img src="{{ asset('assets/imgs/arrow/right-arrow.png') }}" alt="" style="position: absolute; left: 3px; top: 3px;"></a></li>
            <li><a href="#0" class="next"><img src="{{ asset('assets/imgs/arrow/right-arrow.png') }}" alt="" style="position: absolute; left: 3px; top: 3px;"></a></li>
        </ul> <!-- .cd-timeline-navigation -->
    </div> <!-- .timeline -->

    <div class="events-content">
        <ol>
            @foreach ($array as $key => $item)
            <li @if($loop->index==0) class="selected" @endif data-date="1/1/{{ $key }}">
                <h2>{{ $key  }}</h2>
                <p>	
                    {{ $item }}
                </p>
            </li>
            @endforeach


            
        </ol>
    </div> <!-- .events-content -->
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

                                {{-- <div class="swiper-slide testimonial__slide">
                                    <div class="testimonial__inner-2">
                                        <h2 class="testimonial__title-2">Awesome Atmosphere</h2>
                                        <p class="testimonial__text-2">Fidelis has been a wonderful company starting out.
                                            Several things worth pointing out are within the overall atmosphere. Since
                                            Fidelis is in it's growth phase, it allows the management team to easily help
                                            everyone get acquainted with the overall job feel.</p>
                                        <h3 class="testimonial__author">Priyanka MR</h3>
                                    </div>
                                </div> --}}

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

                                <div class="swiper-slide testimonial__slide">
                                    <div class="testimonial__inner-2">
                                        <h2 class="testimonial__title-2">Awesome Atmosphere</h2>
                                        <p class="testimonial__text-2"></p>
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
    jQuery(document).ready(function($){
	var timelines = $('.cd-horizontal-timeline'),
		eventsMinDistance = 60;

	(timelines.length > 0) && initTimeline(timelines);

	function initTimeline(timelines) {
		timelines.each(function(){
			var timeline = $(this),
				timelineComponents = {};
			//cache timeline components 
			timelineComponents['timelineWrapper'] = timeline.find('.events-wrapper');
			timelineComponents['eventsWrapper'] = timelineComponents['timelineWrapper'].children('.events');
			timelineComponents['fillingLine'] = timelineComponents['eventsWrapper'].children('.filling-line');
			timelineComponents['timelineEvents'] = timelineComponents['eventsWrapper'].find('a');
			timelineComponents['timelineDates'] = parseDate(timelineComponents['timelineEvents']);
			timelineComponents['eventsMinLapse'] = minLapse(timelineComponents['timelineDates']);
			timelineComponents['timelineNavigation'] = timeline.find('.cd-timeline-navigation');
			timelineComponents['eventsContent'] = timeline.children('.events-content');

			//assign a left postion to the single events along the timeline
			setDatePosition(timelineComponents, eventsMinDistance);
			//assign a width to the timeline
			var timelineTotWidth = setTimelineWidth(timelineComponents, eventsMinDistance);
			//the timeline has been initialize - show it
			timeline.addClass('loaded');

			//detect click on the next arrow
			timelineComponents['timelineNavigation'].on('click', '.next', function(event){
				event.preventDefault();
				updateSlide(timelineComponents, timelineTotWidth, 'next');
			});
			//detect click on the prev arrow
			timelineComponents['timelineNavigation'].on('click', '.prev', function(event){
				event.preventDefault();
				updateSlide(timelineComponents, timelineTotWidth, 'prev');
			});
			//detect click on the a single event - show new event content
			timelineComponents['eventsWrapper'].on('click', 'a', function(event){
				event.preventDefault();
				timelineComponents['timelineEvents'].removeClass('selected');
				$(this).addClass('selected');
				updateOlderEvents($(this));
				updateFilling($(this), timelineComponents['fillingLine'], timelineTotWidth);
				updateVisibleContent($(this), timelineComponents['eventsContent']);
			});

			//on swipe, show next/prev event content
			timelineComponents['eventsContent'].on('swipeleft', function(){
				var mq = checkMQ();
				( mq == 'mobile' ) && showNewContent(timelineComponents, timelineTotWidth, 'next');
			});
			timelineComponents['eventsContent'].on('swiperight', function(){
				var mq = checkMQ();
				( mq == 'mobile' ) && showNewContent(timelineComponents, timelineTotWidth, 'prev');
			});

			//keyboard navigation
			$(document).keyup(function(event){
				if(event.which=='37' && elementInViewport(timeline.get(0)) ) {
					showNewContent(timelineComponents, timelineTotWidth, 'prev');
				} else if( event.which=='39' && elementInViewport(timeline.get(0))) {
					showNewContent(timelineComponents, timelineTotWidth, 'next');
				}
			});
		});
	}

	function updateSlide(timelineComponents, timelineTotWidth, string) {
		//retrieve translateX value of timelineComponents['eventsWrapper']
		var translateValue = getTranslateValue(timelineComponents['eventsWrapper']),
			wrapperWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', ''));
		//translate the timeline to the left('next')/right('prev') 
		(string == 'next') 
			? translateTimeline(timelineComponents, translateValue - wrapperWidth + eventsMinDistance, wrapperWidth - timelineTotWidth)
			: translateTimeline(timelineComponents, translateValue + wrapperWidth - eventsMinDistance);
	}

	function showNewContent(timelineComponents, timelineTotWidth, string) {
		//go from one event to the next/previous one
		var visibleContent =  timelineComponents['eventsContent'].find('.selected'),
			newContent = ( string == 'next' ) ? visibleContent.next() : visibleContent.prev();

		if ( newContent.length > 0 ) { //if there's a next/prev event - show it
			var selectedDate = timelineComponents['eventsWrapper'].find('.selected'),
				newEvent = ( string == 'next' ) ? selectedDate.parent('li').next('li').children('a') : selectedDate.parent('li').prev('li').children('a');
			
			updateFilling(newEvent, timelineComponents['fillingLine'], timelineTotWidth);
			updateVisibleContent(newEvent, timelineComponents['eventsContent']);
			newEvent.addClass('selected');
			selectedDate.removeClass('selected');
			updateOlderEvents(newEvent);
			updateTimelinePosition(string, newEvent, timelineComponents, timelineTotWidth);
		}
	}

	function updateTimelinePosition(string, event, timelineComponents, timelineTotWidth) {
		//translate timeline to the left/right according to the position of the selected event
		var eventStyle = window.getComputedStyle(event.get(0), null),
			eventLeft = Number(eventStyle.getPropertyValue("left").replace('px', '')),
			timelineWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', '')),
			timelineTotWidth = Number(timelineComponents['eventsWrapper'].css('width').replace('px', ''));
		var timelineTranslate = getTranslateValue(timelineComponents['eventsWrapper']);

        if( (string == 'next' && eventLeft > timelineWidth - timelineTranslate) || (string == 'prev' && eventLeft < - timelineTranslate) ) {
        	translateTimeline(timelineComponents, - eventLeft + timelineWidth/2, timelineWidth - timelineTotWidth);
        }
	}

	function translateTimeline(timelineComponents, value, totWidth) {
		var eventsWrapper = timelineComponents['eventsWrapper'].get(0);
		value = (value > 0) ? 0 : value; //only negative translate value
		value = ( !(typeof totWidth === 'undefined') &&  value < totWidth ) ? totWidth : value; //do not translate more than timeline width
		setTransformValue(eventsWrapper, 'translateX', value+'px');
		//update navigation arrows visibility
		(value == 0 ) ? timelineComponents['timelineNavigation'].find('.prev').addClass('inactive') : timelineComponents['timelineNavigation'].find('.prev').removeClass('inactive');
		(value == totWidth ) ? timelineComponents['timelineNavigation'].find('.next').addClass('inactive') : timelineComponents['timelineNavigation'].find('.next').removeClass('inactive');
	}

	function updateFilling(selectedEvent, filling, totWidth) {
		//change .filling-line length according to the selected event
		var eventStyle = window.getComputedStyle(selectedEvent.get(0), null),
			eventLeft = eventStyle.getPropertyValue("left"),
			eventWidth = eventStyle.getPropertyValue("width");
		eventLeft = Number(eventLeft.replace('px', '')) + Number(eventWidth.replace('px', ''))/2;
		var scaleValue = eventLeft/totWidth;
		setTransformValue(filling.get(0), 'scaleX', scaleValue);
	}

	function setDatePosition(timelineComponents, min) {
		for (i = 0; i < timelineComponents['timelineDates'].length; i++) { 
		    var distance = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][i]),
		    	distanceNorm = Math.round(distance/timelineComponents['eventsMinLapse']) + 2;
		    timelineComponents['timelineEvents'].eq(i).css('left', distanceNorm*min+'px');
		}
	}

	function setTimelineWidth(timelineComponents, width) {
		var timeSpan = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][timelineComponents['timelineDates'].length-1]),
			timeSpanNorm = timeSpan/timelineComponents['eventsMinLapse'],
			timeSpanNorm = Math.round(timeSpanNorm) + 4,
			totalWidth = timeSpanNorm*width;
		timelineComponents['eventsWrapper'].css('width', totalWidth+'px');
		updateFilling(timelineComponents['timelineEvents'].eq(0), timelineComponents['fillingLine'], totalWidth);
	
		return totalWidth;
	}

	function updateVisibleContent(event, eventsContent) {
		var eventDate = event.data('date'),
			visibleContent = eventsContent.find('.selected'),
			selectedContent = eventsContent.find('[data-date="'+ eventDate +'"]'),
			selectedContentHeight = selectedContent.height();

		if (selectedContent.index() > visibleContent.index()) {
			var classEnetering = 'selected enter-right',
				classLeaving = 'leave-left';
		} else {
			var classEnetering = 'selected enter-left',
				classLeaving = 'leave-right';
		}

		selectedContent.attr('class', classEnetering);
		visibleContent.attr('class', classLeaving).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
			visibleContent.removeClass('leave-right leave-left');
			selectedContent.removeClass('enter-left enter-right');
		});
		eventsContent.css('height', selectedContentHeight+'px');
	}

	function updateOlderEvents(event) {
		event.parent('li').prevAll('li').children('a').addClass('older-event').end().end().nextAll('li').children('a').removeClass('older-event');
	}

	function getTranslateValue(timeline) {
		var timelineStyle = window.getComputedStyle(timeline.get(0), null),
			timelineTranslate = timelineStyle.getPropertyValue("-webkit-transform") ||
         		timelineStyle.getPropertyValue("-moz-transform") ||
         		timelineStyle.getPropertyValue("-ms-transform") ||
         		timelineStyle.getPropertyValue("-o-transform") ||
         		timelineStyle.getPropertyValue("transform");

        if( timelineTranslate.indexOf('(') >=0 ) {
        	var timelineTranslate = timelineTranslate.split('(')[1];
    		timelineTranslate = timelineTranslate.split(')')[0];
    		timelineTranslate = timelineTranslate.split(',');
    		var translateValue = timelineTranslate[4];
        } else {
        	var translateValue = 0;
        }

        return Number(translateValue);
	}

	function setTransformValue(element, property, value) {
		element.style["-webkit-transform"] = property+"("+value+")";
		element.style["-moz-transform"] = property+"("+value+")";
		element.style["-ms-transform"] = property+"("+value+")";
		element.style["-o-transform"] = property+"("+value+")";
		element.style["transform"] = property+"("+value+")";
	}

	//based on http://stackoverflow.com/questions/542938/how-do-i-get-the-number-of-days-between-two-dates-in-javascript
	function parseDate(events) {
		var dateArrays = [];
		events.each(function(){
			var dateComp = $(this).data('date').split('/'),
				newDate = new Date(dateComp[2], dateComp[1]-1, dateComp[0]);
			dateArrays.push(newDate);
		});
	    return dateArrays;
	}

	function parseDate2(events) {
		var dateArrays = [];
		events.each(function(){
			var singleDate = $(this),
				dateComp = singleDate.data('date').split('T');
			if( dateComp.length > 1 ) { //both DD/MM/YEAR and time are provided
				var dayComp = dateComp[0].split('/'),
					timeComp = dateComp[1].split(':');
			} else if( dateComp[0].indexOf(':') >=0 ) { //only time is provide
				var dayComp = ["2000", "0", "0"],
					timeComp = dateComp[0].split(':');
			} else { //only DD/MM/YEAR
				var dayComp = dateComp[0].split('/'),
					timeComp = ["0", "0"];
			}
			var	newDate = new Date(dayComp[2], dayComp[1]-1, dayComp[0], timeComp[0], timeComp[1]);
			dateArrays.push(newDate);
		});
	    return dateArrays;
	}

	function daydiff(first, second) {
	    return Math.round((second-first));
	}

	function minLapse(dates) {
		//determine the minimum distance among events
		var dateDistances = [];
		for (i = 1; i < dates.length; i++) { 
		    var distance = daydiff(dates[i-1], dates[i]);
		    dateDistances.push(distance);
		}
		return Math.min.apply(null, dateDistances);
	}

	/*
		How to tell if a DOM element is visible in the current viewport?
		http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
	*/
	function elementInViewport(el) {
		var top = el.offsetTop;
		var left = el.offsetLeft;
		var width = el.offsetWidth;
		var height = el.offsetHeight;

		while(el.offsetParent) {
		    el = el.offsetParent;
		    top += el.offsetTop;
		    left += el.offsetLeft;
		}

		return (
		    top < (window.pageYOffset + window.innerHeight) &&
		    left < (window.pageXOffset + window.innerWidth) &&
		    (top + height) > window.pageYOffset &&
		    (left + width) > window.pageXOffset
		);
	}

	function checkMQ() {
		//check if mobile or desktop device
		return window.getComputedStyle(document.querySelector('.cd-horizontal-timeline'), '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
	}
});
</script>
@endsection
