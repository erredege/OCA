<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $userList = User::all();
        return view('backend/user.index', ['userList'=>$userList]);
    }

    public function show($id) {
        $usr = User::find($id);
        return view('backend/user.show', ['user' => $usr]);
    }

    public function create() {
        return view('backend/user.form');
    }

    public function store(Request $r) {
        $usr = new User();
        $usr->email = $r->email;
        $usr->password = $r->password;
        $usr->type = $r->type;
        $usr->score = $r->score;
        $usr->save();
        return redirect()->route('user.index');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('backend/user.form', array('user' => $user));
    }

    public function update(Request $r) {
        $usr = User::find($r->id);
        $usr->email = $r->email;
        $usr->password = $r->password;
        $usr->type = $r->type;
        $usr->score = $r->score;
        $usr->save();
        return redirect()->route('user.index');
    }

    public function destroy($id) {
        $usr = User::find($id);
        $usr->delete();
        return redirect()->route('user.index');
    }
}
