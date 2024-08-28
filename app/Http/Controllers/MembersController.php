<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
