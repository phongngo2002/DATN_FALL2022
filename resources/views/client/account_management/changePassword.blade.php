@extends('layouts.user.main')
@section('content')
@include('layouts.admin._css')
<style>
    .error {
        color: red;
        margin-top: 4px;
    }
</style>
<h4>Đổi mật khẩu</h4>
<div class="bg-white p-4 shadow-sm rounded-4" style="min-height: 700px;">

    <form action="" method="POST" id="content">
        @csrf
        <div>
            <label for="">Mật khẩu cũ</label>
            <input type="password" id="password_old" name="password_old" class="form-control" placeholder="Nhập mật khẩu cũ">
        </div>
        <div>
            <label for="">Mật khẩu mới</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu mới">
        </div>

        <div>
            <label for="">Xác nhận mật khẩu mới</label>
            <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Nhập lại mật khẩu">
        </div>
        <div class="my-4">
            <button class="btn btn-success">Lưu thay đổi</button>
        </div>
    </form>
</div>
@include('layouts.admin._js')

<script>
    $.validator.addMethod('pass', function(value) {
        return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test(value);
    }, 'Tối thiểu tám ký tự, ít nhất một chữ hoa, một chữ thường và một số.');
    $("#content").validate({
        rules: {
            "password_old": {
                required: true,
            },
            "password": {
                required: true,
                pass: true
            },
            "confirm_password": {
                required: true,
                equalTo: "#password"
            },
        },
        messages: {
            "password_old": {
                required: 'Vui lòng nhập mật khẩu cũ !',
            },
            "password": {
                required: 'Vui lòng nhập mật khẩu mới !',
            },
            "confirm_password": {
                required: 'Vui lòng nhập lại mật khẩu mới !',
                equalTo: "Nhập đúng với password ! "
            },
        },
        submitHandler: function(form) {

            form.submit();

        }

    });
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(\Illuminate\Support\Facades\Session::has('success'))
<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Thay đổi mật khẩu thành công',
        timer: 1500
    })
</script>
@endif
@if(\Illuminate\Support\Facades\Session::has('error'))
<script>
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Xác nhận mật khẩu cũ không chính xác',
        timer: 1500
    })
</script>
@endif
@endsection