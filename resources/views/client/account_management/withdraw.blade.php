@extends('layouts.user.main')
@section('content')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");


        body {
            background-color: #f5eee7;
            font-family: "Poppins", sans-serif;
            font-weight: 300;
        }

        .container {

            height: 100vh;

        }

        .card {

            border: none;
        }

        .card-header {
            padding: .5rem 1rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: none;
        }

        .btn-light:focus {
            color: #212529;
            background-color: #e2e6ea;
            border-color: #dae0e5;
            box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, .5);
        }

        .form-control {

            height: 50px;
            border: 2px solid #eee;
            border-radius: 6px;
            font-size: 14px;
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #039be5;
            outline: 0;
            box-shadow: none;

        }

        .input {

            position: relative;
        }

        .input i {

            position: absolute;
            top: 16px;
            left: 11px;
            color: #989898;
        }

        .input input {

            text-indent: 25px;
        }

        .card-text {

            font-size: 13px;
            margin-left: 6px;
        }

        .certificate-text {

            font-size: 12px;
        }


        .billing {
            font-size: 11px;
        }

        .super-price {

            top: 0px;
            font-size: 22px;
        }

        .super-month {

            font-size: 11px;
        }


        .line {
            color: #bfbdbd;
        }

        .free-button {

            background: #1565c0;
            height: 52px;
            font-size: 15px;
            border-radius: 8px;
        }


        .payment-card-body {

            flex: 1 1 auto;
            padding: 24px 1rem !important;

        }
    </style>
    @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Đóng</span>
            </button>
        </div>
    @endif
    <?php //Hiển thị thông báo lỗi?>
    @if ( Session::has('error') )
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Đóng</span>
            </button>
        </div>
    @endif
    <form action="{{route('postWithdraw')}}" method="POST" id="withdraw_form">
        <div class="row g-3">

            <div class="col-md-6">

                <div class="card">

                    <div class="accordion" id="accordionExample">

                        <div class="card">
                            <div class="card-header p-0" id="headingTwo">
                                <h2 class="mb-0">
                                    <button
                                        class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom"
                                        type="button" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="d-flex align-items-center justify-content-between">

                                            <span>Paypal</span>
                                            <img src="https://i.imgur.com/7kQEsHU.png" width="30">

                                        </div>
                                    </button>
                                </h2>
                            </div>
                            @csrf
                            <div id="collapseTwo" aria-labelledby="headingTwo"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <input type="text"
                                           name="email"
                                           id="email"
                                           class="form-control" placeholder="Paypal email">
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <input type="text" class="form-control my-4" id="money" name="money"
                                           placeholder="Số tiền muốn rút">
                                    @error('money')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <input type="text" class="form-control mt-4"
                                           name="code"
                                           id="code"
                                           placeholder="Mã xác minh">
                                    @error('code')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                    <p>
                                        <button type="button" id="buttonCode"
                                                class="btn btn-link text-sm">Lấy mã xác minh
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>

            <div class="col-md-6">

                <div class="card">

                    <div class="d-flex justify-content-between p-3">

                        <div class="d-flex flex-column">

                            <span>Số dư tài khoản</span>
                            {{--                            <a href="#" class="billing">Save 20% with annual billing</a>--}}

                        </div>

                        <div class="mt-1">
                            <sup class="super-price">{{\Illuminate\Support\Facades\Auth::user()->money}}</sup>
                            <span class=""><i
                                    class="fa-brands fa-bitcoin text-warning"></i></span>
                        </div>

                    </div>

                    <hr class="mt-0 line">

                    <div class="p-3">

                        <div class="d-flex justify-content-between mb-2">

                            <span>Tỉ lệ quy đổi</span>
                            <span> 24.855 <i
                                    class="fa-brands fa-bitcoin text-warning"></i> = 1 $</span>

                        </div>

                        <div class="d-flex justify-content-between">


                        </div>


                    </div>

                    <hr class="mt-0 line">


                    <div class="p-3 d-flex justify-content-between">

                        <div class="d-flex flex-column">

                            <span>Số tiền thực nhận</span>

                        </div>
                        <span id="money1">$0</span>


                    </div>


                    <div class="p-3">

                        <button class="btn btn-primary btn-block free-button">Rút tiền</button>

                    </div>


                </div>
            </div>

        </div>
    </form>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection
@section('custom_js')
    <script>
        $('#withdraw_form').validate({
            rules: {
                "email": {
                    required: true,
                    email: true
                },
                "code": {
                    required: true,
                    length: 6
                },
                "money": {
                    required: true,
                    min: 24.855
                },
            },
            messages: {
                "email": {
                    required: 'Email tài khoản ví bắt buộc nhập',
                    email: 'Email không đúng định dạng'
                },
                "code": {
                    required: 'Mã xác minh bắt buộc nhập',
                    length: 'Mã xác minh không hợp lệ'
                },
                "money": {
                    required: 'Số xu rút bắt buộc nhập',
                    min: 'Số xu rút phải lớn hơn 24.855 xu'
                },
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
        document.querySelector('.free-button').setAttribute('disabled', 'true');
        document.getElementById('buttonCode').addEventListener('click', () => {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('backend_get_code_withdraw') }}",
                data: {
                    id: {{\Illuminate\Support\Facades\Auth::id()}}
                },
                type: 'POST',
                dataType: 'json',
                success: function (result) {
                    Swal.fire(
                        'Lấy mã thành công!',
                        'Vui lòng vào email đã đăng ký để lấy mã',
                        'success'
                    )
                    document.getElementById('buttonCode').innerText = 'Gửi lại mã';
                }
            });
        })
        document.getElementsByName('money')[0].addEventListener('keyup', (e) => {
            console.log(+e.target.value)
            if (e.target.value > 0) {
                document.getElementById('money1').innerText = `$ ${e.target.value / 24.855}`;
                document.querySelector('.free-button').removeAttribute('disabled');
            } else {
                document.getElementById('money1').innerText = `$ ${0}`;
                document.querySelector('.free-button').setAttribute('disabled', 'true');
            }

        })

        if (+document.querySelector('.super-price').innerHTML === 0) {
            document.querySelector('.free-button').setAttribute('disabled', 'true');
        }
    </script>
@endsection
