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
            <h3><i class="fa fa-angle-right"></i> Thêm thư viện ảnh</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <div class="form-group">
                            <label class="control-label col-md-2">Tiêu đề</label>
                            <div class="col-md-4">
                                <input type="text" value="{{ $gallery->title }}" name="title" class="form-control" placeholder="Nhập tiêu đề ảnh">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Logo</label>
                            <div class="col-md-4">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{ !empty($web['logo']) ? asset('storage/' . $web['logo']) : 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image' }}" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail"
                                        style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" class="default" name="logo" />
                                        </span>
                                        <a href="javascript:;" class="btn btn-theme04 fileupload-exists"
                                            data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                                <span class="label label-info">NOTE!</span>
                                <span>
                                    Attached image thumbnail is
                                    supported in Latest Firefox, Chrome, Opera,
                                    Safari and Internet Explorer 10 only
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper">
            <button type="submit" class="btn btn-primary btn-pd-lg">Lưu</button>
        </section>
    </form>
@endsection
