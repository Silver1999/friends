@extends('page.app')
@section('content')
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registration</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in,
                        mattis vitae leo.</p>
                </div>


                <form method="POST" action="{{route('auth.signup')}}">
                    @csrf
                    <div class="form-group"><label for="name">Name</label><input
                            class="form-control{{$errors->has('username') ? ' is-invalid':' '}}" type="text"
                            id="username" name="username" placeholder="enter your name"
                            value="{{Request::old('username') ?: ''}}" required>
                        @if($errors->has('username'))
                            <span class="help-block text-danger">
                        {{$errors->first('username')}}
                    </span>
                        @endif
                    </div>
                    <div class="form-group"><label for="name">Password</label><input
                            class="form-control{{$errors->has('password') ? ' is-invalid':' '}}" type="password"
                            id="password" name="password" placeholder="enter your password" required>
                        @if($errors->has('password'))
                            <span class="help-block text-danger">
                        {{$errors->first('password')}}
                    </span>
                        @endif
                    </div>
                    <div class="form-group"><label for="password">Email</label><input
                            class="form-control{{$errors->has('email') ? ' is-invalid':' '}}" type="email" id="email"
                            name="email" placeholder="enter your email" value="{{Request::old('username') ?: ''}}"
                            required>
                        @if($errors->has('email'))
                            <span class="help-block text-danger">
                        {{$errors->first('email')}}
                    </span>
                        @endif
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" id="submit">Sign Up</button>
                </form>
            </div>
        </section>
    </main>
    <footer class="bg-white shadow page-footer dark">
        <div class="container">
            <div class="row"></div>
        </div>
        <div class="bg-primary footer-copyright">
            <p class="lead text-white">© 2020 Copyright Text</p>
        </div>
    </footer>


@endsection
