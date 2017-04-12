@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-2x fa-users" aria-hidden="true"></i>&nbsp; {{ trans('personal.title') }}
                        <form action="/about" method="post" class="pull-right">
                            <select name="locale" onchange="this.form.submit();">
                                <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                                <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            </select>
                            {{ csrf_field() }}
                        </form> 
                    </div>
                    <div class="panel-body">
                        <div class="media">
                            <div class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
                                <div class="row">
                                       
                                        <form role="form" action="{{ route('status.post') }}" method="post">
                                            <div class="form-group{{ $errors->has('status') ? ' has-error' : ''}}">
                                                <textarea placeholder="What's up {{ Auth::user()->name }}?" name="status" class="form-control" rows="2"></textarea>
                                                @if($errors->has('status'))
                                                    <span class="help-block">{{ $errors->first('status') }}</span>
                                                @endif
                                            </div>
                                            <button type="submit" class="btn btn-info pull-right">Super Fiesta</button>
                                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                                        </form>
                                        <hr>
                                    
                                    
                                </div>
                                <div class="row">
                                    
                                        @if(!$statuses->count())
                                            <p>{{ trans('personal.nocomment') }}</p>
                                        @else
                                            @foreach($statuses as $status)
                                                <div class="media">
                                                    <div class="pull-left" href="{{ route('profile.index', ['name' => $status->user->name]) }}">
                                                        <img class="media-object" alt="" src="{{ $status->channel->getImage() }}">
                                                    </div>
                                                    <div class="media-body">
                                                        <!-- link folgt -->
                                                        <h4 class="media-heading">
                                                            {{ $status->user->name }}
                                                        </h4>
                                                        <p>{{ $status->body }}</p>
                                                        <ul class="list-inline">
                                                            <li>{{ $status->created_at->diffForHUmans() }}</li> | 
                                                            <li>{{ $status->likees->count() }} {{ str_plural('like', $status->likees->count()) }}</li> | 
                                                            @if($status->user->id !== Auth::user()->id)
                                                                <li><a href="{{ route('status.likee', ['statusId' => $status->id]) }}" class="btn btn-warning"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like</a></li>
                                                            @endif
                                                            
                                                        </ul>

                                                        @foreach($status->replies as $reply)
                                                            <div class="media">
                                                                <div class="pull-left" href="{{ route('profile.index', ['name' => $reply->user->name]) }}">
                                                                    <img class="media-object" alt="{{ $reply->user->name }}" src="{{ $reply->user->getAvatarAttribute() }}">
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5 class="media-heading">{{ $reply->user->name }}</h5>
                                                                    <p>{{ $reply->body }}</p>
                                                                    <ul class="list-inline">
                                                                        <li>{{ $reply->created_at->diffForHumans() }}</li> | 
                                                                        <li>{{ $reply->likees->count() }} {{ str_plural('like', $reply->likees->count()) }}</li> | 
                                                                        @if($reply->user->id !== Auth::user()->id)
                                                                            <li><a href="{{ route('status.likee', ['statusId' => $reply->id]) }}" class="btn btn-warning"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like</a></li>
                                                                        @endif
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                        <form role="form" action="{{ route('status.reply', ['statusId' => $status->id]) }}" method="post">
                                                            <div class="form-group{{ $errors->has("reply-{$status->id}") ? ' has-error' : '' }}">
                                                                <textarea name="reply-{{ $status->id }}" class="form-control" rows="2" placeholder="{{ trans('personal.reply') }}"></textarea>
                                                                @if($errors->has("reply-{$status->id}"))
                                                                    <span class="help-block">{{ $errors->first("reply-{$status->id}") }}</span>
                                                                @endif
                                                            </div>
                                                            <input type="submit" value="{{ trans('personal.replicar') }}" class="btn btn-info btn-sm pull-right">
                                                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                        </form>
                                                    </div>
                                                </div>
                                            @endforeach
                                            {!! $statuses->render() !!}
                                        @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection