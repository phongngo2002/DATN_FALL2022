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
                                <h1 class="h1">Tìm giấc mơ của bạn
                                    <br class="d-md-none">
                                    <span class="typed border-bottom"></span>
                                </h1>
                                <p class="mt-4">Chúng tôi có hơn 1 triệu lựa chọn cho bạn</p>
                            </div>
                            <!--/ End Welcome Text -->
                            <!-- Search Form -->
                            <div>
                                <form action="{{route('client_search_list_live_together')}}" method="GET"
                                      id="formSearch">
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
                                                                <select class="select single-select"

                                                                >
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
                                                                            <label for="check2-2">Gần bến xe</label>
                                                                            <input id="check2-3" value="3"
                                                                                   type="checkbox"
                                                                                   name="locations[]">
                                                                            <label for="check2-3">Gần khu công
                                                                                nghiệp</label>
                                                                            <input id="check2-4" type="checkbox"
                                                                                   name="locations[]" value="4">
                                                                            <label for="check2-4">Gần bệnh
                                                                                viện</label>
                                                                        </div>
                                                                        <!-- Checkboxes / End -->
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
                                </form>
                            </div>
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
                                    >{{$key->name}}</div>
                                    <div class="homes-tag button alt sale">Giảm giá</div>
                                    <img
                                        src="{{json_decode($key->photo_gallery_i)[0]}}"
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
                                <a style="color: {{$key->title_color}}" href="{{route('client.live-together.detail',['id' => $key->motel_id])}}">
                                    {{-- @if($key->priority_level == 1) --}}
                                        <span title="{{json_decode($key->data_post)->title}}"
                                            style="color: {{$key->title_color}}">{{substr(json_decode($key->data_post)->title,0,40).'...'}}</span>
                                    {{-- @endif --}}
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
    @include('custom.js.searchIndex')
@endsection
