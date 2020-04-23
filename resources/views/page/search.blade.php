@extends('page.app')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h3>Search results {{Request::input('search')}}</h3>
            @if(!$users->count())
                <p>User not found!</p>
            @else
                <div class="row">
                    <div class="col-lg-6">
                        @foreach($users as $user)
                            @include('include.usersearch')
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

