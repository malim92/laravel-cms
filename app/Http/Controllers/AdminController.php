<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\heroSection;
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

    public function fetchData()
    {
        $data = heroSection::latest()->first();

        return response()->json(['data' => $data]);
    }

    public function displayData()
    {
        $latestHeroSection = heroSection::latest()->first();

        
        $heroSection = heroSection::latest()->first();
        // Log::debug('$heroSection');
        // Log::debug($heroSection);

        return view('welcome', compact('heroSection'));

    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out successfully']);
    }


}
