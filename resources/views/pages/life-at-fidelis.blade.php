@extends('layouts.pages')

@section('customcss')
<style type="text/css">
   .service__area-7{
      /* background-image: url('{{ asset('assets/imgs/career/portrait-young-indian.png') }}'); */
      background-image: none !important; 
   }
   @media (max-width: 480px) { 
      .service__area-7{
         background-image:none !important;
      }
   }

        @media (min-width: 1200px) and (max-width: 1366px) {
            .main-menu-3>li>a {
                font-size: 12px !important;
            }
        }
        
        .header__area-3.sticky-3 .main-menu-3>li>a {
            color: var(--black-2);
        }

        #open_offcanvas,
        .search-icon {
            color: var(--white);
        }

        .header__area-3.sticky-3 #open_offcanvas,
        .header__area-3.sticky-3 .search-icon {
            color: var(--black-2);
        }
</style>
@endsection

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
                   <a href="{{ route('careers') }}" class="wc-btn-secondary btn-hover btn-item">
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
             <p>Enjoy the various benefits in both your life and job environment. At Fidelis, we work as a flexible team who prioritizes both personal and professional space of our employees. Delve into the wide range of perks and benefits provided by us. #LifeAtFidelis.</p>
             <p>Employees are the most prominent capital in every company. At Fidelis, we show how and why it is so. So listen, read, and get inspired by our very own Fidelers as they share their thoughts on an extraordinary journey.</p>
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
        <section class="service__area-7 pt-130" style="background-size: contain;background-repeat: no-repeat;background-position: right;">
         <div class="container">
           <div class="row">
             <div class="col-xxl-12">
               <div class="service__items-7 animation_service_7">
                 <div class="service__item-7">
                   <a href="#">
                     <h3 class="service__title-7">Gratuity <span>& Health Insurance</span></h3>
                   </a>
                   <p>The only thing we are more passionate about after technology is our people! As an OG at Fidelis who has stayed with us for 5 (hi-five) years, we reward you with the Gratuity benefit.</p>
                 </div>
                 <div class="service__item-7">
                   <a href="#">
                     <h3 class="service__title-7">Work From <span>Home Options</span> </h3>
                   </a>
                   <p>In #workfromhome, we trust! The pandemic has brought us to the reality that working from home can be an option to be productive. At Fidelis, we provide flexible work hours and a hybrid mode.</p>
                 </div>
                 <div class="service__item-7">
                   <a href="#">
                     <h3 class="service__title-7">Personal Accident <span>Policy</span> </h3>
                   </a>
                   <p>You are our safety net, and we give you a hassle-free, frictionless Personal Accident Policy to cover sudden mishaps and medical expenses. With us, your health and growth are in safe hands.</p>
                 </div>
                 <div class="service__item-7">
                   <a href="#">
                     <h3 class="service__title-7">Paid <span> Maternity Leave</span> </h3>
                   </a>
                   <p>Mothers are true multitaskers, and we are always game for them. Being a newborn mother isn’t easy, and we understand its hassles. Hence, Fidelers provides you with leave of 26 weeks. We wish you a pleasant time</p>
                 </div>
                 <div class="service__item-7">
                   <a href="#">
                     <h3 class="service__title-7">Global <span>Work Space</span></h3>
                   </a>
                   <p>We are a global workspace that provides you with complete freedom to work in any setting, including cabins and bean bags. You get to decide. Get unlimited food, enjoy gaming in your spare time, and work in a welcoming environment.</p>
                 </div>
                 <div class="service__item-7">
                   <a href="#">
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
                <h2 class="sec-title title-anim">Perks & Benefits</h2>
                <p>Making an impact is foundational to who we are at Fidelis. People, Performance, Perks. These are the foundational stones of Life At Fidelis. An inside look at our space, work, and camaraderie shows we are as cool a gig as it sounds. Over the years, we have tried to deconstruct the environment into a more work-life-positive, creativity-centered force for our employees. With around 1600+ Fidelis minds under our umbrella, we have implemented a structure and standard that ensures to help shape your professionalism, aspirations, and way of life.</p>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Career benifit area end -->
 
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
           <h3 class="sec-title-6 title-anim">Employees feedback</h3>
           <p>We are Trusted by 300+ global employees</p>
         </div>
       </div>
       <div class="swiper testimonial__slider-4">
         <div class="swiper-wrapper">
           <div class="swiper-slide testimonial__slide-4">
             <img class="testimonial__img-4" src="https://ui-avatars.com/api/?name=PM" alt="Testimonial Image">
             <div class="testimonial__info-4">
               <h4 class="testimonial__feedback-4">Good Atmosphere</h4>
               <p>It as good work environment and work culture and a supportive team. i joined recently but it is really going well</p>
               <h5 class="testimonial__name-4">Priyanka MR</h5>
             </div>
           </div>
           <div class="swiper-slide testimonial__slide-4">
             <img class="testimonial__img-4" src="https://ui-avatars.com/api/?name=ZF" alt="Testimonial Image">
             <div class="testimonial__info-4">
               <h4 class="testimonial__feedback-4">Clean Environment</h4>
               <p>It is a company that's presently shaping up to scale up in future. The culture is friendly and vibrant, Though we work on targets it is healthy competition</p>
               <h5 class="testimonial__name-4">Zainab Farheen</h5>
             </div>
           </div>
           <div class="swiper-slide testimonial__slide-4">
             <img class="testimonial__img-4" src="https://ui-avatars.com/api/?name=RS" alt="Testimonial Image">
             <div class="testimonial__info-4">
               <h4 class="testimonial__feedback-4">Instant Support</h4>
               <p>I have enjoyed my time at Fidelis. It is a challenging role where no two days are the same. I always had a support from my manager and was able to grow with in span of 10months.The biggest reason i stayed for so long was the team culture and support-they are the absolute best.</p>
               <h5 class="testimonial__name-4">Rakhi Singh</h5>
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
 
    <!-- CTA area start -->
    <section class="cta__area">
      <div class="container line pb-110">
          <div class="line-3"></div>
          <div class="row">
              <div class="col-xxl-12">
                  <div class="cta__content">
                      <p class="cta__sub-title">Work with us</p>
                      <h2 class="cta__title title-anim">We are growing, Grow with us</h2>
                      <div class="btn_wrapper">
                          <a href="{{ route('careers') }}" class="wc-btn-primary btn-item btn-hover"><span></span>Explore job openings <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- CTA area end -->

@endsection