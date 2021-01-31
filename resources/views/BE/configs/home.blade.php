@extends('BE.layouts.master')

@section('content')

    <form class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
        @csrf
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Banner Trang chủ</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <div class="form-group">
                            <label class="control-label col-md-2">Tiêu đề</label>
                            <div class="col-md-4">
                                <input type="text" value="{{ $home['big_banner_title'] ?? '' }}" name="big_banner_title" class="form-control" placeholder="Tiêu đề">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6">
                                <label class="upload-banner" for="big_banner_image">
                                    <input type="file" name="big_banner_image" id="big_banner_image" class="d-none" onchange="imgUploadPreview(this)">
                                    <div class="preview">
                                        @if(!empty($home['big_banner_image']))
                                            <img src="{{ asset('storage/' . $home['big_banner_image']) }}" alt="" class="upload-banner-preview">                                    
                                        @endif
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper" style="margin-top: 0">
            <h3><i class="fa fa-angle-right"></i> Giới thiệu</h3>
            <i>Được chia làm 3 cột ở trang chủ</i>

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="col-md-4" style="padding-left: 0">
                        <textarea name="intro1" id="intro1" rows="10" cols="80">{!! $home['intro1'] ?? '' !!}</textarea>
                    </div>

                    <div class="col-md-4" style="padding: 0">
                        <textarea name="intro2" id="intro2" rows="10" cols="80">{!! $home['intro2'] ?? '' !!}</textarea>
                    </div>

                    <div class="col-md-4" style="padding-right: 0">
                        <textarea name="intro3" id="intro3" rows="10" cols="80">{!! $home['intro3'] ?? '' !!}</textarea>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper" style="margin-top: 0">
            <h3><i class="fa fa-angle-right"></i> Về chúng tôi</h3>
            <i>Thông tin ở menu "Về chúng tôi"</i>

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <div class="form-group">
                            <label class="control-label col-md-2">Hình ảnh</label>
                            <div class="col-md-4">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{ !empty($web['about_image']) ? asset('storage/' . $web['about_image']) : 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image' }}" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail"
                                        style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" class="default" name="about_image" />
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
                            <label class="control-label col-md-2">Về chúng tôi</label>
                            <div class="col-md-12">
                                <textarea name="about_desc" id="about_desc" rows="10" cols="80">{!! $home['about_desc'] ?? '' !!}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="wrapper" style="margin-top: 0">
            <button type="submit" class="btn btn-primary btn-pd-lg">Lưu</button>
        </section>
    </form>

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

        CKEDITOR.replace( 'intro1', ckOpts);
        CKEDITOR.replace( 'intro2', ckOpts);
        CKEDITOR.replace( 'intro3', ckOpts);
        CKEDITOR.replace( 'about_desc', ckOpts);
    </script>
@endsection
