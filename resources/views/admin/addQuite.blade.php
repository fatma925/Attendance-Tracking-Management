@extends('admin.header')

@section('title', 'add Quote')

@section('content')

@section('subtitle', 'add Quote')


                        <div class="profile">
                           <form action="addQ" method="POST">
                            @csrf
                               <div class="center">
                                   <label>Quote</label>
                                   <input type="text" class="input" name="quote" required><br>
                                   <label>Person</label>
                                   <input type="text" class="input" name="person" required>
                               </div>
                               <hr class="hr">
                               <div class="center"><button class="save">Save</button></div>
                           </form>
                       </div>

@endsection