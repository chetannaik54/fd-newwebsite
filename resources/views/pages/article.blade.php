@extends('layouts.pages')

@section('content')

<!-- Blog detail start -->
<section class="blog__detail">
    <div class="container g-0 line pt-140">
        <span class="line-3"></span>
        <div class="row">
            <div class="col-xxl-8 col-xl-10 offset-xxl-2 offset-xl-1">
                <div class="blog__detail-top">
                    <h2 class="blog__detail-date animation__word_come">Design, Marketing <span>25 Jan 2019</span></h2>
                    <h3 class="blog__detail-title animation__word_come">Donate your design for newest designers to try better</h3>
                    <div class="blog__detail-metalist">
                        <div class="blog__detail-meta">
                            <img src="{{ asset('assets/imgs/blog/detail/author.png') }}" alt="Author Picture" />
                            <p>Writen by <span>Codexpand</span></p>
                        </div>
                        <div class="blog__detail-meta">
                            <p>Viewed <span>3 min read</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12">
                <div class="blog__detail-thumb">
                    <img src="{{ asset('assets/imgs/blog/detail/1.jpg') }}" alt="Blog Thumbnail" data-speed="0.5" />
                </div>
            </div>
            <div class="col-xxl-8 col-xl-10 offset-xxl-2 offset-xl-1">
                <div class="blog__detail-content">
                    <p>
                        We love to bring designs to life as a developer, and I aim to do this using whatever front end tools are necessary. My preferred tools are more modern javascript libraries like React.js but I like to use whatever is
                        best for the websites needs. There are several reasons why a business would consider a rebrand and it doesn’t necessarily mean the business has been unsuccessful.
                    </p>
                    <p>
                        But in order that you may see whence all this born error of those who accuse pleasure and praise pain, I will open the whole matter, and explain the very things which were said by that discoverer of truth and, as it
                        were, the architect of a happy life.
                    </p>
                    <img src="{{ asset('assets/imgs/blog/detail/2.jpg') }}" alt="Blog Image" />
                    <h2>JavaScript</h2>
                    <p>
                        We love to bring designs to life as a developer, and I aim to do this using whatever front end tools are necessary. My preferred tools are more modern javascript libraries like React.js but I like to use whatever is
                        best for the websites needs. There are several reasons why a business would consider a rebrand and it doesn’t necessarily mean the business has been unsuccessful.
                    </p>
                    <h2>Fremework</h2>
                    <p>
                        Always ready to push the boundaries, especially when it comes to our own platform, Our analytical eye to create a site that was visually engaging and also optimised for maximum performance. It also perfectly reflects
                        the journey to help it tell a story to increase its understanding and drive action. To create a site that was visually engaging for maximum performance.
                    </p>
                    <ul>
                        <li>Brand Development</li>
                        <li>UX/UI Design</li>
                        <li>Front-end Development</li>
                        <li>Copywriting</li>
                        <li>Shopify Development</li>
                    </ul>
                    <h2>Visual Studio</h2>
                    <p>
                        Just like other pseudo-elements and pseudo-class selectors, :not() can be chained with other pseudo-classes and pseudo-elements. For example, the following will add a “New!” word to list items that do not have a .old
                        class name, using the ::after pseudo-element:
                    </p>
                    <img src="{{ asset('assets/imgs/blog/detail/3.jpg') }}" alt="Code" />
                </div>
                <div class="blog__detail-tags">
                    <p class="sub-title-anim">
                        tags: <a href="tag.html">design</a>, <a href="tag.html">figma</a>,
                        <a href="tag.html">update</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog detail end -->

<!-- Related blog start -->
<section class="blog__related blog__animation">
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
                        <a href="blog-details.html">
                            <div class="img-box">
                                <img class="image-box__item" src="{{ asset('assets/imgs/blog/1.jpg') }}" alt="Blog Thumbnail" />
                                <img class="image-box__item" src="{{ asset('assets/imgs/blog/1.jpg') }}" alt="BLog Thumbnail" />
                            </div>
                        </a>
                    </div>
                    <h4 class="blog__meta sub-title-anim"><a href="category.html">UI Design</a> . 02 May 2019</h4>
                    <h5><a href="blog-details.html" class="blog__title sub-title-anim">Ways of lying to yourself about your new relationship.</a></h5>
                    <a href="blog-details.html" class="blog__btn">Read More <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </article>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item" data-speed="auto">
                    <div class="blog__img-wrapper">
                        <a href="blog-details.html">
                            <div class="img-box">
                                <img class="image-box__item" src="{{ asset('assets/imgs/blog/2.jpg') }}" alt="Blog Thumbnail" />
                                <img class="image-box__item" src="{{ asset('assets/imgs/blog/2.jpg') }}" alt="BLog Thumbnail" />
                            </div>
                        </a>
                    </div>
                    <h4 class="blog__meta sub-title-anim"><a href="category.html">UI Design</a> . 02 May 2019</h4>
                    <h5><a href="blog-details.html" class="blog__title sub-title-anim">How to manage a talented and successful de sign team</a></h5>
                    <a href="blog-details.html" class="blog__btn">
                        Read More <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </article>
            </div>

            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item" data-speed="auto">
                    <div class="blog__img-wrapper">
                        <a href="blog-details.html">
                            <div class="img-box">
                                <img class="image-box__item" src="{{ asset('assets/imgs/blog/3.jpg') }}" alt="Blog Thumbnail" />
                                <img class="image-box__item" src="{{ asset('assets/imgs/blog/3.jpg') }}" alt="BLog Thumbnail" />
                            </div>
                        </a>
                    </div>
                    <h4 class="blog__meta sub-title-anim"><a href="category.html">UI Design</a> . 02 May 2019</h4>
                    <h5><a href="blog-details.html" class="blog__title sub-title-anim">How to bring fold to your startup company with Axtra</a></h5>
                    <a href="blog-details.html" class="blog__btn">
                        Read More <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- Related blog end -->


@endsection