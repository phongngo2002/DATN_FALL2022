@extends('layouts.admin.main')

@section('title_page', 'Danh sách phòng trọ')

@section('content')
    <form action="" class="my-4">
        <div class="row">
            <div class="col-3">
                <input class="form-control" name="name" value="{{ $params['name'] ?? '' }}"
                       placeholder="Tìm kiếm theo tên phòng trọ">
            </div>
            <div class="col-2">
                <select class="form-control" name="order_by">
                    <option value="desc"
                        {{ isset($params['order_by']) && $params['order_by'] == 'desc' ? 'selected' : '' }}>
                        Sắp xếp mới nhất
                    </option>
                    <option value="asc"
                        {{ isset($params['order_by']) && $params['order_by'] == 'asc' ? 'selected' : '' }}>Sắp
                        xếp cũ nhất
                    </option>
                </select>
            </div>
            <div class="col-2 me-5">
                <select class="form-control" name="limit">
                    <option value="" {{ !isset($params['limit']) ? 'selected' : '' }}>Số lượng bản ghi hiển thị
                    </option>
                    <option value="10" {{ isset($params['limit']) && $params['limit'] == '10' ? 'selected' : '' }}>
                        10
                    </option>

                    <option value="25" {{ isset($params['limit']) && $params['limit'] == '25' ? 'selected' : '' }}>
                        25
                    </option>
                    <option value="50" {{ isset($params['limit']) && $params['limit'] == '50' ? 'selected' : '' }}>
                        50
                    </option>
                    <option
                        value="100" {{ isset($params['limit']) && $params['limit'] == '100' ? 'selected' : '' }}>
                        100
                    </option>
                </select>
            </div>
            <div class="col-3 row ms-5">
                <button class="btn btn-primary col-5 me-3">Tìm kiếm</button>
                <a class="btn btn-danger col-5" href="{{route('admin.motel.list',['id' => 1])}}">Bỏ chọn</a>
            </div>
        </div>
    </form>
    <table class="table text-center">
        <thead>
        <tr>
            <th>#</th>
            <th>Room Number</th>
            <th class="">Image 360</th>
            <th class="">Price</th>
            <th>Max people</th>
            <th>Status</th>
            <th class=""><a href="">Thêm mới</a></th>
        </tr>
        </thead>
        <tbody>
        @if(count($motels) === 0)
            <tr>
                <td colspan="7"><span class="text-warning" style="font-size: 16px">Bạn chưa có phòng trọ nào</span>
                </td>
            </tr>
        @else
            @foreach ($motels as $motel)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $motel->room_number }}</td>
                    <td class="">
                        <img src="{{ $motel->image_360 }}" width="200px" alt="">
                    </td>
                    <td class="">{{ $motel->price }}</td>
                    <td class="">{{ $motel->max_people }}</td>
                    <td>
                        @if($motel->status)
                            <span class="badge bg-success p-2">Trống</span>
                        @else
                            <span class="badge bg-danger p-2">Đầy</span>
                        @endif
                    </td>
                    <td class="">
                        <a href="{{ route('admin.motel.detail', [$idCate, $motel->id]) }}" class="btn btn-warning">
                            Sửa
                        </a>
                    </td>
                </tr>
            @endforeach

        @endif
        </tbody>
    </table>
    {{ $motels->links() }}
@endsection
