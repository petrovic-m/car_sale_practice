<header class="header-nav menu_style_home_one transparent main-menu">
    <!-- Ace Responsive Menu -->
    <nav>
        <div class="container posr">
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="index.php" class="navbar_brand float-start dn-md">
                <img class="logo1 img-fluid" src="Src/Assets/images/header-logo.svg" alt="header-logo.svg">
                <img class="logo2 img-fluid" src="Src/Assets/images/header-logo2.svg" alt="header-logo2.svg">
            </a>
            <!-- Responsive Menu Structure-->
            <ul id="respMenu" class="ace-responsive-menu text-end" data-menu-style="horizontal">
                <li> <a href="index.php"><span class="title">Home</span></a>
                </li>
                <li> <a href="#"><span class="title">User</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li> <a href="#">User Info</a>
                            <ul>
                                <li><a href="page-dashboard.php">Dashboard</a></li>
                                <li><a href="page-dashboard-profile.php">Profile</a></li>
                                <li><a href="page-dashboard-listing.php">My Listing</a></li>
                                <li><a href="page-dashboard-favorites.php">Favorites</a></li>
                                <li><a href="page-dashboard-add-listings.php">Add Listing</a></li>
                                <li><a href="page-dashboard-messages.php">Messages</a></li>
                            </ul>
                        </li>
                        <li><a href="page-user-profile.php">User Profile</a></li>
                    </ul>
                </li>
                <li class="add_listing"><a href="page-dashboard-add-listings.php">+ Add Listing</a></li>
                <li class="sidebar_panel"><a class="sidebar_switch pt0" href="#"><span></span></a></li>
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
            <div class="mobile_menu_main_logo"><img class="nav_logo_img img-fluid" src="Src/Assets/images/header-logo2.svg" alt="images/header-logo2.png"></div>
        </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            <li><a href="index.php"><span>Home</span></a></li>
            <li><span>User</span>
                <ul>
                    <li><span>User Dashboard</span>
                        <ul>
                            <li><a href="page-dashboard.php">Dashboard</a></li>
                            <li><a href="page-dashboard-profile.php">Profile</a></li>
                            <li><a href="page-dashboard-listing.php">My Listing</a></li>
                            <li><a href="page-dashboard-favorites.php">Favorites</a></li>
                            <li><a href="page-dashboard-add-listings.php">Add Listing</a></li>
                            <li><a href="page-dashboard-messages.php">Messages</a></li>
                        </ul>
                    </li>
                    <li><a href="page-user-profile.php">User Profile</a></li>
                </ul>
            </li>   
            <li><span>Listings</span>
                <ul>
                    <li><span>Listing Styles</span>
                        <ul>
                            <li><a href="page-list.php">Lising</a></li>
                        </ul>
                    </li>
                    <li><span>Listing Single</span>
                        <ul>
                            <li><a href="page-car-single.php">Single</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><span>Blog</span>
                <ul>
                    <li><a href="page-blog-grid.php">Blog Grid</a></li>
                    <li><a href="page-blog-single.php">Blog Single</a></li>
                </ul>
            </li>
            <li><span>Shop</span>
                <ul>
                    <li><a href="page-shop.php">Shop</a></li>
                    <li><a href="page-shop-cart.php">Shop Cart</a></li>
                    <li><a href="page-shop-checkout.php">Shop Checkout</a></li>
                    <li><a href="page-shop-complete-order.php">Order Completed</a></li>
                    <li><a href="page-shop-single.php">Shop Single</a></li>
                    <li><a href="page-user-profile.php">User Profile</a></li>
                </ul>
            </li>
            <li><span>Pages</span>
                <ul>
                    <li><a href="page-about.php">About Us</a></li>
                    <li><a href="page-contact.php">Contact</a></li>
                    <li><a href="page-error.php">Error</a></li>
                    <li><a href="page-faq.php">Faq</a></li>
                    <li><a href="page-pricing.php">Pricing Table</a></li>
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