<?php

namespace App\Http\Controllers\Frontend\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
        public function index(Request $request)
    {
        return view('frontend.pages.contact.contact_page');
    }
}
