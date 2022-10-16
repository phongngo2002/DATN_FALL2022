@extends('layouts.admin.main')

@section('title_page',$title)
@section('content')
<div class="w-full overflow-hidden rounded-lg shadow-xs my-2">
    <div class="w-full overflow-x-auto ">
        @if ( Session::has('success') )
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>{{ Session::get('success') }}</strong>
                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
        @if ( Session::has('error') )
            <div class="alert alert-danger alert-dismissible" role="alert">
                <strong>{{ Session::get('error') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
    </div>
</div>
<a href=" {{route('backend_user_add')}} " class="btn btn-primary mb-3">Thêm mới</a>
<form action="" class="mb-4">
    <div class="row col-12">
        <div class="col-3 pl-0 pr-1">
            <input class="form-control" name="name"value="{{isset($params['name']) && $params['name'] ? $params['name'] : ''}}" placeholder="Tìm kiếm theo tên hoặc email">
        </div>
        <div class="col-2 px-1">
            <select class="form-control" name="order_by">
                <option
                    value="desc" {{ isset($params['order_by']) && $params['order_by'] == 'desc' ? 'selected' : ''}}>Sắp xếp mới nhất
                </option>
                <option
                    value="asc" {{isset($params['order_by']) && $params['order_by'] == 'asc' ? 'selected' : ''}}>Sắp xếp cũ nhất
                </option>
            </select>
        </div>
        <div class="col-3 px-1">
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
        <div class="col-3 d-flex flex-row">
            <button class="btn btn-primary mx-2">Tìm kiếm</button>
            <a class="btn btn-danger" href="{{route('backend_user_getAll')}}">Bỏ chọn</a>
        </div>
    </div>
</form>
<div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <table class="table bg-body my-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="d-none d-xl-table-cell text-center text-center">Name</th>
                        <th class="d-none d-xl-table-cell text-center">Email</th>
                        <th class="d-none d-xl-table-cell text-center">Phone number</th>
                        <th class="d-none d-xl-table-cell text-center">Money</th>
                        <th class="d-none d-xl-table-cell text-center">Avatar</th>
                        <th class="d-none d-xl-table-cell text-center">Roles</th>
                        <th class="text-center">Action</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td class="d-none d-xl-table-cell text-center">{!! isset($params['name']) ? str_replace($params['name'],'<span class="bg-warning">'.$params['name'].'</span>',$user->name) : $user->name!!}</td>
                        <td class="d-none d-xl-table-cell text-center">{!! isset($params['name']) ? str_replace($params['name'],'<span class="bg-warning">'.$params['name'].'</span>',$user->email) : $user->email!!}</td>
                        <td class="d-none d-xl-table-cell text-center">{{$user->phone_number}}</td>
                        <td class="d-none d-xl-table-cell text-center"><span >{{number_format($user->money,0,'','.')}}</span></td>
                        <td class="d-none d-xl-table-cell text-center">
                            <img src="{{$user->avatar}}" alt="" width="100px">
                        </td>
                        <td class="d-none d-xl-table-cell text-center">
                            @if ($user->role_id === 1)
                                {{'Admin'}}
                            @elseif($user->role_id === 2)
                                {{'Chủ trọ'}}
                            @else
                                {{'Thành viên'}}
                            @endif
                        </td>
                        <td class=" d-xl-table-cell d-flex justify-content-around text-center">
                            <a href="{{route('backend_user_detail',['id'=>$user->id,'used_to'=>'update'])}}" class="btn btn-sm btn-primary rounded"> Update</a>
                            <a href=" {{route('backend_user_detail',['id'=>$user->id,'used_to'=>'detail'])}} " class="btn btn-sm btn-success rounded">Detail</a>
                        </td>
                    </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{$users->links()}}
</div>

@endsection
