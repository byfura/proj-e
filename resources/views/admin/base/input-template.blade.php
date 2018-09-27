@component('admin.header')
  <link rel="stylesheet" href="{{ secure_asset('vendor/multiselect/css/multi-select.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/jquery.tagsinput/src/jquery.tagsinput.css')}}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/intl-tel-input/build/css/intlTelInput.css')}}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/clockpicker/dist/bootstrap-clockpicker.min.css')}}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/jquery-labelauty/source/jquery-labelauty.css')}}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/multiselect/css/multi-select.css')}}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/ui-select/dist/select.css')}}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/select2/select2.css')}}">
  <link rel="stylesheet" href="{{ secure_asset('vendor/selectize/dist/css/selectize.css')}}">
@endcomponent

<div class="main-content">
  <div class="content-view">
    <div class="card">
      <div class="card-header no-bg b-a-0">
          @yield('title')
      </div>
      <div class="card-block">
        <div class="card-block">
          <form>
            
            @yield('inputs')

            <div class="form-group">
              <button class="btn btn-info pull-right">Submit</button>
            </div>

          </form>
      </div>
    </div>
  </div>

@component('admin.footer')
  <script src="{{secure_asset('vendor/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
  <script src="{{secure_asset('vendor/intl-tel-input//build/js/intlTelInput.min.js')}}"></script>
  <script src="{{secure_asset('vendor/moment/min/moment.min.js')}}"></script>
  <script src="{{secure_asset('vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script src="{{secure_asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{secure_asset('vendor/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
  <script src="{{secure_asset('vendor/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
  <script src="{{secure_asset('vendor/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
  <script src="{{secure_asset('vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
  <script src="{{secure_asset('vendor/select2/select2.js')}}"></script>
  <script src="{{secure_asset('vendor/selectize/dist/js/standalone/selectize.min.js')}}"></script>
  <script src="{{secure_asset('vendor/jquery-labelauty/source/jquery-labelauty.js')}}"></script>
  <script src="{{secure_asset('vendor/bootstrap-maxlength/src/bootstrap-maxlength.js')}}"></script>
  <script src="{{secure_asset('vendor/typeahead.js/dist/typeahead.bundle.js')}}"></script>
  <script src="{{secure_asset('vendor/multiselect/js/jquery.multi-select.js')}}"></script>

  @yield('addscripts')
@endcomponent