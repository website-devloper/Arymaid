<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/plugins/nouislider/nouislider.css">
	
<?php echo $__env->make('partials.topheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/products">Shop</a></li>
                  
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="page-content">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-9">
                			<div class="toolbox">
                				<div class="toolbox-left">
                                    <!--######################################
                                        ######################################
                                        ###################################### -->
                					<div class="toolbox-info">
                						Showing <span><?php echo e($produits->count()); ?> of <?php echo e($produits->total()); ?></span> Products
                					</div><!-- End .toolbox-info -->
                                    <!-- ############################################
                                         ############################################
                                         ############################################ -->
                				</div><!-- End .toolbox-left -->

                				<div class="toolbox-right">
                					<div class="toolbox-sort">
                						<label for="sortby">Sort by:</label>
                						<div class="select-custom">
											<select name="sortby" id="sortby" class="form-control" onchange="submitSorting(this.value)">
												<option value="popularity" <?php echo e(request('sortby') == 'popularity' ? 'selected' : ''); ?>>Most Popular</option>
												<option value="price-low" <?php echo e(request('sortby') == 'price-low' ? 'selected' : ''); ?>>Price: Low to High</option>
												<option value="price-high" <?php echo e(request('sortby') == 'price-high' ? 'selected' : ''); ?>>Price: High to Low</option>
												<option value="date" <?php echo e(request('sortby') == 'date' ? 'selected' : ''); ?>>Newest</option>
											</select>
										</div>
                					</div><!-- End .toolbox-sort -->
                					<div class="toolbox-layout">
                						<a href="category-list.html" class="btn-layout">
                						</a>

                						

                						

                						
                					</div><!-- End .toolbox-layout -->
                				</div><!-- End .toolbox-right -->
                			</div><!-- End .toolbox -->

                            <div class="products mb-3">
                                <div class="row justify-content-center">


                                    <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    

                                    <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="<?php echo e(asset('/productsImage/'.$produit->image)); ?>" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                    <a href="/singleProduct/{$produit->id}" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="" class="btn-product btn-cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="/products/<?php echo e($produit->categorie_id); ?>"><?php echo e($produit->categorie_rel->type); ?></a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html"><?php echo e($produit->name); ?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                   <?php echo e($produit->price); ?> DH
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div><!-- End .row -->
                            </div><!-- End .products -->


                			<nav aria-label="Page navigation">
							    <ul class="pagination justify-content-center">

							        <li class="page-item"><a class="page-link" ><?php echo e($produits->links('pagination::bootstrap-5')); ?></a></li>

							</nav>
                		</div><!-- End .col-lg-9 -->
                		<aside class="col-lg-3 order-lg-first">
                			<div class="sidebar sidebar-shop">
                				<div class="widget widget-clean">
                					<label>Filters:</label>
                					<a href="/products" class="sidebar-filter-clear">Clean All</a>
                				</div><!-- End .widget widget-clean -->

                                <form action="/products" method="GET" id="filter-form">

                				<div class="widget widget-collapsible">
    								<h3 class="widget-title">
									    <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
									        Category
									    </a>
									</h3><!-- End .widget-title -->

									<div class="collapse show" id="widget-1">
										<div class="widget-body">
											<div class="filter-items filter-items-count">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" name="category[]" value="<?php echo e($categorie->id); ?>" class="custom-control-input" id="cat-<?php echo e($categorie->id); ?>" <?php echo e(is_array(request('category')) && in_array($categorie->id, request('category')) ? 'checked' : ''); ?>>
														<label class="custom-control-label" for="cat-<?php echo e($categorie->id); ?>"><?php echo e($categorie->type); ?></label>
													</div><!-- End .custom-checkbox -->
													<span class="item-count">0</span>
												</div><!-- End .filter-item -->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</div><!-- End .filter-items -->
										</div><!-- End .widget-body -->
									</div><!-- End .collapse -->
        						</div><!-- End .widget -->

        						<div class="widget widget-collapsible">
    								<h3 class="widget-title">
									    <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
									        Price
									    </a>
									</h3><!-- End .widget-title -->

									<div class="collapse show" id="widget-5">
										<div class="widget-body">
                                            <div class="filter-price">
                                                <div class="filter-price-text">
                                                    Price Range:
                                                    <span id="filter-price-range"></span>
                                                </div><!-- End .filter-price-text -->

                                                <div id="price-slider"></div><!-- End #price-slider -->
                                                <input type="hidden" name="min_price" id="min-price-hidden" value="<?php echo e(request('min_price', 0)); ?>">
                                                <input type="hidden" name="max_price" id="max-price-hidden" value="<?php echo e(request('max_price', 1000)); ?>">
                                                
                                                <button type="submit" class="btn btn-primary btn-block mt-2">Filter</button>
                                            </div><!-- End .filter-price -->
										</div><!-- End .widget-body -->
									</div><!-- End .collapse -->
        						</div><!-- End .widget -->
                                </form>
                                <input type="hidden" name="sortby" id="sortby-hidden" form="filter-form" value="<?php echo e(request('sortby')); ?>">
                			</div><!-- End .sidebar sidebar-shop -->
                		</aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    var checkExist = setInterval(function() {
        if (typeof noUiSlider === 'object') {
            var priceSlider = document.getElementById('price-slider');
            if (priceSlider && priceSlider.noUiSlider) {
                clearInterval(checkExist);
                priceSlider.noUiSlider.on('update', function(values, handle) {
                    var min = values[0].replace(/[^0-9]/g, '');
                    var max = values[1].replace(/[^0-9]/g, '');
                    document.getElementById('min-price-hidden').value = min;
                    document.getElementById('max-price-hidden').value = max;
                });
                priceSlider.noUiSlider.set([<?php echo e(request('min_price', 0)); ?>, <?php echo e(request('max_price', 1000)); ?>]);
            }
        }
    }, 100);
});

function submitSorting(val) {
    document.getElementById('sortby-hidden').value = val;
    document.getElementById('filter-form').submit();
}
</script>
<?php /**PATH C:\Users\Mikasa Ackerman\arymaid\Arymaid\resources\views/components/products.blade.php ENDPATH**/ ?>