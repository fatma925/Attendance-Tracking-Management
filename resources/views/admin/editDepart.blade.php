@extends('admin.header')

@section('title', 'edit department')

@section('content')

@section('subtitle', 'edit department')

<div class="add-depart">
                    <form action="/updateDepart/{{$id}}" method="GET">
                        @csrf
                        <div class="center">
                            <label>Department</label>
                            <input type="text" class="input" name="depart" placeholder={{$name}} required><br>
                            <label>Head Id</Head></label>
                            <input type="number" class="input" name="headid" placeholder={{$head_id}} required>
                        </div>
                        <hr class="hr">
                        <div class="center"><button class="save">Save</button></div>
                    </form>
                </div>

@endsection