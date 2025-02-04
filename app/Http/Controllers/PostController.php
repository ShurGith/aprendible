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
        
        public function store(PostRequest $postRequest): RedirectResponse
        {
            $data = $postRequest->all();
            $data['user_id'] = Auth::id() ?? 1;
            //   dd($data);
            //$post =
            Post::create($data);
            session()->flash('status', 'Post Creado con título: '.$data['title']);
            return redirect()->route('posts.index');
        }
        
        public function create()
        {
            return view('posts.create');
        }
        
        public function edit($post)
        {
            $post = Post::find($post);
            return view('posts.edit', compact('post'));
        }
        
        public function update(PostRequest $postRequest, Post $post): RedirectResponse
        {
            $data = $postRequest->all();
            $data['user_id'] = Auth::id() ?? 1;
            
            $post->update($data);
            
            session()->flash('status', 'Post Actualizado con título: '.$data['title']);
            return redirect()->route('posts.index');
        }
        
        public function destroy(Post $post): RedirectResponse
        {
            $titulo = $post->title;
            $post->delete();
            // session()->flash('status', 'Post Eliminado con título: '.$titulo);
            return redirect()->route('posts.index')
              ->with('success', 'Post Eliminado con título: '.$titulo);
        }
    }
