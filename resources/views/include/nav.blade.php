<nav class="navbar navbar-light navbar-expand-lg bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="{{route('home')}}"><strong
                style="color: grey;font-size: 35px;"> Friends</strong><img id="logo"
                                                                           src="assets/img/tech/icons8-satellite_signal.png"></a>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
                @if(Auth::check())
                    <li class="nav-item" role="presentation"><a class="nav-link" href="blog-post-list.html">{{Auth::user()->getNameOrUsername}}</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="blog-post-list.html">Posts</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="blog-post.html">List of
                            friends</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link " href="#">Logout</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link " href="#" style="width: 150px;">Update
                            profile</a></li>
                    <input class="form-control" type="text">
                    <button class="btn btn-success" type="button">Go!</button>
                @else
                    <li role="presentation"><a class="nav-link" href="login.html">Login <img
                                src="assets/img/tech/icons8-grand_master_key.png"></a></li>
                    <li role="presentation"><a class="nav-link" href="registration.html">Register <img
                                src="assets/img/tech/icons8-add_user_male.png"></a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
