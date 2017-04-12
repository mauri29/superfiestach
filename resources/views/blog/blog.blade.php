@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading"><i class="fa fa-2x fa-rss" aria-hidden="true"></i>&nbsp; {{ trans('blog.title') }}
                        <form action="/blog" method="post" class="pull-right">
                            <select name="locale" onchange="this.form.submit();">
                                <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                                <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>                               
                            </select>
                            {{ csrf_field() }}
                        </form>
                    </div>

                    <div class="panel-body">
                    @include('layouts.partials.sidebar')
                        <article class="article">
                            <center>{{ $posts->appends(Request::except('page'))->links()}}</center>
                            @include('posts.partials.list', [
                                'posts' => $posts
                            ])
                            <center>{{ $posts->appends(Request::except('page'))->links()}}</center>
                            <!--@include('layouts.partials.sidebar')-->
                            <a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('blog.product') }}</a>
                        </article>
                    </div>
                    @include('layouts.partials.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection
