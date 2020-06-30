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
    <div id="notify" class="box box-solid notify-panel">
        <p><i class="fa fa-check icon"></i>&nbsp;&nbsp;
            <span>Notification</span>
        </p>
    </div>


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
            Manage Products
        </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="panel box box-solid" style="background: #3c8dbc">
            <div style="color: white; cursor: pointer" class="box-header" data-toggle="collapse" data-parent="#accordion" href="#fabric">
                <h4 class="box-title">
                    Add New Product
                </h4>
            </div>
            <div style="background-color: #fff; border-radius: 2px" id="fabric" class="panel-collapse collapse">
                <div class="box-body">
                    <div class="col-md-offset-2 col-md-8">
                        <form role="form" action="/addProduct" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="box-body">

                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input maxlength="45" type="text" name="productName" class="form-control" placeholder="Enter product name" required>
                                </div>

                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" name="productPrice" class="form-control" step=".01" placeholder="Enter product price" required>
                                </div>

                                <div class="form-group">
                                    <label for="shopPassword">Description</label>
                                    <textarea name="productDescription" placeholder="Enter brief description of product" class="form-control" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label>eBay link</label>
                                    <input name="ebayLink" type="text" class="form-control" placeholder="Enter eBay link of product" required>
                                </div>

                                <h4>Edit product images</h4>
                                <div class="form-group">
                                    <label>Image1</label>
                                    <input name="productImage1" accept="image/*" type="file" class="form-control"required>
                                </div>
                                <div class="form-group">
                                    <label>Image2</label>
                                    <input name="productImage2" accept="image/*" type="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Image3</label>
                                    <input name="productImage3" accept="image/*" type="file" class="form-control">
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Add product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-info-circle"></i>&nbsp; All products</h3>
            </div>
            <div class="box-body">
                <div class="box-body no-padding">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($products as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->product_name }}</td>
                            <td><img src="{{ $p->image1Path }}" alt="No image" class="item-img"></td>
                            <td>AU ${{ $p->price }}</td>
                            <td>
                                <a href="/adminProductDetails/{{ $p->id }}"><i title="View product" class="fa fa-eye product-action product-action-view"></i></a>
                                <a href="/editProduct/{{ $p->id }}"><i title="Edit product details" class="fa fa-edit product-action product-action-edit"></i></a>
                                <i title="Delete" data-toggle="modal" data-target="#deleteProduct" data-product-id="{{ $p->id }}" data-product-name="{{ $p->product_name }}" class="fa fa-trash-o product-action product-action-delete"></i>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

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
                        <li><form action="/deleteProduct" method="get">
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

@endsection