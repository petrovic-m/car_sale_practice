<!-- Header Start -->
<?php include_once 'Src/Layout/header.php'; ?>
<!-- Header End -->

<!-- Sidebar Panel Start -->
<?php include_once 'Src/Layout/sidebarPanel.php';?>
<!-- Sidebar Panel End -->

<!-- header top start -->
<?php include_once 'Src/Layout/Page/headerTop.php';?>
<!-- header top end-->

<!-- Main Header Nav -->
<?php include_once 'Src/Layout/Page/headerNav.php';?>
<!-- Main Header Nav -->

<!-- Inner Page Breadcrumb -->
  <section class="inner_page_breadcrumb style2 bgc-f9 bt1 inner_page_section_spacing">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="breadcrumb_content style2">
            <h2 class="breadcrumb_title">Shop Checkout</h2>
            <p class="subtitle">Listings</p>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cars for Sale</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

	<!-- Shop Checkouts Content -->
	<section class="shop-checkouts pt0 bgc-f9 pb100">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout_form style2">
				    <h4 class="title mb30">Billing details</h4>
						<div class="checkout_coupon ui_kit_button">
	            <form class="form2" id="coupon_form" name="contact_form" action="#" method="post">
								<div class="row">
	                <div class="col-sm-6">
                    <div class="mb30">
                      <label class="form-label">First name *</label>
											<input class="form-control form_control" type="text" placeholder="Ali Tuf..">
										</div>
	                </div>
	                <div class="col-sm-6">
                    <div class="mb30">
                      <label class="form-label">Last name *</label>
											<input class="form-control form_control" type="text">
										</div>
	                </div>
	                <div class="col-sm-12">
                    <div class="mb30">
                      <label class="form-label">Company name (optional)</label>
											<input class="form-control form_control" type="text">
										</div>
	                </div>
							    <div class="col-lg-12">
										<div class="mb30">
                      <label class="form-label">Country / Region *</label>
                      <div class="checkout_country_form actegory">
                        <select class="selectpicker">
                          <option>Turkey</option>
                          <option>United Kingdom</option>
                          <option>United State</option>
                          <option>Ukraine</option>
                          <option>Uruguay</option>
                          <option>UK</option>
                          <option>Uzbekistan</option>
                        </select>
                      </div>
										</div>
									</div>
	                <div class="col-sm-12">
                    <div class="mb30">
                      <label class="form-label">Street address *</label>
											<input class="form-control form_control mb10" type="text">
											<input class="form-control form_control" type="text">
										</div>
	                </div>
                  <div class="col-sm-6">
                    <div class="mb30">
                      <label class="form-label">Postcode / ZIP *</label>
                      <input class="form-control form_control" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb30">
                      <label class="form-label">Town / City *</label>
                      <input class="form-control form_control" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb30">
                      <label class="form-label">Province *</label>
                      <input class="form-control form_control" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb30">
                      <label class="form-label">Phone *</label>
                      <input class="form-control form_control" type="text">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="mb30">
                      <label class="form-label">Your Email</label>
                      <input class="form-control form_control" type="email">
                    </div>
                  </div>
	                <div class="col-sm-12">
                    <div class="mb30 mb0">
                      <h4 class="mb15">Additional Information</h4>
                    	<label class="form-label ai_title">Order notes (optional)</label>
                      <textarea name="form_message" class="form-control" rows="12" placeholder=""></textarea>
                    </div>
	                </div>
                </div>
              </form>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="order_sidebar_widget mb30">
						<h4 class="title">Your Order</h4>
            <ul>
              <li class="subtitle"><p>Product <span class="float-end">Subtotal</span></p></li>
              <li><p class="product_name_qnt">Hoodie x2 <span class="float-end">$259.00</span></p></li>
              <li><p class="product_name_qnt">Seo Books x 1 <span class="float-end">$259.00</span></p></li>
              <li class="subtitle"><p>Subtotal <span class="float-end totals">$907.00</span></p></li>
              <li class="subtitle"><p>Subtotal <span class="float-end totals">$907.00</span></p></li>
              <li class="subtitle"><p>Total <span class="float-end totals">$9,218.00</span></p></li>
            </ul>
					</div>
          <div class="payment_widget">
            <div class="wrapper">
              <div class="form-check mb20">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Direct bank transfer</label>
              </div>
              <div class="bt_details">
                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.Your order will not be shipped until the funds have.</p>
              </div>
              <div class="form-check mb20">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                <label class="form-check-label" for="flexCheckDefault2">Check payments</label>
              </div>
              <div class="form-check mb20">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                <label class="form-check-label" for="flexCheckDefault3">Cash on delivery</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                <label class="form-check-label" for="flexCheckDefault4">PayPal</label>
              </div>
            </div>
          </div>
          <div class="ui_kit_button payment_widget_btn">
            <button type="button" class="btn btn-thm btn-block">Place Order</button>
          </div>
				</div>
			</div>
		</div>
	</section>

<!-- Our Footer -->
<?php include_once 'Src/Layout/footer.php';?>
<!-- Our Footer -->

<!-- Wrapper End -->
<script src="Src/Assets/js/jquery-3.6.0.js"></script>
<script src="Src/Assets/js/jquery-migrate-3.0.0.min.js"></script>
<script src="Src/Assets/js/popper.min.js"></script>
<script src="Src/Assets/js/bootstrap.min.js"></script>
<script src="Src/Assets/js/bootstrap-select.min.js"></script>
<script src="Src/Assets/js/jquery.mmenu.all.js"></script> <script src="Src/Assets/js/ace-responsive-menu.js"></script>
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
<!-- Custom script for all pages --> 
<script src="Src/Assets/js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-shop-checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 11:46:37 GMT -->
</html>