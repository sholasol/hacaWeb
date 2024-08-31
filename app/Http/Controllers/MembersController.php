<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::where('status', 'active')
        ->where('type', 'member')->get();
        return view('members.index', compact('data'));
    }
    public function business()
    {
        $data = User::where('status', 'active')
        ->where('type', 'business')->get();
        return view('members.business', compact('data'));
    }

    public function staff(){
        $data = User::where('status', 'active')
        ->latest()
        ->where('type', 'staff')
        ->orwhere('type', 'admin')->get();
        return view('members.staff', compact('data'));
    }

    public function inquiry()
    {
        $data = Contact::latest()->get();
        return view('inquiry.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('members.create_staff');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'type' => ['required', 'string'],
            'email' => ['required', 'string',  'unique:'.User::class],
            'password' => ['required', 'string'],
            'phone' => ['string', 'nullable'],
            'address' => ['string', 'nullable'],
            'avatar' => ['nullable'],
        ]);


        if ($request->hasFile('avatar')) {
            
            $img = $request->file('avatar');
            $imageName = time() . '_' . $img->getClientOriginalName();
            $imgPath = $img->storeAs('staff', $imageName);
        }else{
            $imgPath='';
        }

        $validated['avatar'] = $imgPath;
        $validated['password'] = Hash::make($request->password);


        $user = User::create($validated);

        if($user){

            sweetalert()->success('User created successfully');
                return redirect('/staff');
        }else{
                sweetalert()->error('Oops! something went wrong');
                return redirect()->back();
        }
    }

    public function payment()
    {
        $data = Payment::latest()->get();

        return view('payment.index', compact('data'));
    }

    public function payInvoice($id)
    {
        $payment = Payment::where('id', $id)->first();

        return view('payment.payInvoice', compact('payment'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $staff = User::where('id', $id)->first();
        return view('members.viewStaff', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $staff = User::where('id', $id)->first();
        return view('members.edit_staff', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'type' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone' => ['string', 'nullable'],
            'address' => ['string', 'nullable'],
            'avatar' => ['nullable'],
        ]);

        

        $staff = User::where('id', $id)->first();

        if ($request->hasFile('avatar')) {

            // Delete the old image if exists
            if ($staff->avatar) {
                $oldImagePath = public_path('asset/image/' . $staff->avatar);
        
                // Check if the file exists before attempting to delete
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $imageName = time() . '.' . $request->avatar->extension();
            $imgPath = $request->avatar->storeAs('staff', $imageName);
            $validated['avatar'] =  $imgPath; 
        }


        $user = $staff->update($validated);

        if($user){

            sweetalert()->success('User updated successfully');
                return redirect('/staff');
        }else{
                sweetalert()->error('Oops! something went wrong');
                return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
