<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function register_for_event()
    {
        return view('frontend.register');
    }

    public function contact_us(Request $request)
    {
        $data = [
          'name' => $request->name,
          'email' => $request->email,
          'body' => $request->body
        ];

        $email = new ContactMail($data);
        $admin_mail = config('app.admin_mail');
        Mail::to($admin_mail)->send($email);

        return redirect(route('index'))->with('status','Message has been Sent Successfully');
    }
}
