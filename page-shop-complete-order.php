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


<!-- Shop Checkouts Content -->
	<section class="shop-cart bgc-f9 mt50-lg inner_page_section_spacing">
		<div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="shopping_cart_tabs">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade" id="cart" role="tabpanel" aria-labelledby="cart-tab">
                <div class="row">
                  <div class="col-lg-8 col-xl-9">
                    <div class="shopping_cart_table">
                      <table class="table table-responsive table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">PRODUCT</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">QUANTITY</th>
                            <th scope="col">SUBTOTAL</th>
                          </tr>
                        </thead>
                        <tbody class="table_body">
                          <tr>
                            <th scope="row">
                              <ul class="cart_list">
                                <li class="list-inline-item"><a class="close_img" href="#"><img src="Src/Assets/images/shop/close.png" alt=""></a></li>
                                <li class="list-inline-item pr10"><a href="#"><img src="Src/Assets/images/shop/cart1.png" alt="cart1.png"></a></li>
                                <li class="list-inline-item"><a class="cart_title" href="#">Silver Heinz Ketchup 350 ml</a></li>
                              </ul>
                            </th>
                            <td>$7.63</td>
                            <td><input class="cart_count text-center" placeholder="2" type="number"></td>
                            <td class="text-thm">$347.63</td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <ul class="cart_list">
                                <li class="list-inline-item"><a class="close_img" href="#"><img src="Src/Assets/images/shop/close.png" alt=""></a></li>
                                <li class="list-inline-item pr10"><a href="#"><img src="Src/Assets/images/shop/cart1.png" alt="cart1.png"></a></li>
                                <li class="list-inline-item"><a class="cart_title" href="#">Silver Heinz Ketchup 350 ml</a></li>
                              </ul>
                            </th>
                            <td>$7.63</td>
                            <td><input class="cart_count text-center" placeholder="2" type="number"></td>
                            <td class="text-thm">$347.63</td>
                          </tr>
                          <tr>
                            <th scope="row">
                              <ul class="cart_list">
                                <li class="list-inline-item"><a class="close_img" href="#"><img src="Src/Assets/images/shop/close.png" alt=""></a></li>
                                <li class="list-inline-item pr10"><a href="#"><img src="Src/Assets/images/shop/cart1.png" alt="cart1.png"></a></li>
                                <li class="list-inline-item"><a class="cart_title" href="#">Silver Heinz Ketchup 350 ml</a></li>
                              </ul>
                            </th>
                            <td>$7.63</td>
                            <td><input class="cart_count text-center" placeholder="2" type="number"></td>
                            <td class="text-thm">$347.63</td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="checkout_form mt30">
                        <div class="checkout_coupon">
                          <form class="df db-520">
                            <input class="form-control coupon_input" type="search" placeholder="Coupon code" aria-label="Search">
                            <button type="button" class="btn btn2 btn-thm">Apply Coupon</button>
                            <button type="button" class="btn btn3">Update Cart</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xl-3">
                    <div class="order_sidebar_widget style2">
                      <h4 class="title">Cart Totals</h4>
                      <ul>
                        <li class="subtitle"><p>Subtotal <span class="float-end">$907.00</span></p> <hr></li>
                        <li>
                          <div class="ui_kit_radiobox shopping_cart_radio_box">
                            <div class="radio">
                              <input id="radio_one" name="radio" type="radio" checked="">
                              <label for="radio_one"><span class="car_for_shipping">Shipping</span><span class="radio-label"></span>Flat rate: <span class="fwb text-thm">$20.00</span></label>
                            </div>
                            <div class="radio">
                              <input id="radio_two" name="radio" type="radio">
                              <label for="radio_two"><span class="radio-label"></span>Free shipping</label>
                            </div>
                            <div class="radio">
                              <input id="radio_three" name="radio" type="radio">
                              <label for="radio_three"><span class="radio-label"></span>Local pickup: <span class="fwb text-thm">$25.00</span></label>
                            </div>
                            <div class="radio">
                              <label for="radio_four"><span class="radio-label"></span> Shipping to AL.</label>
                            </div>
                            <div class="radio">
                              <label for="radio_four"><span class="radio-label"></span> <span class="fz14 fwb tdu text-thm">Change address</span></label>
                            </div>
                          </div>
                        </li>
                        <li class="subtitle"><hr></li>
                        <li class="subtitle"><p>Subtotal <span class="float-end totals text-thm">$907.00</span></p></li>
                      </ul>
                      <div class="ui_kit_button payment_widget_btn">
                        <button type="button" class="btn btn-thm btn-block">PROCEED TO CHECKOUT</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="checkout" role="tabpanel" aria-labelledby="checkout-tab">
                <div class="row">
                  <div class="col-lg-8 col-xl-9">
                    <div class="checkout_form style2">
                      <h4 class="title mb40">Billing Details</h4>
                      <div class="checkout_coupon ui_kit_button">
                        <form class="form2" id="coupon_form" name="contact_form" action="#" method="post">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="form-label">First name</label>
                                <input class="form-control form_control" type="text">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label class="form-label">Last name</label>
                                <input class="form-control form_control" type="text">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label class="form-label">Company name (optional)</label>
                                <input class="form-control form_control" type="text">
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="form-group">
                                <label class="form-label">Country / Region *</label>
                                <div class="checkout_country_form actegory">
                                  <select class="custom_select_dd" id="selectbox_alCategory2">
                                    <option>Country</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="UK">UK</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label class="form-label">Street address *</label>
                                <input class="form-control form_control mb10" type="text">
                                <input class="form-control form_control" type="text">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label class="form-label">Town / City *</label>
                                <input class="form-control form_control" type="number">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label class="form-label">State *</label>
                                <div class="checkout_country_form actegory">
                                  <select class="custom_select_dd" id="selectbox_alCategory3">
                                    <option>Country</option>
                                    <option value="Istanbul">Istanbul</option>
                                    <option value="London">London</option>
                                    <option value="NewYork">New York</option>
                                    <option value="Paris">Paris</option>
                                    <option value="Dubai">Dubai</option>
                                    <option value="Rome">Rome</option>
                                    <option value="Singapore">Singapore</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label class="form-label">ZIP *</label>
                                <input class="form-control form_control" type="text">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label class="form-label">Phone *</label>
                                <input name="form_phone" class="form-control form_control" type="number">
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label class="form-label">Your Email</label>
                                <input name="form_email" class="form-control form_control email" type="email">
                              </div>
                            </div>
                            <div class="col-sm-12">
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group mb0">
                                <label class="ai_title">Order notes (optional)</label>
                                <textarea name="form_message" class="form-control" rows="12" placeholder=""></textarea>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-xl-3">
                    <div class="order_sidebar_widget mb30">
                      <h4 class="title">Your Order</h4>
                      <ul>
                        <li class="subtitle"><p>Product <span class="float-end">Subtotal</span></p> <hr></li>
                        <li><p class="product_name_qnt">Silver Heinz Ketchup X 2 <span class="float-end">$259.00</span></p></li>
                        <li><p class="product_name_qnt">Pineapple (Tropical Gold) x 3 <span class="float-end">$259.00</span></p></li>
                        <li><p class="product_name_qnt">Pineapple (Tropical Gold) x 4 <span class="float-end">$259.00</span></p></li>
                        <li class="subtitle"><hr></li>
                        <li>
                          <div class="ui_kit_radiobox shopping_cart_radio_box">
                            <div class="radio">
                              <input id="radio_one" name="radio" type="radio" checked="">
                              <label for="radio_one"><span class="car_for_shipping">Shipping</span><span class="radio-label"></span>Flat rate: <span class="fwb text-thm">$20.00</span></label>
                            </div>
                            <div class="radio">
                              <input id="radio_two" name="radio" type="radio">
                              <label for="radio_two"><span class="radio-label"></span>Free shipping</label>
                            </div>
                            <div class="radio">
                              <input id="radio_three" name="radio" type="radio">
                              <label for="radio_three"><span class="radio-label"></span>Local pickup: <span class="fwb text-thm">$25.00</span></label>
                            </div>
                            <div class="radio">
                              <label for="radio_four"><span class="radio-label"></span> Shipping to AL.</label>
                            </div>
                            <div class="radio">
                              <label for="radio_four"><span class="radio-label"></span> <span class="fz14 fwb tdu text-thm">Change address</span></label>
                            </div>
                          </div>
                        </li>
                        <li class="subtitle"><hr></li>
                        <li class="subtitle"><p>Subtotal <span class="float-end totals text-thm">$907.00</span></p></li>
                        <li class="subtitle"><hr></li>
                      </ul>
                      <div class="ui_kit_radiobox checkout">
                        <div class="radio">
                          <input id="radio_five" name="radio" type="radio" checked="">
                          <label for="radio_five"><span class="radio-label"></span> Direct bank transfer</label>
                        </div>
                        <div class="bt_details">
                          <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.Your order will not be shipped until the funds have.</p>
                        </div>
                        <div class="radio">
                          <input id="radio_six" name="radio" type="radio">
                          <label for="radio_six"><span class="radio-label"></span> Cash on delivery</label>
                        </div>
                        <div class="radio">
                          <input id="radio_seven" name="radio" type="radio">
                          <label for="radio_seven"><span class="radio-label"></span> PayPal What is PayPal? <img src="Src/Assets/images/resource/payment.png" alt="payment.png"></label>
                        </div>
                      </div>
                      <div class="ui_kit_button payment_widget_btn">
                        <button type="button" class="btn btn-thm btn-block">PLACE ORDER</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade show active" id="prder" role="tabpanel" aria-labelledby="prder-tab">
                <div class="row justify-content-center">
                  <div class="col-lg-6">
                    <div class="order_complete_message text-center">
                      <div class="icon"><span class="fa fa-check text-white"></span></div>
                      <h2 class="title">Your order is completed!</h2>
                      <p class="para">Thank you. Your order has been received.</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-7 m-auto">
                    <div class="shop_order_box">
                      <div class="order_list_raw text-center">
                        <ul>
                          <li class="list-inline-item">
                            <p>Order Number</p>
                            <h5>13119</h5>
                          </li>
                          <li class="list-inline-item">
                            <p>Date</p>
                            <h5>27/07/2021</h5>
                          </li>
                          <li class="list-inline-item">
                            <p>Total</p>
                            <h5>$40.10</h5>
                          </li>
                          <li class="list-inline-item">
                            <p>Payment Method</p>
                            <h5>Direct Bank Transfer</h5>
                          </li>
                        </ul>
                      </div>
                      <div class="order_details">
                        <h4 class="title mb40">Order details</h4>
                        <div class="od_content">
                          <ul>
                            <li class="subtitle bb1 mb20 pb5"><p>Product <span class="float-end">Subtotal</span></p></li>
                            <li><p class="product_name_qnt">Hoodie x2 <span class="float-end">$59.00</span></p></li>
                            <li><p class="product_name_qnt">Seo Books x 1 <span class="float-end">$67.00</span></p></li>
                            <li class="subtitle bb1 mb15 mt20"><p>Subtotal <span class="float-end">$178.00</span></p></li>
                            <li class="subtitle bb1 mb20"><p>Shipping <span class="float-end fwn_bd_color">$178.00</span></p></li>
                            <li class="subtitle"><p>Total <span class="float-end totals">$9,218.00</span></p></li>
                          </ul>
                        </div>
                      </div>
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

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-shop-complete-order.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 11:46:39 GMT -->
</html>