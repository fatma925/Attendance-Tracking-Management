<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\departs;
use App\Models\employees;
use App\Models\leaving;
use App\Models\notice;
use App\Models\quote;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use function PHPUnit\Framework\isTrue;


class AdminController extends Controller
{
    
    public function dashData(){
        session_start();
        if(session('user') != null){
            try {

        
    	$quote=DB::table('quote')->inRandomOrder()->first();
    	$empcount=DB::table('employees')->count();
    	$departcount=DB::table('departs')->count();
    	$presentcount=DB::table('employees')->where('status','present')->count();
    	$onleavecount=DB::table('employees')->where('status','onleave')->count();
    	//return $empcount;
        return view("admin/dashboard",compact('quote','empcount','departcount','presentcount','onleavecount'));
        }
       catch (\Throwable $th) {
                return redirect('profile');
            }
    }

    }

    public function addemployee(Request $request){
        session_start();
        $request->validate([
            'user'=> 'required',
            'pass'=> 'required | min:8',
            'phone'=> 'required | min:11 | max:11',
            'email'=> 'required | email |unique:employees',
            'BOD'=> 'required',
            'address'=> 'required'
        ]);
    	DB::table('employees')->insert([

    	[
    		'id'=> $request->id,
    		'name' => $request->name,
    		'email' => $request->email,
    		'status' =>'present',
    		'pass' => Hash::make($request->pass),
    		'img' => $request->pic,
    		'gender' => $request->gender,
	    	'BOD' => $request->date,
	    	'address'=> $request->address,
	    	'phone' => $request->phone,
            'depart' => $request->depart,
            'status' => $request->status,
            'groubID' => $request->groub
    	]
            ]);
    	return redirect("/addEmployee");
    }

    public function addDepart(Request $request){
        session_start();
        DB::table('departs')->insert([

        [
            //'id'=> $request->id,
            'name' => $request->depart,
            'head_id' => $request->head
        ]
            ]);
        return redirect("/addDepart");
    }


    public function empManage()
    {
        //listing posts
        session_start();
        $date2 = date("Y-m-d");
        $data=DB::table('employees')
        ->leftJoin("attendance", 'employees.id', '=', 'attendance.emp_id')
        ->select("employees.*", "attendance.status as attstatus" , "attendance.date")
        //->where('attendance.date', '=', $date)
        ->get();
        return view("admin/manageEmployee",["data"=>$data,"date2"=>$date2]);

    }

     public function departManage()
    {
        //listing posts
        session_start();
        $data=DB::table('departs')->get();
        //$depart = $data[0]->name;
        //$empCount=DB::table('employees')->where('depart',$depart)->count();
        return view("admin/manageDeparts",["data"=>$data]);

    }

    public function addNotice(Request $request){
        session_start();
        DB::table('notice')->insert([

        [
            //'id'=> $request->id,
            'title' => $request->title,
            'description' => $request->desc
        ]
            ]);
        return redirect("/addNotice");
    }

    public function noticeManage()
    {
        //listing posts
        session_start();
        $data=DB::table('notice')->get();
        return view("admin/mangeNotice",["data"=>$data]);

    }

    public function addQuote(Request $request){
        session_start();
        DB::table('quote')->insert([

        [
            //'id'=> $request->id,
            'quote' => $request->quote,
            'person' => $request->person
        ]
            ]);
        return redirect("/addQuite");
    }

    public function QManage()
    {
        //listing posts
        session_start();
        $data=DB::table('quote')->get();
        return view("admin/manageQuite",["data"=>$data]);

    }


    public function dailyAttend(Request $request)
    {
        //listing posts
        session_start();
        $dep = $request->dep;
        $date = $request->date;

        
        if($dep == 'all'){
            $data=DB::table('attendance')
            ->join('employees', 'employees.id', '=', 'attendance.emp_id')
            ->where('attendance.date', '=', $date)
            ->get();
        }
        else{

            $data=DB::table('attendance')
            ->join('employees', 'employees.id', '=', 'attendance.emp_id')
            ->where([
                    ['attendance.date', '=', $date],
                    ['employees.depart', '=', $dep],
                ])->get();
        }
        
        return view("admin/dailyAttendance",["data"=>$data]);

    }

    public function dailyAttendAll()
    {
        session_start();
        $data=DB::table('attendance')
        ->join('employees', 'employees.id', '=', 'attendance.emp_id')
        ->get();

        return view("admin/dailyAttendance",["data"=>$data]);

    }

    public function addLeave(Request $request){

        session_start();
        $empName= $request->name;
        $data = DB::table('employees')->where('name','=',$empName)->get();
        $id = $data[0]->id;

        DB::table('leaving')->insert([

        [
            'status' => $request->status,
            'comment' => $request->comment,
            'type' => $request->type,
            'timefrom' => $request->from,
            'timeto' => $request->to,
            'day' => $request->date,
            'emp_id' => $id
        ]
            ]);
        return redirect("/addLeave");
    }


    public function leavingManage()
    {
        session_start();
        
        $data=DB::table('leaving')
        ->join('employees','leaving.emp_id','=','employees.id')
        ->select('leaving.*', 'employees.name')
        ->get();
        return view("admin/manageLeave",["data"=>$data]);

    }

    public function editDepart($id,$name,$head_id)
    {
        //
         return view("admin/editDepart",['id' => $id,'name' => $name, 'head_id'=>$head_id]);

    }

    public function updateDepart(Request $request,$id)
    {
        //
        session_start();
        $dep = departs::find($id);

        $dep->name = $request->depart;
        $dep->head_id = $request->headid;

        $dep->save();
        return redirect("/manageDeparts");
    }

    public function editEmployee($id,$name,$email,$address,$depart,$status)
    {
        //
        session_start();
        $data = DB::table('employees')->where('id','=',$id)->get();
        $phone = $data[0]->phone;
        //$pass = $data[0]->pass; 
        $BOD = $data[0]->BOD;
        $approving = $data[0]->approving;
        return view("admin/editEmployee",compact('id','name','email','address','depart','phone', 'BOD', 'approving'));

    }

    public function updateEmployee(Request $request,$id)
    {
        //
        session_start();
        $request->validate([
            'user'=> 'required',
            'pass'=> 'required | min:8',
            'phone'=> 'required | min:11 | max:11',
            'email'=> 'required | email |unique:employees',
            'BOD'=> 'required',
            'address'=> 'required'
        ]);
        $emp = employees::find($id);

        $emp->name = $request->name;
        $emp->BOD = $request->date;
        $emp->email = $request->email;
        $emp->gender = $request->gender;
        $emp->depart = $request->depart;
        $emp->phone = $request->phone;
        $emp->address = $request->address;
        $emp->pass = Hash::make($request->pass);
        $emp->groubID = $request->groub;
        $emp->save();
        return redirect("/manageEmployee");
    }

    public function editLeave($id,$name,$type,$timefrom,$timeto,$status,$comment)
    {
        session_start();
        
        return view("admin/editLeave",compact('id','name','type','timefrom','timeto','status','comment'));

    }

    public function updateLeave(Request $request,$id)
    {
        session_start();
       
        $name = $request->emp;
        echo $name;
       $data=DB::table('employees')->where('name','=',$name)
       ->get();
       $emp_id = $data[0]->id;
        $leav = leaving::find($id);

        $leav->emp_id = $emp_id;
        $leav->status = $request->status;
        $leav->type = $request->type;
        $leav->timefrom = $request->timefrom;
        $leav->timeto = $request->timeto;
        $leav->comment = $request->comment;

        $leav->save();
        return redirect("/manageLeave");
    }

    public function editNotice($id,$title,$description)
    {
        session_start();
        
        return view("admin/editNotice",compact('id','title','description')
    );

    }

    public function updateNotice(Request $request,$id)
    {
        session_start();
       
        $note = notice::find($id);

        $note->title = $request->title;
        $note->description = $request->description;
       

        $note->save();
        return redirect("/manageNotice");
    }
    public function editQuote($id,$quote,$person)
    {
        session_start();
        
        return view("admin/editQuite",compact('id','quote','person')
    );

    }

    public function updateQuote(Request $request,$id)
    {
       session_start();
        $quote = quote::find($id);

        $quote->quote = $request->quote;
        $quote->person = $request->person;
       

        $quote->save();
        return redirect("/manageQuite");
    }

    public function empDetails($id)
    {
        //
        session_start();
       $data = DB::table("employees")
        ->where("id", "=" , $id)
        ->get();
        return view("admin/employeeDetaills",["data"=>$data]);
    }

    public function deleteDepart($id)
    {
        //
        session_start();
        DB::table("departs")->delete($id);
        return redirect("/manageDeparts");
    }

    public function deleteEmp($id)
    {
        //
        session_start();
        DB::table("employees")->delete($id);
        return redirect("/manageEmployee");
    }

    public function deleteNote($id)
    {
        //
        session_start();
        DB::table("notice")->delete($id);
        return redirect("/manageNotice");
    }

    public function deleteQuote($id)
    {
        //
        session_start();
        DB::table("quote")->delete($id);
        return redirect("/manageQuite");
    }

    public function changePass(Request $request)
    {
        session_start();
       
        $old = $request->old;
        $new = $request->new;
        $data=DB::table('employees')->where('name','=', session('user'))
        ->get();
        $emp_id = $data[0]->id;
        $oldPass = $data[0]->pass;

        if(password_verify($old, $oldPass))
        {
            $emp = employees::find($emp_id);
            $emp->pass = Hash::make($new);
            $emp->save();
            return redirect("/changePass");
        }
        else
        {
            echo "old pass is incorrect";
            echo session('user');

        }
        
       
    }
}
