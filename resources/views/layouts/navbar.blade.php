<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="d-flex justify-content-between align-items-center container">

        <a class="navbar-brand text-success logo h1 align-self-center" href="{{ url('index.html') }}">
            Zay
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
                        <a class="nav-link" href="{{ url('index.html') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about.html') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('shop.html') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact.html') }}">Contact</a>
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
                <a class="nav-icon d-none d-lg-inline" data-bs-toggle="modal" data-bs-target="#templatemo_search"
                    href="{{ url('#') }}">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
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
            </div>
        </div>
    </div>
</nav>
<div class="modal fade bg-white" id="templatemo_search" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
        <div class="w-100 mb-5 pt-1 text-right">
            <button class="btn-close" data-bs-dismiss="modal" type="button" aria-label="Close"></button>
        </div>
        <form class="modal-content modal-body border-0 p-0" action="" method="get">
            <div class="input-group mb-2">
                <input class="form-control" id="inputModalSearch" name="q" type="text"
                    placeholder="Search ...">
                <button class="input-group-text bg-success text-light" type="submit">
                    <i class="fa fa-fw fa-search text-white"></i>
                </button>
            </div>
        </form>
    </div>
</div>
