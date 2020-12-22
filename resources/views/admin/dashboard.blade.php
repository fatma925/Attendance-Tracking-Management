@extends('admin.header')

@section('title', 'activity log')

@section('content')

@section('subtitle', 'dashboard')
                <div class="row">
                    <div class="col col-lg-3 col-6">
                        <div class="box">
                            <span>{{$empcount}}</span>
                            <i class="fa fa-group" style="color:green;"></i>
                            <p>total employees</p>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-6">
                        <div class="box">
                            <span>{{$departcount}}</span>
                            <i class="fa fa-th" style="color:rgb(240, 237, 75);"></i>
                            <p>Total Departments</p>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-6">
                        <div class="box">
                            <span>{{$presentcount}}</span>
                            <i class="fa fa-user" style="color:blue;"></i>
                            <p>Present Today</p>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-6">
                        <div class="box">
                            <span>{{$onleavecount}}</span>
                            <i class="fa fa-group" style="color:rgb(70, 16, 172);"></i>
                            <p>On Leave Today</p>
                        </div>
                    </div>
                    <div class="col col-lg-9">
                        <div class=" box lg-box">
                            <div class="sucess">

                                <p>{{$quote->quote}}</p>
                                <div>{{$quote->person}}</div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="col col-lg-3">
                        <div class="activity-log box">
                            <h5>Activity Log</h5>
                            <hr>
                            <div class="activity">
                                Employee #33 updated by Admin on date 10/30/2020
                            </div>
                            <div class="activity">
                                Employee #31 updated by Admin on date 10/30/2020
                            </div>
                            <div class="activity">
                                Employee #33 added by Admin on date 10/30/2020
                            </div>
                            <button class="more">View all actvity log</button>
                            <br>
                        </div>
                    </div>
                </div>
            </div>


            @endsection