@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-2x fa-users" aria-hidden="true"></i>&nbsp; {{ trans('buy.title') }}
                        <form action="/buy" method="post" class="pull-right">
                            <select name="locale" onchange="this.form.submit();">
                                <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                                <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            </select>
                            {{ csrf_field() }}
                        </form>  
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1">
                                <div class="row">
                                    <div class="col-lg-5">
                                        @include('user.partials.userblock')
                                        <hr>
                                        @if(!$statuses->count())
                                            <p>{{ $user->name }} has not posted anything yet.</p>
                                        @else
                                            @foreach($statuses as $status)
                                                <div class="media">
                                                    <a class="pull-left" href="{{ route('profile.index', ['name' => $status->user->name]) }}">
                                                        <img class="media-object" alt="{{ $status->user->name }}" src="{{ $status->user->getAvatarAttribute() }}">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><a href="{{ route('profile.index', ['name' => $status->user->name]) }}">{{ $status->user->name }}</a></h4>
                                                        <p>{{ $status->body }}</p>
                                                        <ul class="list-inline">
                                                            <li>{{ $status->created_at->diffForHUmans() }}</li>
                                                            @if($status->user->id !== Auth::user()->id)
                                                                <li><a href="{{ route('status.likee', ['statusId' => $status->id]) }}">Like</a></li>
                                                            @endif
                                                            <li>{{ $status->likees->count() }} {{ str_plural('like', $status->likees->count()) }}</li>
                                                        </ul>

                                                        @foreach($status->replies as $reply)
                                                            <div class="media">
                                                                <a class="pull-left" href="{{ route('profile.index', ['name' => $reply->user->name]) }}">
                                                                    <img class="media-object" alt="{{ $reply->user->name }}" src="{{ $reply->user->getAvatarAttribute() }}">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h5 class="media-heading"><a href="{{ route('profile.index', ['name' => $reply->user->name]) }}">{{ $reply->user->name }}</a></h5>
                                                                    <p>{{ $reply->body }}</p>
                                                                    <ul class="list-inline">
                                                                        <li>{{ $reply->created_at->diffForHumans() }}</li>
                                                                        @if($reply->user->id !== Auth::user()->id)
                                                                            <li><a href="{{ route('status.likee', ['statusId' => $reply->id]) }}">Like</a></li>
                                                                        @endif
                                                                        <li>{{ $reply->likees->count() }} {{ str_plural('like', $reply->likees->count()) }}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                        @if($authUserIsFriend || Auth::user()->id === $status->user->id)
                                                            <form role="form" action="{{ route('status.reply', ['statusId' => $status->id]) }}" method="post">
                                                                <div class="form-group{{ $errors->has("reply-{$status->id}") ? ' has-error' : '' }}">
                                                                    <textarea name="reply-{{ $status->id }}" class="form-control" rows="2" placeholder="Reply to this status"></textarea>
                                                                    @if($errors->has("reply-{$status->id}"))
                                                                        <span class="help-block">{{ $errors->first("reply-{$status->id}") }}</span>
                                                                    @endif
                                                                </div>
                                                                <input type="submit" value="Reply" class="btn btn-info btn-sm">
                                                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                            </form>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="col-lg-4 col-lg-offset-3">
                                        @if(Auth::user()->hasFriendRequestPending($user))
                                            <p>Waiting for {{ $user->name }} to accept your request.</p>
                                        @elseif(Auth::user()->hasFriendRequestReceived($user))
                                            <a href="{{ route('friend.accept', ['name' => $user->name]) }}" class="btn btn-primary">Accept friend request</a>
                                        @elseif(Auth::user()->isFriendsWith($user))
                                            <p>You and {{ $user->name }} are friends.</p>
                                            <form action="{{ route('friend.delete', ['name' => $user->name]) }}" method="post">
                                                <input type="submit" value="Delete friend" class="btn btn-primary">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </form>
                                        @elseif(Auth::user()->id !== $user->id)
                                            <a href="{{ route('friend.add', ['name' => $user->name]) }}" class="btn btn-primary">Add as friend</a>
                                        @endif
                                        <h4>{{ $user->name }}'s friends.</h4>

                                        @if(!$user->friends()->count())
                                            <p>{{ $user->name }} has no friends</p>
                                        @else
                                            @foreach($user->friends() as $user)
                                                @include('user/partials/userblock')
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection