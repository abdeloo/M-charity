<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class UserController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();  
        $user->name = $request->input('name');
        $user->city = $request->input('city');
        $user->phone = $request->input('phone');
        $user->update();
        return view('home');           
    }

    public function show() 
    {
        $data = User::all();

        return view("auth.admin.adherents" , ['adherents' => $data]); 
    }

    function edit($id){
        
        $adherent = User::find($id);
        
        return view("auth.admin.edit2" , ['adherent' => $adherent]); 
    }

    function update2(Request $request , $id){

        $adherent = User::find($id);

        $adherent->adhesion_state = $request->input("adhesion_state");

        $adherent->save();

        return redirect('admin/adherents');

    }
}
