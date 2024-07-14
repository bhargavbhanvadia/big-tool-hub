<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextToSlugController extends Controller
{
    public function index()
    {
        return view('tools.text-to-slug');
    }

    public function generateSlug(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:255',
        ]);

        $slug = \Str::slug($request->input('text'));

        return view('tools.text-to-slug', ['slug' => $slug]);
    }
}
