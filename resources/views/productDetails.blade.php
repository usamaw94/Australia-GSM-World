@extends('layouts.web')

@section('header-links')
    <ul class="nav topnav">
        <li class="active">
            <a href="/products">Products</a>
        </li>
        <li>
            <a href="/repairs">Repairs</a>
        </li>
        <li>
            <a href="/unlock">Unlock</a>
        </li>
        <li>
            <a href="/buySellTrade">Buy/Sell/Trade</a>
        </li>
        <li>
            <a href="/warranty">Warranty</a>
        </li>
        <li>
            <a href="/shopsLocator">Shops locator</a>
        </li>
        <li>
            <a target="_blank" href="https://www.ebay.com.au/usr/ausgsmworld?_trksid=p2047675.l2559">eBay Store</a>
        </li>
    </ul>
@endsection

@section('content')

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="inner-heading">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a> <i class="icon-angle-right"></i></li>
                            <li><a href="/products">Products</a> <i class="icon-angle-right"></i></li>
                            <li class="active">Product Details</li>
                        </ul>
                        <h2>Product Detalis</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content" style="padding-top: 20px">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <img class="mySlides" src="{{ $product[0]->image1Path }}" style="width:100%">
                    @if($product[0]->image2Path != '')
                    <img class="mySlides" src="{{ $product[0]->image2Path }}" style="width:100%">
                    @endif
                    @if($product[0]->image3Path != '')
                    <img class="mySlides" src="{{ $product[0]->image3Path }}" style="width:100%">
                    @endif
                    <div style="margin-top: 10px">
                        <center>
                            <ul class="inline">
                                <li><img style="width: 100px" class="demo w3-opacity w3-hover-opacity-off" src="{{ $product[0]->image1Path }}" onclick="currentDiv(1)"></li>
                                @if($product[0]->image2Path != '')
                                <li><img style="width: 100px" class="demo w3-opacity w3-hover-opacity-off" src="{{ $product[0]->image2Path }}" onclick="currentDiv(2)"></li>
                                @endif
                                @if($product[0]->image3Path != '')
                                <li><img style="width: 100px" class="demo w3-opacity w3-hover-opacity-off" src="{{ $product[0]->image3Path }}" onclick="currentDiv(3)"></li>
                                @endif
                            </ul>
                        </center>
                    </div>
                </div>
                <div class="span8">
                    <div class="text">
                        <h4>{{ $product[0]->product_name }}</h4>
                        <h4><strong style="color: #009688">AU ${{ $product[0]->price }}</strong></h4>
                        <h5>Description</h5>
                        <p>
                        <pre style="font-family: 'OpenSans';">{{ $product[0]->product_description }}</pre>
                        </p>
                        <div style="margin-top: 20px">
                            <a target="_blank" href="{{ $product[0]->ebay_link }}"><button class="btn btn-large btn-primary">
                                    Buy this product from eBay
                                </button></a>
                            <h6 style="margin-top: 10px">Or visit our <strong><a target="_blank" href="/shopsLocator">Shop</a></strong></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
            }
            x[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " w3-opacity-off";
        }
    </script>

@endsection