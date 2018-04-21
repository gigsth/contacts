<?php

namespace App\Http\Controllers;

use App\User;
use App\Contact;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $contacts =  $user->contacts;

        return View::make('contacts.index')
            ->with('user', $user)
            ->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return View::make('contacts.create')
            ->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'   => 'required',
            'mobile' => 'required'
        ]);

        if($validator->fails() )
        {
            return redirect()->route('users.contacts.creaate')
            ->with('user', $user)
            ->withErrors($validator);
        } 
        
        else
        {
            $contact = new Contact;
            $contact->name      = $request->input('name');
            $contact->mobile    = $request->input('mobile');
            $contact->user_id   = $user->id;
            $contact->save();
      
            return redirect()->route('users.contacts.show', [$user, $contact]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Contact $contact)
    {
        return View::make('contacts.show')
            ->with('user', $user)
            ->with('contact', $contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
