@extends('layout')
@section('content')
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 pt-5">
                <div class="col-12 text-center text-lg-start">
                    <h1 class="display-4 text-white animated slideInLeft">Charity Plans</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start animated slideInLeft">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Charity Plan</li>
                        </ol>
                    </nav>
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

    <!-- Our charity Plan -->
    <div class="container-fluid ">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 600px;">
                <h1 class="mb-3">Our Charity Plans</h1>
                <p class="mb-1">At ReScrap, we are passionate about protecting and preserving our
                    environment for future generations. Our charity plan is dedicated to making a positive impact on
                    the
                    environment through various initiatives and projects.</p>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="position-relative shadow rounded border-top border-5 border-primary">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle"
                            style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fas fa-tree tree-icon text-white"></i>
                        </div>
                        <div class="text-center border-bottom p-4 pt-5">
                            <h4 class="fw-bold">Tree Plantations</h4>
                            <p class="mb-0">Welcome to ReScrap, a tree plantation charity initiative driven by our
                                passion for environmental conservation and sustainability. At Green Roots, we firmly
                                believe that trees are the foundation of a thriving ecosystem and a sustainable
                                future.
                                Our mission is to promote tree plantation initiatives by utilizing the proceeds from
                                our
                                scrap buy and sell platform.
                            </p>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                            <h1 class="mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>149<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <a class="btn btn-primary px-4 py-2" href="">Donate Now</a>
                        </div>
                        <div class="p-4">
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Water Quality
                                Enhancement
                            </p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Wildlife
                                Habitat
                                Creation
                            </p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Air Quality
                                Improvement
                            </p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Noise
                                Reduction
                            </p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>Water Conservation:
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="position-relative shadow rounded border-top border-5 border-secondary">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle"
                            style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-book text-white"></i>
                        </div>
                        <div class="text-center border-bottom p-4 pt-5">
                            <h4 class="fw-bold">Kitab Ghar</h4>
                            <p class="mb-0">We are planning to establish Kitab Ghar in the future for the benefit of
                                underprivileged.Kitab Ghar is a visionary initiative dedicated to establishing a
                                haven
                                of learning and empowerment for underprivileged children. Our mission is to bridge
                                the
                                educational gap and provide a nurturing environment where every child can flourish.

                            </p>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                            <h1 class="mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>299<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <a class="btn btn-secondary px-4 py-2" href="">Donate Now</a>
                        </div>
                        <div class="p-4">
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Promoting
                                Literacy
                            </p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Empowering
                                Individuals
                            </p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Personal
                                Development
                                L</p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Career
                                Development

                            </p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>Bridging the Educational
                                Gap
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="position-relative shadow rounded border-top border-5 border-primary">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle"
                            style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-recycle text-white"></i>
                        </div>
                        <div class="text-center border-bottom p-4 pt-5">
                            <h4 class="fw-bold">Zero waste services</h4>
                            <p class="mb-0">Zero Waste Society, where we champion a world without waste.
                                Our mission is simple yet powerful: to create a society where resources are
                                conserved,
                                reused, and repurposed, leaving no room for waste. Through education, community
                                engagement, and innovative solutions, we strive to minimize our environmental
                                footprint
                                and maximize our collective impact.</p>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="text-primary mb-1">Latest Offer - <strong>Save 30%</strong></p>
                            <h1 class="mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;"></small>199<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <a class="btn btn-primary px-4 py-2" href="">Donate Now</a>
                        </div>
                        <div class="p-4">
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Waste
                                Prevention
                            </p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Recycling and
                                Composting
                            </p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Reuse and
                                Repair
                            </p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>Climate
                                Change
                                Mitigation
                            </p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>30 Days Money Back
                                Guarantee</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our charity Plan End -->
@endsection
