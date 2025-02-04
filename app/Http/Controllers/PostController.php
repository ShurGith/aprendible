<?php
    
    namespace App\Http\Controllers;
    
    use App\Models\Comment;
    use App\Models\Post;
    
    class PostController extends Controller
    {
        public function index()
        {
            $posts = Post::all();
            return view('posts.index', compact('posts'));
        }
        public function create(){
            return view('post.create');
        }
        public function show(Post $post)
        {
           // $comments = Comment::where('post_id', '===', $post['id']);
            return view('posts.show', compact('post'));
        }
    }
