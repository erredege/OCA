@extends("layouts.master")

{{--@section("title", "")

@section("header", "")--}}

@section("content")
    @isset($answerMulti)
        <form action="{{ route('answerMulti.update', ['id' => $answerMulti->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('answerMulti.store') }}" method="POST">
    @endisset
        @csrf
        Texto:<input type="text" name="text" value="{{$answerMulti->text ?? '' }}"><br>
        Correcta:<input type="text" name="true" value="{{$multimedia->treu ?? '' }}"><br>
        <!--temporal Question_id debe ser hidden y traer el id de preguntas automaticamente-->
        Question_id:<input type="int" name="question_id" value="{{$answerMulti->question_id ?? '' }}"><br>
        <input type="submit">
        </form>

@endsection