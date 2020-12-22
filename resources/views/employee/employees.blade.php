@extends('employee.header')

@section('title', 'Employees')

@section('subtitle', 'Employees')

@section('content')
                 <div class="content">
                 <div class="scroll">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Department</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                             @foreach($data as $emp)
                          <tr>
                            <th scope="row">{{$emp->id}}</th>
                            <td>
                @if($emp->attstatus == "active" && $emp->date == $date2)
                <i class="fa fa-circle" style='color: green'></i>
                @endif
                            {{$emp->name}}</td>
                            <td>{{$emp->email}}</td>
                            <td>{{$emp->depart}}</td>
                            <td>{{$emp->address}}</td>
                            <td>{{$emp->approving}}
                                <td><form action="empdetail" method="post">
                                    @csrf
                                    <input type="hidden" id="custId" name="id" value="{{$emp->id}}">
                                    <button class="details" style="color: white; background-color: green">
                                    <i class="fa fa-eye" style="color: black;"></i>&nbsp;view details
                                 </button></form></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   </div>
                 </div>
                </div>
               </div>
           </div>
        </div>
@endsection