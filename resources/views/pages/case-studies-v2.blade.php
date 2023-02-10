@extends('layouts.pages')

@section('content')

        <!-- Portfolio area start -->
        <section class="portfolio__area-6">
            <div class="container line pt-100 pb-140">
              <span class="line-3"></span>
              <div class="zi-9">
                <div class="row">
                  <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6">
                    <div class="sec-title-wrapper portfolio__title-wrap-6">
                      <div class="">
                        <h2 class="sec-sub-title animation__char_come">STUDIES</h2>
                        <h3 class="sec-title animation__char_come_long">CASE</h3>
                        <p>View the full case study of our recent featured and awesome works that we created for our
                          clients.
                        </p>
                      </div>
                      <div class="portfolio__pagination-6">
                        <span class="portfolio__current">01</span> / 0<span class="portfolio__total"></span>
                      </div>
                    </div>
                  </div>
  
                  <div class="col-xxl-8 col-xl-7 col-lg-7 col-md-6">
                    <div class="portfolio__wrapper-6">
                      <div class="portfolio__list-6">
                        <div class="portfolio__item-6" data-portfitem="1">
                          <a href="{{ route('case-details', 'work1') }}">
                            <img src="assets/imgs/portfolio/6/1.jpg" alt="Portfolio Image" data-speed="0.4">
                            <div class="portfolio__content-6">
                              <h4 class="portfolio__title-6">Data Centre Operations & Maintenance</h4>
                              <h5 class="portfolio__date">02 May 2021</h5>
                            </div>
                          </a>
                        </div>
  
                        <div class="portfolio__item-6" data-portfitem="2">
                          <a href="{{ route('case-details', 'work1') }}">
                            <img src="assets/imgs/portfolio/6/2.jpg" alt="Portfolio Image" data-speed="0.4">
                            <div class="portfolio__content-6">
                              <h4 class="portfolio__title-6">End User Support & Technical Helpdesk Services</h4>
                              <h5 class="portfolio__date">02 May 2021</h5>
                            </div>
                          </a>
                        </div>
  
                        <div class="portfolio__item-6" data-portfitem="3">
                          <a href="{{ route('case-details', 'work1') }}">
                            <img src="assets/imgs/portfolio/6/3.jpg" alt="Portfolio Image" data-speed="0.4">
                            <div class="portfolio__content-6">
                              <h4 class="portfolio__title-6">Application support desk operations</h4>
                              <h5 class="portfolio__date">02 May 2021</h5>
                            </div>
                          </a>
                        </div>
  
                        <div class="portfolio__item-6" data-portfitem="4">
                          <a href="{{ route('case-details', 'work1') }}">
                            <img src="assets/imgs/portfolio/6/4.jpg" alt="Portfolio Image" data-speed="0.4">
                            <div class="portfolio__content-6">
                              <h4 class="portfolio__title-6">Data center support & Operations</h4>
                              <h5 class="portfolio__date">02 May 2021</h5>
                            </div>
                          </a>
                        </div>
  
                        <div class="portfolio__item-6" data-portfitem="5">
                          <a href="{{ route('case-details', 'work1') }}">
                            <img src="assets/imgs/portfolio/6/5.jpg" alt="Portfolio Image" data-speed="0.4">
                            <div class="portfolio__content-6">
                              <h4 class="portfolio__title-6">DDUGKY</h4>
                              <h5 class="portfolio__date">02 May 2021</h5>
                            </div>
                          </a>
                        </div>
  
                        <div class="portfolio__item-6" data-portfitem="6">
                          <a href="{{ route('case-details', 'work1') }}">
                            <img src="assets/imgs/portfolio/6/6.jpg" alt="Portfolio Image" data-speed="0.4">
                            <div class="portfolio__content-6">
                              <h4 class="portfolio__title-6">Himayat DDUGKY</h4>
                              <h5 class="portfolio__date">02 May 2021</h5>
                            </div>
                          </a>
                        </div>
  
                        <div class="portfolio__item-6" data-portfitem="7">
                          <a href="{{ route('case-details', 'work1') }}">
                            <img src="assets/imgs/portfolio/6/7.jpg" alt="Portfolio Image" data-speed="0.4">
                            <div class="portfolio__content-6">
                              <h4 class="portfolio__title-6">Udaan NSDC</h4>
                              <h5 class="portfolio__date">02 May 2021</h5>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Portfolio area end -->

@endsection