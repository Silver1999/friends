<div class="media">
    <a href="#"> <img src="..." class="mr-3" alt="{{$user->getNameOrUsername()}}"></a>
    <div class="media-body">
        <h5 class="mt-0"><a href="">{{$user->getNameOrUsername()}}</a></h5>
        @if($user->location)
            <p>{{$user->location}}</p>
            @endif
    </div>
</div>
