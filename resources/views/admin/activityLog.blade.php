@extends('admin.header')

@section('title', 'activity log')

@section('content')
    
<div class="cctivity">
                    @section('subtitle', 'activity Log')

                   <table class="table table-striped">
                       <thead>
                         <tr>
                           <th scope="col">Date</th>
                           <th scope="col">Activity</th>
                           <th scope="col">IP</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                            <td>01/01/2020</td>
                           <td>Employee #31 updated by Admin on date 10/30/2020</td>
                           <td>171.38.32.58</td>
                         </tr>
                         <tr>
                            <td>01/01/2020</td>
                            <td>Employee #31 updated by Admin on date 10/30/2020</td>
                            <td>171.38.32.58</td>
                          </tr>
                          <tr>
                            <td>01/01/2020</td>
                            <td>Employee #31 updated by Admin on date 10/30/2020</td>
                            <td>171.38.32.58</td>
                          </tr>
                          <tr>
                            <td>01/01/2020</td>
                            <td>Employee #31 updated by Admin on date 10/30/2020</td>
                            <td>171.38.32.58</td>
                          </tr>
                          <tr>
                            <td>01/01/2020</td>
                            <td>Employee #31 updated by Admin on date 10/30/2020</td>
                            <td>171.38.32.58</td>
                          </tr>
                       </tbody>
                   </table>
                </div>
               


@endsection