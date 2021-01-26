<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswerMulti;

class AnswersMultiController extends Controller
{
    public function index() {
        $answerMultiList = AnswerMulti::all();
        return view('backend/answerMulti.index', ['answerMultiLis'=>$answerMultiLis]);
    }

    public function show($id) {
        $answerMulti = AnswerMulti::find($id);
        return view('backend/answerMulti.show', ['answerMultiLis'=>$answerMulti]);
    }

    public function create() {
        return view('backend/answerMulti.form');
    }

    public function store(Request $r) {
        $answerMulti = new AnswerMulti();
        $answerMulti->text = $r->text;
        $answerMulti->true = $r->true;
        $answerMulti->question_id = $r->question_id;
        $answerMulti->save();
        return redirect()->route('answerMulti.index');
    }

    public function edit($id) {
        $answerMulti = AnswerMulti::find($id);
        return view('backend/answerMulti.form', array('answerMulti' => $answerMulti));
    }

    public function update(Request $r) {
        $answerMulti = AnswerMulti::find($r->id);
        $answerMulti->text = $r->text;
        $answerMulti->true = $r->true;
        $answerMulti->question_id = $r->question_id;
        $question_id->save();
        return redirect()->route('answerMulti.index');
    }

    public function destroy($id) {
        $answerMulti = AnswerMulti::find($id);
        $answerMulti->delete();
        return redirect()->route('answerMulti.index');
    }
}
