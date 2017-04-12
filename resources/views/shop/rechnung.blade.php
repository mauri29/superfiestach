@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-danger">
                    <div class="panel-heading"><i class="fa fa-2x fa-clipboard" aria-hidden="true"></i>&nbsp;{{ trans('checkout.titlee') }}
                        <!--<form action="/rechnung" method="post" class="pull-right">
                            <select name="locale" onchange="this.form.submit();">
                                <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                                <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>                                
                            </select>
                            {{ csrf_field() }}
                        </form>-->
                    </div>

                    <div class="panel-body">
                        <p><a href="{{ route('product.shoppingCart') }}" type="button" class="btn btn-danger pull-right">{{ trans('post.kassa') }}</a></p>
                        <div class="post__header">
                            <strong>{{ trans('checkout.checkout') }} {{ trans('checkout.total') }} {{ $total }}.- CHF</strong>
                        </div><hr>
                                <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
                                    {{ Session::get('error') }}
                                </div>
                                <form class="form-horizontal" action="{{ route('rechnung') }}" method="post" id="rechnung-form">
                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">{{ trans('checkout.name') }}</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ Request::old('name') ?: '' }}" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                                        <label for="surname" class="col-md-4 control-label">{{ trans('checkout.surname') }}</label>
                                        <div class="col-md-6">
                                            <input id="surname" type="text" class="form-control" name="surname" value="{{ Request::old('surname') ?: '' }}" required autofocus>
                                            @if ($errors->has('surname'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('surname') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                        <label for="address" class="col-md-4 control-label">{{ trans('checkout.address') }}</label>
                                        <div class="col-md-6">
                                            <input id="address" type="text" class="form-control" name="address" value="{{ Request::old('address') ?: '' }}" required autofocus>
                                            @if ($errors->has('address'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('nummer') ? ' has-error' : '' }}">
                                        <label for="nummer" class="col-md-4 control-label">{{ trans('checkout.number') }}</label>
                                        <div class="col-md-6">
                                            <input id="nummer" type="text" class="form-control" name="nummer" value="{{ Request::old('nummer') ?: '' }}" required autofocus>
                                            @if ($errors->has('nummer'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('nummer') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('postleitzahl') ? ' has-error' : '' }}">
                                        <label for="postleitzahl" class="col-md-4 control-label">{{ trans('checkout.post') }}</label>
                                        <div class="col-md-6">
                                            <input id="postleitzahl" type="tel" class="form-control" name="postleitzahl" value="{{ Request::old('postleitzahl') ?: '' }}" required autofocus>
                                            @if ($errors->has('postleitzahl'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('postleitzahl') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                        <label for="city" class="col-md-4 control-label">{{ trans('checkout.city') }}</label>
                                        <div class="col-md-6">
                                            <input id="city" type="text" class="form-control" name="city" value="{{ Request::old('city') ?: '' }}" required autofocus>
                                            @if ($errors->has('city'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('city') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>                         
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-success center-block">{{ trans('checkout.buy') }}</button>
                                </form>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('js/checkout.js') }} "></script>
@endsection