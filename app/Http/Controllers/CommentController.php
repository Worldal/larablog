<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $comment)
    {
        // Si utilisateur est connecté
        // if (Auth::check()) {
        //     Comment::create([
        //     'content' => $content,
        //     'article_id' => $articleId,
        //     'user_id' => Auth::user()->id
        //     ]);
        // }
    }

}
