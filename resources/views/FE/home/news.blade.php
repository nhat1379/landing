@if(count($blogs))

    <section>
        <div class="container">
            <div class="row pb-50">
                <div class="col-lg-8 col-md-12 mb-4 mb-lg-0">
                    <div class="ot-heading is-dots">
                        <span>[ Blog của chúng tôi ]</span>
                        <h2 class="main-heading">Blog mới nhất</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 text-lg-right align-self-center">
                    <div class="ot-button">
                        <a href="javascript:;" class="octf-btn octf-btn-dark border-hover-dark">Xem tất cả</a>
                    </div>
                </div>
            </div>

            @foreach ($blogs as $blog)
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="post-box masonry-post post-item">
                            <div class="post-inner">
                                <div class="entry-media post-cat-abs">
                                    <a href="javascript:;">
                                        <img src="{{ $blog->thumb ? asset('storage/' . $blog->thumb) : 'https://via.placeholder.com/570x484.png' }}" alt="">
                                    </a>
                                    <div class="post-cat">
                                        <div class="posted-in"><a href="#">New</a></div>
                                    </div>
                                </div>
                                <div class="inner-post">
                                    <div class="entry-header">
                                        <div class="entry-meta">
                                            <span class="posted-on"><a href="#">{{ date('F j, Y', strtotime($blog->created_at)) }}</a></span>
                                            <span class="byline">
                                                <span class="author vcard"><a class="url fn n" href="#">{{ 'Aadmin' }}</a></span>
                                            </span>
                                        </div><!-- .entry-meta -->
                                        
                                        <h5 class="entry-title">
                                            <a class="title-link" href="javascript:;">{{ $blog->title }}</a>
                                        </h5>
                                    </div><!-- .entry-header -->

                                    <div class="the-excerpt">
                                        {!! Illuminate\Support\Str::limit($blog->desc, 100, '...') !!}
                                    </div><!-- .entry-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endif