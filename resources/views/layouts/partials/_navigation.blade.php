<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ route('product.index') }}">
                <img src="https://ucarecdn.com/34134a26-904f-46dd-b2cb-0763c33847e0/LogotipoFinal.png" width="80"/>    
            </a>
            <a class="navbar-brand" href="{{ route('product.shoppingCart') }}">
                <span class="label label-pill label-danger">
                    {{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }}
                </span>
            </a>
            
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <!--<ul class="nav navbar-nav">
                
            </ul>-->

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right pull-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li>
                        <form class="navbar-form" role="search" action="{{ route('search.results') }}">
                            <div class="form-group">
                                <input type="text" class="form-control" name="query" placeholder="{{ trans('navigator.searchprod') }}">
                            </div>
                            <button type="submit" class="btn btn-warning pull-right">{{ trans('navigator.search') }}</button>
                        </form>
                    </li>
                    <li>
                        <a href="{{ url('/blog') }}"><i class="fa fa-2x fa-rss" aria-hidden="true"></i>&nbsp; {{ trans('navigator.blog') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('product.shoppingCart') }}"><i class="fa fa-2x fa-shopping-cart" aria-hidden="true"></i>&nbsp;{{ trans('navigator.kassa') }}
                            <span class="label label-pill label-danger">
                                {{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }}
                            </span> 
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/login') }}"><i class="fa fa-2x fa-sign-in" aria-hidden="true"></i>&nbsp;{{ trans('navigator.login') }}</a>
                    </li>
                    <li>
                        <a href="{{ url('/register') }}"><i class="fa fa-2x fa-cog fa-spin fa fa-fw"></i>&nbsp;{{ trans('navigator.register') }}</a>
                    </li>
                @else
                    <li>
                        <form class="navbar-form navbar-right" role="search" action="{{ route('search.results') }}">
                            <div class="form-group">
                                <input type="text" class="form-control" name="query" placeholder="{{ trans('navigator.searchprod') }}">
                            </div><button type="submit" class="btn btn-warning pull-right">{{ trans('navigator.search') }}</button>
                        </form>
                    </li>
                    <li>
                        <a href="{{ url('/blog') }}"><i class="fa fa-2x fa-rss" aria-hidden="true"></i>&nbsp; {{ trans('navigator.blog') }}</a>
                    </li>
                    <li>
                        <a href="{{ route('product.shoppingCart') }}"><i class="fa fa-2x fa-shopping-cart" aria-hidden="true"></i>&nbsp; {{ trans('navigator.kassa') }}
                            
                            <span class="label label-pill label-danger">
                                {{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }}
                            </span>
                            
                        </a>
                    </li>                       
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{ $channel->getImage() }}"> &nbsp;{{Auth::user()->name}} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu pull-left" role="menu">
                            <li>
                                <a href="{{ url('/channel/' . $channel->slug) }}"><i class="fa fa-2x fa-home fa-fw" aria-hidden="true"></i>&nbsp;{{ trans('navigator.myaccount') }}</a>

                                <a href="{{ url('/profile/edit') }}"><i class="fa fa-2x fa-user" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{ trans('navigator.profile') }}</a>

                                <a href="{{ url('/home') }}"><i class="fa fa-2x fa-comment" aria-hidden="true"></i>&nbsp;&nbsp;{{ trans('navigator.feedback') }}</a>

                                <a href="{{ url('/channel/' . $channel->slug . '/orders') }}" class="pull-left"><i class="fa fa-2x fa-check-circle" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;{{ trans('navigator.myorders') }}</a>
                                
                                <!--<a href="{{ url('/feedback') }}"><i class="fa fa-2x fa-comment-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;  {{ trans('navigator.feedback') }}</a>-->
                                
                                <!--<a href="{{ url('/upload') }}"><i class="fa fa-2x fa-upload" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; Upload Video</a>-->
                                
                                <!--<a href="{{ url('/videos') }}"><i class="fa fa-2x fa-video-camera" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; Your Videos</a>-->
                                
                                <a href="{{ url('/channel/' . $channel->slug . '/edit') }}" class="pull-left"><i class="fa fa-2x fa-cog fa-fw" aria-hidden="false"></i>&nbsp;{{ trans('navigator.settings') }}</a>
                                
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fa fa-2x fa-key fa-fw"></i>&nbsp;{{ trans('navigator.logout') }}
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>