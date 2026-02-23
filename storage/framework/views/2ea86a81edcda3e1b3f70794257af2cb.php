<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Compare Products</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <?php echo $__env->make('partials.topheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<div class="page-wrapper">
	<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Compare</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="container">
					<table class="table table-compare">
						<thead>
							<tr>
								<th>Product</th>
								<th>Price</th>
								<th>Action</th>
								<th>Remove</th>
							</tr>
						</thead>

						<tbody>
							<?php $__currentLoopData = $comparesByUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compare): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<tr>
								<td class="product-col">
									<div class="product">
										<figure class="product-media">
											<a href="/singleProduct/<?php echo e($compare->id); ?>">
												<img src="<?php echo e(asset('/productsImage/'.$compare->image)); ?>" alt="Product image">
											</a>
										</figure>

										<h3 class="product-title">
											<a href="/singleProduct/<?php echo e($compare->id); ?>"><?php echo e($compare->name); ?></a>
										</h3><!-- End .product-title -->
									</div><!-- End .product -->
								</td>
								<td class="price-col"><?php echo e($compare->price); ?> DH</td>
								<td class="action-col">
    								<a href="/cart/<?php echo e($compare->id); ?>" class="btn btn-block btn-outline-primary-2"><i class="icon-cart-plus"></i>Add to Cart</a>
								</td>
								<td class="remove-col"><a href="/deleteCompare/<?php echo e($compare->id); ?>" class="btn-remove"><i class="icon-close"></i></a></td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table><!-- End .table table-compare -->
            	</div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
          

	<script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/jquery.hoverIntent.min.js"></script>
    <script src="/assets/js/jquery.waypoints.min.js"></script>
    <script src="/assets/js/superfish.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
<?php /**PATH C:\Users\Mikasa Ackerman\arymaid\Arymaid\resources\views/components/compare.blade.php ENDPATH**/ ?>