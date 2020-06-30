@extends('layouts.admin')

@section('nav-links')

    <ul class="sidebar-menu" data-widget="tree">
        <li><a href="/quotationMessages"><i class="fa fa-envelope-open-o"></i> <span>Quotation Messages</span></a></li>
        <li class="active"><a href="/manageProducts"><i class="fa fa-shopping-bag"></i> <span>Manage Products</span></a></li>
    </ul>

    @endsection
@section('content')

        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">

        @if (session('msg'))
            <div id="staticNotify" class="callout callout-info">
                <h4><i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;  {{ session('msg') }}</h4>
            </div>
        @endif

        @if (session('errorMsg'))
            <div id="staticErrorNotify" class="callout callout-danger">
                <h4><i class="icon fa fa-times"></i>&nbsp;&nbsp;&nbsp;  {{ session('errorMsg') }}</h4>
            </div>
        @endif

        <h1>
            Quotation Message
        </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-body">
                        <img class="mySlides" src="{{ $product[0]->image1Path }}" style="width:100%">
                        @if($product[0]->image2Path != '')
                        <img class="mySlides" src="{{ $product[0]->image2Path }}" style="width:100%">
                        @endif
                        @if($product[0]->image3Path != '')
                        <img class="mySlides" src="{{ $product[0]->image3Path }}" style="width:100%">
                        @endif
                            <div style="margin-top: 10px" class="row">
                            <center>
                                <ul class="list-inline">
                                    <li><img style="width: 80px" class="demo w3-opacity w3-hover-opacity-off" src="{{ $product[0]->image1Path }}" onclick="currentDiv(1)"></li>
                                    @if($product[0]->image2Path != '')
                                    <li><img style="width: 80px" class="demo w3-opacity w3-hover-opacity-off" src="{{ $product[0]->image2Path }}" onclick="currentDiv(2)"></li>
                                    @endif
                                    @if($product[0]->image3Path != '')
                                    <li><img style="width: 80px" class="demo w3-opacity w3-hover-opacity-off" src="{{ $product[0]->image3Path }}" onclick="currentDiv(3)"></li>
                                    @endif
                                </ul>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-info-circle"></i>&nbsp; Product details</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Product Name</th>
                                <td>{{ $product[0]->product_name }}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>AU ${{ $product[0]->price }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $product[0]->product_description }}</td>
                            </tr>
                            <tr>
                                <th colspan="2">
                                    <ul class="list-inline">
                                        <li class="inline">
                                            <a href="{{ $product[0]->ebay_link }}" target="_blank" class="btn btn-primary">
                                                Visit on eBay
                                            </a>
                                        </li>
                                        <li class="inline">
                                            <a href="/editProduct/{{ $product[0]->id }}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i> &nbsp;
                                                Edit details
                                            </a>
                                        </li>
                                        <li class="inline"><button data-product-id="{{ $product[0]->id }}" data-product-name="{{ $product[0]->product_name }}" data-toggle="modal" data-target="#deleteProduct" type="button" class="btn btn-danger btn-delete-product">
                                                <i class="fa fa-trash-o"></i> &nbsp;
                                                Delete message
                                            </button></li>
                                    </ul>
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
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

    <div class="modal fade" id="deleteProduct">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete message</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete this message : " <span id="nameToDelete"></span> " ?</p>
                </div>
                <div class="modal-footer">
                    <ul class="list-inline">
                        <li><form action="/btnDeleteProduct" method="get">
                                <input type="hidden" name="productId" id="productId">
                                <button type="submit" class="btn btn-danger">Yes</button>
                            </form>
                        </li>
                        <li>
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

</div>
<!-- /.content-wrapper -->
@endsection