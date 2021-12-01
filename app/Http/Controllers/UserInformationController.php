<?php

namespace App\Http\Controllers;

use App\Models\User_information;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class UserInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $Users = User_information::all();
        return view('CRUD',compact('Users'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function createView()
    {
        return view('Page.UserCreate.UserCreate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function create(Request $request)
    {
        DB::table('user_informations')->insert([
            'name'=>$request->name,
            'bio'=>$request->bio,
            'skill'=>$request->skill,
            'project'=>$request->project,
            'address'=>$request->address,
            'image'=>$request->image,
        ]);
//        return redirect(view('CRUD'))->with('status','Student Added !!');
        return redirect()->route('CRUD')->with('success',' created successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $getUser = User_information::where('id',$id)->first();
        return view('Page.View.view',compact('getUser'));
    }

    public function edit(Request $request,$id){
        $getUser = User_information::where('id',$id)->first();
        return view('Page.Edit.edit',compact('getUser'));
    }

    public function update(Request $request,$id){
        DB::table('user_informations')
            ->where('id', $id)
            ->update([
                'name'=>$request->name,
                'bio'=>$request->bio,
                'skill'=>$request->skill,
                'project'=>$request->project,
                'address'=>$request->address,
                'image'=>$request->image,
            ]);
        return redirect()->route('CRUD')->with('success',' Updated successfully.');
    }

    public function delete(Request $request,$id){
        DB::table('user_informations')->where ('id',$id)->delete();
        return redirect(route('CRUD'))->with ('status','Student Deleted ');
    }

}
