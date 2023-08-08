<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pickup Request Form</title>
    <!-- JQUERY STEP -->

    <link href="style.css" rel="stylesheet">

    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        body {
            font-family: "Poppins-Regular";
            font-size: 15px;
            color: #666;
            background-color: #7ebc12;
            margin: 0
        }



        :focus {
            outline: none
        }

        textarea {
            resize: none
        }

        .form-row input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s ease-in-out;
        }

        .form-row input[type="text"]:focus {
            border-color: #7ebc12;
        }

        .form-row input[type="text"]::placeholder {
            color: #999;
        }

        .form-row input[type="text"]:-ms-input-placeholder {
            color: #999;
        }

        .form-row input[type="text"]::-ms-input-placeholder {
            color: #999;
        }


        input,
        textarea,
        select,
        button {
            font-family: "Poppins-Regular";
            font-size: 15px;
            color: #666
        }

        ul {
            padding: 0;
            margin: 0;
            list-style: none
        }

        img {
            max-width: 100%;
            vertical-align: middle
        }

        .wrapper {
            max-width: 600px;
            height: 100vh;
            margin: auto;
            display: flex;
            align-items: center
        }

        .wrapper .image-holder {
            width: 51%
        }

        .wrapper form {
            width: 100%
        }

        .wizard>.steps .current-info,
        .wizard>.steps .number {
            display: none
        }

        #wizard {
            min-height: 570px;
            background: #fff;
            margin-right: 60px;
            padding: 107px 75px 65px;
            margin-top: 20px;
            margin-bottom: 20px
        }

        .steps {
            margin-bottom: 30px
        }

        .steps ul {
            display: flex;
            position: relative
        }

        .steps ul li {
            width: 25%;
            margin-right: 10px
        }

        .steps ul li a {
            display: inline-block;
            width: 100%;
            height: 7px;
            background: #e6e6e6;
            border-radius: 3.5px
        }

        .steps ul li.first a,
        .steps ul li.checked a {
            background: #7ebc12;
            transition: all 0.5s ease
        }

        .steps ul:before {
            content: "Pickup Request";
            font-size: 22px;
            font-family: "Poppins-SemiBold";
            color: #7ebc12;
            top: -38px;
            position: absolute
        }

        .steps ul.step-2:before {
            content: "Additional Info"
        }

        .steps ul.step-3:before {
            content: "Pickup Request"
        }

        .steps ul.step-4:before {
            content: "Pickup Request Status"
        }

        h3 {
            font-family: "Poppins-SemiBold"
        }

        .form-row {
            margin-bottom: 24px
        }

        .form-row label {
            margin-bottom: 8px;
            display: block
        }

        .form-row.form-group {
            display: flex
        }

        .form-row.form-group .form-holder {
            width: 50%;
            margin-right: 21px
        }

        .form-row.form-group .form-holder:last-child {
            margin-right: 0
        }

        .form-holder {
            position: relative
        }

        .form-holder i {
            position: absolute;
            top: 11px;
            right: 19px;
            font-size: 17px;
            color: #999
        }

        .form-control {
            height: 42px;
            border: 1px solid #e6e6e6;
            background: none;
            width: 100%;
            padding: 0 18px
        }

        .form-control:focus {
            border-color: #f3d4b7
        }

        .form-control::-webkit-input-placeholder {
            color: #999;
            font-size: 13px
        }

        .form-control::-moz-placeholder {
            color: #999;
            font-size: 13px
        }

        .form-control:-ms-input-placeholder {
            color: #999;
            font-size: 13px
        }

        .form-control:-moz-placeholder {
            color: #999;
            font-size: 13px
        }

        textarea.form-control {
            padding-top: 11px;
            padding-bottom: 11px
        }

        .option {
            color: #999
        }


        .actions ul {
            display: flex;
            margin-top: 30px;
            justify-content: space-between
        }

        .actions ul.step-last {
            justify-content: flex-end
        }

        .actions ul.step-last li:first-child {
            display: none
        }

        .actions li a {
            padding: 0;
            border: none;
            display: inline-flex;
            height: 51px;
            width: 135px;
            align-items: center;
            background: #7ebc12;
            cursor: pointer;
            color: #fff !important;
            position: relative;
            padding-left: 41px;
            text-decoration: none;
            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            font-weight: 400
        }

        .actions li a:before {
            content: '\f178';
            position: absolute;
            top: 15px;
            right: 41px;
            color: #fff;
            font-family: "FontAwesome";
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }

        .actions li a:hover {
            background: #7ebc12;
        }

        .actions li a:hover:before {
            -webkit-animation-name: hvr-icon-wobble-horizontal;
            animation-name: hvr-icon-wobble-horizontal;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1
        }

        .actions li[aria-disabled="true"] a {
            display: none
        }

        .actions li:first-child a {
            background: #e6e6e6;
            padding-left: 48px
        }

        .actions li:first-child a:before {
            content: '\f177';
            left: 26px
        }

        .actions li:first-child a:hover {
            background: #ccc
        }

        .actions li:last-child a {
            padding-left: 29px;
            width: 167px;
            font-weight: 400
        }

        .actions li:last-child a:before {
            right: 30px
        }

        .checkbox {
            position: relative
        }

        .checkbox label {
            padding-left: 21px;
            cursor: pointer;
            color: #999
        }

        .checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer
        }

        .checkbox input:checked~.checkmark:after {
            display: block
        }

        .checkmark {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            height: 12px;
            width: 13px;
            border-radius: 2px;
            background-color: #ebebeb;
            border: 1px solid #ccc;
            font-family: "Font Awesome";
            color: #000;
            font-size: 10px;
            font-weight: bolder
        }

        .checkmark:after {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            content: '\f178'
        }

        .checkbox-circle {
            margin-top: 41px;
            margin-bottom: 46px
        }

        .checkbox-circle label {
            cursor: pointer;
            padding-left: 26px;
            color: #999;
            display: block;
            margin-bottom: 15px;
            position: relative
        }

        .checkbox-circle label.active .tooltip {
            display: block
        }

        .checkbox-circle input {
            position: absolute;
            opacity: 0;
            cursor: pointer
        }

        .checkbox-circle input:checked~.checkmark:after {
            display: block
        }

        .checkbox-circle .checkmark {
            position: absolute;
            top: 11px;
            left: 0;
            height: 14px;
            width: 14px;
            border-radius: 50%;
            background: #ebebeb;
            border: 1px solid #cdcdcd
        }

        .checkbox-circle .checkmark:after {
            content: "";
            top: 6px;
            left: 6px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #666666;
            position: absolute;
            display: none
        }

        .checkbox-circle .tooltip {
            padding: 9px 22px;
            background: #f2f2f2;
            line-height: 1.8;
            position: relative;
            margin-top: 16px;
            margin-bottom: 28px;
            display: none
        }

        .checkbox-circle .tooltip:before {
            content: "";
            border-bottom: 10px solid #f2f2f2;
            border-right: 9px solid transparent;
            border-left: 9px solid transparent;
            position: absolute;
            bottom: 100%
        }

        .product {
            margin-bottom: 33px
        }

        .item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 30px;
            border-bottom: 1px solid #e6e6e6;
            margin-bottom: 30px
        }

        .item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border: none
        }

        .item .left {
            display: flex;
            align-items: center
        }

        .item .thumb {
            display: inline-flex;
            width: 100px;
            height: 90px;
            justify-content: center;
            align-items: center;
            border: 1px solid #f2f2f2
        }

        .item .purchase {
            display: inline-block;
            margin-left: 21px
        }

        .item .purchase h6 {
            font-family: "Poppins-Medium";
            font-size: 16px;
            margin-bottom: 4px;
            font-weight: 500
        }

        .item .purchase h6 a {
            color: #333
        }

        .item .price {
            font-size: 16px
        }

        .checkout {
            margin-bottom: 44px
        }

        .checkout span.heading {
            font-family: "Poppins-Medium";
            font-weight: 500;
            margin-right: 5px
        }

        .checkout .subtotal {
            margin-bottom: 18px
        }

        .checkout .shipping {
            margin-bottom: 19px
        }

        .checkout .shipping span.heading {
            margin-right: 4px
        }

        .checkout .total-price {
            font-family: "Muli-Bold";
            color: #333;
            font-weight: 700
        }

        .form-check input[type="radio"] {
            display: none;
            /* Hide the default radio button */
        }

        .form-check input[type="radio"]+.label-text::before {
            content: "";
            display: inline-block;
            width: 12px;
            height: 12px;
            border: 2px solid #7ebc12;
            border-radius: 4px;
            /* Make it square by setting border-radius to half of the width */
            margin-right: 5px;
            vertical-align: middle;
            background-color: transparent;
        }

        .form-check input[type="radio"]:checked+.label-text::before {
            background-color: #7ebc12;
        }

        .form-check .label-text {
            vertical-align: middle;
        }

        @-webkit-keyframes hvr-icon-wobble-horizontal {
            16.65% {
                -webkit-transform: translateX(6px);
                transform: translateX(6px)
            }

            33.3% {
                -webkit-transform: translateX(-5px);
                transform: translateX(-5px)
            }

            49.95% {
                -webkit-transform: translateX(4px);
                transform: translateX(4px)
            }

            66.6% {
                -webkit-transform: translateX(-2px);
                transform: translateX(-2px)
            }

            83.25% {
                -webkit-transform: translateX(1px);
                transform: translateX(1px)
            }

            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        @keyframes hvr-icon-wobble-horizontal {
            16.65% {
                -webkit-transform: translateX(6px);
                transform: translateX(6px)
            }

            33.3% {
                -webkit-transform: translateX(-5px);
                transform: translateX(-5px)
            }

            49.95% {
                -webkit-transform: translateX(4px);
                transform: translateX(4px)
            }

            66.6% {
                -webkit-transform: translateX(-2px);
                transform: translateX(-2px)
            }

            83.25% {
                -webkit-transform: translateX(1px);
                transform: translateX(1px)
            }

            100% {
                -webkit-transform: translateX(0);
                transform: translateX(0)
            }
        }

        @media (max-width: 1500px) {
            .wrapper {
                height: auto
            }
        }

        @media (max-width: 1199px) {
            .wrapper {
                height: 100vh
            }

            #wizard {
                margin-right: 40px;
                min-height: 829px;
                padding-left: 60px;
                padding-right: 60px
            }
        }

        @media (max-width: 991px) {
            .wrapper {
                justify-content: center
            }

            .wrapper .image-holder {
                display: none
            }

            .wrapper form {
                width: 60%
            }

            #wizard {
                margin-right: 0;
                padding-left: 40px;
                padding-right: 40px
            }
        }

        @media (max-width: 767px) {
            .wrapper {
                height: auto;
                display: block
            }

            .wrapper .image-holder {
                width: 100%;
                display: block
            }

            .wrapper form {
                width: 100%
            }

            #wizard {
                min-height: unset;
                padding: 70px 20px 40px
            }

            .form-row.form-group {
                display: block
            }

            .form-row.form-group .form-holder {
                width: 100%;
                margin-right: 0;
                margin-bottom: 24px
            }

            .item .purchase {
                margin-left: 11px
            }
        }

        .card {
            border: 0;
            border-radius: 0px;
            margin-bottom: 30px;
            -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.03);
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.03);
            -webkit-transition: .5s;
            transition: .5s
        }

        .padding {
            padding: 3rem !important
        }

        h5.card-title {
            font-size: 15px
        }

        .fw-400 {
            font-weight: 400 !important
        }

        .card-title {
            font-family: Roboto, sans-serif;
            font-weight: 300;
            line-height: 1.5;
            margin-bottom: 0;
            padding: 15px 20px;
            border-bottom: 1px solid rgba(77, 82, 89, 0.07)
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem
        }

        .form-group {
            margin-bottom: 1rem
        }

        .form-control {
            border-color: #ebebeb;
            border-radius: 2px;
            color: #8b95a5;
            padding: 5px 12px;
            font-size: 14px;
            line-height: inherit;
            -webkit-transition: 0.2s linear;
            transition: 0.2s linear
        }

        .card-body>*:last-child {
            margin-bottom: 0
        }

        .btn-primary {
            background-color: #33cabb;
            border-color: #33cabb;
            color: #fff
        }

        .btn-bold {
            font-family: Roboto, sans-serif;
            text-transform: uppercase;
            font-weight: 500;
            font-size: 12px
        }

        .btn-primary:hover {
            background-color: #52d3c7;
            border-color: #52d3c7;
            color: #fff
        }

        .btn:hover {
            cursor: pointer
        }

        .form-control:focus {
            border-color: #7ebc12;
            color: #4d5259;
            -webkit-box-shadow: 0 0 0 0.1rem rgba(51, 202, 187, 0);
            box-shadow: 0 0 0 0.1rem rgba(101, 69, 235, 0)
        }

        .custom-radio {
            cursor: pointer
        }

        .custom-control {
            display: -webkit-box;
            display: flex;
            min-width: 18px
        }

        .heading {
            color: #7ebc12;
        }

        .total {
            float: right;
            color: #7ebc12;
        }

        svg {
            width: 100px;
            display: block;
            margin: 40px auto 0
        }

        .path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 0;

            &.circle {
                -webkit-animation: dash .9s ease-in-out;
                animation: dash .9s ease-in-out
            }

            &.line {
                stroke-dashoffset: 1000;
                -webkit-animation: dash .9s .35s ease-in-out forwards;
                animation: dash .9s .35s ease-in-out forwards
            }

            &.check {
                stroke-dashoffset: -100;
                -webkit-animation: dash-check .9s .35s ease-in-out forwards;
                animation: dash-check .9s .35s ease-in-out forwards
            }
        }

        p {
            text-align: center;
            margin: 20px 0 60px;
            font-size: 1.25em;

            &.success {
                color: #73AF55
            }

            &.error {
                color: #D06079
            }
        }

        @-webkit-keyframes dash {
            0% {
                stroke-dashoffset: 1000
            }

            100% {
                stroke-dashoffset: 0
            }
        }

        @keyframes dash {
            0% {
                stroke-dashoffset: 1000
            }

            100% {
                stroke-dashoffset: 0
            }
        }

        @-webkit-keyframes dash-check {
            0% {
                stroke-dashoffset: -100
            }

            100% {
                stroke-dashoffset: 900
            }
        }

        @keyframes dash-check {
            0% {
                stroke-dashoffset: -100
            }

            100% {
                stroke-dashoffset: 900
            }
        }
    </style>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
</head>

<body>

    <div class="wrapper">
        <?php if(Session::has('success')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
    <?php endif; ?>
    <form method="post" action="<?php echo e(url('save-pickup')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
      
            <div id="wizard">
                <!-- SECTION 1 -->
                <h4></h4>
                <section>
                    <div class="form-row"> <input type="text"  name="name" class="form-control" placeholder="Name" >
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger" role="alert"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-row"> <input type="text" name="email" class="form-control" placeholder="Email" >
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger" role="alert"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-row"> <input type="text" name="phone"  class="form-control" placeholder="Phone number"
                            > <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger" role="alert"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                     </div>
                    <div class="form-row"> <input type="text" name="address" class="form-control" placeholder="Street address"
                            > </div>
                    <div class=" form-check mt-2">
                        <label class="mr-2">
                            <input name="donate_your_scrap" name="sell"  type="radio" value="Sell" checked="checked">
                            <span class="label-text"></span>Sell</label>
                        <label class="ml10">
                            <input name="donate_your_scrap" name="sell" type="radio" value="Donate">
                            <span class="label-text"></span> Donate your Scrap</label>
                    </div>
                </section>

                <!-- SECTION 2 -->
                <h4></h4>
                <section>
                    <div class="form-row"> <input type="text" name="country"  class="form-control" placeholder="Country" >
                        <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger" role="alert"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-row"> <input type="text" name="city"  class="form-control" placeholder="City" >
                        <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger" role="alert"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-row"> <input type="text" name="landmark"  class="form-control" placeholder="Landmark" >
                        <?php $__errorArgs = ['landmark'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger" role="alert"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-row"> <input type="text" name="zip"  class="form-control" placeholder="Postal/Zip code"
                            >
                            <?php $__errorArgs = ['zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger" role="alert"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> </div>
                </section>

                <!-- SECTION 3 -->
                <h4></h4>
                <section>
                    <div class="form-row"> <input type="date" name="date" class="form-control" placeholder="Pickup Date"> </div>
                    <div class="form-row"> <input type="time" name="time"  class="form-control" placeholder="Pickup Time"> </div>
                    <div class="form-row ">
                        <select class="form-control" name="industry">
                            <option value="">Select Industry *</option>
                            <option value="Residential">Residential</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Education">Education</option>
                        </select>
                    </div>

                    <div class="form-row ">
                        <select class="form-control" name="weight">
                            <option value="">Select Estemated Weight:</option>
                            <option value="Residential">10 Kg to 20 Kg</option>
                            <option value="Commercial">20 Kg to 30 Kg</option>
                            <option value="Education">30 Kg to 50 Kg</option>
                            <option value="Education">100 Kg or above</option>
                            <option value="Education">Other</option>

                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label class="db">Select Categories<span class="red"> *</span></label>
                        <hr class="w-100" style="margin-top: 5px">
                        <div class="row">

                            <div class="col-6 p2">
                                <div class="form-check">
                                    <label>
                                        <input name="categories" type="checkbox" value="Electronic Items">
                                        <span class="label-text"></span>Electronic Items
                                    </label>
                                </div>
                            </div>

                            <div class="col-6 p2">
                                <div class="form-check">
                                    <label>
                                        <input name="categories" type="checkbox" value="Iron Items">
                                        <span class="label-text"></span>Iron Items
                                    </label>
                                </div>
                            </div>

                            <div class="col-6 p2">
                                <div class="form-check">
                                    <label>
                                        <input name="categories" type="checkbox" value="Copper Items">
                                        <span class="label-text"></span>Copper Items
                                    </label>
                                </div>
                            </div>

                            <div class="col-6 p2">
                                <div class="form-check">
                                    <label>
                                        <input name="categories" type="checkbox" value="Paper">
                                        <span class="label-text"></span>Paper
                                    </label>
                                </div>
                            </div>

                            <div class="col-6 p2">
                                <div class="form-check">
                                    <label>
                                        <input name="cat[]" type="checkbox" value="Plastic">
                                        <span class="label-text"></span>Plastic
                                    </label>
                                </div>
                            </div>

                            <div class="col-6 p2">
                                <div class="form-check">
                                    <label>
                                        <input name="categories" type="checkbox" value="Metal-Others">
                                        <span class="label-text"></span>Metal-Others
                                    </label>
                                </div>
                            </div>

                            <div class="col-6 p2">
                                <div class="form-check">
                                    <label>
                                        <input name="categories" type="checkbox" value="Glass">
                                        <span class="label-text"></span>Glass
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-row">
                        <label class="db">Upload Product Image<span class="red"> </span></label>
                        <input type="file" class="form-control" name="image" id="photo"
                            multiple="multiple" placeholder="">
                        <small>( Max Size - 20 MB, upload jpg, gif and png only )</small>
                    </div>

                  

                    <div class="form-row" style="margin-bottom: 18px">
                        <textarea name="message" id="" class="form-control" placeholder="Write Description for Scrap"
                            style="height: 108px"></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary btn-lg" name="submit"
                    value="Submit" />
                </section>


                <!-- SECTION 4 -->
                
            </div>
        </form>
    </div>
    <!-- Template Javascript -->
    <script src="main.js"></script>

    <script>
        $(function() {
            $("#wizard").steps({
                headerTag: "h4",
                bodyTag: "section",
                transitionEffect: "fade",
                enableAllSteps: true,
                transitionEffectSpeed: 500,
                onStepChanging: function(event, currentIndex, newIndex) {
                    if (newIndex === 1) {
                        $('.steps ul').addClass('step-2');
                    } else {
                        $('.steps ul').removeClass('step-2');
                    }
                    if (newIndex === 2) {
                        $('.steps ul').addClass('step-3');
                    } else {
                        $('.steps ul').removeClass('step-3');
                    }

                    if (newIndex === 3) {
                        $('.steps ul').addClass('step-4');
                        $('.actions ul').addClass('step-last');
                    } else {
                        $('.steps ul').removeClass('step-4');
                        $('.actions ul').removeClass('step-last');
                    }
                    return true;
                },
                labels: {
                    finish: "Order again",
                    next: "Next",
                    previous: "Previous"
                }
            });
            // Custom Steps Jquery Steps
            $('.wizard > .steps li a').click(function() {
                $(this).parent().addClass('checked');
                $(this).parent().prevAll().addClass('checked');
                $(this).parent().nextAll().removeClass('checked');
            });
            // Custom Button Jquery Steps
            $('.forward').click(function() {
                $("#wizard").steps('next');
            })
            $('.backward').click(function() {
                $("#wizard").steps('previous');
            })
            // Checkbox
            $('.checkbox-circle label').click(function() {
                $('.checkbox-circle label').removeClass('active');
                $(this).addClass('active');
            })

        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
</body>

</html>
<?php /**PATH C:\Users\Administrator\Downloads\FinalProject\FinalProject\resources\views/pickup.blade.php ENDPATH**/ ?>