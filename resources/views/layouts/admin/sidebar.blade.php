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
                <a class="sidebar-link" href="{{ route('admin.plans.index') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Gói dịch vụ</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
