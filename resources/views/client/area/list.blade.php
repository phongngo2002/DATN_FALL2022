<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/properties-top-map-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 14:24:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>List View</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/client/favicon.ico')}}">
    <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('assets/client/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/font-awesome.min.css')}}">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{asset('assets/client/css/leaflet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/leaflet-gesture-handling.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/leaflet.markercluster.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/leaflet.markercluster.default.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('assets/client/css/search.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('assets/client/css/default.css')}}">
    <style>
        iframe {
            width: 100% !important;
        }
    </style>
</head>

<body class="inner-pages homepage-4 agents list hp-6 full hd-white">
<!-- Wrapper -->
<div id="wrapper">
    <!-- START SECTION HEADINGS -->
    <!-- Header Container
    ================================================== -->
    <!-- Header -->
    <header id="header-container">
        <!-- Header -->
        <div id="header">
            <div class="container container-header">
                <!-- Left Side Content -->
                <div class="left-side">
                    <!-- Logo -->
                    <div id="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/client/images/logo-gray.svg') }}"
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
                    <nav id="navigation" class="style-1 ">
                        <ul id="responsive">
                            <li><a class="a" href="{{route('home')}}">Trang chủ</a>
                            </li>

                            <li><a class="a" href="{{route('motels')}}">Phòng trọ</a>
                            </li>
                            <li><a class="a" href="{{route('client_list_live_together')}}">Tìm người ở ghép</a>
                            </li>
                            <li><a class="a" href="{{ route('frontend_get_plans') }}">Bảng giá dịch vụ</a>
                            </li>
                        </ul>
                    </nav>
                </div>


                @if (\Illuminate\Support\Facades\Auth::user())
                    <div class="header-user-menu user-menu add d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <div class="header-user-name a">
                        <span><img class="avatar_admin"
                                   src="{{ \Illuminate\Support\Facades\Auth::user()->avatar ?? 'https://yt3.ggpht.com/ytc/AMLnZu_LsaWhvhA9-Hbda7_l-pQJCN8wB6nbhYBiDW4C0A=s900-c-k-c0x00ffffff-no-rj' }}"
                                   alt=""></span>Chào, {{ \Illuminate\Support\Facades\Auth::user()->name }}!
                        </div>
                        <ul>
                            @if(\Illuminate\Support\Facades\Auth::user()->role_id === 3)
                                <li><a href="{{ route('getRecharge') }}">Tài khoản
                                        gốc: <span
                                            class="font-weight-bold">{{ number_format(\Illuminate\Support\Facades\Auth::user()->money, 0, ',', '.') }}</span>
                                        <i class="fa-brands fa-bitcoin text-warning"></i></a></li>
                                <li><a href="{{route('client.get_profile')}}">Thông tin cá nhân</a></li>
                                <li><a href="{{ route('getRecharge') }}">Nạp tiền</a></li>
                                <li><a href="{{ route('client.change_password') }}">Đổi mật khẩu</a></li>
                                <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                            @else
                                <li><a href="{{ route('admin_home') }}">Quản lý khu trọ</a></li>
                                <li><a href="{{ route('client.change_password') }}">Đổi mật khẩu</a></li>
                                <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                            @endif
                        </ul>
                    </div>
                @else
                    <div class="right-side d-none d-none d-lg-none d-xl-flex ml-0"
                         style="padding: 0 4px 0 5px;margin-top: 16px">
                        <!-- Header Widget -->
                        <div class="header-widget sign-in">
                            <div><a class="a" href="{{ route('get_login') }}">Đăng nhập</a></div>
                        </div>
                    </div>

                @endif


            </div>
        </div>
        <!-- Header / End -->

    </header>
    <!-- Header / End -->

    <!-- Header Container / End -->
    <div class="header-map google-maps properties">
        {!! $motels[0]->link_gg_map !!}
    </div>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION PROPERTIES LISTING -->
    <section class="properties-list full featured portfolio blog">
        <div class="container">
            <section class="headings-2 pt-0 pb-0">
                <div class="pro-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="listing-title-bar">
                            <div class="text-heading text-left">
                                <p><a href="{{route('home')}}">Trang chủ </a> &nbsp;/&nbsp;
                                    <span>{{$motels[0]->area_name}}</span></p>
                            </div>
                            <h3>Danh sách phòng</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Search Form -->
            <div class="col-12 px-0 parallax-searchs">
                <div class="banner-search-wrap">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs_1">
                            <div class="rld-main-search">
                                <div class="row">
                                    <div class="rld-single-input">
                                        <input type="text" placeholder="Enter Keyword...">
                                    </div>
                                    <div class="rld-single-select ml-22">
                                        <select class="select single-select">
                                            <option value="1">Property Type</option>
                                            <option value="2">Family House</option>
                                            <option value="3">Apartment</option>
                                            <option value="3">Condo</option>
                                        </select>
                                    </div>
                                    <div class="rld-single-select">
                                        <select class="select single-select mr-0">
                                            <option value="1">Location</option>
                                            <option value="2">Los Angeles</option>
                                            <option value="3">Chicago</option>
                                            <option value="3">Philadelphia</option>
                                            <option value="3">San Francisco</option>
                                            <option value="3">Miami</option>
                                            <option value="3">Houston</option>
                                        </select>
                                    </div>
                                    <div class="dropdown-filter"><span>Advanced Search</span></div>
                                    <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                        <a class="btn btn-yellow" href="#">Search Now</a>
                                    </div>
                                    <div class="explore__form-checkbox-list full-filter">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                <!-- Form Property Status -->
                                                <div class="form-group categories">
                                                    <div class="nice-select form-control wide" tabindex="0"><span
                                                            class="current"><i
                                                                class="fa fa-home"></i>Property Status</span>
                                                        <ul class="list">
                                                            <li data-value="1" class="option selected ">For Sale</li>
                                                            <li data-value="2" class="option">For Rent</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ End Form Property Status -->
                                            </div>
                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                <!-- Form Bedrooms -->
                                                <div class="form-group beds">
                                                    <div class="nice-select form-control wide" tabindex="0"><span
                                                            class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                        <ul class="list">
                                                            <li data-value="1" class="option selected">1</li>
                                                            <li data-value="2" class="option">2</li>
                                                            <li data-value="3" class="option">3</li>
                                                            <li data-value="3" class="option">4</li>
                                                            <li data-value="3" class="option">5</li>
                                                            <li data-value="3" class="option">6</li>
                                                            <li data-value="3" class="option">7</li>
                                                            <li data-value="3" class="option">8</li>
                                                            <li data-value="3" class="option">9</li>
                                                            <li data-value="3" class="option">10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ End Form Bedrooms -->
                                            </div>
                                            <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                <!-- Form Bathrooms -->
                                                <div class="form-group bath">
                                                    <div class="nice-select form-control wide" tabindex="0"><span
                                                            class="current"><i class="fa fa-bath"
                                                                               aria-hidden="true"></i> Bathrooms</span>
                                                        <ul class="list">
                                                            <li data-value="1" class="option selected">1</li>
                                                            <li data-value="2" class="option">2</li>
                                                            <li data-value="3" class="option">3</li>
                                                            <li data-value="3" class="option">4</li>
                                                            <li data-value="3" class="option">5</li>
                                                            <li data-value="3" class="option">6</li>
                                                            <li data-value="3" class="option">7</li>
                                                            <li data-value="3" class="option">8</li>
                                                            <li data-value="3" class="option">9</li>
                                                            <li data-value="3" class="option">10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ End Form Bathrooms -->
                                            </div>
                                            <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                <!-- Price Fields -->
                                                <div class="main-search-field-2">
                                                    <!-- Area Range -->
                                                    <div class="range-slider">
                                                        <label>Area Size</label>
                                                        <div id="area-range" data-min="0" data-max="1300"
                                                             data-unit="sq ft"></div>
                                                    </div>
                                                    <br>
                                                    <!-- Price Range -->
                                                    <div class="range-slider">
                                                        <label>Price Range</label>
                                                        <div id="price-range" data-min="0" data-max="600000"
                                                             data-unit="$"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                <!-- Checkboxes -->
                                                <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                    <input id="check-2" type="checkbox" name="check">
                                                    <label for="check-2">Air Conditioning</label>
                                                    <input id="check-3" type="checkbox" name="check">
                                                    <label for="check-3">Swimming Pool</label>
                                                    <input id="check-4" type="checkbox" name="check">
                                                    <label for="check-4">Central Heating</label>
                                                    <input id="check-5" type="checkbox" name="check">
                                                    <label for="check-5">Laundry Room</label>
                                                    <input id="check-6" type="checkbox" name="check">
                                                    <label for="check-6">Gym</label>
                                                    <input id="check-7" type="checkbox" name="check">
                                                    <label for="check-7">Alarm</label>
                                                    <input id="check-8" type="checkbox" name="check">
                                                    <label for="check-8">Window Covering</label>
                                                </div>
                                                <!-- Checkboxes / End -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                <!-- Checkboxes -->
                                                <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                    <input id="check-9" type="checkbox" name="check">
                                                    <label for="check-9">WiFi</label>
                                                    <input id="check-10" type="checkbox" name="check">
                                                    <label for="check-10">TV Cable</label>
                                                    <input id="check-11" type="checkbox" name="check">
                                                    <label for="check-11">Dryer</label>
                                                    <input id="check-12" type="checkbox" name="check">
                                                    <label for="check-12">Microwave</label>
                                                    <input id="check-13" type="checkbox" name="check">
                                                    <label for="check-13">Washer</label>
                                                    <input id="check-14" type="checkbox" name="check">
                                                    <label for="check-14">Refrigerator</label>
                                                    <input id="check-15" type="checkbox" name="check">
                                                    <label for="check-15">Outdoor Shower</label>
                                                </div>
                                                <!-- Checkboxes / End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Search Form -->
            <section class="headings-2 pt-0">
                <div class="pro-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="listing-title-bar">
                            <div class="text-heading text-left">
                                <p class="font-weight-bold mb-0 mt-3">10 kết quả được tìm thấy</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center">
                        <div class="input-group border rounded input-group-lg w-auto mr-4">
                            <label
                                class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
                                for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                            <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby"
                                    data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3"
                                    id="inputGroupSelect01" name="sortby">
                                <option selected>Top Selling</option>
                                <option value="1">Most Viewed</option>
                                <option value="2">Price(low to high)</option>
                                <option value="3">Price(high to low)</option>
                            </select>
                        </div>
                        <div class="sorting-options">
                            <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                            <a href="properties-full-grid-1.html" class="change-view-btn lde"><i
                                    class="fa fa-th-large"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row featured portfolio-items">
                @foreach($motels as $motel)
                    <div class="item col-lg-4 col-md-12 col-xs-12 landscapes sale pr-0 pb-0 mt-4">
                        <div class="project-single mb-0 bb-0" data-aos="fade-up">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="{{route('client.motel.detail',['id' => $motel->motel_id])}}"
                                       class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>

                                        <img src="{{json_decode($motel->photo_gallery)[0]}}" alt="home-1"
                                             class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="{{route('client.motel.detail',['id' => $motel->motel_id])}}" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                       class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="{{route('client.motel.detail',['id' => $motel->motel_id])}}" class="img-poppu btn"><i
                                            class="fa fa-photo"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="col-lg-8 col-md-12 homes-content pb-0 mb-44 mt-4" data-aos="fade-up">
                        <!-- homes address -->
                        <h3><a href="{{route('client.motel.detail',['id' => $motel->motel_id])}}">{{$motel->room_number}}</a></h3>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="fa-sharp fa-solid fa-bolt"></i>
                                <span class="font-weight-bold">{{$motel->electric_money}}/số</span>
                            </li>
                            <li class="the-icons">
                                <i class="fa-sharp fa-solid fa-water"></i>
                                <span class="font-weight-bold">{{$motel->warter_money}}/khối</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span class="font-weight-bold">{{$motel->area}} m3</span>
                            </li>
                            <li class="the-icons">
                                <i class="fa-sharp fa-solid fa-shield"></i>
                                <span class="font-weight-bold">An ninh tốt</span>
                            </li>
                        </ul>
                        <div><span class="text-danger font-weight-bold">{{$motel->price}}/tháng</span></div>
                        <div class="footer">
                            <a href="{{route('client.motel.detail',['id' => $motel->motel_id])}}">
                                <img
                                    src="{{$motel->avatar ?? 'https://img.thuthuattinhoc.vn/uploads/2019/01/08/anh-anime-boy-dep-nhat_101905549.jpg'}}"
                                    alt="" class="mr-2"> {{$motel->name}}
                            </a>
                            <span>
                                <i class="fa fa-calendar"></i> {{\Carbon\Carbon::parse($motel->created_at)->format('h:i d/m/Y')}}
                            </span>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="my-4">
                {{$motels->links()}}
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
                                <img src="{{asset('assets/client/images/logo-footer.svg')}}" alt="netcom">
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto soluta
                                laboriosam, perspiciatis, aspernatur officiis esse.</p>
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
                            <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in
                                your inbox.</p>
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
    <!--register form end -->

    <!-- ARCHIVES JS -->
    <script src="{{asset('assets/client/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/client/js/rangeSlider.js')}}"></script>
    <script src="{{asset('assets/client/js/tether.min.js')}}"></script>
    <script src="{{asset('assets/client/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/client/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/client/js/mmenu.min.js')}}"></script>
    <script src="{{asset('assets/client/js/mmenu.js')}}"></script>
    <script src="{{asset('assets/client/js/aos.js')}}"></script>
    <script src="{{asset('assets/client/js/aos2.js')}}"></script>
    <script src="{{asset('assets/client/js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('assets/client/js/lightcase.js')}}"></script>
    <script src="{{asset('assets/client/js/search.js')}}"></script>
    <script src="{{asset('assets/clientjs/light.js/')}}"></script>
    <script src="{{asset('assets/client/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/client/js/popup.js')}}"></script>
    <script src="{{asset('assets/client/js/searched.js')}}"></script>
    <script src="{{asset('assets/client/js/ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/client/js/newsletter.js')}}"></script>
    <script src="{{asset('assets/client/js/leaflet.js')}}"></script>
    <script src="{{asset('assets/client/js/leaflet-gesture-handling.min.js')}}"></script>
    <script src="{{asset('assets/client/js/leaflet-providers.js')}}"></script>
    <script src="{{asset('assets/client/js/leaflet.markercluster.js')}}"></script>
    <script src="{{asset('assets/client/js/map4.js')}}"></script>
    <script src="{{asset('assets/client/js/inner.js')}}"></script>
    <script src="{{asset('assets/client/js/color-switcher.js')}}"></script>

    <script>
        $(".dropdown-filter").on('click', function () {

            $(".explore__form-checkbox-list").toggleClass("filter-block");

        });

    </script>

</div>
<!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/properties-top-map-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 14:24:50 GMT -->
</html>
