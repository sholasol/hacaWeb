<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\RentalImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Rental::with('firstImage')
        ->latest()->paginate(10);
        return view('rentals.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rentals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

         $request->validate([
            'title' => [ 'required', 'string',],
            'price' => ['required','numeric'],
            'size' => ['string'],
            'occupacy' => ['nullable','numeric'],
            'features' => ['nullable', 'array'],
            'images' => ['nullable', 'array'],
            'images.*' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'description' => ['nullable','string'],
        ]);

        //dd($request->all());


        DB::beginTransaction();
        
        try{
            //create room
            $rental = Rental::create([
                'title' => $request->title,
                'price' => $request->price,
                'size' => $request->size,
                'occupacy' => $request->occupancy,
                'description' => $request->description,
                'features' => $request->features ? implode(',', $request->features) : null,
            ]);

            

            //create room images - multiple
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $img) {
                    $imageName = time() . '_' . $img->getClientOriginalName();
                    $imgPath = $img->storeAs('rental', $imageName);

                    RentalImage::create([
                        'rental_id' => $rental->id,
                        'image' => $imgPath,
                    ]);
                }
            }

            DB::commit();
            sweetalert()->success('Room created successfully');
            return redirect('/rentals');
        }catch (\Exception $e) {
            DB::rollBack();
            sweetalert()->error('Oops! Something went wrong');
            return redirect('/create_rent');
        }

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rental $rental)
    {
        return view('rentals.edit', compact('rental'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rental $rental)
    {
       // dd($request->all());

        $request->validate([
            'title' => [ 'required', 'string',],
            'price' => ['required','numeric'],
            'size' => ['string'],
            'occupacy' => ['nullable','numeric'],
            'features' => ['nullable', 'array'],
            'images' => ['nullable', 'array'],
            'images.*' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'description' => ['nullable','string'],
        ]);

        DB::beginTransaction();
        
        try{
            //create room
            $upd = $rental->update([
                'title' => $request->title,
                'price' => $request->price,
                'size' => $request->size,
                'occupacy' => $request->occupancy,
                'description' => $request->description,
                'features' => $request->features ? implode(',', $request->features) : null,
            ]);

             // Handle file uploads
            if ($request->hasFile('images')) {
                // Delete existing images
                if($rental->rentalimages ){
                    foreach ($rental->rentalimages as $existingImage) {
                        $oldImagePath = public_path('asset/image/' . $existingImage->image);
                    
                        // Check if the file exists before attempting to delete
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }

                        // Delete the image record from the database
                        $existingImage->delete();
                    }
                }

                // Store new images
                foreach ($request->file('images') as $img) {
                    $imageName = time() . '_' . $img->getClientOriginalName();
                    $imgPath = $img->storeAs('rental', $imageName);
                    //$img->move(public_path('asset/image/rental'), $imageName);

                    // Construct the full image path
                    //$imgPath = 'rental/' . $imageName;

                    RentalImage::create([
                        'rental_id' => $rental->id,
                        'image' => $imgPath,
                    ]);

                }
            }

            DB::commit();

            sweetalert()->success('Room updated successfully');
            return redirect('/rentals');
        }catch (\Exception $e) {
            DB::rollBack();
            sweetalert()->error('Oops! Something went wrong');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rental $rental)
    {
        //
    }
}
