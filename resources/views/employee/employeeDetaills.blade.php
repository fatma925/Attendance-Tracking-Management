@extends('employee.header')

@section('title', 'Employee Details')

@section('subtitle', 'Employee Details')

@section('content')
<div class="emp-details">
                    <div class="row">
                        <div class="col col-sm-4 col-12">
                            <section>
                                <!-- Name -->
                                
                                <h6></h6>
                                <div class="img">
                                    <img src="{{ asset('images/'.$user[0]->img) }}" class="profile-img"
                                    style=" width: 150px;
                                            height: 150px;
                                            padding: 25px;
                                            margin: 12px auto;
                                            border-radius: 10px;
                                            border: 1px solid #ccc;
                                            text-align: center;
                                            width: 150px;
                                            height: 150px;
                                            padding: 25px;
                                            margin: 12px auto;
                                            border-radius: 10px;
                                            border: 1px solid #ccc;
                                            "
                                    >
                                </div>
                                <!-- phone -->
                                <p>
                                    <i class="fa fa-phone" style="color: green;"></i>
                                    <label>Ph: {{$user[0]->phone}}</label>
                                    <span></span>
                                </p>
                                <!-- email -->
                                <p>
                                    <i class="fa fa-envelope" style="color: blue;"></i>
                                    <label>Email: {{$user[0]->email}}</label>
                                    <span></span>
                                </p>
                            </section>
                        </div>
                        <div class="col col-sm-8 col-12">
                            <h6>Personal Details</h6><hr>
                            <table class="table table-striped">
                                <tbody>
                                     <tr>
                                         <td>Name</td>
                                         <th>{{$user[0]->name}}</th>
                                     </tr>
                                     <tr>
                                         <td>Email</td>
                                         <th>{{$user[0]->email}}</th>
                                     </tr>
                                     <tr>
                                         <td>Birth Date</td>
                                         <th>{{$user[0]->BOD}}</th>
                                     </tr>
                                     <tr>
                                         <td>Gender</td>
                                         <th>{{$user[0]->gender}}</th>
                                     </tr>
                                     <tr>
                                         <td>Phone</td>
                                         <th>{{$user[0]->phone}}</th>
                                     </tr>
                                     <tr>
                                         <td>Address</td>
                                         <th>{{$user[0]->address}}</th>
                                     </tr>
                                     <tr>
                                         <td>Marital Status</td>
                                         <th>{{$user[0]->status}}</th>
                                     </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                   
                </div>
@endsection