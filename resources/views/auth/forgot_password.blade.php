<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

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

<body style="background-image: url('https://anhdepfree.com/wp-content/uploads/2019/05/hinh-nen-background-dep-48.jpg');background-size: 100%">
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h1 class="h1 text-white">Quên mật khẩu</h1>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form action="" method="POST" id="content">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Email đã đăng ký</label>
                                            <input class="form-control form-control-lg" type="text" name="email" id="email" placeholder="example@gmail.com" />
                                        </div>
                                        @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <div>
                                            <div class="col-md-6 pull-center">
                                                {!! app('captcha')->display() !!}
                                                @if ($errors->has('g-recaptcha-response'))
                                                <span class="help-block">
                                                    <strong class="text-danger">{{ $errors->first('g-recaptcha-response') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="text-center mt-3">
                                            <button class="btn btn-lg btn-primary">Lấy mã</button>
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.admin._js')

    <script>
         $("#content").validate({
        rules: {
            "email": {
                required: true,
                email: true
            },
            "password": {
                required: true
            }
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
        submitHandler: function (form) {

            form.submit();

        }


    });
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (\Illuminate\Support\Facades\Session::has('failed'))
    <script>
        function modal() {
            Swal.fire(-
                'Đăng nhập thất bại!',
                'Thông tin đăng nhập không chính xác.',
                'error'
            )
        }

        modal();
    </script>
    @endif
    @if (\Illuminate\Support\Facades\Session::has('logout'))
    <script>
        function modal() {
            Swal.fire(-
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