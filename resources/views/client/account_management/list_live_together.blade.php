@extends('layouts.client.main')

@section('content')

<section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1 d-none d-md-none d-lg-block" data-stellar-background-ratio="0.5">
    <div class="hero-main">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-12">
                    <div class="hero-inner">
                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h1 class="h1">Find Your Dream
                                <br class="d-md-none">
                                <span class="typed border-bottom"></span>
                            </h1>
                            <p class="mt-4">We Have Over Million Properties For You.</p>
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
                                                        <span>Tìm kiếm nâng cao</span>
                                                    </div>
                                                    <div class="pl-0">
                                                        <button class="btn btn-yellow" style="width:165px;">Tìm kiếm ngay</button>
                                                    </div>
                                                    <div class="explore__form-checkbox-list full-filter d-none d-none d-lg-none d-xl-flex  shadow p-3 mb-5 bg-body rounded">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 p-2">
                                                                <!-- Form Bedrooms -->
                                                                <div class="form-group beds">
                                                                    <div class="nice-select form-control wide" tabindex="0">
                                                                        <span class="current"><i class="fa fa-bed" aria-hidden="true"></i>Phòng ngủ</span>
                                                                        <ul class="list">
                                                                            <li data-value="1" class="option selected">1
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
                                                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i>
                                                                            Phòng tắm/WC</span>
                                                                        <ul class="list">
                                                                            <li data-value="1" class="option selected">1
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
                                                            <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                                <!-- Price Fields -->
                                                                <div class="main-search-field-2">
                                                                    <!-- Area Range -->
                                                                    <div class="range-slider">
                                                                        <label>Diện tích</label>
                                                                        <div id="area-range" data-min="0" data-max="50" data-unit="m&#178" class="area_range">
                                                                            <input type="text" name="" class="first-slider-value" id="first_slider_value" value="13" disabled>
                                                                            <input type="text" name="" class="second-slider-value" id="second_slider_value" disabled>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <br>
                                                                    <!-- Price Range -->
                                                                    <div class="range-slider">
                                                                        <label>Phạm vi giá</label>
                                                                        <div id="price-range" data-min="0" data-max="10000000" data-unit="VND "></div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                <!-- Checkboxes -->
                                                                <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                    <input id="check-2" type="checkbox" name="check">
                                                                    <label for="check-2">Điều hoà</label>
                                                                    <input id="check-3" type="checkbox" name="check">
                                                                    <label for="check-3">Thang máy</label>
                                                                    <input id="check-4" type="checkbox" name="check">
                                                                    <label for="check-4">Máy giặt</label>
                                                                    <input id="check-5" type="checkbox" name="check">
                                                                    <label for="check-5">Nóng lạnh</label>
                                                                    <input id="check-6" type="checkbox" name="check">
                                                                    <label for="check-6">Tủ lạnh</label>
                                                                    <input id="check-7" type="checkbox" name="check">
                                                                    <label for="check-7">Giường ngủ</label>
                                                                    <input id="check-8" type="checkbox" name="check">
                                                                    <label for="check-8">Tủ quần áo</label>
                                                                </div>
                                                                <!-- Checkboxes / End -->
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                <!-- Checkboxes -->
                                                                <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                    <input id="check-9" type="checkbox" name="check">
                                                                    <label for="check-9">WiFi</label>
                                                                    <input id="check-10" type="checkbox" name="check">
                                                                    <label for="check-10">Rèm cửa</label>
                                                                    <input id="check-11" type="checkbox" name="check">
                                                                    <label for="check-11">Bàn ghế ăn</label>
                                                                    <input id="check-12" type="checkbox" name="check">
                                                                    <label for="check-12">Bàn bếp</label>
                                                                    <input id="check-13" type="checkbox" name="check">
                                                                    <label for="check-13">Tủ bếp</label>
                                                                    <input id="check-14" type="checkbox" name="check">
                                                                    <label for="check-14">Chậu rửa</label>
                                                                    <input id="check-15" type="checkbox" name="check">
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
                                                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i>
                                                                            Phòng ngủ</span>
                                                                        <ul class="list">
                                                                            <li data-value="1" class="option selected">1
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
                                                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i>
                                                                            Phòng tắm/WC</span>
                                                                        <ul class="list">
                                                                            <li data-value="1" class="option selected">1
                                                                            </li>
                                                                            <li data-value="2" class="option">2</li>
                                                                            <li data-value="3" class="option">3</li>
                                                                            <li data-value="3" class="option">4</li>
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
                                                                        <label>Diện tích</label>
                                                                        <div id="area-range-rent" data-min="0" data-max="50" data-unit="m&#178"></div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <br>
                                                                    <!-- Price Range -->
                                                                    <div class="range-slider">
                                                                        <label>Phạm vi giá</label>
                                                                        <div id="price-range-rent" data-min="0" data-max="10000000" data-unit="VND "></div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                <!-- Checkboxes -->
                                                                <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                    <input id="check-2" type="checkbox" name="check">
                                                                    <label for="check-2">Điều hoà</label>
                                                                    <input id="check-3" type="checkbox" name="check">
                                                                    <label for="check-3">Thang máy</label>
                                                                    <input id="check-4" type="checkbox" name="check">
                                                                    <label for="check-4">Máy giặt</label>
                                                                    <input id="check-5" type="checkbox" name="check">
                                                                    <label for="check-5">Nóng lạnh</label>
                                                                    <input id="check-6" type="checkbox" name="check">
                                                                    <label for="check-6">Tủ lạnh</label>
                                                                    <input id="check-7" type="checkbox" name="check">
                                                                    <label for="check-7">Giường ngủ</label>
                                                                    <input id="check-8" type="checkbox" name="check">
                                                                    <label for="check-8">Tủ quần áo</label>
                                                                </div>
                                                                <!-- Checkboxes / End -->
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                <!-- Checkboxes -->
                                                                <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                    <input id="check-9" type="checkbox" name="check">
                                                                    <label for="check-9">WiFi</label>
                                                                    <input id="check-10" type="checkbox" name="check">
                                                                    <label for="check-10">Rèm cửa</label>
                                                                    <input id="check-11" type="checkbox" name="check">
                                                                    <label for="check-11">Bàn ghế ăn</label>
                                                                    <input id="check-12" type="checkbox" name="check">
                                                                    <label for="check-12">Bàn bếp</label>
                                                                    <input id="check-13" type="checkbox" name="check">
                                                                    <label for="check-13">Tủ bếp</label>
                                                                    <input id="check-14" type="checkbox" name="check">
                                                                    <label for="check-14">Chậu rửa</label>
                                                                    <input id="check-15" type="checkbox" name="check">
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

<!-- START MOTEL -->
<section class="featured portfolio bg-white-2 rec-pro p-4 mb-4">
    <div class="listing-title-bar mb-4" style="padding-left: 10px;">
        <div class="rtext-heading text-left">
            <p><a href="index.html">Trang chủ</a> &nbsp;/&nbsp; <span>Tìm người ở ghép</span></p>
        </div>
    </div>

    <div class="row portfolio-items">
        {{-- Start div motel --}}
        @foreach($motel as $key)
        <div class="item col-xl-3 col-lg-12 col-md-12 col-xs-12 landscapes sale">
            <div class="project-single" data-aos="fade-right">
                <div class="project-inner project-head">
                    <div class="homes">
                        <!-- homes img -->
                        <a href="#" class="homes-img">
                            <div class="homes-tag button alt featured" style="font-size: 10px;">{{$key->plan_title}}</div>
                            <div class="homes-tag button alt sale">Giảm giá</div>
                            <img src="{{json_decode($key->photo_gallery)[0]}}" alt="home-1" class="img-responsive">
                        </a>
                    </div>
                    <div class="button-effect">
                        <a href="{{route('client.live-together.detail',['id' => $key->motel_id])}}" class="btn"><i class="fa fa-link"></i></a>
                        <a href="https://www.youtube.com/watch?v=48EgQXJrww0" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                        <a href="{{route('client.live-together.detail',['id' => $key->motel_id])}}" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                    </div>
                </div>
                <!-- homes content -->
                <div class="homes-content">
                    <!-- homes address -->
                    <h3>
                        <span class="text-warning">
                            @for($i = 5 ; $i >= $key->priority_level;$i--)
                            <i class="fa-solid fa-star"></i>
                            @endfor
                        </span>
                        <a href="{{route('client.live-together.detail',['id' => $key->motel_id])}}">


                            @if($key->priority_level == 1)
                            <span title="{{json_decode($key->data_post)->title}}" style="color: #E13427">{{substr(json_decode($key->data_post)->title,0,40).'...'}}</span>
                            @endif
                        </a>
                    </h3>
                    <p class="homes-address mb-3">
                        <a href="{{route('client.live-together.detail',['id' => $key->motel_id])}}">
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
                            <a href="single-property-1.html">{{number_format($key->price, 0, ',', '.')}} VNĐ</a>
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
    {{-- @endforeach --}}

</section>
<!-- END MOTEL -->

<!-- START SECTION POPULAR PLACES -->

<!-- END SECTION WHY CHOOSE US -->

@endsection