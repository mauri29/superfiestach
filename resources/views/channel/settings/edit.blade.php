@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-2x fa-cog fa-fw" aria-hidden="true"></i>&nbsp;{{ trans('editc.title') }}
                        <form action="/channel/{channel}/edit" method="post" class="pull-right">
                            <select name="locale" onchange="this.form.submit();">
                                <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                                <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>                           
                            </select>
                            {{ csrf_field() }}
                        </form>                     
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
                                <form action="/channel/{{ $channel->slug }}/edit" method="post" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                                <label for="address">{{ trans('editc.street') }}</label>
                                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') ? old('address'): $channel->address }}">
                                                @if ($errors->has('address'))
                                                    <div class="help-block">
                                                        {{ $errors->first('address') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                                                <label for="number">{{ trans('editc.number') }}</label>
                                                <input id="number" type="text" class="form-control" name="number" value="{{ old('number') ? old('number'): $channel->number }}">
                                                @if ($errors->has('number'))
                                                    <div class="help-block">
                                                        {{ $errors->first('number') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group{{ $errors->has('post') ? ' has-error' : '' }}">
                                                <label for="post">{{ trans('editc.post') }}</label>
                                                <input id="post" type="tel" class="form-control" name="post" value="{{ old('post') ? old('post'): $channel->post }}">
                                                @if ($errors->has('post'))
                                                    <div class="help-block">
                                                        {{ $errors->first('post') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                                <label for="city">{{ trans('editc.city') }}</label>
                                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') ? old('city'): $channel->city }}">
                                                @if ($errors->has('city'))
                                                    <div class="help-block">
                                                        {{ $errors->first('city') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="slug">{{ trans('editc.userid') }}</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">{{ $channel->slug }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <label for="name">Name</label>
                                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') ? old('name'): $channel->name }}">
                                            @if ($errors->has('name'))
                                                <div class="help-block">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                        </div></div>
                                    </div>
                                    
                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label for="description">{{ trans('editc.interest') }}</label>
                                        <textarea name="description" id="description" class="form-control">{{ old('description') ? old('description'): $channel->description }}</textarea>
                                        @if ($errors->has('description'))
                                            <div class="help-block">
                                                {{ $errors->first('description') }}
                                            </div>
                                        @endif
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <img src="{{ $channel->getImage() }}" class="media-object">
                                        <label for="image">{{ trans('editc.bild') }}</label>
                                        <input type="file" name="image" id="image">
                                    </div>        

                                    <button class="btn btn-success" type="submit">{{ trans('editc.update') }}</button>

                                    {{ csrf_field() }}                    
                                    {{ method_field('PUT') }}                    
                                
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection