<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/single-property-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 14:25:02 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Chi tiết phòng trọ</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('assets/client/css/jquery-ui.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:500,600,800"
        rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('assets/client/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />



    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{asset('assets/client/css/leaflet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/leaflet-gesture-handling.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/leaflet.markercluster.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/leaflet.markercluster.default.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('assets/client/css/timedropper.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/datedropper.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('assets/client/css/default.css')}}">
</head>
<!-- <style>
    .homepage-4 .btn{
        background: #007bff;
    }
    .homepage-4 .btn:hover{
        color: #fff;
        background-color: #0b5ed7;
        border-color: #0a58ca;
    }
    select{
        width: 100%;
        margin-bottom: 1rem!important;
        background: none;
        height: 45px;
        color: #7e8c99;
        border-radius: 0.25rem;
        font-size: 14px;
    }
</style> -->

<body class="inner-pages sin-1 homepage-4 hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            <div id="header">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.html"><img src="{{ asset('assets/client/images/logo-white-1.svg') }}"
                                    data-sticky-logo="images/logo-red.svg" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1 head-tr">
                            <ul id="responsive">
                                <li><a href="home.html">Trang chủ</a>
                                </li>

                                <li><a href="motels.html">Phòng trọ</a>
                                </li>
                                <li><a href="in-compound.html">Tìm người ở ghép</a>
                                </li>
                                <li><a href="#">Bảng giá dịch vụ</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="right-side d-none d-none d-lg-none d-xl-flex">
                        <!-- Header Widget -->
                        <div class="header-widget">
                            <a href="add-property.html"
                                style="display: flex; justify-content: center; align-items: center;"
                                class="button border">Đăng bài<i class="fas fa-laptop-house ml-2"></i>

                            </a>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                    <!-- Right Side Content / End -->
                    <!-- <div class="header-user-menu user-menu add">
                        <div class="header-user-name">
                            <span><img src="images/testimonials/ts-1.jpg" alt=""></span>Hi, Mary!
                        </div>
                        <ul>
                            <li><a href="user-profile.html"> Edit profile</a></li>
                            <li><a href="add-property.html"> Add Property</a></li>
                            <li><a href="payment-method.html"> Payments</a></li>
                            <li><a href="change-password.html"> Change Password</a></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </div> -->
                    <!-- Right Side Content / End -->


                    @if (\Illuminate\Support\Facades\Auth::user())
                        <div class="header-user-menu user-menu add d-none d-none d-lg-none d-xl-flex sign ml-0">
                            <div class="header-user-name">
                                <span><img
                                        src="{{ \Illuminate\Support\Facades\Auth::user()->avatar ?? 'https://yt3.ggpht.com/ytc/AMLnZu_LsaWhvhA9-Hbda7_l-pQJCN8wB6nbhYBiDW4C0A=s900-c-k-c0x00ffffff-no-rj' }}"
                                        alt=""></span>Chào,
                                {{ \Illuminate\Support\Facades\Auth::user()->name }}!
                            </div>
                            <ul>
                                <li><a href="#">Tài khoản
                                        gốc: <span
                                            class="font-weight-bold">{{ number_format(\Illuminate\Support\Facades\Auth::user()->money, 0, ',', '.') }}</span>
                                        <i class="fa-brands fa-bitcoin text-warning"></i></a></li>
                                <li><a href="user-profile.html">Thông tin cá nhân</a></li>
                                <li><a href="{{ route('getRecharge') }}">Nạp tiền</a></li>
                                <li><a href="change-password.html">Đổi mật khẩu</a></li>
                                <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                            </ul>
                        </div>
                    @else
                        <div class="right-side d-none d-none d-lg-none d-xl-flex ml-0"
                            style="padding: 0 4px 0 5px;margin-top: 16px">
                            <!-- Header Widget -->
                            <div class="header-widget sign-in">
                                <div><a href="{{ route('get_login') }}">Đăng nhập</a></div>
                            </div>
                            <!-- Header Widget / End -->
                        </div>
                    @endif
                    <!-- Right Side Content / End -->

                    <!-- lang-wrap-->
                    {{--            <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex"> --}}
                    {{--                <div class="lang-wrap"> --}}
                    {{--                    <div class="show-lang"><span><i --}}
                    {{--                                class="fas fa-globe-americas"></i><strong>ENG</strong></span><i --}}
                    {{--                            class="fa fa-caret-down arrlan"></i></div> --}}
                    {{--                    <ul class="lang-tooltip lang-action no-list-style"> --}}
                    {{--                        <li><a href="#" class="current-lan" data-lantext="En">English</a></li> --}}
                    {{--                        <li><a href="#" data-lantext="Fr">Francais</a></li> --}}
                    {{--                        <li><a href="#" data-lantext="Es">Espanol</a></li> --}}
                    {{--                        <li><a href="#" data-lantext="De">Deutsch</a></li> --}}
                    {{--                    </ul> --}}
                    {{--                </div> --}}
                    {{--            </div> --}}
                    <!-- lang-wrap end-->

                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach (json_decode($motel->photo_gallery) as $item)
                    <div class="swiper-slide">
                        <a href="{{$item}}" class="grid image-link">
                            <img src="{{$item}}" class="img-fluid" alt="#">
                        </a>
                    </div>
                @endforeach
                
            </div>

            <div class="swiper-button-next swiper-button-white mr-3"></div>
            <div class="swiper-button-prev swiper-button-white ml-3"></div>
        </div>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="single-proper blog details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="headings-2 pt-0">
                                    <div class="pro-wrapper justify-content-between">
                                        <div class="detail-wrapper-body col-8"> 
                                            <div class="listing-title-bar">
                                                <h3>{{$motel->room_number}}</h3>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>{{$motel->area_address}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h4>{{$motel->price}} VND</h4>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Star Description -->
                                <div class="blog-info details mb-30">
                                    <h5 class="mb-4">Thông tin mô tả</h5>
                                    <p class="mb-3">{{ $motel->description }}</p>
                                </div>
                                <!-- End Description -->
                            </div>
                        </div>
                        <!-- Star Property Details -->
                        <div class="single homes-content details mb-30">
                            <!-- title -->
                            <h5 class="mb-4">Thông tin chi tiết phòng</h5>
                            <ul class="homes-list clearfix">
                                <li>
                                    <span class="font-weight-bold mr-1">Property Type:</span>
                                    <span class="det">{{ $motel->category_name }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property status:</span>
                                    <span class="det">For Sale</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property Price:</span>
                                    <span class="det">{{ $motel->price }} vnđ </span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Rooms:</span>
                                    <span class="det">6</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Bedrooms:</span>
                                    <span class="det">7</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Bath:</span>
                                    <span class="det">4</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Số người:</span>
                                    <span class="det">{{ $motel->max_people }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Ngày đăng:</span>
                                    <span class="det">{{$motel->count_user}}/{{ $motel->motel_updateAt }}</span>
                                </li>
                            </ul>
                            <!-- title -->
                            <h5 class="mt-5">Tiện nghi</h5>
                            <!-- cars List -->
                            <ul class="homes-list clearfix">
                                @foreach (json_decode($motel->services) as $item)
                                    <li>
                                        <i class="fa fa-check-square" aria-hidden="true"></i>
                                        <span>{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="floor-plan property wprt-image-video w50 pro">
                            <h5>Những địa điểm lân cận</h5>
                            <div class="property-nearby">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-info">
                                                <i class="fas fa-graduation-cap mr-2"></i><b class="title">Giáo dục</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Education Mandarin</h6>
                                                        <span>(15.61 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star-half fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Marry's Education</h6>
                                                        <span>(15.23 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">The Kaplan</h6>
                                                        <span>(15.16 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="far fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-success">
                                                <i class="fas fa-user-md mr-2"></i><b class="title">Sức khỏe và y tế</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Natural Market</h6>
                                                        <span>(13.20 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star-half fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Food For Health</h6>
                                                        <span>(13.22 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">A Matter of Health</h6>
                                                        <span>(13.34 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="far fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nearby-info">
                                            <span class="nearby-title mb-3 d-block text-danger">
                                                <i class="fas fa-car mr-2"></i><b class="title">Di chuyển</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Airport Transportation</h6>
                                                        <span>(11.36 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star-half fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">NYC Executive Limo</h6>
                                                        <span>(11.87 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Empire Limousine</h6>
                                                        <span>(11.52 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="far fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i
                                                                    class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property wprt-image-video w50 pro vid-si2">
                            <h5>Video chi tiết</h5>
                            <img alt="image" src="{{ $motel->image_360 }}">
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <div class="property-location map">
                            <h5>Bản đồ</h5>
                            <div class="divider-fade"></div>
                            <div id="map-contact" class="contact-map"></div>
                        </div>

                        <!-- Star Reviews -->
                        <!-- <section class="single reviews leve-comments details">
                            <div id="add-review" class="add-review-box">
                          
                                
                                <h3 class="listing-desc-headline margin-bottom-20 mb-4">Add Review</h3>
                                <span class="leave-rating-title">Your rating for this listing</span>
                           
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        
                                        <div class="clearfix"></div>
                                        <div class="leave-rating margin-bottom-30">
                                            <input type="radio" name="rating" id="rating-1" value="1" />
                                            <label for="rating-1" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-2" value="2" />
                                            <label for="rating-2" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-3" value="3" />
                                            <label for="rating-3" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-4" value="4" />
                                            <label for="rating-4" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-5" value="5" />
                                            <label for="rating-5" class="fa fa-star"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-6">
                                       
                                        <div class="add-review-photos margin-bottom-30">
                                            <div class="photoUpload">
                                                <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
                                                <input type="file" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 data">
                                        <form action="#">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="First Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control"
                                                        placeholder="Last Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control"
                                                        placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="8"
                                                    placeholder="Review" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg mt-2">Submit
                                                Review</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section> -->
                 
                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">
                            <!-- Start: Schedule a Tour -->
                            <div class="schedule widget-boxed mt-0">
                                <div class="widget-boxed-header">
                                    <h4>Thông tin chủ phòng</h4>
                                </div>
                                <style>
                                    #box1{
                                        position: relative;
                                        height:260px;
                                    }
                                    #box2{
                                        position: absolute;
                                        bottom: 0;
                                        transform: translateY(-45px);
                                        transition: 1s ease;
                                        height:50px;
                                    }
                                    #message{
                                        opacity: 0;
                                    }
                                </style>
                                
                                <div class="widget-boxed-body">
                                    <div class="sidebar-widget author-widget2">
                                        <div class="author-box clearfix">
                                            <img src="{{ $motel->user_avatar }}" alt="author-image"
                                                class="author__img w-full">
                                            <h4 class="author__title">{{ $motel->user_name }}</h4>
                                            <p class="author__meta">Agent of Property</p>
                                        </div>
                                        <ul class="author__contact">
                                            <li><span class="la la-map-marker"><i
                                                        class="fa fa-map-marker"></i></span>{{ $motel->user_address }}
                                            </li>
                                            <li><span class="la la-phone"><i class="fa fa-phone"
                                                        aria-hidden="true"></i></span><a
                                                    href="#">{{ $motel->user_phone }}</a></li>
                                            <li><span class="la la-envelope-o"><i class="fa fa-envelope"
                                                        aria-hidden="true"></i></span><a
                                                    href="#">{{ $motel->user_email }}</a>
                                            </li>
                                        </ul>
                                        <div class="agent-contact-form-sidebar">
                                            <h4>Liên hệ</h4>
                                            <form name="contact_form"
                                                action="{{ route('client.contact.send', $motel->motel_id) }}"
                                                method="post"
                                                action="https://code-theme.com/html/findhouses/functions.php">
                                                @csrf
                                                <input type="text" id="fname" name="full_name"
                                                     value="{{ Auth::user() ? Auth::user()->name : "" }}"
                                                     placeholder="Họ và tên"
                                                    required />
                                                <input type="text" id="pnumber" name="phone_number"
                                                    value="{{ Auth::user() ? Auth::user()->phone_number : "" }}"
                                                    placeholder="Số điện thoại"
                                                    required />
                                                <input type="email" id="emailid" name="email_address"
                                                    value="{{ Auth::user() ? Auth::user()->email : "" }}"
                                                    placeholder="Email"
                                                    required />
                                                <textarea placeholder="Message" name="message" required></textarea>
                                                <input type="submit" name="sendmessage"
                                                    class="multiple-send-message" placeholder="Yêu cầu liên hệ" />
                                            </form>
                                            <p class="mt-2 text-danger">
                                                @if (Session::has('success'))
                                                    {{ Session::get('success') }}
                                                @endif

                                                @if (Session::has('error'))
                                                    {{ Session::get('error') }}
                                            </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-search-field-2">
                                <div class="widget-boxed mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Phòng trọ ở ghép khác</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="recent-post">
                                            <div class="recent-main">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img src="images/feature-properties/fp-1.jpg" alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html"><h6>Family Home</h6></a>
                                                    <p>$230,000</p>
                                                </div>
                                            </div>
                                            <div class="recent-main my-4">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img src="images/feature-properties/fp-2.jpg" alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html"><h6>Family Home</h6></a>
                                                    <p>$230,000</p>
                                                </div>
                                            </div>
                                            <div class="recent-main">
                                                <div class="recent-img">
                                                    <a href="blog-details.html"><img src="images/feature-properties/fp-3.jpg" alt=""></a>
                                                </div>
                                                <div class="info-img">
                                                    <a href="blog-details.html"><h6>Family Home</h6></a>
                                                    <p>$230,000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start: Specials offer -->
                                <div class="widget-boxed popular mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Specials of the day</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="banner"><img src="images/single-property/banner.jpg" alt=""></div>
                                    </div>
                                </div>
                                <!-- End: Specials offer -->
                                
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
       
        <!-- END SECTION PROPERTIES LISTING -->

        <!-- START FOOTER -->
        <footer class="first-footer">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="index.html" class="logo">
                                    <img src="images/logo-footer.svg" alt="netcom">
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto
                                    soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">95 South Park Avenue, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p">+456 875 369 208</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti">support@findhouses.com</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="navigation">
                                <h3>Navigation</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="properties-right-sidebar.html">Properties Right</a></li>
                                        <li><a href="properties-full-list.html">Properties List</a></li>
                                        <li><a href="properties-details.html">Property Details</a></li>
                                        <li class="no-mgb"><a href="agents-listing-grid.html">Agents Listing</a></li>
                                    </ul>
                                    <ul class="nav-right">
                                        <li><a href="agent-details.html">Agents Details</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li class="no-mgb"><a href="contact-us.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h3>Twitter Feeds</h3>
                                <div class="twitter-widget contuct">
                                    <div class="twitter-area">
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.
                                                </h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.
                                                </h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                        <div class="single-item">
                                            <div class="icon-holder">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                            <div class="text">
                                                <h5><a href="#">@findhouses</a> all share them with me baby said inspet.
                                                </h5>
                                                <h4>about 5 days ago</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="newsletters">
                                <h3>Newsletters</h3>
                                <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive
                                    news in your inbox.</p>
                            </div>
                            <form class="bloq-email mailchimp form-inline" method="post">
                                <label for="subscribeEmail" class="error"></label>
                                <div class="email">
                                    <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                    <input type="submit" value="Subscribe">
                                    <p class="subscription-success"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <p>2021 © Copyright - All Rights Reserved.</p>
                    <ul class="netsocials">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form"
                                            id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()" value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()" value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- ARCHIVES JS -->
        <script src="{{asset('assets/client/js/jquery-ui.js')}}"></script>
        <script src="{{asset('assets/client/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('assets/client/js/range-slider.js')}}"></script>
        <script src="{{asset('assets/client/js/tether.min.js')}}"></script>
        <script src="{{asset('assets/client/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/client/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/client/js/mmenu.min.js')}}"></script>
        <script src="{{asset('assets/client/js/mmenu.js')}}"></script>
        <script src="{{asset('assets/client/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/client/js/slick4.js')}}"></script>
        <script src="{{asset('assets/client/js/fitvids.js')}}"></script>
        <script src="{{asset('assets/client/js/smooth-scroll.min.js')}}"></script>
        <script src="{{asset('assets/client/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/client/js/popup.js')}}"></script>
        <script src="{{asset('assets/client/js/ajaxchimp.min.js')}}"></script>
        <script src="{{asset('assets/client/js/newsletter.js')}}"></script>
        <script src="{{asset('assets/client/js/timedropper.js')}}"></script>
        <script src="{{asset('assets/client/js/datedropper.js')}}"></script>
        <script src="{{asset('assets/client/js/jqueryadd-count.js')}}"></script>
        <script src="{{asset('assets/client/js/leaflet.js')}}"></script>
        <script src="{{asset('assets/client/js/leaflet-gesture-handling.min.js')}}"></script>
        <script src="{{asset('assets/client/js/leaflet-providers.js')}}"></script>
        <script src="{{asset('assets/client/js/leaflet.markercluster.js')}}"></script>
        <script src="{{asset('assets/client/js/map-single.js')}}"></script>
        <script src="{{asset('assets/client/js/color-switcher.js')}}"></script>
        <script src="{{asset('assets/client/js/swiper.min.js')}}"></script>
        <script src="{{asset('assets/client/js/inner.js')}}"></script>

        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                slidesPerGroup: 1,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 50,
                    },
                }
            });

        </script>

        <!-- Date Dropper Script-->
        <script>
            $('#reservation-date').dateDropper();

        </script>
        <!-- Time Dropper Script-->
        <script>
            this.$('#reservation-time').timeDropper({
                setCurrentTime: false,
                meridians: true,
                primaryColor: "#e8212a",
                borderColor: "#e8212a",
                minutesInterval: '15'
            });

        </script>

        <script>
            $(document).ready(function () {
                $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            });

        </script>

        <script>
            $('.slick-carousel').each(function () {
                var slider = $(this);
                $(this).slick({
                    infinite: true,
                    dots: false,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0'
                });

                $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function () {
                    slider.slick('slickPrev');
                });
                $(this).closest('.slick-slider-area').find('.slick-next').on("click", function () {
                    slider.slick('slickNext');
                });
            });

        </script>
        <script>
            var box1 = document.getElementById("box1");
            var box2 = document.getElementById("box2");
            var message = document.getElementById("message");

            // console.log(banner);
            function changePosition() {
                box1.setAttribute('style', 'transition: 0.7s ease;height:400px')
                box2.setAttribute('style', 'transform:translateY(-10px);transition: 0.7s ease;')
                message.setAttribute('style', 'opacity:1;transition: 0.5s cubic-bezier(0.86, 0.32, 0.13, 0.7)')
                // box2.setAttribute('style', 'opacity:0;transition: 1s ease')
            }
        </script>
    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/single-property-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 14:25:02 GMT -->

</html>