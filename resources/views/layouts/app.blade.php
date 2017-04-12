<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/sweetalert/sweetalert.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chewy:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rancho:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mouse+Memoirs:300,400,600,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,600" rel="stylesheet">

    <style type="text/css">
        /*navbar*/
        /* navbar */
        body { padding-top: 105px; }
        .navbar-default {
            background-color: #000;/*#F8F8F8;*/
            border-color: #fff;
            height: 100px;
        }

        .navbar-right {
            padding: 10px;
        }
        .navbar-form {
            border-style: none;
        }
        /* title */
        .navbar-default .navbar-brand {
            color: #fff;/*#777*/
        }
        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: #fff;/*#5E5E5E*/
        }
        /* link */
        .navbar-collapse {
            border-style: none;
        }
        .navbar-default .navbar-nav {
            border-style: none;
            background: #000;
        }
        .navbar-default .navbar-nav > li > a {
            border-style: none;
            color: #fff;/*#777*/
            border-color: #000;
        }
        .navbar-default .navbar-nav > li > a:hover,
        .navbar-default .navbar-nav > li > a:focus {
            color: #e2ecf2;
        }
        .navbar-default .navbar-nav > .active > a, 
        .navbar-default .navbar-nav > .active > a:hover, 
        .navbar-default .navbar-nav > .active > a:focus {
            color: #555;
            background-color: #E7E7E7;

        }
        .navbar-default .navbar-nav > .open > a, 
        .navbar-default .navbar-nav > .open > a:hover, 
        .navbar-default .navbar-nav > .open > a:focus {
            color: yellow;
            background-color: #84b3e7;

        }
        /* caret */
        .navbar-default .navbar-nav > .dropdown > a .caret {
            border-top-color: yellow;
            border-bottom-color: #fff;

        }
        .navbar-default .navbar-nav > .dropdown > a:hover .caret,
        .navbar-default .navbar-nav > .dropdown > a:focus .caret {
            border-top-color: yellow;
            border-bottom-color: #333;
        }
        .navbar-default .navbar-nav > .open > a .caret, 
        .navbar-default .navbar-nav > .open > a:hover .caret, 
        .navbar-default .navbar-nav > .open > a:focus .caret {
            border-top-color: red;
            border-bottom-color: #555;

        }
        /* mobile version */
        .navbar-default .navbar-toggle {
            border-color: yellow;
        }
        .navbar-default .navbar-toggle:hover,
        .navbar-default .navbar-toggle:focus {
            background-color: #84b3e7;
        }
        .navbar-default .navbar-toggle .icon-bar {
            background-color: yellow;

        }
        @media (max-width: 767px) {
            .navbar-default .navbar-nav .open .dropdown-menu > li > a {
                color: white;

            }
            .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
            .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
                color: #777;

            }
        }
        .dropdown-toggle:active, .open .dropdown-toggle {background:#87CEEB !important; color:yellow !important;}

        .dropdown.open {
            background: #474747;
        }



        /*navbar*/

            .thumbnail {
                background: #e5eeff;       
            }
            .thumbnail-caption-color{
                color: #fff;
            }
            .row .thumbnail {
                border:1;
                box-shadow:10;
                border-radius:3px;
            }
            .img-thumbnail{
                background-color:transparent
            }
            a.thumbnail:hover,
            a.thumbnail:focus,
            a.thumbnail.active {
              border-color: #0088cc;
              -webkit-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
              -moz-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
              box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
            }
            @import url(http://fonts.googleapis.com/css?family=Fjalla+One);
            @import url(http://fonts.googleapis.com/css?family=Gudea);


        .footer1 {
            background: #fff url("../images/footer/footer-bg.png") repeat scroll left top;
            padding-top: 40px;
            padding-right: 0;
            padding-bottom: 20px;
            padding-left: 0;/*  border-top-width: 4px;
            border-top-style: solid;
            border-top-color: #003;*/
        }



        .title-widget {
            color: #898989;
            font-size: 20px;
            font-weight: 300;
            line-height: 1;
            position: relative;
            text-transform: uppercase;
            font-family: 'Fjalla One', sans-serif;
            margin-top: 0;
            margin-right: 0;
            margin-bottom: 25px;
            margin-left: 0;
            padding-left: 28px;
        }

        .title-widget::before {
            background-color: #ea5644;
            content: "";
            height: 22px;
            left: 0px;
            position: absolute;
            top: -2px;
            width: 5px;
        }



        .widget_nav_menu ul {
            list-style: outside none none;
            padding-left: 0;
        }

        .widget_archive ul li {
            background-color: rgba(0, 0, 0, 0.3);
            content: "";
            height: 3px;
            left: 0;
            position: absolute;
            top: 7px;
            width: 3px;
        }


        .widget_nav_menu ul li {
            font-size: 13px;
            font-weight: 700;
            line-height: 20px;
            position: relative;
            text-transform: uppercase;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            margin-bottom: 7px;
            padding-bottom: 7px;
            width:95%;
        }



        .title-median {
            color: #636363;
            font-size: 20px;
            line-height: 20px;
            margin: 0 0 15px;
            text-transform: uppercase;
            font-family: 'Fjalla One', sans-serif;
        }

        .footerp p {font-family: 'Gudea', sans-serif; }


        #social:hover {
            -webkit-transform:scale(1.1); 
            -moz-transform:scale(1.1); 
            -o-transform:scale(1.1); 
            }
            #social {
                -webkit-transform:scale(0.8);
                /* Browser Variations: */
                -moz-transform:scale(0.8);
                -o-transform:scale(0.8); 
                -webkit-transition-duration: 0.5s; 
                -moz-transition-duration: 0.5s;
                -o-transition-duration: 0.5s;
            }           
        /* 
            Only Needed in Multi-Coloured Variation 
                                                       */
            .social-fb:hover {
                color: #3B5998;
            }
            .social-tw:hover {
                color: #4099FF;
            }
            .social-yo:hover {
                color: #d34836;
            }
            .social-em:hover {
                color: #f39c12;
            }
            .nomargin { 
                margin:0px; padding:0px;
            }


        .footer-bottom {
            background-color: #15224f;
            min-height: 30px;
            width: 100%;
        }
        .copyright {
            color: #fff;
            line-height: 30px;
            min-height: 30px;
            padding: 7px 0;
        }
        .design {
            color: #fff;
            line-height: 30px;
            min-height: 30px;
            padding: 7px 0;
            text-align: right;
        }
        .design a {
            color: #fff;
        }

        /*footer botones redes sociales*/
        .social:hover {
             -webkit-transform: scale(1.1);
             -moz-transform: scale(1.1);
             -o-transform: scale(1.1);
         }
         .social {
             -webkit-transform: scale(0.8);
             /* Browser Variations: */
             
             -moz-transform: scale(0.8);
             -o-transform: scale(0.8);
             -webkit-transition-duration: 0.5s;
             -moz-transition-duration: 0.5s;
             -o-transition-duration: 0.5s;
         }

        /*
            Multicoloured Hover Variations
        */
         
         #social-fb:hover {
             color: #3333FF;
         }
         #social-tw:hover {
             color: #99FFFF;
         }
         #social-yo:hover {
             color: #D34836;
         }
         #social-em:hover {
             color: #f39c12;
         }
    </style>

    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,300);
        footer { background-color:#0c1a1e; min-height:350px; font-family: 'Open Sans', sans-serif; }
        .footerleft { margin-top:50px; padding:0 36px; }
        .logofooter { margin-bottom:10px; font-size:25px; color:#fff; font-weight:700;}

        .footerleft p { color:#fff; font-size:12px !important; font-family: 'Open Sans', sans-serif; margin-bottom:15px;}
        .footerleft p i { width:20px; color:#999;}

        .Forma {
            color: #fff;
            font-family: 'Pacifico', sans-serif;
            transition: color 0.2s linear 0s, background 0.2s linear 0s;
        }
        .Forma .input {
            color: #000;
            font-family: 'Pacifico', sans-serif;
        }
        .Forma .botonn {
            background-color: #4CAF50;
        }

        .paddingtop-bottom {  margin-top:50px;}
        .footer-ul { list-style-type:none;  padding-left:0px; margin-left:2px;}
        .footer-ul li { line-height:29px; font-size:12px;}
        .footer-ul li a { color:#a0a3a4; transition: color 0.2s linear 0s, background 0.2s linear 0s; }
        .footer-ul i { margin-right:10px;}
        .footer-ul li a:hover {transition: color 0.2s linear 0s, background 0.2s linear 0s; color:#ff670f; }


         .icon-ul { list-style-type:none !important; margin:0px; padding:0px;}
         .icon-ul li { line-height:75px; width:100%; float:left;}
         .icon { float:left; margin-right:5px;}
         
         
         .copyright { min-height:40px; background-color:#000;}
         .copyright p { text-align:left; color:#FFF; padding:10px 0; margin-bottom:0px;}
         .heading7 { font-size:21px; font-weight:700; color:#d9d6d6; margin-bottom:22px;}
         .post p { font-size:12px; color:#FFF; line-height:20px;}
         .post p span { display:block; color:#8f8f8f;}
         .bottom_ul { list-style-type:none; float:right; margin-bottom:0px;}
         .bottom_ul li { float:left; line-height:40px;}
         .bottom_ul li:after { content:"/"; color:#FFF; margin-right:8px; margin-left:8px;}
         .bottom_ul li a { color:#FFF;  font-size:12px;}
    </style>

    <style type="text/css">
        /*Image Slider*/
        .carousel .item{
            background-image: url(http://www.webhostingreviewslist.com/wp-content/uploads/2013/04/Subtle-Light-Tile-Pattern-Vol5-1.jpg);
            background-repeat: repeat; 
        }
        .carousel-caption {
            padding: 0px;

        }
        .hide-bullets {
            list-style:none;
            margin-left: -40px;
            margin-top:20px;
        }
        .slide-content {
            color:white;
        }
        .slide-content p {
            font-size: 15px;
            margin-bottom: 0px;
        }
        .slide-content a {
            margin-top: 10px;
        }
        .slide-wrapper {
            margin-top: 5%;
        }
        .slide-image .thumbnail img {
            max-height: 200px;
        }
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' }; </script>
</head>
<body>
    <div id="app">
        @include('layouts.partials._navigation')
            @yield('content')
        @include('layouts.partials._footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    
    @if(notify()->ready())
        <script>
            swal({
                title: "{!! notify()->message() !!}",
                text: "{!! notify()->option('text') !!}",
                type: "{!! notify()->type() !!}",
                @if(notify()->option('timer'))
                    timer: {{ notify()->option('timer') }},
                    showConfirmButton: true,
                    //showCancelButton: true,
                    //confirmButtonColor: '#987463',
                    //confirmButtonText: 'Yes, sir',
                    //cancelButtonText: 'Not at all'
                @endif
            });
        </script>    
    @endif

    
    @if (Session::has('sweet_alert.alert'))
        <script>
            swal({
                text: "{!! Session::get('sweet_alert.text') !!}",
                title: "{!! Session::get('sweet_alert.title') !!}",
                timer: {!! Session::get('sweet_alert.timer') !!},
                type: "{!! Session::get('sweet_alert.type') !!}",
                showConfirmButton: "{!! Session::get('sweet_alert.showConfirmButton') !!}",
                confirmButtonText: "{!! Session::get('sweet_alert.confirmButtonText') !!}",
                confirmButtonColor: "#AEDEF4"

                // more options
            });
        </script>
    @endif
    

    <!-- ShoppingCart -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
    @yield('scripts')
    
    <!-- SweetAlert -->
    <script src="{{ asset('/sweetalert/sweetalert.min.js') }}"></script>
    @include('sweet::alert')
</body>
</html>
