@extends('layout.master')
@section('title' , 'اسم الكلية')

@section('content')
<h3 class="title">{{ $courseName }}</h3>
<div class="d-flex" style="margin-top: 35px; flex-direction: column;" dir="rtl">
    <button onclick="goBack()" class="goback">رجوع</button>
    <div class="contains courses-lists">
        @foreach ($courses as $course)
            @foreach ($files as $file)
                <a href="{{ $file->path }}" target="_black">
                        @if ($file->id == $course->file_id)
                            <div>
                                <h3 class="dis">{{ $file->name }}</h3>
                                <h5>{{ $file->name }}</h5>
                            </div>
                        @endif
                    
                </a>
            @endforeach
        @endforeach
    </div>
</div>
@endsection