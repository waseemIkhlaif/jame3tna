<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
    <!-- Font Awesome Library-->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <!-- Goole Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <div>
                <h1 class="tittle">Admin Dashboard</h1>
            </div>
        </div>
    </header>
    <section class="actions">
            <div class="action_menu">
                <h1>Actions List</h1>
                <ul>
                    <li><a href="javascript:void(0);" class="action" data-section="home">Course Orders</a></li>
                    <li><a href="javascript:void(0);" class="action" data-section="Add_Renteal">File Orders</a></li>
                    {{-- <li><a href="javascript:void(0);" class="action" data-section="Remove_Rental">Remove Course</a></li>
                    <li><a href="javascript:void(0);" class="action" data-section="Remove_Car">Add File</a></li>
                    <li><a href="javascript:void(0);" class="action" data-section="Add_User">Remove File</a></li> --}}
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <input type="submit" value="Logout" class="logout" name="submit" id="submit" style="cursor: pointer;">
                    </form>
                </ul>
            </div>
            <div class="container">
                <div class="action_information">
                    <div class="step home" style="display: flex;flex-wrap: wrap;margin-top: 20px;">
                        @foreach ($courses as $item)
                            @foreach ($majors as $major)
                                @if ($item->major_id == $major->id)
                                    <div class="orders">
                                        <strong>Username: {{$item->username}}</strong>
                                        <h5>Order Id: {{$item->id}}</h5>
                                        <h5>Course Name: {{$item->name}}</h5>
                                        <p>Collage ID: {{$item->collage_id}}</p>
                                        <p>Major Name: {{$major->name}}</p>
                                        <form action="/movetocourses/{{$item->id}}" style="width: 100%" method="post">
                                            @csrf
                                            <input class="adminAction" type="submit" value="Accept">
                                        </form>
                                        <form action="/deleteorder/{{$item->id}}" style="width: 100%" method="post">
                                            @csrf
                                            <input class="adminAction" type="submit" value="Delete">
                                        </form>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                    <div class="step Add_Renteal">
                        <div style="display: flex;flex-wrap: wrap;margin-top: 20px;">
                            @foreach ($files as $item)
                            @foreach ($courseName as $course)
                                @if ($item->course_id == $course->id)
                                    <div class="orders">
                                        <strong>Username: {{$item->username}}</strong>
                                        <h5>Order Id: {{$item->id}}</h5>
                                        <h5>File Name: {{$item->name}}</h5>
                                        <p>Course Name: {{$course->name}}</p>
                                        <form method="post" action="/acceptfile/{{$item->id}}" style="width: 100%">
                                            @csrf
                                            <input class="adminAction" type="submit" value="Accept">
                                        </form>
                                        <form method="post" action="/deletefileorder/{{$item->id}}" style="width: 100%">
                                            @csrf
                                            <input class="adminAction" type="submit" value="Delete">
                                        </form>
                                    </div>
                                @endif
                            @endforeach
                        @endforeach
                        </div>
                    </div>
                    {{--  <div class="step Remove_Rental">
                        <h2>Delete Course</h2>
                        <form action="{{route('deletecourse')}}" method="POST">
                            @csrf
                            <label for="">Select The Course Do You Want To Delete:</label>
                            <select id="courses" name="courses" style="width: 42%; padding: 12px; outline: none; margin-bottom: 10px;">
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
                            <input type="text" name="FileName" id="FileName" placeholder="File Name">
                            <input type="text" name="path" id="path" placeholder="File Path">
                            <select id="courses" name="courses" style="width: 42%; padding: 12px; outline: none;">
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
                        <form action="">
                            <input type="text" name="Username" id="Username" placeholder="Username">
                            <input type="text" name="email" id="email" placeholder="Email">
                            <input type="password" name="pass" id="pass" placeholder="Password">
                            <input type="submit" name="Add_user" id="Add_user" class="addrentalB">
                        </form>
                    </div> --}}
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