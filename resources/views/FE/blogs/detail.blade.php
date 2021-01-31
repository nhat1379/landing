@extends('FE.layouts.master')

@section('content')

<div id="content" class="site-content">
    <div class="page-header dtable text-center header-transparent">
        <div class="dcell">
            <div class="container">
                <h1 class="page-title">{{ $blog->title }}</h1>
                <ul id="breadcrumbs" class="breadcrumbs none-style">
                    <li><a href="{{ route('fe.home') }}">Home</a></li>
                    <li class="active">Blog</li>
                </ul>    
            </div>
        </div>
    </div>
</div>

<div class="entry-content">
    <div class="container">
        <div class="row">
            <div class="content-area col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <article class="blog-post post-box">
                    @if($blog->thumb)
                        <div class="entry-media post-cat-abs">
                            <img src="{{ asset('storage/' . $blog->thumb) }}" alt="">
                            <div class="post-cat">
                                <div class="posted-in"><a href="#">NEW</a></div>
                            </div>
                        </div>
                    @endif

                    <div class="inner-post">
                        <header class="entry-header">
                            <div class="entry-meta">
                                <span class="posted-on">_ <a href="#">{{ date('F j, Y', strtotime($blog->created_at)) }}</a></span>
                                <span class="byline">_ <a class="url fn n" href="#">{{ $blog->author->name }}</a></span>
                                {{-- <span class="comment-num">_ <a href="#">2 Comments</a></span> --}}
                            </div>
                            <h3 class="entry-title">{{ $blog->title }}</h3>
                        </header>
                        <div class="entry-summary the-excerpt">
                            {!! $blog->desc !!}

                            <div style="margin-bottom: 40px"></div>

                            {!! $blog->content !!}
                        </div>
                        <div class="entry-footer clearfix">
                            {{-- <div class="tagcloud">
                                <a href="#" rel="tag">Exterior</a> 
                                <a href="#" rel="tag">Interior</a> 
                                <a href="#" rel="tag">Trends</a>
                            </div>             --}}
                            {{-- <div class="share-post">
                                <a class="twit" target="_blank" href="twitter.com" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a class="face" target="_blank" href="facebook.com" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a class="pint" target="_blank" href="pinterest.com" title="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                                <a class="linked" target="_blank" href="linkedin.com" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            </div>         --}}
                        </div>
                        {{-- <div class="author-bio">
                            <div class="author-image"><img src="https://via.placeholder.com/150x150.png" alt="Tom Black" class="avatar"></div>
                            <div class="author-info">
                                <h5>Tom Black</h5>
                                <p class="des">He is attended the State University of New York at Oswego where he majored in English Literature and Creative Writing.</p>
                                <div class="author-socials"> 
                                    <a href="twitter.com" target="_blank" title="Twitter" class="tooltip"><i class="fab fa-twitter"></i> </a>
                                    <a href="facebook.com" target="_blank" title="Facebook" class="tooltip"><i class="fab fa-facebook-f"></i> </a> 
                                    <a href="linkedin.com" target="_blank" title="LinkedIn" class="tooltip"><i class="fab fa-linkedin-in"></i> </a> 
                                    <a href="instagram.com" target="_blank" title="Instagram" class="tooltip"><i class="fab fa-instagram"></i> </a>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="post-nav clearfix">
                            <div class="post-prev">
                                <a href="#">
                                    <div class="thumb-post-prev"><img src="https://via.placeholder.com/150x150.png" alt=""></div>
                                    <div class="info-post-prev">
                                        <h6><span class="title-link">Incredible Urban Architecture & Landscapes</span></h6>
                                        <span>March 19, 2020</span>
                                    </div>
                                </a>
                            </div>
                            <div class="post-next">
                                <a href="#">
                                    <div class="thumb-post-next"><img src="https://via.placeholder.com/150x150.png" alt=""></div>
                                    <div class="info-post-next">
                                        <h6><span class="title-link">The Golden Ratio Rule for Best 2D Sketch</span></h6>
                                        <span>March 20, 2020</span>
                                    </div>
                                </a>
                            </div>
                        </div> --}}
                        @if (count($relates))
                            <div class="related-posts">
                                <h3>Có thê bạn quan tâm</h3>
                                <div class="row">

                                    @foreach ($relates as $relate)
                                        <div class="col-lg-6 col-md-6">
                                            {!! view('FE.components.blog_single_gird', ['item' => $relate]) !!}
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        @endif
                    </div>
                </article>

                {{-- <div id="comments" class="comments-area">
                    <h3 class="comments-title">Comments <span>(02)</span></h3>
                    <ol class="comment-list">
                        <li class="comment even thread-even comment-item">
                            <article class="comment-wrap clearfix">
                                <div class="gravatar">
                                    <img src="https://via.placeholder.com/80x80.png" alt="Pablo Villalpando" class="avatar">
                                </div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h6 class="comment-author">Liza Benedict</h6>
                                        <span class="comment-time">2 Days ago</span>
                                        <div class="comment-reply"><a class="comment-reply-link" href="#">Reply</a></div>
                                    </div>
                                    <div class="comment-text">
                                        <p>Hi! Very interesting post! I think natural materials is very important in interior design! The minimalism base on the natural materials and alive unprocessed textures — close to nature.</p>
                                    </div>
                                </div>
                            </article>
                        </li>
                    </ol>
                    <ul class="children">
                        <li class="comment odd alt comment-item">
                            <article class="comment-wrap clearfix">
                                <div class="gravatar">
                                    <img src="https://via.placeholder.com/80x80.png" alt="Pablo Villalpando" class="avatar">
                                </div>

                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h6 class="comment-author">Frank Barry</h6>
                                        <span class="comment-time">2 Days ago</span>
                                        <div class="comment-reply"><a class="comment-reply-link" href="#">Reply</a></div>
                                    </div>
                                    <div class="comment-text">
                                        <p>I think natural materials has memory and appreciates to the culture, roots, archetypes.</p>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <!-- #comment-## -->
                    </ul>
                </div> --}}
                {{-- <div class="comment-respond">
                    <h3 class="comment-reply-title">Leave a comment</h3>
                    <form action="contact.php" method="post" class="comment-form">
                        <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                        <div class="row">
                            <p class="comment-form-author col-md-6">
                                <input id="author" name="name" type="text" value="" size="30" placeholder="Name*" required="">
                            </p>
                            <p class="comment-form-email col-md-6">
                                <input id="email" name="email" type="text" value="" size="30" placeholder="Email*" required="">
                            </p>
                        </div>
                        <p class="comment-form-comment">
                            <textarea id="comment" name="message" cols="45" rows="8" placeholder="Comment*" required=""></textarea>
                        </p>
                        <p class="form-submit">
                            <input name="submit" type="submit" id="submit" class="octf-btn" value="Post Comment"> 
                        </p>
                    </form>
                </div> --}}
            </div>
            {{-- <div class="widget-area primary-sidebar col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <aside id="author_widget-1" class="widget engitech_author-widget">
                    <div class="author-widget_wrapper text-center">
                        <div class="author-widget_image-wrapper">
                            <img class="author-widget_image" src="https://via.placeholder.com/150x150.png" alt="Kate Olson">
                        </div>
                        <div class="author-widget_info">
                            <h5 class="author-widget_title">Kate Olson</h5>
                            <p class="author-widget_text">She is the CEO. She's a big fan her cat Tux, & dinner parties.</p>
                            <div class="author-widget_social">
                                <a class="social-twitter" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="social-facebook" href="#"><i class="fab fa-facebook-f"></i></a>  
                                <a class="social-linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </aside>
                <aside id="search-2" class="widget widget_search">
                    <form role="search" method="get" id="search-form" class="search-form">
                        <input type="search" class="search-field" placeholder="Search…" value="" name="s">
                        <button type="submit" class="search-submit"><i class="ot-flaticon-search"></i></button>
                    </form>
                </aside>
                <aside class="widget widget_categories">
                    <h6 class="widget-title">Categories</h6>
                    <ul>
                        <li><a href="#">Design</a> <span class="count">(3)</span></li>
                        <li><a href="#">Development</a> <span class="count">(5)</span></li>
                        <li><a href="#">Startup</a> <span class="count">(1)</span></li>
                        <li><a href="#">Technology</a> <span class="count">(3)</span></li>
                    </ul>
                </aside>
                <aside class="widget widget_recent_news">
                    <h6 class="widget-title">Recent Posts</h6>
                    <ul class="recent-news clearfix">
                        <li class="clearfix"> 
                            <div class="thumb">
                                <a href="post.html"><img src="https://via.placeholder.com/150x150.png" alt=""></a>
                            </div>
                            <div class="entry-header">
                                <h6><a href="post.html">Plan Your Project  with Your Software</a></h6>
                                <span class="post-on"><span class="entry-date">November 21, 2019</span></span>
                            </div>
                        </li>
              
                        <li class="clearfix"> 
                            <div class="thumb">
                                <a href="post.html"><img src="https://via.placeholder.com/150x150.png" alt=""></a>
                            </div>
                            <div class="entry-header">
                                <h6><a href="post.html">You have a Great  Business Idea?</a></h6>
                                <span class="post-on"><span class="entry-date">November 21, 2019</span></span>
                            </div>
                        </li>
              
                        <li class="clearfix"> 
                            <div class="thumb">
                                <a href="post.html"><img src="https://via.placeholder.com/150x150.png" alt=""></a>
                            </div>
                            <div class="entry-header">
                                <h6><a href="post.html">Building Data Analytics  Software</a></h6>
                                <span class="post-on"><span class="entry-date">September 24, 2019</span></span>
                            </div>
                        </li>
                    </ul>
                </aside>
                <aside class="widget widget_tag_cloud">
                    <h6 class="widget-title">Tags</h6>
                    <div class="tagcloud">
                        <a href="#">business</a>
                        <a href="#">marketing</a>
                        <a href="#">SEO</a>
                        <a href="#">SMM</a>
                        <a href="#">solution</a>
                        <a href="#">startup</a>
                        <a href="#">strategy</a>
                        <a href="#">tips</a>
                    </div>
                </aside>
                <aside class="widget widget_media_image text-center">
                    <a href="contact.html"><img src="https://via.placeholder.com/270x330.png" alt=""></a>
                </aside>
            </div> --}}
        </div>
    </div>
</div>

    
@endsection
