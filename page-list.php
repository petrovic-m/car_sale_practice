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
  <section class="advance_search_menu_sectn bgc-thm2 pt20 pb0 mt70-992">
    <div class="container">
      <div class="row">
        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <select class="selectpicker show-tick">
              <option>Select Makes</option>
              <option>Audi</option>
              <option>Bentley</option>
              <option>BMW</option>
              <option>Ford</option>
              <option>Honda</option>
              <option>Mercedes</option>
            </select>
          </div>
        </div>
        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <select class="selectpicker show-tick">
              <option>Select Models</option>
              <option>A3 Sportback</option>
              <option>A4</option>
              <option>A6</option>
              <option>Q5</option>
            </select>
          </div>
        </div>
        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <select class="selectpicker show-tick">
              <option>Select Type</option>
              <option>Convertible</option>
              <option>Coupe</option>
              <option>Hatchback</option>
              <option>Sedan</option>
              <option>SUV</option>
            </select>
          </div>
        </div>
        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <a class="advance_dd_btn" href="#collapseAdvanceSearch" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseAdvanceSearch"><span class="flaticon-cogwheel"></span> Advanced</a>
          </div>
        </div>
        <div class="col col-sm-4 col-lg-2">
          <div class="advance_search_style">
            <a class="btn search_btn btn-thm" href="#"><span class="flaticon-magnifiying-glass"></span> Search</a>
          </div>
        </div>
      </div>
      <div class="collapse" id="collapseAdvanceSearch">
        <div class="row bgc-thm2">
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Year</option>
                <option>1967</option>
                <option>1990</option>
                <option>2000</option>
                <option>2002</option>
                <option>2005</option>
                <option>2010</option>
                <option>2015</option>
                <option>2020</option>
              </select>
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <input class="form-control form_control" type="text" placeholder="Min. Mileage">
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <input class="form-control form_control" type="text" placeholder="Max. Mileage">
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Fuel Type</option>
                <option>Diesel</option>
                <option>Electric</option>
                <option>Hybrid</option>
                <option>Petrol</option>
              </select>
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Transmission</option>
                <option>Autometic</option>
                <option>Manual</option>
                <option>Semi-Autometic</option>
              </select>
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Doors</option>
                <option>2 Doors</option>
                <option>3 Doors</option>
                <option>4 Doors</option>
                <option>5 Doors</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Interior Color</option>
                <option>Black</option>
                <option>Beige</option>
                <option>Brown</option>
                <option>Red</option>
              </select>
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Exterior Color</option>
                <option>Black</option>
                <option>Beige</option>
                <option>Brown</option>
                <option>Red</option>
              </select>
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Cylinders</option>
                <option>4</option>
                <option>6</option>
                <option>8</option>
              </select>
            </div>
          </div>
          <div class="col col-sm-4 col-lg-2">
            <div class="advance_search_style">
              <select class="selectpicker show-tick">
                <option>Listing Status</option>
                <option>Active</option>
                <option>Pending</option>
                <option>Disable</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="advance_search_style">
              <div class="uilayout_range">
                <h6 class="ass_price_title text-white text-start">Price</h6>
                <div id="slider"></div>
                <span id="slider-range-value1"></span>
                <span id="slider-range-value2"></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="advance_search_style">
              <div class="ui_kit_checkbox text-start">
                <h6 class="ass_feature_title text-white">Features</h6>
                <div class="df mb20">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Adaptive Cruise Control (6,676)</label>
                </div>
                <div class="df mb20">
                  <input type="checkbox" class="custom-control-input" id="customCheck2">
                  <label class="custom-control-label" for="customCheck2">Cooled Seats (9,784)</label>
                </div>
                <div class="df mb20">
                  <input type="checkbox" class="custom-control-input" id="customCheck3">
                  <label class="custom-control-label" for="customCheck3">Keyless Start (9,784)</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="advance_search_style">
              <div class="ui_kit_checkbox text-start pt40 pt0-sm">
                <div class="df mb20">
                  <input type="checkbox" class="custom-control-input" id="customCheck4">
                  <label class="custom-control-label" for="customCheck4">Navigation System (9,784)</label>
                </div>
                <div class="df mb20">
                  <input type="checkbox" class="custom-control-input" id="customCheck5">
                  <label class="custom-control-label" for="customCheck5">Remote Start (9,784)</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Inner Page Breadcrumb -->
  <section class="inner_page_breadcrumb style2 inner_page_section_spacing">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="breadcrumb_content style2">
            <h2 class="breadcrumb_title">Used Vehicles For Sale</h2>
            <p class="subtitle">Listings</p>
            <ol class="breadcrumb fn-sm mt15-sm">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cars for Sale</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Listing Grid View -->
  <section class="our-listing pt0 bgc-f9 pb30-991">
    <div class="container">
      <div class="row">
        <div class="listing_filter_row db-767">
          <div class="col-md-4">
            <div class="page_control_shorting left_area tac-sm mb30-767 mt15">
              <p>We found <span class="heading-color fw600">4733</span> Cars available for you</p>
            </div>
          </div>
          <div class="col-md-8">
            <div class="page_control_shorting right_area text-end tac-xsd">
              <ul>
                <li class="list-inline-item short_by_text listone">Sort by:</li>
                <li class="list-inline-item listwo">
                  <select class="selectpicker show-tick">
                    <option>Date: newest First</option>
                    <option>Most Recent</option>
                    <option>Recent</option>
                    <option>Best Selling</option>
                    <option>Old Review</option>
                  </select>
                </li>
                <li class="list-inline-item list-gird"><a href="#"><img src="Src/Assets/images/icon/list-grid.svg" alt="list-grid.svg"></a></li>
                <li class="list-inline-item list-list"><a href="#"><img src="Src/Assets/images/icon/list-list.svg" alt="list-list.svg"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
          <!-- PROOOOOBAAA  ------------------------- -->
          <?php require 'vendor/autoload.php';

//
//           $query = \App\Object\DatabaseQuery::findAll("car");
//
//           if($query):
//          foreach ($query as $item):

          ?>
          <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="car-listing">
                  <div class="thumb">
                      <div class="tag">FEATURED</div>
                      <img src="Src/Assets/images/listing/1.jpg" alt="1.jpg">
                      <div class="thmb_cntnt2">
                          <ul class="mb0">
                              <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                              <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                          </ul>
                      </div>
                      <div class="thmb_cntnt3">
                          <ul class="mb0">
                              <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="details">
                      <div class="wrapper">
                          <h5 class="price">$129</h5>
                          <h6 class="title"><a href="page-car-single.php">Volvo XC90 - 2020</a></h6>
                          <div class="listign_review">
                              <ul class="mb0">
                                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                  <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                  <li class="list-inline-item"><a href="#">4.7</a></li>
                                  <li class="list-inline-item">(684 reviews)</li>
                              </ul>
                          </div>
                      </div>
                      <div class="listing_footer">
                          <ul class="mb0">
                              <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                              <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
          <!-- PROOOOOBAAA  ------------------------- -->




































        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="car-listing">
            <div class="thumb">
              <div class="tag">FEATURED</div>
              <img src="Src/Assets/images/listing/1.jpg" alt="1.jpg">
              <div class="thmb_cntnt2">
                <ul class="mb0">
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                </ul>
              </div>
              <div class="thmb_cntnt3">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <div class="wrapper">
                <h5 class="price">$129</h5>
                <h6 class="title"><a href="page-car-single.php">Volvo XC90 - 2020</a></h6>
                <div class="listign_review">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#">4.7</a></li>
                    <li class="list-inline-item">(684 reviews)</li>
                  </ul>
                </div>
              </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="car-listing">
            <div class="thumb">
              <div class="tag">FEATURED</div>
              <img src="Src/Assets/images/listing/2.jpg" alt="2.jpg">
              <div class="thmb_cntnt2">
                <ul class="mb0">
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                </ul>
              </div>
              <div class="thmb_cntnt3">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <div class="wrapper">
                <h5 class="price">$56</h5>
                <h6 class="title"><a href="page-car-single.php">Mercedes-Benz S 560 - 2021</a></h6>
                <div class="listign_review">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#">4.7</a></li>
                    <li class="list-inline-item">(684 reviews)</li>
                  </ul>
                </div>
              </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="car-listing">
            <div class="thumb">
              <div class="tag">FEATURED</div>
              <img src="Src/Assets/images/listing/3.jpg" alt="3.jpg">
              <div class="thmb_cntnt2">
                <ul class="mb0">
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                </ul>
              </div>
              <div class="thmb_cntnt3">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <div class="wrapper">
                <h5 class="price">$230</h5>
                <h6 class="title"><a href="page-car-single.php">BMW M8 Gran Coupe Base - 2021</a></h6>
                <div class="listign_review">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#">4.7</a></li>
                    <li class="list-inline-item">(684 reviews)</li>
                  </ul>
                </div>
              </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="car-listing">
            <div class="thumb">
              <div class="tag">FEATURED</div>
              <img src="Src/Assets/images/listing/5.jpg" alt="5.jpg">
              <div class="thmb_cntnt2">
                <ul class="mb0">
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                </ul>
              </div>
              <div class="thmb_cntnt3">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <div class="wrapper">
                <h5 class="price">$129</h5>
                <h6 class="title"><a href="page-car-single.php">Audi A8 L 55 - 2021</a></h6>
                <div class="listign_review">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#">4.7</a></li>
                    <li class="list-inline-item">(684 reviews)</li>
                  </ul>
                </div>
              </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="car-listing">
            <div class="thumb">
              <div class="tag">FEATURED</div>
              <img src="Src/Assets/images/listing/6.jpg" alt="6.jpg">
              <div class="thmb_cntnt2">
                <ul class="mb0">
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                </ul>
              </div>
              <div class="thmb_cntnt3">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <div class="wrapper">
                <h5 class="price">$56</h5>
                <h6 class="title"><a href="page-car-single.php">Land Rover Range Rover HSE Westminster</a></h6>
                <div class="listign_review">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#">4.7</a></li>
                    <li class="list-inline-item">(684 reviews)</li>
                  </ul>
                </div>
              </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="car-listing">
            <div class="thumb">
              <div class="tag">FEATURED</div>
              <img src="Src/Assets/images/listing/7.jpg" alt="7.jpg">
              <div class="thmb_cntnt2">
                <ul class="mb0">
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                </ul>
              </div>
              <div class="thmb_cntnt3">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <div class="wrapper">
                <h5 class="price">$230</h5>
                <h6 class="title"><a href="page-car-single.php">Bentley Bentayga V8 - 2020</a></h6>
                <div class="listign_review">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#">4.7</a></li>
                    <li class="list-inline-item">(684 reviews)</li>
                  </ul>
                </div>
              </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="car-listing">
            <div class="thumb">
              <div class="tag">FEATURED</div>
              <img src="Src/Assets/images/listing/8.jpg" alt="8.jpg">
              <div class="thmb_cntnt2">
                <ul class="mb0">
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                </ul>
              </div>
              <div class="thmb_cntnt3">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <div class="wrapper">
                <h5 class="price">$478</h5>
                <h6 class="title"><a href="page-car-single.php">Ferrari 488 Spider Base - 2019</a></h6>
                <div class="listign_review">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#">4.7</a></li>
                    <li class="list-inline-item">(684 reviews)</li>
                  </ul>
                </div>
              </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="car-listing">
            <div class="thumb">
              <div class="tag">FEATURED</div>
              <img src="Src/Assets/images/listing/9.jpg" alt="9.jpg">
              <div class="thmb_cntnt2">
                <ul class="mb0">
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                </ul>
              </div>
              <div class="thmb_cntnt3">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <div class="wrapper">
                <h5 class="price">$478</h5>
                <h6 class="title"><a href="#">Audi A3 Hatchback - 2021</a></h6>
                <div class="listign_review">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#">4.7</a></li>
                    <li class="list-inline-item">(684 reviews)</li>
                  </ul>
                </div>
              </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="car-listing">
            <div class="thumb">
              <div class="tag">FEATURED</div>
              <img src="Src/Assets/images/listing/4.jpg" alt="4.jpg">
              <div class="thmb_cntnt2">
                <ul class="mb0">
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                </ul>
              </div>
              <div class="thmb_cntnt3">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <div class="wrapper">
                <h5 class="price">$478</h5>
                <h6 class="title"><a href="page-car-single.php">Nıssan Qasqai - Sky Pack</a></h6>
                <div class="listign_review">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#">4.7</a></li>
                    <li class="list-inline-item">(684 reviews)</li>
                  </ul>
                </div>
              </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="car-listing">
            <div class="thumb">
              <div class="tag">FEATURED</div>
              <img src="Src/Assets/images/listing/10.jpg" alt="10.jpg">
              <div class="thmb_cntnt2">
                <ul class="mb0">
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                </ul>
              </div>
              <div class="thmb_cntnt3">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <div class="wrapper">
                <h5 class="price">$129</h5>
                <h6 class="title"><a href="page-car-single.php">Volvo XC90 - 2020</a></h6>
                <div class="listign_review">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#">4.7</a></li>
                    <li class="list-inline-item">(684 reviews)</li>
                  </ul>
                </div>
              </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="car-listing">
            <div class="thumb">
              <div class="tag">FEATURED</div>
              <img src="Src/Assets/images/listing/11.jpg" alt="11.jpg">
              <div class="thmb_cntnt2">
                <ul class="mb0">
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                </ul>
              </div>
              <div class="thmb_cntnt3">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <div class="wrapper">
                <h5 class="price">$230</h5>
                <h6 class="title"><a href="page-car-single.php">BMW M8 Gran Coupe Base - 2021</a></h6>
                <div class="listign_review">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#">4.7</a></li>
                    <li class="list-inline-item">(684 reviews)</li>
                  </ul>
                </div>
              </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="car-listing">
            <div class="thumb">
              <div class="tag">FEATURED</div>
              <img src="Src/Assets/images/listing/12.jpg" alt="12.jpg">
              <div class="thmb_cntnt2">
                <ul class="mb0">
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                  <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                </ul>
              </div>
              <div class="thmb_cntnt3">
                <ul class="mb0">
                  <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                  <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="details">
              <div class="wrapper">
                <h5 class="price">$230</h5>
                <h6 class="title"><a href="page-car-single.php">Audi A8 L 55 - 2021</a></h6>
                <div class="listign_review">
                  <ul class="mb0">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                    <li class="list-inline-item"><a href="#">4.7</a></li>
                    <li class="list-inline-item">(684 reviews)</li>
                  </ul>
                </div>
              </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="mbp_pagination mt10">
            <ul class="page_navigation">
              <li class="page-item">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="fa fa-arrow-left"></span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><span class="fa fa-arrow-right"></span></a>
              </li>
            </ul>
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
<script src="Src/Assets/js/isotop.js"></script>
<script src="Src/Assets/js/snackbar.min.js"></script>
<script src="Src/Assets/js/simplebar.js"></script>
<script src="Src/Assets/js/parallax.js"></script>
<script src="Src/Assets/js/scrollto.js"></script>
<script src="Src/Assets/js/jquery-scrolltofixed-min.js"></script>
<script src="Src/Assets/js/jquery.counterup.js"></script>
<script src="Src/Assets/js/wow.min.js"></script>
<script src="Src/Assets/js/progressbar.js"></script>
<script src="Src/Assets/js/slider.js"></script>
<script src="Src/Assets/js/pricing-slider.js"></script>
<script src="Src/Assets/js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script src="Src/Assets/js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-list-v1.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 11:45:24 GMT -->
</html>