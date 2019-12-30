<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index() {

        $users = User::all();
        return view('users.list', ['users' => $users]);

    }

    public function create(Request $request) {

        // $data = request()->all();
        
        // $user = new App\User;
        // $user->name = $data['name'];
        // $user->email = $data['email'];
        // $user->password = $data['password'];
        // $user->save();

        User::create($request->all());

        return redirect('/usuarios');

    }

    public function editForm(Request $request, $id) {

        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('/usuarios');

    }

    public function edit($id) {

        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);

    }

    public function delete($id) {

        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/usuarios');

    }
}
