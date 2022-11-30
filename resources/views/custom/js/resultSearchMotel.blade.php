<div class="row portfolio-items" style="position: relative; min-height: 1200px;left: 7%;">
    @foreach($motels as $key)
        <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
            <div class="project-single" data-aos="fade-right">
                <div class="project-inner project-head">
                    <div class="homes">
                        <!-- homes img -->
                        <a href="{{route('client.motel.detail',['id' => $key->motel_id])}}"
                           class="homes-img">
                            <img
                                src="{{json_decode($key->photo_gallery_i)[0]}}"
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
                    <h4 class=" mb-3">
                        <a href="{{route('client.motel.detail',['id' => $key->motel_id])}}">
                           <span style="color: {{$key->title_color}};font-weight: bold">{{$key->areaName .'- '.$key->room_number}}</span>
                        </a>
                    </h4>
                    <p class="homes-address mb-3">
                        <a href="{{route('client.motel.detail',['id' => $key->motel_id])}}">
                            <i class="fa fa-map-marker"></i><span>{{$key->address}}</span>
                        </a>
                    </p>
                    <!-- homes List -->
                    <ul class="homes-list clearfix pb-3">
                        @if(isset($key->locationNearMotel))
                        @foreach($key->locationNearMotel as $location)
                            @if($location->type === 1)
                                <p>Cách trường học gần nhất {{round($location->minDistance,2)}} km</p>
                            @endif
                            @if($location->type === 2)
                                <p>Cách bệnh viện gần nhất {{round($location->minDistance,2)}} km</p>
                            @endif
                            @if($location->type === 3)
                                <p>Cách siêu thị gần nhất {{round($location->minDistance,2)}} km</p>
                            @endif
                            @if($location->type === 4)
                                <p>Cách bến xe gần nhất {{round($location->minDistance,2)}} km</p>
                            @endif
                        @endforeach
                        @else
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>{{json_decode($key->services)->bedroom}} Phòng ngủ</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>{{json_decode($key->services)->toilet}} Phòng tắm</span>
                            </li>

                        @endif


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
            {!! $motels->links() !!}
        </nav>
    </div>