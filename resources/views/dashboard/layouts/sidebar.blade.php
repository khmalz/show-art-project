<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <a class="text-decoration-none text-white" href="{{ route('home') }}">
            <h4>Showcase Project</h4>
        </a>
    </div>

    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="{{ url('index.html') }}">
                <svg class="nav-icon">
                    <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                </svg> Dashboard</a></li>

        <li class="nav-title">Project</li>

        <li class="nav-item"><a class="nav-link" href="{{ url('colors.html') }}">
                <svg class="nav-icon">
                    <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-folder"></use>
                </svg> List</a></li>

        <li class="nav-title">Account</li>

        <li class="nav-item"><a class="nav-link" href="{{ url('colors.html') }}">
                <svg class="nav-icon">
                    <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                </svg> Siswa</a></li>

        <li class="nav-divider"></li>

        <li class="nav-title">Extras</li>

        <li class="nav-item"><a class="nav-link" href="{{ url('colors.html') }}">
                <svg class="nav-icon">
                    <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-input"></use>
                </svg> Register Toggle</a></li>
    </ul>
    <button class="sidebar-toggler" data-coreui-toggle="unfoldable" type="button"></button>
</div>
