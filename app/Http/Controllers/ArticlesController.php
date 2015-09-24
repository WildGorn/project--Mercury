<?php
/**
 * Created by PhpStorm.
 * User: wildgorn
 * Date: 26.07.15
 * Time: 19:26
 */

namespace App\Http\Controllers;


use App\Article;
use App\ArticlesComments;
use Auth;


class ArticlesController extends MainController
{
    public function index(Article $article)
    {
        $this->data['articles'] = $article->getFirstParagraph();
        return view('articles.index', $this->data);
    }

    public function article($slug, Article $article, ArticlesComments $articlesComments)
    {
        $article = $article->getBySlug($slug);
        $comments = $articlesComments->getComments($article->id);
        $this->data['comments'] = $comments;
        $this->data['article'] = $article;
//        dd($this->data);
        return view('articles.article', $this->data);
    }
}