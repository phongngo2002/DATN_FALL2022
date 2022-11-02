@extends('layouts.client.main')
@section('content')
<div class="swiper-container">
    <div class="swiper-wrapper">
        @foreach (json_decode($motel->photo_gallery) as $item)
            <div class="swiper-slide">
                <a href="{{$item}}" class="grid image-link">
                    <img src="{{$item}}" class="img-fluid" alt="#">
                </a>
            </div>
        @endforeach
        
    </div>

    <div class="swiper-button-next swiper-button-white mr-3"></div>
    <div class="swiper-button-prev swiper-button-white ml-3"></div>
</div>
<section class="single-proper blog details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 blog-pots">
                <div class="row">
                    <div class="col-md-12">
                        <section class="headings-2 pt-0">
                            <div class="pro-wrapper justify-content-between">
                                <div class="detail-wrapper-body col-8"> 
                                    <div class="listing-title-bar">
                                        <h3>{{$motel->room_number}}</h3>
                                        <div class="mt-0">
                                            <a href="#listing-location" class="listing-address">
                                                <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>{{$motel->area_address}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-wrapper-body">
                                    <div class="listing-title-bar">
                                        <h4>{{$motel->price}} VND</h4>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Star Description -->
                        <div class="blog-info details mb-30">
                            <h5 class="mb-4">Thông tin mô tả</h5>
                            <p class="mb-3">{{ $motel->description }}</p>
                        </div>
                        <!-- End Description -->
                    </div>
                </div>
                <!-- Star Property Details -->
                <div class="single homes-content details mb-30">
                    <!-- title -->
                    <h5 class="mb-4">Thông tin chi tiết phòng</h5>
                    <ul class="homes-list clearfix">
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
                            <span class="det">1/{{ $motel->motel_updateAt }}</span>
                        </li>
                    </ul>
                    <!-- title -->
                    <h5 class="mt-5">Tiện nghi</h5>
                    <!-- cars List -->
                    <ul class="homes-list clearfix">
                        @foreach (json_decode($motel->services) as $item)
                            <li>
                                <i class="fa fa-check-square" aria-hidden="true"></i>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="floor-plan property wprt-image-video w50 pro">
                    <h5>Những địa điểm lân cận</h5>
                    <div class="property-nearby">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="nearby-info mb-4">
                                    <span class="nearby-title mb-3 d-block text-info">
                                        <i class="fas fa-graduation-cap mr-2"></i><b class="title">Giáo dục</b>
                                    </span>
                                    <div class="nearby-list">
                                        <ul class="property-list list-unstyled mb-0">
                                            <li class="d-flex">
                                                <h6 class="mb-3 mr-2">Education Mandarin</h6>
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
                                                <h6 class="mb-3 mr-2">Marry's Education</h6>
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
                                        <i class="fas fa-user-md mr-2"></i><b class="title">Sức khỏe và y tế</b>
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
                <div class="property wprt-image-video w50 pro vid-si2">
                    <h5>Video chi tiết</h5>
                    <img alt="image" src="{{ $motel->image_360 }}">
                    <div class="iq-waves">
                        <div class="waves wave-1"></div>
                        <div class="waves wave-2"></div>
                        <div class="waves wave-3"></div>
                    </div>
                </div>
                <div class="property-location map">
                    <h5>Bản đồ</h5>
                    <div class="divider-fade"></div>
                    <div id="map-contact" class="contact-map"></div>
                </div>

                <!-- Star Reviews -->
                <!-- <section class="single reviews leve-comments details">
                    <div id="add-review" class="add-review-box">
                  
                        
                        <h3 class="listing-desc-headline margin-bottom-20 mb-4">Add Review</h3>
                        <span class="leave-rating-title">Your rating for this listing</span>
                   
                        <div class="row mb-4">
                            <div class="col-md-6">
                                
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
                                        <textarea class="form-control" id="exampleTextarea" rows="8"
                                            placeholder="Review" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg mt-2">Submit
                                        Review</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section> -->
         
            </div>
            <aside class="col-lg-4 col-md-12 car">
                <div class="single widget">
                    <!-- Start: Schedule a Tour -->
                    <div class="schedule widget-boxed mt-0">
                        <div class="widget-boxed-header">
                            <h4>Thông tin chủ phòng</h4>
                        </div>
                        <style>
                            #box1{
                                position: relative;
                                height:260px;
                            }
                            #box2{
                                position: absolute;
                                bottom: 0;
                                transform: translateY(-45px);
                                transition: 1s ease;
                                height:50px;
                            }
                            #message{
                                opacity: 0;
                            }
                        </style>
                        
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
                                        action="{{ route('client.contact.send', $motel->motel_id) }}"
                                        method="post"
                                        action="https://code-theme.com/html/findhouses/functions.php">
                                        @csrf
                                        <input type="text" id="fname" name="full_name"
                                             value="{{ Auth::user() ? Auth::user()->name : "" }}"
                                             placeholder="Họ và tên"
                                            required />
                                        <input type="text" id="pnumber" name="phone_number"
                                            value="{{ Auth::user() ? Auth::user()->phone_number : "" }}"
                                            placeholder="Số điện thoại"
                                            required />
                                        <input type="email" id="emailid" name="email_address"
                                            value="{{ Auth::user() ? Auth::user()->email : "" }}"
                                            placeholder="Email"
                                            required />
                                        <textarea placeholder="Message" name="message" required></textarea>
                                        <input type="submit" name="sendmessage"
                                            class="multiple-send-message" placeholder="Yêu cầu liên hệ" />
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
                                <h4>Phòng trọ ở ghép khác</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="recent-post">
                                    <div class="recent-main">
                                        <div class="recent-img">
                                            <a href="blog-details.html"><img src="images/feature-properties/fp-1.jpg" alt=""></a>
                                        </div>
                                        <div class="info-img">
                                            <a href="blog-details.html"><h6>Family Home</h6></a>
                                            <p>$230,000</p>
                                        </div>
                                    </div>
                                    <div class="recent-main my-4">
                                        <div class="recent-img">
                                            <a href="blog-details.html"><img src="images/feature-properties/fp-2.jpg" alt=""></a>
                                        </div>
                                        <div class="info-img">
                                            <a href="blog-details.html"><h6>Family Home</h6></a>
                                            <p>$230,000</p>
                                        </div>
                                    </div>
                                    <div class="recent-main">
                                        <div class="recent-img">
                                            <a href="blog-details.html"><img src="images/feature-properties/fp-3.jpg" alt=""></a>
                                        </div>
                                        <div class="info-img">
                                            <a href="blog-details.html"><h6>Family Home</h6></a>
                                            <p>$230,000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start: Specials offer -->
                        <div class="widget-boxed popular mt-5">
                            <div class="widget-boxed-header">
                                <h4>Specials of the day</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="banner"><img src="images/single-property/banner.jpg" alt=""></div>
                            </div>
                        </div>
                        <!-- End: Specials offer -->
                        
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection