 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('dashboard') ? null : 'collapsed' }}"
                 href="{{ route('dashboard') }}">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li>

         <li class="nav-heading">Project</li>

         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('admin.project.*') ? null : 'collapsed' }}"
                 href="{{ route('admin.project.list') }}">
                 <i class='bx bx-folder'></i>
                 <span>List</span>
             </a>
         </li>

         <li class="nav-heading">Account</li>

         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('admin.user.*') ? null : 'collapsed' }}"
                 href="{{ route('admin.user.list') }}">
                 <i class="bi bi-person"></i>
                 <span>User</span>
             </a>
         </li>

         {{-- <li class="nav-heading">Notification</li>

         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('admin.inbox.*') ? null : 'collapsed' }}" href="#">
                 <i class="bi bi-info-circle"></i>
                 <span>Inbox</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('admin.activity') ? null : 'collapsed' }}" href="#">
                 <i class='bx bx-history'></i>
                 <span>Activity</span>
             </a>
         </li> --}}

         <li class="nav-heading">Extras</li>

         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('admin.register-toggle') ? null : 'collapsed' }}" href="#">
                 <i class="bi bi-arrow-right-square"></i>
                 <span>Register Toggle</span>
             </a>
         </li>
     </ul>

 </aside>
 <!-- End Sidebar-->
