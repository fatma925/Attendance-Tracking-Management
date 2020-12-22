
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="parent">
        <nav>
            <span class="menu"><i class="fa fa-th"></i></span>
            <select name="lang">
                <option value="en">English</option>
                <option value="arb">Arabic</option>
            </select>
            <img src="../imgs/img2.jpg" class="profile-img">
            <select id="link">
                <option value="profile">Admistrator</option>
                <option value="profile">Profile</option>
                <option value="changePass">Change Password</option>
                <option value="logout">Logout</option>
            </select>
        </nav>
        <div class="child">
            <aside>
                <div class="logo">
                    <h1>Tra<span class="h1">cking</span></h1>
                </div>
                <div class="wel">
                    <div class="row">
                        <div class="col col-4">
                            <img src="../imgs/img2.jpg" class="profile-img">
                        </div>
                        <div class="col col-8">
                            <h6>Welcome</h6>
                            <h6>Adminstrator</h6>
                        </div>
                    </div>
                </div>
                <div class="pages">
                    <div>
                        <p>
                            <i class="fa fa-dashboard" style="color: cornflowerblue;"></i>
                            <a href="/dashboard">Dashboard</a>
                            <side></side>
                        </p>
                    </div>
                    <div>
                        <p>
                            <i class="fa fa-th" style="color: rgb(14, 199, 14);"></i>
                            <span>Departments</span>
                            <next class="fa fa-angle-down"></next>
                            <side></side>
                        </p>
                        <span class="links">
                            <a href="/addDepart">Add Department</a>
                            <a href="/manageDeparts">Manage Departments</a>
                        </span>
                    </div>
                    <div>
                        <p>
                            <i class="fa fa-users" style="color: yellow;"></i>
                            <span>Employees</span>
                            <next class="fa fa-angle-down"></next>
                            <side></side>
                        </p>
                        <span class="links">
                            <a href="/addEmployee">Add Employee</a>
                            <a href="/manageEmployee">Manage Employees</a>
                        </span>
                    </div>
                    <div>
                        <p>
                            <i class="fa fa-minus-square" style="color: rgb(96, 227, 245);"></i>
                            <span>Attendance</span>
                            <next class="fa fa-angle-down"></next>
                            <side></side>
                        </p>
                        <span class="links">
                            <a href="/dailyAttendance">Daily Attendance</a>
                            <a href="/attendanceReport">Attendance Report</a>
                        </span>
                    </div>
                    <div>
                        <p>
                            <i class="fa fa-hotel" style="color: blue;"></i>
                            <span>Leave</span>
                            <next class="fa fa-angle-down"></next>
                            <side></side>
                        </p>
                        <span class="links">
                            <a href="/addLeave">Add Leave</a>
                            <a href="/manageLeave">Manage Leave</a>
                        </span>
                    </div>
                    <div>
                        <p>
                            <i class="fa fa-archive" style="color: orangered;"></i>
                            <span>Daily</span>
                            <next class="fa fa-angle-down"></next>
                            <side></side>
                        </p>
                        <span class="links">
                            <a href="/addNotice">Add Notice</a>
                            <a href="/manageNotice">Manage Notice</a>
                            <a href="/addQuite">Add Quote</a>
                            <a href="/manageQuite">Manage Quote</a>
                        </span>
                    </div>
                    <div>
                        <p>
                            <i class="fa fa-plane" style="color: blue;"></i>
                            <span>Holiday</span>
                            <next class="fa fa-angle-down"></next>
                            <side></side>
                        </p>
                        <span class="links">
                            <a href="/addHoliday">Add Holiday</a>
                            <a href="/manageHoliday">Manage Holiday</a>
                        </span>
                    </div>
                    <div>
                        <p>
                            <i class="fa fa-bicycle" style="color: rgb(40, 233, 240);"></i>
                            <a href="/activityLog">Activity Log</a>
                            <side></side>
                        </p>
                    </div>
                    <div>
                        <p id="logout">
                            <i class="fa fa-sign-out" style="color: rgb(14, 199, 14);"></i>
                            <span><a href="/logout">log out</a></span>
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
    <script src="{{asset('js/js.js')}}"></script>
</body>

</html>