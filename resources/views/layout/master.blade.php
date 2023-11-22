<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    {{-- @include('layout.head') --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    <!-- favicon -->
	<link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
    <nav class="w-75 mx-auto my-3 navbar navbar-expand-lg fixed-top bg-white" dir="rtl">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ url('assets/img/logo.png') }}" alt="logo" style="width: 95px; height: 52px;">
            </a>
            <div class="menu">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#0fb78d"><path d="M14.33333,35.83333v14.33333h143.33333v-14.33333zM14.33333,78.83333v14.33333h143.33333v-14.33333zM14.33333,121.83333v14.33333h143.33333v-14.33333z"></path></g></g>
                    </svg>
                        <ul class="submenu">
                            <li><a class="nav-link active" aria-current="page" href="{{ route('home') }}">الرئيسية</a></li>
                            <li><a class="nav-link" href="{{ route('aboutus') }}">عن جامعتنا</a></li>
                            <li> <a class="nav-link" href="{{ route('collages') }}">الكليات</a></li>
                            <li><a class="nav-link" href="{{ route('nessesary') }}">اجباري الجامعة</a>
                            <li> <a class="nav-link" href="{{ route('contactus') }}">تواصل معنا</a></li>
                        </ul>
                
                </div>
            <div class="py-2 collapse navbar-collapse" id="navbarToggleExternalContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aboutus') }}">عن جامعتنا</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{ route('collages') }}">الكليات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('nessesary') }}">اجباري الجامعة</a>
                    </li>
                </ul>
                <a class="contactbtn mx-5 p-2 bg-transparent rounded-pill" style="text-align: center" href="{{ route('contactus') }}">تواصل معنا</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- footer -->
<div class="footer-area mt-5" dir="rtl">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-box about-widget">
                    <h2 class="widget-title text-right">من نحن</h2>
                    <p class="text-right">جامعتنا موقع الكتروني يضم كل ما يحتاجه الطالب من سلايدات وكتب وتلاخيص وامتحانات وواجبات ومحاضرات مصورة لكافة الدكاترة في معظم تخصصات الجامعة بالاضافة الى قسم تحت مسمى تواصل مع مدرسك لاظهار ايميلات الدكاترة والاداريين بالجامعة.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title text-right">تواصل معنا</h2>
                    <ul class="text-right">
                        <li>جامعة النجاح الوطنية , نابلس</li>
                        <a href="{{ route('contactus') }}" class="bordered-btn">تواصل معنا</a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box pages">
                    <h2 class="widget-title text-right">الصفحات</h2>
                    <ul class="text-right">
                        <li><a href="{{ route('home') }}">الرئيسية</a></li>
                        <li><a href="{{ route('aboutus') }}">من نحن</a></li>
                        <li><a href="{{ route('collages') }}">الكليات</a></li>
                        <li><a href="{{ route('nessesary') }}">اجباري الجامعة</a></li>
                        <li><a href="{{ route('contactus') }}">تواصل معنا</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box subscribe">
                    <h2 class="widget-title text-right">لكل جديد</h2>
                    <p class="text-right">اشترك ليصلك كل جديد منا</p>
                    <form action="#" class="text-right">
                        <input type="email" placeholder="البريد الالكتروني">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end footer -->

<!-- copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <p>Copyrights &copy; 2023 - <a href="https://www.facebook.com/groups/1174423963027084">Facebook</a>,  All Rights Reserved.<br>
                    Distributed By - <a href="https://www.facebook.com/groups/1174423963027084">Jame3tna Team</a>
                </p>
            </div>
            <div class="col-lg-6 text-right col-md-12">
                <div class="social-icons">
                    <ul>
                        <li><a href="https://www.facebook.com/groups/1174423963027084" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end copyright -->

    <script>
        $('a.action').on('click', function(){
            var sectionClass = $(this).data('section');
            $(this).parents('.StepsProg').find('.step').hide();
            $('.step.'+sectionClass).fadeIn(1000);
        });
    </script>
    <!-- jquery -->
	<script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('assets/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('assets/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
