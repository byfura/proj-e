 <!-- build:js({.tmp,app}) scripts/app.min.js -->
    <script src="{{secure_asset('vendor/jquery/dist/jquery.js')}}"></script>
    <!-- <script src="{{secure_asset('vendor/pace/pace.js')}}"></script> -->
    <script src="{{secure_asset('vendor/tether/dist/js/tether.js')}}"></script>
    <script src="{{secure_asset('vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
    <script src="{{secure_asset('vendor/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{secure_asset('scripts/constants.js')}}"></script>
    <script src="{{secure_asset('scripts/main.js')}}"></script>
    <!-- endbuild -->

    <!-- page scripts -->
    <script src="{{secure_asset('vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{secure_asset('vendor/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{secure_asset('vendor/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{secure_asset('vendor/flot-spline/js/jquery.flot.spline.js')}}"></script>
    <script src="{{secure_asset('vendor/bower-jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{secure_asset('data/maps/jquery-jvectormap-us-aea.js')}}"></script>
    <script src="{{secure_asset('vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.js')}}"></script>
    <script src="{{secure_asset('vendor/noty/js/noty/packaged/jquery.noty.packaged.min.js')}}"></script>
    <script src="{{secure_asset('scripts/helpers/noty-defaults.js')}}"></script>
    {{ $slot }}
    <!-- end page scripts -->

    <!-- initialize page scripts -->
    <script src="{{secure_asset('scripts/dashboard/dashboard.js')}}"></script>
    <!-- end initialize page scripts -->

    <!-- page scripts -->
    <script src="{{secure_asset('vendor/datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{secure_asset('vendor/datatables/media/js/dataTables.bootstrap4.js')}}"></script>
    <!-- end page scripts -->

    <!-- initialize page scripts -->