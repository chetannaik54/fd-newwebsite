@extends('layouts.pages')

@section('content')

<!-- Portfolio area start -->
<section class="portfolio__detail">
    <div class="portfolio__detail-top">
      <div class="container g-0 line pt-110 pb-130">
        <span class="line-3"></span>

        <div class="row">
          <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-7">
            <div class="sec-title-wrapper">
              <h2 class="sec-title animation__char_come">{{ Request::segment(count(Request::segments())) }}</h2>
            </div>
          </div>

          <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-5">
            <div class="portfolio__detail-info">
              <ul>
                <li>Category <a href="category.html">Development</a></li>
                <li>Client <span>Webflow</span></li>
                <li>Start Date <span>23 January 2021</span></li>
                <li>Handover <span>05 March 2021</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="portfolio__detail-thumb">
      <img src="{{ asset('assets/imgs/portfolio/detail/1.jpg') }}" alt="Portfolio Thumbnail" data-speed="auto">
    </div>

    <div class="portfolio__detail-content">
      <div class="container g-0 line pt-140">
        <span class="line-3"></span>

        <div class="block-content">
          <div class="row">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
              <h2 class="portfolio__detail-title title-anim">Build, streamline and
                evolve together with
                solution</h2>
            </div>

            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
              <div class="portfolio__detail-text">
                <p>The client is a famous healthcare practitioner who involved in treating various diseases through bio-magnetic therapy. The client wants to have a 3D mobile application for clients to locate scan points and their corresponding pairs and heal their health concerns individually.</p>

                <ul>
                  <li>+ Wintel Server Support ( Coverage:24×7)</li>
                  <li>+ Database Administration ( Coverage:24×7)</li>
                  <li>+ Data Centre IT Infrastructure Support (Coverage:24×7)</li>
                  <li>+ Network Monitoring & Management – HP NNM tool ( Coverage:24×7)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="block-thumb">
          <img src="{{ asset('assets/imgs/portfolio/detail/2.jpg') }}" alt="Portfolio Image" data-speed="0.5">
        </div>

        <div class="block-content  pt-140">
          <div class="row">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
              <h2 class="portfolio__detail-title title-anim">Challenge Faced</h2>
            </div>

            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
              <div class="portfolio__detail-text">Provision of Data Centre Support & Run operations – L2 & L2+ support</p>
              </div>
            </div>
          </div>
        </div>

        <div class="block-img-text">
          <img src="{{ asset('assets/imgs/portfolio/detail/6.jpg') }}" alt="Portfolio Image">
          <img src="{{ asset('assets/imgs/portfolio/detail/7.jpg') }}" alt="Portfolio Image">
          <p>Results  Resources Deployment: 5 nos. ( Includes System Admins, N/W Engineers, DB Admins).</p>
        </div>

        <div class="row">
          <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
            <div class="portfolio__detail-btns pt-150 pb-150">
              <a href="portfolio-details.html" class="wc-btn-primary btn-hover"><span></span> Prev Work</a>
              <a href="portfolio-details.html" class="wc-btn-primary btn-hover"><span></span> Next Work</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- Portfolio area end -->


@endsection