@extends('layouts.pages')

@section('customcss')
    <style type="text/css">
    @media (max-width: 480px) { 
        .blog__detail-thumb img{ object-fit: contain; }
    }
    </style>
@endsection

@section('content')

@php $blog = $blog[0]; @endphp

<!-- Blog detail start -->
<section class="blog__detail">
    <div class="container g-0 line pt-140">
        <span class="line-3"></span>
        <div class="row">
            <div class="col-xxl-8 col-xl-10 offset-xxl-2 offset-xl-1">
                <div class="blog__detail-top">
                    <h2 class="blog__detail-date animation__word_come"><span>15 July 2021</span></h2>
                    <h3 class="blog__detail-title animation__word_come">{{ $blog->name }}</h3>
                    <div class="blog__detail-metalist">
                        {{-- <div class="blog__detail-meta">
                            <img src="{{ asset('assets/imgs/blog/detail/author.png') }}" alt="Author Picture" />
                            <p>Writen by <span></span></p>
                        </div> --}}
                        <div class="blog__detail-meta">
                            <p>Viewed <span>3 min read</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12">
                <div class="blog__detail-thumb">
                    <img src="{{ asset('assets/imgs/blog/'.$blog->img) }}" alt="Blog Thumbnail"/>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-10 offset-xxl-2 offset-xl-1">
                <div class="blog__detail-content">
                    {!! $blog->content !!}
                </div>
                <div class="blog__detail-tags">
                    <p class="sub-title-anim d-none">
                        tags: <a href="#">design</a>, <a href="#">figma</a>,
                        <a href="#">update</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog detail end -->

<!-- Related blog start -->
<section class="blog__related blog__animation d-none">
    <div class="container g-0 line pt-130 pb-140">
        <span class="line-3"></span>
        <div class="row">
            <div class="col-xxl-12">
                <div class="sec-title-wrapper">
                    <h2 class="sec-title title-anim">Related Aricles</h2>
                </div>
            </div>
        </div>

        <div class="row reset-grid">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                    <div class="blog__img-wrapper">
                        <a href="#">
                            <div class="img-box">
                                <img class="image-box__item" src="{{ asset('assets/imgs/blog/1.jpg') }}" alt="Blog Thumbnail" />
                                <img class="image-box__item" src="{{ asset('assets/imgs/blog/1.jpg') }}" alt="BLog Thumbnail" />
                            </div>
                        </a>
                    </div>
                    <h4 class="blog__meta sub-title-anim"><a href="#">UI Design</a> . 02 May 2019</h4>
                    <h5><a href="#" class="blog__title sub-title-anim">Ways of lying to yourself about your new relationship.</a></h5>
                    <a href="#" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </article>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item" data-speed="auto">
                    <div class="blog__img-wrapper">
                        <a href="#">
                            <div class="img-box">
                                <img class="image-box__item" src="{{ asset('assets/imgs/blog/2.jpg') }}" alt="Blog Thumbnail" />
                                <img class="image-box__item" src="{{ asset('assets/imgs/blog/2.jpg') }}" alt="BLog Thumbnail" />
                            </div>
                        </a>
                    </div>
                    <h4 class="blog__meta sub-title-anim"><a href="#">UI Design</a> . 02 May 2019</h4>
                    <h5><a href="#" class="blog__title sub-title-anim">How to manage a talented and successful de sign team</a></h5>
                    <a href="#" class="blog__btn">
                        Read More <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </article>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item" data-speed="auto">
                    <div class="blog__img-wrapper">
                        <a href="#">
                            <div class="img-box">
                                <img class="image-box__item" src="{{ asset('assets/imgs/blog/3.jpg') }}" alt="Blog Thumbnail" />
                                <img class="image-box__item" src="{{ asset('assets/imgs/blog/3.jpg') }}" alt="BLog Thumbnail" />
                            </div>
                        </a>
                    </div>
                    <h4 class="blog__meta sub-title-anim"><a href="#">UI Design</a> . 02 May 2019</h4>
                    <h5><a href="#" class="blog__title sub-title-anim">How to bring fold to your startup company with Axtra</a></h5>
                    <a href="#" class="blog__btn">
                        Read More <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- Related blog end -->


@endsection