<!DOCTYPE html>
<html lang="en">
@include ('layouts.walikelas.head')
<body>
@include('layouts.walikelas.sidebar')
@include('layouts.walikelas.header')
<div class="clearfix"></div>
  <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12">
		 
		      @yield('content')
		 
        </div>
      
        </div>
    <!-- End container-fluid-->
    
  @include('sweetalert::alert')

  @include ('layouts.walikelas.js')  


  </body>

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->
</html>
