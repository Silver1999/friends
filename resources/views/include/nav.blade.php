<style>
    .fa, .fa-key:hover {
        color: yellow;
    }
    .fa, .fa-user-plus:hover {
        color: #2f8030;
    }


    #formm {
        width: 80%;
    }

    .btn-success {
        float: right;
    }
    @media (min-width: 992px) {
        .navbar-expand-lg .navbar-collapse {
            margin-top: 30px;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }
    }

</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container"><a class="navbar-brand logo" href="{{route('home')}}"><strong
                style="color: grey;font-size: 35px;"> Friends</strong><i class="fas  fa-broadcast-tower fa-lg"></i> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
                @if(Auth::check())
                    <li class="nav-item" role="presentation"><a class="nav-link"
                                                                href="blog-post-list.html">{{Auth::user()->getNameOrUsername()}}</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="blog-post-list.html">Posts</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="blog-post.html">List of
                            friends</a>
                    </li>
                    <li>
                        <button class="btn btn-success" type="button">Go!</button>
                        <input class="form-control" placeholder="search something :)"  id="formm" type="text"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link " href="{{route('logout')}}">Logout <i class="fas fa-sign-out-alt"></i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link " href="#">Update
                            profile <i class="fas fa-user-edit"></i> </a></li>
                @else
                    <li role="presentation"><a class="nav-link" href="{{route('auth.signin')}}">Login <i
                                class="fas fa-key"></i>
                    <li role="presentation"><a class="nav-link" href="{{route('auth.signup')}}">Register <i class="fas fa-user-plus"></i> </a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
