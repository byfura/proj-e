@component('/admin.head')
  {{ $slot }}
@endcomponent

  <body>

    <div class="app">
      <!--sidebar panel-->
      <div class="off-canvas-overlay" data-toggle="sidebar"></div>
      <div class="sidebar-panel">
        <div class="brand">
          <!-- toggle offscreen menu -->
          <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen hidden-lg-up">
            <i class="material-icons">menu</i>
          </a>
          <!-- /toggle offscreen menu -->
          <!-- logo -->
          <a class="brand-logo">
            <img class="expanding-hidden" src="images/logo.png" alt=""/>
          </a>
          <!-- /logo -->
        </div>
        <div class="nav-profile dropdown">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <div class="user-image">
              <img src="images/avatar.jpg" class="avatar img-circle" alt="user" title="user"/>
            </div>
            <div class="user-info expanding-hidden">
              E-commerce User Name
              <small class="bold">Administrator</small>
            </div>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="javascript:;">Settings</a>
            <a class="dropdown-item" href="javascript:;">Upgrade</a>
            <a class="dropdown-item" href="javascript:;">
              <span>Notifications</span>
              <span class="tag bg-primary">34</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:;">Help</a>
            <a class="dropdown-item" href="">Logout</a>
          </div>
        </div>
        <!-- main navigation -->
        <nav>
          <p class="nav-title">ADMIN MENUS</p>
          <ul class="nav">
            <li>
              <a href="{{ url('/admin/table') }}">
                <i class="material-icons text-primary">home</i>
                <span>Dashboard</span>
              </a>
            </li>
            <li><hr></li>
          </ul>
          
          <!-- dashboard -->
          <p class="nav-title">CONTRACT SECTION</p>
          <ul class="nav">
            <li id="li-contract">
              <a href="{{ url('/admin/contractvar#li-contract') }}">
                <span class="menu-caret">
                  <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-primary">playlist_add_check</i>
                <span>Contract Variable</span>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/admin/contractvargroup#li-contract') }}">
                    <span>Contract Variable Group</span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="{{ url('/admin/paymenttype') }}">
                <i class="material-icons text-success">local_atm</i>
                <span>Payment Type</span>
              </a>
            </li>
            <li><hr></li>
          </ul>

          <p class="nav-title">PRODUCT SECTION</p>
          <ul class="nav">
            <!-- product -->
            <li id="li-product">
              <a href="javascript:;">
                <span class="menu-caret">
                  <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-success">storage</i>
                <span>Product</span>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/admin/producttype#li-product') }}">
                    <span>Product Type</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/producttypevar#li-product') }}">
                    <span>Product Type Variabel</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/productvargroup#li-product') }}">
                    <span>Product Variabel Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/productvargroupval#li-product') }}">
                    <span>Product Variabel Group Val</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /product -->
            <!-- supplier -->
            <li id="li-supplier">
              <a href="javascript:;">
                <span class="menu-caret">
                  <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-danger">store</i>
                <span>Supplier</span>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/admin/productsuppliertype#li-supplier') }}">
                    <span>Supplier Type</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/productsuppliertypevar#li-supplier') }}">
                    <span>Supplier Type Variabel</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/productsuppliervargroup#li-supplier') }}">
                    <span>Supplier Variabel Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/productsuppliervargroupval#li-supplier') }}">
                    <span>Supplier Variabel Group Val</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /supplier -->
            <!-- pricing -->
            <li id="li-pricing">
              <a href="javascript:;">
                <span class="menu-caret">
                  <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-warning">receipt</i>
                <span>Pricing</span>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/admin/productpricingtype#li-pricing') }}">
                    <span>Pricing Type</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/productpricingtypevar#li-pricing') }}">
                    <span>Pricing Type Variabel</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/productpricingvargroup#li-pricing') }}">
                    <span>Pricing Variabel Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/productpricingvargroupval#li-pricing') }}">
                    <span>Pricing Variabel Group Val</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /pricing -->
            <!-- promotion -->
            <li>
              <a href="{{ url('/admin/productpromotiontype') }}">
                <i class="material-icons text-primary">local_offer</i>
                <span>Promotion</span>
              </a>
            </li>
            <!-- /promotion -->
            <!-- contract -->
            <!-- /contract -->
            <!-- promotion -->
            <li>
              <a href="{{ url('/admin/table') }}">
                <i class="material-icons text-warning">payment</i>
                <span>Payment Type</span>
              </a>
            </li>
            <!-- /promotion -->
            
            <li><hr/></li>
          </ul>

          <p class="nav-title">SERVICE SECTION</p>
          <ul class="nav">
            <!-- service -->
            <li>
              <a href="javascript:;">
                <span class="menu-caret">
                  <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-success">storage</i>
                <span>Service</span>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Service Type</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Service Type Variabel</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Service Variabel Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Service Variabel Group Val</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /service -->
            <!-- supplier -->
            <li>
              <a href="javascript:;">
                <span class="menu-caret">
                  <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-danger">store</i>
                <span>Supplier</span>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Supplier Type</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Supplier Type Variabel</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Supplier Variabel Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Supplier Variabel Group Val</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /supplier -->
            <!-- pricing -->
            <li>
              <a href="javascript:;">
                <span class="menu-caret">
                  <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-warning">receipt</i>
                <span>Pricing</span>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Pricing Type</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Pricing Type Variabel</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Pricing Variabel Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Pricing Variabel Group Val</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Global Variable</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Global Variable Val</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Global Variable Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Global Variable Group Val</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /pricing -->
            <!-- promotion -->
            <li>
              <a href="{{ url('/admin/table') }}">
                <i class="material-icons text-primary">local_offer</i>
                <span>Promotion</span>
              </a>
            </li>
            <!-- /promotion -->
            <!-- material -->
            <li>
              <a href="javascript:;">
                <span class="menu-caret">
                  <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-success">create</i>
                <span>Material</span>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Service Type Material</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Service Material Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/table') }}">
                    <span>Service Material Group Val</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /material -->
            <!-- category -->
            <li>
              <a href="{{ url('/admin/table') }}">
                <i class="material-icons text-warning">payment</i>
                <span>Category Type</span>
              </a>
            </li>
            <!-- /category -->
            <!-- booking -->
            <li>
              <a href="{{ url('/admin/table') }}">
                <i class="material-icons text-primary">book</i>
                <span>Booking Type</span>
              </a>
            </li>
            <!-- /booking -->

            <li><hr/></li>
          </ul>

          <p class="nav-title"><span class="fa fa-cog"></span> SETTING</p>
          <ul class="nav">
            <!-- privilage -->
            <ul class="nav">
            <li id="li-user">
              <a href="{{ url('/admin/user#li-user') }}">
                <span class="menu-caret">
                  <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-success">group</i>
                <span>User</span>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/admin/group#li-user') }}">
                    <span>Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('/admin/privilege#li-user') }}">
                    <span>Privilege</span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="{{ url('/admin/language') }}">
                <i class="material-icons text-primary">translate</i>
                <span>Language</span>
              </a>
            </li>
            <li id="li-currency">
              <a href="{{ url('/admin/currency#li-currency') }}">
                <span class="menu-caret">
                  <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-warning">attach_money</i>
                <span>Currency</span>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('/admin/exchange#li-currency') }}">
                    <span>Exchange Rate</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
            <!-- /currency & rxchange rate -->

            <li><hr/></li>
          </ul>
        </nav>
        <!-- /main navigation -->
      </div>
      <!-- /sidebar panel -->

      <!-- content panel -->
      <div class="main-panel">
        <!-- top header -->
        <nav class="header navbar">
          <div class="header-inner">
            <div class="navbar-item navbar-spacer-right brand hidden-lg-up">
              <!-- toggle offscreen menu -->
              <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen">
                <i class="material-icons">menu</i>
              </a>
              <!-- /toggle offscreen menu -->
              <!-- logo -->
              <a class="brand-logo hidden-xs-down">
                <img src="images/logo_white.png" alt="logo"/>
              </a>
              <!-- /logo -->
            </div>
            <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="index.php">
              <span>Admin Dashboard</span>
            </a>
            <div class="navbar-search navbar-item">
              <form class="search-form">
                <i class="material-icons">search</i>
                <input class="form-control" type="text" placeholder="Search" />
              </form>
            </div>
            <div class="navbar-item nav navbar-nav">
              <div class="nav-item nav-link dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                  <span>English</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="javascript:;">English</a>
                  <a class="dropdown-item" href="javascript:;">Indonesia</a>
                </div>
              </div>
              <div class="nav-item nav-link dropdown">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="material-icons">notifications</i>
                  <span class="tag tag-danger">4</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right notifications">
                  <div class="dropdown-item">
                    <div class="notifications-wrapper">
                      <ul class="notifications-list">
                        <li>
                          <a href="javascript:;">
                            <div class="notification-icon">
                              <div class="circle-icon bg-success text-white">
                                <i class="material-icons">arrow_upward</i>
                              </div>
                            </div>
                            <div class="notification-message">
                              <b>Sean</b>
                              launched a new application
                              <span class="time">2 seconds ago</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:;">
                            <div class="notification-icon">
                              <div class="circle-icon bg-danger text-white">
                                <i class="material-icons">check</i>
                              </div>
                            </div>
                            <div class="notification-message">
                              <b>Removed calendar</b>
                              from app list
                              <span class="time">4 hours ago</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:;">
                            <span class="notification-icon">
                              <span class="circle-icon bg-info text-white">J</span>
                            </span>
                            <div class="notification-message">
                              <b>Jack Hunt</b>
                              has
                              <b>joined</b>
                              mailing list
                              <span class="time">9 days ago</span>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:;">
                            <span class="notification-icon">
                              <span class="circle-icon bg-primary text-white">C</span>
                            </span>
                            <div class="notification-message">
                              <b>Conan Johns</b>
                              created a new list
                              <span class="time">9 days ago</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="notification-footer">Notifications</div>
                  </div>
                </div>
              </div>
              <a href="javascript:;" class="nav-item nav-link nav-link-icon" data-toggle="modal" data-target=".chat-panel" data-backdrop="false">
                <i class="material-icons">chat_bubble</i>
              </a>
            </div>
          </div>
        </nav>

        <!-- /top header -->

        <!--Chat panel-->
        <div class="modal fade sidebar-modal chat-panel" tabindex="-1" role="dialog" aria-labelledby="chat-panel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="chat-header">
                <a class="pull-right" href="javascript:;" data-dismiss="modal">
                  <i class="material-icons">close</i>
                </a>
                <div class="chat-header-title">People</div>
              </div>
              <div class="modal-body flex scroll-y">
                <div class="chat-group">
                  <div class="chat-group-header">Favourites</div>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-online"></span>
                    <span>Catherine Moreno</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-online"></span>
                    <span>Denise Peterson</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-away"></span>
                    <span>Charles Wilson</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-away"></span>
                    <span>Melissa Welch</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-no-disturb"></span>
                    <span>Vincent Peterson</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Pamela Wood</span>
                  </a>
                </div>
                <div class="chat-group">
                  <div class="chat-group-header">Online</div>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-online"></span>
                    <span>Tammy Carpenter</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-away"></span>
                    <span>Emma Sullivan</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-no-disturb"></span>
                    <span>Andrea Brewer</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-online"></span>
                    <span>Betty Simmons</span>
                  </a>
                </div>
                <div class="chat-group">
                  <div class="chat-group-header">Other</div>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Denise Peterson</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Jose Rivera</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Diana Robertson</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>William Fields</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Emily Stanley</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Jack Hunt</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Sharon Rice</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Mary Holland</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Diane Hughes</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Steven Smith</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Emily Henderson</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Wayne Kelly</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Jane Garcia</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Jose Jimenez</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Rachel Burton</span>
                  </a>
                  <a href="javascript:;" data-toggle="modal" data-target=".chat-message">
                    <span class="status-offline"></span>
                    <span>Samantha Ruiz</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade chat-message" tabindex="-1" role="dialog" aria-labelledby="chat-message" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="chat-header">
                <div class="pull-right dropdown">
                  <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">more_vert</i>
                  </a>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" href="javascript:;">Profile</a>
                    <a class="dropdown-item" href="javascript:;">Clear messages</a>
                    <a class="dropdown-item" href="javascript:;">Delete conversation</a>
                    <a class="dropdown-item" href="javascript:;" data-dismiss="modal">Close chat</a>
                  </div>
                </div>
                <div class="chat-conversation-title">
                  <img src="images/face1.jpg" class="avatar avatar-xs img-circle m-r-1 pull-left" alt="">
                  <div class="overflow-hidden">
                    <span><strong>Charles Wilson</strong></span>
                    <small>Last seen today at 03:11</small>
                  </div>
                </div>
              </div>
              <div class="modal-body flex scroll-y">
                <p class="text-xs-center text-muted small text-uppercase bold m-b-1">Yesterday</p>
                <div class="chat-conversation-user them">
                  <div class="chat-conversation-message">
                    <p>Hey.</p>
                  </div>
                </div>
                <div class="chat-conversation-user them">
                  <div class="chat-conversation-message">
                    <p>How are the wife and kids, Taylor?</p>
                  </div>
                </div>
                <div class="chat-conversation-user me">
                  <div class="chat-conversation-message">
                    <p>Pretty good, Samuel.</p>
                  </div>
                </div>
                <p class="text-xs-center text-muted small text-uppercase bold m-b-1">Today</p>
                <div class="chat-conversation-user them">
                  <div class="chat-conversation-message">
                    <p>Curabitur blandit tempus porttitor.</p>
                  </div>
                </div>
                <div class="chat-conversation-user me">
                  <div class="chat-conversation-message">
                    <p>Goodnight!</p>
                  </div>
                </div>
                <div class="chat-conversation-user them">
                  <div class="chat-conversation-message">
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                  </div>
                </div>
              </div>
              <div class="chat-conversation-footer">
                  <button class="chat-left">
                    <i class="material-icons">face</i>
                  </button>
                  <div class="chat-input" contenteditable=""></div>
                  <button class="chat-right">
                    <i class="material-icons">photo</i>
                  </button>
                </div>
            </div>
          </div>
        </div>
        <!--/Chat panel-->