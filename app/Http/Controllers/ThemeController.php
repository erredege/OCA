<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themeList = Theme::all();
        return view('backend/theme/theme.index',['themeList'=>$themeList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/theme/theme.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $theme = new Theme();
        $theme->name = $request->name;
        $theme->theme_img = $request->theme_img;
        $theme->position_X = $request->position_X;
        $theme->position_Y = $request->position_Y;
        $theme->save();
        return redirect()->route('theme.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $themeList = Theme::find($id);
        return view('backend/theme/theme.show',['themeList'=>$themeList]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $theme = Theme::find($id);
        return view('backend/theme/theme.form', array('theme' => $theme));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $theme = Theme::find($request->$id);
        $theme->name = $request->name;
        $theme->theme_img = $request->theme_img;
        $theme->position_X = $request->position_X;
        $theme->position_Y = $request->position_Y;
        $theme->save();
        return redirect()->route('theme.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theme = Theme::find($id);
        $theme->delete();
        return redirect()->route('theme.index'); 
    }
}
