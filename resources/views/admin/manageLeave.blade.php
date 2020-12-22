@extends('admin.header')

@section('title', 'manage leave')

@section('content')
@section('subtitle', 'manage leave')

<div class="manage-emp">
                    <!--<h5>Manage Leave</h5><hr>-->
                    <br>
                   <div class="scroll">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Employee Name</th>
                            <th scope="col">Leave Type</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Leave Status</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if(!empty($data[0]))
                            @foreach($data as $leave)
                          <tr>
                            <th scope="row">{{$leave->id}}</th>
                            <td>{{$leave->name}}</td>
                            <td>{{$leave->type}}</td>
                            <td>{{$leave->timefrom}} To {{$leave->timeto}} </td>
                            <td><span class="pending">{{$leave->status}}</span></td>
                            <td>{{$leave->comment}}</td>
                            <td>
                              @if($leave->status == 'Pending')
                                 <button class="edit">
                                     <i class="fa fa-edit"></i>
                                    
        <a href="/editLeave/{{$leave->id}}/{{$leave->name}}/{{$leave->type}}/{{$leave->timefrom}}/{{$leave->timeto}}/{{$leave->status}}/{{$leave->comment}}">Edit</a>                         </button>
        @endif
                                <!-- <button class="delete">
                                     <i class="fa fa-close"></i>
                                     Delete
                                 </button>-->
                            </td>
                          </tr>
                          @endforeach
                          @endif
                        </tbody>
                    </table>
                   </div>
                </div>

@endsection