@extends('layouts.client.main')

@section('content')
    <style>
        .a {
            color: white !important;
            font-weight: 400;
        }
    </style>
    <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1 d-none d-md-none d-lg-block"
             data-stellar-background-ratio="0.5">
        <div class="hero-main">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-inner">
                            <!-- Welcome Text -->
                            <div class="welcome-text">
                                <h1 class="h1">Tìm giấc mơ của bạn
                                    <br class="d-md-none">
                                    <span class="typed border-bottom"></span>
                                </h1>
                                <p class="mt-4">Chúng tôi có hơn 1 triệu lựa chọn cho bạn</p>
                            </div>
                            <!--/ End Welcome Text -->
                            <!-- Search Form -->
                            <form action="{{ route('home') }}" method="GET">
                                <div class="col-12">
                                    <div class="banner-search-wrap">
                                        <ul class="nav nav-tabs rld-banner-tab">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#tabs_1">Thuê phòng/căn hộ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tabs_2">Ở ghép</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="tabs_1">
                                                <div class="rld-main-search">
                                                    <div class="row">
                                                        <div class="rld-single-input">
                                                            <input type="text" placeholder="Nhập từ khoá..." name="keyword">
                                                        </div>
                                                        <div class="rld-single-select ml-22">
                                                            <select class="select single-select" name="categories">
                                                                <option>Danh mục</option>
                                                                <option value="1">Phòng trọ, nhà trọ</option>
                                                                <option value="2">Căn hộ mini</option>
                                                                <option value="3">Chung cư</option>
                                                            </select>
                                                        </div>
                                                        <div class="rld-single-select">
                                                            <select class="select single-select mr-0" name="address">
                                                                <option>Địa điểm</option>
                                                                <option value="1">Hà Nội</option>
                                                                <option value="2">TP Hồ Chí Minh</option>
                                                                <option value="3">Đà Nẵng</option>
                                                                <option value="4">Bắc Giang</option>
                                                            </select>
                                                        </div>
                                                        <div class="dropdown-filter d-none d-none d-lg-none d-xl-block">
                                                            <span>Tìm kiếm nâng cao</span></div>
                                                        <div class="pl-0">
                                                            <button class="btn btn-yellow" style="width:165px;">Tìm kiếm ngay</button>
                                                        </div>
                                                        <div
                                                            class="explore__form-checkbox-list full-filter d-none d-none d-lg-none d-xl-flex  shadow p-3 mb-5 bg-body rounded">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 p-2">
                                                                    <!-- Form Bedrooms -->
                                                                    <div class="form-group beds">
                                                                        <div class="nice-select form-control wide" tabindex="0">
                                                                            <span class="current"><i class="fa fa-bed" aria-hidden="true"></i>Phòng ngủ</span>
                                                                            <ul class="list">
                                                                                <li data-value="1"
                                                                                    class="option selected">1
                                                                                </li>
                                                                                <li data-value="2" class="option">2</li>
                                                                                <li data-value="3" class="option">3</li>
                                                                                <li data-value="3" class="option">4</li>
                                                                            </ul>
                                                                            <input type="hidden" name="bedroom">
                                                                        </div>
                                                                    </div>

                                                                    <!--/ End Form Bedrooms -->
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 p-2">
                                                                    <!-- Form Bathrooms -->
                                                                    <div class="form-group bath">
                                                                        <div class="nice-select form-control wide"
                                                                            tabindex="0"><span class="current"><i
                                                                                    class="fa fa-bath"
                                                                                    aria-hidden="true"></i>
                                                                                    Phòng tắm/WC</span>
                                                                            <ul class="list">
                                                                                <li data-value="1"
                                                                                    class="option selected">1
                                                                                </li>
                                                                                <li data-value="2" class="option">2</li>
                                                                                <li data-value="3" class="option">3</li>
                                                                                <li data-value="3" class="option">4</li>
                                                                            </ul>
                                                                            <input type="hidden" name="toilet">

                                                                        </div>
                                                                    </div>
                                                                    <!--/ End Form Bathrooms -->
                                                                </div>
                                                                <div
                                                                    class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                                    <!-- Price Fields -->
                                                                    <div class="main-search-field-2">
                                                                        <!-- Area Range -->
                                                                        <div class="range-slider">
                                                                            <label>Diện tích</label>
                                                                            <div id="area-range" data-min="0"
                                                                            data-max="50" data-unit="m&#178" class="area_range">
                                                                                <input type="text" name="" class="first-slider-value" id="first_slider_value" value="13" disabled>
                                                                                <input type="text" name="" class="second-slider-value" id="second_slider_value" disabled>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <br>
                                                                        <!-- Price Range -->
                                                                        <div class="range-slider">
                                                                            <label>Phạm vi giá</label>
                                                                            <div id="price-range" data-min="0"
                                                                                data-max="10000000" data-unit="VND "></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                    <!-- Checkboxes -->
                                                                    <div
                                                                        class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                        <input id="check-2" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-2">Điều hoà</label>
                                                                        <input id="check-3" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-3">Thang máy</label>
                                                                        <input id="check-4" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-4">Máy giặt</label>
                                                                        <input id="check-5" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-5">Nóng lạnh</label>
                                                                        <input id="check-6" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-6">Tủ lạnh</label>
                                                                        <input id="check-7" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-7">Giường ngủ</label>
                                                                        <input id="check-8" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-8">Tủ quần áo</label>
                                                                    </div>
                                                                    <!-- Checkboxes / End -->
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                    <!-- Checkboxes -->
                                                                    <div
                                                                        class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                        <input id="check-9" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-9">WiFi</label>
                                                                        <input id="check-10" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-10">Rèm cửa</label>
                                                                        <input id="check-11" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-11">Bàn ghế ăn</label>
                                                                        <input id="check-12" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-12">Bàn bếp</label>
                                                                        <input id="check-13" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-13">Tủ bếp</label>
                                                                        <input id="check-14" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-14">Chậu rửa</label>
                                                                        <input id="check-15" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-15">Húi mùi</label>
                                                                    </div>
                                                                    <!-- Checkboxes / End -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tabs_2">
                                                <div class="rld-main-search">
                                                    <div class="row">
                                                        <div class="rld-single-input">
                                                            <input type="text" placeholder="Nhập từ khoá...">
                                                        </div>
                                                        <div class="rld-single-select ml-22">
                                                            <select class="select single-select">
                                                                <option>Danh mục</option>
                                                                <option value="2">Phòng trọ, nhà trọ</option>
                                                                <option value="3">Căn hộ mini</option>
                                                                <option value="3">Chung cư</option>
                                                            </select>
                                                        </div>
                                                        <div class="rld-single-select">
                                                            <select class="select single-select mr-0">
                                                                <option>Địa điểm</option>
                                                                <option value="2">Hà Nội</option>
                                                                <option value="3">TP Hồ Chí Minh</option>
                                                                <option value="3">Đà Nẵng</option>
                                                                <option value="3">Bắc Giang</option>
                                                            </select>
                                                        </div>
                                                        <div class="dropdown-filter"><span>Tìm kiếm nâng cao</span></div>
                                                        <div class="pl-0">
                                                            <a class="btn btn-yellow" href="{{route('home')}}" style="width:165px;">Tìm kiếm ngay</a>
                                                        </div>
                                                        <div class="explore__form-checkbox-list full-filter shadow p-3 mb-5 bg-body rounded">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 p-2 ">
                                                                    <!-- Form Bedrooms -->
                                                                    <div class="form-group beds">
                                                                        <div class="nice-select form-control wide"
                                                                            tabindex="0"><span class="current"><i
                                                                                    class="fa fa-bed"
                                                                                    aria-hidden="true"></i>
                                                                                    Phòng ngủ</span>
                                                                            <ul class="list">
                                                                                <li data-value="1"
                                                                                    class="option selected">1
                                                                                </li>
                                                                                <li data-value="2" class="option">2</li>
                                                                                <li data-value="3" class="option">3</li>
                                                                                <li data-value="3" class="option">4</li>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!--/ End Form Bedrooms -->
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 p-2">
                                                                    <!-- Form Bathrooms -->
                                                                    <div class="form-group bath">
                                                                        <div class="nice-select form-control wide"
                                                                            tabindex="0"><span class="current"><i
                                                                                    class="fa fa-bath"
                                                                                    aria-hidden="true"></i>
                                                                                    Phòng tắm/WC</span>
                                                                            <ul class="list">
                                                                                <li data-value="1"
                                                                                    class="option selected">1
                                                                                </li>
                                                                                <li data-value="2" class="option">2</li>
                                                                                <li data-value="3" class="option">3</li>
                                                                                <li data-value="3" class="option">4</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!--/ End Form Bathrooms -->
                                                                </div>
                                                                <div
                                                                    class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                                    <!-- Price Fields -->
                                                                    <div class="main-search-field-2">
                                                                        <!-- Area Range -->
                                                                        <div class="range-slider">
                                                                            <label>Diện tích</label>
                                                                            <div id="area-range-rent" data-min="0"
                                                                                data-max="50" data-unit="m&#178" ></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <br>
                                                                        <!-- Price Range -->
                                                                        <div class="range-slider">
                                                                            <label>Phạm vi giá</label>
                                                                            <div id="price-range-rent" data-min="0"
                                                                                data-max="10000000" data-unit="VND "></div>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                    <!-- Checkboxes -->
                                                                    <div
                                                                        class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                        <input id="check-2" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-2">Điều hoà</label>
                                                                        <input id="check-3" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-3">Thang máy</label>
                                                                        <input id="check-4" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-4">Máy giặt</label>
                                                                        <input id="check-5" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-5">Nóng lạnh</label>
                                                                        <input id="check-6" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-6">Tủ lạnh</label>
                                                                        <input id="check-7" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-7">Giường ngủ</label>
                                                                        <input id="check-8" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-8">Tủ quần áo</label>
                                                                    </div>
                                                                    <!-- Checkboxes / End -->
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                    <!-- Checkboxes -->
                                                                    <div
                                                                        class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                        <input id="check-9" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-9">WiFi</label>
                                                                        <input id="check-10" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-10">Rèm cửa</label>
                                                                        <input id="check-11" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-11">Bàn ghế ăn</label>
                                                                        <input id="check-12" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-12">Bàn bếp</label>
                                                                        <input id="check-13" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-13">Tủ bếp</label>
                                                                        <input id="check-14" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-14">Chậu rửa</label>
                                                                        <input id="check-15" type="checkbox"
                                                                            name="check">
                                                                        <label for="check-15">Húi mùi</label>
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
                            </form>

                            <!--/ End Search Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HEADER SEARCH -->

    <!-- START SECTION POPULAR PLACES -->
    <section class="feature-categories bg-white rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2>Khu vực đa dạng</h2>
                <p>Các khu vực có nhiều phòng trọ nhất.</p>
            </div>
            <div class="row">
                <!-- Single category -->
                @foreach( $area as $i)
                    <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-1">
                                <a href="properties-full-grid-1.html"><img
                                        src="{{$i->image}}"
                                        alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">{{$i->name}}</a></h4>
                                <span>{{$i->quantity}} Phòng trọ</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /row -->
        </div>
    </section>
    <!-- END SECTION POPULAR PLACES -->

    <!-- START SECTION FEATURED PROPERTIES -->
    <section class="featured portfolio bg-white-2 rec-pro full-l">
        <div class="container-fluid">
            <div class="sec-title">
                <h2>Phòng trọ Nổi bật</h2>
                <p>These are our featured properties</p>
            </div>
            <div class="row portfolio-items">
                {{-- Start div motel --}}
                @foreach($motel as $key)
                    <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-right">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button alt sale">Giảm giá</div>
                                        <img
                                            style="height: 100%"
                                            src="{{json_decode($key->photo_gallery_i)[0]}}"
                                            alt="home-1"
                                            class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="{{route('client.motel.detail',['id' => $key->motel_id])}}" class="btn"><i
                                            class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=48EgQXJrww0"
                                       class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="{{route('client.motel.detail',['id' => $key->motel_id])}}"
                                       class="img-poppu btn"><i
                                            class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3>
                                    <a href="{{route('client.motel.detail',['id' => $key->motel_id])}}">{{$key->areaName.'- '.$key->room_number}} </a>
                                </h3>
                                <p class="homes-address mb-3">
                                    <a href="{{route('client.motel.detail',['id' => $key->motel_id])}}">
                                        <i class="fa fa-map-marker"></i><span
                                            title="{{$key->address}}">{{$key->address}}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>{{json_decode($key->services)->bedroom}} Phòng ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>{{json_decode($key->services)->toilet}} Phòng tắm</span>
                                    </li>

                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                        <a href="{{route('client.motel.detail',['id' => $key->motel_id])}}">{{number_format($key->price, 0, ',', '.')}}
                                            vnđ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- End div motel --}}

            </div>
            <div class="bg-all">
                <a href="properties-full-grid-1.html" class="btn btn-outline-light">Xem thêm</a>
            </div>
        </div>
    </section>
    <!-- END SECTION FEATURED PROPERTIES -->
    <section class="featured portfolio disc rec-pro full-l">
        <div class="container-fluid">
            <div class="sec-title">
                <h2 style="color:white">Tìm người ở ghép</h2>
                <!-- <p>These are our featured properties</p> -->
            </div>
            <div class="row portfolio-items">
                {{-- Start div motel --}}
                @foreach($contact as $key)
                    <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-right">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button alt sale">Giảm giá</div>
                                        <img
                                            src="{{json_decode($key->photo_gallery)[0]}}"
                                            alt="home-1"
                                            class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="{{route('client.live-together.detail',['id' => $key->id])}}" class="btn"><i
                                            class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                       class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="{{route('client.live-together.detail',['id' => $key->id])}}"
                                       class="img-poppu btn"><i
                                            class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3>
                                    <a href="{{route('client.live-together.detail',['id' => $key->id])}}">{{json_decode($key->data_post)->title}} </a>
                                </h3>
                                <p class="homes-address mb-3">
                                    <a href="{{route('client.live-together.detail',['id' => $key->id])}}">
                                        <i class="fa fa-map-marker"></i><span>{{$key->address}}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>{{json_decode($key->services)->bedroom}} Phòng ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>{{json_decode($key->services)->toilet}} Phòng tắm</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                        <a href="{{route('client.live-together.detail',['id' => $key->id])}}">{{number_format($key->price, 0, ',', '.')}}
                                            VNĐ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="{{route('client.live-together.detail',['id' => $key->id])}}"
                                           title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="{{route('client.live-together.detail',['id' => $key->id])}}"
                                           title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="{{route('client.live-together.detail',['id' => $key->id])}}"
                                           title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- End div motel --}}

            </div>
            <div class="bg-all">
                <a href="properties-full-grid-1.html" class="btn btn-outline-light">Xem thêm</a>
            </div>
        </div>
    </section>

    <!-- START SECTION WHY CHOOSE US -->
{{--    <section class="how-it-works bg-white rec-pro">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="sec-title">--}}
{{--                <h2><span>Why </span>Choose Us</h2>--}}
{{--                <p>We provide full service at every step.</p>--}}
{{--            </div>--}}
{{--            <div class="row service-1">--}}
{{--                <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">--}}
{{--                    <div class="serv-flex">--}}
{{--                        <div class="art-1 img-13">--}}
{{--                            <img src="{{asset('assets/client/images/icons/icon-4.svg')}}" alt="">--}}
{{--                            <h3>--}}
{{--                                Sự biến đổi đa dạng của các thuộc tính</h3>--}}
{{--                        </div>--}}
{{--                        <div class="service-text-p">--}}
{{--                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur--}}
{{--                                debits adipisicing lacus consectetur Business Directory.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--                <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">--}}
{{--                    <div class="serv-flex">--}}
{{--                        <div class="art-1 img-14">--}}
{{--                            <img src="{{asset('assets/client/images/icons/icon-5.svg')}}" alt="">--}}
{{--                            <h3>Trusted by thousands</h3>--}}
{{--                        </div>--}}
{{--                        <div class="service-text-p">--}}
{{--                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur--}}
{{--                                debits adipisicing lacus consectetur Business Directory.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--                <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">--}}
{{--                    <div class="serv-flex arrow">--}}
{{--                        <div class="art-1 img-15">--}}
{{--                            <img src="{{asset('assets/client/images/icons/icon-6.svg')}}" alt="">--}}
{{--                            <h3>Financing made easy</h3>--}}
{{--                        </div>--}}
{{--                        <div class="service-text-p">--}}
{{--                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur--}}
{{--                                debits adipisicing lacus consectetur Business Directory.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--                <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt its-2" data-aos="fade-up"--}}
{{--                         data-aos-delay="450">--}}
{{--                    <div class="serv-flex">--}}
{{--                        <div class="art-1 img-14">--}}
{{--                            <img src="{{asset('assets/client/images/icons/icon-15.svg')}}" alt="">--}}
{{--                            <h3>We are here near you</h3>--}}
{{--                        </div>--}}
{{--                        <div class="service-text-p">--}}
{{--                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur--}}
{{--                                debits adipisicing lacus consectetur Business Directory.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- END SECTION WHY CHOOSE US -->

    <!-- START SECTION RECENTLY PROPERTIES -->

    <!-- END SECTION RECENTLY PROPERTIES -->

    <!-- START SECTION AGENTS -->
    <section class="team bg-white rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Meet Our </span>Agents</h2>
                <p>Our Agents are here to help you</p>
            </div>
            <div class="row team-all">
                <!--Team Block-->
                <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="150">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="{{asset('assets/client/images/team/t-5.jpg')}}"
                                                                    alt=""/></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Carls Jhons</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="250">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="{{asset('assets/client/images/team/t-6.jpg')}}"
                                                                    alt=""/></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Arling Tracy</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="350">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="{{asset('assets/client/images/team/t-7.jpg')}}"
                                                                    alt=""/></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Mark Web</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up"
                     data-aos-delay="450">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="{{asset('assets/client/images/team/t-8.jpg')}}"
                                                                    alt=""/></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Katy Grace</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div>
                <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up"
                     data-aos-delay="550">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img
                                    src="{{asset('assets/client/images/team/team-image-2.jpg')}}" alt=""/></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Chris Melo</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div>
                <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up"
                     data-aos-delay="650">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img
                                    src="{{asset('assets/client/images/team/team-image-7.jpg')}}" alt=""/></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Nina Thomas</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        window.history.pushState("", "", 'http://phong.ngo');
            var first_slider_value = document.getElementById('first_slider_value');
            console.log(first_slider_value)
            first_slider_value.addEventListener('change',function(){
                console.log(first_slider_value.value);
            })

    </script>
@endsection