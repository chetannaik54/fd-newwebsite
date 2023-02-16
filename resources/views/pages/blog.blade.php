@extends('layouts.pages')

@section('content')
<!-- Blog area start -->
        <section class="blog__area-6 blog__animation">
            <div class="container g-0 line pt-110 pb-110">
                <span class="line-3"></span>
                <div class="row pb-130">
                    <div class="col-xxl-8 col-xl-7 col-lg-6 col-md-6">
                        <div class="sec-title-wrapper">
                            <h2 class="sec-title-2 animation__char_come">We always <br>think</h2>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-6">
                        <div class="blog__text">
                            {{-- <p>We use an agile approach to solve issues and connect with the needs of your audience early and often. </p> --}}
                        </div>
                    </div>
                </div>

                <div class="row reset-grid">

                    @foreach ($blogs as $item)
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                            <article class="blog__item">
                                <div class="blog__img-wrapper">
                                    <a href="{{ route('article', $item->name) }}">
                                        <div class="img-box">
                                            <img class="image-box__item" src="{{ asset('assets/imgs/blog/'.$item->img) }}" alt="{{ $item->name }}">
                                            <img class="image-box__item" src="{{ asset('assets/imgs/blog/'.$item->img) }}" alt="{{ $item->name }}">
                                        </div>
                                    </a>
                                </div>
                                <h4 class="blog__meta">{{ $item->created_at->format('d-m-Y') }}</h4>
                                <h5><a href="{{ route('article', $item->name) }}" class="blog__title">{{ $item->name }}</a></h5>
                                <a href="{{ route('article', $item->name) }}" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </article>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Blog area end -->

@endsection