<?php

namespace App\Http\Controllers;

use App\UsersModel;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }


    public function allUsers(){

        return view('add-users', [
            'users' => UsersModel::all()
        ]);
    }

    public function ShowUserlist(){


        $users = User::all();

        return view('users-list', compact('users'));
    }

    public function saveUser(Request $request){

        UsersModel::create([
            'user'=> $request->post('user'),
            'userCreatedAt'=> $request->post('userCreatedAt'),
        ]);

        return redirect('/users');
    }


    public function updateUsers(Request $request){


        if(UsersModel::where('id',$request->post('id'))->count() == 0){

            echo 'Result not found';

        }else{

            UsersModel::where('id',$request->post('id'))->update([
                'user'=> $request->post('user'),
                'userCreatedAt'=> $request->post('userCreatedAt'),
            ]);

            return redirect('/users');
        }


    }


    public function editUser($id){

        return view('add-users', [
            'users' => UsersModel::all(),
            'edit_user' => UsersModel::where('id',$id)->first(),
        ]);
    }

    public function deleteUser($id){

        if(UsersModel::where('id',$id)->count() == 0){

            echo 'User not found';

        }else{

            UsersModel::where('id',$id)->delete();
            return redirect('/users');
        }

    }
}
