@if($posts->count())
    @foreach($posts as $post)
        <div class="post">
            <h1 class="post__header">
                <a href="{{ route('post.show', $post->slug) }}"> <img src="{{ $post->image }}" class="author__image"> {{ $post->title }}</a>
            </h1>
            
            <div class="post__author">
                <span class="post__time"><a href="{{ route('blog') }}">Super Fiesta </a>{{trans('blog.by')}} {{$post->created_at->diffForHumans()}}</span>
            </div>
            <div class="post__time"><!-- preview -->
                {{ $post->teaserde }}<br>
                {{ $post->teaseres }}
                <!--{!! Markdown::convertToHtml(e($post->teaser)) !!}-->
                <a href="{{ route('post.show', [$post->slug]) }}" class="btn btn-info pull-right" role="button">
                    {{ trans('blog.more') }}
                </a>
                <hr>
            </div>
            
        </div>            
    @endforeach
    
@else
    <p>{{ trans('blog.nopost') }}</p>
@endif
