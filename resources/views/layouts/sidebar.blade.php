<div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link @yield('dashboard') "  href="/dashboard">
          <span data-feather="home"></span>
          dashboard 
          {{-- <span class="sr-only">(current)</span> --}}
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @yield('student')"  href="/student">
          <span data-feather="user"></span>
          stundent
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @yield('subject')" href="/subject">
          <span data-feather="book"></span>
          subject
        </a>
      </li>
  </div>



  