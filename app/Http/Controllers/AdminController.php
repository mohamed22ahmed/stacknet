<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginRequest;
use App\Models\Admin;
use App\Models\Company;
use App\Models\Provider;
use App\Models\StackRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_login(){
        return view('admin.login');
    }

    public function loginDone(AdminLoginRequest $request){
        $admin=Admin::where(['email'=>$request->email,'password'=>$request->password])->get();
        if(count($admin)==1)
            return redirect(route('admin.index'));
        return redirect()->back();
    }

    public function index(){
        return view('admin.index');
    }

    public function new_user(){
        $providers=Provider::where('verified',0)->get();
        $companies=Company::where('verified',0)->get();
        $sum=count($providers)+count($companies);
        return view('admin.new_users',compact('companies','providers','sum'));
    }

    public function accept_provider($id){
        $user=Provider::find($id);
        $user->verified=1;
        $user->save();
        return redirect()->back();
    }

    public function refuse_provider($id){
        Provider::find($id)->delete();
        return redirect()->back();
    }

    public function accept_company($id){
        $user=Company::find($id);
        $user->verified=1;
        $user->save();
        return redirect()->back();
    }

    public function refuse_company($id){
        Company::find($id)->delete();
        return redirect()->back();
    }

    public function new_contract(){
        return view('admin.new_contract');
    }

    public function company_direct(){
        $requests=StackRequest::where('status',0)->get();
        $request_num=count($requests);
        return view('admin.company_direct',compact('requests','request_num'));
    }

    public function agree_direct_request($id){
        $stack=StackRequest::find($id);
        $stack->status=1;
        $stack->save();
        return redirect()->back();
    }
}
