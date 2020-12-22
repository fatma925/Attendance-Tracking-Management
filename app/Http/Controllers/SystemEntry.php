<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Exceptions\Handler;
use App\Services\PayUService\Exception;

use function PHPUnit\Framework\isTrue;

class SystemEntry extends Controller
{
    //
    public function login(Request $request){
        session_start();
    /*    $request->validate([
        	'user'=> 'required | max:10',
        	'pass'=> 'required | min:8'

    ]);*/
    
	    $user = $request->user;
	    $password =$request->pass;
        session()->put('user',$user);
        
        $data = DB::table('employees')
        ->where("name", "=", $user)
        ->get();

        if(!empty($data[0])){
        $name = $data[0]->name;
        $id = $data[0]->id;
        $pass = $data[0]->pass;
        $groubId = $data[0]->groubID;
        $approve = $data[0]->approving;
        session()->put('id',$id);

        if($user == $name && password_verify($password, $pass))
        {
        	if($groubId == 1)
        	{
        		return redirect('dashboard');
        	}
        	else
        	{
                if($approve == 'approved'){
        		return redirect('empdashboard');
                }
                else
                {
                    echo "sorry , not approved yet :(";
                }
            }

        }else{
            return redirect('/');
        }

        
    }
        else
        {
        	return redirect('/');

        }
  
   
    

        //return redirect('dashboard');
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
    public function register()
    {
       $data = DB::table('departs')->get();
       return view("register",["data"=>$data]);
    }

    public function registering(Request $request)
    {
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
            'name' => $request->user,
            'email' => $request->email,
            'pass' => Hash::make($request->pass),
            'gender' => $request->gender,
            'BOD' => $request->BOD,
            'address'=> $request->address,
            'phone' => $request->phone,
            'depart' => $request->depart,
            'status' => $request->status
        ]
            ]);
        echo "wait a while for approving and log in :D";
    }
}
