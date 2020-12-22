@extends('admin.header')

@section('title', 'activity log')


@section('content')

@section('subtitle', 'add leave')

                 <div class="add-leave">
                    <form action="addLeaveReq" method="POST">
                       @csrf
                        <label>Employee</label>
                        <input type="text" class="input" name="name" required><br>
                        <label>Leave Type</label>
                        <input type="text" class="input" name="type" required><br>
                        <label>From</label>
                        <input type="time" class="input" name="from" required><br>
                        <label>To</label>
                        <input type="time" class="input" name="to" required><br>
                        <label>Day</label>
                        <input type="date" class="input" name="date" required><br>
                        <label>Comment</label>
                        <input type="text" class="input" name="comment" required><br>
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