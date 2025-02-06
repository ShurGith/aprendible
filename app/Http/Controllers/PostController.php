<?php
    
    namespace App\Http\Controllers;
    
    use App\Http\Requests\PostRequest;
    use App\Models\Post;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Support\Facades\Auth;
    
    class PostController extends Controller
    {
        public function index($esAdmin = false)
        {
            //  dd(url()->current(), $esAdmin);
            $posts = Post::paginate(10);
            
            if ($esAdmin) {
                return view('posts.index-admin', ['posts' => $posts]);
            } else {
                return view('posts.index', compact('posts'));
            }
        }
        
        public function show(Post $post)
        {
            
            return view('posts.show', compact('post'));
        }
        
        public function store(PostRequest $postRequest): RedirectResponse
        {
            $data = $postRequest->all();
            $data['user_id'] = Auth::id() ?? 1;
            if ($data['published_at']) {
                $data['published_at'] = date('Y-m-d H:i:s');
            }
            //dd($data);
            
            Post::create($data);
            
            //session()->flash('status', 'Post Creado con título: '.$data['title']);
            return redirect()->route('posts.index')
              ->with('status', 'Post Creado con título: '.$data['title']);
        }
        
        public function create()
        {
            return view('posts.create', ['post' => new Post]);
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
            
            if ($data['published_at']) {
                $data['published_at'] = date('Y-m-d H:i:s');
            }
            $post->update($data);
            
            //  session()->flash('status', 'Post Actualizado con título: '.$data['title']);
            return redirect()->route('posts.index')
              ->with('status', 'Post Actualizado con título: '.$data['title']);
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
