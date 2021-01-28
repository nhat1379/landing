<section class="banner-4" @if(!empty($home['big_banner_image'])) style="background-image: url({{ asset('storage/' . $home['big_banner_image']) }})" @endif>
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-12">
                <h2>{{ $home['big_banner_title'] ?? 'We Create Powerful & Simple Architecture Solutions' }}</h2>

                <div class="video-popup s-dark flex-middle justify-content-start" style="display: none">
                    <a class="btn-play" href="https://vimeo.com/34741214">
                        <i class="ot-flaticon-play-button"></i>
                    </a>
                    <span class="">showcase</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature-4" style="display: none">
    <div class="container">
        <div class="feature-wrap">
            <div class="feature-item mb-4 mb-lg-0">
                <h6 class="number">01.</h6>
                <p>Urban Commercial Architecture & Design</p>
            </div>
            <div class="feature-item mb-4 mb-lg-0">
                <h6 class="number">02.</h6>
                <p>Successul Architecture Concepts & Ideas</p>
            </div>
            <div class="feature-item">
                <h6 class="number">03.</h6>
                <p>Sustainability. Utility. <br> Visibility.</p>
            </div>
        </div>
    </div>
</section>
