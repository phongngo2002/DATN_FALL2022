<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ route('backend_get_dashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('backend_get_list_area') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Khu trọ</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('backend_get_list_deposit') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Lịch sử đặt
                        cọc</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('backend_admin_get_list_plans')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Gói dịch vụ</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('backend_get_list_recharge')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span
                        class="align-middle">Lịch sử nạp tiền</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route("admin.plan-history.list") }}">
                    <i class="align-middle" data-feather="log-in"></i> <span
                        class="align-middle">Lịch sử giao dịch</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('backend_user_getAll')}}">
                    <i class="align-middle" data-feather="user"></i> <span
                        class="align-middle">Tài khoản</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
