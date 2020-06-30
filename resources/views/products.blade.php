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
                            <li class="active">Products</li>
                        </ul>
                        <h2>Our Products</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content" style="padding-top: 20px">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <form action="/searchProduct" method="post">
                        {{ csrf_field() }}
                        <div class="input-append input-block-level">
                            <input class="span4" style="font-size: 20px" id="appendedInputButton" type="text" name="product" placeholder="Enter product name">
                            <button class="btn btn-theme" style="font-size: 16px" type="submit">Search</button>
                        </div>
                    </form>
                </div>
                <div class="span6">
                    <h6 style="text-align: center">Visit our <a target="_blank" href="/shopsLocator" style="font-weight: bolder">Shops</a> or <a target="_blank" href="https://www.ebay.com.au/usr/ausgsmworld" style="font-weight: bolder">eBay</a> to buy our products</h6>
                </div>
                <div class="span12" style="margin-top: 30px">

                    <!--<ul class="team-categ filter">-->
                    <!--<li class="all active"><a href="#">All Divisions</a></li>-->
                    <!--<li class="design"><a href="#" title="">Design</a></li>-->
                    <!--<li class="marketing"><a href="#" title="">Marketing</a></li>-->
                    <!--<li class="dev"><a href="#" title="">Development</a></li>-->
                    <!--</ul>-->

                    <div class="clearfix"></div>
                    <div class="row">
                        <section id="team">
                            <ul id="thumbs" class="team">

                                @foreach($products as $p)
                                <!-- Item Project and Filter Name -->
                                <li class="item-thumbs span3 design" data-id="id-0" data-type="design">
                                    <div class="thumbnail">
                                        <img src="{{ $p->image1Path }}" alt="" />
                                        <div class="caption">
                                            {{--JBL Clip 2 Portable Bluetooth Speaker (Blue)--}}
                                            <p class="custom-product-name">{{ $p->product_name }}</p>
                                            <p style="color: #44a582; font-size: 20px">AU ${{ $p->price }}</p>
                                            <a target="_blank" class="btn btn-block btn-primary" href="{{ $p->ebay_link }}">Buy from eBay</a>
                                            <a target="_blank" href="/productDetails/{{ $p->id }}" class="btn btn-block btn-info">View detail</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- End Item Project -->
                                @endforeach

                            </ul>

                        </section>
                    </div>
                    <div class="row">
                        <center>
                            <div class="pagination">
                                <ul>
                                    <li><a style="font-size: 20px" href="{{ $products->previousPageUrl() }}"><< Prev</a></li>
                                    <li><a style="font-size: 20px" href="{{ $products->nextPageUrl() }}">Next >></a></li>
                                </ul>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection