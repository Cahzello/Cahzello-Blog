<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $user = User::firstWhere('username', request('author'));
            $title = ' by ' . $user->name;
        }
        
        return view('home', [
            "title" => "Home" . $title,
            "active" => "home",
            'categories' => Category::all(),
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(3)->withQueryString(),

        ]);
    }
}
