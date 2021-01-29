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
                        <a href="{{ route('fe.blog.list') }}" class="octf-btn octf-btn-dark border-hover-dark">Xem tất cả</a>
                    </div>
                </div>
            </div>

            @foreach ($blogs as $blog)
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        {!! view('FE.components.blog_single_gird', ['item' => $blog]) !!}
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endif
