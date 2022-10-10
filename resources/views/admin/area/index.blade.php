@extends('layouts.admin.main')


@section('title_page','Danh sách khu trọ')

@section('content')
    <form action="">
        <div class="row">
            <div class="col-3">
                <input class="form-control" name="name"
                       value="{{$params['name'] ?? ''}}"
                       placeholder="Tìm kiếm theo tên khu trọ">

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
                <a class="btn btn-danger" href="{{route('backend_get_list_area')}}">Bỏ chọn</a>
            </div>
        </div>
    </form>
    <table class="table text-center">
        <thead>
        <tr>
            <th>#</th>
            <th>Tên khu trọ</th>
            <th>Địa chỉ</th>
            <th>Chức năng</th>
        </tr>
        </thead>
        <tbody>
        @foreach($areas as $area)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{!! isset($params['name']) ? str_replace($params['name'],'<span class="bg-warning">'.$params['name'].'</span>',$area->name) :  $area->name!!}</td>
                <td>{{$area->address}}</td>
                <td>
                    <a href="" class="btn btn-info">Chi tiết</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$areas->links()}}
@endsection
