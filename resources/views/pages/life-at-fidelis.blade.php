@extends('layouts.pages')

@section('content')

<!-- Career hero area start -->
<section class="career__top">
    <div class="career__top-title">
       <div class="container pt-120">
          <div class="row pb-120">
             <div class="col-xxl-10 col-xl-9 col-lg-9 col-md-9">
                <div class="sec-title-wrapper">
                   <h2 class="sec-title-2 animation__char_come">Join our team & let’s work together</h2>
                </div>
             </div>
             <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-3">
                <div class="btn_wrapper">
                   <a href="#job_list" class="wc-btn-secondary btn-hover btn-item">
                      <span></span> Explore job <br />
                      vacancies <i class="fa-solid fa-arrow-right"></i>
                   </a>
                </div>
             </div>
          </div>
       </div>
    </div>
 
    <div class="career__thumb">
       <div class="container g-0">
          <div class="row inherit">
             <div class="col-xxl-12">
                <div class="career__top-img">
                   <video autoplay muted loop>
                      <source src="{{ asset('assets/video/video.mp4') }}" type="video/mp4" />
                   </video>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Career hero area end -->
 
 <!-- Career gallery start -->
 <section class="career__gallery">
    <div class="container g-0 line pt-140 pb-140">
       <span class="line-3"></span>
       <div class="row">
          <div class="col-xxl-12">
             <ul>
                <li>Future</li>
                <li>Community</li>
                <li>Honor</li>
             </ul>
             <p>Launch your campaign and benefit from our expertise on designing and managing conversion centered Tailwind css html page.</p>
             <p>It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. This might also explain why one can now find slightly different versions.</p>
          </div>
       </div>
 
       <div class="row">
          <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
             <div class="career__gallery-img">
                <img src="{{ asset('assets/imgs/career/2.jpg') }}" alt="Image" />
             </div>
          </div>
          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
             <div class="career__gallery-img img-anim">
                <img src="{{ asset('assets/imgs/career/3.jpg') }}" alt="Image" data-speed="auto" />
             </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
             <div class="career__gallery-img">
                <img src="{{ asset('assets/imgs/career/4.jpg') }}" alt="Image" />
                <img src="{{ asset('assets/imgs/career/5.jpg') }}" alt="Image" />
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Career gallery end -->

        <!-- Service area start -->
        <section class="service__area-7 pt-130" style="background-image: url('{{ asset('assets/imgs/career/portrait-young-indian.png') }}'); background-size: contain;background-repeat: no-repeat;background-position: right;">
         <div class="container">
           <div class="row">
             <div class="col-xxl-12">
               <div class="service__items-7 animation_service_7">
                 <div class="service__item-7">
                   <a href="service-details.html">
                     <h3 class="service__title-7">Gratuity <span>& Health Insurance</span></h3>
                   </a>
                   <p>The only thing we are more passionate about after technology is our people! As an OG at Fidelis who has stayed with us for 5 (hi-five) years, we reward you with the Gratuity benefit.</p>
                 </div>
                 <div class="service__item-7">
                   <a href="service-details.html">
                     <h3 class="service__title-7">Work From <span>Home Options</span> </h3>
                   </a>
                   <p>In #workfromhome, we trust! The pandemic has brought us to the reality that working from home can be an option to be productive. At Fidelis, we provide flexible work hours and a hybrid mode.</p>
                 </div>
                 <div class="service__item-7">
                   <a href="service-details.html">
                     <h3 class="service__title-7">Personal Accident <span>Policy</span> </h3>
                   </a>
                   <p>You are our safety net, and we give you a hassle-free, frictionless Personal Accident Policy to cover sudden mishaps and medical expenses. With us, your health and growth are in safe hands.</p>
                 </div>
                 <div class="service__item-7">
                   <a href="service-details.html">
                     <h3 class="service__title-7">Paid <span> Maternity Leave</span> </h3>
                   </a>
                   <p>Mothers are true multitaskers, and we are always game for them. Being a newborn mother isn’t easy, and we understand its hassles. Hence, Fidelers provides you with leave of 26 weeks. We wish you a pleasant time</p>
                 </div>
                 <div class="service__item-7">
                   <a href="service-details.html">
                     <h3 class="service__title-7">Global <span>Work Space</span></h3>
                   </a>
                   <p>We are a global workspace that provides you with complete freedom to work in any setting, including cabins and bean bags. You get to decide. Get unlimited food, enjoy gaming in your spare time, and work in a welcoming environment.</p>
                 </div>
                 <div class="service__item-7">
                   <a href="service-details.html">
                     <h3 class="service__title-7">Paid <span>Paternity Leave</span> </h3>
                   </a>
                   <p>Parenting together in the first days of your child’s birth is instrumental. We are aware of how crucial it is to determine family relations. We always stand by you and want you to be a fantastic dad in addition to being a super employee.</p>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </section>
       <!-- Service area end -->


 <!-- Career area start -->
 <section class="job__area pt-130 pb-150" id="job_list">
    <div class="container">
       <div class="row">
          <div class="col-xxl-12">
             <div class="sec-title-wrapper">
                <h2 class="sec-title title-anim">
                   We’re Currently <br />
                   hiring
                </h2>
             </div>
          </div>
          <div class="col-xxl-12">
             <div class="job__list">
                <a href="job-details.html">
                   <div class="job__item">
                      <p class="job__no">01</p>
                      <h3 class="job__title">UI/UX Designer</h3>
                      <h4 class="job__open">(02 Open Roles)</h4>
                      <div class="job__link">
                         <span><i class="fa-solid fa-arrow-right"></i></span>
                      </div>
                   </div>
                </a>
                <a href="job-details.html">
                   <div class="job__item">
                      <p class="job__no">02</p>
                      <h3 class="job__title">Frontend Developer</h3>
                      <h4 class="job__open">(07 Open Roles)</h4>
                      <div class="job__link">
                         <span><i class="fa-solid fa-arrow-right"></i></span>
                      </div>
                   </div>
                </a>
                <a href="job-details.html">
                   <div class="job__item">
                      <p class="job__no">03</p>
                      <h3 class="job__title">Product Manager</h3>
                      <h4 class="job__open">(15 Open Roles)</h4>
                      <div class="job__link">
                         <span><i class="fa-solid fa-arrow-right"></i></span>
                      </div>
                   </div>
                </a>
                <a href="job-details.html">
                   <div class="job__item">
                      <p class="job__no">04</p>
                      <h3 class="job__title">JavaScript Engineer</h3>
                      <h4 class="job__open">(03 Open Roles)</h4>
                      <div class="job__link">
                         <span><i class="fa-solid fa-arrow-right"></i></span>
                      </div>
                   </div>
                </a>
                <a href="job-details.html">
                   <div class="job__item">
                      <p class="job__no">05</p>
                      <h3 class="job__title">Joomla Developer</h3>
                      <h4 class="job__open">(09 Open Roles)</h4>
                      <div class="job__link">
                         <span><i class="fa-solid fa-arrow-right"></i></span>
                      </div>
                   </div>
                </a>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Career area end -->
 
 <!-- Career benifit area start -->
 <section class="career__benefits">
    <div class="container line g-0 pt-140 pb-150">
       <span class="line-3"></span>
 
       <div class="row">
          <div class="col-xxl-7 col-xl-7 col-lg-7">
             <ul class="career__benefits-list">
                <li>
                   Vacation & Paid <br />
                   Time Off
                </li>
                <li>
                   Work-life <br />
                   Integration
                </li>
                <li>
                   Maternity/Paternity <br />
                   Benefits
                </li>
                <li>
                   Personal <br />
                   Career Growth
                </li>
                <li>
                   Learning & <br />
                   Development
                </li>
                <li>
                   Healthy <br />
                   Food & Snacks
                </li>
             </ul>
          </div>
          <div class="col-xxl-5 col-xl-5 col-lg-5">
             <div class="sec-title-wrapper">
                <h2 class="sec-title title-anim">Global Perks & Benefits</h2>
                <p>Making an impact is foundational to who we are at Fidelis. People, Performance, Perks. These are the foundational stones of Life At Fidelis. An inside look at our space, work, and camaraderie shows we are as cool a gig as it sounds. Over the years, we have tried to deconstruct the environment into a more work-life-positive, creativity-centered force for our employees. With around 1600+ Fidelis minds under our umbrella, we have implemented a structure and standard that ensures to help shape your professionalism, aspirations, and way of life.</p>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Career benifit area end -->
 

@endsection