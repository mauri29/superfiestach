@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">  
                    <div class="panel-heading"><i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; {{ $post->title }}
                        <!--<form action="/post/{post}" method="post" class="pull-right">
                            <select name="locale" onchange="this.form.submit();">
                                <option value="de" {{ App::getLocale() == 'de' ? ' selected' : '' }}>Deutsch</option>
                                <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>                               
                            </select>
                            {{ csrf_field() }}
                        </form>-->
                    </div>

                    <div class="panel-body">
                        <article class="article">
                            <img src="{{ $post->image }}" class="author__image">
                            &nbsp;<a href="{{ route('blog') }}" class="author__name">Super Fiesta</a>
                            @foreach($post->tags as $tag)
                                <a href="{{ route('posts.tagged', $tag->slug) }}" class="tag pull-right">{!! Markdown::convertToHtml(e($tag->name)) !!}</a>
                            @endforeach
                            <!-- $post->product->fullName()? -->
                            <div class="author__post-time">&nbsp;{{ trans('post.posted') }} {{ $post->created_at->diffForHumans() }}<br><br>
                            <!--<h1 class="article__header">{{ $post->title }}</h1>-->
                            <h3 class="article__subheader">
                            {!! Markdown::convertToHtml($post->teaser) !!}
                            </h3>                        
                            <div class="fb-like pull-right" data-href="https://www.superfiesta.ch" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            <div class="article__body text-align: justify">
                                {!! Markdown::convertToHtml(e($post->body)) !!}
                            </div>
                            
                            <p><a href="{{ route('product.index') }}" type="button" class="btn btn-danger pull-right">{{ trans('post.product') }}</a></p>
                        </article>
                    </div>
                    @include('layouts.partials.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection






