@extends('BE.layouts.master')

@section('content')
   
    @php
        $action = $service->id ? route('be.services.update', ['service' => $service->id ]) : route('be.services.store');
    @endphp

    <form class="form-horizontal style-form" method="POST" action="{{ $action }}" enctype="multipart/form-data">
        @csrf

        @if ($service->id)
            @method('PUT')
        @endif

        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Thêm dịch vụ</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <div class="form-group">
                            <label class="control-label col-md-2">Tiêu đề <sup style="color:red">*</sup></label>
                            <div class="col-md-4">
                                <input type="text" value="{{ $service->title }}" name="title" class="form-control" placeholder="Nhập tiêu đề" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Hình ảnh</label>
                            <div class="col-md-4">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{ $service->thumb ? asset('storage/' . $service->thumb) : 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image' }}" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail"
                                        style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" class="default" name="thumb" />
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

                        <div class="form-group">
                            <label class="control-label col-md-2">Mô tả <sup style="color:red">*</sup></label>
                            <div class="col-md-10">
                                <textarea name="desc" id="desc" rows="10" cols="80" required>{!! $service->desc !!}</textarea>
            
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
                                </script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Mô tả</label>
                            <div class="col-md-4">
                                <select name="status" id="status" class="form-control">
                                    <option value="1">Hoạt động</option>
                                    <option value="0">Không hoạt động</option>
                                </select>
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
