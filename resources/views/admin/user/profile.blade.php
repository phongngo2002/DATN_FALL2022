@extends('layouts.admin.main')

@section('title_page','Thông tin tài khoản')

@section('content')

    <div class="row">
        <div class="col-md-6 col-xl-5">
            <div class="card mb-6">
                <div class="card-header">
                    <h5 class="card-title mb-0">Chi tiết</h5>
                </div>
                <div class="card-body text-center">
                    <img
                        src="{{\Illuminate\Support\Facades\Auth::user()->avatar ?? 'https://lovablemessages.com/wp-content/uploads/2022/09/1662876858_685_Tron-bo-54-anh-anime-nam-den-moinhat-thang-9.jpg'}}"
                        alt="{{\Illuminate\Support\Facades\Auth::user()->name}}" class="img-fluid rounded-circle mb-2"
                        width="128" height="128"/>
                    <h5 class="card-title mb-0">{{\Illuminate\Support\Facades\Auth::user()->name}}</h5>
                    <div class="text-muted mb-2">{{\Illuminate\Support\Facades\DB::table('roles')
->select('name')->where('id',\Illuminate\Support\Facades\Auth::user()->role_id)->first()->name}}</div>

                    <small>Tài khoản gốc: {{\Illuminate\Support\Facades\Auth::user()->money}} <i
                            class="fa-brands fa-bitcoin text-warning"></i></small>
                </div>
                <hr class="my-0"/>
                <div class="card-body">
                    <h5 class="h6 card-title">Thông tin cá nhân</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> Email <a
                                href="#">{{\Illuminate\Support\Facades\Auth::user()->email}}</a>
                        </li>
                        <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Nơi ở <a
                                href="#">{{\Illuminate\Support\Facades\Auth::user()->address}}</a></li>

                        <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Số điện thoại <a
                                href="#">{{\Illuminate\Support\Facades\Auth::user()->phone_number}}</a></li>

                    </ul>
                </div>
                <hr class="my-0"/>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <h5 class="h6 card-title">Script message FB</h5>
                        <textarea name="script_fb" class="form-control" rows="10"
                                  placeholder="Copy paste đoạn mã vào đây">
                        {{ \Illuminate\Support\Facades\Auth::user()->script_fb}}
                    </textarea>
                        <button class="btn btn-primary mt-2">Lưu</button>
                    </form>


                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-7">
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title mb-0">Hoạt động</h5>
                </div>
                <div class="card-body h-100" style="height: 779px !important;overflow: auto">
                    @if(count(Auth::user()->notifications) > 0)
                        @foreach(Auth::user()->notifications as $index =>$notification)
                            <div class="d-flex align-items-start">
                                <img
                                    src="{{$notification->data['avatar'] ?? 'https://phunugioi.com/wp-content/uploads/2022/03/Avatar-Tet-ngau.jpg'}}"
                                    width="36" height="36"
                                    class="rounded-circle me-2"
                                    alt="{{$notification->data['title']}}">
                                <div class="flex-grow-1">
                                    <small class="float-end text-navy">{{$notification->data['time']}}</small>
                                    {!! $notification->data['message'] !!}<br/>
                                    <small class="text-muted"><a href="{{$notification->data['href']}}">Chi
                                            tiết</a></small><br/>
                                </div>
                            </div>

                            <hr/>
                        @endforeach
                    @else
                        <p>Bạn chưa có thông báo nào gần đây.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
