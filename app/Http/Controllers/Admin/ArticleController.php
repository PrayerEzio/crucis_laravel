<?php

namespace App\Http\Controllers\Admin;
use App\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;

class ArticleController extends CommonController
{
    public function index(){
        $article = new Article();
        $article->title = 'My first article';
        $article->author_id = 1;
        $article->description = "this is article's description";
        $article->body = "this is article's body";
        $article->tag = 'php,laravel';
        $article->seo_title = $article->title;
        $article->seo_keywords = $article->tag;
        $article->seo_description = $article->description;
        $article->views = 0;
        $article->published_at = Carbon::now();
        $article->save();
    }
}
