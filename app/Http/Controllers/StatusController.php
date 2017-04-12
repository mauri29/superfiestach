<?php

namespace App\Http\Controllers;

use Alert;
use Auth;
use App\Models\User;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function postStatus(Request $request)
    {
    	$this->validate($request, [
    		'status' => 'required|max:2000',
    	]);
    	Auth::user()->statuses()->create([
    		'body' => $request->input('status'),
    	]);
        
    	return redirect()->route('home');
    }
    public function postReply(Request $request, $statusId)
    {
    	$this->validate($request, [
    		"reply-{$statusId}" => 'required|max:2000',
    	], [
    		'required' => 'The reply body is required.'
    	]);

    	$status = Status::notReply()->find($statusId);
    	
    	if(!$status) {
    		return redirect()->route('home');
    	}
    	if(!Auth::user()->isFriendsWith($status->user) && Auth::user()->id !== $status->user->id){
    		return redirect()->route('home');
    	}
    	$reply = Status::create([
    		'body' => $request->input("reply-{$statusId}"),
    	])->user()->associate(Auth::user());

    	$status->replies()->save($reply);

    	return redirect()->back();
    }

    public function getLikee($statusId)
    {
    	$status = Status::find($statusId);

    	if(!$status){
    		return redirect()->route('home');
    	}

    	if(!Auth::user()->isFriendsWith($status->user)){
    		return redirect()->route('home');
    	}

    	if(Auth::user()->hasLikeedStatus($status)){
    		return redirect()->back();
    	}

    	$likee = $status->likees()->create([]);
    	Auth::user()->likees()->save($likee);


    	return redirect()->back();
    }
}







