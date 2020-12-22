@extends('admin.header')

@section('title', 'activity log')

@section('content')

@section('subtitle', 'change password')

<div class="pass">
                    <form action="changePass" method="POST">
                        @csrf
                        <div class="center">
                            <label>Old Password</label>
                            <input type="password" name="old" class="input">
                            <label>New Password</label>
                            <input type="password" name="new" class="input">
                        </div>   
                        <hr class="hr">
                        <div class="center"><button class="save">Save</button></div>
                    </form>
                </div>

@endsection