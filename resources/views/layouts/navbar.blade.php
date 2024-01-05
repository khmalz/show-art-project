<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="d-flex justify-content-between align-items-center container">

        <a class="navbar-brand text-success logo h2 align-self-center" href="{{ route('home') }}">
            Showcase Project
        </a>

        <button class="navbar-toggler border-0" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav"
            type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center navbar-collapse flex-fill d-lg-flex justify-content-lg-between collapse"
            id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('project.index') }}">Project</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill col-7 col-sm-auto mb-4 mt-3 pr-3">
                    <div class="input-group">
                        <input class="form-control" id="inputMobileSearch" type="text" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                @auth
                    <div class="dropdown">
                        <button class="nav-icon position-relative text-decoration-none border-0 bg-transparent"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" type="button" aria-expanded="false">
                            <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                @else
                    <a class="btn btn-success text-white" id="dropdownMenuButton1" type="button"
                        href="{{ route('login') }}">
                        Login
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>
