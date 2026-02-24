@extends('layouts.masterHome')

@section('content')
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
                        @foreach($comparesByUser as $compare)
                        <tr>
                            <td class="product-col">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="/singleProduct/{{$compare->id}}">
                                            <img src="{{asset('/productsImage/'.$compare->image)}}" alt="Product image">
                                        </a>
                                    </figure>

                                    <h3 class="product-title">
                                        <a href="/singleProduct/{{$compare->id}}">{{$compare->name}}</a>
                                    </h3><!-- End .product-title -->
                                </div><!-- End .product -->
                            </td>
                            <td class="price-col">{{$compare->price}} DH</td>
                            <td class="action-col">
                                <a href="/cart/{{$compare->id}}" class="btn btn-block btn-outline-primary-2"><i class="icon-cart-plus"></i>Add to Cart</a>
                            </td>
                            <td class="remove-col"><a href="/deleteCompare/{{$compare->id}}" class="btn-remove"><i class="icon-close"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table><!-- End .table table-compare -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
</div><!-- End .page-wrapper -->
@endsection
