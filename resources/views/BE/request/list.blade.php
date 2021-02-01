@extends('BE.layouts.master')

@section('content')

    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Yêu cầu khách hàng</h3>

        <div class="row mt">
            <div class="col-lg-12">
                <section class="panel">
                    <div class="panel-body minimal">
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                                <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Tên</th>
                                    <th width="35%">Nội dung</th>
                                    <td>Loại yêu cầu</td>
                                    <td>Ngày tạo</td>
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
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{!! $item->content !!}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->type == 'subscribe' ? 'Subscribe' : 'Liên hệ' }}</td>
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
