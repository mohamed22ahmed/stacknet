<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\Company;
use App\Models\CompProvRequest;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index(){
        $company=Company::find(1);
        session()->put('company_photo',$company->profile_image);
        return view('ser_provider.index');
    }

    public function profile(){
        return view('ser_provider.profile');
    }

    public function security(){
        return view('ser_provider.security');
    }

    public function responsible_person(){
        return view('ser_provider.responsible_person');
    }

    public function company_profile(){
        return view('ser_provider.company_profile');
    }

    public function accepted_requests(){
        $requests=CompProvRequest::where(['provider_id'=>session('id'),'from_company'=>0])->get();
        return view('ser_provider.accepted_requests',compact('requests'));
    }

    public function claims(){
        return view('ser_provider.claims');
    }

    public function uploadClaims(Request $request){
        $claim=new Claim;
        $claim->company_id=1;
        $claim->provider_id=session('id');
        $claim->patient_name=$request->patient_name;
        $claim->patient_id=$request->patient_id;
        if($request->hasFile('upload_id')){
            $fileWithExt=$request->file('upload_id')->getClientOriginalName();
            $fileWithoutExt=pathinfo($fileWithExt,PATHINFO_FILENAME);
            $fileExt=$request->file('upload_id')->getClientOriginalExtension();
            $fileNewName=$fileWithoutExt.'_'.time().'.'.$fileExt;
            $path=$request->file('upload_id')->storeAs('public/provider',$fileNewName);
            $claim->upload_id=$fileNewName;
        }
        $claim->service_date=$request->service_date;
        if($request->service_type=='Emergency')
            $ser='Emergency';
        else if($request->service_type=='In_Patient')
            $ser='In Patient';
        else if($request->service_type=='Out_Patient')
            $ser='Out Patient';
        $claim->service_type=$ser;

        $claim->service_description=$request->service_description;
        if($request->hasFile('service_attach')){
            $fileWithExt=$request->file('service_attach')->getClientOriginalName();
            $fileWithoutExt=pathinfo($fileWithExt,PATHINFO_FILENAME);
            $fileExt=$request->file('service_attach')->getClientOriginalExtension();
            $fileNewName=$fileWithoutExt.'_'.time().'.'.$fileExt;
            $path=$request->file('service_attach')->storeAs('public/provider',$fileNewName);
            $claim->service_attach=$fileNewName;
        }
        $claim->save();
        return redirect()->back();
    }

    public function all_incoming_requests(){
        $requests=CompProvRequest::where(['provider_id'=>session('id'),'from_company'=>1,'status'=>0])->get();
        $request_num=count($requests);
        return view('ser_provider.all_incoming_requests',compact('requests','request_num'));
    }

    public function accept_request($id){
        $request=CompProvRequest::find($id);
        $request->status=1;
        $request->save();
        return redirect()->back();
    }
    public function refuse_request($id){
        CompProvRequest::find($id)->delete();
        return redirect()->back();
    }

    public function make_request(){
        return view('ser_provider.make_request');
    }

    public function make_request_post(Request $request){
        $req=new CompProvRequest;
        $req->provider_id=session('id');
        $req->company_id=1;
        if($request->type=='Case-Investigation')
            $type='Claim Form';
        else if($request->type=='Contract')
            $type='Update Price List';
        else if($request->type=='Deployment')
            $type='Deployment';
        $req->type=$type;
        $req->from_company=0;
        $req->save();
        return redirect(route('prov.accepted_requests'));
    }
    public function request_details(){
        return view('ser_provider.request_details');
    }

    public function request_details_from_company(){
        return view('ser_provider.request_details_from_company');
    }
}
