@extends('layouts.client.main')

@section('content')
    <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1 d-none d-md-none d-lg-block"
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
                                                    <div class="dropdown-filter d-none d-none d-lg-none d-xl-block">
                                                        <span>Advanced Search</span></div>
                                                    <div class="pl-0">
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
                                                                        <div id="area-range" data-min="0"
                                                                             data-max="1300" data-unit="sq ft"></div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <br>
                                                                    <!-- Price Range -->
                                                                    <div class="range-slider">
                                                                        <label>Price Range</label>
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
                                        src="https://picsum.photos/200/300"
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
                                        <img src="data:image/jpeg;base64,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"
                                             alt="home-1"
                                             class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                       class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i
                                            class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">{{$key->room_number}} </a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
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
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>{{$key->area}}</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>{{$key->max_people}} người</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                        <a href="single-property-1.html">{{$key->price}}đ</a>
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
                                        <div class="homes-tag button alt featured"  >Nổi bật</div>
                                        <div class="homes-tag button alt sale">Giảm giá</div>
                                        <img src="{{'https://img.lovepik.com/photo/20211122/medium/lovepik-bright-and-clean-indoor-pictures-of-residential-picture_500719643.jpg'}}" alt="home-1"
                                             class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                       class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i
                                            class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">{{$key->room_number}} </a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
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
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>{{$key->area}}</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>{{$key->max_people}} người</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                        <a href="single-property-1.html">{{$key->price}}đ</a>
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

    <!-- START SECTION WHY CHOOSE US -->
    <section class="how-it-works bg-white rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Why </span>Choose Us</h2>
                <p>We provide full service at every step.</p>
            </div>
            <div class="row service-1">
                <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                    <div class="serv-flex">
                        <div class="art-1 img-13">
                            <img src="{{asset('assets/client/images/icons/icon-4.svg')}}" alt="">
                            <h3>Wide Renge Of Properties</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                    <div class="serv-flex">
                        <div class="art-1 img-14">
                            <img src="{{asset('assets/client/images/icons/icon-5.svg')}}" alt="">
                            <h3>Trusted by thousands</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                    <div class="serv-flex arrow">
                        <div class="art-1 img-15">
                            <img src="{{asset('assets/client/images/icons/icon-6.svg')}}" alt="">
                            <h3>Financing made easy</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt its-2" data-aos="fade-up"
                         data-aos-delay="450">
                    <div class="serv-flex">
                        <div class="art-1 img-14">
                            <img src="{{asset('assets/client/images/icons/icon-15.svg')}}" alt="">
                            <h3>We are here near you</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                debits adipisicing lacus consectetur Business Directory.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
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

@endsection
