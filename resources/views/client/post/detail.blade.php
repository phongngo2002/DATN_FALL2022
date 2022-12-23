
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/blog-full-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 14:25:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Blog</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('assets/client/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/font-awesome.min.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('assets/client/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/client/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('assets/client/css/default.css')}}">
    <style>
        #header {
            background-color: #ffffff;
        }

        li {
            list-style: none;
        }
    </style>
</head>

<body class="inner-pages hd-white">
<!-- Wrapper -->
<div id="wrapper">
    <!-- START SECTION HEADINGS -->
    <!-- Header Container
    ================================================== -->
    @include('layouts.client.header')
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Bài viết</h1>
                <h2><a href="{{route('home')}}">Trang chủ </a> &nbsp;/&nbsp; Bài viết</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION BLOG -->
    <section class="blog blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-xs-12">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-md-6 col-xs-12 my-4">
                                <div class="news-item">
                                    <a href="blog-details.html" class="news-img-link">
                                        <div class="news-item-img">
                                            <img class="img-responsive" src="{{$post->img}}" alt="blog image">
                                        </div>
                                    </a>
                                    <div class="news-item-text">
                                        <a href="blog-details.html"><h3>{{$post->title}}</h3></a>
                                        <div class="dates">
                                            <span class="date">April 11, 2020 &nbsp;/</span>
                                            <ul class="action-list pl-0">
                                                <li class="action-item pl-2"><i class="fa fa-heart"></i>
                                                    <span>306</span></li>
                                                <li class="action-item"><i class="fa fa-comment"></i> <span>34</span>
                                                </li>
                                                <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="news-item-descr big-news">
                                            <p>{{$post->desc_post}}</p>
                                        </div>
                                        <div class="news-item-bottom">
                                            <a href="blog-details.html" class="news-link">Read more...</a>
                                            <div class="admin">
                                                <p>{{$post->name}}</p>
                                                <img
                                                    src="{{$post->avatar ?? 'https://viettelhochiminh.com.vn/wp-content/uploads/2022/05/anime-chibi-1.jpg'}}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>

                </div>
                <aside class="col-lg-3 col-md-12">
                    <div class="widget">
                        <h5 class="font-weight-bold mb-4">Search</h5>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><i class="fa fa-search"
                                                                             aria-hidden="true"></i></button>
                            </span>
                        </div>
                        <div class="recent-post py-5">
                            <h5 class="font-weight-bold">Category</h5>
                            <ul>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>House</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Garages</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Real Estate</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Real Home</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bath</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Beds</a></li>
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h5 class="font-weight-bold mb-4">Popular Tags</h5>
                            <div class="tags">
                                <span><a href="#" class="btn btn-outline-primary">Houses</a></span>
                                <span><a href="#" class="btn btn-outline-primary">Real Home</a></span>
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
                                <span><a href="#" class="btn btn-outline-primary">Real Estates</a></span>
                                <span><a href="#" class="btn btn-outline-primary">Properties</a></span>
                            </div>
                            <div class="tags">
                                <span><a href="#" class="btn btn-outline-primary mb-0">Location</a></span>
                                <span><a href="#" class="btn btn-outline-primary mb-0">Price</a></span>
                            </div>
                        </div>
                        <div class="recent-post pt-5">
                            <h5 class="font-weight-bold mb-4">Recent Posts</h5>
                            <div class="recent-main">
                                <div class="recent-img">
                                    <a href="blog-details.html"><img src="images/blog/b-1.jpg" alt=""></a>
                                </div>
                                <div class="info-img">
                                    <a href="blog-details.html"><h6>Real Estate</h6></a>
                                    <p>May 10, 2020</p>
                                </div>
                            </div>
                            <div class="recent-main my-4">
                                <div class="recent-img">
                                    <a href="blog-details.html"><img src="images/blog/b-2.jpg" alt=""></a>
                                </div>
                                <div class="info-img">
                                    <a href="blog-details.html"><h6>Real Estate</h6></a>
                                    <p>May 10, 2020</p>
                                </div>
                            </div>
                            <div class="recent-main">
                                <div class="recent-img">
                                    <a href="blog-details.html"><img src="images/blog/b-3.jpg" alt=""></a>
                                </div>
                                <div class="info-img">
                                    <a href="blog-details.html"><h6>Real Estate</h6></a>
                                    <p>May 10, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <div>
                {{$posts->links()}}
            </div>
        </div>
    </section>
    <!-- END SECTION BLOG -->

    <!-- START FOOTER -->
    <footer class="first-footer">
        <div class="second-footer">
            <div class="container">
                <p>2022 © Website tìm kiếm và quản lý phòng trọ hàng đầu Việt Nam</p>
            </div>
        </div>
    </footer>

    <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->
    <!--register form end -->
    <script src="{{asset('assets/client/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/client/js/tether.min.js')}}"></script>
    <script src="{{asset('assets/client/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/client/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/client/js/mmenu.min.js')}}"></script>
    <script src="{{asset('assets/client/js/mmenu.js')}}"></script>
    <script src="{{asset('assets/client/js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('assets/client/js/color-switcher.js')}}"></script>
    <script src="{{asset('assets/client/js/inner.js')}}"></script>
    <script src="{{asset('assets/client/js/ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/client/js/newsletter.js')}}"></script>

</div>
<!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/blog-full-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Sep 2022 14:25:25 GMT -->
</html>
