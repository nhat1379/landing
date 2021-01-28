@extends('BE.layouts.master')

@section('content')

    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Dịch vụ</h3>

        <div class="text-right">
            <a href="{{ route('be.services.create') }}" class="btn btn-primary btn-pd-lg"><i class="fa fa-plus"></i> Thêm</a>
        </div>

        <div class="row mt">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="panel-body minimal">
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                                <thead>
                                    <tr>
                                        <th width="20%">Tiêu đề</th>
                                        <th>Hình ảnh</th>
                                        <th width="35%">Mô tả</th>
                                        <td>Trạng thái</td>
                                        <td>Ngày tạo</td>
                                        <td></td>
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
                                                    <img src="{{ asset('storage/' . $item->thumb) }}" alt="" style="height: 50px">    
                                                </td>
                                                <td>{!! $item->desc !!}</td>
                                                <td>{{ $item->status ? 'Hoạt động' : 'Không hoạt động' }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <a class="btn btn-primary text-white-i" href="{{ route('be.services.edit', ['service' => $item->id]) }}">Sửa</a>
                                                    <form action="{{ route('be.services.destroy', ['service' => $item->id]) }}" method="POST" style="display: inline-block">
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
