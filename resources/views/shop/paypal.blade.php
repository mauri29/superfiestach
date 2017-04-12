@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-cc-paypal" aria-hidden="true"></i>&nbsp;Checkout with Paypal
                    <form action="/paypal" method="post" class="pull-right">
                        <select name="locale" onchange="this.form.submit();">
                            <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                            <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                        </select>
                        {{ csrf_field() }}
                    </form> 
                </div>

                <div class="panel-body">
                	<div class="row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                        	<h1>Checkout</h1>
                        	<h4>Your Total: {{ $total }}.- CHF</h4>
                            <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
                                {{ Session::get('error') }}
                            </div>
                        	<form action="{{ route('checkout') }}" method="post" id="checkout-form">
                        		<div class="row">
                        			<div class="col-xs-12">
                        				<div class="form-group">
                        					<label for="name">Name</label>
                        					<input type="text" id="name" class="form-control" required name="name">
                        				</div>
                        			</div>
                        			<div class="col-xs-12">
                        				<div class="form-group">
                        					<label for="address">Address</label>
                        					<input type="text" id="address" class="form-control" required name="address">
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
                        		</div>
                        		{{ csrf_field() }}
                        		<button type="submit" class="btn btn-success">Buy now</button>
                        	</form>
                        </div>
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