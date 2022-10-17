@extends('layouts.admin.main')


@section('title_page','Lịch sử đặt cọc phòng trọ')

@section('content')
    <form action="" class="my-4">
        <div class="row">
            <div class="col-5">
                <input class="form-control" name="name"
                       value="{{isset($params['name']) && $params['name'] ? $params['name'] : ''}}"
                       placeholder="Tìm kiếm theo tên khu trọ,tên người đặt cọc">

            </div>
            <div class="col-2">
                <select class="form-control" name="order_by">
                    <option
                        value="desc" {{ isset($params['order_by']) && $params['order_by'] == 'desc' ? 'selected' : ''}}>
                        Sắp xếp mới nhất
                    </option>
                    <option
                        value="asc" {{isset($params['order_by']) && $params['order_by'] == 'asc' ? 'selected' : ''}}>Sắp
                        xếp cũ nhất
                    </option>
                </select>
            </div>
            <div class="col-2">
                <select class="form-control" name="limit">
                    <option value="" {{ !isset($params['limit']) ? 'selected' : ''}}>Số lượng bản ghi hiển thị</option>
                    <option value="10" {{ isset($params['limit']) && $params['limit'] == '10' ? 'selected' : ''}}>10
                    </option>

                    <option value="25" {{ isset($params['limit']) && $params['limit'] == '25' ? 'selected' : ''}}>25
                    </option>
                    <option value="50" {{ isset($params['limit']) && $params['limit'] == '50' ? 'selected' : ''}}>50
                    </option>
                    <option value="100" {{ isset($params['limit']) && $params['limit'] == '100' ? 'selected' : ''}}>
                        100
                    </option>
                </select>
            </div>
            <div class="col-2">
                <button class="btn btn-primary">Tìm kiếm</button>
                <a class="btn btn-danger" href="{{route('backend_get_list_deposit')}}">Bỏ chọn</a>
            </div>
        </div>
    </form>
    <table class="table text-center">
        <thead>
        <tr>
            <th>#</th>
            <th>Người đặt cọc</th>
            <th>Tiền cọc</th>
            <th>Mã phòng</th>
            <th>Khu trọ</th>
            <th>Thời gian</th>
            <th>Trạng thái</th>
        </tr>
        </thead>
        <tbody>
        @foreach($deposits as $deposit)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{!! isset($params['name']) ? str_replace($params['name'],'<span class="bg-warning">'.$params['name'].'</span>',$deposit->userName) : $deposit->userName!!}</td>
                <td>{{$deposit->value}}</td>
                <td>{{$deposit->room_number}}</td>
                <td>{!!isset($params['name']) ? str_replace($params['name'],'<span class="bg-warning">'.$params['name'].'</span>',$deposit->areaName) :  $deposit->areaName !!}</td>
                <td>
                    {{\Carbon\Carbon::parse($deposit->date)->format('d/m/Y H:i:s')}}
                </td>
                <td>
                    @if($deposit->deStatus == 0)
                        <span class="badge text-bg-secondary p-2">Chờ ký hợp đồng</span>
                    @elseif($deposit->deStatus == 1)
                        <span class="badge text-bg-primary p-2">Đã ký hợp đồng</span>
                    @else
                        <span class="badge text-bg-success p-2">Đã chuyển tiền</span>
                    @endif
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$deposits->links()}}
@endsection
