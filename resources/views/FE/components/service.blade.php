@if (count($services))

<section class="services-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center theratio-align-center">
                <div class="ot-heading is-dots">
                    <span>[ Dịch vụ của chúng tôi ]</span>
                </div>
                <div class="space-50"></div>
            </div>
        </div>
        <div class="row justify-content-center">

            @foreach ($services as $service)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="icon-box icon-box--bg-img icon-box--icon-top icon-box--is-line-hover icon-bg-1 bg-classic-transparent text-center mb-30">
                        <div class="icon-main" style="width:60px;height:60px;overflow:hidden;margin:auto;border-radius:50%">
                            <img style="height:100%;width:auto" src="{{ $service->thumb ? asset('storage/' . $service->thumb) : 'https://via.placeholder.com/74x84.png' }}" alt="">
                        </div>
                        <div class="content-box">
                            <h5><a href="servcies-detail-1.html">{{ $service->title }}</a></h5>
                            <p>{!! Illuminate\Support\Str::limit($service->desc, 200, '...') !!}</p>
                        </div>
                        {{-- <div class="link-box">
                            <a href="servcies-detail-1.html" class="btn-details">READ MORE</a>
                        </div> --}}
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

@endif
