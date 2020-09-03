   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       
       <center><h5 class="logo-text">Admin</h5></center>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
      </li>

      <li>
        <a href="#" class="waves-effect">
          <i class="icon-home"></i> <span>Manage</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/admin/list-class')}}"><i class="fa fa-circle-o"></i>Daftar Kelas</a></li>
           <li><a href="{{URL::to('/admin/list-student')}}"><i class="fa fa-circle-o"></i> Daftar Siswa</a></li>
           <li><a href="{{URL::to('/admin/list-teacher')}}"><i class="fa fa-circle-o"></i> Daftar Guru</a></li>
          <li><a href="{{URL::to('/admin/list/homeroom-teacher')}}"><i class="fa fa-circle-o"></i> Daftar Wali Kelas</a></li>

        </ul>
      </li>
      <li>
        <a href="{{URL::to('/admin/list-saving')}}" class="waves-effect">
          <i class="icon-home"></i> <span>Tabungan</span></i>
        </a>
      </li>


      </ul>
   
   </div>