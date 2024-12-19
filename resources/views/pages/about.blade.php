@extends('layout.app')
@section('title','About')

@section('content')
<!-- content -->
<div class="mil-content">
    <div id="swupMain" class="mil-main-transition">

        <!-- about -->
        <section id="about">
            <div class="container mil-p-120-30">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-xl-5">

                        <div class="mil-mb-90">
                            <h3 class="mil-up mil-mb-60">About Me</h3>
                            <p class="mil-up mil-mb-30" style="text-align: justify">I am a Front-End Developer and WordPress Web Developer with over 3 years of experience in the industry. Throughout my career, I have successfully delivered a wide range of projects for clients both locally and internationally, demonstrating expertise in building responsive, user-friendly websites. Currently, I am working as a Web Developer for INDECON, an NGO based in South Jakarta, where I contribute to developing and maintaining their digital platforms. In addition, I hold a part-time position as a Front-End Developer at PT. Karya Berdiri Bersama, a software development company based in Bandung, where I collaborate on creating innovative web solutions. My experience has allowed me to refine my skills in front-end technologies and WordPress, while also gaining valuable insights into working in diverse, dynamic environments.</p>
                            <div class="mil-about-quote">
                                <div class="mil-avatar mil-up">
                                    <img src="{{ asset('assets/img/faces/large/ikbalaa.png') }}" alt="ikbal abdul aziz">
                                </div>
                                <h6 class="mil-quote mil-up">Passionately Creating <span class="mil-thin">Design Wonders:</span> Unleashing <span class="mil-thin">Boundless Creativity</span></h6>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5">

                        <div class="mil-about-photo mil-mb-90">
                            <div class="mil-lines-place"></div>
                            <div class="mil-up mil-img-frame" style="padding-bottom: 160%;">
                                <img src="{{ asset('assets/img/photo/about-bg.jpg') }}" alt="img" class="mil-scale" data-value-1="1" data-value-2="1.2">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- about end -->

        <!-- reviews -->
        <section class="mil-soft-bg">
            <div class="container mil-p-120-120">

                <div class="row">
                    <div class="col-lg-10">

                        <span class="mil-suptitle mil-suptitle-right mil-suptitle-dark mil-up">Customer reviews are a valuable source <br>of information for both businesses and consumers.</span>

                    </div>
                </div>

                <h2 class="mil-center mil-up mil-mb-60">Customer <span class="mil-thin">Voices:</span> <br>Hear What <span class="mil-thin">They Say!</span></h2>

                <div class="mil-revi-pagination mil-up mil-mb-60"></div>

                <div class="row mil-relative justify-content-center">
                    <div class="col-lg-8">

                        <div class="mil-slider-nav mil-soft mil-reviews-nav mil-up">
                            <div class="mil-slider-arrow mil-prev mil-revi-prev mil-arrow-place"></div>
                            <div class="mil-slider-arrow mil-revi-next mil-arrow-place"></div>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="mil-quote-icon mil-up">
                            <path d="M 13.5 10 A 8.5 8.5 0 0 0 13.5 27 A 8.5 8.5 0 0 0 18.291016 25.519531 C 17.422273 29.222843 15.877848 31.803343 14.357422 33.589844 C 12.068414 36.279429 9.9433594 37.107422 9.9433594 37.107422 A 1.50015 1.50015 0 1 0 11.056641 39.892578 C 11.056641 39.892578 13.931586 38.720571 16.642578 35.535156 C 19.35357 32.349741 22 27.072581 22 19 A 1.50015 1.50015 0 0 0 21.984375 18.78125 A 8.5 8.5 0 0 0 13.5 10 z M 34.5 10 A 8.5 8.5 0 0 0 34.5 27 A 8.5 8.5 0 0 0 39.291016 25.519531 C 38.422273 29.222843 36.877848 31.803343 35.357422 33.589844 C 33.068414 36.279429 30.943359 37.107422 30.943359 37.107422 A 1.50015 1.50015 0 1 0 32.056641 39.892578 C 32.056641 39.892578 34.931586 38.720571 37.642578 35.535156 C 40.35357 32.349741 43 27.072581 43 19 A 1.50015 1.50015 0 0 0 42.984375 18.78125 A 8.5 8.5 0 0 0 34.5 10 z" fill="#000000" />
                        </svg>

                        <div class="swiper-container mil-reviews-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                        <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                        <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                        <p class="mil-text-xl mil-up">This creative agency stands out with their exceptional talent and expertise. Their ability to think outside the box and bring unique ideas to life is truly impressive. With meticulous attention to detail, they consistently deliver visually stunning and impactful work.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                        <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                        <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                        <p class="mil-text-xl mil-up">I had the pleasure of working with this creative agency, and I must say, they truly impressed me. They consistently think outside the box, resulting in impressive and impactful work. I highly recommend this agency for their consistent delivery of exceptional creative solutions.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                        <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                        <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                        <p class="mil-text-xl mil-up">This creative agency stands out with their exceptional talent and expertise. Their ability to think outside the box and bring unique ideas to life is truly impressive. With meticulous attention to detail, they consistently deliver visually stunning and impactful work.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                        <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                        <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                        <p class="mil-text-xl mil-up">I had the pleasure of working with this creative agency, and I must say, they truly impressed me. They consistently think outside the box, resulting in impressive and impactful work. I highly recommend this agency for their consistent delivery of exceptional creative solutions.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                        <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                        <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                        <p class="mil-text-xl mil-up">This creative agency stands out with their exceptional talent and expertise. Their ability to think outside the box and bring unique ideas to life is truly impressive. With meticulous attention to detail, they consistently deliver visually stunning and impactful work.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                        <h5 class="mil-up mil-mb-10">Emma Trueman</h5>
                                        <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                        <p class="mil-text-xl mil-up">I had the pleasure of working with this creative agency, and I must say, they truly impressed me. They consistently think outside the box, resulting in impressive and impactful work. I highly recommend this agency for their consistent delivery of exceptional creative solutions.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="mil-review-frame mil-center" data-swiper-parallax="-200" data-swiper-parallax-opacity="0">
                                        <h5 class="mil-up mil-mb-10">Sarah Newman</h5>
                                        <p class="mil-mb-5 mil-upper mil-up mil-mb-30">Envato market</p>
                                        <p class="mil-text-xl mil-up">This creative agency stands out with their exceptional talent and expertise. Their ability to think outside the box and bring unique ideas to life is truly impressive. With meticulous attention to detail, they consistently deliver visually stunning and impactful work.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- reviews end -->

        <!-- partners -->
        <div class="mil-soft-bg">
            <div class="container mil-p-0-120">

                <div class="swiper-container mil-infinite-show mil-up">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#." class="mil-partner-frame" style="width: 60px;"><img src="img/partners/1.svg" alt="logo"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#." class="mil-partner-frame" style="width: 100px;"><img src="img/partners/2.svg" alt="logo"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#." class="mil-partner-frame" style="width: 60px;"><img src="img/partners/1.svg" alt="logo"></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#." class="mil-partner-frame" style="width: 100px;"><img src="img/partners/2.svg" alt="logo"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- partners end -->


        @include('includes.pentagon')

    </div>
</div>
<!-- content -->

@endsection
