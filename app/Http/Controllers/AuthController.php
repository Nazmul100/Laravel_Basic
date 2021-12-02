<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function home(Request $request){
        $user = auth()->user();
       // dd($user->id);
        var_dump($user->name);
        //$getData = DB::table('users')->where ('id',$id)->first();


//        if (empty($getData)) {
//            return redirect()->route('loginView');
//        }
        return view('Page.Index.welcome');
    }

    public function registrationView(Request $request){
        return view('Page.Auth.Registration');
    }

    public function registration(Request $request){
        DB::table('users')->insert([
            'name'=>$request->username,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
        ]);
        return redirect()->route('loginView')->with('success',' created successfully.');
    }
    public function loginView(Request $request){
        return view('Page.Auth.Login');
    }
    public function login(Request $request){

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('CRUD');
        }
    }
}
