@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-danger">
                    <div class="panel-heading"><i class="fa fa-2x fa-question" aria-hidden="true"></i>&nbsp; {{ trans('faq.title') }}
                        <form action="/faq" method="post" class="pull-right">
                            <select name="locale" onchange="this.form.submit();">
                                <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                                <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            </select>
                            {{ csrf_field() }}
                        </form>  
                    </div>
                    <div class="panel-body">
                        <p>{{ trans('faq.intro') }}</p>
                        <p>{{ trans('faq.main') }}</p>
                        <p>{{ trans('faq.conclusion') }}</p>
                        <p>{{ trans('faq.motto') }}</p>  
                        <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('faq.product') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection