<div class="row portfolio-items" style="position: relative;height: 1916.57px;left: 7%;">
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
                    <a href="{{route('client.live-together.detail',['id' => $key->motel_id])}}">


                        @if($key->priority_level == 1)
                            <span
                                title="{{json_decode($key->data_post)->title}}"
                                style="color: #E13427">{{substr(json_decode($key->data_post)->title,0,40).'...'}}</span>
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
    </div>