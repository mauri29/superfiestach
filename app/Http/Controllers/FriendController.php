<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function getIndex()
    {
    	$friends = Auth::user()->friends();
    	$requests = Auth::user()->friendRequests();

    	return view('friends.index')
    		->with('friends', $friends)
    		->with('requests', $requests);
    }

    public function getAdd($name)
    {
    	$user = User::where('name', $name)->first();
    	if(!$user) {
    		return redirect()
    			->route('home')
    			->with('info', 'That user could not be found');
    	}

    	if(Auth::user()->hasFriendRequestPending($user) || $user->hasFriendRequestPending(Auth::user())){
    		return redirect()
    			->route('profile.index', ['name' => $user->name])
    			->with('info', 'Friend request already pending.');
    	}

    	if(Auth::user()->isFriendsWith($user)){
    		return redirect()
    			->route('profile.index', ['name' => $user->name])
    			->with('info', 'You are already friends.');
    	}

    	Auth::user()->addFriend($user);

    	return redirect()
    		->route('profile.index', ['name' => $name])
    		->with('info', 'Friend request sent.');

    }

    public function getAccept($name)
    {
    	$user = User::where('name', $name)->first();

    	if(!$user) {
    		return redirect()
    			->route('home')
    			->with('info', 'That user could not be found');
    	}
    	if(Auth::user()->id === $user->id){
    		return redirect()->route('home');
    	}
    	if(!Auth::user()->hasFriendRequestReceived($user)){
    		return redirect()->route('home');
    	}

    	Auth::user()->acceptFriendRequest($user);

    	return redirect()
    		->route('profile.index', ['name' => $name])
    		->with('info', 'Friend request accepted.');
    }

    public function postDelete($name)
    {
        $user = User::where('name', $name)->first();

        if(!Auth::user()->isFriendsWith($user)){
            return redirect()->back();
        }

        Auth::user()->deleteFriend($user);

        return redirect()->back()->with('info', 'Friend deleted.');

    }

}
