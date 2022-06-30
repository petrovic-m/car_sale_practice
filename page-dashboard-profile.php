<!-- Header Start -->
<?php include_once 'Src/Layout/header.php'; ?>
<!-- Header End -->

<?php include_once 'Src/Layout/Dashboard/headerDashboard.php';?>
	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f9">
		<div class="container-fluid">
			<div class="row">
        <div class="col-xxl-10 offset-xxl-2 dashboard_grid_space">
          <div class="row">
            <div class="col-lg-12">
              <div class="extra-dashboard-menu dn-lg">
                <div class="ed_menu_list">
                  <ul>
                    <li><a href="page-dashboard.php"><span class="flaticon-dashboard"></span>Dashboard</a></li>
                    <li><a class="active" href="page-dashboard-profile.html"><span class="flaticon-user-2"></span>Profile</a></li>
                    <li><a href="page-dashboard-listing.php"><span class="flaticon-list"></span>My Listing</a></li>
                    <li><a href="page-dashboard-add-listings.php"><span class="flaticon-plus"></span>Add Listing</a></li>
                    <li><a href="page-dashboard-messages.php"><span class="flaticon-message"></span>Messages</a></li>
                    <li><a href="logout.php"><span class="flaticon-logout"></span>Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
					<div class="row">
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-lg mt50">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
									<ul id="myDropdown" class="dropdown-content">
                    <li><a href="page-dashboard.php"><span class="flaticon-dashboard"></span>Dashboard</a></li>
                    <li><a class="active" href="page-dashboard-profile.html"><span class="flaticon-user-2"></span>Profile</a></li>
                    <li><a href="page-dashboard-listing.php"><span class="flaticon-list"></span>My Listing</a></li>
                    <li><a href="page-dashboard-add-listings.php"><span class="flaticon-plus"></span>Add Listing</a></li>
                    <li><a href="page-dashboard-messages.php"><span class="flaticon-message"></span>Messages</a></li>
                    <li><a href="logout.php"><span class="flaticon-logout"></span>Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-8">
              <div class="col-lg-12 mb50">
                <div class="breadcrumb_content">
                  <h2 class="breadcrumb_title">Profile</h2>
                  <p>Ready to jump back in?</p>
                </div>
              </div>
						</div>
					</div>
          <div class="row">
            <div class="col-lg-12">
              <div class="new_property_form mb30">
                <h4 class="title mb30">Account Details</h4>
                <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
                  <div class="row">
                    <div class="col-lg-7">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="mb20">
                            <input name="form_name" class="form-control form_control" type="text" placeholder="Name">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb20">
                            <input name="form_name" class="form-control form_control" type="text" placeholder="Location">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb20">
                            <input name="form_name" class="form-control form_control" type="text" placeholder="Phone">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb20">
                            <input name="form_name" class="form-control form_control" type="text" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="ui_kit_select_search add_new_property mb20">
                            <select class="selectpicker" data-live-search="true" data-width="100%">
                              <option>Type</option>
                              <option data-tokens="Seller">Seller</option>
                              <option data-tokens="Purchaser">Purchaser</option>
                              <option data-tokens="Dealer">Dealer</option>
                              <option data-tokens="Other">Other</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="mb20">
                            <textarea name="form_message" class="form-control" rows="10" placeholder="Type"></textarea>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="new_propertyform_btn">
                            <a href="#" class="btn btn-thm ad_flor_btn">Save</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="new_property_form">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="title mb30">Change Password</h4>
                  </div>
                  <div class="col-sm-6 col-lg-7">
                    <div class="mb20">
                      <input name="form_name" class="form-control form_control" type="text" placeholder="Old Password">
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-7">
                    <div class="mb20">
                      <input name="form_name" class="form-control form_control" type="text" placeholder="New Password">
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-7">
                    <div class="mb20">
                      <input name="form_name" class="form-control form_control mb20" type="text" placeholder="Re-enter New Password">
                      <a href="#" class="btn btn-thm ad_flor_btn">Save</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="fas fa-arrow-up"></i></a>
</div>
<!-- Wrapper End -->
<script src="Src/Assets/js/jquery-3.6.0.js"></script>
<script src="Src/Assets/js/jquery-migrate-3.0.0.min.js"></script>
<script src="Src/Assets/js/popper.min.js"></script>
<script src="Src/Assets/js/bootstrap.min.js"></script>
<script src="Src/Assets/js/jquery.mmenu.all.js"></script>
<script src="Src/Assets/js/ace-responsive-menu.js"></script>
<script src="Src/Assets/js/bootstrap-select.min.js"></script>
<script src="Src/Assets/js/snackbar.min.js"></script>
<script src="Src/Assets/js/simplebar.js"></script>
<script src="Src/Assets/js/parallax.js"></script>
<script src="Src/Assets/js/scrollto.js"></script>
<script src="Src/Assets/js/jquery-scrolltofixed-min.js"></script>
<script src="Src/Assets/js/jquery.counterup.js"></script>
<script src="Src/Assets/js/wow.min.js"></script>
<script src="Src/Assets/js/progressbar.js"></script>
<script src="Src/Assets/js/slider.js"></script>
<script src="Src/Assets/js/timepicker.js"></script>
<script src="Src/Assets/js/wow.min.js"></script>
<script src="Src/Assets/js/smartuploader.js"></script>
<script src="Src/Assets/js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script src="Src/Assets/js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-dashboard-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 11:45:02 GMT -->
</html>