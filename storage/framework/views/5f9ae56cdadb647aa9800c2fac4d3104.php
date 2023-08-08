<?php $__env->startSection('content'); ?>
    <div class="container">
        <section class="vh-100_del" style="padding-top:100px;">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                        <?php if(Session::has('success')): ?>
                                            <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                                        <?php endif; ?>
                                        <form method="post" action="<?php echo e(url('save-user')); ?>" class="mx-1 mx-md-4"
                                            enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="text" name="name" id="name" class="form-control"
                                                        value="<?php echo e(old('name')); ?>" />
                                                    <label class="form-label" for="name">Your Name</label>
                                                    <?php if($errors->has('name')): ?>
                                                        <div class="alert alert-danger" role="alert">
                                                            <?php echo e($errors->first('name')); ?></div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="email" name="email" id="email" class="form-control"
                                                        value="<?php echo e(old('email')); ?>" />
                                                    <label class="form-label" for="email">Your Email</label>
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
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="password" name="password" id="password"
                                                        class="form-control" value="<?php echo e(old('password')); ?>" />
                                                    <label class="form-label" for="password">Password</label>
                                                    <?php $__errorArgs = ['password'];
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
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="password" name="confirm_password" id="confirm_password"
                                                        class="form-control" value="<?php echo e(old('confirm_password')); ?>" />
                                                    <label class="form-label" for="confirm_password">Repeat your
                                                        password</label>
                                                    <?php $__errorArgs = ['confirm_password'];
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
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="date" name="dob" id="dob" class="form-control"
                                                        value="<?php echo e(old('dob')); ?>" />
                                                    <label class="form-label" for="confirm_password">Date or Birth</label>
                                                    <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="alert alert-danger" role="alert"><?php echo e($message); ?>

                                                        </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>


                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-people fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="file" name="photo" id="photo"
                                                        class="form-control" />
                                                    <label class="form-label" for="photo">Photo</label>
                                                    <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="alert alert-danger" role="alert"><?php echo e($message); ?>

                                                        </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-people fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <textarea name="address" id="address" class="form-control"></textarea>
                                                    <label class="form-label" for="address">Address</label>
                                                    <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="alert alert-danger" role="alert"><?php echo e($message); ?>

                                                        </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>


                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="">Country</label>
                                                    <select id="country-list" name="country" class="form-control">
                                                        <option value="">Select Country</option>
                                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($country->country_id); ?>">
                                                                <?php echo e($country->country_name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="">State</label>
                                                    <select id="states-list" name="state" class="form-control">
                                                        <option value="">Select State</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="">City</label>
                                                    <select id="city-list" name="city" class="form-control">
                                                        <option value="">Select City</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                              <label class="form-label" for="">Captcha</label>
                                              <div class="captcha">
                                                <span><?php echo captcha_img(); ?></span>
                                              </div>
                                            </div>
                                          </div> -->

                                            <div class="captcha">
                                                <span><?php echo captcha_img(); ?></span>
                                                <button type="button" class="btn btn-success btn-refresh"><i
                                                        class="fa fa-sync"></i></button>
                                            </div>
                                            <input id="captcha" type="text" class="form-control"
                                                placeholder="Enter Captcha" name="captcha">
                                            <?php $__errorArgs = ['captcha'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger" role="alert"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <input type="submit" class="btn btn-primary btn-lg" name="submit"
                                                    value="Submit" />
                                            </div>

                                        </form>

                                    </div>
                                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                        <img src="img\undraw_secure_login_pdn4.svg" style="top: 0%" class="img-fluid"
                                            alt="Sample image">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <script>
        $(document).ready(function() {
            //alert('hello');
            $('#country-list').on('change', function() {
                //alert('country seleted');
                var IdCountry = this.value;
                $('#states-list').html("");
                $.ajax({
                    url: "<?php echo e(url('get-states')); ?>",
                    type: "POST",
                    data: {
                        country_id: IdCountry,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    dataType: 'json',
                    success: function(retrunresult) {
                        //alert('state ddl');
                        $('#states-list').html('<option value="">Select State</option>');
                        $.each(retrunresult.states, function(key, value) {
                            $('#states-list').append('<option value="' + value
                                .state_id + '">' + value.state_name + '</option>');
                        });
                    }
                });
            });


            $('#states-list').on('change', function() {
                //alert('country seleted');
                var IdState = this.value;
                $('#city-list').html("");
                $.ajax({
                    url: "<?php echo e(url('get-cities')); ?>",
                    type: "POST",
                    data: {
                        state_id: IdState,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    dataType: 'json',
                    success: function(retrunstateresult) {
                        $('#city-list').html('<option value="">Select City</option>');
                        $.each(retrunstateresult.cities, function(key, value) {
                            $('#city-list').append('<option value="' + value.city_id +
                                '">' + value.city_name + '</option>');
                        });
                    }
                });
            });

            $('.btn-refresh').on('click', function() {
                //alert('captcha refresh');
                $.ajax({
                    url: "<?php echo e(url('refresh-captcha')); ?>",
                    type: "GET",
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    dataType: 'json',
                    success: function(retrunCaptchaResult) {
                        $('.captcha span').html(retrunCaptchaResult.captcha);
                    }
                });
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Downloads\FinalProject31072023\FinalProject\resources\views/register.blade.php ENDPATH**/ ?>