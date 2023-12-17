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

    public function storeData(Request $request)
    {
        $validatedData = $request->validate([
            'fieldName' => 'required|string|max:255',
        ]);

        try {

            $newData = new heroSection();
            $newData->fieldName = $validatedData['fieldName'];

            // Save the data to the database
            $newData->save();

            return response()->json(['message' => 'Data stored successfully'], 200);
        } catch (\Exception $e) {
            // Handle the exception, e.g., log the error
            return response()->json(['error' => 'Failed to store data'], 500);
        }
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
        heroSection::create(['fieldName' => $request->input('inputValue')]);

        return response()->json(['message' => 'Data stored successfully']);
    }

    public function fetchData()
    {
        $data = heroSection::latest()->first();

        return response()->json(['data' => $data]);
    }

    public function displayData()
    {
        $dataFromDatabase = heroSection::latest()->value('fieldName'); // Adjust the query based on your needs

        return view('welcome', compact('dataFromDatabase'));
    }

    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();
    //         $token = $user->createToken('token-name')->plainTextToken;

    //         return response()->json(['token' => $token, 'user' => $user], 200);
    //     }

    //     throw ValidationException::withMessages([
    //         'email' => ['The provided credentials are incorrect.'],
    //     ]);
    // }

    // public function logout(Request $request)
    // {
    //     $request->user()->currentAccessToken()->delete();

    //     return response()->json(['message' => 'Logged out successfully']);
    // }


}
