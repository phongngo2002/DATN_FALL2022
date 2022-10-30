<header id="header-container" class="header head-tr">
    <!-- Header -->
    <div id="header" class="head-tr bottom">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="index.html"><img src="{{ asset('assets/client/images/logo-white-1.svg') }}"
                            data-sticky-logo="images/logo-red.svg" alt=""></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 head-tr">
                    <ul id="responsive">
                        <li><a href="home.html">Trang chủ</a>
                        </li>

                        <li><a href="motels.html">Phòng trọ</a>
                        </li>
                        <li><a href="{{route('client_list_live_together')}}">Tìm người ở ghép</a>
                        </li>
                        <li><a href="#">Bảng giá dịch vụ</a>
                        </li>
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->

            <!-- Right Side Content / End -->
            <div class="right-side d-none d-none d-lg-none d-xl-flex">
                <!-- Header Widget -->
                <div class="header-widget">
                    <a href="{{ route('client_current_motel')}}" style="display: flex;justify-content: center;align-items: center;" class="button border">Đăng bài<i class="fas fa-laptop-house ml-2"></i>
                    </a>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

            <!-- Right Side Content / End -->
            <!-- <div class="header-user-menu user-menu add">
                <div class="header-user-name">
                    <span><img src="images/testimonials/ts-1.jpg" alt=""></span>Hi, Mary!
                </div>
                <ul>
                    <li><a href="user-profile.html"> Edit profile</a></li>
                    <li><a href="add-property.html"> Add Property</a></li>
                    <li><a href="payment-method.html"> Payments</a></li>
                    <li><a href="change-password.html"> Change Password</a></li>
                    <li><a href="#">Log Out</a></li>
                </ul>
            </div> -->
            <!-- Right Side Content / End -->


            @if (\Illuminate\Support\Facades\Auth::user())
                <div class="header-user-menu user-menu add d-none d-none d-lg-none d-xl-flex sign ml-0">
                    <div class="header-user-name">
                        <span><img
                                src="{{ \Illuminate\Support\Facades\Auth::user()->avatar ?? 'https://yt3.ggpht.com/ytc/AMLnZu_LsaWhvhA9-Hbda7_l-pQJCN8wB6nbhYBiDW4C0A=s900-c-k-c0x00ffffff-no-rj' }}"
                                alt=""></span>Chào, {{ \Illuminate\Support\Facades\Auth::user()->name }}!
                    </div>
                    <ul>
                        <li><a href="#">Tài khoản
                                gốc: <span
                                    class="font-weight-bold">{{ number_format(\Illuminate\Support\Facades\Auth::user()->money, 0, ',', '.') }}</span>
                                <i class="fa-brands fa-bitcoin text-warning"></i></a></li>
                        <li><a href="user-profile.html">Thông tin cá nhân</a></li>
                        <li><a href="{{ route('getRecharge') }}">Nạp tiền</a></li>
                        <li><a href="change-password.html">Đổi mật khẩu</a></li>
                        <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                    </ul>
                </div>
            @else
                <div class="right-side d-none d-none d-lg-none d-xl-flex ml-0"
                    style="padding: 0 4px 0 5px;margin-top: 16px">
                    <!-- Header Widget -->
                    <div class="header-widget sign-in">
                        <div><a href="{{ route('get_login') }}">Đăng nhập</a></div>
                    </div>
                    <!-- Header Widget / End -->
                </div>
            @endif
            <!-- Right Side Content / End -->

            <!-- lang-wrap-->
            {{--            <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">--}}
            {{--                <div class="lang-wrap">--}}
            {{--                    <div class="show-lang"><span><i--}}
            {{--                                class="fas fa-globe-americas"></i><strong>ENG</strong></span><i--}}
            {{--                            class="fa fa-caret-down arrlan"></i></div>--}}
            {{--                    <ul class="lang-tooltip lang-action no-list-style">--}}
            {{--                        <li><a href="#" class="current-lan" data-lantext="En">English</a></li>--}}
            {{--                        <li><a href="#" data-lantext="Fr">Francais</a></li>--}}
            {{--                        <li><a href="#" data-lantext="Es">Espanol</a></li>--}}
            {{--                        <li><a href="#" data-lantext="De">Deutsch</a></li>--}}
            {{--                    </ul>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <!-- lang-wrap end-->

        </div>
    </div>
    <!-- Header / End -->

</header>
