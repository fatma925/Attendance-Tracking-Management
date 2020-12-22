@extends('admin.header')

@section('title', 'manage departs')

@section('content')
@section('subtitle', 'manage departs')

<div class="emp">
                    
                   <div class="scroll">
                    <table class="table table-striped">
                        <thead>
                          
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Department</th>
                            <th scope="col">Head Id</th>
                            
                            <th scope="col">Actions</th>
                          </tr>

                          
                        </thead>
                        <tbody>
                          @foreach($data as $dep)
                          
                          <tr>
                            <th scope="row">{{$dep->id}}</th>
                            <td>{{$dep->name}}</td>
                            <td>{{$dep->head_id}}</td>
                            
                            <td>
                                 <button class="edit">
                                     <i class="fa fa-edit"></i>
          <a href="/editDepart/{{$dep->id}}/{{$dep->name}}/{{$dep->head_id}}" style="color: white">Edit</a>
                                 </button>
                                 <button class="delete">
                                     <i class="fa fa-close"></i>
                            <a href="/deleteDepart/{{$dep->id}}" style="color: white">Delete</a> </button>
                                 </button>
                            </td>
                          </tr>

                          @endforeach
                          
                        </tbody>
                    </table>
                   </div>
                </div>

@endsection