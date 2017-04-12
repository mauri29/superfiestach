<?php
namespace App\Policies;
use App\Models\User;
use App\Models\Feedback;
use Illuminate\Auth\Access\HandlesAuthorization;
class FeedbackPolicy
{
    use HandlesAuthorization;
    public function like(User $user, Feedback $feedback)
    {
        return $user->id !== $feedback->user->id;
    }
}