@extends('BE.layouts.master')

@section('content')

    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Feedback</h3>

        <div class="text-right">
            <a href="{{ route('be.feedbacks.create') }}" class="btn btn-primary btn-pd-lg"><i class="fa fa-plus"></i> Thêm</a>
        </div>

        <div class="row mt">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="panel-body minimal">
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                                <thead>
                                    <tr>
                                        <th width="20%">Khách hàng</th>
                                        <th width="15%">Vị trí</th>
                                        <th width="40%">Nội dung</th>
                                        <td>Ngày tạo</td>
                                        <td></td>
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
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->position }}</td>
                                                <td>{!! $item->content !!}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <a class="btn btn-primary text-white-i" href="{{ route('be.feedbacks.edit', ['feedback' => $item->id]) }}">Sửa</a>
                                                    <form action="{{ route('be.feedbacks.destroy', ['feedback' => $item->id]) }}" method="POST" style="display: inline-block">
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
