<?php echo $__env->make('partials.topheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('styles.styleHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        .form-box {
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            background: #fff;
            padding: 4.5rem 3rem 4rem;
        }
        .nav-pills .nav-link {
            color: var(--text-main);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid transparent;
            padding: 1rem;
        }
        .nav-pills .nav-link.active {
            background-color: transparent !important;
            color: var(--primary-color) !important;
            border-bottom: 2px solid var(--primary-color);
        }
        .form-control {
            border-radius: 4px;
            border: 1px solid #e2e8f0;
            padding: 1.2rem;
            height: auto;
        }
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(6, 78, 59, 0.1);
        }
        .btn-outline-primary-2 {
            border-radius: 4px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            padding: 1rem 2rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>

    <div id="signin-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border: none; background: transparent;">
                <div class="modal-body p-0">
                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill mb-4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            
                            <?php if(session('error')): ?>
                                <div class="alert alert-danger mb-3" style="border-radius: 4px; font-size: 0.9rem;">
                                    <?php echo e(session('error')); ?>

                                </div>
                            <?php endif; ?>

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel">
                                    <form action="<?php echo e(route('postLogin')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group mb-4">
                                            <label class="mb-1" style="font-weight: 500;">Email Address</label>
                                            <input type="email" class="form-control" name="signin-email" placeholder="Enter your email" required>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label class="mb-1" style="font-weight: 500;">Password</label>
                                            <input type="password" class="form-control" name="signin-password" placeholder="Enter password" required>
                                        </div>

                                        <div class="form-footer d-flex justify-content-between align-items-center mt-5">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>Log In</span>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Stay signed in</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="register" role="tabpanel">
                                    <form action="<?php echo e(route('postRegister')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group mb-3">
                                            <label class="mb-1">Full Name</label>
                                            <input type="text" class="form-control" name="register-name" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="mb-1">Email Address</label>
                                            <input type="email" class="form-control" name="register-email" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="mb-1">Create Password</label>
                                            <input type="password" class="form-control" name="register-password" required>
                                        </div>
                                        <div class="form-group mb-5">
                                            <label class="mb-1">Confirm Password</label>
                                            <input type="password" class="form-control" name="register-confirm" required>
                                        </div>

                                        <div class="form-footer mt-4">
                                            <button type="submit" class="btn btn-outline-primary-2 btn-block">
                                                <span>Create Account</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End .modal -->

    <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.hoverIntent.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/superfish.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Main JS File -->
<script src="assets/js/main.js"></script><?php /**PATH C:\Users\Mikasa Ackerman\arymaid\Arymaid\resources\views/partials/signInModal.blade.php ENDPATH**/ ?>