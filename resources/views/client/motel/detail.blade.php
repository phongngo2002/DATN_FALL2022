@extends('layouts.client.main')

@section('content')
    <section class="single-proper blog details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row pr-4">
                        <div class="col-md-12 ">
                            <section class="headings-2 pt-0">
                                <div class="pro-wrapper mt-5">
                                    <div class="detail-wrapper-body mr-3">
                                        <div class="listing-title-bar">
                                            <h2> {{ $motel->room_number }}</h2>
                                            <div class="mt-0 col-9">
                                                <div href="#listing-location" class="listing-address">
                                                    <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>
                                                    {{ $motel->area_name }}, {{ $motel->area_address }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single detail-wrapper ">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h4> {{ $motel->price }} vnđ </h4>
                                                <div class="mt-3">
                                                    <div href="#listing-location" class="listing-address">
                                                        <p>{{ $motel->area }} m&sup2;</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- main slider carousel items -->


                        </div>
                    </div>
                    <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                        <h5 class="mb-4">Thư viện ảnh</h5>
                        <div class="carousel-inner">
                            @foreach (json_decode($motel->photo_gallery) as $key => $item)
                                @if ($key == 0)
                                    <div class="active item carousel-item" data-slide-number="{{ $key }}">
                                        <img src="{{ $item }}" class="img-fluid" alt="slider-listing">
                                    </div>
                                @else
                                    <div class="item carousel-item" data-slide-number="{{ $key }}">
                                        <img src="{{ $item }}" class="img-fluid" alt="slider-listing">
                                    </div>
                                @endif
                            @endforeach

                            <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i
                                    class="fa fa-angle-left"></i></a>
                            <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i
                                    class="fa fa-angle-right"></i></a>

                        </div>
                        <!-- main slider carousel nav controls -->
                        <ul class="carousel-indicators smail-listing list-inline">

                            @foreach (json_decode($motel->photo_gallery) as $key => $item)
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-{{ $key }}"
                                        data-slide-to="{{ $key }}" data-target="#listingDetailsSlider">
                                        <img src="{{ $item }}" class="img-fluid" alt="listing-small">
                                    </a>
                                </li>
                            @endforeach


                        </ul>
                        <!-- main slider carousel items -->
                    </div>
                    <div class="blog-info homes-content details mb-30">
                        <h5 class="mb-4">Thông tin mô tả</h5>
                        <p class="mb-3">{{ $motel->description }}</p>

                    </div>
                    <div class="single homes-content details mb-30 ">
                        <!-- title -->
                        <h5 class="mb-4">Chi tiết phòng trọ</h5>
                        <ul class="homes-list clearfix">
                            <!-- <li>
                                <span class="font-weight-bold mr-1">Property ID:</span>
                                <span class="det">V254680</span>
                            </li> -->
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
                                <span class="det">{{ $motel->motel_updateAt }}</span>
                            </li>
                        </ul>
                        <!-- title -->
                        <h5 class="mt-5">Tiện nghi</h5>
                        <!-- cars List -->
                        <ul class="homes-list clearfix">
                            @foreach (json_decode($motel->services) as $key => $value)
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>{{ $key }}: {{ $value }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="floor-plan property wprt-image-video w50 pro">
                        <h5>Cái gì ở gần</h5>
                        <div class="property-nearby">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="nearby-info mb-4">
                                        <span class="nearby-title mb-3 d-block text-info">
                                            <i class="fas fa-graduation-cap mr-2"></i><b class="title">Giáo
                                                dục</b>
                                        </span>
                                        <div class="nearby-list">
                                            <ul class="property-list list-unstyled mb-0">
                                                <li class="d-flex">
                                                    <h6 class="mb-3 mr-2">Giáo dục</h6>
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
                                                    <h6 class="mb-3 mr-2">Sức khỏe và Y tế</h6>
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
                                            <i class="fas fa-user-md mr-2"></i><b class="title">Sức khỏe va y
                                                tế</b>
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

                    <div class="property wprt-image-video w50 pro">
                        <h5>Video Phòng trọ</h5>
                        <img alt="image" src="{{ $motel->image_360 }}">
                        <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=14semTlwyUY">
                            <i class="fa fa-play"></i>
                        </a>
                        <div class="iq-waves">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </div>



                    <!-- Star Reviews -->
                    <section class="reviews comments ">
                        <h3 class="mb-5">3 Đánh giá</h3>
                        <div class="row mb-5">
                            <ul class="col-12 commented pl-0">
                                <li class="comm-inf">
                                    <div class="col-md-2">
                                        <img src="images/testimonials/ts-5.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-10 comments-info">
                                        <div class="conra">
                                            <h5 class="mb-2">Mary Smith</h5>
                                            <div class="rating-box">
                                                <div class="detail-list-rating mr-0">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-4">May 30 2020</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam,
                                            quam congue dictum luctus, lacus magna congue ante, in finibus dui
                                            sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum
                                            vestibulum sed.</p>
                                        <div class="rest"><img src="images/single-property/s-1.jpg" class="img-fluid"
                                                alt=""></div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="row">
                            <ul class="col-12 commented pl-0">
                                <li class="comm-inf">
                                    <div class="col-md-2">
                                        <img src="images/testimonials/ts-4.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-10 comments-info">
                                        <div class="conra">
                                            <h5 class="mb-2">Abraham Tyron</h5>
                                            <div class="rating-box">
                                                <div class="detail-list-rating mr-0">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-4">june 1 2020</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam,
                                            quam congue dictum luctus, lacus magna congue ante, in finibus dui
                                            sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum
                                            vestibulum sed.</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="row mt-5">
                            <ul class="col-12 commented mb-0 pl-0">
                                <li class="comm-inf">
                                    <div class="col-md-2">
                                        <img src="images/testimonials/ts-3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-10 comments-info">
                                        <div class="conra">
                                            <h5 class="mb-2">Lisa Williams</h5>
                                            <div class="rating-box">
                                                <div class="detail-list-rating mr-0">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-4">jul 12 2020</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam,
                                            quam congue dictum luctus, lacus magna congue ante, in finibus dui
                                            sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum
                                            vestibulum sed.</p>
                                        <div class="resti">
                                            <div class="rest"><img src="images/single-property/s-2.jpg"
                                                    class="img-fluid" alt=""></div>
                                            <div class="rest"><img src="images/single-property/s-3.jpg"
                                                    class="img-fluid" alt=""></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <!-- Star Add Review -->


                    <section class="single reviews leve-comments details mt-3">
                        <div id="add-review" class="add-review-box">
                            <!-- Add Review -->
                            <h3 class="listing-desc-headline margin-bottom-20 mb-4">Thêm đánh giá</h3>
                            <span class="leave-rating-title">Xếp hạng của bạn cho danh sách này</span>
                            <!-- Rating / Upload Button -->
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <!-- Leave Rating -->
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
                                    <!-- Uplaod Photos -->
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
                                            <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Review" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg mt-2">Submit
                                            Review</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </section>
                    <!-- End Add Review -->
                    <!-- End Reviews -->

                </div>

                <aside class="col-lg-4 col-md-12 car mt-5">
                    <div class="single widget">
                        <!-- Start: Schedule a Tour -->
                        <div class="schedule widget-boxed mt-33 mt-0">
                            <div class="widget-boxed-header">
                                <h4><i class="fa fa-calendar pr-3 padd-r-10"></i>Lên lịch hẹn</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 book">
                                        <input type="text" id="reservation-date" data-lang="en"
                                            data-large-mode="true" data-min-year="2017" data-max-year="3000"
                                            data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0"
                                            data-theme="my-style" class="form-control" readonly="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 book2">
                                        <input type="text" id="reservation-time" class="form-control"
                                            readonly="">
                                    </div>
                                </div>


                            </div>
                            <a href="payment-method.html"
                                class="btn reservation btn-radius theme-btn full-width mrg-top-10">Đặt Lịch</a>
                        </div>
                    </div>
                    <!-- End: Schedule a Tour -->

                    <!-- end author-verified-badge -->
                    <div class="sidebar">
                        <div class="widget-boxed mt-33 mt-5">
                            <div class="widget-boxed-header">
                                <h4>Thông tin chủ trọ</h4>
                            </div>
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
                                            action="{{ route('client.contact.send', $motel->motel_id) }}" method="post"
                                            action="https://code-theme.com/html/findhouses/functions.php">
                                            @csrf
                                            <input type="text" id="fname" name="full_name"
                                                value="{{ Auth::user() ? Auth::user()->name : '' }}"
                                                placeholder="họ và tên" required />
                                            <input type="text" id="pnumber" name="phone_number"
                                                value="{{ Auth::user() ? Auth::user()->phone_number : '' }}"
                                                placeholder="Số điện thoại" required />
                                            <input type="email" id="emailid" name="email_address"
                                                value="{{ Auth::user() ? Auth::user()->email : '' }}" placeholder="Email"
                                                required />
                                            <textarea placeholder="Message" name="message" required></textarea>
                                            <input type="submit" name="sendmessage" class="multiple-send-message"
                                                placeholder="Yêu cầu liên hệ" />
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
                                    <h4>Các phòng mới đăng</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="recent-post">
                                        <div class="recent-main">
                                            <div class="recent-img">
                                                <a href="blog-details.html"><img src="images/feature-properties/fp-1.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="info-img">
                                                <a href="blog-details.html">
                                                    <h6>Family Home</h6>
                                                </a>
                                                <p>$230,000</p>
                                            </div>
                                        </div>
                                        <div class="recent-main my-4">
                                            <div class="recent-img">
                                                <a href="blog-details.html"><img src="images/feature-properties/fp-2.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="info-img">
                                                <a href="blog-details.html">
                                                    <h6>Family Home</h6>
                                                </a>
                                                <p>$230,000</p>
                                            </div>
                                        </div>
                                        <div class="recent-main">
                                            <div class="recent-img">
                                                <a href="blog-details.html"><img src="images/feature-properties/fp-3.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="info-img">
                                                <a href="blog-details.html">
                                                    <h6>Family Home</h6>
                                                </a>
                                                <p>$230,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-boxed mt-5">
                                <div class="widget-boxed-header mb-5">
                                    <h4>Feature Properties</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="slick-lancers">
                                        <div class="agents-grid mr-0">
                                            <div class="listing-item compact">
                                                <a href="properties-details.html" class="listing-img-container">
                                                    <div class="listing-badges">
                                                        <span class="featured">$ 230,000</span>
                                                        <span>For Sale</span>
                                                    </div>
                                                    <div class="listing-img-content">
                                                        <span class="listing-compact-title">House Luxury <i>New
                                                                York</i></span>
                                                        <ul class="listing-hidden-content">
                                                            <li>Area <span>720 sq ft</span></li>
                                                            <li>Rooms <span>6</span></li>
                                                            <li>Beds <span>2</span></li>
                                                            <li>Baths <span>3</span></li>
                                                        </ul>
                                                    </div>
                                                    <img src="images/feature-properties/fp-1.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="agents-grid mr-0">
                                            <div class="listing-item compact">
                                                <a href="properties-details.html" class="listing-img-container">
                                                    <div class="listing-badges">
                                                        <span class="featured">$ 6,500</span>
                                                        <span class="rent">For Rent</span>
                                                    </div>
                                                    <div class="listing-img-content">
                                                        <span class="listing-compact-title">House Luxury <i>Los
                                                                Angles</i></span>
                                                        <ul class="listing-hidden-content">
                                                            <li>Area <span>720 sq ft</span></li>
                                                            <li>Rooms <span>6</span></li>
                                                            <li>Beds <span>2</span></li>
                                                            <li>Baths <span>3</span></li>
                                                        </ul>
                                                    </div>
                                                    <img src="images/feature-properties/fp-2.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="agents-grid mr-0">
                                            <div class="listing-item compact">
                                                <a href="properties-details.html" class="listing-img-container">
                                                    <div class="listing-badges">
                                                        <span class="featured">$ 230,000</span>
                                                        <span>For Sale</span>
                                                    </div>
                                                    <div class="listing-img-content">
                                                        <span class="listing-compact-title">House Luxury <i>San
                                                                Francisco</i></span>
                                                        <ul class="listing-hidden-content">
                                                            <li>Area <span>720 sq ft</span></li>
                                                            <li>Rooms <span>6</span></li>
                                                            <li>Beds <span>2</span></li>
                                                            <li>Baths <span>3</span></li>
                                                        </ul>
                                                    </div>
                                                    <img src="images/feature-properties/fp-3.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="agents-grid mr-0">
                                            <div class="listing-item compact">
                                                <a href="properties-details.html" class="listing-img-container">
                                                    <div class="listing-badges">
                                                        <span class="featured">$ 6,500</span>
                                                        <span class="rent">For Rent</span>
                                                    </div>
                                                    <div class="listing-img-content">
                                                        <span class="listing-compact-title">House Luxury
                                                            <i>Miami FL</i></span>
                                                        <ul class="listing-hidden-content">
                                                            <li>Area <span>720 sq ft</span></li>
                                                            <li>Rooms <span>6</span></li>
                                                            <li>Beds <span>2</span></li>
                                                            <li>Baths <span>3</span></li>
                                                        </ul>
                                                    </div>
                                                    <img src="images/feature-properties/fp-4.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="agents-grid mr-0">
                                            <div class="listing-item compact">
                                                <a href="properties-details.html" class="listing-img-container">
                                                    <div class="listing-badges">
                                                        <span class="featured">$ 230,000</span>
                                                        <span>For Sale</span>
                                                    </div>
                                                    <div class="listing-img-content">
                                                        <span class="listing-compact-title">House Luxury
                                                            <i>Chicago IL</i></span>
                                                        <ul class="listing-hidden-content">
                                                            <li>Area <span>720 sq ft</span></li>
                                                            <li>Rooms <span>6</span></li>
                                                            <li>Beds <span>2</span></li>
                                                            <li>Baths <span>3</span></li>
                                                        </ul>
                                                    </div>
                                                    <img src="images/feature-properties/fp-5.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="agents-grid mr-0">
                                            <div class="listing-item compact">
                                                <a href="properties-details.html" class="listing-img-container">
                                                    <div class="listing-badges">
                                                        <span class="featured">$ 6,500</span>
                                                        <span class="rent">For Rent</span>
                                                    </div>
                                                    <div class="listing-img-content">
                                                        <span class="listing-compact-title">House Luxury
                                                            <i>Toronto CA</i></span>
                                                        <ul class="listing-hidden-content">
                                                            <li>Area <span>720 sq ft</span></li>
                                                            <li>Rooms <span>6</span></li>
                                                            <li>Beds <span>2</span></li>
                                                            <li>Baths <span>3</span></li>
                                                        </ul>
                                                    </div>
                                                    <img src="images/feature-properties/fp-6.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start: Specials offer -->
                            <div class="widget-boxed popular mt-5">
                                <div class="widget-boxed-header">
                                    <h4>Đặc biệt trong ngày</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="banner"><img src="images/single-property/banner.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- End: Specials offer -->
                            <div class="widget-boxed popular mt-5">
                                <div class="widget-boxed-header">
                                    <h4>Tag</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="recent-post">
                                        <div class="tags">
                                            <span><a href="#" class="btn btn-outline-primary">Houses</a></span>
                                            <span><a href="#" class="btn btn-outline-primary">Real
                                                    Home</a></span>
                                        </div>
                                        <div class="tags">
                                            <span><a href="#" class="btn btn-outline-primary">Baths</a></span>
                                            <span><a href="#" class="btn btn-outline-primary">Beds</a></span>
                                        </div>
                                        <div class="tags">
                                            <span><a href="#" class="btn btn-outline-primary">Garages</a></span>
                                            <span><a href="#" class="btn btn-outline-primary">Family</a></span>
                                        </div>
                                        <div class="tags">
                                            <span><a href="#" class="btn btn-outline-primary">Real
                                                    Estates</a></span>
                                            <span><a href="#" class="btn btn-outline-primary">Properties</a></span>
                                        </div>
                                        <div class="tags no-mb">
                                            <span><a href="#" class="btn btn-outline-primary">Location</a></span>
                                            <span><a href="#" class="btn btn-outline-primary">Price</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="property-location map mt-3">
                            <h5>Địa điểm</h5>
                            <div class="divider-fade"></div>
                            <div id="map-contact" class="contact-map"></div>
                        </div>
                    </div>
            </div>
            </aside>
        </div>
        <!-- START SIMILAR PROPERTIES -->
        <section class="similar-property featured portfolio p-0 bg-white-inner">
            <div class="container">
                <h5>Phòng trọ tương tự</h5>
                <div class="row portfolio-items">
                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Đặc sắc</div>
                                        <div class="homes-tag button alt sale">cho thuê</div>
                                        <div class="homes-price">2,500,000/tháng</div>
                                        <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
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
                                <h3><a href="single-property-1.html">Nhà trọ 2</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>P. Trịnh Văn Bô, Xuân Phương, Nam Từ
                                            Liêm, Hà Nội</span>
                                    </a>
                                </p>
                                <div class="footer">
                                    <a href="agent-details.html">
                                        <img src="images/testimonials/ts-1.jpg" alt="" class="mr-2">
                                        Chủ trọ
                                    </a>
                                    <span>2 tháng trước</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Đặc sắc</div>
                                        <div class="homes-tag button alt sale">cho thuê</div>
                                        <div class="homes-price">2,500,000/tháng</div>
                                        <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
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
                                <h3><a href="single-property-1.html">Nhà trọ 2</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>P. Trịnh Văn Bô, Xuân Phương, Nam Từ
                                            Liêm, Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <!-- <ul class="homes-list clearfix pb-3">
                                                            <li class="the-icons">
                                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                                <span>6 Bedrooms</span>
                                                            </li>
                                                            <li class="the-icons">
                                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                                <span>3 Bathrooms</span>
                                                            </li>
                                                            <li class="the-icons">
                                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                                <span>720 sq ft</span>
                                                            </li>
                                                            <li class="the-icons">
                                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                                <span>2 Garages</span>
                                                            </li>
                                                        </ul> -->
                                <div class="footer">
                                    <a href="agent-details.html">
                                        <img src="images/testimonials/ts-1.jpg" alt="" class="mr-2">
                                        Chủ trọ
                                    </a>
                                    <span>2 tháng trước</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Đặc sắc</div>
                                        <div class="homes-tag button alt sale">cho thuê</div>
                                        <div class="homes-price">2,500,000/tháng</div>
                                        <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
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
                                <h3><a href="single-property-1.html">Nhà trọ 2</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>P. Trịnh Văn Bô, Xuân Phương, Nam Từ
                                            Liêm, Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <!-- <ul class="homes-list clearfix pb-3">
                                                            <li class="the-icons">
                                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                                <span>6 Bedrooms</span>
                                                            </li>
                                                            <li class="the-icons">
                                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                                <span>3 Bathrooms</span>
                                                            </li>
                                                            <li class="the-icons">
                                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                                <span>720 sq ft</span>
                                                            </li>
                                                            <li class="the-icons">
                                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                                <span>2 Garages</span>
                                                            </li>
                                                        </ul> -->
                                <div class="footer">
                                    <a href="agent-details.html">
                                        <img src="images/testimonials/ts-1.jpg" alt="" class="mr-2">
                                        Chủ trọ
                                    </a>
                                    <span>2 tháng trước</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Đặc sắc</div>
                                        <div class="homes-tag button alt sale">cho thuê</div>
                                        <div class="homes-price">2,500,000/tháng</div>
                                        <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
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
                                <h3><a href="single-property-1.html">Nhà trọ 2</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>P. Trịnh Văn Bô, Xuân Phương, Nam Từ
                                            Liêm, Hà Nội</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <!-- <ul class="homes-list clearfix pb-3">
                                                            <li class="the-icons">
                                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                                <span>6 Bedrooms</span>
                                                            </li>
                                                            <li class="the-icons">
                                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                                <span>3 Bathrooms</span>
                                                            </li>
                                                            <li class="the-icons">
                                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                                <span>720 sq ft</span>
                                                            </li>
                                                            <li class="the-icons">
                                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                                <span>2 Garages</span>
                                                            </li>
                                                        </ul> -->
                                <div class="footer">
                                    <a href="agent-details.html">
                                        <img src="images/testimonials/ts-1.jpg" alt="" class="mr-2">
                                        Chủ trọ
                                    </a>
                                    <span>2 tháng trước</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- END SIMILAR PROPERTIES -->
    </section>
@endsection
