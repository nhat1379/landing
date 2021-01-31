@extends('BE.layouts.master')

@section('content')

    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Danh sách Thành viên</h3>

        <div class="text-right">
            <a href="{{ route('be.teams.create') }}" class="btn btn-primary btn-pd-lg"><i class="fa fa-plus"></i> Thêm</a>
        </div>

        <div class="row mt">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="panel-body minimal">
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                                <thead>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th width="30%">Tên nhân viên</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Chức vụ</th>
                                        <th>Phòng ban</th>
                                        <th>Trạng thái</th>
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
                                                <td>
                                                    <img src="{{ asset('storage/' . $item->avatar) }}" alt="" style="height: 40px">
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->position }}</td>
                                                <td>{{ $item->department }}</td>
                                                <td>{{ $item->status ? 'Hoạt động' : 'Không hoạt động' }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <a class="btn btn-primary text-white-i" href="{{ route('be.teams.edit', ['team' => $item->id]) }}">Sửa</a>
                                                    <form action="{{ route('be.teams.destroy', ['team' => $item->id]) }}" method="POST" style="display: inline-block">
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
