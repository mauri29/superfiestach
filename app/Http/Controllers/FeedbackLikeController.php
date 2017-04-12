<?php
namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;
class FeedbackLikeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function store(Request $request, Feedback $feedback)
    {
        $this->authorize('like', $feedback);
        $like = $feedback->likes()->firstOrNew([
            'user_id' => $request->user()->id
        ]);
        if($like->exists){
            return response(null, 409);
        }
        $like->save();
        return response(null, 200);
    }
}