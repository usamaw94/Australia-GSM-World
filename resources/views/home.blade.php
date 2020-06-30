@extends('layouts.admin')

@section('nav-links')

    <ul class="sidebar-menu" data-widget="tree">
        <li><a href="/quotationMessages"><i class="fa fa-envelope-open-o"></i> <span>Quotation Messages</span></a></li>
        <li><a href="/manageProducts"><i class="fa fa-shopping-bag"></i> <span>Manage Products</span></a></li>
    </ul>

    @endsection

@section('content')

        <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Admin Dashboard
        </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <!--------------------------
          | Your Page Content Here |
          -------------------------->

        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="info-box" onclick="window.location.href='/quotationMessages'" style="cursor: pointer">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-open-o"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-number">Quotation Messages</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="info-box" onclick="window.location.href='/manageProducts'" style="cursor: pointer">
                    <span class="info-box-icon bg-red"><i class="fa fa-shopping-bag"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-number">Manage Products</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection