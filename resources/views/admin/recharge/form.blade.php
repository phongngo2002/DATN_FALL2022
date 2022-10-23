@extends('layouts.admin.main')



@section('content')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");


        body {
            background-color: #f5eee7;
            font-family: "Poppins", sans-serif;
            font-weight: 300;
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
        <div class="row g-3">

            <div class="col-md-6">

                <span>Phương thức thanh toán</span>
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
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <input type="text" class="form-control" placeholder="Paypal email">
                                    <input type="text" class="form-control my-4" placeholder="Số tiền nạp">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header p-0">
                                <h2 class="mb-0">
                                    <button class="btn btn-light btn-block text-left p-3 rounded-0"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                        <div class="d-flex align-items-center justify-content-between">

                                            <span>Thẻ tìn dụng</span>
                                            <div class="icons">
                                                <img src="https://i.imgur.com/2ISgYja.png" width="30">
                                                <img src="https://i.imgur.com/W1vtnOV.png" width="30">
                                                <img src="https://i.imgur.com/35tC99g.png" width="30">
                                                <img src="https://i.imgur.com/2ISgYja.png" width="30">
                                            </div>

                                        </div>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body payment-card-body">

                                    <span class="font-weight-normal card-text">Mã số thẻ</span>
                                    <div class="input">

                                        <i class="fa fa-credit-card"></i>
                                        <input type="text" class="form-control" placeholder="0000 0000 0000 0000">

                                    </div>

                                    <div class="row mt-3 mb-3">

                                        <div class="col-md-6">

                                            <span class="font-weight-normal card-text">Expiry Date</span>
                                            <div class="input">

                                                <i class="fa fa-calendar"></i>
                                                <input type="text" class="form-control" placeholder="MM/YY">

                                            </div>

                                        </div>


                                        <div class="col-md-6">

                                            <span class="font-weight-normal card-text">CVC/CVV</span>
                                            <div class="input">

                                                <i class="fa fa-lock"></i>
                                                <input type="text" class="form-control" placeholder="000">

                                            </div>

                                        </div>


                                    </div>

                                    <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Giao dịch của bạn được bảo mật bằng chứng chỉ ssl</span>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-6">
                <span>Chi tiết</span>

                <div class="card">

                    <hr class="mt-0 line">

                    <div class="p-3">

                        <div class="d-flex justify-content-between mb-2">

                            <span>Thuế</span>
                            <span>-13.000 VNĐ</span>

                        </div>

                        <div class="d-flex justify-content-between">

                            <span>Vat <i class="fa fa-clock-o"></i></span>
                            <span>-20%</span>

                        </div>


                    </div>

                    <hr class="mt-0 line">


                    <div class="p-3 d-flex justify-content-between">

                        <div class="d-flex flex-column">

                            <span>Số tiền nạp</span>
                        </div>
                        <span>1.000.000 VNĐ</span>


                    </div>


                    <div class="p-3">
                        <button class="btn btn-primary btn-block free-button">Nạp tiền</button>
                    </div>


                </div>
            </div>

        </div>

@endsection
