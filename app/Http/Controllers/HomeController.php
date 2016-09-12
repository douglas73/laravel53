<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Posts $posts)
    {
        // $post = $posts->where('user_id', auth()->user()->id)->get();
        $post = $posts::all();
        return view('home', compact('post'));
    }

    public function update($idPosts)
    {


        $post = Posts::find($idPosts);

       //  $this->authorize('update-post', $post); 
       
        if( Gate::denies('update-post', $post)){
            abort(403, 'Você não tem permissão de acesso a este livro');
        }


        return view('post-update', compact('post'));
    }
}
