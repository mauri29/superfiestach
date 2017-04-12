@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-2x fa-users" aria-hidden="true"></i>&nbsp; {{ trans('perfil.title') }}
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
                            <div class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
                                
                                        <div class="row">
                                            
                                                <form class="form-vertical" role="form" method="post" action="{{ route('profile.edit') }}">

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group{{ $errors->has('name') ? ' has-error': '' }}">
                                                                <label for="name" class="control-label">{{ trans('perfil.name') }}</label>
                                                                <input type="text" name="name" class="form-control" id="name" value="{{ Request::old('name') ?: Auth::user()->name }}">
                                                                @if($errors->has('name'))
                                                                    <span class="help-block">{{ $errors->first('name') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group{{ $errors->has('surname') ? ' has-error': '' }}">
                                                                <label for="surname" class="control-label">{{ trans('perfil.surname') }}</label>
                                                                <input type="text" name="surname" class="form-control" id="surname" value="{{ Request::old('surname') ?: Auth::user()->surname }}">
                                                                @if($errors->has('surname'))
                                                                    <span class="help-block">{{ $errors->first('surname') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success pull-right">{{ trans('perfil.button') }}</button>
                                                    </div>

                                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                                </form>
                                            
                                        </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection