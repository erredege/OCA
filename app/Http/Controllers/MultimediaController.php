<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Multimedia;

class MultimediaController extends Controller
{
    public function index() {
        $multimediaList = Multimedia::all();
        return view('backend/multimedia.index', ['multimediaList'=>$multimediaList]);
    }

    public function show($id) {
        $multimediaList = Multimedia::find($id);
        return view('backend/multimedia.show', ['multimediaList'=>$multimediaList]);
    }

    public function create() {
        return view('backend/multimedia.form');
    }

    public function store(Request $r) {
        $multi = new Multimedia();
        $multi->name = $r->name;
        $multi->description = $r->description;
        $multi->url = $r->url;
        $multi->type = $r->type;
        $multi->question_id = $r->question_id;
        $multi->save();
        return redirect()->route('multimedia.index');
    }

    public function edit($id) {
        $multimedia = Multimedia::find($id);
        return view('backend/multimedia.form', array('multimedia' => $multimedia));
    }

    public function update(Request $r) {
        $multi = Multimedia::find($r->id);
        $multi->name = $r->name;
        $multi->description = $r->description;
        $multi->url = $r->url;
        $multi->type = $r->type;
        $multi->question_id = $r->question_id;
        $multi->save();
        return redirect()->route('multimedia.index');
    }

    public function destroy($id) {
        $multi = Multimedia::find($id);
        $multi->delete();
        return redirect()->route('multimedia.index');
    }
}
