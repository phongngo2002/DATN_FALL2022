@extends('layouts.admin.main')


@section('title_page', 'Danh sách hóa đơn')

@section('content')
    @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Đóng</span>
            </button>
        </div>
    @endif

    <div class="bg-white shadow-lg p-4 rounded-4">
        <form action="">
            <div class="row">
                <div class="col-3 form-group">
                    <select name="area_id" id="" class="form-control">
                        <option value="">Lựa chọn khu trọ</option>
                    </select>
                </div>
                <div class="col-2 form-group">
                    <select name="room_number" id="" class="form-control">
                        <option value="">Lựa chọn mã phòng</option>
                    </select>
                </div>
                <div class="col-2 form-group">
                    <select name="year" id="" class="form-control">
                        <option value="">Lựa chọn năm</option>
                    </select>
                </div>
                <div class="col-2 form-group">
                    <select name="month" id="" class="form-control">
                        <option value="">Lựa chọn tháng</option>
                    </select>
                </div>
                <div class="col-3">
                    <button class="btn btn-primary">Tìm kiếm</button>
                    <button class="btn btn-danger" type="button" onclick="document.location.reload()">Bỏ chọn</button>
                </div>
            </div>
        </form>
        <table class="table text-center">
            <thead>
            <tr>
                <th>#</th>
                <th>Khu trọ</th>
                <th>Mã phòng</th>
                <th>Tiền phòng</th>
                <th>Tiền điện</th>
                <th>Tiền nước</th>
                <th>Tiền mạng</th>
                <th>Tổng thu</th>
                <th>Ngày làm hóa đơn</th>
                <th>Trạng thái</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->room_number}}</td>
                    <td>{{number_format($item->price, 0, ',', '.')}} đ</td>
                    <td>{{number_format($item->tien_dien, 0, ',', '.')}} đ</td>
                    <td>{{number_format($item->tien_nuoc, 0, ',', '.')}} đ</td>
                    <td>{{number_format($item->wifi, 0, ',', '.')}} đ</td>
                    <td>{{number_format($item->tong, 0, ',', '.')}} đ</td>
                    <td>{{\Carbon\Carbon::parse($item->created_at)->format('h:i d/m/Y')}}</td>
                    <td>
                        @if($item->status)
                            <span class="badge bg-success p-2 text-xl">Đã thu</span>
                        @else
                            <button class="badge bg-danger p-2 text-xl border-0" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{$item->room_number}}">Chưa thu
                            </button>
                            <div class="modal fade" id="exampleModal{{$item->room_number}}" tabindex="-1"
                                 aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{route('backend_confirm_bill')}}" method="POST">
                                            @csrf
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận đã thu tiền trọ</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn có chắc muốn thay đổi trạng thái hóa đơn sang đã thu ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>

                                                <button type="submit" name="bill_id" value="{{$item->bill_id}}" class="btn btn-primary">
                                                    Đồng ý
                                                </button>

                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        @endif
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

@endsection
