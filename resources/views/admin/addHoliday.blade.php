@extends('admin.header')

@section('title', 'activity log')

@section('subtitle', 'add holiday')

@section('content')


                 <div class="add-holiday">
                    <form>
                        <div class="center">
                            <label>Holiday</label>
                            <input type="text" class="input"><br>
                            <label>Date</Head></label>
                            <input type="date" class="input">
                        </div>
                        <hr class="hr">
                        <div class="center"><button class="save">Save</button></div>
                    </form>
                </div>

@endsection