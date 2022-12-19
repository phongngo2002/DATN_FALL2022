<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/pricing-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 14:25:22 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Pricing Table</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('assets/client/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/font-awesome.min.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('assets/client/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('assets/client/css/default.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        #header {
            background-color: #ffffff;
        }

        li {
            list-style: none;
        }
    </style>
</head>

<body class="inner-pages hd-white">
<!-- Wrapper -->
<div id="wrapper">
    <!-- START SECTION HEADINGS -->
    <!-- Header Container
    ================================================== -->
    @include('layouts.client.header')
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    <section class="headings" style="back">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Bảng giá dịch vụ</h1>
                <h2><a href="{{route('home')}}">Trang chủ </a> &nbsp;/&nbsp; Bảng giá dịch vụ</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION PRICING -->
    <section class="pricing-table bg-white-2">

        <div class="container">
            <p style="float: right;font-size: 18px;font-weight: bolder">Tỉ lệ quy đổi: 1 <i
                    class="fa-brands fa-bitcoin text-warning"></i> = 1.000 VNĐ</p>
            <div class="section-title">
                <h3>Gói</h3>
                <h2>đăng tin thuê trọ</h2>
            </div>
            <div class="row">
                @foreach($plans as $plan)
                    @if($plan->type == 1)
                        <div class="col-lg-3 col-md-6 col-xs-12 mt-4">
                            <div class="plan text-center {{ $plan->price >= 50 ? 'featured no-mgb yes-mgb' : '' }}"
                                 style="min-height: 488px !important;">
                                <span class="plan-name ">{{$plan->name}} <small>Gói ngày</small></span>
                                <p class="plan-price"><sup class="currency"><i
                                            class="fa-brands fa-bitcoin"></i></sup><strong>{{$plan->price}}</strong></p>
                                <div class="p-2">
                                    {!! $plan->desc !!}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <section class="pricing-table bg-white-2">
        <div class="container">
            <div class="section-title">
                <h3>Gói</h3>
                <h2>đăng tin ở ghép</h2>
            </div>
            <div class="row">
                @foreach($plans as $plan)
                    @if($plan->type == 2)
                        <div class="col-lg-3 col-md-6 col-xs-12 mt-4">
                            <div class="plan text-center {{ $plan->price >= 50 ? 'featured no-mgb yes-mgb' : '' }}"
                                 style="min-height: 488px !important;">
                                <span class="plan-name ">{{$plan->name}} <small>Gói ngày</small></span>
                                <p class="plan-price"><sup class="currency"><i
                                            class="fa-brands fa-bitcoin"></i></sup><strong>{{$plan->price}}</strong></p>
                                <div class="p-2">
                                    {!! $plan->desc !!}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- END SECTION PRICING -->

    <!-- START FOOTER -->
    <footer class="first-footer">
        <div class="second-footer">
            <div class="container">
                <p>2022 © Website tìm kiếm và quản lý phòng trọ hàng đầu Việt Nam</p>
            </div>
        </div>
    </footer>

    <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->

    <!--register form -->
    <!--register form end -->

    <!-- ARCHIVES JS -->
    <script src="{{asset('assets/client/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/client/js/tether.min.js')}}"></script>
    <script src="{{asset('assets/client/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/client/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/client/js/mmenu.min.js')}}"></script>
    <script src="{{asset('assets/client/js/mmenu.js')}}"></script>
    <script src="{{asset('assets/client/js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('assets/client/js/color-switcher.js')}}"></script>
    <script src="{{asset('assets/client/js/inner.js')}}"></script>

</div>
<!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/pricing-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 14:25:22 GMT -->
</html>
