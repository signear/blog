<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;

class Homepage extends Controller
{
    //
    public function index(){

        $data['categories']=Category::inRandomOrder()->get();
        $data['articles'] = Article::orderByDesc('id')->get();
        return view('front.homepage',$data);
    }

    public function singlePost($category,$slug){
        $category = Category::where('slug',$category)->firstOrFail();
        $article= Article::where('slug',$slug)->first() ??  abort(404,'Böyle bir yazı bulunamadı');
        $article->increment('hit');
        $data['article'] = $article;
        $data['categories']=Category::inRandomOrder()->get();
        return view('front.singlepost' , $data);
    }
}
