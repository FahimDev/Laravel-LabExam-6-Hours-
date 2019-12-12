<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Image;
use Validator;
use DB;


class AdminController extends Controller
{
    //
    public function index()
    {
        return view('inWorld.index');
    }

    public function prodList()
    {
        $users = DB::table('images')->where('approval', '1')->get();
        return view('photoUpload.viewProduct')-> with('info', $users);
    }

    public function updateProduct($id)
    {
        $std = DB::table('images')->where('id', $id)->first();
        
    	return view('photoUpload.productUpdate')->with('bio', $std);
    }

    function publishProdUpdate(Request $req, $id){
    	
        DB::table('images')
            ->where('id', $id)
            ->update([
                'fullName' => $req->fullName,
                'userName' => $req->userName,
                'title' => $req->title,
                'catagory' => $req->catagory, 
                'type' => $req->type,
                'description' => $req->description,
                ]);
    	return redirect()->route('pList');
    }

    public function pixUpload() //path of photo upload option
    {
        return view('photoUpload.photoCustom');
    }

    public function pixPublish(Request $request) //PHOTO PUBLISH
    {

        if($request->hasFile('path')){

            $file = $request->file('path');
            echo $file->getClientOriginalName()."<br>";
            echo $file->getClientOriginalExtension()."<br>";
            echo $file->getSize()."<br>";
            echo $file->getMimeType();
           if($file->move('uploads', $file->getClientOriginalName())) {
            echo "success";
            
            $action = DB::table('images')->insert([
                'fullName' => $request->fullName,
                'userName' => $request->userName,
                'title' => $request->title,
                'catagory' => $request->catagory, 
                'type' => $request->type,
                'description' => $request->description,
                'path' =>$request->file('path')->getClientOriginalName(),
                ]);
                
                if($action)
                {
                    return view('photoUpload.success');
                }else{
                return redirect()->route('create');
                }
                
           }
        }else{
            echo "upload fail";
            
        }

    }

    public function pixApprove() //path of photo upload option
    {
        $users = DB::table('images')->where('approval', '0')->get();
        return view('photoUpload.approve')-> with('info', $users);
    }
    function approved($id){
    	
        DB::table('images')
            ->where('id', $id)
            ->update([
                'approval' => '1',
                ]);
    	return redirect()->route('approvePix');
    }
    
    public function add()
    {
        return view('crud.add');
    }

    public function update($id)
    {
        $std = DB::table('admins')->where('id', $id)->first();
        
    	return view('crud.update')->with('bio', $std);
    }

    public function viewBio($id)
    {
        $std = DB::table('admins')->where('id', $id)->first();
        
    	return view('crud.bio')->with('bio', $std);
    }

    function edit(Request $req, $id){
    	
        DB::table('admins')
            ->where('id', $id)
            ->update([
                'firstName' => $req->firstName,
                'lastName' => $req->lastName,
                'DoB' => $req->DoB,
                'userName' => $req->userName, 
                'password' => $req->password,
                ]);
    	return redirect()->route('list');
    }
    public function nameList()
    {
        $users = DB::table('admins')->get();
        return view('crud.info')-> with('info', $users);
    }


    public function insert(Request $req)
    {
        
        $action = DB::table('admins')->insert([
                    'firstName' => $req->firstName,
                    'lastName' => $req->lastName,
                    'DoB' => $req->DoB,
                    'userName' => $req->userName, 
                    'password' => $req->password,
                    ]);
        if($action)
        {
            return redirect()->route('list');
        }else{
           return redirect()->route('create');
        }
        /*
        $this->validate($request, [
            'first_name'    =>  'required',
            'last_name'     =>  'required'
        ]);
        $student = new Student([
            'firstName'    =>  $request->get('firstName'),
            'lastName'     =>  $request->get('lastName')
        ]);
        $student->save();
        return redirect()->route('student.create')->with('success', 'Data Added');*/
    }

    public function reg() //path of photo upload option
    {
        return view('customer.reg');
    }

    public function regInsert(Request $req)
    {
        $this->validate($req,[
            'firstName' => 'required|max:10',
            'lastName' => 'required|max:11| integer',
            'userName' =>'required|unique:users',
            
        ]);
        
        $action = DB::table('admins')->insert([
                    'firstName' => $req->firstName,
                    'lastName' => $req->lastName,
                    'DoB' => $req->DoB,
                    'userName' => $req->userName, 
                    'password' => $req->password,
                    'type' => '4',
                    ]);
        if($action)
        {
            return view('photoUpload.success');
        }else{
           return redirect()->route('create');
        }
        
    }

    public function regApprove() //path of photo upload option
    {
        $users = DB::table('admins')->where('typel', '4')->get();
        return view('customer.reg')-> with('info', $users);
    }

    public function customerRequest() //path of photo upload option
    {
        $users = DB::table('admins')->where('type', '4')->get();
        return view('customer.regReq')-> with('info', $users);
    }

    public function approvedCustomer($id) //path of photo upload option
    {
        DB::table('admins')
            ->where('id', $id)
            ->update([
                'type' => '2',
                ]);
                
    	return redirect()->route('cRequest');
    }


    public function cusDash() //path of photo upload option
    {
        return view('customer.index');
    	//return redirect()->route('cusDash');
    }

    public function pkgList()
    {
        $users = DB::table('images')->where('approval', '1')->get();
        return view('customer.packgeShop')-> with('info', $users);
    }

    public function book(Request $req)
    {
        
        return $req->id;
        $action = DB::table('booking')->insert([
                    'userName' => $req->userName,
                    'pkgid' => $req->id,
                    'loc' => $req->location,
                    'cost' => $req->cost, 
                    'date' => '12/12/12',
                    'extra' => '4',
                    ]);
        if($action)
        {
            return view('photoUpload.success');
        }else{
           return redirect()->route('create');
        }
        
    }

}
