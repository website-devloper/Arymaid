

<?php $__env->startSection('content'); ?>
<div class="login-page bg-light pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17">
    <div class="container">
        <div class="form-box">
            <div class="form-tab">
                <ul class="nav nav-pills nav-fill mb-4" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">Register</a>
                    </li>
                </ul>
                
                <div class="tab-content">
                    <div class="tab-pane fade show active">
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

<style>
    .form-box {
        max-width: 570px;
        margin-left: auto;
        margin-right: auto;
        background-color: #fff;
        padding: 4.4rem 3.7rem 4.4rem;
        box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        border-radius: 8px;
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
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.masterHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mikasa Ackerman\arymaid\Arymaid\resources\views/components/register.blade.php ENDPATH**/ ?>