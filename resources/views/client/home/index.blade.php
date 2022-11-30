@extends('layouts.client.main')

@section('content')
    <style>
        .a {
            color: white !important;
            font-weight: 400;
        }

        .inner-pages .main-search-field-2 {
            margin-top: 0px;
        }
    </style>
    <section style="position: relative" id="hero-area"
             class="parallax-searchs home15 overlay thome-6 thome-1 d-none d-md-none d-lg-block"
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
                            <div>
                                {{-- <form action="{{route('search')}}" method="GET" id="formSearch">
                                    <div class="col-12">
                                        <div class="banner-search-wrap">
                                            <ul class="nav nav-tabs rld-banner-tab">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#tabs_1">Tìm kiếm
                                                        phòng
                                                        trọ bạn muốn</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">

                                                <div class="tab-pane fade show active" id="tabs_1">
                                                    <div class="rld-main-search">
                                                        <div class="row">
                                                            <div class="rld-single-select ml-22" id="city_id">
                                                                <select class="select single-select"
                                                                >
                                                                    <option value="0">Lựa chọn thành phố</option>
                                                                </select>
                                                                <input type="hidden" name="city_id">
                                                            </div>
                                                            <div class="rld-single-select ml-22" id="district_id">
                                                                <select class="select single-select">
                                                                    <option value="0">Lựa chọn quận huyện</option>
                                                                </select>
                                                                <input type="hidden" name="district_id">
                                                            </div>
                                                            <div class="rld-single-select" id="ward_id">
                                                                <select class="select single-select mr-0"

                                                                >
                                                                    <option value="0">Lựa chọn phường/xã</option>
                                                                </select>
                                                                <input type="hidden" name="ward_id">
                                                            </div>
                                                            <div
                                                                class="dropdown-filter d-none d-none d-lg-none d-xl-block">
                                                                <span>Tìm kiếm nâng cao</span></div>
                                                            <div class="pl-0">
                                                                <button type="button" id="btnSearch"
                                                                        class="btn btn-yellow search"
                                                                        style="width:165px;">Tìm kiếm
                                                                    ngay
                                                                </button>
                                                            </div>
                                                            <div
                                                                class="explore__form-checkbox-list full-filter d-none d-none d-lg-none d-xl-flex  shadow p-3 mb-5 bg-body rounded">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 p-2">
                                                                        <!-- Form Bedrooms -->
                                                                        <div class="form-group beds">
                                                                            <input type="hidden" name="bedroom">
                                                                            <div
                                                                                class="nice-select form-control wide"
                                                                                tabindex="0">
                                                                            <span class="current"><i class="fa fa-bed"
                                                                                                     aria-hidden="true"></i>Phòng ngủ</span>
                                                                                <ul class="list" id="bedroom">
                                                                                    @for ($i = 1; $i < 5; $i++)
                                                                                        <li data-value="{{$i}}"
                                                                                            class="option">{{$i}}</li>
                                                                                    @endfor
                                                                                </ul>
                                                                            </div>
                                                                        </div>

                                                                        <!--/ End Form Bedrooms -->
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 p-2">
                                                                        <!-- Form Bathrooms -->
                                                                        <div class="form-group bath">
                                                                            <div
                                                                                class="nice-select form-control wide"
                                                                                tabindex="0">
                                                                                <input type="hidden" name="toilet">
                                                                                <span class="current"><i
                                                                                        class="fa fa-bath"
                                                                                        aria-hidden="true"></i>Phòng tắm/WC</span>
                                                                                <ul class="list" id="toilet">
                                                                                    @for ($i = 1; $i < 5; $i++)
                                                                                        <li data-value="{{$i}}"

                                                                                            class="option">{{$i}}</li>
                                                                                    @endfor
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
                                                                                     data-max="50"
                                                                                     data-unit="m&#178"
                                                                                     class="area_range">
                                                                                    <a class="ui-slider-handle ui-state-default ui-corner-all"
                                                                                       href="#" style="left: 0%;"
                                                                                       id="area_min"></a>
                                                                                    <a class="ui-slider-handle ui-state-default ui-corner-all"
                                                                                       href="#" style="left: 0%;"
                                                                                       id="area_max"></a>
                                                                                </div>
                                                                                <input type="hidden"
                                                                                       name="area_min">
                                                                                <input type="hidden"
                                                                                       name="area_max">
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <br>
                                                                            <!-- Price Range -->
                                                                            <div class="range-slider">
                                                                                <label>Phạm vi giá</label>
                                                                                <div id="price-range" data-min="0"
                                                                                     data-max="10000000"
                                                                                     data-unit="VND ">
                                                                                    <a class="ui-slider-handle ui-state-default ui-corner-all"
                                                                                       href="#" style="left: 0%;"
                                                                                       id="price_min"></a>
                                                                                    <a class="ui-slider-handle ui-state-default ui-corner-all"
                                                                                       href="#" style="left: 0%;"
                                                                                       id="price_max"></a>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                                <input type="hidden"
                                                                                       name="price_min">
                                                                                <input type="hidden"
                                                                                       name="price_max">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                        <!-- Checkboxes -->
                                                                        <div
                                                                            class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                            <input id="check2-1" type="checkbox"
                                                                                   value="1"
                                                                                   name="locations[]">
                                                                            <label for="check2-1">Gần trường
                                                                                học</label>
                                                                            <input id="check2-2" value="2"
                                                                                   type="checkbox"
                                                                                   name="locations[]">
                                                                            <label for="check2-2">Bệnh viện</label>
                                                                            <input id="check2-3" value="3"
                                                                                   type="checkbox"
                                                                                   name="locations[]">
                                                                            <label for="check2-3">Gần siêu thị</label>
                                                                            <input id="check2-4" type="checkbox"
                                                                                   name="locations[]" value="4">
                                                                            <label for="check2-4">Gần bến xe</label>
                                                                        </div>
                                                                        <!-- Checkboxes / End -->
                                                                        <input type="number" style="width: 400px" required
                                                                               placeholder="Lựa chọn phạm vị muốn tìm kiếm"
                                                                               name="dis" class="form-control" max="10">
                                                                    </div>
                                                                    <div
                                                                        class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                        <!-- Checkboxes -->
                                                                        <div
                                                                            class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                            <input id="check2-5" type="checkbox"
                                                                                   name="services[]"
                                                                                   value="nong_lanh">
                                                                            <label for="check2-5">Nóng lạnh</label>
                                                                            <input id="check2-7" type="checkbox"
                                                                                   name="services[]" value="tu_lanh">
                                                                            <label for="check2-7">Tủ lạnh</label>
                                                                            <input id="check2-8" type="checkbox"
                                                                                   name="services[]"
                                                                                   value="giuong_ngu">
                                                                            <label for="check2-8">Điều hòa</label>
                                                                            <input id="check2-9" type="checkbox"
                                                                                   name="services[]"
                                                                                   value="tu_quan_ao">
                                                                            <label for="check2-9">Tủ quần áo</label>
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
                                </form> --}}
                                {{-- <form method="GET" id="formSearch"> --}}
                                <div class="col-12">
                                    <div class="banner-search-wrap">
                                        <ul class="nav nav-tabs rld-banner-tab">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#tabs_1">Tìm kiếm
                                                    phòng
                                                    trọ bạn muốn</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">

                                            <div class="tab-pane fade show active" id="tabs_1">
                                                <div class="rld-main-search">
                                                    {{-- <form id="formSearch"> --}}
                                                    <div class="row">

                                                        <div class="rld-single-select ml-22" id="city_id">
                                                            <select class="select single-select">
                                                                <option value="0">Lựa chọn thành phố</option>
                                                            </select>
                                                            <input type="hidden" name="city_id" id="city_id_value">
                                                        </div>
                                                        <div class="rld-single-select ml-22" id="district_id">
                                                            <select class="select single-select">
                                                                <option value="0">Lựa chọn quận huyện</option>
                                                            </select>
                                                            <input type="hidden" name="district_id"
                                                                   id="district_id_value">
                                                        </div>
                                                        <div class="rld-single-select" id="ward_id">
                                                            <select class="select single-select mr-0">
                                                                <option value="0">Lựa chọn phường/xã</option>
                                                            </select>
                                                            <input type="hidden" name="ward_id" id="ward_id_value">
                                                        </div>
                                                        <div class="dropdown-filter d-none d-none d-lg-none d-xl-block">
                                                            <span>Tìm kiếm nâng cao</span>
                                                        </div>
                                                        <div class="pl-0">
                                                            <button type="button" id="btnSearch"
                                                                    class="btn btn-yellow search" style="width:165px;">
                                                                Tìm
                                                                kiếm
                                                                ngay
                                                            </button>
                                                        </div>
                                                        <div
                                                            class="explore__form-checkbox-list full-filter d-none d-none d-lg-none d-xl-flex  shadow p-3 mb-5 bg-body rounded">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 p-2">
                                                                    <!-- Form Bedrooms -->
                                                                    <div class="form-group beds">
                                                                        <input type="hidden" name="bedroom"
                                                                        >
                                                                        <div class="nice-select form-control wide"
                                                                             tabindex="0">
                                                                            <span class="current"><i class="fa fa-bed"
                                                                                                     aria-hidden="true"></i>Phòng
                                                                                ngủ</span>
                                                                            <ul class="list" id="bedroom">
                                                                                @for ($i = 1; $i < 5; $i++)
                                                                                    <li data-value="{{ $i }}"
                                                                                        class="option">
                                                                                        {{ $i }}</li>
                                                                                @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                    <!--/ End Form Bedrooms -->
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 p-2">
                                                                    <!-- Form Bathrooms -->
                                                                    <div class="form-group bath">
                                                                        <div class="nice-select form-control wide"
                                                                            tabindex="0">
                                                                            <input type="hidden" name="toilet" id="toilet">
                                                                            <span class="current"><i class="fa fa-bath"
                                                                                                     aria-hidden="true"></i>Phòng
                                                                                tắm/WC</span>
                                                                            <ul class="list" id="toilet">
                                                                                @for ($i = 1; $i < 5; $i++)
                                                                                    <li data-value="{{ $i }}"
                                                                                        class="option">
                                                                                        {{ $i }}</li>
                                                                                @endfor
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
                                                                                 data-max="50" data-unit="m&#178"
                                                                                 class="area_range">
                                                                                <a class="ui-slider-handle ui-state-default ui-corner-all"
                                                                                   href="#" style="left: 0%;"
                                                                                   id="area_min"></a>
                                                                                <a class="ui-slider-handle ui-state-default ui-corner-all"
                                                                                   href="#" style="left: 0%;"
                                                                                   id="area_max"></a>
                                                                            </div>
                                                                            <input type="hidden" name="area_min"
                                                                                   id="area_min">
                                                                            <input type="hidden" name="area_max"
                                                                                   id="area_max">
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <br>
                                                                        <!-- Price Range -->
                                                                        <div class="range-slider">
                                                                            <label>Phạm vi giá</label>
                                                                            <div id="price-range" data-min="0"
                                                                                 data-max="10000000" data-unit="VND ">
                                                                                <a class="ui-slider-handle ui-state-default ui-corner-all"
                                                                                   href="#" style="left: 0%;"
                                                                                   id="price_min"></a>
                                                                                <a class="ui-slider-handle ui-state-default ui-corner-all"
                                                                                   href="#" style="left: 0%;"
                                                                                   id="price_max"></a>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                            <input type="hidden" name="price_min"
                                                                                   id="price_min">
                                                                            <input type="hidden" name="price_max"
                                                                                   id="price_max">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                    <!-- Checkboxes -->
                                                                    <div
                                                                        class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                        <input id="check2-1" type="checkbox"
                                                                               value="1" name="locations[]"
                                                                               class="location">
                                                                        <label for="check2-1">Gần trường
                                                                            học</label>
                                                                        <input id="check2-2" value="2"
                                                                               type="checkbox" name="locations[]">
                                                                        <label for="check2-2">Bệnh viện</label>
                                                                        <input id="check2-3" value="3"
                                                                               type="checkbox" name="locations[]"
                                                                               class="location">
                                                                        <label for="check2-3">Gần siêu thị</label>
                                                                        <input id="check2-4" type="checkbox"
                                                                               name="locations[]" value="4"
                                                                               class="location">
                                                                        <label for="check2-4">Gần bến xe</label>
                                                                    </div>
                                                                    <!-- Checkboxes / End -->
                                                                    <input type="number" style="width: 400px" required
                                                                           placeholder="Lựa chọn phạm vị muốn tìm kiếm"
                                                                           name="dis" class="form-control"
                                                                           max="10" id="dis">
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                    <!-- Checkboxes -->
                                                                    <div
                                                                        class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                        <input id="check2-5" type="checkbox"
                                                                               name="services[]" value="nong_lanh">
                                                                        <label for="check2-5">Nóng lạnh</label>
                                                                        <input id="check2-7" type="checkbox"
                                                                               name="services[]" value="tu_lanh">
                                                                        <label for="check2-7">Tủ lạnh</label>
                                                                        <input id="check2-8" type="checkbox"
                                                                               name="services[]" value="giuong_ngu">
                                                                        <label for="check2-8">Điều hòa</label>
                                                                        <input id="check2-9" type="checkbox"
                                                                               name="services[]" value="tu_quan_ao">
                                                                        <label for="check2-9">Tủ quần áo</label>
                                                                    </div>
                                                                    <!-- Checkboxes / End -->
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    {{-- </form> --}}
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
                @foreach ($area as $i)
                    <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-1">
                                <a href="{{ route('motel_by_area', ['areaID' => $i->id]) }}"><img
                                        src="{{ $i->image }}" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a
                                        href="{{ route('motel_by_area', ['areaID' => $i->id]) }}">{{ $i->name }}</a>
                                </h4>
                                <span>{{ $i->quantity }} Phòng trọ</span>
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
    <section class="featured portfolio bg-white-2 rec-pro p-4 mb-4">
        <div class="container-fluid">
            <div class="sec-title">
                <h2>Phòng trọ Nổi bật</h2>
                <p>These are our featured properties</p>
            </div>
            <div class="row portfolio-items" id="tin_dang">

                @foreach ($motel as $key)
                    <div class="item col-xl-3 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-right">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="#" class="homes-img">
                                        <img src="{{ json_decode($key->photo_gallery_i)[0] }}" alt="home-1"
                                             class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="{{ route('client.live-together.detail', ['id' => $key->motel_id]) }}"
                                       class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=48EgQXJrww0"
                                       class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="{{ route('client.live-together.detail', ['id' => $key->motel_id]) }}"
                                       class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3>

                                    <a class="font-weight-bold" style="color: {{ $key->title_color }}"
                                       href="{{ route('client.motel.detail', ['id' => $key->motel_id]) }}">
                                        {{ $key->areaName . ' - ' . $key->room_number }}
                                    </a>
                                    <p class="text-warning" style="font-size: 12px">
                                        @for ($i = 5; $i >= $key->priority_level; $i--)
                                            <i class="fa-solid fa-star"></i>
                                        @endfor
                                    </p>
                                </h3>
                                <p class="homes-address mb-3">
                                    <a href="{{ route('client.motel.detail', ['id' => $key->motel_id]) }}">
                                        <i class="fa fa-map-marker"></i><span>{{ $key->address }}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>{{ json_decode($key->services)->bedroom }} Phòng ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>{{ json_decode($key->services)->toilet }} Phòng tắm</span>
                                    </li>


                                </ul>
                                <div>
                                    @foreach ($key->locationNearMotel as $location)
                                        @if ($location->type === 1)
                                            <p>Cách trường học gần nhất {{ round($location->minDistance, 2) }} km</p>
                                        @endif
                                        @if ($location->type === 2)
                                            <p>Cách bệnh viện gần nhất {{ round($location->minDistance, 2) }} km</p>
                                        @endif
                                        @if ($location->type === 3)
                                            <p>Cách siêu thị gần nhất {{ round($location->minDistance, 2) }} km</p>
                                        @endif
                                        @if ($location->type === 4)
                                            <p>Cách bến xe gần nhất {{ round($location->minDistance, 2) }} km</p>
                                        @endif
                                    @endforeach
                                    <h6 class="text-center"><a
                                            href="{{ route('client.motel.detail', ['id' => $key->motel_id]) }}">Chi
                                            tiết</a></h6>
                                </div>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                        <a href="{{ route('client.motel.detail', ['id' => $key->motel_id]) }}">{{ number_format($key->price, 0, ',', '.') }}
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
                @foreach ($contact as $key)
                    <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-right">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Nổi bật</div>
                                        <div class="homes-tag button alt sale">Giảm giá</div>
                                        <img src="{{ json_decode($key->photo_gallery)[0] }}" alt="home-1"
                                             class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="{{ route('client.live-together.detail', ['id' => $key->id]) }}"
                                       class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                       class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="{{ route('client.live-together.detail', ['id' => $key->id]) }}"
                                       class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3>
                                    <a href="{{ route('client.live-together.detail', ['id' => $key->id]) }}">{{ json_decode($key->data_post)->title }}
                                    </a>
                                </h3>
                                <p class="homes-address mb-3">
                                    <a href="{{ route('client.live-together.detail', ['id' => $key->id]) }}">
                                        <i class="fa fa-map-marker"></i><span>{{ $key->address }}</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>{{ json_decode($key->services)->bedroom }} Phòng ngủ</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>{{ json_decode($key->services)->toilet }} Phòng tắm</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                        <a href="{{ route('client.live-together.detail', ['id' => $key->id]) }}">{{ number_format($key->price, 0, ',', '.') }}
                                            VNĐ</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="{{ route('client.live-together.detail', ['id' => $key->id]) }}"
                                           title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="{{ route('client.live-together.detail', ['id' => $key->id]) }}"
                                           title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="{{ route('client.live-together.detail', ['id' => $key->id]) }}"
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
                            <a href="agents-listing-grid.html"><img
                                    src="{{ asset('assets/client/images/team/t-5.jpg') }}" alt=""/></a>
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
                            <a href="agents-listing-grid.html"><img
                                    src="{{ asset('assets/client/images/team/t-6.jpg') }}" alt=""/></a>
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
                            <a href="agents-listing-grid.html"><img
                                    src="{{ asset('assets/client/images/team/t-7.jpg') }}" alt=""/></a>
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
                            <a href="agents-listing-grid.html"><img
                                    src="{{ asset('assets/client/images/team/t-8.jpg') }}" alt=""/></a>
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
                                    src="{{ asset('assets/client/images/team/team-image-2.jpg') }}" alt=""/></a>
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
                                    src="{{ asset('assets/client/images/team/team-image-7.jpg') }}" alt=""/></a>
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

    @include('custom.js.searchIndex')
    <script>
        window.history.pushState("", "", 'http://phong.ngo');


        $(document).ready(function () {
            $("#btnSearch").on('click', function (e) {
                e.preventDefault();

                let city_id = $("#city_id_value").val();
                let district_id = $("#district_id_value").val();
                let ward_id = $("#ward_id_value").val();
                let bedroom = document.getElementsByName('bedroom')[0].value;
                let toilet = document.getElementsByName('toilet')[0].value;
                let area_min = document.getElementsByName('area_min')[0].value;
                let area_max = document.getElementsByName('area_max')[0].value;
                let price_min = document.getElementsByName('price_min')[0].value;
                let price_max = document.getElementsByName('price_max')[0].value;
                let location = [];
                document.getElementsByName('locations[]').forEach(item => {
                    if (item.checked) {
                        location.push(+item.value);
                    }
                })
                let services = [];

                document.getElementsByName('services[]').forEach(item => {
                    if (item.checked) {
                        services.push(item.value);
                    }
                })
                let dis = document.getElementsByName('dis')[0].value;
                console.log(
                    {
                        'city_id': city_id,
                        'district_id': district_id,
                        'ward_id': ward_id,
                        'bedroom': bedroom,
                        'toilet': toilet,
                        'area_min': area_min,
                        'area_max': area_max,
                        'price_min': price_min,
                        'price_max': price_max,
                        'location': location,
                        'services': services,
                        'dis': dis
                    }
                )
                {{--$.ajax({--}}
                {{--    type: 'GET',--}}
                {{--    url: "{{ route('search') }}",--}}
                {{--    data: {--}}
                {{--        'city_id': city_id,--}}
                {{--        'district_id': district_id,--}}
                {{--        'ward_id': ward_id,--}}
                {{--        'bedroom': bedroom,--}}
                {{--        'toilet': toilet,--}}
                {{--        'area_min': area_min,--}}
                {{--        'area_max': area_max,--}}
                {{--        'price_min': price_min,--}}
                {{--        'price_max': price_max,--}}
                {{--        'location': location,--}}
                {{--        'services': services,--}}
                {{--        'dis': dis--}}
                {{--    },--}}
                {{--    dataType: 'json',--}}
                {{--    success: function(data) {--}}
                {{--        console.log(data);--}}
                {{--    }--}}
                {{--})--}}
                $.ajaxSetup({
                    headers: {
                        'csrftoken': '{{ csrf_token() }}'
                    }
                });
            })
        })
    </script>
@endsection
