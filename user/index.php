<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/style_news.css">
    <link rel="stylesheet" href="../css/styles_footer.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/style-t.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../library/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../library/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="../library/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="../library/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="../library/bootstrap_js/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/styles_homepage.css">
    <link rel="stylesheet" type="text/css" href="../css/style_responsive.css">
    <link rel="stylesheet" type="text/css" href="../css/style_cus.css">
    <script src="../library/bootstrap_js/js/jquery-3.2.1.min.js"></script>
    <script src="../library/bootstrap_js/js/bootstrap.js"></script>
    <script type="text/javascript" src="../library/bootstrap_js/js/fontawesome.js"></script>
    <script type="text/javascript">
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N5ZNN6');
    </script>
    <script type="text/javascript">
        if ($('#back-to-top').length) {
            var scrollTrigger = 100, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#back-to-top').addClass('show');
                    } else {
                        $('#back-to-top').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('#back-to-top').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 100);
            });
        }
    </script>
</head>
<body>
<div class="wrapper">
    <a href="#"><img src="../images/images.png" id="back-to-top" title="Back-to-top" alt=""></a>
    <header data-cfapps-welcome-bar-adjusted-fixed-element-original-top="0" style="">
        <div class="top-bar" id="myTopnav">
            <div class="col-logo"><a href="https://career.vn/"> <img class="logo-desktop" alt=""
                                                                     src="../images/logotimviec.png"
                                                                     data-at2x="">
                </a>
            </div>
            <div class=" main-menu">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" data-target="#navbarCollapse" data-toggle="collapse"
                                class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">
                            <div class="col-logo"><img class="logo-desktop" alt=""
                                                       src="../images/logotimviec.png"
                                                       data-at2x="">
                        </a></div>
            </div>
            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#" style="height:50px; padding: auto;color: #1f1f1f">Khám phá Nhà tuyển
                            dụng</a></li>
                    <li><a href="#" style="height:50px;padding: auto;color: #1f1f1f">Cơ hội việc làm</a></li>
                    <li><a href="#"
                           style="height:50px;padding: auto;color: #1f1f1f!important;text-decoration-color: #1f1f1f!important;">Cẩm
                            nang nghề nghiệp </a></li>
                </ul>
                <div class="menu-account">
                    <ul class="nav navbar-nav navbar-right" style="padding-right: 5px">
                        <li class="link-btn"><a data-toggle="modal" class="login-btn"
                                                href="#modal-login"
                                                style="padding: 12.5px 37px!important;"><span class="">Đăng nhập</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            </nav>

        </div>

</div>
</header>
<div class="wrapper-slider">
    <div class="search-form"><h1>Tìm việc mơ ước, mở lối thành công</h1>
        <form class="action-form-search form-search-1" action="https://career.vn/companies/search" method="get">
            <div class="search-type hidden-xs-down hidden-sm-down">
                <ul>
                    <li><a href="#" data-action="https://career.vn/companies/search"
                           data-text="Từ khóa, vị trí hoặc tên công ty"> Nhà tuyển dụng </a></li>
                    <li><a href="#" data-action="https://career.vn/jobs/search"
                           data-text="Từ khóa, vị trí hoặc tên công việc"> Việc làm </a></li>
                    <li><a href="#" data-text="Từ khóa" data-action="https://career.vn//search">Workshops</a>
                    </li>
                    <li><a href="#" data-text="Từ khóa" data-action="https://career.vn//search">Cẩm
                            nang</a></li>
                </ul>
            </div>
            <div class="form-group">
                <div class="row  form-inline form-search inline-block" >
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 keys" style="margin-right:15px"><input type="text" name="keyword"
                                                                                  class="input-keys"
                                                                                  placeholder="Từ khóa, vị trí hoặc tên công ty">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 location" ><input type="text" name="location"
                                                                                      id="header-location"
                                                                                      class="input-location ui-autocomplete-input"
                                                                                      placeholder="Thành phố"
                                                                                      autocomplete="off">
                    </div>
					<button type="button" class="btn btn-default btn-sm icon-search" style="margin-right: 20px;height:40px;margin-top: -22px;" >
						<span class="glyphicon glyphicon-search"></span> Search
                    </button> 
                </div>
            </div>
            <div class="upload-link">
                <h4 class="hidden-xs" style="color:#ffffff;font-family: 'Montserrat', Helvetica, Arial, sans-serif">
                    <marquee>Tìm kiếm việc làm nhanh giúp bạn ..Cơ hội ko trao lần hai</marquee>
                </h4>
            </div>
        </form>
    </div>

    <div id="carousel-example-generic" class="carousel slide slider-image banner1" data-ride="carousel"
         data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div id="item-1" class="item" style="background: url(../images/tiki1.jpg)">
            </div>
            <div id="item-2" class="item"
                 style="background: url(../images/unilever-office.jpg)">
            </div>
            <div id="item-3" class="item"
                 style="background: url(../images/reception-area-dutch-lady-vietnam.jpg)">
            </div>
            <div id="item-4" class="item"
                 style="background: url(../images/Vinamilk-5.jpg)">
            </div>
            <div id="item-5" class="item"
                 style="background: url(../images/adidas2.jpg)">
            </div>
            <div id="item-6" class="item"
                 style="background: url(../images/beiersdorf-7.jpg)">
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span
                    class="chevron-left"></span> </a> <a class="right carousel-control"
                                                         href="#carousel-example-generic" role="button"
                                                         data-slide="next"> <span class="chevron-right"></span> </a>
    </div>
    <script type="text/javascript">var max = parseInt(6);
        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        var number = getRandomInt(1, max);
        var d = document.getElementById("item-" + number);
        d.className += " active";</script>
</div>
<div class="muse-tiles"><h2>Đến với chúng tôi bạn không chỉ tìm thấy các cơ hội việc làm.</h2>
    <h3>Chúng tôi mang tới cho bạn những lợi ích gì? Khám phá ngay qua các thông tin hữu ích dưới đây.</h3></div>
<div class="our-offerings">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"
         style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.5)),url('../images/career-advice.jpg'); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-repeat: no-repeat; background-position: center center;">
        <div class="inner" style="height:280px"><h2><a href="/advice">CẨM NANG NGHỀ NGHIỆP</a></h2>
            <h3>Cung cấp thông tin liên quan đến định hướng, phát triển nghề nghiệp và kỹ năng tìm việc.</h3></div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="background: #53b6d0">
        <div class="inner" style="height:280px"><h2><a href="/jobs">CƠ HỘI VIỆC LÀM</a></h2>
            <h3>Thông tin việc làm rõ ràng, trực quan đi kèm hình ảnh văn hóa, môi trường làm việc sinh động.</h3>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="background:#c0c0c0">
        <div class="inner" style="height:280px"><h2><a href="/companies">KHÁM PHÁ NHÀ TUYỂN DỤNG</a></h2>
            <h3>Cung cấp cho bạn thông tin đầy đủ và chi tiết về nhà tuyển dụng trước khi ứng tuyển.</h3></div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"
         style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.5)),url('../images/workshop.jpg'); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-repeat: no-repeat; background-position: center center;">
        <div class="inner" style="height:280px"><h2><a href="/workshops">WORKSHOPS ĐỊNH HƯỚNG</a></h2>
            <h3>Cơ hội tham gia các sự kiện chia sẻ nghề nghiệp, định hướng cùng các chuyên gia.</h3></div>
    </div>
</div>
<div class="testimonials"><h2 class="heading-title">Mang cơ hội nghề nghiệp đến các bạn là sứ mệnh của chúng
        tôi.</h2>
</div>
<!--    news-->

<div class="main-content">
    <div class="row margin0 content-tk marginTop30 marginTop25-mb">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 padding0 w67p">

            <!-- Box Việc làm Tuyển Gấp -->
            <div class="block-new ">
                <h2 class="fontSize28 txt-36 fontSize20-mb pl12mb pr12mb">Tuyển Gấp</h2>
                <div class="result-box new-result-box marginTop15 ">
                    <div class="row th-box tr-box hidden-xs">
                        <div class="td-box col-xs-12 col-sm-6">Vị trí tuyển dụng</div>
                        <div class="td-box col-xs-12 col-sm-2">Mức lương</div>
                        <div class="td-box col-xs-12 col-sm-2">Khu vực</div>
                        <div class="td-box col-xs-12 col-sm-2">Hạn nộp</div>
                    </div>

                    <div class="row margin0 normal-job paddingTop10">
                        <div class="row tr-box job-info  ">
                            <div class="td-box col-xs-12 col-sm-6">
                                <h2 class="job-name margin0">
                                    <a class="" title="Nhân Viên Designer"
                                       href="https://viectotnhat.com/tuyen-nhan-vien-designer-ha-noi-1047899.html">
                                        Nhân Viên Designer </a>
                                </h2>
                                <a title="Công Ty Cổ Phần Truyền Thông Trust Media"
                                   href="https://viectotnhat.com/cong-ty-co-phan-truyen-thong-trust-media-tuyen-dung-1013360.html"
                                   class="com-name text-gray fontSize14">
                                    Công Ty Cổ Phần Truyền Thông Trust Media </a>
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-2">
                                <span class="icon-24 icon-13-20 icon-dolar-small "></span>
                                7-10 triệu
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-1">
                                <span class="icon-24 icon-13-20 icon-address-small"></span>
                                Hà Nội<br></div>
                            <div class="td-box col-xs-4SSS col-sm-2">
                                <span class="icon-24 icon-13-20 icon-clock-small "></span>
                                31/10/2017
                            </div>
                        </div>
                        <div class="row tr-box job-info  ">
                            <div class="td-box col-xs-12 col-sm-6">
                                <h2 class="job-name margin0">
                                    <a class="" title="Quản Lý Vận Hành (Ngành Thực Phẩm)"
                                       href="https://viectotnhat.com/tuyen-quan-ly-van-hanh-ha-noi-1051989.html">
                                        Quản Lý Vận Hành (Ngành Thực Phẩm) </a>
                                </h2>
                                <a title="Công Ty TNHH G.H.V"
                                   href="https://viectotnhat.com/cong-ty-tnhh-g-h-v-tuyen-dung-1011809.html"
                                   class="com-name text-gray fontSize14">
                                    Công Ty TNHH G.H.V </a>
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-2">
                                <span class="icon-24 icon-13-20 icon-dolar-small "></span>
                                15-20 triệu
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-1">
                                <span class="icon-24 icon-13-20 icon-address-small"></span>
                                Hà Nội<br></div>
                            <div class="td-box col-xs-4SSS col-sm-2">
                                <span class="icon-24 icon-13-20 icon-clock-small "></span>
                                11/10/2017
                            </div>
                        </div>
                        <div class="row tr-box job-info  ">
                            <div class="td-box col-xs-12 col-sm-6">
                                <h2 class="job-name margin0">
                                    <a class="" title="Nhân Viên Kinh Doanh"
                                       href="https://viectotnhat.com/tuyen-nhan-vien-kinh-doanh-1027479.html">
                                        Nhân Viên Kinh Doanh </a>
                                </h2>
                                <a title="Công ty TNHH TM&amp;DV Phân Phối Ánh Dương"
                                   href="https://viectotnhat.com/cong-ty-tnhh-tm-dv-phan-phoi-anh-duong-tuyen-dung-268935.html"
                                   class="com-name text-gray fontSize14">
                                    Công ty TNHH TM&amp;DV Phân Phối Ánh Dương </a>
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-2">
                                <span class="icon-24 icon-13-20 icon-dolar-small "></span>
                                7-10 triệu
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-1">
                                <span class="icon-24 icon-13-20 icon-address-small"></span>
                                Hà Nội<br>Hồ Chí Minh<br></div>
                            <div class="td-box col-xs-4SSS col-sm-2">
                                <span class="icon-24 icon-13-20 icon-clock-small "></span>
                                15/10/2017
                            </div>
                        </div>
                        <div class="row tr-box job-info  ">
                            <div class="td-box col-xs-12 col-sm-6">
                                <h2 class="job-name margin0">
                                    <a class="" title="Nhân Viên Kinh Doanh Thời Trang"
                                       href="https://viectotnhat.com/tuyen-nhan-vien-kinh-doanh-thoi-trang-khu-vuc-phia-bac-ha-noi-1050529.html">
                                        Nhân Viên Kinh Doanh Thời Trang </a>
                                </h2>
                                <a title="Công Ty Cổ Phần Thời Trang Kowil Việt Nam"
                                   href="https://viectotnhat.com/cong-ty-co-phan-thoi-trang-kowil-viet-nam-tuyen-dung-1016561.html"
                                   class="com-name text-gray fontSize14">
                                    Công Ty Cổ Phần Thời Trang Kowil Việt Nam </a>
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-2">
                                <span class="icon-24 icon-13-20 icon-dolar-small "></span>
                                7-10 triệu
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-1">
                                <span class="icon-24 icon-13-20 icon-address-small"></span>
                                Hà Nội<br></div>
                            <div class="td-box col-xs-4SSS col-sm-2">
                                <span class="icon-24 icon-13-20 icon-clock-small "></span>
                                05/10/2017
                            </div>
                        </div>
                        <div class="row tr-box job-info  ">
                            <div class="td-box col-xs-12 col-sm-6">
                                <h2 class="job-name margin0">
                                    <a class="" title="Nhân Viên Quản Lý Nợ Qua Điện Thoại"
                                       href="https://viectotnhat.com/tuyen-nhan-vien-quan-ly-no-qua-dien-thoai-ha-noi-1053188.html">
                                        Nhân Viên Quản Lý Nợ Qua Điện Thoại </a>
                                </h2>
                                <a title="Ngân hàng Vpbank"
                                   href="https://viectotnhat.com/ngan-hang-vpbank-tuyen-dung-1017370.html"
                                   class="com-name text-gray fontSize14">
                                    Ngân hàng Vpbank </a>
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-2">
                                <span class="icon-24 icon-13-20 icon-dolar-small "></span>
                                5-7 triệu
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-1">
                                <span class="icon-24 icon-13-20 icon-address-small"></span>
                                Hà Nội<br></div>
                            <div class="td-box col-xs-4SSS col-sm-2">
                                <span class="icon-24 icon-13-20 icon-clock-small "></span>
                                15/10/2017
                            </div>
                        </div>
                        <div class="row tr-box job-info  ">
                            <div class="td-box col-xs-12 col-sm-6">
                                <h2 class="job-name margin0">
                                    <a class="" title="Cán Bộ Thi Công Điện Nước Dân Dụng Và Công Nghiệp"
                                       href="https://viectotnhat.com/tuyen-can-bo-thi-cong-dien-nuoc-dan-dung-va-cong-nghiep-ha-noi-1051414.html">
                                        Cán Bộ Thi Công Điện Nước Dân Dụng Và Công Nghiệp </a>
                                </h2>
                                <a title="Công Ty Cổ Phần Incon"
                                   href="https://viectotnhat.com/cong-ty-co-phan-incon-tuyen-dung-1016817.html"
                                   class="com-name text-gray fontSize14">
                                    Công Ty Cổ Phần Incon </a>
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-2">
                                <span class="icon-24 icon-13-20 icon-dolar-small "></span>
                                7-10 triệu
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-1">
                                <span class="icon-24 icon-13-20 icon-address-small"></span>
                                Hà Nội<br>Nam Định<br>Bắc Ninh<br></div>
                            <div class="td-box col-xs-4SSS col-sm-2">
                                <span class="icon-24 icon-13-20 icon-clock-small "></span>
                                11/10/2017
                            </div>
                        </div>
                        <div class="row tr-box job-info  ">
                            <div class="td-box col-xs-12 col-sm-6">
                                <h2 class="job-name margin0">
                                    <a class="" title="Nhân Viên Kinh Doanh"
                                       href="https://viectotnhat.com/tuyen-nhan-vien-kinh-doanh-ha-noi-1052845.html">
                                        Nhân Viên Kinh Doanh </a>
                                </h2>
                                <a title="VP Cho Thuê Công Ty Bất Động Sản Ngôi Nhà Mới Việt Nam"
                                   href="https://viectotnhat.com/vp-cho-thue-cong-ty-ba-t-do-ng-sa-n-ngoi-nha-mo-i-vie-t-nam-tuyen-dung-1016105.html"
                                   class="com-name text-gray fontSize14">
                                    VP Cho Thuê Công Ty Bất Động Sản Ngôi Nhà Mới Việt Nam </a>
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-2">
                                <span class="icon-24 icon-13-20 icon-dolar-small "></span>
                                12-15 triệu
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-1">
                                <span class="icon-24 icon-13-20 icon-address-small"></span>
                                Hà Nội<br></div>
                            <div class="td-box col-xs-4SSS col-sm-2">
                                <span class="icon-24 icon-13-20 icon-clock-small "></span>
                                31/10/2017
                            </div>
                        </div>
                        <div class="row tr-box job-info  ">
                            <div class="td-box col-xs-12 col-sm-6">
                                <h2 class="job-name margin0">
                                    <a class="" title="Trợ Lý Tuyển Dụng"
                                       href="https://viectotnhat.com/tuyen-tro-ly-tuyen-dung-ha-noi-1049842.html">
                                        Trợ Lý Tuyển Dụng </a>
                                </h2>
                                <a title="Công ty TNHH Manulife Việt Nam"
                                   href="https://viectotnhat.com/cong-ty-tnhh-manulife-viet-nam-tuyen-dung-1013687.html"
                                   class="com-name text-gray fontSize14">
                                    Công ty TNHH Manulife Việt Nam </a>
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-2">
                                <span class="icon-24 icon-13-20 icon-dolar-small "></span>
                                5-7 triệu
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-1">
                                <span class="icon-24 icon-13-20 icon-address-small"></span>
                                Hà Nội<br></div>
                            <div class="td-box col-xs-4SSS col-sm-2">
                                <span class="icon-24 icon-13-20 icon-clock-small "></span>
                                07/10/2017
                            </div>
                        </div>
                        <div class="row tr-box job-info  ">
                            <div class="td-box col-xs-12 col-sm-6">
                                <h2 class="job-name margin0">
                                    <a class="" title="Nhân Viên Hành Chính"
                                       href="https://viectotnhat.com/tuyen-nhan-vien-hanh-chinh-ha-noi-1037321.html">
                                        Nhân Viên Hành Chính </a>
                                </h2>
                                <a title="Công Ty CP Bệnh Mắt Sài Gòn Hà Nội"
                                   href="https://viectotnhat.com/cong-ty-cp-benh-mat-sai-gon-ha-noi-tuyen-dung-438109.html"
                                   class="com-name text-gray fontSize14">
                                    Công Ty CP Bệnh Mắt Sài Gòn Hà Nội </a>
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-2">
                                <span class="icon-24 icon-13-20 icon-dolar-small "></span>
                                5-7 triệu
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-1">
                                <span class="icon-24 icon-13-20 icon-address-small"></span>
                                Hà Nội<br></div>
                            <div class="td-box col-xs-4SSS col-sm-2">
                                <span class="icon-24 icon-13-20 icon-clock-small "></span>
                                05/10/2017
                            </div>
                        </div>
                        <div class="row tr-box job-info  ">
                            <div class="td-box col-xs-12 col-sm-6">
                                <h2 class="job-name margin0">
                                    <a class="" title="Nhân Viên Kỹ Thuật"
                                       href="https://viectotnhat.com/tuyen-giam-sat-ky-thuat-ha-noi-1035069.html">
                                        Nhân Viên Kỹ Thuật </a>
                                </h2>
                                <a title="Công Ty Cổ Phần Nhựa Á Đông"
                                   href="https://viectotnhat.com/cong-ty-co-phan-nhua-a-dong-tuyen-dung-1012825.html"
                                   class="com-name text-gray fontSize14">
                                    Công Ty Cổ Phần Nhựa Á Đông </a>
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-2">
                                <span class="icon-24 icon-13-20 icon-dolar-small "></span>
                                7-10 triệu
                            </div>
                            <div class="td-box col-xs-4 col-sm-2 col-rev-1">
                                <span class="icon-24 icon-13-20 icon-address-small"></span>
                                Hà Nội<br></div>
                            <div class="td-box col-xs-4SSS col-sm-2">
                                <span class="icon-24 icon-13-20 icon-clock-small "></span>
                                10/10/2017
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alignCenter marginBottom10 marginTop20 pl12mb pr12mb">
                    <a href="https://viectotnhat.com/viec-lam-tuyen-gap.html" style="margin-bottom: 15px;"
                       class="btn btn-see-more fontSize16 font500 w320 w100p-mb"> <i
                                class="icon-24 icon-24-17 icon-add-item"></i> XEM THÊM VIỆC LÀM TUYỂN GẤP </a>
                </div>
            </div>
            <!-- End Box Việc làm Tuyển Gấp -->

            <!-- Box việc làm theo ngành nghề -->

            <!-- End Việc làm mới nhất -->

        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 paddingLeft20-pc padding0 w32p">

            <!--                        <div class="col-right-sidebar">-->
            <!--                        </div>-->

            <!-- Column  Tìm kiếm việc làm-->
            <div class="box-in-right content-62 marginTop20 hidden-xs search-block search-block-job">
                <h4 class="title-box margin0">Tìm kiếm việc làm</h4>
                <div class="content-box">
                    <form id="search_result_2" action="https://viectotnhat.com/viec-lam/tim-kiem" method="GET">
                        <div class="search-box-tk search-box w100p">
                            <div class="search-form">
                                <div class="input-search form-group" style="margin-bottom: 15px;">
                                    <input class="form-control search-header" name="tu_khoa"
                                           placeholder="Nhập từ khóa" type="text" autocomplete="off" value="">
                                    <button class="btn icon-box-s" id="input-btn2">
                                        <i class="icon-24 icon-search-small"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="marginTop12 div-sl-tk">
                            <select class="select2-new form-control select2-hidden-accessible"
                                    data-placeholder-value="0"
                                    data-placeholder-additional-class="select2-placeholder" name="nganh_nghe"
                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option value="0">Chọn ngành nghề</option>
                                <option value="10">Bán hàng</option>
                                <option value="11">Tư vấn bảo hiểm</option>

                            </select><span
                                    class=""
                                    dir="ltr" style="width: 100%;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-nganh_nghe-cv-container"></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <i class="icon-sprite-new icon-nganh-nghe-small"></i>
                        </div>

                        <div class="marginTop12 div-sl-tk">
                            <select class="select2-new form-control select2-hidden-accessible"
                                    data-placeholder-value="0"
                                    data-placeholder-additional-class="select2-placeholder" name="muc_luong"
                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option value="0">Chọn mức lương</option>
                                <option value="2">Dưới 3 triệu</option>
                                <option value="4">3-5 triệu</option>

                            </select><span
                                    class=""
                                    dir="ltr" style="width: 100%;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-muc_luong-ju-container"></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <i class="icon-sprite-new icon-ml-small"></i>
                        </div>

                        <div class="marginTop12 div-sl-tk">
                            <select class="select2-new form-control select2-hidden-accessible"
                                    data-placeholder-value="0"
                                    data-placeholder-additional-class="select2-placeholder" name="tinh_thanh"
                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option value="0">Chọn nơi làm việc</option>
                                <option value="1">Hồ Chí Minh</option>

                            </select><span
                                    class=""
                                    dir="ltr" style="width: 100%;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-tinh_thanh-y5-container"></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <i class="icon-sprite-new icon-addr-small"></i>
                        </div>

                        <div class="marginTop12 div-sl-tk">
                            <select class="select2-new form-control select2-hidden-accessible"
                                    data-placeholder-value="0"
                                    data-placeholder-additional-class="select2-placeholder" name="loai_hinh"
                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option value="0">Chọn hình thức làm việc</option>
                                <option value="1">Nhân viên chính thức</option>
                                <option value="2">Nhân viên thời vụ</option>
                                <option value="3">Bán thời gian</option>
                                <option value="4">Làm thêm ngoài giờ</option>
                                <option value="5">Thực tập và dự án</option>
                            </select><span
                                    class=""
                                    dir="ltr" style="width: 100%;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-loai_hinh-lj-container"></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <i class="icon-sprite-new icon-lh-small"></i>
                        </div>

                        <div class="marginTop12 div-sl-tk">
                            <select class="select2-new form-control select2-hidden-accessible"
                                    data-placeholder-value="0"
                                    data-placeholder-additional-class="select2-placeholder" name="kinh_nghiem"
                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option value="0">Chọn kinh nghiệm</option>
                                <option value="100">Chưa có kinh nghiệm</option>
                                <option value="7">Dưới 1 năm</option>
                                <option value="1">1 năm</option>
                                <option value="2">2 năm</option>
                                <option value="3">3 năm</option>
                                <option value="4">4 năm</option>
                                <option value="5">5 năm</option>
                                <option value="6">Trên 5 năm</option>
                            </select><span
                                    class=""
                                    dir="ltr" style="width: 100%;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-kinh_nghiem-5x-container"></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <i class="icon-sprite-new icon-kn-small"></i>
                        </div>

                        <div class="marginTop12 div-sl-tk">
                            <select class="select2-new form-control select2-hidden-accessible"
                                    data-placeholder-value="0"
                                    data-placeholder-additional-class="select2-placeholder" name="trinh_do"
                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option value="0">Chọn trình độ</option>
                                <option value="6">Đại học</option>
                                <option value="5">Cao đẳng</option>
                                <option value="4">Trung cấp</option>
                                <option value="7">Cao học</option>
                                <option value="3">Trung học</option>
                                <option value="2">Chứng chỉ</option>
                                <option value="1">Lao động phổ thông</option>
                                <option value="8">Không yêu cầu</option>
                            </select><span
                                    class=""
                                    dir="ltr" style="width: 100%;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-trinh_do-54-container"></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <i class="icon-sprite-new icon-td-small"></i>
                        </div>

                        <div class="marginTop12 div-sl-tk">
                            <select class="select2-new form-control select2-hidden-accessible"
                                    data-placeholder-value="0"
                                    data-placeholder-additional-class="select2-placeholder" name="gioi_tinh"
                                    style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option value="0">Chọn giới tính</option>
                                <option value="N">Nữ</option>
                                <option value="Y">Nam</option>
                                <option value="U">Không yêu cầu</option>
                            </select><span
                                    class=""
                                    dir="" style="width: 100%;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-gioi_tinh-tt-container"></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            <i class="icon-sprite-new icon-gt-small"></i>
                        </div>

                        <button type="submit" class="btn btn-orange-52 marginTop15 w100p fontSize16 bold">
                            <i class="icon-24-white icon-search-white-ntd"></i>
                            TÌM KIẾM
                        </button>
                    </form>
                </div>
            </div>                        <!-- Column  Tìm kiếm việc làm-->


            <!-- Việc làm theo tỉnh thành -->
            <div class="box-in-right content-62 marginTop20 box-dis-mb">
                <h4 class="title-box margin0">Việc làm theo tỉnh thành</h4>
                <div class="content-box">
                    <div class="bgWhite-mb pl12mb pr12mb paddingTop15-mb">
                        <ul class="row margin0 list-tinh-thanh" id="jobProvince">
                            <li class="bold ">
                                <a href="#">Hồ Chí Minh <span class="badge">8542
                                </a>
                            </li>
                            <li class="bold ">
                                <a href="https://viectotnhat.com/viec-lam-ha-noi-p2.html">
                                    Hà Nội <span class="badge">4905</span>
                                </a>
                            </li>
                            <li class="bold ">
                                <a href="https://viectotnhat.com/viec-lam-binh-duong-p10.html">
                                    Bình Dương <span class="badge">1155</span>
                                </a>
                            </li>
                            <li class="bold ">
                                <a href="https://viectotnhat.com/viec-lam-dong-nai-p21.html">
                                    Đồng Nai <span class="badge">779</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="https://viectotnhat.com/viec-lam-bac-ninh-p8.html">
                                    Bắc Ninh <span class="badge">275</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="https://viectotnhat.com/viec-lam-hai-phong-p29.html">
                                    Hải Phòng <span class="badge">267</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="https://viectotnhat.com/viec-lam-da-nang-p17.html">
                                    Đà Nẵng <span class="badge">239</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="https://viectotnhat.com/viec-lam-long-an-p40.html">
                                    Long An <span class="badge">203</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="https://viectotnhat.com/viec-lam-hung-yen-p32.html">
                                    Hưng Yên <span class="badge">187</span>
                                </a>
                            </li>
                            <li class=" hidden job_province">
                                <a href="https://viectotnhat.com/viec-lam-hai-duong-p28.html">
                                    Hải Dương<span class="badge">164</span>
                                </a>
                            </li>
                            <li class=" hidden job_province">
                                <a href="https://viectotnhat.com/viec-lam-toan-quoc-p65.html">
                                    Toàn quốc <span class="badge">145</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class=" marginTop5 marginTop12-mb pl12mb pr12mb">
                        <a class="btn btn-see-more fontSize16 font500 w100p"
                           href="https://viectotnhat.com/viec-lam/danh-sach-tinh-thanh">
                            <i class="icon-24 icon-24-17 icon-add-item"></i>
                            <span class="hidden-xs">XEM THÊM  </span>
                            <span class="visible-xs inline-mb">XEM TẤT CẢ TỈNH THÀNH  </span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<footer class="footer-widget" style="color: #000000">
    <div class="pull-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="footer-widget-content widget widget_jeg_about_me" id="jeg_about_me-3">
                        <div class="about-us-widget">
                            <div class="about-image"><img
                                        src="../images/logotimviec.png"
                                        alt=""></div>
                            <div class="about-description"> © 2016 Team CNPM</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-logo">
                    <div class="footer-widget-content widget widget_nav_menu" id="nav_menu-2"><h3
                                class="widget-title">Giới thiệu website</h3>
                        <div class="menu-about-menu-container">
                            <ul id="menu-about-menu" class="menu">
                                <li id="menu-item-93"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-93">
                                    <a href="//career.vn/about">Giới thiệu về Career.vn</a></li>
                                <li id="menu-item-94"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-94">
                                    <a href="//career.vn/contact">Liên lạc</a></li>
                                <li id="menu-item-95"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-95">
                                    <a href="//career.vn/hiring">Gia nhập Career.vn</a></li>
                                <li id="menu-item-97"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-97">
                                    <a href="//career.vn/privacy-policy">Nội quy website</a></li>
                                <li id="menu-item-96"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-96">
                                    <a href="//career.vn/terms-of-use">Thỏa thuận sử dụng</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                    <div class="footer-widget-content widget widget_nav_menu" id="nav_menu-3"><h3
                                class="widget-title">Việc theo tỉnh thành</h3>
                        <div class="menu-location-menu-container">
                            <ul id="menu-location-menu" class="menu">
                                <li id="menu-item-65"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-65">
                                    <a href="/jobs/location/ho-chi-minh">Thành phố Hồ Chí Minh</a></li>
                                <li id="menu-item-66"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-66">
                                    <a href="/jobs/location/ha-noi">Hà Nội</a></li>
                                <li id="menu-item-67"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-67">
                                    <a href="/jobs/location/da-nang">Đà Nẵng</a></li>
                                <li id="menu-item-68"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-68">
                                    <a href="/jobs/location/ba-ria-vung-tau">Bà Rịa – Vũng Tàu</a></li>
                                <li id="menu-item-69"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-69">
                                    <a href="/jobs/location/binh-duong">Bình Dương</a></li>
                                <li id="menu-item-70"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-70">
                                    <a href="/jobs/location/dong-nai">Đồng Nai</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                    <div class="footer-widget-content widget widget_nav_menu" id="nav_menu-7"><h3
                                class="widget-title">Mở rộng</h3>
                        <div class="menu-extra-menu-container">
                            <ul id="menu-extra-menu" class="menu">
                                <li id="menu-item-98"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-98">
                                    <a href="//career.vn/employers">Nhà tuyển dụng</a></li>
                                <li id="menu-item-99"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-99">
                                    <a href="//career.vn/advice">Cẩm nang nghề nghiệp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="column social_col"><h3 class="widget-title hidden-xs">Career.vn trên mạng xã
                            hội</h3>
                        <h3 class="widget-title show-xs" style="display:none">Follow us on</h3> <a
                                class="facebook" aria-label="facebook"
                                href="https://www.facebook.com/career.vietnam/" target="_blank"> <i
                                    aria-hidden="true" class="fa fa-facebook"></i> </a> <a class="linkedin"
                                                                                           aria-label="linkedin"
                                                                                           href="https://www.linkedin.com/company/career.vn-inc"
                                                                                           target="_blank"> <i
                                    aria-hidden="true" class="fa fa-linkedin"></i> </a> <a class="google"
                                                                                           aria-label="twitter"
                                                                                           href="https://plus.google.com/116036075369741921314"
                                                                                           target="_blank"> <i
                                    aria-hidden="true" class="fa fa-google-plus"></i> </a> <a
                                aria-label="instagram"
                                href="https://www.youtube.com/channel/UC28JndrHVcjbaSKiQVVAxXQ" target="_blank">
                            <i aria-hidden="true" class="fa fa-youtube"></i> </a></div>
                    <div class="link-cdn"><a
                                href="http://www.dmca.com/Protection/Status.aspx?ID=f04dad6d-8c15-4350-b27b-ec5a151edcb5&amp;refurl=https://career.vn/"
                                title="DMCA.com Protection Status" class="dmca-badge"> <img
                                    src="../images/dmca_protected_sml_120l.png?ID=f04dad6d-8c15-4350-b27b-ec5a151edcb5"
                                    alt="DMCA.com Protection Status"></a>
                        <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</body>
</html>