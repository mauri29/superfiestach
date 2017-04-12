<div class="row">
	<div class="col-sm-12">
		<div id="my-slider" class="carousel slide" data-ride="carousel" data-interval="4000">
			<!-- Indicators dot nov -->
			<!--<ol class="carousel-indicators">
				<li data-target="#my-slider" data-slide-to="0" class="active"></li>
				<li data-target="#my-slider" data-slide-to="1"></li>
			</ol>-->
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="{{ $post->imga }}" alt="">
					<div class="carousel-caption">
						<p>{{ $post->descra }}</p>
					</div>
				</div>
				<div class="item">
					<img src="{{ $post->imgb }}" alt="">
					<div class="carousel-caption">
						<p>{{ $post->descrb }}</p>
					</div>
				</div>
				<div class="item">
					<img src="{{ $post->imgc }}" alt="">
					<div class="carousel-caption">
						<p>{{ $post->descrc }}</p>
					</div>
				</div>
				<div class="item">
					<img src="{{ $post->imgd }}" alt="">
					<div class="carousel-caption">
						<p>{{ $post->descrd }}</p>
					</div>
				</div>				
			</div>
			<!-- Controls or next and prev buttons -->
			<a href="#my-slider" class="left carousel-control" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a href="#my-slider" class="right carousel-control" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="col-sm-4" id="carousel-text"></div>
        <div id="slide-content" style="display: none;">
            <div id="slide-content-0">
                <h2>Slider One</h2>
                <p>Lorem Ipsum Dolor</p>
                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
            </div>
            <div id="slide-content-1">
                <h2>Slider Two</h2>
                <p>Lorem Ipsum Dolor</p>
                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
            </div>
        </div>
	</div>
</div>

<div class="row hidden-xs" id="slider-thumbs">
    <!-- Bottom switcher of slider -->
    <ul class="hide-bullets">
        <li data-target="#my-slider" data-slide-to="0" class="col-sm-3" class="active">
            <a class="thumbnail" id="carousel-selector-0"><img src="{{ $post->imga }}"></a>
        </li>
        <li data-target="#my-slider" data-slide-to="1" class="col-sm-3">
            <a class="thumbnail" id="carousel-selector-1"><img src="{{ $post->imgb }}"></a>
        </li>
        <li data-target="#my-slider" data-slide-to="2" class="col-sm-3">
            <a class="thumbnail" id="carousel-selector-2"><img src="{{ $post->imgc }}"></a>
        </li>
        <li data-target="#my-slider" data-slide-to="3" class="col-sm-3">
            <a class="thumbnail" id="carousel-selector-3"><img src="{{ $post->imgd }}"></a>
        </li>        
    </ul>
</div>



