@extends('employee.header')

@section('title', 'Apply Leave')

@section('subtitle', 'Apply Leave')

@section('content')
                <div class="hr"></div>
                 <div class="add-leave">
                    <form action="" method="POST">
                        @csrf
                        <div class="center">
                            <label>Employee</label>
                            <input type="text" class="input" name="name"><br>
                            <label>Leave Type</label>
                            <input type="text" class="input" name="type"><br>
                            <label>From</label>
                            <input type="time" class="input" name="from"><br>
                            <label>To</label>
                            <input type="time" class="input" name="to"><br>
                            <label>Comment</label>
                            <input type="text" class="input" name="comment"><br>
                        </div>
                        <div class="hr"></div>
                        <div class="center">
                            <button class="save">Save</button>
                        </div>
                    </form>
                </div>
               </div>
@endsection