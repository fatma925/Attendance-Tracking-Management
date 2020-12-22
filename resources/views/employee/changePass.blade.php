@extends('employee.header')

@section('title', 'User Profile')

@section('subtitle', 'Change Password')

@section('content')
            <div class="hr"></div>
                 <div class="pass">
                    <form action="changePassemp" method="POST">
                    @csrf
                        <div class="center">
                            <label>Old Password</label>
                            <input type="password" name="old" class="input">
                            <label>New Password</label>
                            <input type="password" name="new" class="input">
                        </div>   
                        <div class="hr"></div>
                        <div class="center"><button class="save">Save</button></div>
                    </form>
                </div>
            </div>
@endsection
