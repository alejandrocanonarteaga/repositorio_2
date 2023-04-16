public function index()
{
    $posts = Post::all();
    return view('posts.index', compact('posts'));
}
public function show(Post $post)
{
    return view('dashboard.post.show', compact('post'));
}
public function create()
{
    $post = new Post();
    return view('dashboard.post.create', compact('post'));
}
public function edit($id)
{
    $post = Post::findOrFail($id);

    return view('dashboard.post.edit', compact('post'));
}
public function update(PostRequest $request, Post $post)
{
    $post->update($request->all());

    return redirect()->route('dashboard.post.index')->with('status', 'Post actualizado correctamente.');
}
public function update(PostRequest $request, Post $post)
{
    $post->update($request->all());

    return redirect()->route('dashboard.post.index')->with('status', 'Post actualizado correctamente.');
}
public function category()
{
    return $this->belongsTo(Category::class);
}
public function posts()
{
    return $this->hasOne(Post::class);
}
public function image(Request $request, Post $post)
{
    $request->validate([
        'image' => 'required|image|max:2048',
    ]);

    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    $post->image()->create([
        'image' => $imageName
    ]);

    return redirect()->back()->with('success', 'La imagen se ha cargado exitosamente');
}
public function index()
{
$posts = Post::orderBy('created_at', 'desc')->get();
return response()->json($posts);

    
}
public function show($id)
{
    $post = Post::findOrFail($id);
    return response()->json($post);
}
