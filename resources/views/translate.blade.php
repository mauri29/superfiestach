@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-danger">
                    <div class="panel-heading"><i class="fa fa-2x fa-truck" aria-hidden="true"></i>&nbsp; Transport
                        <form action="shopping-cart" method="post" class="pull-right">
                            <select name="locale">
                                <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                                <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            </select>
                            {{ csrf_field() }}
                            <input type="submit" value="Choose">
                        </form>  
                    </div>
                    <div class="panel-body">
                        <p>{{ trans('greetings.hello', array('username' => $username, 'weather' => $weather)) }}</p>
                        <!-- pluralize -->
                        <p>{{ Lang::choice('greetings.new', $newMessages , array('count' => $newMessages)) }}</p>
                        <a href="{{ route('product.index') }}" type="button" class="btn btn-success pull-right">To the products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
              