<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back Admin!</h1>
                                    </div>
                                    <?php if(Session::has('success')): ?>
                                            <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                                        <?php endif; ?>
                                    <form method="post" action="<?php echo e(route('admin.login.post')); ?>" class="user">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Submit" />
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

   <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layoutlogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Downloads\FinalProject\FinalProject\resources\views/admin/login.blade.php ENDPATH**/ ?>