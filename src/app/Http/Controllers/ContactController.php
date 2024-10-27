<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

use App\Models\Contact;


class ContactController extends Controller
{
    
    public function confirm(Request $request)
  {
    $contact = $request->only(['name', 'email', 'tel', 'content']);
    return view('confirm', compact('contact'));
  }
    public function index()
    {
      return view('index');
    }
    public function store()
    {
      $contact = $request->only(['name', 'email', 'tel', 'content']);
      Contact::create($contact);
      return view('thanks');
    }

}
