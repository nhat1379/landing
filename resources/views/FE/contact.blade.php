@extends('FE.layouts.master')
@section('content')

    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent page-header-contact">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">Liên hệ</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{ route('fe.home') }}">Trang chủ</a></li>
                        <li class="active">Liên hệ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                    <div class="contact-left">
                        <h2>Liên hệ với chúng tôi</h2>
                        <p class="font14">Điền vào biểu mẫu dưới đây để liên hệ với chúng tôi</p>
                        <form action="{{ route('fe.request.store') }}" method="post" class="wpcf7" id="contact-form">
                            @csrf
                            <div class="main-form">
                                <p>
                                    <input type="hidden" name="type" value="contact">
                                    <input type="text" name="name" value="" size="40" class="" aria-invalid="false" placeholder="Your Name *" required>
                                </p>
                                <p>
                                    <input type="email" name="email" value="" size="40" class="" aria-invalid="false" placeholder="Your Email *" required>
                                </p>
                                <p>
                                    <textarea name="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Message..." required></textarea>
                                </p>
                                <p><button type="submit" class="octf-btn">Send Message</button></p>
                            </div>
                        </form>

                        <script>
                            $('#contact-form').on('submit', function(e) {
                                e.preventDefault();

                                let formData = $(this).serialize();

                                $.ajax({
                                    url: $(this).attr('action'),
                                    method: $(this).attr('method'),
                                    data: formData,
                                }).done((res) => {
                                    alert('Đã gửi yêu cầu');
                                }).fail(() => {
                                    alert('Gửi yêu cầu thất bại');
                                })
                            });
                        </script>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-right" style="background-image: none; background: #1A1A1A">
                        <div class="ot-heading">
                            <span>[ Thông tin liên hệ ]</span>
                            <h2 class="main-heading">Liên hệ với chung tôi</h2>
                        </div>
                        {{--<p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>--}}
                        <div class="contact-info">
                            <i class="ot-flaticon-place"></i>
                            <div class="info-text">
                                <h6>Địa chỉ của chúng tôi:</h6>
                                <p>{{ $web['address'] ?? '' }}</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <i class="ot-flaticon-mail"></i>
                            <div class="info-text">
                                <h6>Email của chúng tôi:</h6>
                                <p><a href="javascript:;">{{ $web['email'] ?? '' }}</a></p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <i class="ot-flaticon-phone-call"></i>
                            <div class="info-text">
                                <h6>Số điện thoại: </h6>
                                <p><a href="tel: {{ $web['phone'] ?? '' }}">{{ $web['phone'] ?? '' }}</a></p>
                            </div>
                        </div>
                        <div class="list-social">
                            <ul>
                                @php
                                    $socials = [
                                        'twitter' => 'fa-twitter',
                                        'facebook' => 'fa-facebook-f',
                                        'youtube' => 'fa-youtube',
                                        'instagram' => 'fa-instagram'
                                    ]
                                @endphp

                                @foreach ($socials as $k => $social)
                                    @if (!empty($web[$k]))
                                        <li><a href="{{ $web[$k] }}" target="_self"><i class="fab {{ $social }}"></i></a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
