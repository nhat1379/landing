<footer id="site-footer" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                <div class="widget-footer">
                    @if (!empty($web['logo']))
                    <img src="{{ asset('storage/' . $web['logo']) }}" class="footer-logo" alt="">
                    @endif

                    <p>We provides a full range of interior design, architectural design.</p>
                    <div class="footer-social list-social">
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
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                <div class="widget-footer">
                    <h6>Liên hệ</h6>
                    <ul class="footer-list">
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="ot-flaticon-place"></i></span>
                            <span class="list-item-text">{{ $web['address'] ?? '' }}</span>
                        </li>
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="ot-flaticon-mail"></i></span>
                            <span class="list-item-text">{{ $web['email'] ?? '' }}@mail.com</span>
                        </li>
                        <li class="footer-list-item">
                            <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                            <span class="list-item-text">{{ $web['phone'] ?? '' }}</span>
                        </li>
                    </ul>
                </div>
            </div>
{{--            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">--}}
{{--                <div class="widget-footer widget-contact">--}}
{{--                    <h6>Latest Projects</h6>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Stylish Family Appartment</a></li>--}}
{{--                        <li><a href="#">Modern Villa in Belgium</a></li>--}}
{{--                        <li><a href="#">Private House in Spain</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="widget-footer footer-widget-subcribe">
                    <h6>Subscribe</h6>
                    <form class="mc4wp-form" action={{ route('fe.request.store') }} method="post" id="subcribe-form">
                        @csrf
                        <div class="mc4wp-form-fields">
                            <div class="subscribe-inner-form">
                                <input type="email" name="email" placeholder="Nhập Email của bạn" required>
                                <button type="submit" class="subscribe-btn-icon"><i class="ot-flaticon-send"></i></button>
                            </div>
                        </div>
                    </form>

                    <script>
                        $('#subcribe-form').on('submit', function(e) {
                            e.preventDefault();
                            let formData = $(this).serialize();

                            $.ajax({
                                url: $(this).attr('action'),
                                method: $(this).attr('method'),
                                data: formData
                            }).done(res => {
                                alert('Đã gửi yêu cầu theo dõi');
                                $(this).find('[name="email"]').val('');
                            }).fail(() => {
                                alert('Gửi yêu cầu thất bại');
                            })
                        });
                    </script>

                    <p>Theo dõi chúng tôi để nhận được thông báo cập nhật mới nhất</p>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #site-footer -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                <p>Copyright © 2020 {{ $web['name'] ?? 'COMPANY NAME' }}. All Rights Reserved.</p>
            </div>
           {{-- <div class="col-lg-5 col-md-12 align-self-center">
                <ul class="icon-list-items inline-items justify-content-lg-end">
                    <li class="icon-list-item inline-item">
                        <a href="#"><span class="icon-list-text">Terms of use</span></a>
                    </li>
                    <li class="icon-list-item inline-item">
                        <a href="#"><span class="icon-list-text">Privacy Environmental Policy</span></a>
                    </li>
                </ul>
            </div>--}}
        </div>
    </div>
</div>
