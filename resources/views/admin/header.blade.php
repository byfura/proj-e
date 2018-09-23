
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1"/>
    <meta name="msapplication-tap-highlight" content="no">
    
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Proj-E">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Proj-E">

    <meta name="theme-color" content="#4C7FF0">
    
    <title>Proj-E</title>

    <!-- page stylesheets -->
    <link rel="stylesheet" href="{{secure_asset('vendor/bower-jvectormap/jquery-jvectormap-1.2.2.css')}}"/>
    <!-- end page stylesheets -->

    <!-- page stylesheets -->
    <link rel="stylesheet" href="{{secure_asset('vendor/datatables/media/css/dataTables.bootstrap4.css')}}">
    <!-- end page stylesheets -->

    <!-- build:css({.tmp,app}) styles/app.min.css -->
    <link rel="stylesheet" href="{{secure_asset('vendor/bootstrap/dist/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{secure_asset('vendor/pace/themes/blue/pace-theme-minimal.css')}}"/>
    <link rel="stylesheet" href="{{secure_asset('vendor/font-awesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{secure_asset('vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{secure_asset('styles/app.css')}}" id="load_styles_before"/>
    <link rel="stylesheet" href="{{secure_asset('styles/app.skins.css')}}"/>
    <!-- endbuild -->
  </head>
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
              <a href="index.php">
                <i class="material-icons text-primary">home</i>
                <span>Home</span>
              </a>
            </li>
          </ul>
          <!-- dashboard -->

          <p class="nav-title">PRODUCT SECTION</p>
          <ul class="nav">
            <!-- product -->
            <li>
              <a href="javascript:;">
                <span class="menu-caret">
                  <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-success">storage</i>
                <span>Product</span>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Product Type</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Product Type Variabel</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Product Variabel Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Product Variabel Group Val</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /product -->
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
                  <a href="{{ url('admin/table') }}">
                    <span>Supplier Type</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Supplier Type Variabel</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Supplier Variabel Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
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
                  <a href="{{ url('admin/table') }}">
                    <span>Pricing Type</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Pricing Type Variabel</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Pricing Variabel Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Pricing Variabel Group Val</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /pricing -->
            <!-- promotion -->
            <li>
              <a href="{{ url('admin/table') }}">
                <i class="material-icons text-primary">local_offer</i>
                <span>Promotion</span>
              </a>
            </li>
            <!-- /promotion -->
            <!-- contract -->
            <li>
              <a href="javascript:;">
                <span class="menu-caret">
                  <i class="material-icons">arrow_drop_down</i>
                </span>
                <i class="material-icons text-success">create</i>
                <span>Contract</span>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Contract Variabel</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Contract Variabel Group</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /contract -->
            <!-- promotion -->
            <li>
              <a href="{{ url('admin/table') }}">
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
                  <a href="{{ url('admin/table') }}">
                    <span>Service Type</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Service Type Variabel</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Service Variabel Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
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
                  <a href="{{ url('admin/table') }}">
                    <span>Supplier Type</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Supplier Type Variabel</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Supplier Variabel Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
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
                  <a href="{{ url('admin/table') }}">
                    <span>Pricing Type</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Pricing Type Variabel</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Pricing Variabel Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Pricing Variabel Group Val</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Global Variable</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Global Variable Val</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Global Variable Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Global Variable Group Val</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /pricing -->
            <!-- promotion -->
            <li>
              <a href="{{ url('admin/table') }}">
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
                  <a href="{{ url('admin/table') }}">
                    <span>Service Type Material</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Service Material Group</span>
                  </a>
                </li>
                <li>
                  <a href="{{ url('admin/table') }}">
                    <span>Service Material Group Val</span>
                  </a>
                </li>
              </ul>
            </li>
            <!-- /material -->
            <!-- category -->
            <li>
              <a href="{{ url('admin/table') }}">
                <i class="material-icons text-warning">payment</i>
                <span>Category Type</span>
              </a>
            </li>
            <!-- /category -->
            <!-- booking -->
            <li>
              <a href="{{ url('admin/table') }}">
                <i class="material-icons text-primary">book</i>
                <span>Booking Type</span>
              </a>
            </li>
            <!-- /booking -->

            <li><hr/></li>
          </ul>

          <p class="nav-title">SETTING</p>
          <ul class="nav">
            <!-- privilage -->
            <li>
              <a href="{{ url('admin/user')}}">
                <i class="material-icons">person_add</i>
                <span>Privilage</span>
              </a>
            </li>
            <!-- /privilage -->
            <!-- group privilage -->
            <li>
              <a href="{{ url('admin/user')}}">
                <i class="material-icons">group_add</i>
                <span>Group Privilage</span>
              </a>
            </li>
            <!-- /group privilage -->
            <!-- language -->
            <li>
              <a href="{{ url('admin/table') }}">
                <i class="material-icons">language</i>
                <span>Language</span>
              </a>
            </li>
            <!-- /language -->
            <!-- currency & exchange rate -->
            <li>
              <a href="{{ url('admin/table') }}">
                <i class="material-icons">attach_money</i>
                <span>Currency & Exchange Rate</span>
              </a>
            </li>
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