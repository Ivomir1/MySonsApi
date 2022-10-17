<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class PostsFromUserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        $posts = $user->posts;
        foreach($posts as $post){  $post->user; } // do vystupu pridam JSON i info o autorovi, slo by optimalizovat abych to info dal jenom jednou az na konec
        return $posts;
    }
}
