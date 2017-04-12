@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-danger">
                    <div class="panel-heading"><i class="fa fa-2x fa-money" aria-hidden="true"></i>&nbsp; {{ trans('pay.title') }}
                        <form action="/pay" method="post" class="pull-right">
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

                                <p>{!! trans('pay.intro') !!}</p>
                                <p>{!! trans('pay.main') !!}</p>
                                <p>{!! trans('pay.conclusion') !!}</p>
                                <p>{!! trans('pay.motto') !!}</p>  
                                <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('pay.product') }}</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection