<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $userList = User::all();
        return view('user.all', ['userList'=>$userList]);
    }

    public function show($id) {
        $usr = User::find($id);
        return view('user.show', ['user' => $usr]);
    }

    public function create() {
        return view('user.form');
    }

    public function store(Request $r) {
        $usr = new User();
        $usr->email = $r->email;
        $usr->name = $r->name;
        $usr->password = $r->password;
        $usr->save();
        return redirect()->route('user.index');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('user.form', array('user' => $user));
    }

    public function update(Request $r) {
        $usr = User::find($r->id);
        $usr->email = $r->email;
        $usr->name = $r->name;
        $usr->password = $r->password;
        $usr->save();
        return redirect()->route('user.index');
    }

    public function destroy($id) {
        $usr = User::find($id);
        $usr->delete();
        return redirect()->route('user.index');
    }
}
