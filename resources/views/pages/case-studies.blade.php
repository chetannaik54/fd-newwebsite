@extends('layouts.pages')

@section('content')

<section class="pt-150 pb-130 portfolio-v2">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-6">
                <div class="sec-title-wrapper">
                    <h2 class="sec-title-2 animation__char_come">CASE <br> STUDIES</h2>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6">
                <div class="blog__text">
                    <p>Crafting new bright brands, unique visual systems and digital experience focused on a wide range of original collabs. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio area start -->
<section class="portfolio__area pb-140 mb-5">
    <div class="container">
        <div class="row top_row">

            <h2 class="portfolio__text">EFFORTS</h2>
            <div class="portfolio__list-1">
                @foreach ($casestudy as $item)
                <div class="portfolio__item">
                    <a href="{{ route('case-details', str_replace(' ', '-', $item->name) ) }}"><img class="mover" src="{{ asset('assets/imgs/case-studies/'.$item->img) }}" alt="Portfolio Image"></a>
                    <div class="portfolio__info">
                        <h3 class="portfolio__title">{{ $item->name }}</h3>
                        {{-- <p>02 May 2021</p> --}}
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="row row_bottom">
            <div class="col-xxl-12">
                {{-- <div class="portfolio__btn btn_wrapper" data-speed="1" data-lag="0.2">
                    <a class="wc-btn-secondary btn-hover btn-item" href=""><span></span>Load More</a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- Portfolio area end -->

@endsection