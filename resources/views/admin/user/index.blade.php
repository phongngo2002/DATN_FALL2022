@extends('layouts.admin.main')

@section('title_page',$title)

@section('content')
<a href=" {{route('backend_user_add')}} " class="btn btn-primary mb-2">Thêm mới</a>
   <div class="row">
    <div class="col-12 d-flex">
        <div class="card flex-fill">
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="d-none d-xl-table-cell">Name</th>
                        <th class="d-none d-xl-table-cell">Email</th>
                        <th class="d-none d-xl-table-cell">Phone number</th>
                        <th class="d-none d-xl-table-cell">Money</th>
                        <th>Avatar</th>
                        <th class="d-none d-md-table-cell">Roles</th>
                        <th class="text-center col-2">Action</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>1</td>
                        <td class="d-none d-xl-table-cell">{{$user->name}}</td>
                        <td class="d-none d-xl-table-cell">{{$user->email}}</td>
                        <td class="d-none d-xl-table-cell">{{$user->phone_number}}</td>
                        <td><span class="badge bg-success">{{number_format($user->money,0,'','.')}}</span></td>
                        <td class="d-none d-md-table-cell">{{$user->avatar}}</td>
                        <td class="d-none d-md-table-cell">
                            @if ($user->role_id === 1)
                                {{'Admin'}}
                            @endif
                        </td>
                        <td class="d-flex justify-content-around">
                            <a href="" class="btn btn-sm btn-primary rounded"> Update</a>
                            <a href="" class="btn btn-sm btn-danger rounded">Delete</a>
                            <a href=" {{route('backend_user_getUser',['id'=>$user->id])}} " class="btn btn-sm btn-success rounded">Detail</a>
                        </td>
                    </tr>    
                    @endforeach
                    {{-- <tr>
                        <td>1</td>
                        <td class="d-none d-xl-table-cell">Tiến</td>
                        <td class="d-none d-xl-table-cell">tiennqph17903@fpt.edu.vn</td>
                        <td class="d-none d-xl-table-cell">0123456789</td>
                        <td><span class="badge bg-success">1.000.000</span></td>
                        <td class="d-none d-md-table-cell">Avatar</td>
                        <td class="d-none d-md-table-cell">Admin</td>
                        <td class="d-flex justify-content-around">
                            <a href="" class="btn btn-sm btn-primary rounded"> Update</a>
                            <a href="" class="btn btn-sm btn-danger rounded">Delete</a>
                            <a href="" class="btn btn-sm btn-success rounded">Detail</a>
                        </td>
                    </tr> --}}
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
