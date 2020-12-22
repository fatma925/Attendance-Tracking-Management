@extends('admin.header')

@section('title', 'add employee')

@section('subtitle', 'add employee')

@section('content')

<div class="add-emp">
                    <div class="row">
                        <div class="col col-xl-6">
                            <form action="addemp" method="POST">
                                @csrf
                                <label>Name</label>
                                <div class="input">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="name" required>
                                </div><br>@error ('user')<span style="color: red;margin-left: 100px;"> {{$message}}</span> <br>@enderror

                                <label>Picture</label>
                                <div class="file input">
                                    <i class="fa fa-user"></i>
                                    <span id="src">Select Picture</span>
                                    <input type="file" id="fileImg" name="pic">
                                </div><br>

                                <label>department</label>
                                <div class="input">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="depart" required>
                                </div><br>

                                <label>Birth Date</label>
                                <div class="input">
                                    <input type="date" name="date" class="date" required>
                                </div><br>
                                @error ('BOD')<span style="color: red;margin-left: 100px;"> {{$message}}</span> <br>@enderror
                                <label>Gender</label>

                                <select name="gender" class="input" name="gender">
                                    <!--<option >Select Gender</option>-->
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select><br>

                                <label>Phone</label>
                                <div class="input">
                                    <i class="fa fa-phone"></i>
                                    <input type="number" name="phone" required="">
                                </div><br>
                                @error ('phone')<span style="color: red;margin-left: 100px;"> {{$message}}</span> <br>@enderror
                                <label>Address</label>
                                <div class="input">
                                    <i class="fa fa-home"></i>
                                    <input type="text" name="address" required>
                                </div><br>
                                @error ('address') <span style="color: red;">{{$message}}</span> <br>@enderror
                         </div>     
                                
                        <div class="col col-xl-6">
                            <h6>Account Login</h6>
                            <hr>
                            <label>Email</label>
                            <div class="input">
                                <i class="fa fa-envelope"></i>
                                <input type="text" name="email" required>
                            </div><br>
                            @error ('email') <span style="color: red;margin-left: 100px;">{{$message}} </span><br>@enderror
                            <label>Password</label>
                            <div class="input">
                                <i class="fa fa-key"></i>
                                <input type="password" name="pass" required>
                            </div>
                            <br>
                            @error ('pass') <span style="color: red;margin-left: 100px;">{{$message}} </span><br>@enderror
                            <label>approving</label>

                            <select class="input" name="status" required>
                            <option value="Approved">Approved</option>
                            <option value="Pending">Pending</option>
                            <option value="Denied">Denied</option>
                        </select><br>

                        <label>groubID</label>
                        <select class="input" name="groub" required>
                            <option value="0">employee</option>
                            <option value="1">admin</option>
                            <option value="2">head</option>
                        </select><br>
                        </div>
                       
                        <div class="center"><button class="save">Save</button></div>
                        </form>
                    </div>
                   
                </div>
               </div>

@endsection