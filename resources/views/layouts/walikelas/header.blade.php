<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top gradient-scooter">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier">Search</i></a>
      </form>
    </li>
  </ul>
     
  
    <li class="nav-item">
        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="icon-logout" style="color: white;">logout</a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
    </li>
  

  </ul>
</nav>
</header>