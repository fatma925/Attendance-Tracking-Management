@extends('admin.header')

@section('title', 'manage quite')

@section('content')

<div class="emp">
                    
                    <span class="show">
                        <label>show</label>
                        <input type="number" min="1" max="100" class="input">
                        <label>entries</label>
                    </span>
                    <span class="search">
                       <label>search</label>
                       <input type="text" min="1" max="100" class="input">
                   </span><br><br>
                   <div class="scroll">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Quite</th>
                            <th scope="col">Person</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if(!empty($data[0]))
                          @foreach($data as $Q)
                          <tr>
                            <th scope="row">{{$Q->id}}</th>
                            <td>{{$Q->quote}}</td>
                            <td>{{$Q->person}}</td>
                            <td>
                                 <button class="edit">
                                     <i class="fa fa-edit"></i>
            <a href="/editQuote/{{$Q->id}}/{{$Q->quote}}/{{$Q->person}}">Edit</a>
                                 </button>
                                 <button class="delete">
                                     <i class="fa fa-close"></i>
                   <a href="/deleteQuote/{{$Q->id}}">Delete</a> </button>
                                 </button>
                            </td>
                          </tr>
                          @endforeach
                          @endif
                        </tbody>
                    </table>
                   </div>
                </div>

@endsection