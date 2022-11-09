@extends('layouts.client.main')

@section('content')

    <!-- STAR HEADER SEARCH -->
    <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1"
             data-stellar-background-ratio="0.5">
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
                            <div class="col-12">
                                <div class="banner-search-wrap">
                                    <ul class="nav nav-tabs rld-banner-tab">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#tabs_1">For Sale</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tabs_2">For Rent</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tabs_1">
                                            <div class="rld-main-search">
                                                <div class="row">
                                                    <div class="rld-single-input">
                                                        <input type="text" placeholder="Tìm kiếm..">
                                                    </div>
                                                    <div class="rld-single-select ml-22">
                                                        <select class="select single-select">
                                                            <option value="1">Danh mục</option>
                                                            <option value="2">Family House</option>
                                                            <option value="3">Apartment</option>
                                                            <option value="3">Condo</option>
                                                        </select>
                                                    </div>
                                                    <div class="rld-single-select">
                                                        <select class="select single-select mr-0">
                                                            <option value="1">Khu vực</option>
                                                            <option value="2">Los Angeles</option>
                                                            <option value="3">Chicago</option>
                                                            <option value="3">Philadelphia</option>
                                                            <option value="3">San Francisco</option>
                                                            <option value="3">Miami</option>
                                                            <option value="3">Houston</option>
                                                        </select>
                                                    </div>
                                                    <div class="dropdown-filter d-none d-none d-lg-none d-xl-block">
                                                        <span>Nhiều hơn</span></div>
                                                    <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                        <a class="btn btn-yellow" href="#">Search Now</a>
                                                    </div>
                                                    <div
                                                        class="explore__form-checkbox-list full-filter d-none d-none d-lg-none d-xl-flex">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                <!-- Form Property Status -->
                                                                <div class="form-group categories">
                                                                    <div class="nice-select form-control wide"
                                                                         tabindex="0"><span class="current"><i
                                                                                class="fa fa-home"></i>Trạng thái</span>
                                                                        <ul class="list">
                                                                            <li data-value="1"
                                                                                class="option selected ">Giảm giá
                                                                            </li>
                                                                            <li data-value="2" class="option">Gần đây
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!--/ End Form Property Status -->
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
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
                                                                            <li data-value="3" class="option">5</li>
                                                                            <li data-value="3" class="option">6</li>
                                                                            <li data-value="3" class="option">7</li>
                                                                            <li data-value="3" class="option">8</li>
                                                                            <li data-value="3" class="option">9</li>
                                                                            <li data-value="3" class="option">10
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!--/ End Form Bedrooms -->
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                                <!-- Form Bathrooms -->
                                                                <div class="form-group bath">
                                                                    <div class="nice-select form-control wide"
                                                                         tabindex="0"><span class="current"><i
                                                                                class="fa fa-bath"
                                                                                aria-hidden="true"></i>
                                                                                Phòng tắm</span>
                                                                        <ul class="list">
                                                                            <li data-value="1"
                                                                                class="option selected">1
                                                                            </li>
                                                                            <li data-value="2" class="option">2</li>
                                                                            <li data-value="3" class="option">3</li>
                                                                            <li data-value="3" class="option">4</li>
                                                                            <li data-value="3" class="option">5</li>
                                                                            <li data-value="3" class="option">6</li>
                                                                            <li data-value="3" class="option">7</li>
                                                                            <li data-value="3" class="option">8</li>
                                                                            <li data-value="3" class="option">9</li>
                                                                            <li data-value="3" class="option">10
                                                                            </li>
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
                                                                        <div id="area-range" data-min="0"
                                                                             data-unit="sq ft"></div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <br>
                                                                    <!-- Price Range -->
                                                                    <div class="range-slider">
                                                                        <label>Sắp xếp theo giá</label>
                                                                        <div id="price-range" data-min="0"
                                                                             data-max="600000" data-unit="$"></div>
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
                                                                    <label for="check-2">Air Conditioning</label>
                                                                    <input id="check-3" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-3">Swimming Pool</label>
                                                                    <input id="check-4" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-4">Central Heating</label>
                                                                    <input id="check-5" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-5">Laundry Room</label>
                                                                    <input id="check-6" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-6">Gym</label>
                                                                    <input id="check-7" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-7">Alarm</label>
                                                                    <input id="check-8" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-8">Window Covering</label>
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
                                                                    <label for="check-10">TV Cable</label>
                                                                    <input id="check-11" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-11">Dryer</label>
                                                                    <input id="check-12" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-12">Microwave</label>
                                                                    <input id="check-13" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-13">Washer</label>
                                                                    <input id="check-14" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-14">Refrigerator</label>
                                                                    <input id="check-15" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-15">Outdoor Shower</label>
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
                                                    <div class="pl-0">
                                                        <a class="btn btn-yellow" href="#">Search Now</a>
                                                    </div>
                                                    <div class="explore__form-checkbox-list full-filter">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                <!-- Form Property Status -->
                                                                <div class="form-group categories">
                                                                    <div class="nice-select form-control wide"
                                                                         tabindex="0"><span class="current"><i
                                                                                class="fa fa-home"></i>Property
                                                                                Status</span>
                                                                        <ul class="list">
                                                                            <li data-value="1"
                                                                                class="option selected ">For Sale
                                                                            </li>
                                                                            <li data-value="2" class="option">For
                                                                                Rent
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!--/ End Form Property Status -->
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                                <!-- Form Bedrooms -->
                                                                <div class="form-group beds">
                                                                    <div class="nice-select form-control wide"
                                                                         tabindex="0"><span class="current"><i
                                                                                class="fa fa-bed"
                                                                                aria-hidden="true"></i>
                                                                                Bedrooms</span>
                                                                        <ul class="list">
                                                                            <li data-value="1"
                                                                                class="option selected">1
                                                                            </li>
                                                                            <li data-value="2" class="option">2</li>
                                                                            <li data-value="3" class="option">3</li>
                                                                            <li data-value="3" class="option">4</li>
                                                                            <li data-value="3" class="option">5</li>
                                                                            <li data-value="3" class="option">6</li>
                                                                            <li data-value="3" class="option">7</li>
                                                                            <li data-value="3" class="option">8</li>
                                                                            <li data-value="3" class="option">9</li>
                                                                            <li data-value="3" class="option">10
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <!--/ End Form Bedrooms -->
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                                <!-- Form Bathrooms -->
                                                                <div class="form-group bath">
                                                                    <div class="nice-select form-control wide"
                                                                         tabindex="0"><span class="current"><i
                                                                                class="fa fa-bath"
                                                                                aria-hidden="true"></i>
                                                                                Bathrooms</span>
                                                                        <ul class="list">
                                                                            <li data-value="1"
                                                                                class="option selected">1
                                                                            </li>
                                                                            <li data-value="2" class="option">2</li>
                                                                            <li data-value="3" class="option">3</li>
                                                                            <li data-value="3" class="option">4</li>
                                                                            <li data-value="3" class="option">5</li>
                                                                            <li data-value="3" class="option">6</li>
                                                                            <li data-value="3" class="option">7</li>
                                                                            <li data-value="3" class="option">8</li>
                                                                            <li data-value="3" class="option">9</li>
                                                                            <li data-value="3" class="option">10
                                                                            </li>
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
                                                                        <label>Area Size</label>
                                                                        <div id="area-range-rent" data-min="0"
                                                                             data-max="1300" data-unit="sq ft"></div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <br>
                                                                    <!-- Price Range -->
                                                                    <div class="range-slider">
                                                                        <label>Price Range</label>
                                                                        <div id="price-range-rent" data-min="0"
                                                                             data-max="600000" data-unit="$"></div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                <!-- Checkboxes -->
                                                                <div
                                                                    class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                    <input id="check-16" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-16">Air Conditioning</label>
                                                                    <input id="check-17" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-17">Swimming Pool</label>
                                                                    <input id="check-18" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-18">Central Heating</label>
                                                                    <input id="check-19" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-19">Laundry Room</label>
                                                                    <input id="check-20" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-20">Gym</label>
                                                                    <input id="check-21" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-21">Alarm</label>
                                                                    <input id="check-22" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-22">Window Covering</label>
                                                                </div>
                                                                <!-- Checkboxes / End -->
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                <!-- Checkboxes -->
                                                                <div
                                                                    class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                    <input id="check-23" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-23">WiFi</label>
                                                                    <input id="check-24" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-24">TV Cable</label>
                                                                    <input id="check-25" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-25">Dryer</label>
                                                                    <input id="check-26" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-26">Microwave</label>
                                                                    <input id="check-27" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-27">Washer</label>
                                                                    <input id="check-28" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-28">Refrigerator</label>
                                                                    <input id="check-29" type="checkbox"
                                                                           name="check">
                                                                    <label for="check-29">Outdoor Shower</label>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HEADER SEARCH -->
    <!-- <div class="listing-title-bar" style="padding-left: 10px;">
        <div class="rtext-heading text-left">
            <p><a href="index.html">Trang chủ</a> &nbsp;/&nbsp; <span>Phòng trọ</span></p>
        </div>
        <h3>Phòng trọ</h3>
    </div> -->
    <!-- START SECTION FEATURED PROPERTIES -->
    <section class="featured portfolio bg-white-2 rec-pro full-l" style="padding-top: 10px;">
        <div class="container-fluid">
            <div class="listing-title-bar" style="padding-left: 10px;">
                <div class="rtext-heading text-left">
                    <p><a href="index.html">Trang chủ</a> &nbsp;/&nbsp; <span>Phòng trọ</span></p>
                </div>
            </div>
            <div class="row portfolio-items">
                @foreach($motel as $key)
                    <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-right">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="{{route('client.motel.detail',['id' => $key->motel_id])}}"
                                       class="homes-img">
                                        <div
                                            class="homes-tag button alt featured">{{str_replace('Gói','',$key->name)}}</div>
                                        <div class="homes-tag button alt sale">Giảm giá</div>
                                        <img
                                            src="{{json_decode($key->photo_gallery)[0]}}"
                                            alt="home-1"
                                            class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="{{route('client.motel.detail',['id' => $key->motel_id])}}" class="btn"><i
                                            class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY"
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
                                    <a href="{{route('client.motel.detail',['id' => $key->motel_id])}}">{{$key->areaName.' - '.$key->room_number}}
                                        @for($i = 5 ; $i >= $key->priority_level;$i--)
                                            <i class="fa-solid fa-star text-warning"></i>
                                        @endfor
                                    </a>

                                </h3>
                                <p class="homes-address mb-3">
                                    <a href="{{route('client.motel.detail',['id' => $key->motel_id])}}">
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
                                        <a href="{{route('client.motel.detail',['id' => $key->motel_id])}}">{{number_format($key->price, 0, ',', '.')}}
                                            VNĐ</a>
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
                <div class="bg-all">
                    <nav aria-label="..." class="agents pt-55">
                        {!! $motel->links() !!}
                    </nav>
                </div>
            </div>
        </div>
    </section>
    {{$motel->links()}}
    <!-- END SECTION FEATURED PROPERTIES -->



    <!-- START FOOTER -->
    {{--    <footer class="first-footer rec-pro">--}}
    {{--        <div class="top-footer">--}}
    {{--            <div class="container-fluid">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-lg-3 col-md-6">--}}
    {{--                        <div class="netabout">--}}
    {{--                            <a href="index.html" class="logo">--}}
    {{--                                <img src="images/logo-footer.svg" alt="netcom">--}}
    {{--                            </a>--}}
    {{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto--}}
    {{--                                soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>--}}
    {{--                        </div>--}}
    {{--                        <div class="contactus">--}}
    {{--                            <ul>--}}
    {{--                                <li>--}}
    {{--                                    <div class="info">--}}
    {{--                                        <i class="fa fa-map-marker" aria-hidden="true"></i>--}}
    {{--                                        <p class="in-p">95 South Park Avenue, USA</p>--}}
    {{--                                    </div>--}}
    {{--                                </li>--}}
    {{--                                <li>--}}
    {{--                                    <div class="info">--}}
    {{--                                        <i class="fa fa-phone" aria-hidden="true"></i>--}}
    {{--                                        <p class="in-p">+456 875 369 208</p>--}}
    {{--                                    </div>--}}
    {{--                                </li>--}}
    {{--                                <li>--}}
    {{--                                    <div class="info">--}}
    {{--                                        <i class="fa fa-envelope" aria-hidden="true"></i>--}}
    {{--                                        <p class="in-p ti">support@findhouses.com</p>--}}
    {{--                                    </div>--}}
    {{--                                </li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-3 col-md-6">--}}
    {{--                        <div class="navigation">--}}
    {{--                            <h3>Navigation</h3>--}}
    {{--                            <div class="nav-footer">--}}
    {{--                                <ul>--}}
    {{--                                    <li><a href="index.html">Home One</a></li>--}}
    {{--                                    <li><a href="properties-right-sidebar.html">Properties Right</a></li>--}}
    {{--                                    <li><a href="properties-full-list.html">Properties List</a></li>--}}
    {{--                                    <li><a href="properties-details.html">Property Details</a></li>--}}
    {{--                                    <li class="no-mgb"><a href="agents-listing-grid.html">Agents Listing</a></li>--}}
    {{--                                </ul>--}}
    {{--                                <ul class="nav-right">--}}
    {{--                                    <li><a href="agent-details.html">Agents Details</a></li>--}}
    {{--                                    <li><a href="about.html">About Us</a></li>--}}
    {{--                                    <li><a href="blog.html">Blog Default</a></li>--}}
    {{--                                    <li><a href="blog-details.html">Blog Details</a></li>--}}
    {{--                                    <li class="no-mgb"><a href="contact-us.html">Contact Us</a></li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-3 col-md-6">--}}
    {{--                        <div class="widget">--}}
    {{--                            <h3>Twitter Feeds</h3>--}}
    {{--                            <div class="twitter-widget contuct">--}}
    {{--                                <div class="twitter-area">--}}
    {{--                                    <div class="single-item">--}}
    {{--                                        <div class="icon-holder">--}}
    {{--                                            <i class="fa fa-twitter" aria-hidden="true"></i>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="text">--}}
    {{--                                            <h5><a href="#">@findhouses</a> all share them with me baby said inspet.--}}
    {{--                                            </h5>--}}
    {{--                                            <h4>about 5 days ago</h4>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="single-item">--}}
    {{--                                        <div class="icon-holder">--}}
    {{--                                            <i class="fa fa-twitter" aria-hidden="true"></i>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="text">--}}
    {{--                                            <h5><a href="#">@findhouses</a> all share them with me baby said inspet.--}}
    {{--                                            </h5>--}}
    {{--                                            <h4>about 5 days ago</h4>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="single-item">--}}
    {{--                                        <div class="icon-holder">--}}
    {{--                                            <i class="fa fa-twitter" aria-hidden="true"></i>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="text">--}}
    {{--                                            <h5><a href="#">@findhouses</a> all share them with me baby said inspet.--}}
    {{--                                            </h5>--}}
    {{--                                            <h4>about 5 days ago</h4>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-lg-3 col-md-6">--}}
    {{--                        <div class="newsletters">--}}
    {{--                            <h3>Newsletters</h3>--}}
    {{--                            <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive--}}
    {{--                                news in your inbox.</p>--}}
    {{--                        </div>--}}
    {{--                        <form class="bloq-email mailchimp form-inline" method="post">--}}
    {{--                            <label for="subscribeEmail" class="error"></label>--}}
    {{--                            <div class="email">--}}
    {{--                                <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">--}}
    {{--                                <input type="submit" value="Subscribe">--}}
    {{--                                <p class="subscription-success"></p>--}}
    {{--                            </div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="second-footer rec-pro">--}}
    {{--            <div class="container-fluid sd-f">--}}
    {{--                <p>2021 © Copyright - All Rights Reserved.</p>--}}
    {{--                <ul class="netsocials">--}}
    {{--                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>--}}
    {{--                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>--}}
    {{--                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>--}}
    {{--                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </footer>--}}

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

    <!-- START PRELOADER -->
    {{-- <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div> --}}
    <!-- END PRELOADER -->
@endsection
{{-- <!-- ARCHIVES JS -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/rangeSlider.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/aos.js"></script>
<script src="js/aos2.js"></script>
<script src="js/animate.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/fitvids.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/typed.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/lightcase.js"></script>
<script src="js/search.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/ajaxchimp.min.js"></script>
<script src="js/newsletter.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/searched.js"></script>
<script src="js/forms-2.js"></script>
<script src="js/map-style2.js"></script>
<script src="js/range.js"></script>
<script src="js/color-switcher.js"></script>
<script>
    $(window).on('scroll load', function () {
        $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
    });

</script>

<!-- Slider Revolution scripts -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

<script>
    var typed = new Typed('.typed', {
        strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
        smartBackspace: false,
        loop: true,
        showCursor: true,
        cursorChar: "|",
        typeSpeed: 50,
        backSpeed: 30,
        startDelay: 800
    });

</script>

<script>
    $('.slick-lancers').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 1292,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 993,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 769,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false
            }
        }]
    });

</script>

<script>
    $('.job_clientSlide').owlCarousel({
        items: 2,
        loop: true,
        margin: 30,
        autoplay: false,
        nav: true,
        smartSpeed: 1000,
        slideSpeed: 1000,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            991: {
                items: 3
            }
        }
    });

</script>

<script>
    $('.style2').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        autoWidth: false,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 2,
                margin: 20
            },
            400: {
                items: 2,
                margin: 20
            },
            500: {
                items: 3,
                margin: 20
            },
            768: {
                items: 4,
                margin: 20
            },
            992: {
                items: 5,
                margin: 20
            },
            1000: {
                items: 7,
                margin: 20
            }
        }
    });

</script>

<script>
    $(".dropdown-filter").on('click', function () {

        $(".explore__form-checkbox-list").toggleClass("filter-block");

    });

</script>

<!-- MAIN JS -->
<script src="js/script.js"></script>

</div>
<!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 14:23:46 GMT -->

</html> --}}
