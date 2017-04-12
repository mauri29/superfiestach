@extends('layouts.app')

@section('content')
    <div class="containermauri">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-2x fa-rss" aria-hidden="true"></i>&nbsp; {{ trans('search.found') }} "{{ Request::input('query') }}"
                        <form action="/search" method="post" class="pull-right">
                            <select name="locale" onchange="this.form.submit();">
                                <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                                <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>                           
                            </select>
                            {{ csrf_field() }}
                        </form> 
                    </div>

                    <div class="panel-body">
                        @if(!$products->count())
                            <p>{{ trans('search.nofound') }}</p>
                        @else
                            @foreach($products as $product)
                                @include('shop.partials/productblock')
                            @endforeach
                        @endif
                        <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('search.product') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection