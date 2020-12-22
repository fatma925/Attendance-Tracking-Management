@extends('employee.header')

@section('title', 'Employee Leave')

@section('subtitle', 'Employee Leave')

@section('content')
<hr>
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
                            <th scope="col">Leave Type</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Leave Status</th>
                            <th scope="col">Comment</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($leaves as $l)
                          <tr>
                            <th scope="row">{{$l->id}}</th>
                            <td>{{$l->type}}</td>
                            <td>{{$l->timefrom}} To {{$l->timeto}} In {{$l->day}} </td>
                            <td><span class="pending">{{$l->status}}</span></td>
                            <td>{{$l->comment}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                   </div>
                </div>
               </div>
@endsection

