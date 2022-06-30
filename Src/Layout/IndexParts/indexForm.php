<?php
//
//    require 'vendor/autoload.php';
//
//    $car = new App\Object\DatabaseQuery();

?>
<section class="home-one bg-home1">
    <div class="container">
        <div class="row posr">
            <div class="col-lg-10 m-auto">
                <div class="home_content home1_style">
                    <div class="home-text text-center mb30">
                        <h2 class="title">
                            <span class="aminated-object1">
                                <img class="objects"
                                     src="Src/Assets/images/home/title-bottom-border.svg"
                                     alt="">
                            </span>Find Your Next Match</h2>
                        <p class="para">Find the right price, dealer and advice.</p>
                    </div>
                    <div class="advance_search_panel">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="adss_bg_stylehome1">
                                    <div class="tab-content"
                                         id="pills-tabContent">
                                        <div class="tab-pane fade show active"
                                             id="pills-allstatus"
                                             role="tabpanel"
                                             aria-labelledby="pills-allstatus-tab">
                                            <form action="page-list.php" method="get">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="home1_advance_search_wrapper">
                                                            <ul class="mb0 text-center">
                                                                <li class="list-inline-item">
                                                                    <div class="select-boxes">
                                                                        <div class="car_brand">
                                                                            <h6 class="title">Make</h6>
                                                                            <select name="optionMake" class="selectpicker">
                                                                                <option value="allMakes">Select Makes</option>
                                                                                <?php
//                                                                                $make = $car::findAll("make");
//                                                                                    if($make):
//                                                                                        foreach ($make as $item):
//                                                                                ?>
<!--                                                                                <option value="--><?php //echo $item['Make']; ?><!--">--><?php //echo $item['Make']; ?><!--</option>-->
<!--                                                                                --><?php
//                                                                                        endforeach;
//                                                                                    endif;
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <div class="select-boxes">
                                                                        <div class="car_models">
                                                                            <h6 class="title">Models</h6>
                                                                            <select name="optionModel" class="selectpicker">
                                                                                <option value="allModels">Select Models</option>
                                                                                <?php
//                                                                                $model = $car::findAll("model");
//                                                                                if($model):
//                                                                                    foreach ($model as $item):
//                                                                                        ?>
<!--                                                                                        <option value="--><?php //echo $item['Model']; ?><!--">--><?php //echo $item['Model']; ?><!--</option>-->
<!--                                                                                        --><?php
//                                                                                    endforeach;
//                                                                                endif;
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <div class="select-boxes">
                                                                        <div class="car_prices">
                                                                            <h6 class="title">Price</h6>
                                                                            <select name="optionPrice" class="selectpicker">
                                                                                <option value="allPrice">All Price</option>
                                                                                <?php
//                                                                                $price = $car::findAll("price");
//                                                                                if($price):
//                                                                                    foreach ($price as $item):
//
//                                                                                        ?>
<!--                                                                                        <option value="--><?php //echo $item['Price']; ?><!--">--><?php //echo $item['Price']; ?><!--</option>-->
<!--                                                                                            --><?php
//                                                                                        endforeach;
//                                                                                    endif;
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <div class="d-block">
                                                                        <button type="submit"
                                                                                name="submit"
                                                                                class="btn btn-thm advnc_search_form_btn">
                                                                            <span class="flaticon-magnifiying-glass"></span>Search
                                                                        </button>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade"
                                             id="pills-usedcar"
                                             role="tabpanel"
                                             aria-labelledby="pills-usedcar-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="home1_advance_search_wrapper">
                                                        <ul class="mb0 text-center">
                                                            <li class="list-inline-item">
                                                                <div class="select-boxes">
                                                                    <div class="car_brand">
                                                                        <h6 class="title">Make</h6>
                                                                        <select class="selectpicker">
                                                                            <?php
//                                                                            $make = $car::findAll("make");
//                                                                            if($make):
//                                                                                foreach ($make as $item):
//                                                                                    ?>
<!--                                                                                    <option>--><?php //echo $item['Make']; ?><!--</option>-->
<!--                                                                                --><?php
//                                                                                endforeach;
//                                                                            endif;
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="select-boxes">
                                                                    <div class="car_models">
                                                                        <h6 class="title">Models</h6>
                                                                        <select class="selectpicker">
                                                                            <option>Select Models</option>
                                                                            <?php
//                                                                            $model = $car::findAll("model");
//                                                                            if($model):
//                                                                                foreach ($model as $item):
//                                                                                    ?>
<!--                                                                                    <option>--><?php //echo $item['Model']; ?><!--</option>-->
<!--                                                                                --><?php
//                                                                                endforeach;
//                                                                            endif;
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="select-boxes">
                                                                    <div class="car_prices">
                                                                        <h6 class="title">Price</h6>
                                                                        <select class="selectpicker">
                                                                            <option>All Price</option>
                                                                            <?php
//                                                                            $price = $car::findAll("price");
//                                                                            if($price):
//                                                                                foreach ($price as $item):
//
//                                                                                    ?>
<!--                                                                                    <option>--><?php //echo $item['Price']; ?><!--</option>-->
<!--                                                                                --><?php
//                                                                                endforeach;
//                                                                            endif;
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="select-boxes">
                                                                    <button class="btn btn-thm advnc_search_form_btn"><span class="flaticon-magnifiying-glass"></span>Search
                                                                    </button>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade"
                                             id="pills-newcar"
                                             role="tabpanel"
                                             aria-labelledby="pills-newcar-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="home1_advance_search_wrapper">
                                                        <ul class="mb0 text-center">
                                                            <li class="list-inline-item">
                                                                <div class="select-boxes">
                                                                    <div class="car_brand">
                                                                        <h6 class="title">Make</h6>
                                                                        <select class="selectpicker">
                                                                            <option>Select Makes</option>
                                                                            <?php
//                                                                            $make = $car::findAll("make");
//                                                                            if($make):
//                                                                                foreach ($make as $item):
//                                                                                    ?>
<!--                                                                                    <option>--><?php //echo $item['Make']; ?><!--</option>-->
<!--                                                                                --><?php
//                                                                                endforeach;
//                                                                            endif;
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="select-boxes">
                                                                    <div class="car_models">
                                                                        <h6 class="title">Models</h6>
                                                                        <select class="selectpicker">
                                                                            <?php
//                                                                            $model = $car::findAll("price");
//                                                                            if($model):
//                                                                                foreach ($model as $item):
//
//                                                                                    ?>
<!--                                                                                    <option>--><?php //echo $item['Price']; ?><!--</option>-->
<!--                                                                                --><?php
//                                                                                endforeach;
//                                                                            endif;
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="select-boxes">
                                                                    <div class="car_prices">
                                                                        <h6 class="title">Price</h6>
                                                                        <select class="selectpicker">
                                                                            <?php
//                                                                            $price = $car::findAll("model");
//                                                                            if($price):
//                                                                                foreach ($price as $item):
//                                                                                    ?>
<!--                                                                                    <option>--><?php //echo $item['Model']; ?><!--</option>-->
<!--                                                                                --><?php
//                                                                                endforeach;
//                                                                            endif;
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="select-boxes">
                                                                    <button class="btn btn-thm advnc_search_form_btn"><span class="flaticon-magnifiying-glass"></span>Search</button>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  