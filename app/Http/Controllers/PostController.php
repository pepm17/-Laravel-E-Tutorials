<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {   
        $post = Post::all()/*->paginate(5)*/; //Vista donde se listan todos
        return view('tutoria', compact('post', 'tutorials'))->with('i', (request()->input('page', 1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('publicaciones', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->tutorial_id = $request->tutorial_id;
        $post->user_id = auth()->user()->id;
        $post->save();
        $id = $request->tutorial_id;
        return redirect()->route('tutorial.show', [$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = DB::table('posts')
            ->where('tutorial_id', '=', $id)->get();
        return view('post', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutorial = Tutorial::find($id);
        //return view('', compact('post'));
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
        $request->validate([
            'title' => 'requerid',
            'description' => 'description',
            'tutorial_id' => 'tutorial_id'
        ]);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->tutorial_id = $request->tutorial_id;
        $post->tutor_id = auth()->user()->id;
        $post->save();
        //return redirect()->route('.index')->with('success', 'Post update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        //return redirect()->route('.index')->with('success', 'Post deleted successfully');
    }
}
