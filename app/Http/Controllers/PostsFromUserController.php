<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsFromUserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        $posts = $user->posts;
        foreach($posts as $post){  $post->user; } // do vystupu pridam JSON i info o autorovi, slo by optimalizovat abych to info dal jenom jednou az na konec
        $posts =  $posts->sortBy('created_at'); // seradim dle zadani ulohy podle datumu
        return $posts;
    }
}
