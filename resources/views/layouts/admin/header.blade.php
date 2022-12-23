
<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse" >
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="bell"></i>
                        <span class="indicator"> {{count(Auth::user()->unreadNotifications) ?? ''}}</span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown" style="width: 500px;height:600px;overflow-y: auto">
                    <div class="dropdown-menu-header" >
                        {{count(Auth::user()->unreadNotifications) .' thông báo mới' ?? 0 .' thông báo mới'}}
                    </div>

                    <div class="list-group" id="NOTI">
                        @foreach (Auth::user()->unreadNotifications as $index =>$notification)
                                <a href="{{$notification->data['href'] ?? '#' }}" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="text-danger" data-feather="alert-circle"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">{{$notification->data['title'] }}</div>
                                            <div class="text-muted small mt-1">{{$notification->data['message'] }}</div>
                                            <div class="text-muted small mt-1">{{$notification->data['time'] }}</div>
                                        </div>
                                    </div>
                                    {{$notification->markAsRead()}}
                                </a>

                        @endforeach
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img
                        src="{{\Illuminate\Support\Facades\Auth::user()->avatar ?? 'https://shopgarena.net/wp-content/uploads/2022/08/Hinh-anime-FF-chibi.jpg'}}"
                        class="avatar img-fluid rounded me-1"
                        alt="Charles Hall"/> <span
                        class="text-dark">{{\Illuminate\Support\Facades\Auth::user()->name ?? 'Tài khoản ảo'}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">

                    <a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-piggy-bank"></i>
                        Tài khoản gốc: <span
                            class="current_money">{{\Illuminate\Support\Facades\Auth::user()->money}}</span> <i
                            class="fa-brands fa-bitcoin text-warning"></i></a>
                    <a class="dropdown-item" href="{{route('backend_get_profile')}}"><i class="align-middle me-1"
                                                                                        data-feather="user"></i> Thông
                        tin tài khoản</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('backend_user_change_password')}}"><i
                            class="fa-solid fa-money-check"></i>
                        Đổi mật khẩu</a>
                    <a class="dropdown-item" href="{{route('backend_get_form_recharge')}}"><i
                            class="fa-solid fa-money-check"></i>
                        Nạp tiền</a>
                    <a class="dropdown-item" href="{{route('admin_get_view_wheel_luck')}}"><i
                            class="fa-solid fa-money-check"></i>
                        Vòng quay may mắn</a>
                    <a class="dropdown-item" href="{{route('backend_get_form_withdraw')}}"><i
                            class="fa-solid fa-money-check"></i>
                        Rút tiền</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help
                        Center</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
