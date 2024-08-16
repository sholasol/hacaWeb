<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$data = Event::latest()->paginate(10);
        $data = Event::latest()->get();
        return view('events.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'date' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['nullable'],
        ]);

        if ($request->hasFile('image')) {
            
            $img = $request->file('image');
            $imageName = time() . '_' . $img->getClientOriginalName();
            $imgPath = $img->storeAs('events', $imageName);
        }else{
            $imgPath='';
        }

        $event = Event::create([
            'name' => $request->name,
            'date' => $request->date,
            'description' => $request->description,
            'image' => $imgPath,
        ]);

        if($event){
            sweetalert()->success('Event created successfully');
            return redirect('/events');
        }else{
            sweetalert()->error('Oops! something went wrong');
            return redirect('create_event');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'date' => ['required', 'string'],
            'description' => ['required', 'string'],
            'image' => ['nullable'],
        ]);

        if ($request->hasFile('image')) {
            // Delete existing images
            if($event->image ){
                $existingImage = $event->image;
                $oldImagePath = public_path('asset/image/' . $existingImage);
                
                // Check if the file exists before attempting to delete
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }

                // Delete the image record from the database
                $existingImage->delete();
            }
        }

        if ($request->hasFile('image')) {
            
            $img = $request->file('image');
            $imageName = time() . '_' . $img->getClientOriginalName();
            $imgPath = $img->storeAs('events', $imageName);
        }else{
            $imgPath='';
        }

        $event->update([
            'name' => $request->name,
            'date' => $request->date,
            'description' => $request->description,
            'image' => $imgPath,
        ]);

        if($event){
            sweetalert()->success('Event updated successfully');
            return redirect('/events');
        }else{
            sweetalert()->error('Oops! something went wrong');
            return redirect('create_event');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
