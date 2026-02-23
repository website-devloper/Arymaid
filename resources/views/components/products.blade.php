<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/plugins/nouislider/nouislider.css">
	
@include('partials.topheader')
    <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/products">Shop</a></li>
                  
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            @include('partials.header')
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
                						Showing <span>{{$produits->count()}} of {{$produits->total()}}</span> Products
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
												<option value="popularity" {{ request('sortby') == 'popularity' ? 'selected' : '' }}>Most Popular</option>
												<option value="price-low" {{ request('sortby') == 'price-low' ? 'selected' : '' }}>Price: Low to High</option>
												<option value="price-high" {{ request('sortby') == 'price-high' ? 'selected' : '' }}>Price: High to Low</option>
												<option value="date" {{ request('sortby') == 'date' ? 'selected' : '' }}>Newest</option>
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


                                    @foreach($produits as $produit)
                                    

                                    <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="{{asset('/productsImage/'.$produit->image)}}" alt="Product image" class="product-image">
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
                                                    <a href="/products/{{$produit->categorie_id}}">{{$produit->categorie_rel->type}}</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product.html">{{$produit->name}}</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                   {{$produit->price}} DH
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
@endforeach

                                </div><!-- End .row -->
                            </div><!-- End .products -->


                			<nav aria-label="Page navigation">
							    <ul class="pagination justify-content-center">

							        <li class="page-item"><a class="page-link" >{{$produits->links('pagination::bootstrap-5')}}</a></li>

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
                                    @foreach($categories as $categorie)

												<div class="filter-item">
													<div class="custom-control custom-checkbox">
														<input type="checkbox" name="category[]" value="{{$categorie->id}}" class="custom-control-input" id="cat-{{$categorie->id}}" {{ is_array(request('category')) && in_array($categorie->id, request('category')) ? 'checked' : '' }}>
														<label class="custom-control-label" for="cat-{{$categorie->id}}">{{$categorie->type}}</label>
													</div><!-- End .custom-checkbox -->
													<span class="item-count">0</span>
												</div><!-- End .filter-item -->
                                    @endforeach
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
                                                <div id="price-slider" class="mb-3"></div><!-- End #price-slider -->
                                                
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label>Min</label>
                                                        <input type="number" name="min_price" id="min-price-input" class="form-control" value="{{ request('min_price', 0) }}" placeholder="Min">
                                                    </div>
                                                    <div class="col-6">
                                                        <label>Max</label>
                                                        <input type="number" name="max_price" id="max-price-input" class="form-control" value="{{ request('max_price', 500) }}" placeholder="Max">
                                                    </div>
                                                </div>
                                                
                                                <button type="submit" class="btn btn-primary btn-block mt-3">Apply Price Filter</button>
                                            </div><!-- End .filter-price -->
										</div><!-- End .widget-body -->
									</div><!-- End .collapse -->
        						</div><!-- End .widget -->
                                </form>
                                <input type="hidden" name="sortby" id="sortby-hidden" form="filter-form" value="{{ request('sortby') }}">
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
                    document.getElementById('min-price-input').value = min;
                    document.getElementById('max-price-input').value = max;
                });
                priceSlider.noUiSlider.set([{{ request('min_price', 0) }}, {{ request('max_price', 500) }}]);

                document.getElementById('min-price-input').onchange = function() {
                    priceSlider.noUiSlider.set([this.value, null]);
                };
                document.getElementById('max-price-input').onchange = function() {
                    priceSlider.noUiSlider.set([null, this.value]);
                };
            }
        }
    }, 100);
});

function submitSorting(val) {
    document.getElementById('sortby-hidden').value = val;
    document.getElementById('filter-form').submit();
}
</script>
