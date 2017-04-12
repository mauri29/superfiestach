@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-2x fa-check-circle" aria-hidden="true"></i>&nbsp;{{ trans('order.title') }} 
                        <form action="/" method="post" class="pull-right">
                            <select name="locale" onchange="this.form.submit();">
                                <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                                <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>                                
                            </select>
                            {{ csrf_field() }}
                        </form>
                    </div>

                    <div class="panel-body">
                        <div class="media">
                            <div class="media-body">
                                <div class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
                                    <p>
                                    @foreach($orders as $order)
                                        <div class="post__author">                                
                                            <ul class="list-group">
                                                <h4 class="post__header">
                                                    <strong>{{ trans('order.created') }}</strong> {{ $order->created_at}}
                                                </h4>
                                                @foreach($order->cart->items as $item)
                                                    <li class="list-group-item">
                                                        <h4><span class="label label-primary pull-right">{{ $item['price'] }}.- CHF</span></h4>
                                                        (x{{ $item['qty'] }}) <strong> {{ $item['item']['title'] }}</strong>, {{ $item['weight'] }}gr.
                                                    </li>
                                                @endforeach
                                                <div class="panel-footer pull-right">
                                                    <strong>{{ trans('order.price') }} {{ $order->cart->totalPrice }}.- CHF</strong>
                                                </div>
                                            </ul><br><hr>
                                        </div>
                                    @endforeach
                                    </p><br>
                                    <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('order.product') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection