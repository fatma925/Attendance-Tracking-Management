@extends('admin.header')

@section('title', 'edit Qiute')

@section('content')
@section('title', 'edit Quite')

<div class="profile">
                        <form action="/updateQuote/{{$id}}" method="POST">
                            @csrf
                            <div class="center">
                                <label>Quote</label>
                                <input type="text" class="input" name="quote" placeholder="{{$quote}}" required>
                                <label>person</label>
                                <input type="text" class="input"
                                    placeholder="{{$person}}" name="person" required>
                            </div>
                            <hr class="hr">
                            <div class="center"><button class="save">Save</button></div>
                        </form>
                    </div>

@endsection