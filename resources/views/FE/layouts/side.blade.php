<div id="side-panel" class="side-panel">
    <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
    <div class="side-panel-block">
        <div class="side-panel-wrap">
            <div class="the-logo">
                <a href="{{ route('fe.home') }}">
                    <img src="{{ asset('fe.images/logo-footer.svg') }}" alt="">
                </a>
            </div>
            <div class="ot-heading">
                <h2 class="main-heading">Our Gallery</h2>
            </div>
            <div class="image-gallery">
                <div id="gallery-1" class="gallery galleryid-102 gallery-columns-3 gallery-size-thumbnail">
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a href="https://via.placeholder.com/1440x830.png">
                                <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                            </a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a href="https://via.placeholder.com/1440x830.png">
                                <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                            </a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a href="https://via.placeholder.com/1440x830.png">
                                <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                            </a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a href="https://via.placeholder.com/1440x830.png">
                                <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                            </a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a href="https://via.placeholder.com/1440x830.png">
                                <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                            </a>
                        </div>
                    </figure>
                    <figure class="gallery-item">
                        <div class="gallery-icon landscape">
                            <a href="https://via.placeholder.com/1440x830.png">
                                <img src="https://via.placeholder.com/150x150.png" class="" alt="">
                            </a>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="ot-heading ">
                <h2 class="main-heading">Thông tin liên hệ</h2>
            </div>
            <div class="side-panel-cinfo">
                <ul class="panel-cinfo">
                    @if (!empty($web['address']))
                        <li class="panel-list-item">
                            <span class="panel-list-icon"><i class="ot-flaticon-place"></i></span>
                            <span class="panel-list-text">{{ $web['address'] }}</span>
                        </li>
                    @endif

                    @if (!empty($web['email']))
                        <li class="panel-list-item">
                            <span class="panel-list-icon"><i class="ot-flaticon-mail"></i></span>
                            <span class="panel-list-text">{{ $web['email'] }}</span>
                        </li>
                    @endif

                    @if (!empty($web['phone']))
                        <li class="panel-list-item">
                            <span class="panel-list-icon"><i class="ot-flaticon-phone-call"></i></span>
                            <span class="panel-list-text">{{ $web['phone'] }}</span>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="side-panel-social">
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
