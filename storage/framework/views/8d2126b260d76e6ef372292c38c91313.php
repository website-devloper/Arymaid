

<?php $__env->startSection('content'); ?>
<div class="page-wrapper">
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container d-flex align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/products">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Details</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="product-details-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery product-gallery-vertical">
                                <div class="row">
                                    <figure class="product-main-image">
                                        <img id="product-zoom" src="<?php echo e(asset('/productsImage/'.$SingleProduit->image)); ?>" data-zoom-image="<?php echo e(asset('/productsImage/'.$SingleProduit->image)); ?>" alt="product image">

                                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                    </figure><!-- End .product-main-image -->

                                    <div id="product-zoom-gallery" class="product-image-gallery">
                                        <a class="product-gallery-item active" href="#" data-image="<?php echo e(asset('/productsImage/'.$SingleProduit->image)); ?>" data-zoom-image="<?php echo e(asset('/productsImage/'.$SingleProduit->image)); ?>">
                                            <img src="<?php echo e(asset('/productsImage/'.$SingleProduit->image)); ?>" alt="product side">
                                        </a>

                                        <?php if($SingleProduit->hoverImg): ?>
                                        <a class="product-gallery-item" href="#" data-image="<?php echo e(asset('/productsHoverImage/'.$SingleProduit->hoverImg)); ?>" data-zoom-image="<?php echo e(asset('/productsHoverImage/'.$SingleProduit->hoverImg)); ?>">
                                            <img src="<?php echo e(asset('/productsHoverImage/'.$SingleProduit->hoverImg)); ?>" alt="product cross">
                                        </a>
                                        <?php endif; ?>
                                    </div><!-- End .product-image-gallery -->
                                </div><!-- End .row -->
                            </div><!-- End .product-gallery -->
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <div class="product-details">
                                <h1 class="product-title"><?php echo e($SingleProduit->name); ?></h1><!-- End .product-title -->

                                <div class="product-price">
                                    <span class="new-price"><?php echo e($SingleProduit->price); ?> DH</span>
                                    <?php if($SingleProduit->oldPrice): ?>
                                        <span class="old-price" style="text-decoration: line-through; color: #ccc; font-size: 1.8rem; margin-left: 1.5rem;"><?php echo e($SingleProduit->oldPrice); ?> DH</span>
                                    <?php endif; ?>
                                </div><!-- End .product-price -->

                                <div class="product-content">
                                    <p><?php echo e($SingleProduit->utilisation); ?></p>
                                </div><!-- End .product-content -->

                                <div class="details-filter-row details-row-size">
                                    <label for="qty">Quantity:</label>
                                    <div class="product-details-quantity">
                                        <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                    </div><!-- End .product-details-quantity -->
                                </div><!-- End .details-filter-row -->

                                <div class="product-details-action">
                                    <a href="/cart/<?php echo e($SingleProduit->id); ?>" class="btn-product btn-cart"><span>add to cart</span></a>

                                    <div class="details-action-wrapper">
                                        <form action="/wishlist/<?php echo e($SingleProduit->id); ?>" method="GET" style="display: inline-block;">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></button>
                                        </form>
                                        <a href="/compare/<?php echo e($SingleProduit->id); ?>" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                                    </div><!-- End .details-action-wrapper -->
                                </div><!-- End .product-details-action -->

                                <div class="product-details-footer">
                                    <div class="product-cat">
                                        <span>Category:</span>
                                        <a href="/products/<?php echo e($SingleProduit->categorie_rel->type); ?>"><?php echo e($SingleProduit->categorie_rel->type); ?></a>
                                    </div><!-- End .product-cat -->

                                    <div class="social-icons social-icons-sm">
                                        <span class="social-label">Share:</span>
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                        <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                    </div>
                                </div><!-- End .product-details-footer -->
                            </div><!-- End .product-details -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .product-details-top -->

                <div class="product-details-tab">
                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (0)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                            <div class="product-desc-content">
                                <h3>Product Information</h3>
                                <p><?php echo e($SingleProduit->description); ?></p>
                                <p><?php echo e($SingleProduit->description2); ?></p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                            <div class="product-desc-content">
                                <h3>Information</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>
                                
                                <h3>Fabric & Care</h3>
                                <ul>
                                    <li>100% Cotton</li>
                                    <li>Hand wash only</li>
                                    <li>Do not bleach</li>
                                    <li>Do not tumble dry</li>
                                </ul>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                            <div class="reviews">
                                <h3>Reviews (0)</h3>
                                <p>There are no reviews for this product yet.</p>
                            </div><!-- End .reviews -->
                        </div><!-- .End .tab-pane -->
                    </div>
                </div><!-- End .product-details-tab -->

                <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
                <div class="products mb-3">
                    <div class="row justify-content-center">
                        <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="/singleProduct/<?php echo e($product->id); ?>">
                                        <img src="<?php echo e(asset('/productsImage/'.$product->image)); ?>" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="/wishlist/<?php echo e($product->id); ?>" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                        <a href="/singleProduct/<?php echo e($product->id); ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        <a href="/compare/<?php echo e($product->id); ?>" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="/cart/<?php echo e($product->id); ?>" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="/products/<?php echo e($product->categorie_rel->type); ?>"><?php echo e($product->categorie_rel->type); ?></a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="/singleProduct/<?php echo e($product->id); ?>"><?php echo e($product->name); ?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <?php echo e($product->price); ?> DH
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div><!-- End .row -->
                </div><!-- End .products -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
</div><!-- End .page-wrapper -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<!-- Additional page specific scripts -->
<script src="/assets/js/bootstrap-input-spinner.js"></script>
<script src="/assets/js/jquery.elevateZoom.min.js"></script>
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.masterHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Mikasa Ackerman\arymaid\Arymaid\resources\views/components/singleProduct.blade.php ENDPATH**/ ?>