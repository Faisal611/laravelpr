<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsesrController extends Controller
{
    public function create()
    {
        $data = [
            'name' => 'faa',
            'email' => 'faa@gmail.com',
            'password' => '12345789'
        ];
        User::create($data);
        return 'creact successfully';
    }

    public function allId(){
        $users = User::all();
        return $users;
    }

    public function show($id){
        $users = User::find($id);
        return $users;
    }

    public function delete ($id){
        $users = User::findOrFail($id);
        $users->delete();
        return 'Deleted';
    }
    public function edit($id){
        $users = User::findOrFail($id);
        $users->name = 'News name';
        $users->save();
        return 'New name save';

    }



}

