<?php
    
    namespace App\Http\Controllers;
    
    use App\Http\Requests\PostRequest;
    use App\Models\Post;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Support\Facades\Auth;
    
    class PostController extends Controller
    {
        public function index()
        {
            $posts = Post::paginate(10);
            
            return view('posts.index', compact('posts'));
        }
        
        public function show(Post $post)
        {
            
            return view('posts.show', compact('post'));
        }
        
        public function store(PostRequest $request): RedirectResponse
        {
            $data = request()->all();
            $data['user_id'] = Auth::id() ?? 1;
            //   dd($data);
            $post = Post::create($data);
            return redirect()->route('posts.index');
        }
        
        public function create()
        {
            return view('posts.create');
        }
        
    }
