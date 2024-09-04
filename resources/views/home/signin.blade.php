<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assets')}}/favicon.ico">

    <title>Kids Art-Sign in</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets')}}/css/signin.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/css/shortcodes.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/css/shortcodes.css" rel="stylesheet" type="text/css">

    <link href="{{asset('assets')}}/css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />
    <!--[if IE 7]>
    <link href="{{asset('assets')}}/css/font-awesome-ie7.css" rel="stylesheet" type="text/css">
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="{{asset('assets')}}/js/modernizr-2.6.2.min.js"></script>
</head>

<body class="text-center">
@if($errors->any())
    <div class="column dt-sc-one-half">
        <div class="dt-sc-success-box">
            <p>This is error box with <a href="">link</a></p>
        </div>
    </div>
@endif

<form class="form-signin" action="{{route('logincheck')}}" method="post">
    @csrf
    <img class="mb-4" src="{{asset('assets')}}/favicon.ico" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control mt-2" placeholder="Password" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-md btn-primary" type="submit">Sign in</button>
    <a href="{{route('signup')}}"><p class="mt-2 mb-3 text-muted">If you don't have a account Sign up </p></a>
    <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
</form>


<script data-cfasync="false" src="{{asset('assets')}}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="{{asset('assets')}}/js/jquery.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.tabs.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery-easing-1.3.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.sticky.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.inview.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/validation.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.tipTip.minified.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/twitter/jquery.tweet.min.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/shortcodes.js"></script>
<script type="text/javascript" src="{{asset('assets')}}/js/custom.js"></script>
</body>
</html>
