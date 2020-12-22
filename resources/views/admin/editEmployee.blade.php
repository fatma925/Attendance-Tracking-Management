@extends('admin.header')

@section('title', 'edit employee')

@section('content')
@section('subtitle', 'edit employee')

<div class="add-emp">
                    <form action="/updateEmployee/{{$id}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col col-xl-6">
                                <h6>Personal Details</h6>
                                <hr>
                                <label>Name</label>
                                <div class="input">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="name" value="{{$name}}" required>
                                </div><br>
                                @error ('user')<span style="color: red;margin-left: 100px;"> {{$message}}</span> <br>@enderror
                                
                                <label>Birth Date</label>
                                <div class="input">
                                    <input type="date" name="date" class="date" value='{{$BOD}}' required>
                                </div><br>
                                @error ('BOD')<span style="color: red;margin-left: 100px;"> {{$message}}</span> <br>@enderror

                                <label>Gender</label>
                                <select name="gender" class="input" required>
                                    <option>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select><br>
                                <label>department</label>
                                <div class="input">
                                    <i class="fa fa-user"></i>
                                    <input type="text" name="depart" placeholder="{{$depart}}" required>
                                </div><br>
                                <label>Phone</label>
                                <div class="input">
                                    <i class="fa fa-phone"></i>
                                    <input type="number" name="phone" value="{{$phone}}" required>
                                </div><br>
                                @error ('phone')<span style="color: red;margin-left: 100px;"> {{$message}}</span> <br>@enderror
                                <label>Address</label>
                                <div class="input">
                                    <i class="fa fa-home"></i>
                                    <input type="text" name="address" value="{{$address}}" required>
                                </div><br>
                                </div>

                                <!--<div class="input">
                                    <i class="fa fa-home"></i>
                                    <input type="text" name="address" value="{{$approving}}" required>
                                </div><br>-->
                            
                            <div class="col col-xl-6">
                                <h6>Account Login</h6>
                                <hr>
                                <label>Email</label>
                                <div class="input">
                                    <i class="fa fa-envelope"></i>
                                    <input type="text" name="email" value="{{$email}}" required>
                                </div><br>
                                @error ('email')<span style="color: red;margin-left: 100px;"> {{$message}}</span> <br>@enderror
                                <label>Password</label>
                                <div class="input">
                                    <i class="fa fa-key"></i>
                                    <input type="password" name="pass" required>
                                </div><br>
                                @error ('pass')<span style="color: red;margin-left: 100px;"> {{$message}}</span> <br>@enderror
                                <label>approving</label>

                                <select class="input" name="status" value="{{$approving}}" required>
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
                        </div>
                        <div class="center"><button class="save">Save</button></div>
                    </form>
                </div>

@endsection