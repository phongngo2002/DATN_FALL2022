@extends('layouts.admin.main')

@section('title_page', 'Danh sách phòng trọ')

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
                <div class="col-2">
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
                <div class="col-5">
                    <button class="btn btn-primary">Tìm kiếm</button>
                    <a class="btn btn-danger" href="{{route('admin.motel.list',['id' => 1])}}">Bỏ chọn</a>
                    <a href="{{route('admin.motel.create',['id' => $id])}}" class="btn btn-secondary"><i
                            class="fa-solid fa-folder-plus"></i> Thêm mới</a>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info"><i
                            class="fa-solid fa-file-import"></i> Nhập file exel
                    </button>
                </div>
            </div>
        </form>
        <table class="table text-center">
            <thead>
            <tr>
                <th>#</th>
                <th>Room Number</th>
                <th class="">Price</th>
                <th>Max people</th>
                <th>Status</th>
                <th class="">Chức năng</th>
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
                        <td class="">{{ $motel->price }}</td>
                        <td class="">{{ $motel->max_people }}</td>
                        <td>
                            @if($motel->status == 1)
                                <span class="badge bg-success p-2">Trống</span>
                            @else
                                <span class="badge bg-danger p-2">Đầy</span>
                            @endif
                        </td>
                        <td class="">
                            <a class="btn btn-info"
                               href="{{route('admin.motel.info',['id' => $motel->area_id,'idMotel' => $motel->id])}}"><i
                                    class="fa-solid fa-circle-info"></i></a>
                            <a href="{{ route('admin.motel.edit', ['id' => $motel->area_id, 'idMotel' => $motel->id]) }}"
                               class="btn btn-warning">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <button class="btn btn-danger "
                                {{$motel->status == 2 ? 'disabled' : ''}}>
                                <a
                                    href="" onclick="return confirm('Bạn có chắc muốn xóa phòng trọ')"
                                    class="text-white"><i class="fa-solid fa-trash"></i></a></button>
                        </td>
                    </tr>
                @endforeach

            @endif
            </tbody>
        </table>
        {{ $motels->links() }}
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="{{route('admin.motel.import')}}" method="POST" enctype="multipart/form-data">


            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nhập danh sách</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label>File exel</label>
                        @csrf
                        <input type="hidden" value="{{$id}}" name="area_id" id="area_id">
                        <input type="file" class="form-control" name="file" id="file">
                        <span class="text-sm text-danger ms-1">Bạn nên xem trước định dạng file trước khi nhập</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Nhập</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
