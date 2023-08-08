@extends('layout')
@section('content')

<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 pt-5">
            <div class="col-12 text-center text-lg-start">
                <h1 class="display-4 text-white animated slideInLeft">Scrap Price List</h1>

            </div>
        </div>
    </div>
</div>
</div>
 <!-- Full Screen Search Start -->
 <div class="modal fade" id="searchModal" tabindex="-1">
    <section class="vh-100_del" style="padding-top:100px;">
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

<!-- Product Start -->

<div class="container">
    <div class="mid_area">
        <div class="cms_area">

            <div class="row">
                <div class="col-lg-3 mb-4">
                    <div class="list_left">
                        <p class="fs11 float-right clear_all"><a href="products.html" class="uu ">Clear All</a>
                        </p>

                        <h2 class="fs14 d-none d-lg-block"><b>Filter Results</b></h2>

                        <h2 class="d-md-block d-lg-none show_next hand">Filter Results <i
                                class="fas fa-bars"></i>
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
                                            <figure><img src="img/product/dishwasher.jpg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Dishwasher</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;1500.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;1500.00
                                        </p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>
                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/printer.jpeg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">printer</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;350.00/kg</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;500.00
                                        </p>

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

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;200.00
                                        </p>

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
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;700.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;1000.00
                                        </p>

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
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;300.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;600.00
                                        </p>

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
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;500.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;700.00
                                        </p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>
                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/gyser.jpeg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Gyser 25ltr steel</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;500.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;700.00
                                        </p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>
                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/gyser.jpeg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Gyser 25 ltr copper</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;800.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;1000.00
                                        </p>

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
                                        <div class="scrap_ttl" title="Beer Bottles">Black Battery</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;70.00/kg</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b> &#8377;&nbsp;70.00
                                        </p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>
                               
                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/scooter.jpeg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Scooter per piece</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;2,300.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;2,000.00</p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>
                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/Bike (2).jpeg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">bike per piece</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;5,500.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;5,500.00</p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>



                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/scooty.jpeg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Scooty per piece</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;2,500.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;5,000.00</p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>

                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/Old Transfermer.jpeg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Old Transfermer</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;5,500.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;7,200.00</p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>

                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/Generator.jpeg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Generator DG Set</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;6,500.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;7,200.00</p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>

                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/Iron BAr.jpeg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Iron Bar</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;500.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;2,200.00</p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>

                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/Track Iron.jpg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Track Iron</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;2,500.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;7,200.00</p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>

                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/Tractor.jpg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Old Tractor</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;35,500.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;50,000.00</p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>

                               
                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/glass1.jpeg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Bottle</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;10.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;200.00</p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>

                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/e2.jpg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Electronic Items</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;2,500.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;2,200.00</p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>

                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/Iron angle.webp" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Iron Angle</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;500.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;2,200.00</p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>

                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/brash.jpg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Brash</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;2,500.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;2,200.00</p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
                                    </div>
                                </li>

                                <li class="listpager">
                                    <div class="scrap_w">
                                        <div class="scrap_img">
                                            <figure><img src="img/product/Steel .jpeg" alt=""></figure>
                                        </div>
                                        <div class="scrap_ttl" title="Beer Bottles">Steel</div>
                                        <p class="scrap_price"><b>Price: </b>&#8377;&nbsp;2,500.00/piece</p>

                                        <p class="scrap_min_order"> <b>Min.Order Amount:</b>
                                            &#8377;&nbsp;2,200.00</p>

                                        <p class="mt-2 text-center">
                                            <a href="{{url('pickup')}}" class="green_btn pop"
                                                data-type="iframe">Pickup Request</a>
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
<!-- Product End -->
@endsection