@extends('admin.header')

@section('title', 'leave type')

@section('content')

@section('subtitle', 'leave type')

<div class="leave">
                  <!--  <h6>Leave Type</h6><hr>-->
                    <span>
                        <label>show</label>
                        <input type="number" min="1" max="100">
                        <label>entries</label>
                    </span>
                    <span class="search">
                       <label>search</label>
                       <input type="text" min="1" max="100">
                   </span><br><br>
                   <table class="table table-striped">
                       <thead>
                         <tr>
                           <th scope="col">#</th>
                           <th scope="col">Leave Type</th>
                           <th scope="col">Actions</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <th scope="row">1</th>
                           <td>Medical</td>
                           <th>
                                <button class="delete">
                                    <i class="fa fa-close"></i>
                                    Delete
                                </button>
                           </th>
                         </tr>
                         <tr>
                            <th scope="row">1</th>
                            <td>Medical</td>
                            <th>
                                 <button class="delete">
                                     <i class="fa fa-close"></i>
                                     Delete
                                 </button>
                            </th>
                          </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Medical</td>
                            <th>
                                 <button class="delete">
                                     <i class="fa fa-close"></i>
                                     Delete
                                 </button>
                            </th>
                          </tr>
                       </tbody>
                   </table>
                </div>

@endsection