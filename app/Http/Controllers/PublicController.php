<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function show(User $user, Article $article)
    {
        // $article est l'article à afficher
        if ($article->draft) {
            if ($user->can('viewAnyDraftArticles')) {
                return view('public.show', compact('article'));
            }
        } else {
            return view('public.show', compact('article', 'user'));
        }
    // Je vous laisse faire le code
    // N'oubliez pas de vérifier que l'article est publié (draft == 0)
    }
    public function index(User $user)
    {
        // On récupère les articles publiés de l'utilisateur
        $articles = Article::where('user_id', $user->id)->where('draft', 0)->get();

        // On retourne la vue
        return view('public.index', [
            'articles' => $articles,
            'user' => $user
        ]);
    }
    public function allView(User $user, Article $article)
    {
        // On récupère les articles publiés de l'utilisateur
        $articles = Article::where('draft', 0)->get();

        // On retourne la vue
        return view('public.liste', [
            'articles' => $articles,
            'user' => $user
        ]);
    }
}
