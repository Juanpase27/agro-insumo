<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailable;
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
        Mail::to('soporte@prueba.com')->send(new ContactMailable($request->all()));
        //return $request->all();
        return 'Mensaje enviado';
    }
}
