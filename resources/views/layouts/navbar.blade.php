<nav class="container">
    <div class="fixed start-0 top-0 z-50 w-full border-gray-200 bg-white shadow">
        <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
            <a class="flex items-center space-x-3" href="{{ route('home') }}">
                <span
                    class="self-center whitespace-nowrap text-2xl font-semibold text-primary-700 md:text-3xl">Digiworks</span>
            </a>
            <div class="flex items-center space-x-3 md:order-2 md:space-x-0">
                @auth
                    <button
                        class="flex rounded-full bg-gray-800 text-sm focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 md:me-0"
                        id="user-menu-button" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom"
                        type="button" aria-expanded="false">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full bg-white" src="{{ asset('assets/admin/img/person.png') }}"
                            alt="user photo" />
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded-lg bg-white text-base shadow dark:divide-gray-600 dark:bg-gray-700"
                        id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->name }}</span>
                            <span
                                class="block truncate text-sm text-gray-500 dark:text-gray-400">{{ auth()->user()->email }}</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            @role('admin')
                                <li>
                                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                        href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                            @endrole
                            @role('siswa')
                                <li>
                                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                        href="{{ route('my-project') }}">My Project</a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                        href="{{ route('project.bookmark.index') }}">My Bookmark</a>
                                </li>
                            @endrole
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="block cursor-pointer px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                        onclick="this.parentElement.submit()">Sign out</a>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a class="rounded-lg bg-primary-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300"
                        type="button" href="{{ route('login') }}">Login</a>
                @endauth
                <button
                    class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                    data-collapse-toggle="navbar-user" type="button" aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="navbar-user">
                <ul
                    class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0">
                    <li>
                        <a class="{{ request()->routeIs('home') ? 'nav-active' : 'nav-unactive' }} block rounded px-3 py-2"
                            href="{{ route('home') }}" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a class="block rounded px-3 py-2" href="#about" aria-current="page">About</a>
                    </li>
                    <li>
                        <a class="{{ request()->routeIs('project.*') || request()->routeIs('my-project') ? 'nav-active' : 'nav-unactive' }} block rounded px-3 py-2"
                            href="{{ route('project.index') }}">Project</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
