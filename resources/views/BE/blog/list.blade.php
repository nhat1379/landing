@extends('BE.layouts.master')

@section('content')

    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Danh sách Blog</h3>

        <div class="text-right">
            <a href="{{ route('be.blogs.create') }}" class="btn btn-primary btn-pd-lg"><i class="fa fa-plus"></i> Thêm</a>
        </div>

        <div class="row mt">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="panel-body minimal">
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                                <thead>
                                    <tr>
                                        <th width="15%">Tiêu đề</th>
                                        <th>Ảnh</th>
                                        <th width="40%">Mô tả</th>
                                        <th>Tags</th>
                                        <th>Người tạo</th>
                                        <th>Ngày tạo</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!count($items))
                                        <tr>
                                            <td colspan="6" class="text-center">Không có dữ liệu</td>
                                        </tr>
                                    @else
                                        @foreach ($items as $item) 
                                            <tr>
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $item->thumb) }}" alt="" style="height: 40px">    
                                                </td>
                                                <td>{!! Illuminate\Support\Str::limit($item->desc, 200) !!}</td>
                                                <td>{{ $item->tags }}</td>
                                                <td>{{ $item->created_by }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <a class="btn btn-primary text-white-i" href="{{ route('be.blogs.edit', ['blog' => $item->id]) }}">Sửa</a>
                                                    <form action="{{ route('be.blogs.destroy', ['blog' => $item->id]) }}" method="POST" style="display: inline-block">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-danger text-white-i">Xóa</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

@endsection
