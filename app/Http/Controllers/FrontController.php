<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;

class FrontController extends Controller
{
    public function index(){
    	$posts = Post::orderBy('id', 'desc')->paginate(3);
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

    public function getPostByUser($id){
        $posts = User::findOrFail($id)->posts()->paginate(3);
        return view('pages.blog', compact('posts'));
    }
}
