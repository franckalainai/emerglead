<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Category;
use App\User;
use App\Tag;

class BlogController extends Controller
{
    protected $limit = 3;

    public function index()
    {
        return view("blog.index", compact('posts'))
        ->with('a-propos', Category::find(1))
        ->with('ce-que-nous-faisons', Category::find(2))
        ->with('nos-activites', Category::find(3))
        ->with('actualites', Category::find(4));
    }

    public function category(Category $category)
    {
        $categoryName = $category->title;

        $posts = $category->posts()
                          ->with('author', 'tags', 'comments')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);

         return view("blog.index", compact('posts', 'categoryName'));
    }

    public function tag(Tag $tag)
    {
        $tagName = $tag->title;

        $posts = $tag->posts()
                          ->with('author', 'category', 'comments')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);

         return view("blog.index", compact('posts', 'tagName'));
    }

    public function author(User $author)
    {
        $authorName = $author->name;

        $posts = $author->posts()
                          ->with('category', 'tags', 'comments')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);

         return view("blog.index", compact('posts', 'authorName'));
    }

    public function show(Post $post)
    {
        $related= Post::where('category_id', '=', $post->category->id)
            ->where('id', '!=', $post->id)
            ->get();
        $post->increment('view_count');

        $postComments = $post->comments()->simplePaginate(3);

        return view("blog.show", compact('post', 'postComments', 'related'));
    }
}
