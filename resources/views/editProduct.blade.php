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
        <h1>
            Edit product
        </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-edit"></i>&nbsp; Edit Product</h3>
            </div>
            <div class="box-body">
                <div class="box-body no-padding">

                    <div class="col-md-offset-2 col-md-8">
                        <form role="form" action="/updateProduct" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <input type="hidden" name="productId" required class="form-control" placeholder="Enter product name" value="{{ $product[0]->id }}">

                                <input type="hidden" name="imageName1" required class="form-control" value="{{ $product[0]->image1Name }}">
                                <input type="hidden" name="imageName2" required class="form-control" value="{{ $product[0]->image2Name }}">
                                <input type="hidden" name="imageName3" required class="form-control" value="{{ $product[0]->image3Name }}">

                                <input type="hidden" name="imagePath1" required class="form-control" value="{{ $product[0]->image1Path }}">
                                <input type="hidden" name="imagePath2" required class="form-control" value="{{ $product[0]->image2Path }}">
                                <input type="hidden" name="imagePath3" required class="form-control" value="{{ $product[0]->image3Path }}">

                                <div class="form-group">
                                    <label for="shopId">Product Name</label>
                                    <input type="text" name="productName" required class="form-control" placeholder="Enter product name" value="{{ $product[0]->product_name }}">
                                </div>
                                <div class="form-group">
                                    <label for="shopAddress">Price</label>
                                    <input type="text" name="productPrice" class="form-control" step=".01" placeholder="Enter price" value="{{ $product[0]->price }}">
                                </div>
                                <div class="form-group">
                                    <label for="shopPassword">Description</label>
                                    <textarea name="productDescription" placeholder="Enter brief description of product" class="form-control" >{{ $product[0]->product_description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Ebay link of product</label>
                                    <input name="ebayLink" type="text" class="form-control" placeholder="Enter ebay link for product" value="{{ $product[0]->ebay_link }}">
                                </div>
                                <h4>Edit product images</h4>
                                <div class="form-group">
                                    <label>Image1</label>
                                    <input accept="image/*" type="file" name="image1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Image2</label>
                                    <input accept="image/*" type="file" name="image2" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Image3</label>
                                    <input accept="image/*" type="file" name="image3" class="form-control">
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <a href="/manageProducts" class="btn btn-default pull-right">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection