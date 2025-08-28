<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('website.index');
    }
    public function bookwriting(){
        return view('website.services.book-writing');
    }
    public function bookediting(){
        return view('website.services.book-editing');
    }
    public function coverdesign(){
        return view('website.services.cover-design');
    }
    public function illustration(){
        return view('website.services.illustration');
    }
    public function selfpublishing(){
        return view('website.services.self-publishing');
    }
    public function bookmarketing(){
        return view('website.services.book-marketing');
    }
    public function bookformatting(){
        return view('website.services.book-formatting');
    }
    public function authorwebsite(){
        return view('website.services.author-website');
    }
    public function scriptwriting(){
        return view('website.services.script-writing');
    }
    public function blogwriting(){
        return view('website.services.blog-writing');
    }
    public function articlewriting(){
        return view('website.services.article-writing');
    }
    public function about(){
        return view('website.about');
    }
    public function contact(){
        return view('website.contact');
    }
}
