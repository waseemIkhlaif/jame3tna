@extends('layout.master')
@section('title', ' اجباري الجامعة || جامعتنا')

@section('content')
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>مواد الاجباري</p>
                    <h1>اجباري الجامعة</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex" style="margin-top: 100px" dir="rtl">
    <div class="child p-2 mx-2 rounded majors-filters">
        <h3 class="tittle mx-2 pb-3">اجباري الجامعة</h3>
        <ul style="list-style: none; padding: 0px;">
            @foreach ($courses as $item)
            <li data-filter="._{{ $item->id }}">
                <div>{{ $item->name }}</div>
            </li>
            @endforeach
            </ul>
    </div>
    <div class="contains courses-lists" style="margin-top: 80px;margin-right: 0px!important;">
            @foreach ($relation as $item)
                @foreach ($files as $file)
                    <a class="_{{ $item->course_id }}" href="{{$file->path}}" target="_black" style="margin-left: 1px!important;">
                        @if ($item->file_id == $file->id)
                            <div>
                                <h4 class="dis pt-2">{{$file->name}}</h4>
                                <h5>{{$file->name}}</h5>
                            </div>
                        @endif
                    </a>
                @endforeach
            @endforeach
        
    </div>
</div>

@endsection
