<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\isTrue;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $currentUserId;
    
    public function index()
    {
        session_start();
        if(session('user') != null){
            $notice = DB::table('notice')->get();
            $quote = DB::table('quote')->inRandomOrder()->first();
            $user = DB::table('employees')
                            ->where('name',session('user'))
                                ->get('img');
            $picName = $user[0]->img;
            $user = DB::table('employees')
                            ->where('name',session('user'))
                                    ->get('groubID');
            $groub = $user[0]->groubID;
            return view('employee.dashboard',
                [
                    'isStart'=>session('isStart'),
                    'name'=>session('user'),
                    'pic'=>$picName,
                    'groub'=>$groub,
                    'notices'=>$notice,
                    'quotes'=>$quote
                ]
            );
        }else{
            return redirect('/');
        }
        
    }

    public function updateUser(Request $request)
    {
        session_start();
        if(session('user') != null){
            try {
                
                $store_path = 'imgs/';
                $pic_name = $_FILES['pic']['name'];
                $stor_name  = session('user'). '.'.explode('.',$pic_name)[1];
                $stor_tmp = $_FILES['pic']['tmp_name'];
                if(move_uploaded_file($stor_tmp, $store_path . $stor_name)){
                    $user = DB::table('employees')
                                    ->where('name',session('user'))
                                        ->update([
                                                    'img' => $stor_name,
                                                ]);
                    return redirect('emprofile');
                }else{
                    return redirect('emprofile');
                }
            } catch (\Throwable $th) {
                return redirect('emprofile');
            }
        }else{
            return redirect('/');
        }
        
    }

    public function addAttendance()
    {
        session_start();
        if(session('user') != null){

                $date = date("Y-m-d");
                    $data =DB::table('attendance')->where('emp_id','=',session('id'))->where('date','=',$date)->get();
                
                
                    
                    if(session('isStart')){
                        if(empty($data[0])){
                            DB::table('attendance')->insert(
                                [
                                    'emp_id' => session('id'),
                                    'in_time' => now(),
                                    'date' => now(),
                                    'status' => 'active'
                                ]
                            );
                        session()->put('isStart',false);
                        return redirect('empdashboard');
                        }else{return redirect('empdashboard');}
                    }else{
                        echo('out');
                        DB::table('attendance')->where('emp_id', session('id'))->update(
                            [
                                'out_time' => now(),
                                'status' => 'finish'
                            ]
                        );
                        session()->put('isStart',true);
                        return redirect('empdashboard');
                    }
                    
                
            
        }else{
            return redirect('/');
        }

        
    }

    public function attendance()
    {
        session_start();
        if(session('user') != null){
            try {
                $currentUserAttendance = DB::table('attendance')
                                            ->where('emp_id', session('id'))
                                                ->get();
                $user = DB::table('employees')
                    ->where('name',session('user'))
                        ->get('img');
                $picName = $user[0]->img;
                $user = DB::table('employees')
                            ->where('name',session('user'))
                                    ->get('groubID');
                $groub = $user[0]->groubID;
                return view('employee.attendance',
                            [
                                'pic'=>$picName,
                                'groub'=>$groub,
                                'name'=>session('user'),
                                'attendance'=>$currentUserAttendance
                            ]
                        );
            } catch (\Throwable $th) {
                return redirect('empdashboard');
            }
            
        }else{
            return redirect('/');
        }
    }

    public function getAttendance(Request $request)
    {
        session_start();
        if(session('user') != null){
            try {
                $attendance = DB::table('attendance')
                                ->whereMonth('date', $request->month)
                                    ->whereYear('date', $request->year)
                                        ->get();
                $user = DB::table('employees')->where('name',session('user'))->get('img');
                $picName = $user[0]->img;
                $user = DB::table('employees')
                            ->where('name',session('user'))
                                    ->get('groubID');
                $groub = $user[0]->groubID;
    
                return view('employee.attendance',
                            [
                                'pic'=>$picName,
                                'groub'=>$groub,
                                'name'=>session('user'),
                                'attendance'=>$attendance
                            ]
                            );
            } catch (\Throwable $th) {
                return redirect('empdashboard');
            }
            
        }else{
            return redirect('/');
        }
    }

    public function applyLeave()
    {
        session_start();
        if(session('user') != null){
            $user = DB::table('employees')->where('name',session('user'))->get('img');
            $picName = $user[0]->img;
            $user = DB::table('employees')
                        ->where('name',session('user'))
                                ->get('groubID');
            $groub = $user[0]->groubID;

            return view('employee.applyleave',['pic'=>$picName,'groub'=>$groub,'name'=>session('user')]);
        }else{
            return redirect('/');
        }
    }

    public function addLeave(Request $request)
    {
        session_start();
        if(session('user') != null){
            try {
                $leaves = DB::table('leaving')
                            ->insert(
                                        [
                                            'emp_id' => session('id'),
                                            'comment' => $request->comment,
                                            'type'=> $request->type,
                                            'timefrom'=>$request->from,
                                            'timeto'=>$request->to,
                                            'day'=> date('y/m/d',strtotime(now()))
                                        ]
                                    );
                return redirect('applyleave');
            } catch (\Throwable $th) {
                //throw $th;
                return redirect('applyleave');
            }
            
        }else{
            return redirect('/');
        }
    }

    public function leave()
    {
        session_start();
        if(session('user') != null){
            $leaves = DB::table('leaving')->where('emp_id', session('id'))->get();
            $user = DB::table('employees')->where('name',session('user'))->get('img');
            $picName = $user[0]->img;
            $user = DB::table('employees')
                        ->where('name',session('user'))
                                ->get('groubID');
            $groub = $user[0]->groubID;

            return view('employee.leave',['pic' => $picName,'groub'=>$groub,'name'=>session('user'),'leaves'=> $leaves]);
        }else{
            return redirect('/');
        }
    }

    public function holiday()
    {
        session_start();
        if(session('user') != null){
            //
            $user = DB::table('employees')->where('name',session('user'))->get('img');
            $picName = $user[0]->img;
            $user = DB::table('employees')
                        ->where('name',session('user'))
                                ->get('groubID');
            $groub = $user[0]->groubID;

            return view('employee.holiday',['pic' => $picName,'groub'=>$groub,'name'=>session('user')]);
        }else{
           return redirect('/');
        }
    }

    public function profile()
    {
        session_start();
        if(session('user') != null){
            //
            $user = DB::table('employees')->where('name',session('user'))->get();
            $picName = $user[0]->img;
            $user = DB::table('employees')->where('name',session('user'))->get('groubID');
            $groub = $user[0]->groubID;
            return view('employee.profile',['pic' => $picName,'groub'=>$groub,'name'=>session('user')]);
        }else{
            return redirect('/');
        }
    }

    public function changePass()
    {
        session_start();
        if(session('user') != null){
            $user = DB::table('employees')->where('name',session('user'))->get('img');
            $picName = $user[0]->img;
            $user = DB::table('employees')
                        ->where('name',session('user'))
                                ->get('groubID');
            $groub = $user[0]->groubID;
            return view('employee.changePass',['pic' => $picName,'groub'=>$groub,'name'=>session('user')]);
        }else{
            return redirect('/');
        }
    }

    public function changePassword(Request $request)
    {
        session_start();
        if(session('user') != null){
            try {
                $user = DB::table('employees')
                            ->where("name", session('user'))
                                ->get();
                if(password_verify($request->old, $user[0]->pass)){
                    $user = DB::table('employees')
                                    ->where("name", session('user'))
                                        ->update([
                                            'pass' => Hash::make($request->new),
                                        ]);
                    return redirect('empdashboard');
                }else{
                    return redirect('changePassemp');
                }
            } catch (\Throwable $th) {
                return redirect('changePassemp');
            }
            

        }else{
            return redirect('/');
        }
    }

    public function logout()
    {
        session_start();
        if(session('user') != null){
            session()->put('user',null);
            session()->put('id',null);
            session()->put('isStart',true);
            return redirect('/');
        }else{
            return redirect('/');
        }
    }

    public function employeeDetails(Request $request)
    {
        session_start();
        if(session('user') != null){
            $user = DB::table('employees')->where('id', $request->id)->get();
            $muser = DB::table('employees')->where('name',session('user'))->get();
            $picName = $muser[0]->img;
            $muser = DB::table('employees')->where('name',session('user'))->get('groubID');
            $groub = $muser[0]->groubID;
            return view('employee.employeeDetaills',['name'=>session('user'),'pic' => $picName,'groub'=>$groub,'user'=>$user]);
        }else{
            return redirect('/');
        }
    }

    public function getEmployees()
    {
        session_start();
        if(session('user') != null){

        $date2 = date("Y-m-d");
        $data=DB::table('employees')
        ->leftJoin("attendance", 'employees.id', '=', 'attendance.emp_id')
        ->select("employees.*", "attendance.status as attstatus" , "attendance.date")
        //->where('attendance.date', '=', $date2)
        ->get();
        $muser = DB::table('employees')->where('name',session('user'))->get();
        $picName = $muser[0]->img;
        $muser = DB::table('employees')->where('name',session('user'))->get('groubID');
        $groub = $muser[0]->groubID;
        return view('employee/employees',['name'=>session('user'),'pic' => $picName,'groub'=>$groub,"data"=>$data,"date2"=>$date2]);
    
}
   } 
}
