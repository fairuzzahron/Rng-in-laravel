<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RNGController extends Controller
{
    public function generateRandomNumber(Request $request)
    {
        // Get the limit from the request or use a default value
        $limit = $request->input('limit', 10);

        // Validate the limit to ensure it's a positive integer
        $limit = max(1, intval($limit));

        // Generate a random number within the specified limit
        $randomNumber = rand(1, $limit);

        return view('rng', ['randomNumber' => $randomNumber, 'limit' => $limit]);
    }
}
