<div id="side-panel" class="side-panel">
    <a href="#" class="side-panel-close"><i class="ot-flaticon-close-1"></i></a>
    <div class="side-panel-block">
        <div class="side-panel-wrap">
            <div class="the-logo">
                <a href="{{ route('fe.home') }}">
                    <img src="{{ asset('fe.images/logo-footer.svg') }}" alt="">
                </a>
            </div>
            @if (count($galleries))
                <div class="ot-heading">
                    <h2 class="main-heading">Our Gallery</h2>
                </div>

                <div class="image-gallery">
                    <div id="gallery-1" class="gallery galleryid-102 gallery-columns-3 gallery-size-thumbnail">
                        <div class="row" id="side-gallery">
                            @foreach ($galleries as $gallery)
                                @php
                                    $link = $gallery->is_example ? $gallery->image : asset('storage/' . $gallery->image);
                                @endphp

                                <figure class=" col-4">
                                    <div class="gallery-icon landscape">
                                        <a href="{{ $link }}">
                                            <img src="{{ $link }}" class="" alt="">
                                        </a>
                                    </div>
                                </figure>

                            @endforeach
                        </div>


                    </div>
                </div>

                <style>
                    .gallery.galleryid-102.gallery-columns-3.gallery-size-thumbnail {
                        display: block;
                    }
                    #gallery-1 {
                        transform: translateX(-10px);
                    }
                    #side-gallery {
                        margin-left: 5px;
                        margin-right: 5px;
                    }
                    #side-gallery .col-4 {
                        padding-left: 5px;
                        padding-right: 5px;
                    }
                    #side-gallery .gallery-icon {
                        width: 100%;
                        padding-bottom: 100%;
                        position: relative;
                        overflow: hidden;
                    }
                    #side-gallery .gallery-icon a{
                        position: absolute;
                        height: 100%;
                        width: 100%;
                    }
                    #side-gallery .gallery-icon img{
                        object-fit: cover;
                        height: 100%;
                        width: 100%;
                    }
                </style>
            @endif

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
