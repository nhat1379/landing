@if (count($teams))
    <style>
        .owl-carousel .owl-stage {
            margin: auto
        }
    </style>
    <section class="about-team">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="ot-heading is-dots">
                        <span>[ our professionals ]</span>
                        <h2 class="main-heading">Thành viên của chúng tôi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-slider owl-theme owl-carousel">
                    @foreach ($teams as $team)
                        <div class="team-item">
                            <div class="team-wrap">
                                <div class="team-thumb">
                                    <img src="{{ $team->avatar ? asset('storage/' . $team->avatar) : 'https://via.placeholder.com/750x977.png' }}" alt="{{ $team->name }}">
                                </div>
                                <div class="team-text-overlay">
                                    <div class="team-info dtable">
                                        <div class="dcell">
                                            <h4 class="m_name">{{ $team->name }}</h4>
                                            <div class="team-social flex-middle">
                                                <span class="ot-flaticon-add"></span>
                                                @php
                                                    $socials = [
                                                        'twitter' => 'fa-twitter',
                                                        'facebook' => 'fa-facebook-f',
                                                        'youtube' => 'fa-youtube',
                                                        'instagram' => 'fa-instagram'
                                                    ]
                                                @endphp
                
                                                @foreach ($socials as $k => $social)
                                                    @if (!empty($team[$k]))
                                                        <a href="{{ $team[$k] }}"><i class="fab {{ $social }}"></i></a>
                                                    @endif
                                                @endforeach
                                            </div>  
                                        </div>
                                        <div class="m_extra">
                                            <span>[ {{ $team->position }} ]</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif