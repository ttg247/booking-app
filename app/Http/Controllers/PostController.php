<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Services\FacebookService;

class PostController extends Controller
{
    protected $facebookService;

    public function __construct(FacebookService $facebookService)
    {
        $this->facebookService = $facebookService;
    }

    // Show the form for creating a new post
    public function create()
    {
        return view('posts.create');
    }

    // Store a newly created post in the database and post to Facebook
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|url',
        ]);

        // Create a new post
        $post = Post::create(array_merge($validatedData, ['user_id' => auth()->id()]));

        // Post to Facebook
        try {
            $facebookResponse = $this->facebookService->postToFacebook($post->content, $post->image);
            $post->facebook_post_id = $facebookResponse['id'];
            $post->save();
        } catch (\Exception $e) {
            return redirect()->route('posts.create')->withErrors('Failed to post on Facebook: ' . $e->getMessage());
        }

        // Redirect back with a success message
        return redirect()->route('posts.index')->with('success', 'Post created and published on Facebook successfully.');
    }

    // List all posts
    public function index()
    {
        $posts = Post::where('user_id', auth()->id())->get();
        return view('posts.index', compact('posts'));
    }

    // Show details of a single post
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
}
