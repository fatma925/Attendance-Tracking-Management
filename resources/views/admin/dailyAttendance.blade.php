@extends('admin.header')

@section('title', 'daily attendance')

@section('content')
@section('subtitle', 'daily attendance')

<form action="dailyAttend" method="POST">
  @csrf
<div class="row">
                        <div class="col col-lg-4 col-sm-6 col-12">
                            <label>Employees by Departments</label><br>
                            <select class="input" name="dep">
                                <option value="all">All</option>
                                <option value="se">SE</option>
                                <option value="it">IT</option>
                                <option value="cs">CS</option>
                            </select>
                        </div>
                        <div class="col col-lg-4 col-sm-6 col-12">
                            <label>Date</label><br>
                            <input type="date" class="input" name="date">
                        </div>
                        <div class="col col-lg-4 col-sm-6 col-12">
                            <br><button class="save" >Get Employees' List</button>
                        </div>
                    </div><!--onclick="Show(this, document.getElementById('emp-list'), 'Get Employee List', 'Hide Employee List');"id="emp-list"-->
                    </form>
                 </div>

                 <div class="content" >
                    
                    <br><br>
                   <div class="scroll">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Employee</th>
                            
                            <th scope="col">Date</th>
                            <th scope="col">in Time</th>
                            <th scope="col">out Time</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $att)
                          <tr>
                              <td>{{$att->emp_id}}</td>
                              <td>{{$att->name}}</td>
                              
                              <td>{{$att->date}}</td>
                              <td><span class="time">{{$att->in_time}}</span></td>
                              <td><span class="time">{{$att->out_time}}</span></td>
                              <td>{{$att->status}}
                                 <!-- <select class="input">
                                      <option value="present">Present</option>
                                      <option value="absent">Absent</option>
                                      <option value="onleave">On Leave</option>
                                  </select>-->
                              </td>
                          </tr>
                          @endforeach
                          
                        </tbody>
                    </table>
                   </div>
                </div>

@endsection