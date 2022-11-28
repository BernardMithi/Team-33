
@extends('layouts.app')

@section('content')

<section class="section-products">
    <div class="container">
            <div class="row justify-content-center text-center">
                    <div class="col-md-8 col-lg-6">
                            <div class="header" style="padding-top: 7em;padding-bottom: 2em; ">
                                    <h3>Products Name</h3>
                            </div>
                    </div>
            </div>
            <div class="row">
                    <!-- Single Product -->
                    @foreach ($products as $product)
                        <div class="col-md-6 col-lg-4 col-xl-3" style="padding-bottom: 1em">
                            <div>
                                    <div>
                                        <a href="{{ route("shop.show", $product->name)}}"><img src="{{ asset('images/pexels-goran-vrakela-230290.jpg') }}" alt="ring" style="width: 200px; height:200px" ></a>
                                    </div>
                                    <div class="part-2">
                                            <a href="{{ route("shop.show", $product->name)}}"><h3 class="product-title">{{ $product->name }}</h3></a>
                                            <h5 class="product-price">{{ $product->presentPrice() }}<a href="#"><i class="fa fa-shopping-cart"></i></a> <a href="#"><i class="fa fa-heart"></i></a></h5>
                                    </div>
                            </div>
                        </div>
                    @endforeach
            </div>
    </div>
</section>


@endsection
{{-- href="shop/{{ $product->name }}" --}}