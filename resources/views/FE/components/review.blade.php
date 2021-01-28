@if ($feedbacks)

<section class="testi-4 p-md-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-12 px-xl-0">
                <div class="testi-img-3 text-center" style="height: 100%;position:relative;">
                    <img src="{{ asset('fe/images/feedbacks.png') }}" alt="" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)">
                    <div class="space-40 d-block d-md-none"></div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 px-xl-0 mb-5 mb-xl-0 align-self-center">
                <div class="testi-slide-block-4">
                    <div class="ot-heading is-dots">
                        <span>[ Feedbacks ]</span>
                        <h2 class="main-heading">Khách hàng nói gì về chúng tôi</h2>
                    </div>
                    <div class="space-20"></div>
                    <div class="space-5"></div>
                    <div class="ot-testimonials v-light">
                        <div class="testimonials-slide-2 s2 ot-testimonials-slider-s2 owl-theme owl-carousel">

                            @foreach ($feedbacks as $feedback)
                                <div class="testi-item">
                                    <div class="ttext">
                                        {!! $feedback->content !!}
                                    </div>
                                    <div class="t-head flex-middle">
                                        <div class="tinfo">
                                            <h5>{{ $feedback->name }}</h5>
                                            <span>{{ $feedback->position }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endif