@extends('employee.header')

@section('title', 'User Profile')

@section('subtitle', 'User Profile')

@section('content')
<div class="hr"></div>
                        <div class="profile">
                           <form action="update" method="POST" enctype="multipart/form-data">
                           {{ csrf_field() }}
                               <div class="center">
                                   <label class="user-color">Profile Picture</label>
                                   <div class="file input">
                                       <span id="src">Select Picture</span>
                                       <input type="file" id="fileImg" name='pic'>
                                   </div>
                                   <!-- user picture -->
                                   <div class="img">
                                       <img src="" class="profile-img" id="profile-img">
                                   </div>
                                   <label>Template</label>
                                   <select name="template" class="colors input">
                                       <option value="rgb(148, 12, 12)">Template1</option>
                                       <option value=" rgb(13, 124, 41)">Template2</option>
                                       <option value="rgb(15, 15, 95)">Template3</option>
                                       <option value="black">Template4</option>
                                   </select><br>
                                   <label>Language</label>
                                   <select name="lang" class=" input">
                                       <option value="en">English</option>
                                       <option value="arb">Arabic</option>
                                   </select>
                               </div><div class="hr"></div>
                               <div class="center"><button class="save">Save</button></div>
                           </form>
                       </div>
                      </div>
@endsection