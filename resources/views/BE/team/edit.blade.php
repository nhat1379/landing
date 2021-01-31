@extends('BE.layouts.master')

@section('content')

    @php
        $action = $team->id ? route('be.teams.update', ['team' => $team->id ]) : route('be.teams.store');
    @endphp

    <form class="form-horizontal style-form" method="POST" action="{{ $action }}" enctype="multipart/form-data">
        @csrf

        @if ($team->id)
            @method('PUT')
        @endif

        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Thêm thành viên</h3>

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        @foreach ($fields as $k => $field)
                            <div class="form-group">
                                <label class="control-label col-md-2">{{ $field['label'] }} @if(!empty($field['required'])) <sup style="color: red">*</sup> @endif</label>
                                
                                @switch($field['type'])
                                    @case('textarea')
                                        <div class="col-md-10">
                                            <textarea name="{{ $k }}" id="{{ $k }}" rows="10" cols="80">{{ $team->$k }}</textarea>
                                        </div>
                                        @break

                                    @case('image')
                                        <div class="col-md-4">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="{{ $team->$k ? asset('storage/' . $team->$k) : 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image' }}" alt="" />
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail"
                                                    style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                <div>
                                                    <span class="btn btn-theme02 btn-file">
                                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                        <input type="file" class="default" name="{{ $k }}" @if(!empty($field['required']) && !$team->$k) required @endif/>
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
                                            <input type="{{ $field['type'] }}" value="{{ $team->$k }}" name="{{ $k }}" class="form-control" placeholder="Nhập {{ $field['label'] }}" @if(!empty($field['required'])) required @endif>
                                        </div>
                                @endswitch

                            </div>
                        @endforeach

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
                            CKEDITOR.replace( 'content', ckOpts);
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper">
            <button type="submit" class="btn btn-primary btn-pd-lg">Lưu</button>
        </section>
    </form>
@endsection
