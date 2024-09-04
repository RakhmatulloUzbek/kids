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
</head>

<body class="text-center">
<form class="form-signin" action="">
    <img class="mb-4" src="{{asset('assets')}}/favicon.ico" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
    <label for="inputEmail" class="sr-only">First name</label>
    <input type="text" id="inputEmail" name="first_name" class="form-control mt-2" placeholder="First name" required autofocus>
    <label for="inputEmail" class="sr-only">Last name</label>
    <input type="text" id="inputEmail" name="last_name" class="form-control mt-2" placeholder="Second name" required autofocus>
    <label for="email" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control mt-2" placeholder="Email address" required autofocus>
    <label for="password" class="sr-only">Password</label>
    <input type="password" id="inputEmail" name="password" class="form-control mt-2" placeholder="Password" required autofocus>
    <label for="inputPassword" class="sr-only">Password Confirm</label>
    <input type="password" id="inputPassword" class="form-control mt-2" placeholder="Password Confirm" required>
    <div class="custom-control custom-radio">
        <input type="radio" id="customRadio1" name="role" class="custom-control-input" required>
        <label class="custom-control-label" for="customRadio1">Teacher</label>
    </div>
    <div class="custom-control custom-radio">
        <input type="radio" id="customRadio2" name="role" class="custom-control-input" required>
        <label class="custom-control-label" for="customRadio2">Student</label>
    </div>
    <button class="btn btn-md btn-primary mt-2" type="submit">Sign up</button>
    <a href="{{route('signin')}}"><p class="mt-2 mb-3 text-muted">If oyu have a account Sign in </p></a>
    <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
</form>

</body>
</html>
