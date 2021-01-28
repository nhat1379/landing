@extends('BE.layouts.master')

@section('content')
    @if (session('success_notify'))
        <div class="alert alert-success">
            {!! session('success_notify') !!}
        </div>
    @endif

    <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
        @csrf
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Menu Trang chủ</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">



                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper">
            <button type="submit" class="btn btn-primary btn-pd-lg">Lưu</button>
        </section>
    </form>
@endsection
