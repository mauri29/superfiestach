@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-danger">
                    <div class="panel-heading"><i class="fa fa-2x fa-cc-visa" aria-hidden="true"></i>&nbsp;{{ trans('checkout.title') }} 
                        <!--<form action="/checkout" method="post" class="pull-right">
                            <select name="locale" onchange="this.form.submit();">
                                <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                                <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>                           
                            </select>
                            {{ csrf_field() }}
                        </form>-->
                    </div>

                    <div class="panel-body">
                        <p>
                            <a href="{{ route('product.shoppingCart') }}" type="button" class="btn btn-danger pull-right">{{ trans('post.kassa') }}</a>
                        </p>
                        <div class="post__header">
                            <strong>{{ trans('checkout.checkout') }} {{ trans('checkout.total') }} {{ $total }}.- CHF</strong>
                        </div><hr>
                                <p><h4 class="pull">{{ trans('checkout.data') }}</h4></p>
                                <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
                                    {{ Session::get('error') }}
                                </div>

                                <form class="form-horizontal" action="{{ route('checkout') }}" method="post" id="checkout-form">

                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="name" class="col-md-4 control-label">{{ trans('checkout.name') }}</label>
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control" name="name" value="{{ Request::old('name') ?: '' }}" required name="name">
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
                                            <input id="surname" type="text" class="form-control" name="surname" value="{{ Request::old('surname') ?: '' }}" required name="surname">
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
                                            <input id="address" type="text" class="form-control" name="address" value="{{ Request::old('address') ?: '' }}" required name="address">
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
                                            <input id="nummer" type="text" class="form-control" name="nummer" value="{{ Request::old('nummer') ?: '' }}" required name="nummer">
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
                                            <input id="postleitzahl" type="tel" class="form-control" name="postleitzahl" value="{{ Request::old('postleitzahl') ?: '' }}" required name="postleitzahl">
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
                                            <input id="city" type="text" class="form-control" name="city" value="{{ Request::old('city') ?: '' }}" required name="city">
                                            @if ($errors->has('city'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('city') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div><hr>
                                    <p><h4 class="pull">{{ trans('checkout.card') }}</h4></p>
                                    <div class="form-group{{ $errors->has('card-name') ? ' has-error' : '' }}">
                                        <label for="card-name" class="col-md-4 control-label">{{ trans('checkout.cardowner') }}</label>
                                        <div class="col-md-6">
                                            <input id="card-name" type="text" class="form-control" name="card-name" value="{{ Request::old('card-name') ?: '' }}" required name="card-name">
                                            @if ($errors->has('card-name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('card-name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('card-number') ? ' has-error' : '' }}">
                                        <label for="card-number" class="col-md-4 control-label">{{ trans('checkout.cardnumber') }}</label>
                                        <div class="col-md-6">
                                            <input id="card-number" type="tel" class="form-control" name="card-number" value="{{ Request::old('card-number') ?: '' }}" required name="card-number">
                                            @if ($errors->has('card-number'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('card-number') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('card-expiry-month') ? ' has-error' : '' }}">
                                        <label for="card-expiry-month" class="col-md-4 control-label">{{ trans('checkout.cardexmonth') }}</label>
                                        <div class="col-md-6">
                                            <input id="card-expiry-month" type="tel" class="form-control" name="card-expiry-month" value="{{ old('card-expiry-month') }}" required name="month">
                                            @if ($errors->has('card-expiry-month'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('card-expiry-month') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('card-expiry-year') ? ' has-error' : '' }}">
                                        <label for="card-expiry-year" class="col-md-4 control-label">{{ trans('checkout.cardexyear') }}</label>
                                        <div class="col-md-6">
                                            <input id="card-expiry-year" type="tel" class="form-control" name="card-expiry-year" value="{{ old('card-expiry-year') }}" required name="year">
                                            @if ($errors->has('card-expiry-year'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('card-expiry-year') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('card-cvc') ? ' has-error' : '' }}">
                                        <label for="card-cvc" class="col-md-4 control-label">{{ trans('checkout.cvc') }}</label>
                                        <div class="col-md-6">
                                            <input id="card-cvc" type="tel" class="form-control" name="card-cvc" value="{{ old('card-cvc') }}" required name="cvc">
                                            @if ($errors->has('card-cvc'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('card-cvc') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>



                                    <!--<div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="name">Vorname</label>
                                                <input type="text" id="name" class="form-control" required name="name">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="surname">Nachname</label>
                                                <input type="text" id="surname" class="form-control" required name="surname">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="address">Addresse</label>
                                                <input type="text" id="address" class="form-control" required name="address">
                                            </div>
                                        </div>  
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="nummer">Nummer</label>
                                                <input type="text" id="nummer" class="form-control" required name="nummer">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="postleitzahl">Postleitzahl</label>
                                                <input type="text" id="postleitzahl" class="form-control" required name="postleitzahl">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="city">Stadt</label>
                                                <input type="text" id="city" class="form-control" required name="city">
                                            </div>
                                        </div> 
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="card-name">Card Holder Name</label>
                                                <input type="text" id="card-name" class="form-control" required>
                                            </div>
                                        </div>    
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="card-number">Credit Card Name</label>
                                                <input type="text" id="card-number" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label for="card-expiry-month">Expiration Month</label>
                                                        <input type="text" id="card-expiry-month" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label for="card-expiry-year">Expiration Year</label>
                                                        <input type="text" id="card-expiry-year" class="form-control" required>
                                                    </div>
                                                </div>                                          
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="card-cvc">cvc</label>
                                                <input type="text" id="card-cvc" class="form-control" required>
                                            </div>
                                        </div>                                                                                  
                                    </div>-->



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