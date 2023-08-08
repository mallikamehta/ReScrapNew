@extends('layout')
@section('content')
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 pt-5">
                <div class="col-12 text-center text-lg-start">
                    <h1 class="display-4 text-white animated slideInLeft"> Scrap Price List</h1>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(29, 40, 51, 0.8);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Electronics Items Scrap -->
    <div class="container">
        <div class="mid_area">
            <div class="cms_area">

                <div class="row">
                    <div class="col-lg-3 mb-4">
                        <div class="list_left">
                            <p class="fs11 float-right clear_all"><a href="products.html" class="uu ">Clear All</a></p>

                            <h2 class="fs14 d-none d-lg-block"><b>Filter Results</b></h2>

                            <h2 class="d-md-block d-lg-none show_next hand">Filter Results <i class="fas fa-bars"></i>
                                <p class="clearfix"></p>
                            </h2>
                            <div class="filter_dis">
                                <div class="flter_bx">
                                    <div class="filt_hed">Categories</div>
                                    <div id="categories_list" class="list_area">
                                        <p class="left_attribute1 collapsed" data-toggle="collapse"
                                            data-target="#cat1">
                                            <a href="{{url('paper')}}">Paper</a>
                                        </p>
                                        <div id="cat1" class="collapse ml20 mb10 subcate_list">
    
                                        </div>
                                        <p class="left_attribute1 collapsed" data-toggle="collapse"
                                            data-target="#cat2">
                                            <a href="{{url('plastic')}}">Plastic</a>
                                        </p>
                                        <div id="cat2" class="collapse ml20 mb10 subcate_list">
    
                                        </div>
                                        <p class="left_attribute1 collapsed" data-toggle="collapse"
                                            data-target="#cat3">
                                            <a href="{{url('iron')}}">Iron Items</a>
                                        </p>
                                        <div id="cat3" class="collapse ml20 mb10 subcate_list">
    
                                        </div>
                                        <p class="left_attribute1 collapsed" data-toggle="collapse"
                                            data-target="#cat4">
                                            <a href="{{url('copper')}}">Copper Items</a>
                                        </p>
                                        <div id="cat4" class="collapse ml20 mb10 subcate_list">
    
                                        </div>
                                        <p class="left_attribute1 collapsed" data-toggle="collapse"
                                            data-target="#cat5">
                                            <a href="{{url('electronic')}}">Electronic Items</a>
                                        </p>
                                        <div id="cat5" class="collapse ml20 mb10 subcate_list">
    
                                        </div>
                                        <p class="left_attribute1 collapsed" data-toggle="collapse"
                                            data-target="#cat6">
                                            <a href="{{url('metal')}}">Metal-Others</a>
                                        </p>
                                        <div id="cat6" class="collapse ml20 mb10 subcate_list">
    
                                        </div>
                                        <p class="left_attribute1 collapsed" data-toggle="collapse"
                                            data-target="#cat7">
                                            <a href="{{url('glass')}}">Glass</a>
                                        </p>
                                        <div id="cat7" class="collapse ml20 mb10 subcate_list">
    
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h1 class="mb20">Scrap Price List</h1>
                        <div class="scrap_listing">
                            <form action="" id="myform" method="post" accept-charset="utf-8">
                                <input type="hidden" name="per_page" value="">
                                <input type="hidden" name="offset" value="0">
                            </form>
                            <div id="my_data">
                                <ul id="prodListingContainer">
                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/washingmachine.jpg" alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles">Washing Machine per piece</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;750.00/piece</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;750.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>
                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/air-conditioner-india-feature.webp"
                                                        alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles">AC 1.5tn PP Copper Wiring</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;4,000.00/piece</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;3,500.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>
                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/air-conditioner-india-feature.webp"
                                                        alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles">AC 1tn PP Copper Wiring</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;2,700.00/piece</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;2,000.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>
                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/air-conditioner-india-feature.webp"
                                                        alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles">AC 2tn PP Copper Wiring</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;5,000.00/piece</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;4,000.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>
                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/refrigerator.jpg" alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles">Refrigerator per piece</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;900.00/piece</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;800.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>
                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/double-door-refrigerator.jpg"
                                                        alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles">Double Door Fridge per piece</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;1,200.00/piece</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;1,100.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>
                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/Battery.jpg" alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles"> battery</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;75.00/kg</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;80.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>

                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/microwave.jpeg" alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles">Microwave</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;250.00/piece</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;250.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>
                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/CRT TV.jpeg" alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles">T V CRT TV</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;150.00/piece</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;250.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>
                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/led tv.jpeg" alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles">Led TV</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;200.00/piece</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;250.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>
                                    <li class="listpager">
                                        <div class="scrap_w">
                                            <div class="scrap_img">
                                                <figure><img src="img/product/FAN.jpeg" alt=""></figure>
                                            </div>
                                            <div class="scrap_ttl" title="Beer Bottles">Fan</div>
                                            <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;200.00/piece</p>

                                            <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;200.00</p>

                                            <p class="mt-2 text-center">
                                                <a href="{{url('pickup')}}" class="green_btn pop"
                                                    data-type="iframe">Pickup Request</a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="ac pt25 pb25 bt2" id="loadingdiv"><img
                                        src="https://www.kabadixpress.com/assets/designer/themes/default/images/ajax-loader.gif"
                                        width="128" height="15" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>


    <!-- Electronics ItemsEnd -->
@endsection
