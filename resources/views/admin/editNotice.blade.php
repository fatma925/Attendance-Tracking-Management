@extends('admin.header')

@section('title', 'edit notice')

@section('content')
@section('title', 'edit notice')

<div class="profile">
                        <form action="/updateNotice/{{$id}}" method="POST">
                            @csrf
                            <div class="center">
                                <label>Title</label>
                                <input type="text" class="input" name="title" placeholder="{{$title}}" required>
                                <label id="descLbl">Description</label>
                                <textarea class="input"
                                    placeholder="{{$description}}" name="description" required></textarea>

                            </div>
                            <hr class="hr">
                            <div class="center"><button class="save">Save</button></div>
                        </form>
                    </div>

@endsection