<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventImages;
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
            'img' => ['nullable'],
            'images' => ['nullable', 'array'],
            'images.*' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if ($request->hasFile('img')) {
            
            $img = $request->file('img');
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
            // Handle file uploads
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $img) {
                    $imgname = time() . '_' . $img->getClientOriginalName();
                    $imagePath = $img->storeAs('events', $imgname);
                    //$imagePath = str_replace('public/', '', $imagePath);

                    EventImages::create([
                        'event_id' => $event->id,
                        'image' => $imagePath,
                    ]);
                }
            }

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
            'img' => ['nullable'],
            'images' => ['nullable', 'array'],
            'images.*' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        if ($request->hasFile('img')) {
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

        if ($request->hasFile('img')) {
            
            $img = $request->file('img');
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


         // Handle file uploads
         if ($request->hasFile('images')) {
            // Delete existing images
            foreach ($event->eventImages as $existingImage) {
                $oldImagePath = public_path('asset/image/' . $existingImage->image);
               
                 // Check if the file exists before attempting to delete
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }

                // Delete the image record from the database
                $existingImage->delete();
            }

            // Store new images
            foreach ($request->file('images') as $img) {
                $imageName = time() . '_' . $img->getClientOriginalName();
                $imgPath = $img->storeAs('events', $imageName);
                //$imgPath = str_replace('public/', '', $imgPath);

                EventImages::create([
                    'event_id' => $event->id,
                    'image' => $imgPath
                ]);
            }


            
        }



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
        $id = $event->id;
    
        try {
            // Fetch all images associated with the event
            $eventImages = EventImages::where('event_id', $id)->get();
    
            // Delete each image file from storage and its database record
            foreach ($eventImages as $image) {
                // Delete the image file from storage
                $imagePath = public_path('asset/image/' . $image->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
    
                // Delete the image record from the database
                $image->delete();
            }
    
            // Delete the event itself
            $delEvent = $event->delete();
    
            if ($delEvent) {
                sweetalert()->success('Event deleted successfully');
                return redirect('/events');
            } else {
                sweetalert()->error('Oops! something went wrong');
                return redirect()->back();
            }
        } catch (\Exception $e) {
            // Return with an error message
            sweetalert()->error('Oops! something went wrong');
            return redirect()->back();
        }
    }
    
}
