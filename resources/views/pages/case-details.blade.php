@extends('layouts.pages')

@section('content')
    @foreach ($detail as $item)
    
    <!-- Portfolio area start -->
    <section class="portfolio__detail">
      <div class="portfolio__detail-top">
          <div class="container g-0 line pt-110 pb-130">
              <span class="line-3"></span>

              <div class="row">
                  <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-7">
                      <div class="sec-title-wrapper">
                          <h2 class="sec-title animation__char_come">{{ $item->name }}
                          </h2>
                      </div>
                  </div>

                  <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-5">
                      <div class="portfolio__detail-info">
                          <ul>
                              <li>Industry <span>{{ $item->industry }}</span></li>
                              <li>Client <span>{{ $item->client }}</span></li>
                              <li>Services <span>{{ $item->services }}</span></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="portfolio__detail-thumb">
          <img src="{{ asset('assets/imgs/case-studies/'.$item->img) }}" alt="Portfolio Thumbnail" data-speed="auto">
      </div>

      <div class="portfolio__detail-content">
          <div class="container g-0 line pt-140">
              <span class="line-3"></span>

              <div class="block-content">
                  <div class="row">
                      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                          <h2 class="portfolio__detail-title title-anim">Overview</h2>
                      </div>

                      <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                          <div class="portfolio__detail-text">
                              <p>{{ $item->overview }}</p>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                          <h2 class="portfolio__detail-title title-anim">Challenge</h2>
                      </div>

                      <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                          <div class="portfolio__detail-text title-anim">
                              <p>{{ $item->challenge }}</p>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                        <h2 class="portfolio__detail-title title-anim">Solutions</h2>
                    </div>

                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                        <div class="portfolio__detail-text title-anim">
                            <div>@php $q = explode("<br>", $item->solution) @endphp</div>
                            <ul>
                            @foreach ($q as $a)
                                      <li>{{ $a }}</li>        
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                      <h2 class="portfolio__detail-title title-anim">Results</h2>
                  </div>

                  <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                      <div class="portfolio__detail-text title-anim">
                          <p>{{ $item->results }}</p>
                      </div>
                  </div>
              </div>
            </div>

              {{-- <div class="row">
                  <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                      <div class="portfolio__detail-btns pt-150 pb-150">
                          <a href="#" class="wc-btn-primary btn-hover"><span></span> Prev Work</a>
                          <a href="#" class="wc-btn-primary btn-hover"><span></span> Next Work</a>
                      </div>
                  </div>
              </div> --}}
          </div>
      </div>

    </section>
    <!-- Portfolio area end -->
    @endforeach

@endsection
