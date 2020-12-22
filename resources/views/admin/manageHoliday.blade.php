@extends('admin.header')

@section('title', 'manage Holiday')

@section('content')

<div class="holiday">
                    <!--<h5>Manage Holiday</h5><hr>-->
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
                           <th scope="col">Actions</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                            <td>01/01/2020</td>
                           <td>New Year Day</td>
                           <td>
                                <button class="edit">
                                    <i class="fa fa-edit"></i>
                                    Edit
                                </button>
                                <button class="delete">
                                    <i class="fa fa-close"></i>
                                    Delete
                                </button>
                           </td>
                         </tr>
                         <tr>
                            <td>01/01/2020</td>
                            <td>New Year Day</td>
                            <td>
                                 <button class="edit">
                                     <i class="fa fa-edit"></i>
                                     Edit
                                 </button>
                                 <button class="delete">
                                     <i class="fa fa-close"></i>
                                     Delete
                                 </button>
                            </td>
                          </tr>
                          <tr>
                            <td>01/01/2020</td>
                            <td>New Year Day</td>
                            <td>
                                 <button class="edit">
                                     <i class="fa fa-edit"></i>
                                     Edit
                                 </button>
                                 <button class="delete">
                                     <i class="fa fa-close"></i>
                                     Delete
                                 </button>
                            </td>
                          </tr>
                          <tr>
                            <td>01/01/2020</td>
                            <td>New Year Day</td>
                            <td>
                                 <button class="edit">
                                     <i class="fa fa-edit"></i>
                                     Edit
                                 </button>
                                 <button class="delete">
                                     <i class="fa fa-close"></i>
                                     Delete
                                 </button>
                            </td>
                          </tr>
                          <tr>
                            <td>01/01/2020</td>
                            <td>New Year Day</td>
                            <td>
                                 <button class="edit">
                                     <i class="fa fa-edit"></i>
                                     Edit
                                 </button>
                                 <button class="delete">
                                     <i class="fa fa-close"></i>
                                     Delete
                                 </button>
                            </td>
                          </tr>
                          <tr>
                            <td>01/01/2020</td>
                            <td>New Year Day</td>
                            <td>
                                 <button class="edit">
                                     <i class="fa fa-edit"></i>
                                     Edit
                                 </button>
                                 <button class="delete">
                                     <i class="fa fa-close"></i>
                                     Delete
                                 </button>
                            </td>
                          </tr>
                       </tbody>
                   </table>
                </div>
               </div>

@endsection