<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * points to contact page
     *
     * @return void
     */
    public function contact()
    {
        return view('contact', [
            'pageInfo' => Contact::first()
        ]);
    }
}
