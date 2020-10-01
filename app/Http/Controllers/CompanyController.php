<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\Company;
use App\Models\CompProvRequest;
use App\Models\Responsible;
use App\Models\StackRequest;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $company=Company::find(session('id'));
        session()->put('img',$company->profile_image);
        return view('company.index');
    }

    public function provider_profile(){
        return view('company.provider_profile');
    }

    public function profile(){
        $company=Company::find(session('id'));
        return view('company.profile',compact('company'));
    }

    public function profile_edit(Request $request){
        $company=Company::find(session('id'));
        $company->name=$request->name;
        $company->email=$request->email;
        $company->phone=$request->phone;
        if($request->hasFile('operation_instruction')){
            $fileWithExt=$request->file('operation_instruction')->getClientOriginalName();
            $fileWithoutExt=pathinfo($fileWithExt,PATHINFO_FILENAME);
            $fileExt=$request->file('operation_instruction')->getClientOriginalExtension();
            $fileNewName=$fileWithoutExt.'_'.time().'.'.$fileExt;
            $path=$request->file('operation_instruction')->storeAs('public/company',$fileNewName);
            $company->operation_instruction=$fileNewName;
        }
        if($request->hasFile('profile_image')){
            $fileWithExt=$request->file('profile_image')->getClientOriginalName();
            $fileWithoutExt=pathinfo($fileWithExt,PATHINFO_FILENAME);
            $fileExt=$request->file('profile_image')->getClientOriginalExtension();
            $fileNewName=$fileWithoutExt.'_'.time().'.'.$fileExt;
            $path=$request->file('profile_image')->storeAs('public/company',$fileNewName);
            $company->profile_image=$fileNewName;
            session()->put('img',$fileNewName);
        }
        $company->save();
        return redirect()->back();
    }

    public function security(){
        return view('company.security');
    }

    public function security_update(Request $request){
        $company=Company::find(session('id'));
        $company->password=$request->password;
        $company->save();
        return redirect()->back();
    }

    public function responsible_person(){
        $res=Responsible::where('company_id',session('id'))->first();
        return view('company.responsible_person',compact('res'));
    }

    public function responsible_person_update(Request $request){
        $res=Responsible::where('company_id',session('id'))->first();
        $res->name=$request->name;
        $res->email=$request->email;
        $res->phone=$request->phone;
        $res->save();
        return redirect()->back();
    }

    public function direct_stacknet(){
        return view('company.direct_stacknet');
    }

    public function requests_to_stacknet(){
        $requests=StackRequest::where('company_id',session('id'))->get();
        return view('company.requests_to_stacknet',compact('requests'));
    }

    public function make_stacknet_request(){
        return view('company.make_stacknet_request');
    }

    public function make_stacknet_request_post(Request $request){
        if($request->type=='Case-Investigation')
            $type='Case Investigation';
        else if($request->type=='Directly-Support')
            $type='Directly Customer Support';
        else if($request->type=='Contract')
            $type='Contracting';
        else if($request->type=='Deployment')
            $type='Deployment';
        else if($request->type=='Presentation')
            $type='Presentation';
        $st=new StackRequest;
        $st->type=$type;
        $st->company_id=session('id');
        $st->save();
        return redirect(route('comp.requests_to_stacknet'));
    }

    public function request_details(){
        return view('company.request_details');
    }

    public function medical_network(){
        return view('company.medical_network');
    }

    public function all_incoming_requests(){
        $requests=CompProvRequest::where(['company_id'=>session('id'),'from_company'=>0,'status'=>0])->get();
        return view('company.all_incoming_requests',compact('requests'));
    }

    public function show_claims(){
        $claims=Claim::where('company_id',session('id'))->get();
        return view('company.show_claims',compact('claims'));
    }

    public function requests_from_you(){
        $requests=CompProvRequest::where(['company_id'=>session('id'),'from_company'=>1])->get();
        return view('company.requests_from_you',compact('requests'));
    }

    public function make_medical_request(){
        return view('company.make_medical_request');
    }

    public function send_medical_request(Request $request){
        $req=new CompProvRequest;
        $req->company_id=session('id');
        $req->provider_id=1;
        if($request->type=='Case-Investigation')
            $type='Case Investigation';
        else if($request->type=='coding-item')
            $type='Item Coding (Code New Service)';
        $req->type=$type;
        $req->from_company=1;
        $req->save();
        return redirect(route('comp.requests_from_you'));
    }

    public function request_details_from_provider(){
        return view('company.request_details_from_provider');
    }

    public function request_details_to_stacknet(){
        return view('company.request_details_to_stacknet');
    }
}
