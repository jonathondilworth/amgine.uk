<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Mail;

class HomeController extends Controller
{
    //
    public function display(Request $request)
    {
    	return view('home.root');
    }

    public function message(Request $request)
    {

		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required'
		]);

		Message::create($request->all());

		Mail::send('email', 
			[
	        	'name' => $request->get('name'),
	        	'email' => $request->get('email'),
		        'form_message' => $request->get('message'),
    		], function($message) use ($request) {
	        	$message->from($request->email);
	        	$message->to('jon@dilworth.dev', $request->message)->subject("Contact Us Form: Amgine");
	        }
	    );

    	return back()->with('success', 'Thanks You! We\'ll Be In Touch!');
    }
}
