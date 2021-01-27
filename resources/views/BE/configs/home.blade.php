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

        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Giới thiệu</h3>
            <i>Được chia làm 3 cột ở trang chủ</i>

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="col-md-4">
                        <textarea name="intro1" id="intro1" rows="10" cols="80">{!! $home['intro1'] ?? '' !!}</textarea>
                    </div>

                    <div class="col-md-4">
                        <textarea name="intro2" id="intro2" rows="10" cols="80">{!! $home['intro2'] ?? '' !!}</textarea>
                    </div>

                    <div class="col-md-4">
                        <textarea name="intro3" id="intro3" rows="10" cols="80">{!! $home['intro3'] ?? '' !!}</textarea>
                    </div>

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
                    </script>
                </div>
            </div>
        </section>

        <section class="wrapper">
            <button type="submit" class="btn btn-primary btn-pd-lg">Lưu</button>
        </section>
    </form>
@endsection
