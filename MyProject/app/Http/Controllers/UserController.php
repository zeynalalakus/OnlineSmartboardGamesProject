<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Container\RewindableGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function adminPanel(){
        if (Auth::user()->role == 'a'){
            return view('admin.admin');
        }
        else{
            return view('dashboard');
        }
    }
    public function userList(){
        $users = User::where('deleted_at', '=', null)->get();;
        return view('admin.userList', compact('users'));
    }
    public function userManagement(){
        $users = User::where('deleted_at', '=', null)->get();
        return view('admin.userManagement', compact('users'));
    }
    public function updateUserView($id){
        $users = User::where('id', '=', $id)->get();
        return view('admin.updateUser', compact('users'));
    }
    public function updateUser(Request $request, $id){
        User::where('id', '=', $id)->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'role' => $request->get('role'),
            'password' => Hash::make($request->get('password')),
        ]);
        $users = User::where('deleted_at', '=', null)->get();
        return view('admin.userManagement', compact('users'));
    }
    public function deleteUser($id){
        $now = Carbon::now();
        User::where('id', '=', $id)->update(['deleted_at' => $now]);
        $users = User::all();
        return $this->userManagement();
    }
    public function deletedUsers(){
        $users = User::where('deleted_at', '!=', null)->get();
        return view('admin.deletedUsers', compact('users'));
    }
    public function undeleteUser($id){
        User::where('id', '=', $id)->update(['deleted_at' => null]);
        $users = User::where('deleted_at', '!=', null)->get();
        return view('admin.deletedUsers', compact('users'));
    }
    public function hardDeleteUser($id){
        User::where('id', '=', $id)->delete();
        return $this->deletedUsers();
    }
    public function addUserView(){
        return view('admin.addUserView');
    }

    use PasswordValidationRules;

    public function addUser(Request $request)
    {
        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'role' => $request->get('role'),
            'password' => Hash::make($request->get('password')),

        ]);
        return $this->userList();
    }
}
