@if(Session::has('info'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('info')}}
    </div>
@endif
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
@endif
