<head>
    @include('layout.head')
</head>
@extends('layout.master')
@section('title', 'الرئيسية || جامعتنا')
@section('content')
    <!-- home page slider -->
    <div class="homepage-slider">
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-1" dir="rtl">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-right">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">هـــــــيـــــــا بــــــــنـــــــا !</p>
                                <h1>لخوض عملية تدريسية <br>سلسة ابدأ الأن</h1>
                                <div class="hero-btns">
                                    <a href="{{ route('collages') }}" class="boxed-btn">الكـليـات</a>
                                    <a href="{{ route('contactus') }}" class="bordered-btn">تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">تــحــديــثــات يــومــيــة</p>
                                <h1>تغطية كاملة لمعظم المساقات</h1>
                                <div class="hero-btns">
                                    <a href="{{ route('collages') }}" class="boxed-btn">الكـليـات</a>
                                    <a href="{{ route('contactus') }}" class="bordered-btn">تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-3" dir="rtl">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-right">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">جامـــعـــتـــنـــا الأفـــضـــل !</p>
                                <h1>تواصل مباشر وسهل<br> مع المشرفين</h1>
                                <div class="hero-btns">
                                    <a href="{{ route('collages') }}" class="boxed-btn">الكليات</a>
                                    <a href="{{ route('contactus') }}" class="bordered-btn">تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end home page slider -->
    
    <div class="abt-section mb-150 mt-100">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="#" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub" style="text-align: right">منذ عام 2021</p>
						<h2 style="text-align: right">فريق <span class="orange-text">جامعتنا</span></h2>
						<p style="text-align: right">جامعتنا موقع الكتروني يضم كل ما يحتاجه الطالب من سلايدات وكتب وتلاخيص وامتحانات وواجبات ومحاضرات مصورة لكافة الدكاترة في معظم تخصصات الجامعة بالاضافة الى قسم تحت مسمى تواصل مع مدرسك لاظهار ايميلات الدكاترة والاداريين بالجامعة.</p>
						<a href="{{route('aboutus')}}" class="boxed-btn mt-4 w-100" dir="rtl">من نحن</a>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="contactUsSection">
        <div class="d-flex" style="justify-content: center; align-items: center; flex-direction: column;">
            <h2>تواصل معنا</h2>
            <a href="{{ route('contactus') }}" class="bordered-btn">تواصل معنا</a>
        </div>
    </div>
@endsection
