<head>
    @include('layout.head')
</head>
@extends('layout.master')
@section('title', ' تواصل معنا || جامعتنا')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p> 24/7 دعم فني</p>
                        <h1>تواصل معنا</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    <div class="contact-from-section mt-150 mb-150" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0" style="margin: auto">
                    <div class="form-title">
                        <h2 style="text-align: center; color: #012738;">هل لديك أي اسئلة؟</h2>
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <form method="POST" action="{{route('sendmail')}}" id="fruitkha-contact" onSubmit="return valid_datas( this );">
                            @csrf
                            <p>
                                <input required type="text" placeholder="الاسم" name="name" id="name">
                                <input required type="email" placeholder="البريد الالكتروني" name="email" id="email">
                            </p>
                            <p>
                                <input required type="text" placeholder="العنوان" name="subject" id="subject" style="width: 99%;">
                            </p>
                            <p>
                                <textarea required name="message" id="message" cols="30" rows="10" placeholder="نص الرسالة......"></textarea>
                            </p>
                            <p style="text-align: center;"><input type="submit" style="width: 35%" value="ارسال"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form -->

@endsection
