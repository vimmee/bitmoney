<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Dashboard HTML Template</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="css/main.css?version=4.4.0" rel="stylesheet">
    <link href="cryptofont.css"rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.cryptofonts.com/1.3.1/cryptofont.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'> 
    <script src="https://kit.fontawesome.com/dfffd71f5f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


  </head>
  <body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
      <div class="search-with-suggestions-w">
        <div class="search-with-suggestions-modal">
          <div class="element-search">
            <input class="search-suggest-input" placeholder="Start typing to search..." type="text">
              <div class="close-search-suggestions">
                <i class="os-icon os-icon-x"></i>
              </div>
            </input>
          </div>
          <div class="search-suggestions-group">
            <div class="ssg-header">
              <div class="ssg-icon">
                <div class="os-icon os-icon-box"></div>
              </div>
              <div class="ssg-name">
                Projects
              </div>
              <div class="ssg-info">
                24 Total
              </div>
            </div>
            <div class="ssg-content">
              <div class="ssg-items ssg-items-boxed">
                <a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(img/company6.png)"></div>
                  <div class="item-name">
                    Integration with API
                  </div>
                </a><a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(img/company7.png)"></div>
                  <div class="item-name">
                    Development Project
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="search-suggestions-group">
            <div class="ssg-header">
              <div class="ssg-icon">
                <div class="os-icon os-icon-users"></div>
              </div>
              <div class="ssg-name">
                Top 3 Earning Customers
              </div>
              <div class="ssg-info">
                82391 Total
              </div>
            </div>
            <div class="ssg-content">
              <div class="ssg-items ssg-items-list">
                <a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(img/avatar1.png)"></div>
                  <div class="item-name">
                    John Mayers 13.41 BTC
                  </div>
                </a><a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(img/avatar1.png)"></div>
                  <div class="item-name">
                    Tom Müller 12.95 BTC
                  </div>
                </a><a class="ssg-item" href="users_profile_big.html">
                  <div class="item-media" style="background-image: url(img/avatar1.png)"></div>
                  <div class="item-name">
                    Kim Collins 12.64 BTC
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="search-suggestions-group">
            <div class="ssg-header">
              <div class="ssg-icon">
                <div class="os-icon os-icon-folder"></div>
              </div>
              <div class="ssg-name">
                Files
              </div>
              <div class="ssg-info">
                17 Total
              </div>
            </div>
            <div class="ssg-content">
              <div class="ssg-items ssg-items-blocks">
                <a class="ssg-item" href="#">
                  <div class="item-icon">
                    <i class="os-icon os-icon-file-text"></i>
                  </div>
                  <div class="item-name">
                    Work<span>Not</span>e.txt
                  </div>
                </a><a class="ssg-item" href="#">
                  <div class="item-icon">
                    <i class="os-icon os-icon-film"></i>
                  </div>
                  <div class="item-name">
                    V<span>ideo</span>.avi
                  </div>
                </a><a class="ssg-item" href="#">
                  <div class="item-icon">
                    <i class="os-icon os-icon-database"></i>
                  </div>
                  <div class="item-name">
                    User<span>Tabl</span>e.sql
                  </div>
                </a><a class="ssg-item" href="#">
                  <div class="item-icon">
                    <i class="os-icon os-icon-image"></i>
                  </div>
                  <div class="item-name">
                    wed<span>din</span>g.jpg
                  </div>
                </a>
              </div>
              <div class="ssg-nothing-found">
                <div class="icon-w">
                  <i class="os-icon os-icon-eye-off"></i>
                </div>
                <span>No files were found. Try changing your query...</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="layout-w">
        <!--------------------
        START - Mobile Menu
        -------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
          <div class="mm-logo-buttons-w">
            <a class="mm-logo" href="index.html"><img src="img/logo.png"><span>Clean Admin</span></a>
            <div class="mm-buttons">
              <div class="content-panel-open">
                <div class="os-icon os-icon-grid-circles"></div>
              </div>
              <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
              </div>
            </div>
          </div>
          <div class="menu-and-user">
            <div class="logged-user-w">
              <div class="avatar-w">
                <img alt="" src="img/avatar1.png">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  <?php echo $fetch_info['name']  ?>
                </div>
                <div class="logged-user-role">
                  USER
                </div>
              </div>
            </div>
            <!--------------------
            START - Mobile Menu List
            -------------------->
            <ul class="main-menu">
              <li class="has-sub-menu">
                <a href="index.html">
                  <div class="icon-w">
                    <div class="os-icon os-icon-layout"></div>
                  </div>
                  <span>Dashboard</span></a>
                <ul class="sub-menu">
                  
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="layouts_menu_top_image.html">
                  <div class="icon-w">
                    <div class="os-icon os-icon-layers"></div>
                  </div>
                  <span>Menu Styles</span></a>
                <ul class="sub-menu">
                  
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="apps_bank.html">
                  <div class="icon-w">
                    <div class="os-icon os-icon-package"></div>
                  </div>
                  <span>Applications</span></a>
                <ul class="sub-menu">
                  
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-file-text"></div>
                  </div>
                  <span>Pages</span></a>
                <ul class="sub-menu">
                  
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-life-buoy"></div>
                  </div>
                  <span>UI Kit</span></a>
                <ul class="sub-menu">
                  
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-mail"></div>
                  </div>
                  <span>Emails</span></a>
                <ul class="sub-menu">
                  
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-users"></div>
                  </div>
                  <span>Users</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="users_profile_big.html">Big Profile</a>
                  </li>
                  <li>
                    <a href="users_profile_small.html">Compact Profile</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-edit-32"></div>
                  </div>
                  <span>Forms</span></a>
                <ul class="sub-menu">
                  
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-grid"></div>
                  </div>
                  <span>Tables</span></a>
                <ul class="sub-menu">
                  
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-zap"></div>
                  </div>
                  <span>Icons</span></a>
                <ul class="sub-menu">
                  
                </ul>
              </li>
            </ul>
            <!--------------------
            END - Mobile Menu List
            -------------------->
            <div class="mobile-menu-magic">
              <h4>
                Invest Now
              </h4>
              <p>
                be safe with us
              </p>
              
            </div>
          </div>
        </div>
        <!--------------------
        END - Mobile Menu
        --------------------><!--------------------
        START - Main Menu
        -------------------->
        <div class="menu-w color-scheme-dark color-style-bright menu-position-side menu-side-left menu-layout-mini sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
          <div class="logo-w">
            <a class="logo" href="index.html">
              <div class="logo-element"></div>
              <div class="logo-label">
                Clean Admin
              </div>
            </a>
          </div>
          <div class="logged-user-w avatar-inline">
            <div class="logged-user-i">
              <div class="avatar-w">
                <img alt="" src="img/avatar1.png">
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  <?php echo $fetch_info['name']  ?>
                </div>
                <div class="logged-user-role">
                  USER:
                </div>
              </div>
              <div class="logged-user-toggler-arrow">
                <div class="os-icon os-icon-chevron-down"></div>
              </div>
              <div class="logged-user-menu color-style-bright">
                <div class="logged-user-avatar-info">
                  <div class="avatar-w">
                    <img alt="" src="img/avatar1.png">
                  </div>
                  <div class="logged-user-info-w">
                    <div class="logged-user-name">
                      <?php echo $fetch_info['name']  ?>
                    </div>
                    <div class="logged-user-role">
                      USER:
                    </div>
                  </div>
                </div>
                <div class="bg-icon">
                  <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
                <ul>
                  <li>
                    <a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a>
                  </li>
                  <li>
                    <a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                  </li>
                  <li>
                    <a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a>
                  </li>
                  <li>
                    <a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a>
                  </li>
                  <li>
                    <a href="../index.html"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <h1 class="menu-page-header">
            Page Header
          </h1>
          <ul class="main-menu">
            <li class="sub-header">
              <span>Layouts</span>
            </li>
            <li class="selected has-sub-menu">
              <a href="index.html">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Dashboard</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Dashboard
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-layout"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="layouts_menu_top_image.html">
                <div class="icon-w">
                  <div class="os-icon os-icon-wallet-loaded"></div>
                </div>
                <span>Menu Styles</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Menu Styles
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    
                  </ul>
                </div>
              </div>
            </li>
            <li class="sub-header">
              <span>Options</span>
            </li>
            <li class=" has-sub-menu">
              <a href="apps_bank.html">
                <div class="icon-w">
                  <div class="os-icon os-icon-bar-chart-stats-up"></div>
                </div>
                <span>Applications</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Applications
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-bar-chart-stats-up"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                                      </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-bar-chart-up"></div>
                </div>
                <span>Pages</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Pages
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-bar-chart-stats-up"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-pie-chart-3"></div>
                </div>
                <span>UI Kit</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  UI Kit
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-pie-chart-3"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    
                  </ul>
                </div>
              </div>
            </li>
            <li class="sub-header">
              <span>Elements</span>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-coins-4"></div>
                </div>
                <span>Emails</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Emails
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-coins-4"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                   
                  </ul>
               
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-edit-32"></div>
                </div>
                <span>Forms</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Forms
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-edit-32"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-grid"></div>
                </div>
                <span>Tables</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Tables
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-grid"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-zap"></div>
                </div>
                <span>Icons</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Icons
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-zap"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    
                  </ul>
                </div>
              </div>
            </li>
          </ul>
          <div class="side-menu-magic">
            <h4>
              Light Admin
            </h4>
            <p>
              Clean Bootstrap 4 Template
            </p>
            
          </div>
        </div>
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
          <!--------------------
          START - Top Bar
          -------------------->
          <div class="top-bar color-scheme-bright">
            <div class="fancy-selector-w">
              <div class="fancy-selector-current">
                <div class="fs-img">
                  <img alt="" src="img/card1.png">
                </div>
                <div class="fs-main-info">
                  <div class="fs-name">
                    <span>Wallet</span><strong>BTC</strong>
                  </div>
                  <div class="fs-sub">
                    <span>Balance:</span><strong>$ <?php echo $fetch_info['usd']  ?></strong>
                    
                  </div>
                </div>
                <div class="fs-selector-trigger">
                  <i class="os-icon os-icon-arrow-down4"></i>
                </div>
              </div>
              <div class="fancy-selector-options">
                
                <div class="fancy-selector-option active">
                  <div class="fs-img">
                    <img alt="" src="img/card1.png">
                  </div>
                  <div class="fs-main-info">
                    <div class="fs-name">
                      <span>Wallet</span><strong></strong>
                    </div>
                    <hr>
                    <div class="fs-sub">
                      <span>BTC:</span><strong><?php echo $fetch_info['invest']  ?> </strong>
                      <br>

                      
                      <span>USD:</span><strong>$ <?php echo $fetch_info['usd']  ?> </strong>
                    </div>
                  </div>
                </div>
                
                <div class="fancy-selector-actions text-right">
                  <a class="btn btn-primary" href="#"><i class="os-icon os-icon-ui-22"></i><span>Add Account</span></a>
                </div>
              </div>
            </div>
            <!--------------------
            START - Top Menu Controls
            -------------------->
            <div class="top-menu-controls">
              <div class="element-search autosuggest-search-activator">
                <input placeholder="Start typing to search..." type="text">
              </div>
              <!--------------------
              START - Messages Link in secondary top menu
              -------------------->
              <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left">
                <i class="os-icon os-icon-mail-14"></i>
                
                <div class="os-dropdown light message-list">
                  <ul>
                    <li>
                      <a href="#">
                        <div class="user-avatar-w">
                          <img alt="" src="img/avatar1.png">
                        </div>
                        <div class="message-content">
                          
                          <h6 class="message-title">
                            No messages yet
                          </h6>
                        </div>
                      </a>
                    </li>
                    
                    </li>
                  </ul>
                </div>
              </div>
              <!--------------------
              END - Messages Link in secondary top menu
              --------------------><!--------------------
              START - Settings Link in secondary top menu
              -------------------->
              <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left">
                <i class="os-icon os-icon-ui-46"></i>
                <div class="os-dropdown">
                  <div class="icon-w">
                    <i class="os-icon os-icon-ui-46"></i>
                  </div>
                  <ul>
                    <li>
                      <a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a>
                    </li>
                    <li>
                      <a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing Info</span></a>
                    </li>
                    <li>
                      <a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My Invoices</span></a>
                    </li>
                    <li>
                      <a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a>
                    </li>
                  </ul>
                </div>
              </div>
              <!--------------------
              END - Settings Link in secondary top menu
              --------------------><!--------------------
              START - User avatar and menu in secondary top menu
              -------------------->
              <div class="logged-user-w">
                <div class="logged-user-i">
                  <div class="avatar-w">
                    <img alt="" src="img/avatar1.png">
                  </div>
                  <div class="logged-user-menu color-style-bright">
                    <div class="logged-user-avatar-info">
                      <div class="avatar-w">
                        <img alt="" src="img/avatar1.png">
                      </div>
                      <div class="logged-user-info-w">
                        <div class="logged-user-name">
                          <?php echo $fetch_info['name']  ?>
                        </div>
                        <div class="logged-user-role">
                          USER:
                        </div>
                      </div>
                    </div>
                    <div class="bg-icon">
                      <i class="os-icon os-icon-wallet-loaded"></i>
                    </div>
                    <ul>
                      <li>
                        <a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a>
                      </li>
                      <li>
                        <a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                      </li>
                      <li>
                        <a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a>
                      </li>
                      <li>
                        <a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a>
                      </li>
                      <li>
                        <a href="../index.html"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--------------------
              END - User avatar and menu in secondary top menu
              -------------------->
            </div>
            <!--------------------
            END - Top Menu Controls
            -------------------->
          </div>
          <!--------------------
          END - Top Bar
          -------------------->
          <div class="content-panel-toggler">
            <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
          </div>
          <div class="content-i">
            <div class="content-box">
              <div class="os-tabs-w">
                <div class="os-tabs-controls os-tabs-complex">
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a aria-expanded="false" class="nav-link active" data-toggle="tab" href="#tab_overview"><span class="tab-label">Your Portfolio</span><span class="badge badge-success"><i class="os-icon os-icon-arrow-up6"></i><span>22%</span></span></a>
                    </li>
                    <li class="nav-item">
                      <a aria-expanded="false" class="nav-link" data-toggle="tab" href="#tab_sales"><span class="tab-label">Bitcoin</span><span class="tab-value">$7,839.23</span><span class="badge badge-success"><i class="os-icon os-icon-arrow-up6"></i><span>25%</span></span></a>
                    </li>
                    <li class="nav-item d-none d-xl-block">
                      <a aria-expanded="false" class="nav-link" data-toggle="tab" href="#tab_sales"><span class="tab-label">Etherium</span><span class="tab-value">$839.11</span><span class="badge badge-danger"><i class="os-icon os-icon-arrow-down6"></i><span>5%</span></span></a>
                    </li>
                    <li class="nav-item d-none d-xxxl-block">
                      <a aria-expanded="true" class="nav-link" data-toggle="tab" href="#tab_sales"><span class="tab-label">Litecoin </span><span class="tab-value">$1,434.12</span><span class="badge badge-success"><i class="os-icon os-icon-arrow-up6"></i><span>12%</span></span></a>
                    </li>
                    <li class="nav-item nav-actions d-none d-sm-block">
                      <a class="btn btn-grey" href="#"><i class="os-icon os-icon-plus-circle"></i><span>Add Wallet</span></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-lg-8 col-xxl-6">
                  <div class="element-balances justify-content-between mobile-full-width">
                    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"> </div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
  {
  "symbol": "FX:EURUSD",
  "width": "200",
  "colorTheme": "light",
  "isTransparent": true,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
                    <div class="balance-table pl-sm-2">
                      <table class="table table-lightborder table-bordered table-v-compact mb-0">
                        <tr>
                          <td>

                            <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright">
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
  {
  "symbol": "COINBASE:BTCUSD",
  "width": "200",
  "height": "100",
  "colorTheme": "light",
  "isTransparent": true,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
                            
                          </td>
                          <td>
                            <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"> </div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
  {
  "symbol": "COINBASE:ETHUSD",
  "width": "200",
  "colorTheme": "light",
  "isTransparent": true,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
                          </td>
                          <td class="d-sm-none d-xxxxl-table-cell d-md-table-cell d-xxl-none">
                            <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"> </div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
  {
  "symbol": "KRAKEN:ADAUSD",
  "width": "200",
  "colorTheme": "light",
  "isTransparent": true,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <strong>1.22</strong>
                            <div class="balance-label smaller lighter text-nowrap">
                              Litecoin LTC  (Last Month)
                            </div>
                          </td>
                          <td>
                            <strong>1.10</strong>
                            <div class="balance-label smaller lighter text-nowrap">
                              Ripple XRP  (Last Month)
                            </div>
                          </td>
                          <td class="d-sm-none d-xxxxl-table-cell d-md-table-cell d-xxl-none">
                            <strong>0.24</strong>
                            <div class="balance-label smaller lighter text-nowrap">
                              Dogecoin DGC (Last Month)
                            </div>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="element-wrapper pb-4 mb-4 border-bottom">
                    <div class="element-box-tp">
                      <a class="btn btn-primary" href="#"><i class="os-icon os-icon-refresh-ccw"></i><span>Deposit Money</span></a><a class="btn btn-grey" href="../index.html"><i class="os-icon os-icon-log-out"></i><span>Withdraw</span></a><a class="btn btn-grey d-none d-sm-inline-block" href="#"><i class="os-icon os-icon-plus-circle"></i><span>Add Wallet</span></a>
                    </div>
                  </div>
                  <div class="element-wrapper compact">
                    <div class="element-box-tp">
                      <div class="element-actions d-none d-sm-block">
                        <form class="form-inline justify-content-sm-end">
                          <label class="smaller" for="">Show Period:</label><select class="form-control form-control-sm form-control-faded">
                            <option selected="true">
                              No transactions yet
                            </option>
                            
                            
                          </select>
                        </form>
                      </div>
                      <h6 class="element-box-header">
                        Balance History
                      </h6>
                      <div class="el-chart-w">
                        <canvas data-chart-data="0,0,0,0,0,0,0,0,0,0,0,0,0" height="50" id="liteLineChartV3" width="300"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
                
                
              </div>
              <div class="row pt-2">
                <div class="col-6 col-sm-3 col-xxl-2">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                    <div class="label">
                      Bitcoin Price Predicted (2022)
                    </div>
                    <div class="value">
                      $69,123
                    </div>
                    <div class="trending trending-up">
                      <span>34%</span><i class="os-icon os-icon-arrow-up6"></i>
                    </div>
                  </a>
                </div>
                <div class="col-6 col-sm-3 col-xxl-2">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                    <div class="label">
                      LiteCoin Price Predicted (2022)
                    </div>
                    <div class="value text-danger">
                      $108
                    </div>
                    <div class="trending trending-down">
                      <span>19%</span><i class="os-icon os-icon-arrow-down6"></i>
                    </div>
                  </a>
                </div>
                <div class="col-6 col-sm-3 col-xxl-2">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                    <div class="label">
                      Etherium Price Predicted (2022)
                    </div>
                    <div class="value">
                      $7,773
                    </div>
                    <div class="trending trending-up">
                      <span>52%</span><i class="os-icon os-icon-arrow-up6"></i>
                    </div>
                  </a>
                </div>
                <div class="col-6 col-sm-3 col-xxl-2">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                    <div class="label">
                      Ripple Price Predicted (2022)
                    </div>
                    <div class="value">
                      $1,98
                    </div>
                    <div class="trending trending-up">
                      <span>12%</span><i class="os-icon os-icon-arrow-up6"></i>
                    </div>
                  </a>
                </div>
                <div class="col-6 col-xxl-2 d-sm-none d-xxl-block">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                    <div class="label">
                      ADA Price Predicted (2022)
                    </div>
                    <div class="value">
                      $2.13
                    </div>
                    <div class="trending trending-down">
                      <span>5%</span><i class="os-icon os-icon-arrow-down6"></i>
                    </div>
                  </a>
                </div>
                <div class="col-6 col-xxl-2 d-sm-none d-xxl-block">
                  <a class="element-box el-tablo centered trend-in-corner smaller" href="#">
                    <div class="label">
                      Doge Coin Predicted (2022)
                    </div>
                    <div class="value">
                      $0,181
                    </div>
                    <div class="trending trending-down">
                      <span>12%</span><i class="os-icon os-icon-arrow-down6"></i>
                    </div>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="element-wrapper compact pt-4">
                    <div class="element-actions d-none d-sm-block">
                      <a class="btn btn-primary btn-sm" href="#"><i class="os-icon os-icon-ui-22"></i><span>Add Account</span></a><a class="btn btn-success btn-sm" href="#"><i class="os-icon os-icon-grid-10"></i><span>Make Payment</span></a>
                    </div>
                    <h6 class="element-header">
                      Send Money To
                    </h6>
                    <div class="element-box-tp">
                      <div class="inline-profile-tiles">
                        <div class="row">
                          <div class="col-4 col-sm-3 col-xxl-2">
                            <div class="profile-tile profile-tile-inlined">
                              <a class="profile-tile-box faded" href="users_profile_small.html">
                                <div class="pt-new-icon">
                                  <i class="os-icon os-icon-plus"></i>
                                </div>
                                <div class="pt-user-name">
                                  New<br/> Account
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-4 col-sm-3 col-xxl-2">
                            <div class="profile-tile profile-tile-inlined">
                              <a class="profile-tile-box" href="users_profile_small.html">
                                <div class="pt-avatar-w">
                                  <img alt="" src="img/avatar1.png">
                                </div>
                                <div class="pt-user-name">
                                  USER<br/> <?php echo $fetch_info['name']  ?>
                                </div>
                              </a>
                            </div>
                          </div>
                          
                         
                          
                             
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-xxl-8">
                      <div class="element-wrapper compact pt-4">
                        <div class="element-actions d-none d-sm-block">
                          <form class="form-inline justify-content-sm-end">
                            <label class="smaller" for="">News For</label><select class="form-control form-control-sm form-control-faded">
                              <option value="Pending">
                                Bitcoin
                              </option>
                              <option value="Active">
                                Etherium 
                              </option>
                              <option value="Cancelled">
                                Litecoin
                              </option>
                            </select>
                          </form>
                        </div>
                        <h6 class="element-header">
                          Crypto News
                        </h6>
                        <div class="element-box-tp">
                          <div class="post-box">
                            <div class="post-media" style="background-image: url(img/portfolio1.jpg)"></div>
                            <div class="post-content">
                              <h6 class="post-title">
                                Is Crypto the Future of Film Funding?
                              </h6>
                              <div class="post-text">
                                Curiously, view both tone emerged. There should which yards two and concepts amidst liabilities sitting of and, parents it wait 
                              </div>
                              <div class="post-foot">
                                <div class="post-tags">
                                  <div class="badge badge-primary">
                                    BTC
                                  </div>
                                  <div class="badge badge-primary">
                                    Crypto
                                  </div>
                                </div>
                                <a class="post-link" href="#"><span>Read Full Story</span><i class="os-icon os-icon-arrow-right7"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="post-box">
                            <div class="post-media" style="background-image: url(img/portfolio2.jpg)"></div>
                            <div class="post-content">
                              <h6 class="post-title">
                                Is Crypto the Future of Film Funding?
                              </h6>
                              <div class="post-text">
                                Curiously, view both tone emerged. There should which yards two and concepts amidst liabilities sitting of and, parents it wait 
                              </div>
                              <div class="post-foot">
                                <div class="post-tags">
                                  <div class="badge badge-primary">
                                    BTC
                                  </div>
                                  <div class="badge badge-primary">
                                    Crypto
                                  </div>
                                </div>
                                <a class="post-link" href="#"><span>Read Full Story</span><i class="os-icon os-icon-arrow-right7"></i></a>
                              </div>
                            </div>
                          </div>
                          <a class="centered-load-more-link" href="#"><span>Read Our Blog</span></a>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                
              </div><!--------------------
              START - Color Scheme Toggler
              -------------------->
              <div class="floated-colors-btn second-floated-btn">
                <div class="os-toggler-w">
                  <div class="os-toggler-i">
                    <div class="os-toggler-pill"></div>
                  </div>
                </div>
                <span>Dark </span><span>Colors</span>
              </div>
              <!--------------------
              END - Color Scheme Toggler
              --------------------><!--------------------
              START - Demo Customizer
              -------------------->
              <div class="floated-customizer-btn third-floated-btn">
                <div class="icon-w">
                  <i class="os-icon os-icon-ui-46"></i>
                </div>
                <span>Customizer</span>
              </div>
              <div class="floated-customizer-panel">
                <div class="fcp-content">
                  <div class="close-customizer-btn">
                    <i class="os-icon os-icon-x"></i>
                  </div>
                  <div class="fcp-group">
                    <div class="fcp-group-header">
                      Menu Settings
                    </div>
                    <div class="fcp-group-contents">
                      <div class="fcp-field">
                        <label for="">Menu Position</label><select class="menu-position-selector">
                          <option value="left">
                            Left
                          </option>
                          <option value="right">
                            Right
                          </option>
                          <option value="top">
                            Top
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Menu Style</label><select class="menu-layout-selector">
                          <option value="compact">
                            Compact
                          </option>
                          <option value="full">
                            Full
                          </option>
                          <option value="mini">
                            Mini
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field with-image-selector-w">
                        <label for="">With Image</label><select class="with-image-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Menu Color</label>
                        <div class="fcp-colors menu-color-selector">
                          <div class="color-selector menu-color-selector color-bright selected"></div>
                          <div class="color-selector menu-color-selector color-dark"></div>
                          <div class="color-selector menu-color-selector color-light"></div>
                          <div class="color-selector menu-color-selector color-transparent"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fcp-group">
                    <div class="fcp-group-header">
                      Sub Menu
                    </div>
                    <div class="fcp-group-contents">
                      <div class="fcp-field">
                        <label for="">Sub Menu Style</label><select class="sub-menu-style-selector">
                          <option value="flyout">
                            Flyout
                          </option>
                          <option value="inside">
                            Inside/Click
                          </option>
                          <option value="over">
                            Over
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Sub Menu Color</label>
                        <div class="fcp-colors">
                          <div class="color-selector sub-menu-color-selector color-bright selected"></div>
                          <div class="color-selector sub-menu-color-selector color-dark"></div>
                          <div class="color-selector sub-menu-color-selector color-light"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fcp-group">
                    <div class="fcp-group-header">
                      Other Settings
                    </div>
                    <div class="fcp-group-contents">
                      <div class="fcp-field">
                        <label for="">Full Screen?</label><select class="full-screen-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Show Top Bar</label><select class="top-bar-visibility-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Above Menu?</label><select class="top-bar-above-menu-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Top Bar Color</label>
                        <div class="fcp-colors">
                          <div class="color-selector top-bar-color-selector color-bright selected"></div>
                          <div class="color-selector top-bar-color-selector color-dark"></div>
                          <div class="color-selector top-bar-color-selector color-light"></div>
                          <div class="color-selector top-bar-color-selector color-transparent"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--------------------
              END - Demo Customizer
              --------------------><!--------------------
              START - Chat Popup Box
              -------------------->
              <div class="floated-chat-btn">
                <i class="os-icon os-icon-mail-07"></i><span>Help Chat</span>
              </div>
              <div class="floated-chat-w">
                <div class="floated-chat-i">
                  <div class="chat-close">
                    <i class="os-icon os-icon-close"></i>
                  </div>
                  <div class="chat-head">
                    <div class="user-w with-status status-green">
                      <div class="user-avatar-w">
                        <div class="user-avatar">
                          <img alt="" src="img/avatar7.jpg">
                        </div>
                      </div>
                      <div class="user-name">
                        <h6 class="user-title">
                          Eloise Lyons
                        </h6>
                        <div class="user-role">
                          Assistant Manager
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="chat-messages">
                    
                    
                    
                    
                  </div>
                  <div class="chat-controls">
                    <input class="message-input" placeholder="Type your message here..." type="text">
                    <div class="chat-extra">
                      <a href="#"><span class="extra-tooltip">Attach Document</span><i class="os-icon os-icon-documents-07"></i></a><a href="#"><span class="extra-tooltip">Insert Photo</span><i class="os-icon os-icon-others-29"></i></a><a href="#"><span class="extra-tooltip">Upload Video</span><i class="os-icon os-icon-ui-51"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--------------------
              END - Chat Popup Box
              -------------------->
            </div>
            <!--------------------
            START - Sidebar
            -------------------->
            <div class="content-panel compact color-scheme-dark">
              <div class="content-panel-close">
                <i class="os-icon os-icon-close"></i>
              </div>
              <div class="element-wrapper">
                <div class="element-actions actions-only">
                  <a class="element-action element-action-fold" href="#"><i class="os-icon os-icon-minus-circle"></i></a>
                </div>
                <h6 class="element-header">
                  Quick Conversion
                </h6>
                
                <a class="button" href="#popup"><button class="btn btn-primary btn-block btn-lg"><i class="os-icon os-icon-refresh-ccw"></i><span>Transfer Now</span></button></a>
  <div class="popup" id="popup">
    <div class="popup-inner">
      <div class="popup__photo">
        
      </div>
      <div class="popup__text">


        <div class="tabs">
  <div class="tab-header">

    <div class="active">
      <i class="cf cf-btc"></i> Bitcoin
    </div>
    <div>
       
    </div>
    <div>
      
    </div>
    <div>
      <i class="cf cf-eth"></i> Ethereum
    </div>
  </div>
  <div class="tab-indicator"></div>
  <div class="tab-body">
    <div class="active">
      <hr>
  


     <div class="img11"><img src="img/qrbtc.png" alt="Your Image">
<h2>Pay Bitcoin</h2></div>
<p> Send only Bitcoin (BTC) to this deposit address. Sending any other coin or token to this address may result in the loss of your profit, Thanks! </p>

<span class="makki">
<div id="p1">113uU25GnWtRGwr82986ytMkWh1fWNZNNk</div>
<button onclick="copyToClipboard('#p1')">Copy Addresse</button>
</span>

    </div>


    <div class>
      <hr>
  


     <div class="img11"><img src="img/qreth.png" alt="Your Image">
<h2>Pay Ethereum</h2></div>
<p> Send only Ethereum (ETH) to this deposit address. Sending any other coin or token to this address may result in the loss of your profit, Thanks! </p>

<span class="makki">
<div id="p2">0x7b1b013e27167dd2c96b45dab693952e3ff60ac9</div>
<button onclick="copyToClipboard('#p2')">Copy Addresse</button>
</span>

    </div>

    
  </div>
</div>




 <div class="logged-user-avatar-info1">
                 
                  <div class="logged-user-info-w">
                    <div class="logged-user-name">
                      <?php echo $fetch_info['name']  ?>   <hr>
                      choose between </div>

                    
                  </div>
                  
                </div>
                




                     
        
      

      <a class="popup__close" href="#">X</a>
    </div>
  </div>

  
              </div>
              
              <div class="element-wrapper compact">
                <div class="element-actions actions-only">
                  <a class="element-action element-action-fold" href="#"><i class="os-icon os-icon-minus-circle"></i></a>
                </div>
                <h6 class="element-header">
                  Market
                </h6>
                <div class="element-box-tp">
                                          <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingvie.com" rel="noopener" target="_blank"><span class="blue-text"></span></a> <span class="blue-text"></span> </div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "colorTheme": "dark",
  "dateRange": "12M",
  "showChart": false,
  "locale": "en",
  "largeChartUrl": "",
  "isTransparent": true,
  "showSymbolLogo": true,
  "showFloatingTooltip": false,
  "width": "310",
  "height": "1000",
  "tabs": [
    {
      "title": "Overview",
      "symbols": [
        {
          "s": "BYBIT:BTCUSD"
        },
        {
          "s": "COINBASE:BTCEUR"
        },
        {
          "s": "BYBIT:ETHUSD"
        },
        {
          "s": "KRAKEN:ETHEUR"
        },
        {
          "s": "NASDAQ:GEVO"
        },
        {
          "s": "NASDAQ:AAPL"
        },
        {
          "s": "COINBASE:USTEUR"
        },
        {
          "s": "NASDAQ:RKLB"
        },
        {
          "s": "NASDAQ:TSLA"
        },
        {
          "s": "CRYPTOCAP:XRP"
        },
        {
          "s": "CRYPTOCAP:DOGE"
        },
        {
          "s": "NASDAQ:MSFT"
        },
        {
          "s": "NASDAQ:AAL"
        },
        {
          "s": "OTC:AMAZ"
        },
        {
          "s": "NASDAQ:FB"
        },
        {
          "s": "FX:EURGBP"
        },
        {
          "s": "FX:EURUSD"
        },
        {
          "s": "FX_IDC:USDGBP"
        }
      ]
    },
    {
      "title": "Cryptocurrency",
      "symbols": [
        {
          "s": "COINBASE:BTCUSD"
        },
        {
          "s": "COINBASE:BTCEUR"
        },
        {
          "s": "BYBIT:BTCUSD"
        },
        {
          "s": "BYBIT:BTCUSDT"
        },
        {
          "s": "COINBASE:ETHUSD"
        },
        {
          "s": "KRAKEN:ETHEUR"
        },
        {
          "s": "BINANCE:ETHBTC"
        },
        {
          "s": "COINBASE:LTCUSD"
        },
        {
          "s": "COINBASE:LTCEUR"
        },
        {
          "s": "BINANCE:LTCBTC"
        },
        {
          "s": "BINANCE:XMRUSDT"
        },
        {
          "s": "KRAKEN:XMREUR"
        },
        {
          "s": "BINANCE:XMRBTC"
        },
        {
          "s": "BYBIT:DOGEUSDT"
        },
        {
          "s": "BITPANDAPRO:DOGEEUR"
        },
        {
          "s": "BINANCE:DOGEBTC"
        },
        {
          "s": "BYBIT:XRPUSD"
        },
        {
          "s": "KRAKEN:XRPEUR"
        },
        {
          "s": "BINANCE:XRPBTC"
        }
      ]
    },
    {
      "title": "Stocks",
      "symbols": [
        {
          "s": "NASDAQ:AAPL"
        },
        {
          "s": "NASDAQ:GEVO"
        },
        {
          "s": "NASDAQ:LOVE"
        },
        {
          "s": "NASDAQ:TSLA"
        },
        {
          "s": "NASDAQ:ABUS"
        },
        {
          "s": "NASDAQ:MSFT"
        },
        {
          "s": "AMEX:MYO"
        },
        {
          "s": "AMEX:CEI"
        },
        {
          "s": "NASDAQ:AMZN"
        },
        {
          "s": "NASDAQ:NFLX"
        },
        {
          "s": "NASDAQ:FB"
        },
        {
          "s": "NASDAQ:AMD"
        },
        {
          "s": "NYSE:AMC"
        },
        {
          "s": "ITUB"
        },
        {
          "s": "NASDAQ:AAL"
        }
      ]
    },
    {
      "title": "Currencies",
      "symbols": [
        {
          "s": "OANDA:EURUSD"
        },
        {
          "s": "FX_IDC:GBPEUR"
        },
        {
          "s": "OANDA:GBPUSD"
        },
        {
          "s": "BYBIT:BTCUSD"
        },
        {
          "s": "FX:EURCHF"
        },
        {
          "s": "FX_IDC:EURSEK"
        },
        {
          "s": "GPW:EUR"
        },
        {
          "s": "FX:USDSEK"
        },
        {
          "s": "FX_IDC:USDNOK"
        },
        {
          "s": "FX_IDC:EURNOK"
        },
        {
          "s": "FX:USDJPY"
        },
        {
          "s": "FX:EURJPY"
        },
        {
          "s": "OANDA:GBPNZD"
        },
        {
          "s": "FX_IDC:USDALL"
        },
        {
          "s": "FX_IDC:EURDOP"
        }
      ]
    }
  ]
}
  </script>
</div>
<!-- TradingView Widget END -->


                  <div class="todo-list">
                    
                  </div>
                </div>
              </div>
              <div class="element-wrapper compact">
                <div class="element-actions actions-only">
                  <a class="element-action element-action-fold" href="#"><i class="os-icon os-icon-minus-circle"></i></a>
                </div>
                <h6 class="element-header">
                  Order History
                </h6>
                <div class="element-box-tp">
                  <table class="table table-compact smaller text-faded mb-0">
                    <thead>
                      <tr>
                        <th>
                          Type
                        </th>
                        <th class="text-center">
                          Date
                        </th>
                        <th class="text-right">
                          Amount
                        </th>
                        <th class="text-right">
                          Fee
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      
                      
                      
                      
                      
                      
                      
                    </tbody>
                  </table>
                  <a class="centered-load-more-link smaller" href="#"><span>No transactions yet</span></a>
                </div>
              </div>
              
            </div>
            <!--------------------
            END - Sidebar
            -------------------->
          </div>
        </div>
      </div>
      <div class="display-type"></div>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="bower_components/moment/moment.js"></script>
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="bower_components/ckeditor/ckeditor.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="bower_components/dropzone/dist/dropzone.js"></script>
    <script src="bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="bower_components/bootstrap/js/dist/util.js"></script>
    <script src="bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="bower_components/bootstrap/js/dist/button.js"></script>
    <script src="bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="js/demo_customizer.js?version=4.4.0"></script>
    <script src="js/main.js?version=4.4.0"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-XXXXXXX-9', 'auto');
      ga('send', 'pageview');
    </script>

    

    <script type="text/javascript">  

        jQuery(window).on('load', function() {
        jQuery("#status").fadeOut();
        jQuery("#preloader").delay(350).fadeOut("slow");
    });

    </script>

    <script type="text/javascript">
  
  function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}

</script>

    <!-- QR ADND ADRS-->
      <style>
  img {
    
    float: left; /*image position*/
    padding: 2px;
    
  }
  p {
    width: 50%;
    float: right;
  }

  .img11{
    background-color: #00acee;
    color: #00acee;
    border-radius: 20px;


  }
  /*If you face any problem make sure the <body> element has no padding.
  If you want some white space between the image and text, reduce the width
  percentages and make use of "margin" and "padding"*/
</style>

<script type="text/javascript">
  let tabHeader = document.getElementsByClassName("tab-header")[0];
let tabIndicator = document.getElementsByClassName("tab-indicator")[0];
let tabBody = document.getElementsByClassName("tab-body")[0];
 
let tabsPane = tabHeader.getElementsByTagName("div");
 
for(let i=0;i<tabsPane.length;i++){
  tabsPane[i].addEventListener("click",function(){
    tabHeader.getElementsByClassName("active")[0].classList.remove("active");
    tabsPane[i].classList.add("active");
    tabBody.getElementsByClassName("active")[0].classList.remove("active");
    tabBody.getElementsByTagName("div")[i].classList.add("active");
    
    tabIndicator.style.left = `calc(calc(100% / 2) * ${i})`;
  });
}
</script>

<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Raleway:300,400,600&subset=latin-ext');
 * {
   box-sizing: border-box;
}
 html, body {
   font-family: 'Raleway', sans-serif;
   font-size: 16px;
}
 @media screen and (max-width: 768px) {
   html, body {
     font-size: 12px;
  }
}
 
}
 .button {
   text-decoration: none;
   font-size: 0.875rem;
   font-weight: 300;
   text-transform: uppercase;
   display: inline-block;
   border-radius: 1.5rem;
   background-color: #fff;
   color: #9191e9;
   padding: 1rem 2rem;
}
 .popup {
   display: flex;
   align-items: center;
   justify-content: center;
   position: fixed;
   width: 100vw;
   height: 100vh;
   bottom: 0;
   right: 0;
   background-color: rgba(0, 0, 0, .80);
   z-index: 2;
   visibility: hidden;
   opacity: 0;
   overflow: hiden;
   transition: 0.64s ease-in-out;
}
 .popup-inner {
   position: relative;
   bottom: -100vw;
   right: -100vh;
   display: flex;
   align-items: center;
   max-width: 500px;
   max-height: 400px;
   width: 60%;
   height: 90%;
   background-color: darkgrey;
   transform: rotate(32deg);
   transition: 0.64s ease-in-out;
   border-radius: 50px;

}
 .popup__photo {
   display: flex;
   justify-content: flex-end;
   align-items: flex-end;
   width: 40%;
   height: 100%;
   overflow: hidden;
}
 .popup__photo img {
   width: auto;
   height: 100%;
}
 .popup__text {
   display: flex;
   flex-direction: column;
   justify-content: center;
   width: 60%;
   height: 100%;
   padding: 4rem;
}
 .popup__text h1 {
   font-size: 2rem;
   font-weight: 600;
   margin-bottom: 2rem;
   text-transform: uppercase;
   color: #0a0a0a;
}
 .popup__text p {
   font-size: 0.875rem;
   color: #686868;
   line-height: 1.5;
}
 .popup:target {
   visibility: visible;
   opacity: 1;
}
 .popup:target .popup-inner {
   bottom: 0;
   right: 0;
   transform: rotate(0);
}
 .popup__close {
   position: absolute;
   right: -1rem;
   top: -1rem;
   width: 3rem;
   height: 3rem;
   font-size: 0.875rem;
   font-weight: 300;
   border-radius: 100%;
   background-color: #0a0a0a;
   z-index: 4;
   color: #fff;
   line-height: 3rem;
   text-align: center;
   cursor: pointer;
   text-decoration: none;
}

.logged-user-avatar-info1 {
  position: relative;
  top: -60%;
  ;left: -60%;
  color: #00acee;
  text-align: center;
  font-size: 10px;
}


 
  </style>

  <style type="text/css">
    @import "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css";

body {
  background:#ddd;
  font-family:"Raleway";
}
.tabs {
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  width:500px;
  height:400px;
  background:#f5f5f5;
  padding:20px 30px;
  overflow:hidden;
  border-radius:50px;
  
}

.makki {
  position: relative;
  top: 34px;
  color: black;
  
}

.opala{
  color: black;
  position: relative;
  top: 90px;
  left: 50px;
}
.tabs .tab-header {
  height:60px;
  display:flex;
  align-items:center;
}
.tabs .tab-header > div {
  width:calc(100% / 4);
  text-align:center;
  color:#888;
  font-weight:600;
  cursor:pointer;
  font-size:14px;
  text-transform:uppercase;
  outline:none;
}
.tabs .tab-header > div > i {
  display:block;
  margin-bottom:5px;
}
.tabs .tab-header > div.active {
  color:#00acee;
}
.tabs .tab-indicator {
  position:relative;
  width:calc(100% / 4);
  height:5px;
  background:#00acee;
  left:0px;
  border-radius:5px;
  transition:all 500ms ease-in-out;
}
.tabs .tab-body {
  position:relative;
  height:calc(100% - 60px);
  padding:10px 5px;
}
.tabs .tab-body > div {
  position:absolute;
  top:-200%;
  opacity:0;
  transform:scale(0.9);
  transition:opacity 500ms ease-in-out 0ms,
    transform 500ms ease-in-out 0ms;
}
.tabs .tab-body > div.active {
  top:0px;
  opacity:1;
  transform:scale(1);
}

h2 {
  color: black;
}
</style>



  </body>
</html>
