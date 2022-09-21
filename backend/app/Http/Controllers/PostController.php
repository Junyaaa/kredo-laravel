<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    #first method
    public function index(){
        return "Post Control: Index method";
    }

    #second method
    public function viewPost($post_id){
        return "Post Controller:: This is a post $post_id";
    }

    #another method that will accept multiple parameters
    public function viewUserPost($username, $post_id){
        // return "Post: $post_id. This is the post $username";
        return view('view-post')
            ->with('post_id', $post_id)
            ->with('username', $username);
        }

    #Activity1
    public function show($name){
        // $name = strtoupper($name);
        // return "Hello $name!";

        $daves_posts = [
            'How To Make French Toast',
            'Japanese Cheesecake Recipe',
            'How to Cook Steak',
            'The Best Places In Tokyo For Shokupan Bread',
            'Cambodian Style Fried Chiken Wongs'
        ];

        $name = ucwords($name);
        return view('show')->with('daves_posts', $daves_posts)->with('name', $name);
    }

    public function viewAllPosts(){

        $post_titles = [
            'Python vs Java',
            'The cloud',
            'How To Stay Productive',
            'coding During The Pandemic'
        ];

        return view('view-all')->with('post_titles', $post_titles);
    }
}
