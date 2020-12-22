@extends('admin.header')

@section('title', 'activity log')

@section('content')
@section('subtitle', 'add notice')

                        <div class="profile">
                           <form action="addnote" method="POST" >
                            @csrf
                               <div class="center">
                                   <label>Title</label>
                                   <input type="text" class="input" name="title" required>
                                   <label id="descLbl">Description</label>
                                   <input type="text" class="input" id="desc" name="desc" required>
                               </div>
                               <hr class="hr">
                               <div class="center"><button class="save">Save</button></div>
                           </form>
                       </div>

@endsection