@extends('FE.layouts.master')
@section('content')

    <div id="content" class="site-content">
        <div class="page-header dtable text-center header-transparent page-header-contact">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">Đăng ký shop</h1>
                    <ul id="breadcrumbs" class="breadcrumbs none-style">
                        <li><a href="{{ route('fe.home') }}">Trang chủ</a></li>
                        <li class="active">Đăng ký shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="register-shop-page">
        <div class="container">
        
            <form action="{{ route('fe.shop.register.store') }}" method="post" enctype="multipart/form-data" id="shop-register-form">
                @csrf
                @foreach ($fields as $k => $field)
                    <div class="form-group row">
                        <label for="{{ $k }}" class="col-sm-2 col-form-label">{{ $field['label'] }} @if(!empty($field['required'])) <sup style="color: red">*</sup> @endif</label>
                        
                        @switch($field['type'])
                            @case('textarea')
                                <div class="col-md-10">
                                    <textarea name="{{ $k }}" id="{{ $k }}" rows="10" cols="80"></textarea>
                                </div>
                                @break
    
                            @case('image')
                                <div class="col-md-4">
                                    <input type="file" class="default" id={{ $k }} name="{{ $k }}" @if(!empty($field['required'])) required @endif/>
                                </div>
                                @break
    
                            @case('select')
                                <div class="col-md-4">
                                    <select name="{{ $k }}" id="{{ $k }}" class="form-control">
                                        @foreach ($field['items'] as $option)
                                            <option value="{{ $option['id'] }}">{{ $option['label'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @break
    
                            @default
                                <div class="col-md-4">
                                    <input type="{{ $field['type'] }}" value="" name="{{ $k }}" id={{ $k }} class="form-control" placeholder="Nhập {{ $field['label'] }}" @if(!empty($field['required'])) required @endif>
                                </div>
                        @endswitch
                    </div>
                @endforeach
    
                <button class="btn btn-primary mt-5 px-5">Đăng ký</button>
            </form>
    
        </div>
    </section>

    <script>
        let ckOpts = {
            language: 'vi',
            toolbarGroups: [
                { "name": "basicstyles", "groups": ["basicstyles"] },
                { "name": "links", "groups": ["links"] },
                { "name": "paragraph", "groups": ["list", "blocks"] },
                { "name": "document", "groups": ["mode"] },
                { "name": "insert", "groups": ["insert"] },
                { "name": "styles", "groups": ["styles"] },
            ],
        }

        CKEDITOR.replace( 'desc', ckOpts);
        CKEDITOR.replace( 'branches', ckOpts);
    </script>

    <style>
        #shop-register-form {
            border: 1px solid #ccc;
            padding: 30px;
        }
        .form-control {
            border: 1px solid #ced4da !important;
        }
    </style>

@endsection