<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'message'=>'required',
            'email'=>'required|email',
        ]);
        Mail::to('juan@prueba.com')->send(new ContactUsMailable($request->all()));
        return redirect()->route('contactanos.index')->with('info', 'Mensaje enviado');
    }
}
