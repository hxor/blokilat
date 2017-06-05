<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class FrontController extends Controller
{
    public function index(){
    	$posts = Post::paginate(3);
    	return view('pages.blog', compact('posts'));
    }

    public function getPost($id){
    	$post = Post::findOrFail($id);
    	return view('pages.post', compact('post'));
    }

    public function getPostByCategory($id){
    	$posts = Category::findOrFail($id)->posts()->paginate(3);
    	return view('pages.blog', compact('posts'));
    }
}
