<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Image;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string|max:255',
            'titre' => 'nullable|string|max:255',
            'activity' => 'nullable|string|max:255',
            'titre_activity' => 'nullable|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('public/images');

        Image::create([
            'file_name' => $request->file('image')->getClientOriginalName(),
            'file_path' => str_replace('public/', '', $imagePath),
            'description' => $request->description,
            'titre' => $request->titre,
            'activity' => $request->activity,
            'titre_activity' => $request->titre_activity,
        ]);

        return redirect()->route('activity.gallery')->with('success', 'Image uploaded successfully.');
    }

    public function showGallery()
    {
        $images = Image::all();
        return view('actevity.gallery')->with('images', $images);
    }

    public function showUploadForm()
    {
        return view('actevity.upload');
    }
    public function showU()
    {
        $images = Image::all();
        return view('actevity.show', compact('images'));
    }

    public function edit($id)
    {
        $image = Image::findOrFail($id);
        return view('actevity.edite')->with('image', $image);
    }

    public function update(Request $request, $id)
    {
        $image = Image::findOrFail($id);

        $request->validate([
            'description' => 'nullable|string|max:255',
            'titre' => 'nullable|string|max:255',
            'activity' => 'nullable|string|max:255',
            'titre_activity' => 'nullable|string|max:255',
        ]);

        $image->update([
            'description' => $request->description,
            'titre' => $request->titre,
            'activity' => $request->activity,
            'titre_activity' => $request->titre_activity,
        ]);

        return Redirect::back()->with('success', 'Image updated successfully.');
    }

    public function destroy($id)
    {
        $image = Image::findOrFail($id);
        $image->delete();
        return Redirect::back()->with('success', 'Image deleted successfully.');
    }
}
