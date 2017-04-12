@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-2x fa-users" aria-hidden="true"></i>&nbsp; Your images
                        <form action="/about" method="post" class="pull-right">
                            <select name="locale" onchange="this.form.submit();">
                                <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                                <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                            </select>
                            {{ csrf_field() }}
                        </form> 
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            
                            <div class="logo">
                                <p><a href="{{ route('image.abrir') }}">Your Image</a></p>
                                <div class="col-sm-10 col-md-10 col-md-offset-1 col-sm-offset-1">
                                    <div class="containermauri">
                                        <a href="{{ $image }}"><img src="{{ $image }}" alt="Uploaded" width="150px"></a>
                                    </div>
                                    <a href="{{ route('image.abrir') }}">Upload your own image</a>
                                </div>
                            </div>
                                
                            
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection