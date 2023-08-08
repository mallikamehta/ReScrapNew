@extends('layout')
@section('content')

<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 pt-5">
            <div class="col-12 text-center text-lg-start">
                <h1 class="display-4 text-white animated slideInLeft">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-start animated slideInLeft">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
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


<!-- About Start -->
<div class="container-xxl py-5">
<div class="container px-lg-5">
<div class="row g-5 align-items-center">
    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
        <!-- <div class="section-title position-relative mb-4 pb-4">
            <h1 class="mb-2">Welcome to ReScrap</h1>
        </div> -->
        <h1 class="pt-12 pt-lg-13 pb-lg-11 text-lg-center" style="color: #FF9933;">
            <span class="" style="color:#FFA500;">Welcome To</span>  
            <span class="fg-success-2" style="color: #008000;">ReScrap</span>
        </h1>
        <p class="mb-4">ReScrap:Waste Management Company on a Mission to Achieve a Waste-Free India.

             ReScrap has emerged as a frontrunner in the field of waste management, striving to create a waste-free nation. With a strong commitment to eco-friendly goals and carbon neutrality, we have achieved numerous milestones in our journey. As public awareness and demand for sustainable living grow, and with the continuous support of the government in implementing effective policies for waste regulation, we have successfully diverted an impressive 75 kilograms of waste from landfills and incinerators. This has resulted in the conservation of invaluable natural resources.
            
            At ReScrap, we believe in the power of collective action and the positive impact it can have on our environment. Through innovative waste management solutions, we aim to reduce, reuse, and recycle waste effectively. Our efforts contribute to the preservation of our planet's resources and the creation of a cleaner and healthier future.
            
            Join us in our mission to create a sustainable and waste-free India. Together, we can make a significant difference by embracing responsible waste management practices and building a greener tomorrow.Tired of sorting through your recyclable waste? Let our website be your one-stop
            solution for hassle-free disposal and recycling.</p>
        <div class="row g-3">
            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded text-center p-4">
                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                    <h2 class="mb-1" data-toggle="counter-up">12</h2>
                    <p class="mb-0">Experts</p>
                </div>
            </div>
            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-light rounded text-center p-4">
                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                    <h2 class="mb-1" data-toggle="counter-up">11</h2>
                    <p class="mb-0">Clients</p>
                </div>
            </div>
            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-light rounded text-center p-4">
                    <i class="fa fa-check fa-2x text-primary mb-2"></i>
                    <h2 class="mb-1" data-toggle="counter-up">07</h2>
                    <p class="mb-0">Projects</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.png">
    </div>
</div>
</div>
</div>
<!-- About End -->



<!-- Team Start -->
<div class="container-xxl py-5">
<div class="container px-lg-5">
<div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp"
    data-wow-delay="0.1s" style="max-width: 600px;">
    <h1 class="mb-3">Our Team Members</h1>
    <p class="mb-1">Vero justo sed sed vero clita amet. Et justo vero sea diam elitr amet ipsum eos
        ipsum clita duo sed. Sed vero sea diam erat vero elitr sit clita.</p>
</div>
<div class="row g-4">
    <div class="col-lg-4 offset-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
            <div class="text-center p-4">
                <img class="img-fluid rounded-circle mb-4" src="img/malika.jpg" alt="">
                <h5 class="fw-bold mb-1">Mallika</h5>
                <small>Designation</small>
            </div>
            <div class="d-flex justify-content-center bg-primary p-3">
                <a class="btn btn-square text-primary bg-white m-1" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square text-primary bg-white m-1" href=""><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-square text-primary bg-white m-1" href=""><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    
</div>
</div>
</div>
<!--  about -->


@endsection
