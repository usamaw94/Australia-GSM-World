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
                        <h2>Get a quote</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">

            <div class="row">
                <div class="span8">

                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="/submitQuote" method="post" role="form" class="contactForm">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="span4 form-group field">
                                <input type="text" name="name" placeholder="Your Name" required/>
                            </div>

                            <div class="span4 form-group">
                                <input type="email" name="email" placeholder="Your Email" />
                            </div>
                            <div class="span8 form-group">
                                <input type="text" name="phone" placeholder="Your phone number" required/>
                            </div>
                            <div class="span4 form-group field">
                                <input type="text" name="suburb" placeholder="Your Suburb" required/>
                            </div>

                            <div class="span4 form-group">
                                <input type="number" name="postcode" placeholder="Postcode" required/>
                            </div>
                            <div class="span8 form-group">
                                <input type="text" name="subject" placeholder="Subject" required/>
                            </div>
                            <div class="span8 form-group">
                                <textarea name="message" rows="5" placeholder="Please describe your phone problem briefly" required></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-theme btn-medium margintop10" type="submit">Get a quote</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="span4">
                    <div class="clearfix"></div>
                    <aside class="right-sidebar">

                        <div class="widget">
                            <h5 class="widgetheading">You can also contact us directly<span></span></h5>

                            <ul class="contact-info">
                                <li><label>Phone :</label> +61 417 313 900 </li>
                                <li><label>Email : </label>  tunjay@australiagsmworld.com.au</li>
                                <li><a class="btn btn-link" href="Location.html"><b>Visit our shops</b></a></li>
                            </ul>

                        </div>
                    </aside>
                </div>
            </div>


        </div>
    </section>

@endsection