@extends('layouts.pages')

@section('customcss')
    <style>
        .small_logo{
            position: absolute;
            width: 80px;
            right: -45px;
            background: white;
            padding: 15px;
            border-radius: 30%;
        }

        .showcase4__thumb img{  object-position: right; width: 100%; height: 100%;  }
    </style>
@endsection

@section('content')
    <section class="service__area-1 service-v3 pt-130 pb-140">

        <!-- Service area start -->
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="sec-text text-anim">
                        <p>We are passionate to create cost-effective Solution, and efforts to derive stable and
                            successful relationships between businesses and customers.</p>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title title-anim">Our Offerings</h2>
                    </div>
                </div>
            </div>
        </div>

            <!-- show case -->
            <div class="showcase__area-4">
                <div class="row">

                    @foreach ($competencies as $item)
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 ">
                        <div class="showcase4 wc-tilt-2 fade_bottom_3">
                            <a href="{{ route( strtolower(str_replace(' ','-', $item->name))) }}">
                                <div class="showcase4__thumb">
                                    <img loading="lazy" width="850" height="500" src="{{ asset('assets/imgs/service/'.$item->img) }}" class="attachment-extra_850x500 size-extra_850x500 wp-post-image" alt="" decoding="async" />
                                </div>
                                <img src="{{ $item->img }}" alt="" class="small_logo">

                                <div class="showcase4__content">
                                    <div class="showcase4__content__left">
                                        <h2>{{ $item->name }}</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>                        
                    @endforeach

                </div>
            </div>
            <!-- /show case -->
    </section>
@endsection
