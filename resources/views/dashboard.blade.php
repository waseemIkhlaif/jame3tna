<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
    <!-- Font Awesome Library-->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <!-- Goole Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<style>
    .instructions li{
        margin-bottom: 15px
    }
</style>
<body>
    <header>
        <div class="container">
            <div>
                <h1 class="tittle">Dashboard</h1>
            </div>
        </div>
    </header>
    <section class="actions">
            <div class="action_menu">
                <h1>Actions List</h1>
                <ul>
                    <li><a href="javascript:void(0);" class="action" data-section="home">Home</a></li>
                    <li><a href="javascript:void(0);" class="action" data-section="Add_Renteal">Add Course</a></li>
                    <li><a href="javascript:void(0);" class="action" data-section="Remove_Rental">Remove Course</a></li>
                    <li><a href="javascript:void(0);" class="action" data-section="Remove_Car">Add File</a></li>
                    <li><a href="javascript:void(0);" class="action" data-section="Add_User">Remove File</a></li>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <input type="submit" value="Logout" class="logout" name="submit" id="submit" style="cursor: pointer;">
                    </form>
                </ul>
            </div>
            <div class="container">
                <div class="action_information">
                    <div class="step home">
                        <h1>Welcome {{$username}}</h1>
                        <h3 style="text-align: right;">لا تقم بالاضافة او الحذف قبل قراءة التعليمات جيدا</h3>
                        <ul style="text-align: right; list-style: none;" class="instructions">
                            <li>لا تقم باعطاء بياناتك لاحد فانت المسؤول اذا تم التلاعب ببيانات الموقع</li>
                            <li>بعد عملية الاضافة او الحذف لن يظهر الشيء المضاف الا بعد موافقة ادارة الموقع عليه</li>
                            <li>يمنع اضافة اي شيء خارج اطار الجامعة</li>
                            <li>يفضل الدخول لهذه الصفحة من خلال الديسكتوب او اللابتوب</li>
                            <li>لا تقم باستخدام اللغة الانجليزية في اضافة اي شيء</li>
                            <li>قبل رفع الملفات تأكد من وجود المادة الاساسية لهن واذا لم تكن موجودة قم باضافتها ثم ارفع ملفاتها</li>
                            <li>قبل رفع اي ملف تاكد من رفعك له على الدرايف ومن بعدها انسخ رابطه وقم باضافته</li>
                            <li>تجنب قدر الامكان عمليات الحذف سواء كانت للمواد او الملفات <strong>تأكد من البيانات المدخلة قبل اتمام عملية الادخال</strong></li>
                            <li>لا تقم بادخال البيانات في حال لم تفهم الية العمل <strong>تواصل معنا لارشادك</strong></li>
                            <li><strong>كل مادة او ملف ترفعوه يظهر لادمن الموقع من قام برفعه</strong></li>
                        </ul>
                    </div>
                    <div class="step Add_Renteal">
                        <h2>Add Course</h2>
                        <form action="{{route('addcourse')}}" method="POST">
                            @csrf
                            <input type="text" name="CourseName" id="CourseName" placeholder="Course Name" required>
                            <select id="majors" name="majors" style="width: 42%; padding: 12px; outline: none;" required>
                                <option value="Select Major">Select Major</option>
                                @foreach ($majors as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="Add Course" name="addcourse" id="addcourse" class="addrentalB">
                        </form>
                    </div>
                    <div class="step Remove_Rental">
                        <h2>Delete Course</h2>
                        <form action="{{route('deletecourse')}}" method="POST">
                            @csrf
                            <label for="">Select The Course Do You Want To Delete:</label>
                            <select id="courses" name="courses" style="width: 42%; padding: 12px; outline: none; margin-bottom: 10px;" required>
                                <option value="Select Course">Select Course</option>  
                                @foreach ($courses as $course)
                                <option value="{{$course->name}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                            <input type="submit" onclick="return confirm('are you sure?')" value="Delete" name="Delete_course" id="Delete_course" class="addrentalB">
                        </form>
                    </div>
                    <div class="step Remove_Car">
                        <h2>Add File</h2>
                        <form action="{{route('addfile')}}" method ="POST">
                            @csrf
                            <input type="text" name="FileName" id="FileName" placeholder="File Name" required>
                            <input type="text" name="path" id="path" placeholder="File Path" required>
                            <select id="courses" name="courses" style="width: 42%; padding: 12px; outline: none;" required>
                                <option value="Select course">Select course</option>
                                @foreach ($courses as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="Add File" name="addcourse" id="addcourse" class="addrentalB">
                        </form>
                    </div>
                    <div class="step Add_User">
                        <h2>Remove File</h2>
                        <form action="{{route('deletefile')}}" method="post">
                            @csrf
                            <select id="files" name="files" style="width: 42%; padding: 12px; outline: none;" required>
                                <option value="Select course">Select File</option>
                                @foreach ($files as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <input type="submit" onclick="return confirm('are you sure?')" value="Delete" name="DeleteCourseFiles" id="DeleteCourseFiles" class="addrentalB">
                        </form>
                    </div>
                </div>
            </div>
    </section>
    <script>
        $('a.action').on('click', function(){
            var sectionClass = $(this).data('section');
            $(this).parents('.actions').find('.step').hide();
            $('.step.'+sectionClass).fadeIn(1000);
        });
    </script>
</body>
</html>