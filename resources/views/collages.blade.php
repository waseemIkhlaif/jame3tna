<head>
    @include('layout.head')
</head>
@extends('layout.master')
@section('title', ' الكليات || جامعتنا')
@section('content')
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>كـــــلـــــيـــــاتـــــنـــــا</p>
                        <h1>الـكـلـيـات</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="breadcrumb-text text-center mt-5">
            <p>كـــــلـــــيـــــاتـــــنـــــا</p>
            <h2>تصفح الكليات</h2>
        </div>
        <div class="container" dir="rtl">
            <div class="d-flex flex-wrap justify-content-around">
                @foreach ($collage as $item)
                    <a href="/majors/{{ $item->id }}" class="mt-5 mx-1 collageBox">
                        <div class="d-flex justify-content-center align-items-center text-center">{{ $item->name }}</div>
                    </a>
                @endforeach
                
            </div>
        </div>
    </div>
@endsection
