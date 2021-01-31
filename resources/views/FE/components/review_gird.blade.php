@if (count($feedbacks))

    <section class="about-testi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center theratio-align-center">
                    <div class="ot-heading is-dots">
                        <span>[ FEEDBACKS ]</span>
                        <h2 class="main-heading">Khách hàng nói gì về chúng tôi</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ot-testimonials v-light">
                        <div class="testimonial-inner testi-col-3 owl-theme owl-carousel">
                            @foreach ($feedbacks as $feedback)
                                <div class="testi-item">
                                    <div class="ttext">
                                        <div class="layer-behind"></div>
                                        {!! $feedback->content !!}
                                    </div>
                                    <div class="t-head flex-middle">
                                        <div class="tinfo">
                                            <h6>{{ $feedback->name }}</h6>
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
    </section>

@endif
