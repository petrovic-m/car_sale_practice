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
  <section class="inner_page_breadcrumb style2 pb50 bgc-f9 bt1">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="breadcrumb_content style2">
            <h2 class="breadcrumb_title">UI Elements</h2>
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
  
  <!-- UI Accordions, Tabs & other elements -->
  <section class="our-ui-elements bgc-f9 pt0">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="shortcode_widget_accprdons">
            <h4 class="short_code_title">Accordions</h4>
            <div class="faq_according">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header active" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why won't my payment go through?</button>
                    </h2>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="mb25">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.</p>
                      <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.Placerat quis vel fames interdum urna lobortis sagittis sed pretium.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How do I get a refund?</button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="mb25">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.</p>
                      <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.Placerat quis vel fames interdum urna lobortis sagittis sed pretium.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How do I redeem a coupon?</button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="mb25">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.</p>
                      <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.Placerat quis vel fames interdum urna lobortis sagittis sed pretium.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Changing account name</button>
                    </h2>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                      <p class="mb25">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.</p>
                      <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.Placerat quis vel fames interdum urna lobortis sagittis sed pretium.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="shortcode_widget_tab">
            <h4 class="short_code_title">Tabs</h4>
            <div class="ui_kit_tab mt30"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home">Items 1</a> </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#menu1">Items 2</a> </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#menu2">Items 3</a> </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div id="home2" class="container tab-pane active">
                  <p class="mb25">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.</p>
                  <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.Placerat quis vel fames interdum urna lobortis sagittis sed pretium.</p>
                </div>
                <div id="menu1" class="container tab-pane fade">
                  <p class="mb25">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.</p>
                  <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.Placerat quis vel fames interdum urna lobortis sagittis sed pretium.</p>
                </div>
                <div id="menu2" class="container tab-pane fade">
                  <p class="mb25">Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus.</p>
                  <p>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.Placerat quis vel fames interdum urna lobortis sagittis sed pretium.</p>
                </div>
              </div>
            </div>
            <div class="ui_kit_tab style2 mt30"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#home2">Items <span class="heading-color">1</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#menu4">Items <span class="heading-color">2</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#menu5">Items <span class="heading-color">3</span></a> </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div id="home3" class="container tab-pane active">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. <br><br>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>
                <div id="menu4" class="container tab-pane fade">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. <br><br>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>
                <div id="menu5" class="container tab-pane fade">
                  <p>Pharetra nulla ullamcorper sit lectus. Fermentum mauris pellentesque nec nibh sed et, vel diam, massa. Placerat quis vel fames interdum urna lobortis sagittis sed pretium. Aliquam eget posuere sit enim elementum nulla vulputate magna. Morbi sed arcu proin quis tortor non risus. <br><br>Elementum lectus a porta commodo suspendisse arcu, aliquam lectus faucibus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="shortcode_widget_table">
            <h4 class="short_code_title">Table</h4>
            <div class="ui_kit_table">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Description</th>
                    <th scope="col">Hour</th>
                    <th scope="col">Quantity</th>
                  </tr>
                </thead>
              </table>
            </div>
            <div class="ui_kit_table">
              <table class="table">
                <tbody>
                  <tr>
                    <td class="body-color">Design UX and UI</td>
                    <td class="body-color">14</td>
                    <td class="body-color">3</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="ui_kit_table">
              <table class="table">
                <tbody>
                  <tr>
                    <td class="body-color">Design UX and UI</td>
                    <td class="body-color">14</td>
                    <td class="body-color">3</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="ui_kit_table">
              <table class="table">
                <tbody>
                  <tr>
                    <td class="body-color">Design UX and UI</td>
                    <td class="body-color">14</td>
                    <td class="body-color">3</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="ui_kit_table">
              <table class="table">
                <tbody>
                  <tr>
                    <td class="body-color">Design UX and UI</td>
                    <td class="body-color">14</td>
                    <td class="body-color">3</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="shortcode_widget_message_box">
            <h4 class="short_code_title">Message Boxes</h4>
            <div class="ui_kit_message_box">
              <div class="alert alart_style_one alert-dismissible fade show" role="alert"> Info: User pending action
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>
            <div class="ui_kit_message_box">
              <div class="alert alart_style_two alert-dismissible fade show" role="alert"> Warning: User has to be admin
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>
            <div class="ui_kit_message_box">
              <div class="alert alart_style_three alert-dismissible fade show" role="alert"> Error: Internal Server Error
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>
            <div class="ui_kit_message_box">
              <div class="alert alart_style_four alert-dismissible fade show" role="alert"> Success: Updated members status
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="shortcode_widget_buttons">
            <h4 class="short_code_title">Buttons</h4>
            <div class="ui_kit_button mb35">
              <button type="button" class="btn btn-lg btn-primary">Primary</button>
              <button type="button" class="btn btn-lg btn-secondary">Secondary</button>
              <button type="button" class="btn btn-lg btn-success">Success</button>
              <button type="button" class="btn btn-lg btn-danger">Danger</button>
              <button type="button" class="btn btn-lg btn-warning">Warning</button>
              <button type="button" class="btn btn-lg btn-info">Info</button>
              <button type="button" class="btn btn-lg btn-light mt10">Light</button>
            </div>
            <div class="ui_kit_button mb35">
              <button type="button" class="btn btn-lg btn-thm">Button</button>
              <button type="button" class="btn btn-lg btn-dark">Button</button>
              <button type="button" class="btn btn-lg btn-gray">Button</button>
              <button type="button" class="btn btn-lg btn-transparent">Button</button>
              <button type="button" class="btn btn-lg btn-green">Button</button>
              <button type="button" class="btn btn-lg btn-white">Button</button>
            </div>
            <div class="ui_kit_button mb35">
              <button type="button" class="btn dbxshad btn-lg btn-thm white">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-thm rounded">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-dark rounded">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-thm2 rounded">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-thm3 rounded">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-thm4 rounded">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-yellow rounded">Button</button>
            </div>
            <div class="ui_kit_button">
              <button type="button" class="btn dbxshad btn-lg btn-thm circle white">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-thm circle">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-dark circle">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-thm2 circle">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-thm3 circle">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-thm4 circle">Button</button>
              <button type="button" class="btn dbxshad btn-lg btn-yellow circle">Button</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="shortcode_form_title">
            <h4 class="short_code_title">Form</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="shortcode_widget_form">
            <div class="ui_kit_input mb25">
              <form>
                <h5 class="short_code_title">Input</h5>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ali Tuf..">
                </div>
              </form>
            </div>
            <div class="ui_kit_select_box">
              <h5 class="short_code_title">Search Select boxes, Hover</h5>
              <select class="selectpicker" data-live-search="true" data-width="100%">
                <option data-tokens="Banking">Banking</option>
                <option data-tokens="Digital&Creative">Digital & Creative</option>
                <option data-tokens="Retail">Retail</option>
                <option data-tokens="Designer">Designer</option>
                <option data-tokens="Developer">Developer</option>
              </select>
            </div>
            <div class="ui_kit_textarea mt30">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="6" placeholder="Textarea"></textarea>
                </div>
              </form>
            </div>
            <div class="ui_kit_tooltip mt50">
              <h4 class="short_code_title">Tooltips</h4>
              <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Top"> Top </button>
              <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Bottom"> Bottom </button>
              <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Left"> Left </button>
              <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="right" title="Right"> Right </button>
            </div>
            <div class="price_range_slider_new mt100 mt30-sm mb30-md">
              <div class="wrapper">
                <h4 class="short_code_title">Range Slider</h4>
                <div class="uilayout_range mt100">
                  <input class="range-uilayouts" type="text" value="40,892" name="points"/>
                  <!-- <input class="range-uilayouts" type="text" min="0" max="1000" value="40,892" name="points"/>  -->  

                  <div class="slider-range mt80"></div>
                  <input type="text" class="amount" placeholder="$5,000"> 
                  <input type="text" class="amount2" placeholder="$15,000">

                  <div class="mt50" id="slider"></div>
                  <span id="slider-range-value1"></span>
                  <span id="slider-range-value2"></span>

                  <div class="sidebar_range_slider mb30 mt150">
                    <input class="range-example-km mb20" value="50" type="text">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="ui_kit_select_box">
            <h5 class="short_code_title">Select boxes</h5>
            <select class="selectpicker custom-select-lg mb-3">
              <option value="one">Item 1</option>
              <option value="Two">Item 2</option>
              <option value="Three">Item 3</option>
            </select>
          </div>
          <div class="shortcode_widget_multiselect">
            <h5 class="short_code_title">Multiple Select Boxes, Hover</h5>
            <div class="ui_kit_multi_select_box">
              <select class="selectpicker" multiple>
                <option>Banking</option>
                <option>Digital&Creative</option>
                <option>RetCail</option>
                <option>Human Resources</option>
                <option>Management</option>
              </select>
            </div>            
          </div>
          <div class="row mt50">
            <div class="col-lg-4">
              <div class="shortcode_widget_radiobox mb30-md">
                <h5 class="short_code_title">Radiobox</h5>
                <div class="ui_kit_radiobox">
                  <div class="radio">
                    <input id="radio_one" name="radio" type="radio" checked="">
                    <label for="radio_one"><span class="radio-label"></span> Item</label>
                  </div>
                  <div class="radio">
                    <input id="radio_two" name="radio" type="radio">
                    <label for="radio_two"><span class="radio-label"></span> Item</label>
                  </div>
                  <div class="radio">
                    <input id="radio_three" name="radio" type="radio">
                    <label for="radio_three"><span class="radio-label"></span> Item</label>
                  </div>
                  <div class="radio">
                    <input id="radio_four" name="radio" type="radio">
                    <label for="radio_four"><span class="radio-label"></span> Item</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="shortcode_widget_checkbox mb30-md">
                <h5 class="mb20 short_code_title">Checkbox</h5>
                <div class="ui_kit_checkbox">
                  <div class="df mb20">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Items</label>
                  </div>
                  <div class="df mb20">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Items</label>
                  </div>
                  <div class="df mb20">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">Items</label>
                  </div>
                  <div class="df">
                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">Items</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="shortcode_widget_switch">
                <h5 class="mb20 short_code_title">Switch</h5>
                <div class="ui_kit_whitchbox">
                  <div class="form-check form-switch mb30">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Items</label>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Items</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ui_kit_progress_bar mt50">
            <div class="shortcode_widget_progressbar">
              <h4 class="mb40">Progress bars</h4>
              <div class="progress-levels">
                <div class="progress-box wow animated" data-wow-delay="100ms" data-wow-duration="1500ms"> <br>
                  <div class="inner">
                    <div class="bar">
                      <div class="bar-innner">
                        <div class="bar-fill" data-percent="90">
                          <div class="percent">90%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="progress-box wow animated" data-wow-delay="200ms" data-wow-duration="1500ms"> <br>
                  <div class="inner">
                    <div class="bar">
                      <div class="bar-innner">
                        <div class="bar-fill" data-percent="50">
                          <div class="percent">50%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="progress-box wow animated" data-wow-delay="300ms" data-wow-duration="1500ms"> <br>
                  <div class="inner">
                    <div class="bar">
                      <div class="bar-innner">
                        <div class="bar-fill" data-percent="40">
                          <div class="percent">40%</div>
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
      <div class="row mt100">
        <div class="col-lg-12">
          <div class="ui_page_heading mb40">
            <h4 class="main_title mb35">Typography</h4>
            <h5 class="short_code_title mb15">Course Description</h5>
            <p class="mb25">Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue. Nullam tempus sollicitudin cursus. Ut et adipiscing erat. Curabitur this is a text link libero tempus congue.</p>
            <p class="mb20">Duis mattis laoreet neque, et ornare neque sollicitudin at. Proin sagittis dolor sed mi elementum pretium. Donec et justo ante. Vivamus egestas sodales est, eu rhoncus urna semper eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tristique elit lobortis purus bibendum, quis dictum metus mattis. Phasellus posuere felis sed eros porttitor mattis. Curabitur massa magna, tempor in blandit id, porta in ligula. Aliquam laoreet nisl massa, at interdum mauris sollicitudin et.</p>
            <blockquote class="blockquote mt50">
              <h4 class="title">Consectetur adipiscing elit. Vitae, feugiat amet varius senectus bibendum cum nunc. Venenatis, lacus leo, semper porttitor sapien id in aliquet risus. Risus, faucibus lectus rhoncus cum duis non. Posuere pharetra felis, et urna enim id.</h4>
              <figcaption class="blockquote-footer">Luis Pickford</figcaption>
            </blockquote>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ui_page_heading mb30-md">
            <h4 class="short_code_title mb25">Requirettments</h4>
            <ul class="order_list list-style-type-bullet">
              <li><a href="#">We do not require any previous experience or pre-defined skills to take this course. A great orientation would be enough to master UI/UX design.</a></li>
              <li><a href="#">A computer with a good internet connection.</a></li>
              <li><a href="#">Adobe Photoshop (OPTIONAL)</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ui_page_heading">
            <h4 class="mb25 short_code_title">What you'll learn</h4>
            <ul class="order_list list-style-check-circle">
              <li><a href="#">Become a UI/UX designer.</a></li>
              <li><a href="#">You will be able to start earning money Figma skills.</a></li>
              <li><a href="#">Build a UI project from beginning to end.</a></li>
              <li><a href="#">Work with colors & fonts.</a></li>
              <li><a href="#">You will create your own UI Kit.</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row mt40">
        <div class="col-lg-12">
          <h4 class="mb25 short_code_title">Counter</h4>
          <div class="event_counter_plugin_container">
            <div class="event_counter_plugin_content">
              <ul>
                <li class="text-center">days<span id="days"></span></li>
                <li class="text-center">Hours<span id="hours"></span></li>
                <li class="text-center">Minutes<span id="minutes"></span></li>
                <li class="text-center">Seconds<span id="seconds"></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt40">
        <div class="col-lg-4">
          <h4 class="mb25 short_code_title">Custom Dropdown</h4>
          <div class="listing_price_tag posr">
            <div class="tag_btn mega_tags_dropdown">Tags <span class="fa fa-angle-down"></span></div>
            <div class="tag_dropdown_content">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="ui_kit_checkbox selectable-list tal-767">
                    <li>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck8">
                        <label class="custom-control-label mb0" for="customCheck8">Accepts Credit Cards</label>
                      </div>
                    </li>
                    <li>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck9">
                        <label class="custom-control-label mb0" for="customCheck9">Smoking Allowed</label>
                      </div>
                    </li>
                    <li>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck10">
                        <label class="custom-control-label mb0" for="customCheck10">Bike Parking</label>
                      </div>
                    </li>
                    <li>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck11">
                        <label class="custom-control-label mb0" for="customCheck11">Street Parking</label>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="ui_kit_checkbox selectable-list tal-767">
                    <li>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                        <label class="custom-control-label mb0" for="customCheck5">Wireless Internet</label>
                      </div>
                    </li>
                    <li>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                        <label class="custom-control-label mb0" for="customCheck6">Alcohol</label>
                      </div>
                    </li>
                    <li>
                      <div class="df mb20">
                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                        <label class="custom-control-label mb0" for="customCheck7">Pet Friendly</label>
                      </div>
                    </li>
                  </ul>
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
<script src="Src/Assets/js/pricing-slider.js"></script>
<script src="Src/Assets/js/timepicker.js"></script>
<script src="Src/Assets/js/single-counter.js"></script>
<!-- Custom script for all pages --> 
<script src="Src/Assets/js/script.js"></script>
</body>

<!-- Mirrored from creativelayers.net/themes/voiture-html/page-ui-element.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 11:46:55 GMT -->
</html>