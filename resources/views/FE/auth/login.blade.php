

@extends('FE.layouts.master')
@section('content')

    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent pheader-about" style="background-image: url({{ asset('fe/images/login_bg.jpg') }}); background-size: cover; background-repeat: no-repeat; background-position: center">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">Đăng nhập</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{ route('fe.home') }}">Home</a></li>
                        <li class="active">Đăng nhập</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form method="post" action="{{ route('fe.login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Địa chỉ E-mail</label>
                            <input type="email" name="email" placeholder="Địa chỉ E-mail" id="email" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" name="password" id="password" placeholder="Mật khẩu" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="remember_me" id="remember_me"> <label for="remember_me">Ghi nhớ đăng nhập</label>
                        </div>

                        <button class="btn btn-primary">Đăng nhập</button>

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
