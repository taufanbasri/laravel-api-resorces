<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Resources\PeopleResource;
use App\Http\Resources\CommentsResource;

class ArticleRelationshipController extends Controller
{
    public function author(Article $article)
    {
        return new PeopleResource($article->author);
    }

    public function comments(Article $article)
    {
        return new CommentsResource($article->comments);
    }
}
