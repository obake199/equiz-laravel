@include('layouts.app')
@include('sign-in.stylesheet')
    <body class="text-center">
        <main class="form-signin w-100 m-auto">
            <form method="POST" action="/postlogin" class="mb-3">
                <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Spaper Login</h1>
                @if($errors->any())
                <p class="text-danger">{{$errors->first()}}</p>
                @elseif(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
                <div class="btn-group">
                <a class="btn btn-lg btn-secondary" href="{{ url('/') }}">Home</a>
            </div>
                <div class="btn-group">
                <button class="btn btn-lg btn-primary" type="submit">Sign in</button>
            </div>
        </form>
        <span>No account? Create <a href="{{ url('/register') }}">here</a></span>
    </main>


    
  </body>
</html>
