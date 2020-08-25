<!DOCTYPE html>
<html lang="en">
@include ('layouts.admin.head')
<body>
@include('layouts.admin.sidebar')
@include('layouts.admin.header')
<div class="clearfix"></div>
  <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12">
		 
		      @yield('content')
		 
        </div>
      
        </div>
    <!-- End container-fluid-->
    
  @include('sweetalert::alert')

  @include ('layouts.admin.js')  


  </body>

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
</html>
