@extends('FE.layouts.master')

@section('content')

    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent" style="background: url({{ asset('fe/images/blog_bg.jpg') }});background-repeat:no-repeat;background-size:cover">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">Kết quả tìm kiếm</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{ route('fe.home') }}">Trang chủ</a></li>
                        <li class="active">Tìm kiếm Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="entry-content">
        <div class="container">
            <div class="row">

                @if (!$blogs->count())
                    <h3 class="text-muted">Không tìm thấy kết quả nào cho <span class="text-danger">{{ request()->s }}</span></h3>
                @else
                    <div class="col-md-12">
                        <h3 class="text-muted">Tìm thấy <span class="text-danger">{{ $blogs->total() }}</span> kết quả cho <span class="text-danger">{{ request()->s }}</span></h3>
                    </div>

                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            {!! view('FE.components.blog_single_gird', ['item' => $blog]) !!}
                        </div>
                    @endforeach

                @endif

            </div>

            <div class=row>
                <div class="col-md-12">
                    {!! $blogs->links() !!}
                    {{-- <ul class="page-pagination none-style">
                        <li><a class="prev page-numbers" href="#"><i class="ot-flaticon-left-arrow"></i></a></li>
                        <li><a class="page-numbers" href="#">1</a></li>
                        <li><span aria-current="page" class="page-numbers current">2</span></li>
                        <li><a class="page-numbers" href="#">3</a></li>
                        <li><a class="next page-numbers" href="#"><i class="ot-flaticon-right-arrow"></i></a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>

@endsection
