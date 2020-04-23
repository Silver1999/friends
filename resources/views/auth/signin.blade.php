@extends('page.app')
@section('content')
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in,
                        mattis vitae leo.</p>
                </div>
                <form method="POST" action="{{route('auth.signin')}}">
                    @csrf
                    <div class="form-group"><label for="email">Email</label><input
                            class="form-control{{$errors->has('email') ? ' is-invalid':' '}}"
                            name="email" type="email" id="email"
                            value="{{Request::old('email') ?: ''}}" required>
                    </div>
                    @if($errors->has('email'))
                        <span class="help-block text-danger">
                        {{$errors->first('email')}}
                    </span>
                    @endif
                    <div class="form-group"><label for="password">Password</label><input
                            class="form-control{{$errors->has('password') ? ' is-invalid':' '}}"
                            type="password" id="password"
                            name="password" value="{{Request::old('password') ?: ''}}" required></div>
                    <div class="form-group">
                        @if($errors->has('password'))
                            <span class="help-block text-danger">
                        {{$errors->first('password')}}
                    </span>
                        @endif
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox" name="remember"><label
                                class="form-check-label" for="checkbox">Remember me</label></div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Log In</button>
                </form>
            </div>
        </section>
    </main>
@endsection
