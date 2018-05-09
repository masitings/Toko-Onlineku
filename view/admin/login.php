
<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
<head>

    <!-- Meta-Information -->
    <title>Login Dashboard Admin</title>
    <meta charset="utf-8">
    <meta name="description" content="Glade is a clean and powerful ready to use responsive AngularJs Admin Template based on Latest Bootstrap version and powered by jQuery, Glade comes with 3 amazing Dashboard layouts. Glade is completely flexible and user friendly admin template as it supports all the browsers and looks awesome on any device.">
    <meta name="keywords" content="admin, admin dashboard, angular admin, bootstrap admin, dashboard, modern admin, responsive admin, web admin, web app, bitlers">
    <meta name="author" content="bitlers">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com -->
    <link rel="stylesheet" href="/view/assets/admin/css/bootstrap.min.css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="/view/assets/admin/css/icons.css">
    <link rel="stylesheet" href="/view/assets/admin/css/main.css">
    <link rel="stylesheet" href="/view/assets/admin/css/responsive.css">

</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Our Website Content Goes Here -->
<div class="account-user-sec">
     <div class="account-sec">
          <div class="account-top-bar">
               <div class="container">
                     <div class="logo">
                       <a href="javascript:void(0)" title=""><i class="fa fa-bullseye"></i> Administrator Login</a>
                   </div>
                   <ul class="account-header-link">
                    <li><a title="" href="#/register">Register</a></li>
                    <li><a title="" href="#/forgot-password">Forgot Your Password</a></li>
                   </ul>
               </div>
          </div>
          <div class="acount-sec">
               <div class="container">
                    <div class="row">
                         <div class="col-md-4">
                              <div class="account-detail">
                                   <ul>
                                        <li>
                                             <h3><i class="fa  fa-television"></i>  Keep everything Sync</h3>
                                             <p>Dnim eiusmod high life accusamus terry </br>richardson ado squid.</p>
                                        </li>
                                        <li>
                                             <h3><i class="fa fa-map-o"></i> Emails & Calendars is with you</h3>
                                             <p>Dnim eiusmod high life accusamus terry </br>richardson ado squid.</p>
                                        </li>
                                        <li>
                                             <h3><i class="fa  fa-send-o"></i> Simple Elegant & Super Fast</h3>
                                             <p>Dnim eiusmod high life accusamus terry </br>richardson ado squid.</p>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                         <div class="col-md-8">
                              <div class="contact-sec">
                                   <div class="row">
                                        <div class="col-md-12">   
                                             <div class="widget-title">
                                                  <h3>Admin Panel Login</h3>
                                                  <span>Fill your detail to get in</span>
                                             </div><!-- Widget title -->
                                             <div class="account-form">
                                                  <form method="post" action="/action/Admin.php">
                                                       <div class="row">
                                                            <div class="feild col-md-12">
                                                                 <input type="text" name="email" placeholder="Email Address" />
                                                            </div>
                                                            <div class="feild col-md-12">
                                                                 <input type="password" name="password" placeholder="Password" />
                                                                 <input type="hidden" name="act" value="login">
                                                            </div>
                                                            <div class="feild col-md-12">
                                                                 <input type="submit" value="Login Now" />
                                                            </div>
                                                       </div>
                                                  </form>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <footer>
              <div class="container">
                  <p>© 2017 bitlers Technologies Ltd.  Made with <i class="fa fa-heart"></i></p>
              </div>
          </footer>
     </div><!-- Account Sec -->
</div>

</body>
</html>