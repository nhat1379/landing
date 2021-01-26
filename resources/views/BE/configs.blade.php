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
            <h3><i class="fa fa-angle-right"></i> Thông tin chung</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
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
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists"
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

                        <div class="form-group">
                            <label class="control-label col-md-2">Tên</label>
                            <div class="col-md-4">
                                <input type="text" value="{{ $web['name'] ?? '' }}" name="name" class="form-control" placeholder="Nhập tên Website">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Số điện thoại</label>
                            <div class="col-md-4">
                                <input type="text" value="{{ $web['phone'] ?? '' }}" name="phone" class="form-control"
                                    placeholder="Nhập số điện thoại">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Địa chỉ</label>
                            <div class="col-md-4">
                                <input type="text" value="{{ $web['address'] ?? '' }}" name="address" class="form-control" placeholder="Nhập địa chỉ">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">E-mail</label>
                            <div class="col-md-4">
                                <input type="text" value="{{ $web['email'] ?? '' }}" name="email" class="form-control"
                                    placeholder="Nhập địa chỉ E-mail">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Mạng xã hội</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">

                        <div class="form-group">
                            <label class="control-label col-md-2">Twitter</label>
                            <div class="col-md-4">
                                <input type="text" value="{{ $web['twitter'] ?? '' }}" name="twitter" class="form-control" placeholder="Twitter">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Facebook</label>
                            <div class="col-md-4">
                                <input type="text" value="{{ $web['facebook'] ?? '' }}" name="facebook" class="form-control" placeholder="Facebook">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Youtube</label>
                            <div class="col-md-4">
                                <input type="text" value="{{ $web['youtube'] ?? '' }}" name="youtube" class="form-control" placeholder="Youtube">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Instagram</label>
                            <div class="col-md-4">
                                <input type="text" value="{{ $web['instagram'] ?? '' }}" name="instagram" class="form-control" placeholder="Instagram">
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
