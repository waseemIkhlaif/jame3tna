@extends('layout.master')
@section('title', $CollageName)

@section('content')
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>مــــــــســــــــاقــــــــات</p>
                    <h1>{{ $CollageName }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex" style="margin-top: 100px; overflow: visible;" dir="rtl">
    <div class="child p-2 mx-2 rounded majors-filters">
        <h3 class="tittle mx-2 pb-3">الـتـخـصـصـات</h3>
        <ul style="list-style: none">
        @foreach ($majorResult as $item)
        <li data-filter="._{{ $item->id }}">
            <div>{{ $item->name }}</div>
        </li>
        @endforeach
        </ul>
    </div>
    <div class="containss courses-lists">
        @foreach ($data as $item)
        <a href="/courses/{{ $item->course_id }}" class="_{{ $item->major_id }}">
            @foreach ($courses as $course)
                @if ($item->course_id == $course->id)
                    <div>{{ $course->name }}</div>
                @endif
            @endforeach
        </a>
        @endforeach
    </div>
</div>
@endsection