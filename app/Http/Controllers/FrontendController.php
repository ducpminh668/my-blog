<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;

class FrontendController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        return view('index')
            ->with('title', $settings->site_name)
            ->with('categories', Category::take(4)->get())
            ->with('first_post', Post::orderBy('created_at', 'desc')->take(3)->get())
            ->with('laravel', Category::find(2))
            ->with('tutorials', Category::find(4))
            ->with('settings', Setting::first());
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('single')
                ->with('post', $post)
                ->with('title', $post->title)
                ->with('categories', Category::all())
                ->with('settings', Setting::first());
    }
}
