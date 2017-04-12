@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-users fa-2x" aria-hidden="true"></i>&nbsp; {{ trans('about.title') }}
                    </div>
                    <div class="panel-body">
                    	<img src="qrcode.php?text=https://www.superfiesta.ch/post/Colombiana300mL&size=200&padding=10" alt="QR Code">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection