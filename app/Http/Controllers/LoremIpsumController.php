<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoremIpsumController extends Controller
{
    public function index()
    {
        return view('tools.lorem-ipsum');
    }

    public function generate(Request $request)
    {
        // Generate lorem ipsum text
        $text = 'Lorem ipsum...'; // This should be replaced with actual generation logic
        return view('tools.lorem-ipsum', ['text' => $text]);
    }
}
