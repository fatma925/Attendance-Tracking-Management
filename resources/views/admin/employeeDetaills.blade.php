@extends('admin.header')

@section('title', 'employee Details')

@section('content')
@section('subtitle', 'employee Details')

<div class="emp-details">
                    <div class="row">
                        <div class="col col-sm-4 col-12">
                            <section>
                                <!-- Name -->
                                
                                <h6>{{$data[0]->name}}</h6>
                                <div class="img">
                                    <img src="{{$data[0]->img}}" class="profile-img">
                                </div>
                                <!-- phone -->
                                <p>
                                    <i class="fa fa-phone" style="color: green;"></i>
                                    <label>Ph:</label>
                                    <span>{{$data[0]->phone}}</span>
                                </p>
                                <!-- email -->
                                <p>
                                    <i class="fa fa-envelope" style="color: blue;"></i>
                                    <label>Email:</label>
                                    <span>{{$data[0]->email}}</span>
                                </p>
                            </section>
                        </div>
                        <div class="col col-sm-8 col-12">
                            <h6>Personal Details</h6><hr>
                            <table class="table table-striped">
                                <tbody>
                                     <tr>
                                         <td>Name</td>
                                         <th>{{$data[0]->name}}</th>
                                     </tr>
                                     <tr>
                                         <td>Email</td>
                                         <th>{{$data[0]->email}}</th>
                                     </tr>
                                     <tr>
                                         <td>Birth Date</td>
                                         <th>{{$data[0]->BOD}}</th>
                                     </tr>
                                     <tr>
                                         <td>Gender</td>
                                         <th>{{$data[0]->gender}}</th>
                                     </tr>
                                     <tr>
                                         <td>Phone</td>
                                         <th>{{$data[0]->phone}}</th>
                                     </tr>
                                     <tr>
                                         <td>Address</td>
                                         <th>{{$data[0]->address}}</th>
                                     </tr>
                                     <tr>
                                         <td>Marital Status</td>
                                         <th>{{$data[0]->status}}</th>
                                     </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                   
                </div>
@endsection