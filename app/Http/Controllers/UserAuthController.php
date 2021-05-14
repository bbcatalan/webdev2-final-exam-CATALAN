<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Form;

class UserAuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function create(Request $request){
        //return $request-> input();
        $request-> validate([
            'name' => 'required', 
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12' 
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $query = $user->save();

        if($query){
            return back()->with('success','You have been successfully registered');
        }else{
            return back()->with('fail','Something went wrong');
        }
}

        function check(Request $request){
            //return $request->input();
            $request-> validate([
                'email' => 'required|email',
                'password' => 'required|min:5|max:12'
            ]);

            $user = User::where('email', '=', $request->email)->first();
            if($user){
                if(Hash::check($request->password, $user->password)){

                    $request->session()->put('loggedUser', $user->id);
                    return redirect('homepage');
                }else{
                   return back()->with('fail','Invalid password');
                }
            }else{
               return back()->with('fail','No account found for this email');
            }
        }

        function homepage(){
            return view('admin.homepage');
        }

        function create2(Request $request){
            //return $request->input();
            $request->validate([
                'name'=>'required', 
                'email'=>'required|email|unique:forms',
                'contact'=>'required|max:11',
                'birthdate'=>'required',
                'religion'=>'required',
                'date'=>'required',
                'time'=>'required',
                'address'=>'required'
            ]);

            $form = new Form;
            $form->name = $request->name;
            $form->email = $request->email;
            $form->contact = $request->contact;
            $form->birthdate = $request->birthdate; 
            $form->religion = $request->religion;
            $form->date = $request->date;
            $form->time = $request->time;
            $form->address = $request->address;

             $query = $form->save();

             if($query){
                return redirect('thank-you')->with('success','Your request has been recorded');
            }else{
                return back()->with('fail','Something went wrong');
            }

        }
        
        function show(){

            $data = Form::all();
                return view('bible-study-requests',['forms'=>$data]);
        }
       
}
