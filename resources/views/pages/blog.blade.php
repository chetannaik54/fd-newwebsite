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

                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <article class="blog__item">
                            <div class="blog__img-wrapper">
                                <a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}">
                                    <div class="img-box">
                                        <img class="image-box__item" src="{{ asset('assets/imgs/blog/From-Fidelis-CEO-thumb.png') }}" alt="Blog Thumbnail">
                                        <img class="image-box__item" src="{{ asset('assets/imgs/blog/From-Fidelis-CEO-thumb.png') }}" alt="BLog Thumbnail">
                                    </div>
                                </a>
                            </div>
                            <h4 class="blog__meta">15 July 2021</h4>
                            <h5><a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}" class="blog__title">Deep Rooted Thoughts from the CEO of Fidelis Group.</a></h5>
                            <a href="{{ route('article', 'deep-rooted-msg-from-ceo') }}" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </article>
                    </div>

                </div>
            </div>
        </section>
        <!-- Blog area end -->

@endsection