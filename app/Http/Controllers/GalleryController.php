<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docs = Gallery::latest()->paginate(10);
        return view('gallery.index', compact('docs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'file' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi,flv,mp3,wav,ogg|max:20000', // Add more mime types if needed
        'type' => 'nullable|string',
        'length' => 'nullable|string',
        'format' => 'nullable|string',
        'created' => 'nullable|date',
        'publish' => 'nullable|date',
        'copy' => 'nullable|string',
        'youtube' => 'nullable|string',
        'listening' => 'nullable|string',
        'download' => 'nullable|string',
        'price' => 'nullable|numeric',
        'description' => 'nullable|string',
    ]);

    if ($request->hasFile('file')) {

        try {
            // Optimize and upload the file to Cloudinary
            $uploadedFileUrl = Cloudinary::upload($request->file('file')->getRealPath(), [
                'resource_type' => 'auto'
            ])->getSecurePath();
        } catch (\Exception $e) {
            sweetalert()->error('Oops!'.$e->getMessage());
            return redirect()->back();
        }
    }else{
        $uploadedFileUrl='';
    }

    $gallery = new Gallery();
    $gallery->title = $validatedData['title'];
    $gallery->file = $uploadedFileUrl;
    $gallery->type = $validatedData['type'];
    $gallery->length = $validatedData['length'];
    $gallery->format = $validatedData['format'];
    $gallery->created = $validatedData['created'];
    $gallery->publish = $validatedData['publish'];
    $gallery->copy = $validatedData['copy'];
    $gallery->listening = $validatedData['listening'];
    $gallery->download = $validatedData['download'];
    $gallery->description = $validatedData['description'];
    $gallery->price = $validatedData['price'];
    $gallery->youtube = $validatedData['youtube'];

    if ($gallery->save()) {
        sweetalert()->success('Gallery item created successfully');
        return redirect('/gallery');
    } else {
        sweetalert()->error('Oops! Something went wrong');
        return redirect()->back();
    }
}


    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
