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
            <h2 class="breadcrumb_title">Shop Cart</h2>
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
	<section class="shop-cart bgc-f9 pt0">
		<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-8 col-xl-9">
              <div class="shopping_cart_tabs ovyh">
                <div class="shopping_cart_table">
                  <table class="table table-responsive table-borderless">
                    <thead class="thead-dark">
                      <tr>
                        <th class="pl30" colspan="1" scope="row">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody class="table_body">
                      <tr>
                        <th class="pl30" scope="row">
                          <ul class="cart_list mt20">
                            <li class="list-inline-item"><a href="#"><img src="Src/Assets/images/shop/cart1.png" alt="cart1.png"></a></li>
                            <li class="list-inline-item"><a class="cart_title" href="#">Silver Heinz Ketchup 350 ml</a></li>
                          </ul>
                        </th>
                        <td>$298</td>
                        <td><input class="cart_count text-center" placeholder="4" type="number"></td>
                        <td>$1.298</td>
                        <td class="pr25"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete"><span class="flaticon-trash"></span></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="shopping_cart_table">
                  <table class="table table-responsive table-borderless">
                    <tbody class="table_body">
                      <tr>
                        <th class="pl30" scope="row">
                          <ul class="cart_list mt20">
                            <li class="list-inline-item"><a href="#"><img src="Src/Assets/images/shop/cart2.png" alt="cart2.png"></a></li>
                            <li class="list-inline-item"><a class="cart_title" href="#">Silver Heinz Ketchup 350 ml</a></li>
                          </ul>
                        </th>
                        <td>$298</td>
                        <td><input class="cart_count text-center" placeholder="4" type="number"></td>
                        <td>$1.298</td>
                        <td class="pr25"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete"><span class="flaticon-trash"></span></a></td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-responsive table-borderless">
                    <tbody class="table_body">
                      <tr>
                        <th class="pl30" scope="row">
                          <ul class="cart_list mt20">
                            <li class="list-inline-item"><a href="#"><img src="Src/Assets/images/shop/cart3.png" alt="cart3.png"></a></li>
                            <li class="list-inline-item"><a class="cart_title" href="#">Silver Heinz Ketchup 350 ml</a></li>
                          </ul>
                        </th>
                        <td>$298</td>
                        <td><input class="cart_count text-center" placeholder="4" type="number"></td>
                        <td>$1.298</td>
                        <td class="pr25"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete"><span class="flaticon-trash"></span></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="shopping_cart_tabs">
                <div class="shopping_cart_table">
                  <div class="checkout_form mt30">
                    <div class="checkout_coupon">
                      <form class="df db-sm">
                        <input class="form-control coupon_input" type="search" placeholder="Coupon code" aria-label="Search">
                        <button type="button" class="btn btn-thm">Apply Coupon</button>
                        <button type="button" class="btn btn3">Update Cart</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
              <div class="order_sidebar_widget style2">
                <h4 class="title">Cart Totals</h4>
                <ul class="mb15">
                  <li class="subtitle"><p>Subtotal <span class="float-end">$13,000</span></p></li>
                  <li class="subtitle"><p>Total <span class="float-end totals color-orose">$943,00</span></p></li>
                </ul>
                <div class="ui_kit_button payment_widget_btn">
                  <button type="button" class="btn btn-thm btn-block">Proceed to Checkout</button>
                </div>
              </div>
            </div>
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

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-shop-cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 11:46:37 GMT -->
</html>