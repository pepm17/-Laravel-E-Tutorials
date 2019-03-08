<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutorial;
use App\Post;
use Illuminate\Support\Facades\DB;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $tutorials = Tutorial::all()/*->paginate(5)*/; //Vista donde se listan todos
        return view('inicio', compact('tutorials'))->with('i', (request()->input('page', 1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//Vista donde se encuentra la vista para crear
    {
        //return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //método crear
    {
        $request->validate([
            'name' => 'requerid',
        ]);
        $tutorial = new Tutorial;
        $tutorial->name = $request->name;
        $tutorial->tutor_id = auth()->user()->id;
        $tutorial->save();
        //return redirect()->route('.index')->with('succes', 'New tutorial created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //metodo para mostrar uno solo
    {
        $tutorial = Tutorial::find($id);
        $posts = DB::table('posts')
            ->where('tutorial_id', '=', $id)->get();
        return view('tutoria', compact('tutorial', 'posts'))->with('i', (request()->input('page', 1) -1)*5);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //metodo que muestra la vista donde se edita
    {
        $tutorial = Tutorial::find($id);
        //return view('', compact('tutorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //metodo para actulizar
    {
        $request->validate([
            'name' => 'requerid',
        ]);
        $tutorial = Tutorial::find($id);
        $tutorial->name = $request->name;
        $tutorial->save();
        //return redirect()->route('.index')->with('success', 'Tutorial update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //metodo para eliminar
    {
        $tutorial = Tutorial::find($id);
        $tutorial->delete();
        //return redirect()->route('.index')->with('success', 'Tutorial deleted successfully');
    }
}
