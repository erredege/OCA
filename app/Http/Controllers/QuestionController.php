<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index() {
        $questionList = Question::all();
        //var_dump($questionList);
        return view('backend/question.index', ['questionList'=>$questionList]);
    }

    public function show($id) {
        $question = Question::find($id);
        return view('backend/question.show', ['questionList'=>$questionList]);
    }

    public function create() {
        return view('backend/question.form');
    }

    public function store(Request $r) {
        $question = new Question();
        $question->type = $r->type;
        $question->enunciate = $r->enunciate;
        $question->theme_id = $r->theme_id;
        $question->save();
        return redirect()->route('question.index');
    }

    public function edit($id) {
        $question = Question::find($id);
        return view('backend/question.form', array('question' => $question));
    }

    public function update(Request $r) {
        $question = Question::find($r->id);
        $question->type = $r->type;
        $question->enunciate = $r->enunciate;
        $question->theme_id = $r->theme_id;
        $question->save();
        return redirect()->route('question.index');
    }

    public function destroy($id) {
        $question = Question::find($id);
        $question->delete();
        return redirect()->route('question.index');
    }
}
