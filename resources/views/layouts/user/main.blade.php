<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/add-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Oct 2022 15:00:44 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Chợ phòng trọ - Website tìm kiếm phòng trọ số 1 Việt Nam</title>
    @include('layouts.user._css')
</head>

<body class="inner-pages maxw1600 m0a dashboard-bd">
<div id="wrapper" class="int_main_wraapper">
    <div class="dash-content-wrap">
    </div>
    <div class="clearfix"></div>
    @include('layouts.user.header')
    <section class="user-page section-padding pt-5">
        <div class="container-fluid">
            <div class="row">
                @include('layouts.user.sidebar')
                <div class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    @include('layouts.user.footer')
</div>
@include('layouts.user._js')
</body>


<!-- Mirrored from code-theme.com/html/findhouses/add-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Oct 2022 15:00:45 GMT -->
</html>
