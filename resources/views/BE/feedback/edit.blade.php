@extends('BE.layouts.master')

@section('content')
   
    @php
        $action = $feedback->id ? route('be.feedbacks.update', ['feedback' => $feedback->id ]) : route('be.feedbacks.store');
    @endphp

    <form class="form-horizontal style-form" method="POST" action="{{ $action }}" enctype="multipart/form-data">
        @csrf

        @if ($feedback->id)
            @method('PUT')
        @endif

        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Thêm Feedback</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <div class="form-group">
                            <label class="control-label col-md-2">Khách hàng <sup style="color:red">*</sup></label>
                            <div class="col-md-4">
                                <input type="text" value="{{ $feedback->name }}" name="name" class="form-control" placeholder="Nhập tên khách hàng" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Vị trí <sup style="color:red">*</sup></label>
                            <div class="col-md-4">
                                <input type="text" value="{{ $feedback->position }}" name="position" class="form-control" placeholder="Nhập chức vụ của KH" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Nội dung <sup style="color:red">*</sup></label>
                            <div class="col-md-10">
                                <textarea name="content" id="content" rows="10" cols="80" required>{!! $feedback->desc !!}</textarea>
            
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
            
                                    CKEDITOR.replace( 'content', ckOpts);
                                </script>
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
