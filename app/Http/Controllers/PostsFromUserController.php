<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsFromUserController extends Controller
{
    public function show($id=null)
    {
      
        if (Auth::check())
        { 
                if (empty($id)) $id = auth()->user()->id;  //pokud nemam vybraneho autora, vyberu prihlaseneho
                $user = User::findOrFail($id);
                $posts = $user->posts;
                foreach($posts as $post){  $post->user; } // do vystupu pridam JSON i info o autorovi, slo by optimalizovat abych to info dal jenom jednou az na konec
                $posts =  $posts->sortBy('title'); // seradim dle zadani ulohy podle nazvu
                return $posts;
        }
        else return response('Not Allowed', 405);
    }
}
