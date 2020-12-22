<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    
    <script src="../scripts/jquery.min.js"></script>
</head>

<body>    <div class="parent">
        <nav>
            <span class="menu"><i class="fa fa-th"></i></span>
            <select name="lang">
                <option value="en">English</option>
                <option value="arb">Arabic</option>
            </select>
            <img src="{{ asset('images/'.$pic) }}" class="profile-img">
            <select id="link">
                <!-- employee name -->
                <option value="profile">{{$name}}</option>
                <option value="profile">Profile</option>
                <option value="changePass">Change Password</option>
                <option value="logout">Logout</option>
            </select>

        </nav>
        <div class="child">
            <aside>
                <div class="logo">
                    <h1>Tra<span class="h1">ckig</span></h1>
                </div>
                <div class="wel">
                    <div class="row">
                        <div class="col col-4">
                            <img src="{{ asset('images/'.$pic) }}" class="profile-img">
                        </div>
                        <div class="col col-8">
                            <h6 class="welcome">Welcome</h6>
                            <!-- employee name -->
                            <h6>{{$name}}</h6>
                        </div>
                    </div>
                </div>
                <div class="pages">
                    <div>
                        <p class="active">
                            <i class="fa fa-dashboard"></i>
                            <a href="empdashboard">Dashboard</a>
                            <side></side>
                        </p>
                    </div>
                    @if($groub == 2)
                    <div>
                        <p>
                            <i class="fa fa-users" style="color: yellow;"></i>
                            <a href="empdep">Employee</a>
                            <side></side>
                        </p>
                    </div>
                    @endif
                    <div>
                        <p>
                            <i class="fa fa-minus-square"></i>
                            <a href="attendance">Attendance</a>
                            <side></side>
                        </p>
                    </div>
                    <div>
                        <p>
                            <i class="fa fa-hotel"></i>
                            <span>Leave</span>
                            <next class="fa fa-angle-down"></next>
                            <side></side>
                        </p>
                        <span class="links">
                            <a href="applyleave">Apply Leave</a>
                            <a href="leave">Leave</a>
                        </span>
                    </div>

                    <div>
                        <p>
                            <i class="fa fa-plane"></i>
                            <a href="holiday">Holiday</a>
                            <side></side>
                        </p>
                    </div>
                    <div>
                        <p id="logout">
                            <i class="fa fa-sign-out"></i>
                            <span><a href="/">Logout</a></span>
                            <side></side>
                        </p>
                    </div>
                </div>
            </aside>
        </div>

<div class="child">
<div class="content">
<h6>@yield('subtitle')</h6><hr>

@yield('content')


</div>
    </div>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/propper.js')}}"></script>
  
     <script src="{{asset('js/js2.js')}}"></script>
</body>

</html>