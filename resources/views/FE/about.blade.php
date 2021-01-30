@extends('FE.layouts.master')
@section('content')

    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent pheader-about">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">About Us</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{ route('fe.home') }}">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="about-company">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 align-self-center text-center mb-5 mb-lg-0">
                    <div class="about-img">
                        <img src="https://via.placeholder.com/623x570.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 align-self-center">
                    <div class="about-detail">
                        <div class="ot-heading is-dots">
                            <span>[ about company ]</span>
                            <h2 class="main-heading">Best Interior Solutions</h2>
                        </div>
                        <p>The basic philosophy of our studio is to create individual, aesthetically stunning solutions for our customers by lightning-fast development of projects employing unique styles and architecture. Even if you don’t have a ready sketch of what you want – we will help you to get the result you dreamed of.</p>
                        <div class="ot-button">
                            <a href="portfolio-masonry.html" class="octf-btn octf-btn-dark border-hover-dark">View Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-philosophy" style="background-image: none; background: wheat">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 theratio-align-center text-center">
                    <div class="ot-heading is-dots">
                        <span>[ company strategy ]</span>
                        <h2 class="main-heading text-light">Our Philosophy</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5 mb-xl-0">
                    <div class="support-box">
                        <div class="inner-box">
                            <div class="overlay flex-middle">
                                <div class="inner">
                                    <p>We call our style ‘live minimalism’. Live minimalism is not about a or visual look. It refers to inner feelings, to your true self.</p>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="icon-title">
                                    <span class="ot-flaticon-brickwall"></span>
                                    <h5>Our Missions</h5>
                                </div>
                                <img src="https://via.placeholder.com/750x628.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-5 mb-xl-0">
                    <div class="support-box">
                        <div class="inner-box">
                            <div class="overlay flex-middle">
                                <div class="inner">
                                    <p>We call our style ‘live minimalism’. Live minimalism is not about a or visual look. It refers to inner feelings, to your true self.</p>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="icon-title">
                                    <span class="ot-flaticon-paint"></span>
                                    <h5>Our Vision</h5>
                                </div>
                                <img src="https://via.placeholder.com/750x628.png" class="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="support-box">
                        <div class="inner-box">
                            <div class="overlay flex-middle">
                                <div class="inner">
                                    <p>We call our style ‘live minimalism’. Live minimalism is not about a or visual look. It refers to inner feelings, to your true self.</p>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="icon-title">
                                    <span class="ot-flaticon-cube"></span>
                                    <h5>Our Values</h5>
                                </div>
                                <img src="https://via.placeholder.com/750x628.png" class="attachment-full size-full lazyloaded" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('FE.components.statistical')

    {{--    @include('FE.layouts.component.faq')--}}

    @include('FE.components.team')

    <section class="about-testi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center theratio-align-center">
                    <div class="ot-heading is-dots">
                        <span>[ testimonials ]</span>
                        <h2 class="main-heading">What People Say</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ot-testimonials v-light">
                        <div class="testimonial-inner testi-col-3 owl-theme owl-carousel">
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    <span></span>
                                    "You will never fake the feeling of being in such a place. The live minimalism base on the natural materials & alive unprocessed."
                                </div>
                                <div class="t-head flex-middle">
                                    <img src="https://via.placeholder.com/80x80.png" alt="">
                                    <div class="tinfo">
                                        <h6>Anna Paulina</h6>
                                        <span>Client of Company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    <span></span>
                                    "You will never fake the feeling of being in such a place. The live minimalism base on the natural materials & alive unprocessed."
                                </div>
                                <div class="t-head flex-middle">
                                    <img src="https://via.placeholder.com/80x80.png" alt="">
                                    <div class="tinfo">
                                        <h6>Pablo Gusterio</h6>
                                        <span>Client of Company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    <span></span>
                                    "You will never fake the feeling of being in such a place. The live minimalism base on the natural materials & alive unprocessed."
                                </div>
                                <div class="t-head flex-middle">
                                    <img src="https://via.placeholder.com/80x80.png" alt="">
                                    <div class="tinfo">
                                        <h6>Kristina Lee</h6>
                                        <span>Client of Company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    <span></span>
                                    "You will never fake the feeling of being in such a place. The live minimalism base on the natural materials & alive unprocessed."
                                </div>
                                <div class="t-head flex-middle">
                                    <img src="https://via.placeholder.com/80x80.png" alt="">
                                    <div class="tinfo">
                                        <h6>Anna Paulina</h6>
                                        <span>Client of Company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    <span></span>
                                    "You will never fake the feeling of being in such a place. The live minimalism base on the natural materials & alive unprocessed."
                                </div>
                                <div class="t-head flex-middle">
                                    <img src="https://via.placeholder.com/80x80.png" alt="">
                                    <div class="tinfo">
                                        <h6>Pablo Gusterio</h6>
                                        <span>Client of Company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testi-item">
                                <div class="ttext">
                                    <div class="layer-behind"></div>
                                    <span></span>
                                    "You will never fake the feeling of being in such a place. The live minimalism base on the natural materials & alive unprocessed."
                                </div>
                                <div class="t-head flex-middle">
                                    <img src="https://via.placeholder.com/80x80.png" alt="">
                                    <div class="tinfo">
                                        <h6>Kristina Lee</h6>
                                        <span>Client of Company</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
