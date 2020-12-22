@extends('admin.header')

@section('title', 'activity log')

@section('content')

@section('subtitle', 'add Deoartment')

                 <div class="add-depart">
                    <form action="addDep" method="GET">
                       
                        <div class="center">
                            <label>Department</label>
                            <input type="text" class="input" name="depart" required><br>
                            <label>Head Id</Head></label>
                            <input type="number" class="input" name="head" required>
                        </div>
                        <hr class="hr">
                        <div class="center"><button class="save">Save</button></div>
                    </form>
                </div>
               

@endsection