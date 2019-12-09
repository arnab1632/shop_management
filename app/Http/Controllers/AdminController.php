<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\DB;
use Validator;
//use App\Http\Requests\StudentRequest;


class AdminController extends Controller
{
    function index(Request $request){

        //$users = User::all();
		$users = DB::table('users')->get(); 
        
        if($request->session()->has('name')){
    		   	return view('admin.index')->with('users', $users);
    	}else{
    		return redirect()->route('login.index');
    	}

 
    }

    function details($id){
	
        $user = DB::table('users')->where('userId', $id)
                                  ->get();
    	
    	return view('admin.details')->with('users', $user);
    }

    function edit($id){

        $user = DB::table('users')->where('userId', $id)
                                  ->get();

    	return view('admin.edit')->with('users', $user);
    }
	
	function update(Request $req, $id){

    	$user = User::find($id);
        $user->username = $req->username;
        $user->password = $req->password;
        $user->type = 'employee';
        $user->save();

    	return redirect()->route('admin.index');
    }

    function delete($id){
        $user = DB::table('users')->where('userId', $id)
                                  ->get();
       
    	return view('admin.delete')->with('users', $user);
    }

    function destroy($id){

        $user = destroy($id);

    	return redirect()->route('admin.index');
    }

    function add(){

        return view('admin.addemployee');
    }

    function insert(StudentRequest $req){

        //file upload
/*        if($req->hasFile('pic')){
            $file = $req->file('pic');
            echo $file->getClientOriginalName()."<br>";
            echo $file->getClientOriginalExtension()."<br>";
            echo $file->getSize()."<br>";
            echo $file->getMimeType();
           if($file->move('upload', $file->getClientOriginalName())) {
            echo "success";
           }
        }else{
            echo "upload fail";
        }*/

        /*$req->validate([
            'username'=>'required',
            'type'=>'required',
            'password'=>'required|max:4'
        ]);*/

/*        $this->validate($req, [
            'username'=>'required',
            'type'=>'required',
            'password'=>'required|max:4'
        ])->validate();*/

        //$validation->validate();

/*        $validation = Validator::make($req->all(), [
            'username'=>'required',
            'type'=>'required',
            'password'=>'required|max:4'
        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();
        }*/

      /*  $user = new User();
        $user->username = $req->username;
        $user->password = $req->password;
        $user->type = $req->type;
        $user->name = "";
        $user->dept = "";
        $user->cgpa = "";
        if($user->save()){
            return redirect()->route('student.index');
        }else{
            return redirect()->route('student.add');
        }*/
    }
}