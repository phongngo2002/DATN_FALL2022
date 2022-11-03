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
                                                    <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
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
                                    <div class="homes-tag button alt featured" style="font-size: 10px;"
                                    >{{$key->plan_title}}</div>
                                    <div class="homes-tag button alt sale">Giảm giá</div>
                                    <img
                                        src="{{json_decode($key->photo_gallery)[0]}}"
                                        alt="home-1"
                                        class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="{{route('client.live-together.detail',['id' => $key->motel_id])}}" class="btn"><i
                                        class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=48EgQXJrww0"
                                   class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="{{route('client.live-together.detail',['id' => $key->motel_id])}}"
                                   class="img-poppu btn"><i
                                        class="fa fa-photo"></i></a>
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
                                        <span style="color: #E13427">{{json_decode($key->data_post)->title}}</span>
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
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>{{$key->area}}</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>{{$key->max_people}} người</span>
                                </li>
                            </ul>
                            <p>
                                {!! json_decode($key->data_post)->title !!}
                            </p>
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
                <div class="item col-xl-3 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                    <div class="project-single" data-aos="fade-right">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="#" class="homes-img">
                                    <div class="homes-tag button alt featured" style="font-size: 10px;"
                                    >{{$key->plan_title}}</div>
                                    <div class="homes-tag button alt sale">Giảm giá</div>
                                    <img
                                        src="{{json_decode($key->photo_gallery)[0]}}"
                                        alt="home-1"
                                        class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="{{route('client.live-together.detail',['id' => $key->motel_id])}}" class="btn"><i
                                        class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=48EgQXJrww0"
                                   class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="{{route('client.live-together.detail',['id' => $key->motel_id])}}"
                                   class="img-poppu btn"><i
                                        class="fa fa-photo"></i></a>
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
                                        <span style="color: #E13427">{{json_decode($key->data_post)->title}}</span>
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
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>{{$key->area}}</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>{{$key->max_people}} người</span>
                                </li>
                            </ul>
                            <p>
                                {!! json_decode($key->data_post)->title !!}
                            </p>
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
                <div class="item col-xl-3 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                    <div class="project-single" data-aos="fade-right">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="#" class="homes-img">
                                    <div class="homes-tag button alt featured" style="font-size: 10px;"
                                    >{{$key->plan_title}}</div>
                                    <div class="homes-tag button alt sale">Giảm giá</div>
                                    <img
                                        src="{{json_decode($key->photo_gallery)[0]}}"
                                        alt="home-1"
                                        class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="{{route('client.live-together.detail',['id' => $key->motel_id])}}" class="btn"><i
                                        class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=48EgQXJrww0"
                                   class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="{{route('client.live-together.detail',['id' => $key->motel_id])}}"
                                   class="img-poppu btn"><i
                                        class="fa fa-photo"></i></a>
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
                                <a href="{{route('client.motel.detail',['id' => $key->motel_id])}}">


                                    @if($key->priority_level == 1)
                                        <span style="color: #E13427">{{json_decode($key->data_post)->title}}</span>
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
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>{{$key->area}}</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>{{$key->max_people}} người</span>
                                </li>
                            </ul>
                            <p>
                                {!! json_decode($key->data_post)->title !!}
                            </p>
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
                <div class="item col-xl-3 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                    <div class="project-single" data-aos="fade-right">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="#" class="homes-img">
                                    <div class="homes-tag button alt featured" style="font-size: 10px;"
                                    >{{$key->plan_title}}</div>
                                    <div class="homes-tag button alt sale">Giảm giá</div>
                                    <img
                                        src="{{json_decode($key->photo_gallery)[0]}}"
                                        alt="home-1"
                                        class="img-responsive">
                                </a>
                            </div>
                            <div class="button-effect">
                                <a href="{{route('client.live-together.detail',['id' => $key->motel_id])}}" class="btn"><i
                                        class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=48EgQXJrww0"
                                   class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a href="{{route('client.live-together.detail',['id' => $key->motel_id])}}"
                                   class="img-poppu btn"><i
                                        class="fa fa-photo"></i></a>
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
                                        <span style="color: #E13427">{{json_decode($key->data_post)->title}}</span>
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
                                <li class="the-icons">
                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                    <span>{{$key->area}}</span>
                                </li>
                                <li class="the-icons">
                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                    <span>{{$key->max_people}} người</span>
                                </li>
                            </ul>
                            <p>
                                {!! json_decode($key->data_post)->title !!}
                            </p>
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
        {{-- @endforeach --}}

    </section>
    <!-- END MOTEL -->

    <!-- START SECTION POPULAR PLACES -->

    <!-- END SECTION WHY CHOOSE US -->

@endsection
