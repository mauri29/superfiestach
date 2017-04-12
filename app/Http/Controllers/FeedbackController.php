<?php
namespace App\Http\Controllers;
use App\Models\Feedback;
use App\Models\Channel;
use Illuminate\Http\Request;
use App\Events\FeedbackWasCreated;
class FeedbackController extends Controller
{
    public function index(Request $request, Feedback $feedback)
    {
        //return 'hello';
        //return $feedback->with(['user'])->latestFirst()->get();
        return $feedback->with(['user'])->orderBy('created_at', 'desc')->get();
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);
        $feedback = $request->user()->feedbacks()->create([
            'body' => $request->body
        ]);
        //broadcast
        broadcast(new FeedbackWasCreated($feedback))->toOthers();
        return $feedback->load(['user']);
    }
}