          <!-- bottom footer -->
          <div class="content-footer">
            <nav class="footer-right">
              <ul class="nav">
                <li>
                  <a href="javascript:;">Feedback</a>
                </li>
              </ul>
            </nav>
            <nav class="footer-left">
              <ul class="nav">
                <li>
                  <a href="javascript:;">
                    <span>Copyright</span>
                    &copy; 2016 Your App
                  </a>
                </li>
                <li class="hidden-md-down">
                  <a href="javascript:;">Privacy</a>
                </li>
                <li class="hidden-md-down">
                  <a href="javascript:;">Terms</a>
                </li>
                <li class="hidden-md-down">
                  <a href="javascript:;">help</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- /bottom footer -->
        </div>
        <!-- /main area -->
      </div>
      <!-- /content panel -->

    </div>

    <script type="text/javascript">
      window.paceOptions = {
        document: false,
        eventLag: false,
        restartOnPushState: false,
        restartOnRequestAfter: false,
        ajax: {
          trackMethods: [ 'POST','GET']
        }
      };
    </script>

   @component('admin.script')
      {{ $slot }}
   @endcomponent
    <!-- end initialize page scripts -->
    
  </body>
</html>
