@extends('layouts.admin.main')

@section('title_page',$title)

@section('content')
    <form action="{{route('backend_user_add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-12 col-lg-6">
            <div>
                <div class="card-header">
                    <h5 class="card-title mb-4">Name</h5>
                </div>
                <div class="card-body">
                    <input name="name" type="text" class="form-control mb-4">
                </div>
            </div>
            <div>
                <div class="card-header">
                    <h5 class="card-title mb-4">Email</h5>
                </div>
                <div class="card-body">
                    <input name="email" type="email" class="form-control mb-4">
                </div>
            </div>
            <div>
                <div class="card-header">
                    <h5 class="card-title mb-4">Phone number</h5>
                </div>
                <div class="card-body">
                    <input name="phone_number" type="number" class="form-control mb-4">
                </div>
            </div>
            <div>
                <div class="card-header">
                    <h5 class="card-title mb-4">Password</h5>
                </div>
                <div class="card-body">
                    <input name="password" type="password" class="form-control mb-4">
                </div>
            </div>
            <div>
                <div class="card-header">
                    <h5 class="card-title mb-4">Avatar</h5>
                </div>
                <div class="card-body">
                    <input name="avatar" type="file" class="form-control mb-4">
                </div>
            </div>
            <div>
                <div class="card-header">
                    <h5 class="card-title mb-4">Roles</h5>
                </div>
                <div class="card-body">
                    <select class="form-select mb-3" name="role_id">
                        <option value="">Chọn quyền</option>
                        <option value="1">Admin</option>
                        <option value="2">Chủ trọ</option>
                        <option value="3">Thành viên</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4 float-right"> Tạo mới</button>

            
        </div>
    </form>
@endsection
