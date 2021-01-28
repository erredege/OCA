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
        $user = User::find($id);
        return view('backend/user.show', ['userList'=>$user]);
    }

    public function create() {
        return view('backend/user.form');
    }

    public function store(Request $r) {
        $user = new User();
        $user->email = $r->email;
        $user->password = $r->password;
        $user->type = $r->type;
        $user->score = $r->score;
        $user->save();
        return redirect()->route('user.index');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('backend/user.form', array('user' => $user));
    }

    public function update(Request $r) {
        $user = User::find($r->id);
        $user->email = $r->email;
        $user->password = $r->password;
        $user->type = $r->type;
        $user->score = $r->score;
        $user->save();
        return redirect()->route('user.index');
    }

    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
