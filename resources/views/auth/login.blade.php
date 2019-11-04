@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 mx-auto">
        <header class="lead py-4">
          <h1>Login</h1>
        </header>

        <div class="card">
            <form class="card-body" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" placeholder="email@example.com" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" placeholder="password" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <div class="checkbox mt-2">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
