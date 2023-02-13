@extends('layouts.pages')

@section('content')

 <!-- Career area start -->
 <section class="job__areas pt-130 pb-150" id="job_list">
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
                <a href="{{ route('careers-details', 'frontend-developer') }}">
                   <div class="job__item">
                      <p class="job__no">01</p>
                      <h3 class="job__title">UI/UX Designer</h3>
                      <h4 class="job__open">(02 Open Roles)</h4>
                      <div class="job__link">
                         <span><i class="fa-solid fa-arrow-right"></i></span>
                      </div>
                   </div>
                </a>
                <a href="{{ route('careers-details', 'frontend-developer') }}">
                   <div class="job__item">
                      <p class="job__no">02</p>
                      <h3 class="job__title">Frontend Developer</h3>
                      <h4 class="job__open">(07 Open Roles)</h4>
                      <div class="job__link">
                         <span><i class="fa-solid fa-arrow-right"></i></span>
                      </div>
                   </div>
                </a>
                <a href="{{ route('careers-details', 'frontend-developer') }}">
                   <div class="job__item">
                      <p class="job__no">03</p>
                      <h3 class="job__title">Product Manager</h3>
                      <h4 class="job__open">(15 Open Roles)</h4>
                      <div class="job__link">
                         <span><i class="fa-solid fa-arrow-right"></i></span>
                      </div>
                   </div>
                </a>
                <a href="{{ route('careers-details', 'frontend-developer') }}">
                   <div class="job__item">
                      <p class="job__no">04</p>
                      <h3 class="job__title">JavaScript Engineer</h3>
                      <h4 class="job__open">(03 Open Roles)</h4>
                      <div class="job__link">
                         <span><i class="fa-solid fa-arrow-right"></i></span>
                      </div>
                   </div>
                </a>
                <a href="{{ route('careers-details', 'frontend-developer') }}">
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

 @endsection