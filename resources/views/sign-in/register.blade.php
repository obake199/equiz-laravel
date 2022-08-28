@include('layouts.app')
@include('sign-in.stylesheet')
<?php //dd(asset('resources/views/sign-in/form.css')) ?>
{{-- <link rel="stylesheet" href="{{ asset('resources/views/sign-in/form.css') }}"> --}}
<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="/postregister">
            <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Spaper Register</h1>
            
            @if($errors->any())
                <p class="text-danger">{{$errors->first()}}</p>
            @endif

            <div class="form-floating">
                <input type="text" name="name" class="form-control" id="floatingName" placeholder="Full name Last name">
                <label for="floatingName">Name</label>
            </div>
            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingUsername" placeholder="Username">
                <label for="floatingUsername">Username</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
                <div class="btn-group">
                <a class="btn btn-lg btn-secondary" href="{{ url('/login') }}">Back</a>
            </div>
                <div class="btn-group">
                <button class="btn btn-lg btn-primary" type="submit">Sign in</button>
            </div>
        </form>
    </main>
</body>