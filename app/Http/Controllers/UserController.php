<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Aqui crear toda la lógica del crud

    public function loadAllUsers(){
        $all_users = User::all();
        return view('users',compact('all_users'));
    }
    public function loadAddUserForm(){
        return view('add-user');
    }

   

    public function EditUser(Request $request){
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|integer',
        ]);

        try {
            // update user here
            $update_user = User::where('id',$request->user_id)->update([
                'name'=> $request->full_name,
                'email'=> $request->email,
                'phone_number'=> $request->phone_number,
            ]);
    
            return redirect('/users')->with("success","User Updated Successfully");
            
        } catch (\Exception $e) {
            return redirect('/edit/user')->with("fail",$e->getMessage());
        }

    }

    public function loadEditForm($id){
        $user = User::find($id);

        return view('edit-user',compact('user'));
    }


    public function deleteUser($id){
        try {
            User::where('id',$id)->delete();
            return redirect('/users')->with('success','User Deleted successfully');
        } catch (\Exception $e) {
            return redirect('/users')->with('fail',$e->getMessage());
        }
    }
}
