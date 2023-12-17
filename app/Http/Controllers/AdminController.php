<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\heroSection;
use App\Models\posts;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{

    public function __invoke()
    {
        return view('admin.layouts.app');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }

    public function store_hero(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'heroTitle' => 'required|string|max:255',
            'heroDescription' => 'required|string|max:255',
            'logoFile' => 'image|mimes:jpeg,webp,png,jpg,gif|max:2048',
        ]);

        // Log::debug($request);
        if ($request->hasFile('logoFile')) {
            $image = $request->file('logoFile');
            $imagePath = $image->store('images', 'public');
            $validatedData['logoFile'] = $imagePath;
        }

        try {
            $newData = heroSection::create([
                'hero_title' => $validatedData['heroTitle'],
                'hero_desc' => $validatedData['heroDescription'],
                'logo_path' => $validatedData['logoFile'],
            ]);

            return response()->json(['message' => 'Data stored successfully', 'data' => $newData]);
        } catch (\Exception $e) {
            // Handle the exception, e.g., log the error
            return response()->json(['error' => 'Failed to store data'], 500);
        }
    }

    public function getPosts()
    {
        $posts = posts::where('status', 1)->get();

        return response()->json(['posts' => $posts]);
    }

    public function getPostById($id)
    {
        try {
            $post = posts::findOrFail($id);

            return response()->json(['post' => $post]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Post not found'], 404);
        }
    }

    public function createPost(Request $request)
    {

        $validatedData = $request->validate([
            'postTitle' => 'required|string|max:255',
            'postType' => 'required|string|max:255',
            'postContent' => 'required|string|max:1255',
            'postStatus' => 'required|boolean',
            'postFile' => 'image|mimes:jpeg,webp,png,jpg,gif|max:2048',
        ]);

        try {
            
            if (isset($validatedData['postFile'])) {
                $post_file = $validatedData['postFile'];
            } else $post_file = null;
            $postData = posts::create([
                'title' => $validatedData['postTitle'],
                'type' => $validatedData['postType'],
                'content' => $validatedData['postContent'],
                'status' => $validatedData['postStatus'],
                'image' => $post_file,
            ]);
            $post = posts::create($postData);
            return response()->json(['message' => 'Post created successfully', 'post' => $post]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create post' . $e], 500);
        }
    }

    public function updatePost(Request $request, $id)
    {
        $validatedData = $request->validate([
            'postTitle' => 'required|string|max:255',
            'postType' => 'required|string|max:255',
            'postContent' => 'required|string|max:1255',
            'postStatus' => 'required|boolean',
            'postFile' => 'required|string|max:255',
        ]);

        try {

            $postData = [
                'title' => $validatedData['postTitle'],
                'type' => $validatedData['postType'],
                'content' => $validatedData['postContent'],
                'status' => $validatedData['postStatus'],
                'image' => $validatedData['postFile'],
            ];
            $post = posts::findOrFail($id);
            
            $post->update($postData);

            return response()->json(['message' => 'Post updated successfully', 'post' => $post]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update post'], 500);
        }
    }

    public function deletePost($id)
    {
        try {
            $post = posts::findOrFail($id);
            Log::debug('deletePost $post');
            Log::debug($post);
            $post->delete();

            return response()->json(['message' => 'Post deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete post'], 500);
        }
    }

    public function store_post(Request $request)
    {
        Log::debug('$request 11');
        Log::debug($request);
        // Validate the incoming request data
        $validatedData = $request->validate([
            'postTitle' => 'required|string|max:255',
            'postType' => 'required|string|max:255',
            'postContent' => 'required|string|max:1255',
            'postStatus' => 'required|boolean',
            'postFile' => 'image|mimes:jpeg,webp,png,jpg,gif|max:2048',
        ]);

        // Log::debug($request);
        if ($request->hasFile('postFile')) {
            $image = $request->file('postFile');
            $imagePath = $image->store('images/posts', 'public');
            $validatedData['postFile'] = $imagePath;
        }
        Log::debug('$validatedData');
        Log::debug($validatedData);
        try {
            $newData = posts::create([
                'title' => $validatedData['postTitle'],
                'type' => $validatedData['postType'],
                'content' => $validatedData['postContent'],
                'status' => $validatedData['postStatus'],
                'image' => $validatedData['postFile'],
            ]);

            return response()->json(['message' => 'Data stored successfully', 'data' => $newData]);
        } catch (\Exception $e) {
            // Handle the exception, e.g., log the error
            return response()->json(['error' => 'Failed to store data'], 500);
        }
    }

    public function fetchHeroData()
    {
        $data = heroSection::latest()->first();

        return response()->json(['data' => $data]);
    }

    public function displayHomeData()
    {

        $heroSection = heroSection::latest()->first();
        // Log::debug('$heroSection');
        // Log::debug($heroSection);
        $posts = posts::latest()->take(4)->get();

        return view('welcome', compact('heroSection', 'posts'));
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out successfully']);
    }
}
