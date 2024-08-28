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
            'file' => 'required|url', // Ensure that the file is a valid URL
            'type' => 'nullable|string',
            'length' => 'nullable|integer',
            'format' => 'nullable|string',
            'created' => 'nullable|date',
            'published' => 'nullable|date',
            'physical_copy' => 'nullable|boolean',
            'for_listening' => 'nullable|boolean',
            'free_download' => 'nullable|boolean',
            'download_link' => 'nullable|url',
            'digital_sale' => 'nullable|boolean',
            'digital_formats' => 'nullable|string|in:mp4,Blu-Ray',
            'sales_link' => 'nullable|url',
            'description' => 'nullable|string',
        ]);

         // Upload file to Cloudinary
         $uploadedFileUrl = Cloudinary::upload($request->file('file')->getRealPath(), [
            'resource_type' => 'auto' // auto determines the resource type (image, video, audio)
        ])->getSecurePath();


        $gallery = new Gallery();
        $gallery->title = $validatedData['title'];
        $gallery->file = $validatedData['file'];
        $gallery->type = $validatedData['type'];
        $gallery->length = $validatedData['length'];
        $gallery->format = $validatedData['format'];
        $gallery->created = $validatedData['created'];
        $gallery->published = $validatedData['published'];
        $gallery->physical_copy = $validatedData['physical_copy'];
        $gallery->for_listening = $validatedData['for_listening'];
        $gallery->free_download = $validatedData['free_download'];
        $gallery->download_link = $validatedData['download_link'];
        $gallery->digital_sale = $validatedData['digital_sale'];
        $gallery->digital_formats = $validatedData['digital_formats'];
        $gallery->sales_link = $validatedData['sales_link'];
        $gallery->description = $validatedData['description'];

        if($gallery->save()){
            sweetalert()->success('Event created successfully');
            return redirect('/gallery');
        }else{
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
