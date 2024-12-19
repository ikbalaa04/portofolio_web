@extends('layout.app')
@section('title','FrontEnd Developer')

@section('content')

    <!-- content -->
    <div class="mil-content">
        <div id="swupMain" class="mil-main-transition">

            <!-- banner -->
            <section class="mil-banner-personal">

                <div class="mil-animation-frame">
                    <div class="mil-animation mil-position-4 mil-dark mil-scale" data-value-1="7" data-value-2="1.4" style="right: 25%"></div>
                </div>

                <div class="container mt-5">
                    <div class="mil-banner-content mil-up">

                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="mil-personal-text">
                                    <p class="mil-mb-60">Hello! I'am <b>Ikbal Abdul Aziz</b></p>
                                    <h1 class="mil-mb-60">FrontEnd <br>Developer</h1>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">

                                            <span class="mil-suptitle mil-suptitle-dark mil-mb-60">Passionately Creating Design Wonders: <br>Unleashing Boundless Creativity</span>

                                            <a href="#" class="mil-link mil-dark mil-arrow-place">
                                                <span>More about me</span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mil-portrait-frame">
                                    <img src="{{ asset('assets/img/faces/large/ikbalaa.png') }}" alt="Portrait" height="100%">
                                </div>
                            </div>
                        </div>

                        <div class="mil-banner-panel">
                            <h5>Designing a Better World Today</h5>

                            <div class="mil-right">
                                <div class="mil-social-frame">
                                    <ul class="mil-social-icons mil-dark">
                                        <li><a type="button" class="social-icon" data-bs-placement="top" href="#" target="_blank" title="download CV"><i class="fas fa-file-download fa-lg"></i></a></li>
                                        <li><a type="button" class="social-icon" data-bs-placement="top" href="#" target="_blank" title="Github"><i class="fab fa-github fa-lg"></i></a></li>
                                        <li><a type="button" class="social-icon" data-bs-placement="top" href="#" target="_blank" title="Instagram"><i class="fab fa-instagram fa-lg"></i></a></li>
                                        <li><a type="button" class="social-icon" data-bs-placement="top" href="https://www.linkedin.com/in/ikbal-abdul-aziz-25255024b" target="_blank" title="Linkedin"><i class="fab fa-linkedin fa-lg"></i></a></li>
                                    </ul>
                                </div>
                                <a href="{{ route('portfolio') }}" class="mil-button mil-arrow-place">
                                    <span>View portfolio</span>
                                </a>
                            </div>


                        </div>

                    </div>
                </div>

            </section>
            <!-- banner end -->

            @include('includes.pentagon')

        </div>
    </div>
    <!-- content -->

@endsection
