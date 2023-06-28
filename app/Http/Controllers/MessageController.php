<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Include this if you plan to use Laravel's Http client

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $message = $request->input('message'); // Retrieves message from form input

        // Add your API call here, you can use Http facade to send a POST request
        // Http::post('your-api-url', ['message' => $message]);

        return back()->with('status', 'Message sent!'); // Redirect back to the form page and display a status message
    }
}
