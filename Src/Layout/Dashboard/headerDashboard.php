    <div class="preloader"></div>

    <!-- header top -->
    <div class="header_top home3_style dashbord_style dn-992">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-xl-7">
                    <div class="header_top_contact_opening_widget text-center text-md-start">
                        <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-phone-call"></span>1-800-458-56987</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-map"></span>47 Bakery Street, London, UK</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-clock"></span>Mon - Fri 8:00 - 18:00</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-5">
                    <div class="header_top_social_widgets text-center text-md-end">
                        <ul class="m0">
                            <li class="list-inline-item"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li class="list-inline-item"><a href="#"><span class="fab fa-linkedin"></span></a></li>
                            <li class="list-inline-item"><a href="#" data-bs-toggle="modal" data-bs-target="#logInModal">Login</a></li>
                            <li class="list-inline-item"><a href="#" data-bs-toggle="modal" data-bs-target="#logInModal">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header Nav -->
    <header class="header-nav menu_style_home_one home3_style dashbord_style main-menu">
        <!-- Ace Responsive Menu -->
        <nav class="posr">
            <div class="container-fluid">
                <!-- Menu Toggle btn-->
                <div class="menu-toggle">
                    <button type="button" id="menu-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a href="index.php" class="navbar_brand float-start dn-md">
                    <img class="logo1 img-fluid" src="images/header-logo2.svg" alt="header-logo2.png">
                    <img class="logo2 img-fluid" src="images/header-logo2.svg" alt="header-logo2.svg">
                </a>
                <!-- Responsive Menu Structure-->
                <ul id="respMenu" class="ace-responsive-menu menu_list_custom_code wa text-end" data-menu-style="horizontal">
                    <li> <a href="index.php"><span class="title">Home</span></a>
                    </li>
                    <li> <a href="paga-dashboard.php"><span class="title">User Info</span></a>
                    </li>
                    <li> <a href="page-blog-grid.php"><span class="title">Blog</span></a>
                    </li>
                    <li> <a href="#"><span class="title">Pages</span></a>
                        <ul>
                            <li><a href="page-about.php">About Us</a></li>
                            <li><a href="page-calculator.php">Calculator</a></li>
                            <li><a href="page-compare.html">Compare</a></li>
                            <li><a href="page-contact.php">Contact</a></li>
                            <li><a href="page-error.php">404 Page</a></li>
                            <li><a href="page-faq.php">Faq</a></li>
                            <li><a href="page-login.php">Login</a></li>
                            <li><a href="page-pricing.php">Pricing</a></li>
                            <li><a href="page-register.php">Register</a></li>
                            <li><a href="page-service.php">Service</a></li>
                            <li><a href="page-terms.php">Terms and Conditions</a></li>
                            <li><a href="page-ui-element.php">UI Elements</a></li>
                        </ul>
                    </li>
                    <li class="add_listing"><a href="page-dashboard-add-listings.">+ Add Listing</a></li>
                    <li><a class="favorite" href="#"><span class="body-color flaticon-heart-1 fz18"><sup class="badge">2</sup></span></a></li>
                    <li><a class="notification" href="#"><span class="body-color flaticon-bell fz16"></span></a></li>
                    <li class="user_setting">
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                <img class="rounded-circle mr10" src="images/team/e1.png" alt="e1.png">
                                <span class="dn-1366"> Jerome Bell <span class="fas fa-angle-down ml5"></span></span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="user_set_header">
                                    <img class="float-start" src="images/team/e1.png" alt="e1.png">
                                    <p>Jerome Bell <br><span class="address">alitufan@gmail.com</span></p>
                                </div>
                                <div class="user_setting_content">
                                    <a class="dropdown-item active" href="#">My Profile</a>
                                    <a class="dropdown-item" href="#">Messages</a>
                                    <a class="dropdown-item" href="#">My Listing</a>
                                    <a class="dropdown-item" href="#">Help</a>
                                    <a class="dropdown-item" href="#">Log out</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Modal -->
 <?php include_once 'Src/Layout/modalLogin.php';?>
    <!-- Main Header Nav For Mobile -->
    <div id="page" class="stylehome1 h0">
        <div class="mobile-menu">
            <div class="header stylehome1">
                <div class="mobile_menu_bar">
                    <a class="menubar" href="#menu"><small>Menu</small><span></span></a>
                </div>
                <div class="mobile_menu_main_logo"><img class="nav_logo_img img-fluid" src="images/header-logo2.svg" alt="images/header-logo2.png"></div>
            </div>
        </div>
        <!-- /.mobile-menu -->
        <nav id="menu" class="stylehome1">
            <ul>
                <li><a href="index.php"><span>Home</span></a>
                </li>
                <li><a href="page-user-profile.php"><span>User info</span></a>
                </li>
                <li><a href="page-blog-grid.php"><span>Blog</span></a>
                </li>
                <li><span>Pages</span>
                    <ul>
                        <li><a href="page-about.php">About Us</a></li>
                        <li><a href="page-calculator.php">Loan Calculator</a></li>
                        <li><a href="page-compare.php">Compare</a></li>
                        <li><a href="page-contact.php">Contact</a></li>
                        <li><a href="page-error.php">Error</a></li>
                        <li><a href="page-faq.php">Faq</a></li>
                        <li><a href="page-login.php">Login</a></li>
                        <li><a href="page-pricing.php">Pricing Table</a></li>
                        <li><a href="page-register.php">Sign up</a></li>
                        <li><a href="page-service.php">Service</a></li>
                        <li><a href="page-terms.php">Terms & Condition</a></li>
                        <li><a href="page-ui-element.php">UI Elements</a></li>
                    </ul>
                </li>
                <!-- Only for Mobile View -->
                <li class="mm-add-listing">
          <span class="border-none">
            <span class="mmenu-contact-info">
              <span class="phone-num"><i class="flaticon-map"></i> <a href="#">47 Bakery Street, London, UK</a></span>
              <span class="phone-num"><i class="flaticon-phone-call"></i> <a href="#">1-800-458-56987</a></span>
              <span class="phone-num"><i class="flaticon-clock"></i> <a href="#">Mon - Fri 8:00 - 18:00</a></span>
            </span>
            <span class="social-links">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
              <a href="#"><span class="fab fa-pinterest"></span></a>
            </span>
          </span>
                </li>
            </ul>
        </nav>
    </div>
