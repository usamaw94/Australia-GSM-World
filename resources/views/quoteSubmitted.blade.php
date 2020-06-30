@extends('layouts.web')

@section('header-links')
    <ul class="nav topnav">
        <li>
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
                            <li class="active">Get a quote</li>
                        </ul>
                        <h2>Message sent</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">



            <div class="row">
                <div class="span12">
                    <div class="aligncenter">
                        <i class="icon-circled icon-bgsuccess icon-check icon-4x"></i>
                    </div>
                    <div class="blankline30"></div>
                    <h3 class="aligncenter">Message sent</h3>
                    <p class="aligncenter">We have received your messsage and we will contact you as soon as possible. Thank you !
                    </p>
                </div>

            </div>



        </div>
    </section>

@endsection