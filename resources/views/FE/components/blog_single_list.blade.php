<div class="post-box masonry-post post-item">
    <div class="post-inner">
        <div class="entry-media post-cat-abs">
            <a href="{{ route('fe.blog.detail', ['id' => $item->id]) }}">
                <img src="{{ $item->thumb ? asset('storage/' . $item->thumb) : 'https://via.placeholder.com/570x484.png' }}" alt="">
            </a>
            <div class="post-cat">
                <div class="posted-in"><a href="#">New</a></div>
            </div>
        </div>
        <div class="inner-post">
            <div class="entry-header">
                <div class="entry-meta">
                    <span class="posted-on"><a href="#">{{ date('F j, Y', strtotime($item->created_at)) }}</a></span>
                    <span class="byline">
                        <span class="author vcard">
                            <a class="url fn n" href="javascript:;">{{ $item->author->name }}</a>
                        </span>
                    </span>
                </div>

                <h5 class="entry-title">
                    <a class="title-link" href="{{ route('fe.blog.detail', ['id' => $item->id]) }}">{{ $item->title }}</a>
                </h5>
            </div>

            <div class="the-excerpt">
                {!! Illuminate\Support\Str::limit($item->desc, 100, '...') !!}
            </div>
        </div>
    </div>
</div>
