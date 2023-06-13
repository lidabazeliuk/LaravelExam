<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'author' => 'required',
            'title' => 'required',
            'file_url' => 'required|url',
            'hashtags' => 'nullable',
            'publication_date' => 'required|date',
            'likes' => 'integer',
        ]);

        $photo = new Photo();
        $photo->author = $request->input('author');
        $photo->title = $request->input('title');
        $photo->file_url = $request->input('file_url');
        $photo->hashtags = $request->input('hashtags');
        $photo->publication_date = $request->input('publication_date');
        $photo->likes = $request->input('likes', 0); // Значення за замовчуванням - 0
        $photo->save();

        return response()->json(['message' => 'Фотографія успішно додана'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
