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
        {{-- @foreach ($motels as $motel) --}}
        <div class="container-fluid mb-4">
            <div class="portfolio col-xl-12">
                <div class="slick-lancers">
                    @foreach ($motels as $motel)
                    @if ($motel->plan_id === 6)
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">{{$motel->plan_name}}</div>
                                                {{-- <div class="homes-tag button alt sale">For Sale</div> --}}
                                                <img src="{{$motel->photo_gallery1}}" style="height: 260px; width: 350px;object-fit: cover;">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3>
                                            <span>
                                                <i class="fa-sharp fa-solid fa-star" style="color: #FFD454"></i>
                                                <i class="fa-sharp fa-solid fa-star" style="color: #FFD454"></i>
                                                <i class="fa-sharp fa-solid fa-star" style="color: #FFD454"></i>
                                                <i class="fa-sharp fa-solid fa-star" style="color: #FFD454"></i>
                                                <i class="fa-sharp fa-solid fa-star" style="color: #FFD454"></i>
                                            </span>
                                            <a href="single-property-1.html" style="color:#ff002f">{{$motel->data_post->title}}</a>
                                        </h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>{{$motel->address}}</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>{{$motel->services->bed}}</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>{{$motel->services->toilet}}</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>{{$motel->area}} m2</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">{{number_format($motel->price,0,",",".")}} đ</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                </div>
            </div>
        </div>

        <div class="container-fluid mb-4">
            <div class="portfolio col-xl-12">
                <div class="slick-lancers">
                    @foreach ($motels as $motel)
                    @if ($motel->plan_id === 5)
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img" >
                                                <div class="homes-tag button alt featured">{{$motel->plan_name}}</div>
                                                {{-- <div class="homes-tag button alt sale">For Sale</div> --}}
                                                <img src="{{$motel->photo_gallery1}}" style="height: 260px; width: 350px;object-fit: cover;">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3>
                                            <span>
                                                <i class="fa-sharp fa-solid fa-star" style="color: #FFD454"></i>
                                                <i class="fa-sharp fa-solid fa-star" style="color: #FFD454"></i>
                                                <i class="fa-sharp fa-solid fa-star" style="color: #FFD454"></i>
                                                <i class="fa-sharp fa-solid fa-star" style="color: #FFD454"></i>
                                            </span>
                                            <a href="single-property-1.html">{{$motel->data_post->title}}</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>{{$motel->address}}</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>{{$motel->services->bed}}</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>{{$motel->services->toilet}}</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>{{$motel->area}} m2</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">{{number_format($motel->price,0,",",".")}} đ</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                </div>
            </div>
        </div>

        <div class="container-fluid mb-4">
            <div class="portfolio col-xl-12">
                <div class="slick-lancers">
                    @foreach ($motels as $motel)
                    @if ($motel->plan_id === 4)
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">{{$motel->plan_name}}</div>
                                                {{-- <div class="homes-tag button alt sale">For Sale</div> --}}
                                                <img src="{{$motel->photo_gallery1}}" style="height: 260px; width: 350px;object-fit: cover;">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3>
                                            <span>
                                                <i class="fa-sharp fa-solid fa-star" style="color: #FFD454"></i>
                                                <i class="fa-sharp fa-solid fa-star" style="color: #FFD454"></i>
                                                <i class="fa-sharp fa-solid fa-star" style="color: #FFD454"></i>
                                            </span>
                                            <a href="single-property-1.html">{{$motel->data_post->title}}</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>{{$motel->address}}</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>{{$motel->services->bed}}</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>{{$motel->services->toilet}}</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>{{$motel->area}} m2</span>
                                            </li>
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a href="single-property-1.html">{{number_format($motel->price,0,",",".")}} đ</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Compare">
                                                    <i class="fas fa-exchange-alt"></i>
                                                </a>
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                </div>
            </div>
        </div>


        {{-- @endforeach --}}
        
    </section>
    <!-- END MOTEL -->

    <!-- START SECTION POPULAR PLACES -->
    <section class="feature-categories bg-white rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2>Khu vực đa dạng</h2>
                <p>Các khu vực có nhiều phòng trọ nhất.</p>
            </div>
            <div class="row">
                <!-- Single category -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="small-category-2">
                        <div class="small-category-2-thumb img-1">
                            <a href="properties-full-grid-1.html"><img
                                    src="{{asset('assets/client/images/popular-places/12.jpg')}}"
                                    alt=""></a>
                        </div>
                        <div class="sc-2-detail">
                            <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">New York</a></h4>
                            <span>203 Phòng trọ</span>
                        </div>
                    </div>
                </div>
                <!-- Single category -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="small-category-2">
                        <div class="small-category-2-thumb img-2">
                            <a href="properties-full-grid-1.html"><img
                                    src="{{asset('assets/client/images/popular-places/13.jpg')}}"
                                    alt=""></a>
                        </div>
                        <div class="sc-2-detail">
                            <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">Los Angeles</a></h4>
                            <span>307 Phòng trọ</span>
                        </div>
                    </div>
                </div>
                <!-- Single category -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                    <div class="small-category-2">
                        <div class="small-category-2-thumb img-3">
                            <a href="properties-full-grid-1.html"><img
                                    src="{{asset('assets/client/images/popular-places/14.jpg')}}"
                                    alt=""></a>
                        </div>
                        <div class="sc-2-detail">
                            <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">San Francisco</a></h4>
                            <span>409 Phòng trọ</span>
                        </div>
                    </div>
                </div>
                <!-- Single category -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                    <div class="small-category-2">
                        <div class="small-category-2-thumb img-3">
                            <a href="properties-full-grid-1.html"><img
                                    src="{{asset('assets/client/images/popular-places/9.jpg')}}" alt=""></a>
                        </div>
                        <div class="sc-2-detail">
                            <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">Atlanta</a></h4>
                            <span>409 Phòng trọ</span>
                        </div>
                    </div>
                </div>
                <!-- Single category -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="small-category-2 mob-mt">
                        <div class="small-category-2-thumb img-8">
                            <a href="properties-full-grid-1.html"><img
                                    src="{{asset('assets/client/images/popular-places/15.jpg')}}"
                                    alt=""></a>
                        </div>
                        <div class="sc-2-detail">
                            <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">Miami</a></h4>
                            <span>145 Phòng trọ</span>
                        </div>
                    </div>
                </div>
                <!-- Single category -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="small-category-2">
                        <div class="small-category-2-thumb img-10">
                            <a href="properties-full-grid-1.html"><img
                                    src="{{asset('assets/client/images/popular-places/10.jpg')}}"
                                    alt=""></a>
                        </div>
                        <div class="sc-2-detail">
                            <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">Chicago</a></h4>
                            <span>112 Phòng trọ</span>
                        </div>
                    </div>
                </div>
                <!-- Single category -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                    <div class="small-category-2 si-mt">
                        <div class="small-category-2-thumb img-11">
                            <a href="properties-full-grid-1.html"><img
                                    src="{{asset('assets/client/images/popular-places/5.jpg')}}" alt=""></a>
                        </div>
                        <div class="sc-2-detail">
                            <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">Houston</a></h4>
                            <span>254 Phòng trọ</span>
                        </div>
                    </div>
                </div>
                <!-- Single category -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                    <div class="small-category-2 no-mb si-mt">
                        <div class="small-category-2-thumb img-11">
                            <a href="properties-full-grid-1.html"><img
                                    src="{{asset('assets/client/images/popular-places/6.jpg')}}" alt=""></a>
                        </div>
                        <div class="sc-2-detail">
                            <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">Orlando</a></h4>
                            <span>254 Phòng trọ</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
    </section>
<!-- END SECTION POPULAR PLACES -->

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


@endsection
