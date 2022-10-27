<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    @include('layouts.admin._css')
    <style>
        .error {
            color: red;
            margin-top: 4px;
        }
    </style>
</head>

<body
    style="background-image: url('https://anhdepfree.com/wp-content/uploads/2019/05/hinh-nen-background-dep-48.jpg');background-size: 100%">
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h1 class="h1 text-white">Đăng ký hệ thống</h1>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form class="px-md-2" action="" method="POST" id="content">
                                        <label class="form-label" for="form3Example1q">Họ tên</label>
                                        <div class="form-outline">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Nhập tên của bạn" />
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-outline datepicker">
                                                    <label class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="email"
                                                        name="email" placeholder="Nhập email của bạn" />
                                                </div>

                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-outline">
                                                    <label class="form-label">Số Điện thoại</label>
                                                    <input type="text" class="form-control" id="phone_number"
                                                        name="phone_number" placeholder="Nhập số điện thoại " />
                                                </div>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-outline ">
                                                <label class="form-label">Địa chỉ</label>
                                                <input type="text" class="form-control" id="address" name="address"
                                                    placeholder="Nhập địa chỉ" />
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 md-4 mt-4">
                                                <div class="form-outline datepicker">
                                                    <label class="form-label">Mật khẩu</label>
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" placeholder="Nhập mật khẩu">
                                                </div>
                                            </div>

                                            <div class="col-md-6 md-4 mt-4">
                                                <div class="form-outline datepicker">
                                                    <label class="form-label">Nhập lại Mật Khẩu</label>
                                                    <input type="password" class="form-control" id="confirm_password"
                                                        name="confirm_password" placeholder="nhập lại mật khẩu">
                                                </div>
                                            </div>

                                        </div>


                                        <div class="text-center mt-3">
                                            <a href="{{ route('home') }}" class="btn btn-success">Về trang chủ</a>
                                            <button class="btn btn-primary">Đăng ký</button>
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
    </main>

    @include('layouts.admin._js')

    <script>
        $("#content").validate({
            rules: {
                "name": {
                    minlength: 6,
                    required: true,
                },
                "email": {
                    required: true,
                    email: true
                },
                "password": {
                    required: true,
                    minlength: 6,
                },
                "confirm_password": {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                },
                "address": {
                    minlength: 6,
                    required: true,
                },
                "phone_number": {
                    required: true,
                    minlength: 10,
                    maxlength: 11,
                },

            },
            messages: {
                "password": {
                    required: 'Mật khẩu bắt buộc nhập'
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (\Illuminate\Support\Facades\Session::has('failed'))
        <script>
            function modal() {
                Swal.fire(
                    'Đăng nhập thất bại!',
                    'Thông tin đăng nhập không chính xác.',
                    'error'
                )
            }

            modal();
        </script>
    @endif
    @if (\Illuminate\Support\Facades\Session::has('change'))
        <script>
            function modal() {
                Swal.fire(
                    'Lấy lại mật khẩu thành công',
                    '',
                    'success'
                )
            }

            modal();
        </script>
    @endif
    @if (\Illuminate\Support\Facades\Session::has('logout'))
        <script>
            function modal() {
                Swal.fire(
                    'Đăng xuất thành công!',
                    '',
                    'success'
                )
            }

            modal();
        </script>
    @endif
</body>

</html>
