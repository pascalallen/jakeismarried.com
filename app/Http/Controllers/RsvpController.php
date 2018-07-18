<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rsvp;
use App\Mail\NewRsvp;
use App\Mail\UpdateRsvp;
use Illuminate\Support\Facades\Mail;
use Validator;

class RsvpController extends Controller
{
    public function new(Request $request)
    {
		$validator = Validator::make($request->all(), [
			'first_name' => 'required',
			'email' => 'required',
			'rsvp' => 'required',
        ]);
        
        if ($validator->fails()) {
			return redirect()
				->action('Controller@home')
				->withErrors($validator)
				->withInput();
        }
		
		$rsvp = new Rsvp();
		$rsvp->first_name = $request->first_name;
		$rsvp->last_name = $request->last_name;
		$rsvp->email = $request->email;
		$rsvp->comments = $request->comments;
		$rsvp->phone_number = $request->phone_number;
		$rsvp->rsvp = $request->rsvp;
		$rsvp->unique_id = uniqid();
		$rsvp->save();

		// Mail::to($request->email)->send(new ThankYou($rsvp));
		Mail::to(env('ADMIN_EMAIL'))->send(new NewRsvp($rsvp));
		
		return redirect()->action(
			'RsvpController@find', ['uniqid' => $rsvp->unique_id]
		);
    }
    
    public function find($uniqid)
    {
		$rsvp = Rsvp::where('unique_id', $uniqid)->first();

		if (!$rsvp) {
			return redirect()->action('Controller@home');
		}

    	return view('rsvps.show', ['rsvp' => $rsvp]);
    }
    
    public function update(Request $request, $uniqid)
    {
		$rsvp = Rsvp::where('unique_id', $uniqid)->first();

		if (!$rsvp) {
			return redirect()->action('Controller@home');
		}

		$rsvp->update($request->all());

		Mail::to(env('ADMIN_EMAIL'))->send(new UpdateRsvp($rsvp));

    	return view('rsvps.show', ['rsvp' => $rsvp]);
    }
    
    public function all()
    {
        $rsvps = Rsvp::all();

        if (!$rsvps) {
			return redirect()->action('Controller@home');
        }
        
        return view('rsvps.index', ['rsvps' => $rsvps]);
    }
}
