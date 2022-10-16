@extends('layouts.admin.main')

@section('title_page', 'Danh sách phòng trọ')

@section('content')
    <div class="row">
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
                        <option value="100" {{ isset($params['limit']) && $params['limit'] == '100' ? 'selected' : '' }}>
                            100
                        </option>
                    </select>
                </div>
                <div class="col-3 row ms-5">
                    <button class="btn btn-primary col-5 me-3">Tìm kiếm</button>
                    <a class="btn btn-danger col-5" href="">Bỏ chọn</a>
                </div>
            </div>
        </form>
        <div class="card flex-fill">
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Room Number</th>
                        <th class="d-none d-xl-table-cell">Image 360</th>
                        <th class="d-none d-xl-table-cell">Price</th>
                        <th>Max people</th>
                        <th>Status</th>
                        <th class="d-none d-md-table-cell">Active</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($motels as $motel)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $motel->room_number }}</td>
                            <td class="d-none d-xl-table-cell">
                                <img src="{{ $motel->image_360 }}" width="200px" alt="">
                            </td>
                            <td class="d-none d-xl-table-cell">{{ $motel->price }}</td>
                            <td class="d-none d-md-table-cell">{{ $motel->max_people }}</td>
                            <td><span class="badge bg-success">{{ $motel->status }}</span></td>
                            <td class="d-none d-md-table-cell">
                                <a href="{{ route('admin.motel.detail', [$idCate, $motel->id]) }}" class="me-5">
                                    <i class="align-middle" data-feather="edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $motels->links() }}
            
        </div>
    </div>

@endsection
