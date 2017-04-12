@if($tags->count())
	<center>
		@foreach($tags as $tag)
			<a href="{{ route('posts.tagged', $tag->slug) }}" class="tag">{!! Markdown::convertToHtml(e($tag->name)) !!}</a>
		@endforeach
	</center><br>
@endif

