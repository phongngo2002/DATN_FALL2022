@extends('layouts.admin.main')

@section('title_page',$title)

@section('content')
<div class="w-full overflow-hidden rounded-lg shadow-xs my-3">
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
    <?php //Hiển thị thông báo lỗi?>
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
    <form action="{{route('backend_user_add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-6 col-12">
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
                        <h5 class="card-title mb-4">Address</h5>
                    </div>
                    <div class="card-body">
                        <input name="address" type="text" class="form-control mb-4">
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
            </div>
            <div class="col-xl-6 col-12">
                 <div>
                    <div class="card-header">
                        <h5 class="card-title mb-4">Avatar</h5>
                    </div>
                    <div class="card-body">
                        <img id="avt_preview" src="https://png.pngtree.com/png-vector/20190820/ourmid/pngtree-no-avatar-vector-isolated-on-white-background-png-image_1694546.jpg" alt="your image" style="max-width: 200px; height:102px;" class="img-fluid"/>
                        <input name="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror mb-4" id="avt_truoc" accept="image/*">
                        {{-- <input name="avatar" type="file" class="form-control-file @error('cmt_mat_truoc') is-invalid @enderror mb-4" id="cmt_truoc" accept="image/*"> --}}
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
                <button type="submit" class="btn btn-primary mt-4" > Tạo mới</button>
            </div>
           

            
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function(){
        function readURL(input, selector) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    $(selector).attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#avt_truoc").change(function () {
            readURL(this, '#avt_preview');
        });
       
    });
    </script>
@endsection

