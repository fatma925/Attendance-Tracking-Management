@extends('employee.header')

@section('title', 'Dashboard')

@section('subtitle', 'Dashboard')

@section('content')
                <div class="hr first"></div>
                <div class="row">
                    <div class="col col-xl-6 col-12">
                        <br>
                        <div class="box">
                            <h5>Daily Attendance</h5>
                            <div class="hr"></div>
                            <div class="row">
                                <div class="col-6">
<!--                                    <div class="clock">-->
<!--                                        <div class="hand hour"></div>-->
<!--                                        <div class="hand minute"></div>-->
<!--                                        <div class="hand second"></div>-->
<!--                                    </div>-->
                                    <div class="clock">
                                        <div class="hour">
                                            <div class="h" id="h"></div>
                                        </div>
                                        <div class="min">
                                            <div class="m" id="m"></div>
                                        </div>
                                        <div class="sec">
                                            <div class="s" id="s"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <form action="addattendance" method='get'>
                                        @if($isStart)
                                            <button class="start" onclick="startWork(this)">Start Working Today</button>
                                        @else
                                            <button class="start" onclick="startWork(this)">Stop Working Today</button>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="box">
                            <h5>Quote of The Day</h5>
                            
                            <div class="qoute">
                                <p>{{$quotes->quote}}</p>
                                <span>-{{$quotes->person}}</span>
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="col col-xl-6 col-12">
                        <div class="notice-board box">
                            <h5>Notice Board</h5>
                            @foreach($notices as $n)
                                <div class="hr"></div>
                                <!-- for loop on  notice board-->
                                <div class="row">
                                    <div class="col-3">
                                        <div class="date-box">
                                            <!-- notice date -->
                                            <span>{{$n->date}}</span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="notice">
                                            <!-- notice title -->
                                            <h6>{{$n->title}}</h6>
                                            <!-- notice date -->
                                            <span class="red">{{$n->date}}</span>
                                            <span>posted by Admin</span>
                                            <!-- notice description -->
                                            <p>{{$n->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach 
                        </div>
    
                    </div>

                </div>
            </div>
@endsection