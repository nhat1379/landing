@extends('BE.layouts.master')

@section('content')

    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Thư viện ảnh</h3>

        <div class="text-right">
            <a href="{{ route('be.galleries.create') }}" class="btn btn-primary btn-pd-lg"><i class="fa fa-plus"></i> Thêm</a>
        </div>

        <div class="row mt">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="panel-body minimal">
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                                <thead>
                                    <tr>
                                        <th width="30%">Tiêu đề</th>
                                        <th width="10%">Ảnh</th>
                                        <td width="15%">Trạng thái</td>
                                        <td width="15%">Feature</td>
                                        <td width="15%">Ngày tạo</td>
                                        <td width="15%"></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!count($items))
                                        <tr>
                                            <td colspan="5" class="text-center">Không có dữ liệu</td>
                                        </tr>
                                    @else
                                        @foreach ($items as $item) 
                                            <tr>
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $item->image) }}" alt="" style="height: 50px">    
                                                </td>
                                                <td>{{ $item->status }}</td>
                                                <td>{{ $item->is_feature }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <a class="btn btn-primary text-white-i" href="{{ route('be.galleries.edit', ['gallery' => $item->id]) }}">Sửa</a>
                                                    <form action="{{ route('be.galleries.destroy', ['gallery' => $item->id]) }}" method="POST" style="display: inline-block">
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
