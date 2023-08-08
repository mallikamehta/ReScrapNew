<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Scrap Sell Online</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">



    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style1.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style2.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('css/cypher.min.css')); ?>" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>

<body>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">

                    <h1 class="m-0"><i class="fa fa-trash me-3"></i>ReScrap</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 ">
                        <a href="<?php echo e(url('/')); ?>" class="nav-item nav-link active">Home</a>
                        <a href="<?php echo e(url('pickup')); ?>" class="nav-item nav-link">PICK UP REQUEST</a>
                        <a href="<?php echo e('products'); ?>" class="nav-item nav-link">PRODUCT</a>
                        <a href="<?php echo e(url('contact')); ?>" class="nav-item nav-link">CONTACT</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">CATEGORY</a>
                            <div class="dropdown-menu m-0">
                                <a href="<?php echo e(url('team')); ?>" class="dropdown-item">Our Team</a>
                                <a href="<?php echo e(url('feedback')); ?>" class="dropdown-item ">Feedback</a>
                                <a href="<?php echo e(url('charity')); ?>" class="dropdown-item">Our charity Plan</a>
                                <a href="<?php echo e(url('zerowaste')); ?>" class="dropdown-item">Zero Waste Socity</a>
                            </div>
                        </div>
                        <a href="<?php echo e(url('about')); ?>" class="nav-item nav-link">About</a>

                        <a class="nav-item nav-link" href="<?php echo e(url('cart')); ?>">
                            <i class="fa fa-cart-shopping"></i>
                            Cart <span class=""><?php echo e(count((array) session('cart'))); ?></span>
                        </a>
                    </div>


                    

                    



                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle btn btn-secondary py-2 px-4 ms-3"
                            data-bs-toggle="dropdown">ACCOUNT</a>
                        <div class="dropdown-menu m-0">
                            <?php if(auth()->guard()->guest()): ?>
                                <a href="<?php echo e(url('login')); ?>" class="dropdown-item">LOGIN</a>
                                <a href="<?php echo e(url('register')); ?>" class="dropdown-item ">REGISTER</a>
                                <a href="<?php echo e(url('admin-login')); ?>" class="dropdown-item">ADMIN</a>
                                <?php else: ?>
                                Welcome, <img src="<?php echo e(asset('uploads/'. $user->photo)); ?>" height="30" width="30" /> <?php echo e($user->name); ?><a href="<?php echo e(url('logout')); ?>" class="dropdown-item">Logout</a>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </nav>
        </div>

        <!-- Navbar End -->


        <?php echo $__env->yieldContent('content'); ?>


        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-white footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row gy-5 gx-4 pt-5">
                    <div class="col-12">
                        <h5 class="fw-bold text-white mb-4">Subscribe Our Newsletter</h5>
                        <div class="position-relative" style="max-width: 400px;">
                            <input class="form-control bg-white border-0 w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Enter your email">
                            <button type="button"
                                class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">

                                <h5 class="fw-bold text-white mb-4">About Us</h5>
                                <a class="btn btn-link" href="<?php echo e(url('about')); ?>">About Us</a>
                                <a class="btn btn-link" href="<?php echo e(url('contact')); ?>">Contact Us</a>
                                <a class="btn btn-link" href="<?php echo e(url('privacypolicy')); ?>">Privacy Policy</a>
                                <a class="btn btn-link" href="<?php echo e(url('termcondition')); ?>">Terms & Condition</a>
                                <a class="btn btn-link" href="<?php echo e(url('support')); ?>">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h5 class="fw-bold text-white mb-4">Our Services</h5>
                                <a class="btn btn-link" href="<?php echo e(url('zerowaste')); ?>" >zero-waste-society</a>
                                <a class="btn btn-link" href="<?php echo e(url('charity')); ?>" >Charity Plan</a>
                                <a class="btn btn-link" href="<?php echo e(url('donotrecycle')); ?>" >Do_not_recycling</a>
                                <a class="btn btn-link" href="">Dedicated Hosting</a>
                                <a class="btn btn-link" href="">Reseller Hosting</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="fw-bold text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ranchi,Jharkhand</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 ***** *****</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>ReScrapkro@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-lg-n5">
                        <div class="bg-light rounded" style="padding: 30px;">
                            <input type="text" class="form-control border-0 py-2 mb-2" placeholder="Name">
                            <input type="email" class="form-control border-0 py-2 mb-2" placeholder="Email">
                            <textarea class="form-control border-0 mb-2" rows="2" placeholder="Message"></textarea>
                            <button class="btn btn-primary w-100 py-2">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Footer End -->


        

        <a href="https://api.whatsapp.com/send?phone=+917903229854&text=ReScrap."
            style="position: fixed; z-index:9999;right:48px;bottom:109px; color:#075E54 " class="float"
            target="_blank">
            <i class="fab fa-whatsapp fa-3x"></i>
        </a>


        

        <!--Start of Tawk.to Script-->
        
        <!--End of Tawk.to Script-->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i
                class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/counterup/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/owlcarousel/owl.carousel.min.js')); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>



</body>

</html>
<?php /**PATH C:\Users\Administrator\Downloads\FinalProject31072023\FinalProject\resources\views/layout.blade.php ENDPATH**/ ?>