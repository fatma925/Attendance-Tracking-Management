@extends('admin.header')

@section('title', 'edit leave')

@section('content')
@section('subtitle', 'edit leave')

<div class="add-leave">
                    <form action="/updateLeave/{{$id}}" method="POST">
                        @csrf
                        <label>Employee</label>
                        <input type="text" class="input" placeholder="{{$name}}" name="emp" value='{{$name}}' required><br>
                        <label>Leave Type</label>
                        <input type="text" class="input" value="{{$type}}" name="type" required><br>
                        <label>From</label>
                        <input type="time" class="input" value="{{$timefrom}}" name="timefrom" required><br>
                        <label>To</label>
                        <input type="time" class="input" value="{{$timeto}}" name="timeto" required><br>
                        <label>Comment</label>
                        <input type="text" class="input" value="{{$comment}}" name="comment" required><br>
                        <label>Leave Status</label>
                        <select class="input" name="status" required>
                            <option value="Approved">Approved</option>
                            <option value="Pending">Pending</option>
                            <option value="Denied">Denied</option>
                        </select>
                        <hr class="hr">
                        <button class="save">Save</button>
                    </form>
                </div>
@endsection