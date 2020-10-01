<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Subscribe;
use App\Models\Provider;
use App\Models\Company;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\MessageRequest;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\SubscribeRequest;

class stackController extends Controller
{
    public function index(){
        return view('main_pages.index');
    }

    public function about(){
        return view('main_pages.about');
    }

    public function contact(){
        return view('main_pages.contact');
    }

    public function contact_done(MessageRequest $request){
        Message::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'question'=>$request->question
        ]);
        return redirect()->back()->with(['message'=>'your question sent successfuly']);
    }

    public function get_start(){
        return view('main_pages.get_started');
    }

    public function signup(SignupRequest $request){
        if($request->regAs=="1")
            Company::create([
               'name'=>$request->name,
               'email'=>$request->email,
               'password'=>$request->password,
               'phone'=>$request->phone,
               'verified'=>0
            ]);
        else
            Provider::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
                'phone'=>$request->phone,
                'verified'=>0
            ]);
        return redirect('/');
    }

    public function login(LoginRequest $request){
        $email=$request->email;
        $password=$request->password;

        if($request->logAs=="1"){
            $company=Company::where(['email'=>$email,'password'=>$password,'verified'=>1])->first();
            if($company){
                $request->session()->put('id', $company->id);
                $request->session()->put('log', 'company');
                $request->session()->put('name', $company->name);

                return redirect(route('comp.index'));
            }
        } else{
            $service=Provider::where(['email'=>$email,'password'=>$password,'verified'=>1])->first();
            if($service){
                $request->session()->put('id', $service->id);
                $request->session()->put('log', 'service');
                $request->session()->put('name', $service->name);

                return redirect(route('prov.index'));
            }
        }
        return redirect()->back();
    }

    public function subscribe(SubscribeRequest $request){
        Subscribe::create(['subscribe'=>$request->subscribe]);
        return redirect()->back()->with(['subscribe'=>'Thanks, for subscribtion']);
    }

    public function logout(){
        session()->forget('id');
        session()->forget('log');
        return redirect('/');
    }
}
