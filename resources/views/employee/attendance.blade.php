@extends('employee.header')

@section('title', 'Attendance Report')

@section('subtitle', 'attendance')

@section('content')
                    <hr>
                    <form action="attendance" method='POST'>
                        @csrf
                        <div class="row">
                            <div class="col col-lg-4 col-sm-6 col-12">
                                <label>Year</label>
                                <input type="text" class="input" name='year'/><br>
                            </div>
                            <div class="col col-lg-4 col-sm-6 col-12">
                                <label>Month</label>
                                <input type="text" class="input" name='month'/><br>
                            </div>
                            <div class="col col-lg-4 col-sm-6 col-12">
                                <br><button type='submit' class="save" id="show-report" > Show Report </button>
                            </div>
                        </div>
                    </form>
                 </div>
                 <div class="content">
                 <div class="scroll">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Inter Time</th>
                            <th scope="col">Out Time</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($attendance as $a)
                            <tr>
                                <th scope="row">{{date('d/m/Y',strtotime($a->date))}}</th>
                                <td>{{date('h:i:s A',strtotime($a->in_time))}}</td>
                                <td>@if($a->out_time != null)
                                        {{date('h:i:s A',strtotime($a->out_time))}}
                                    @else
                                        --:-- --
                                    @endif
                                </td>
                                <td><span>{{$a->status}}</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   </div>
                 </div>
                </div>
               </div>
           </div>
        </div>
        <!-- <script>
            var select = document.getElementById("month"),
            months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            for (var i = 0; i < months.length; i++) {
                var opt = document.createElement("option");
                opt.value = months[i];
                opt.innerHTML = months[i];
                select.appendChild(opt);
                //select.innerHTML = "<option value='" + months[i] + "'" + months[i] + "</option>";
            }
        </script> -->
@endsection