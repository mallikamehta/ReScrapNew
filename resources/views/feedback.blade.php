@extends('layout')
@section('content')

<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 pt-5">
            <div class="col-12 text-center text-lg-start">
                <h1 class="display-4 text-white animated slideInLeft">Review</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-start animated slideInLeft">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Feedback</li>
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
            <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex align-items-center justify-content-center">
            <div class="input-group" style="max-width: 600px;">
                <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Full Screen Search End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container px-lg-5">
    <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-3">What Say Our Clients!!!</h1>
        <p class="mb-1">Vero justo sed sed vero clita amet. Et justo vero sea diam elitr amet ipsum eos ipsum clita duo sed. Sed vero sea diam erat vero elitr sit clita.</p>
    </div>
<div class="owl-carousel testimonial-carousel">
    <div
        class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle"
            style="width: 45px; height: 45px; margin-top: -3px;">
            <i class="fa fa-quote-left text-white"></i>
        </div>
        <p class="mt-3">The service is amazing. The experience is like an e commerce platform and the best
            part is that you get paid for selling your stuff. The app is very smooth. Highly recommended.
        </p>
        <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg"
                style="width: 50px; height: 50px;">
            <div class="ps-3">
                <h6 class="fw-bold mb-1">Kamal Kant</h6>
                <small>Profession</small>
            </div>
        </div>
    </div>
    <div
        class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle"
            style="width: 45px; height: 45px; margin-top: -3px;">
            <i class="fa fa-quote-left text-white"></i>
        </div>
        <p class="mt-3">Very well organised and systematic process, impressive work. I got instant payment
            for my waste material. behaviour of pickup boys was very humble.</p>
        <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg"
                style="width: 50px; height: 50px;">
            <div class="ps-3">
                <h6 class="fw-bold mb-1">Saransh </h6>
                <small>Profession</small>
            </div>
        </div>
    </div>
    <div
        class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 my-4">
        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle"
            style="width: 45px; height: 45px; margin-top: -3px;">
            <i class="fa fa-quote-left text-white"></i>
        </div>
        <p class="mt-3">Superb, Fast & Fantastic service. Sold Scrap within 24 hours of booking an
            appointment. Good work guys keep it up 👌</p>
        <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg"
                style="width: 50px; height: 50px;">
            <div class="ps-3">
                <h6 class="fw-bold mb-1">Swati Mahato</h6>
                <small>Profession</small>
            </div>
        </div>
    </div>
    <div
        class="testimonial-item position-relative bg-light border-top border-5 border-primary rounded p-4 mt-4">
        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 ms-5 translate-middle bg-primary rounded-circle"
            style="width: 45px; height: 45px; margin-top: -3px;">
            <i class="fa fa-quote-left text-white"></i>
        </div>
        <p class="mt-3">Very nice and easy to deal with. Will use again if ever need to, and always will
            refer a friend. Thanks ReScrap!!!</p>
        <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg"
                style="width: 50px; height: 50px;">
            <div class="ps-3">
                <h6 class="fw-bold mb-1">Tanmay</h6>
                <small>Profession</small>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Testimonial End -->

@endsection