<div class="header-middle">
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto col-lg-3 col-xl-3 col-xxl-2">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>
                <a href="/" class="logo">
                    <h1 style="color: var(--primary-color); font-weight: 800; font-size: 2.5rem; margin: 0; letter-spacing: -1px;">ARYMAID</h1>
                </a>
            </div><!-- End .col-xl-3 col-xxl-2 -->

            <div class="col col-lg- col-xl-9 col-xxl-10 header-middle-right">
                <div class="row">
                    <div class="col-lg-8 col-xxl-4-5col d-none d-lg-block">
                        <div
                            class="header-search header-search-extended header-search-visible header-search-no-radius">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>


                            <form action="<?php echo e(url('/products/search')); ?>" method="GET">
                            
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="search" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="search" id="search"
                                        placeholder="Search product ..." >

                                    <button class="btn btn-primary" type="submit"><i
                                            class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>


                        </div><!-- End .header-search -->
                    </div><!-- End .col-xxl-4-5col -->

                    <div class="col-lg-4 col-xxl-5col d-flex justify-content-end align-items-center">
                        <div class="header-dropdown-link">

                            <?php if(session('id')): ?>
                                <a href="<?php echo e(route('LogOut')); ?>" class="header-auth-link"><i class="icon-user"></i> Sign Out</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>" class="header-auth-link"><i class="icon-user"></i> Sign In</a>
                                <a href="<?php echo e(route('register')); ?>" class="header-auth-link">Register</a>
                            <?php endif; ?>

                            <a href="/compare" class="wishlist-link" title="Compare">
                                <i class="icon-random"></i>
                                <span class="wishlist-count"><?php echo e($compareCount); ?></span>
                            </a>

                            <a href="/wishlist/<?php echo e(session('id') ?? 'guest'); ?>/products" class="wishlist-link" title="Wishlist">
                                <i class="icon-heart-o"></i>
                                <span class="wishlist-count"><?php echo e($wishlistCount); ?></span>
                            </a>

                            <div class="dropdown cart-dropdown">
                                <a href="/cart/<?php echo e(session('id') ?? 'guest'); ?>/products" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count"><?php echo e(count($data)); ?></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-cart-products">
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    
                                                    <a href="product.html"><?php echo e($d->name); ?></a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x <?php echo e($d->price); ?> DH
                                                </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="<?php echo e(asset('/productsImage/'.$d->image)); ?>"
                                                        alt="product">
                                                </a>
                                            </figure>
                                            <a href="/deleteCart/<?php echo e($d->id); ?>" class="btn-remove" title="Remove Product"><i
                                                    class="icon-close"></i></a>
                                        </div><!-- End .product -->

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div><!-- End .cart-product -->
                                    
                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price"><?php echo e($total); ?> DH</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="/cart/<?php echo e(session('id') ?? 'guest'); ?>/products" class="btn btn-primary">View Cart</a>
                                        <a href="checkout"
                                            class="btn btn-outline-primary-2"><span>Checkout</span><i
                                                class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .cart-dropdown -->
                        </div>
                    </div><!-- End .col-xxl-5col -->
                </div><!-- End .row -->
            </div><!-- End .col-xl-9 col-xxl-10 -->
        </div><!-- End .row -->
    </div><!-- End .container-fluid -->
</div><!-- End .header-middle -->
<?php /**PATH C:\Users\Mikasa Ackerman\arymaid\Arymaid\resources\views/partials/header.blade.php ENDPATH**/ ?>