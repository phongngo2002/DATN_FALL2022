@extends('layouts.admin.main')

@section('title_page',$title)

@section('content')

<div class="w-full overflow-hidden rounded-lg shadow-xs my-3">
    @if ( Session::has('success') )
    <div class="alert alert-success alert-dismissible" role="alert">
        <strong>{{ Session::get('success') }}</strong>
        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
    </div>
    @endif
    <?php //Hiển thị thông báo lỗi
    ?>
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
    <form action="{{route('backend_user_update',['id' => $user->id])}}" method="POST" enctype="multipart/form-data" id="content">
        @csrf
        <div class="bg-white shadow-lg p-4 rounded-4">
            <div class="">
                <div>
                    <label>Họ tên</label>
                    <input name="name" type="text" class="form-control mb-4" value="{{$user->name}}">
                </div>
                <div>
                    <label class="">Email</label>
                    <input name="email" type="email" class="form-control mb-4" readonly value="{{$user->email}}">
                </div>
                <div>
                    <label class="">Số điện thoại</label>
                    <input name="phone_number" type="number" id="phone_number" value="{{$user->phone_number}}" class="form-control mb-4">
                </div>
                <div>
                    <label>Địa chỉ</label>
                    <input name="address" type="text" class="form-control mb-4" value="{{$user->address}}">
                </div>
            </div>
            <div>
                <label for="">Ảnh đại diệnn</label>
                <div>
                    <img id="avt_preview" src="{{$user->avatar}}" alt="your image" style="max-width: 200px; height:95px;" class="img-fluid mb-2" />
                </div>
                <input name="avatar" type="file" id="avatar" class="form-control @error('avatar') is-invalid @enderror mb-4">
            </div>
            <div>
                <label for="">Quyền</label>
                <select class="form-control mb-3" name="role_id">
                    <option value="">Chọn quyền</option>
                    @foreach ($role as $key => $value)
                    <option value="{{$value->id}}" {{$user->role_id == $value->id ? 'selected' : ''}}>{{$value->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-success mt-4">Lưu</button>
        <a href="{{route('backend_user_getAll')}}" class="btn btn-secondary mt-4">Quay lại</a>
    </form>
    <script>
        document.getElementsByName('avatar')[0].addEventListener('change', (e) => {
            document.getElementById('avt_preview').src = URL.createObjectURL(e.target.files[0]);
        })
    </script>
    <script>
        $(document).ready(function() {
            $.validator.addMethod("Phone", function(value, element) {
                return /(84|0[3|5|7|8|9])+([0-9]{8})/.test(value);
            }, 'Phone không đúng định dạng');
        })
        $("#content").validate({
            rules: {
                "name": {
                    required: true,
                },
                "email": {
                    required: true,
                    email: true
                },
                "avatar": {
                    required: true
                },
                "address": {
                    required: true
                },
                "role_id": {
                    required: true
                },
                "phone_number": {
                    required: true,
                    Phone: true,
                    minlength: 10,
                    maxlength: 11,
                },
            },
            messages: {
                "name": {
                    required: 'Tên người dùng bắt buộc nhập'
                },
                "avatar": {
                    required: "Vui lòng chọn ảnh"
                },
                "address": {
                    required: 'Địa chỉ bắt buộc nhập'
                },
                "phone_number": {
                    required: 'Số điện thoại bắt buộc nhập',
                    required: "Bắt buộc nhập số điện thoại",
                    minlength: "tối thiểu 10 số !",
                    maxlength: 'Nhập quá giới hạn tối đa !'
                },
                "role_id": {
                    required: 'Vai trò bắt buộc chọn'
                },
                "email": {
                    required: 'Email bắt buộc nhập',
                    email: 'Email không đúng định dạng'
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
    @endsection