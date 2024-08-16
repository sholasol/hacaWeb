<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Front;
use App\Models\Contact;
use App\Models\Document;
use App\Models\Event;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::latest()->take(3)->get();
        return view('front.index', compact('events'));
    }
    public function about()
    {
        return view('front.about');
    }
    public function docs()
    {
        $docs = Document::latest()->paginate(10);
        return view('front.docs', compact('docs'));
    }
    public function news()
    {
        return view('front.news');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function event()
    {
        $events = Event::latest()->paginate(9);
        return view('front.event', compact('events'));
    }
    
    public function register()
    {
        return view('front.register');
    }

    public function community()
    {
        return view('front.community');
    }
    public function rent()
    {
        $rents = Rental::with('rentalimages')->paginate(5);

        return view('front.rent', compact('rents'));
    }
    public function business()
    {
        return view('front.business');
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
        //
    }

    public function contactus(Request $request){
        
        $data =  $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'subject' => ['required','string', 'max:255'],
            'message' => ['required','string', 'max:255'],
        ]);

        $contact = Contact::create($data);
        if($contact){
            sweetalert()->success('Enquiry message sent successfully.');

         return redirect('/contact');
        }else{
            sweetalert()->error('Oops! something went wrong.');
        }
        
    }

    public function regBiz(Request $request){
        //dd($request->all());

        $request->validate([
            'contact' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'community' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required','string'],
            'phone' => ['required','string', 'max:255'],
            'address' => ['required','string', 'max:255'],
            'avatar' => ['string', 'max:255'],
            'postcode' => ['string'], // Changed from 'zip' to 'postcode'
            'website' => ['string'],
            'city' => ['string'],
            'fee' => ['required', 'numeric'],
        ]);

        $contact = explode(' ', $request->contact);

        $firstName = $contact[0] ?? '';
        $lastName = $contact[count($contact) - 1] ?? '';

        $type = 'business';

        $user = User::create([
            'firstname' => $firstName,
            'lastname' => $lastName,
            'business_title' => $request->title,
            'community' => $request->community,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar' => $request->avatar,
            'address' => $request->address,
            'fee' => $request->fee,
            'type' => $type,
            'postcode' => $request->postcode,
            'website' => $request->website,
            'city' => $request->city,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            sweetalert()->success('Thank you! Your registration is successful');
    
            return redirect('/');
            }
            else{
                sweetalert()->error('Ooops! Something went wrong');
    
            return redirect('/');
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(Front $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Front $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Front $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Front $cr)
    {
        //
    }
}
