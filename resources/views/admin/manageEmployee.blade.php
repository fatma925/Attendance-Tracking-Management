@extends('admin.header')

@section('title', 'manage employee')

@section('content')

@section('subtitle', 'manage employee')

<div class="manage-emp">
                    <!--<h5>Manage Employee</h5>
                    <hr>-->
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
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Department</th>
                            <th scope="col">address</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if(!empty($data[0]))
                          @foreach($data as $emp)
                          <tr>
                            <th scope="row">{{$emp->id}}</th>
                            <td>
                @if($emp->attstatus == "active" && $emp->date == $date2)
                <i class="fa fa-circle" style="color: green"></i>
                @endif
                                {{$emp->name}}</td>
                            <td>{{$emp->email}}</td>
                            <td>{{$emp->depart}}</td>
                            <td>{{$emp->address}}</td>
                            <td>{{$emp->approving}}
                <!--@if($emp->attstatus == "present" && $emp->date == $date2)-->
                                 <button class="status">
                                     <i class="fa fa-check-square-o"></i>
                                 </button>
                                 <!--@endif-->
                                

                            </td>
                            <th>
                                <button class="details">
                                    <i class="fa fa-eye"></i>
            <a href="/employeeDetails/{{$emp->id}}" style="color: white;">view details</a>
                                 </button>
                                 <button class="edit">
                                     <i class="fa fa-edit"></i>
        <a href="/editEmployee/{{$emp->id}}/{{$emp->name}}/{{$emp->email}}/{{$emp->address}}/{{$emp->depart}}/{{$emp->status}}/" style="color: white;">Edit</a>
                                 </button>
                                 <button class="delete">
                                     <i class="fa fa-close"></i>
                    <a href="/deleteEmployee/{{$emp->id}}" style="color: white;">delete</a>
                                 </button>
                            </th>
                          </tr>
                          <tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                   </div>
                </div>

@endsection