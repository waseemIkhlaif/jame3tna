<head>
    @include('layout.head')
</head>
@extends('layout.master')
@section('title', 'من نحن || جامعتنا')
@section('content')
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>عن فريق جامعتنا</p>
                    <h1>مــن نــحــن</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w-100 h-100 margin" style="margin-top: 85px; margin-bottom: 85px;">
    <div class="container">
        <div class="aboutusText w-50">
            <h2 class="text-right mb-4">نبذة عن الموقع</h2>
            <p class="text-right">جامعتنا موقع الكتروني يضم كل ما يحتاجه الطالب من سلايدات وكتب وتلاخيص وامتحانات وواجبات ومحاضرات مصورة لكافة الدكاترة في معظم تخصصات الجامعة بالاضافة الى قسم تحت مسمى تواصل مع مدرسك لاظهار ايميلات الدكاترة والاداريين بالجامعة.</p>
            <ul class="featurs text-right" dir="rtl">
                <li>اكثر من 1000 ايميل للاداريين بالجامعة</li>
                <li>فريقنا تجاوز ال 40 عضو</li>
                <li>اكثر من 30 تخصص</li>
            </ul>
        </div>
        <div class="aboutusText w-50 bg-success homepage-bg-1" style="height: 325.500px"></div>
    </div>
</div>
@endsection