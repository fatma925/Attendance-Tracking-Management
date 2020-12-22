@extends('employee.header')

@section('title', 'Holiday')

@section('subtitle', 'Holiday')

@section('content')
<hr>
                    <span class="show">
                        <label>show</label>
                        <input type="number" min="1" max="100" class="input">
                        <label>entries</label>
                    </span>
                    <span class="search">
                       <label>search</label>
                       <input type="text" min="1" max="100" class="input">
                   </span><br><br>
                   <table class="table table-striped">
                       <thead>
                         <tr>
                           <th scope="col">Date</th>
                           <th scope="col">Holiday</th>
                         </tr>
                       </thead>
                       <tbody>
                           <!-- for loop on holiday -->
                            <tr>
                                <td>01/01/2020</td>
                            <td>New Year Day</td>
                            </tr>
                            <!-- for end -->
                            <tr>
                                <td>01/01/2020</td>
                                <td>New Year Day</td>
                                
                            </tr>
                            <tr>
                                <td>01/01/2020</td>
                                <td>New Year Day</td>
                                
                            </tr>
                            <tr>
                                <td>01/01/2020</td>
                                <td>New Year Day</td>
                                
                            </tr>
                            <tr>
                                <td>01/01/2020</td>
                                <td>New Year Day</td>
                                
                            </tr>
                            <tr>
                                <td>01/01/2020</td>
                                <td>New Year Day</td>
                                
                            </tr>
                        </tbody>
                   </table>
@endsection
