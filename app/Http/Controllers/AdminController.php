<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\heroSection;

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

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'heroTitle' => 'required|string|max:255',
            'heroDescription' => 'required|string|max:255',
        ]);

        try {
            $newData = heroSection::create([
                'hero_title' => $validatedData['heroTitle'],
                'hero_desc' => $validatedData['heroDescription'],
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

    if ($latestHeroSection) {
        $heroTitle = $latestHeroSection->hero_title;
        $heroDescription = $latestHeroSection->hero_desc;
    } else {
        $heroTitle = null;
        $heroDescription = null;
    }

    return view('welcome', compact('heroTitle', 'heroDescription'));
}

    // public function logout(Request $request)
    // {
    //     $request->user()->currentAccessToken()->delete();

    //     return response()->json(['message' => 'Logged out successfully']);
    // }


}
