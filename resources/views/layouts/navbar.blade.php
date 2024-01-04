<div class="nav-container">
    <nav class="nav-inner transparent">

        <div class="navbar">
            <div class="container">
                <div class="row">

                    <div class="brand">
                        <a href="{{ route('home') }}">Showcase Project</a>
                    </div>

                    <div class="navicon">

                        <div class="menu-container">

                            <div class="inline circle dark">
                                <i class="icon ion-navicon"></i>
                            </div>

                            <div class="list-menu">
                                <i class="icon ion-close-round close-iframe"></i>
                                <div class="intro-inner">
                                    <ul id="nav-menu">
                                        <li><a href="{{ url('index.html') }}">Home</a></li>
                                        <li><a href="{{ url('about.html') }}">About</a></li>
                                        <li><a href="{{ url('blog.html') }}">Blog</a></li>
                                        <li><a href="{{ url('contact.html') }}">Contact</a></li>
                                        @auth
                                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        @else
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                        @endauth
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </nav>
</div>
