@extends('layouts.admin')

@section('nav-links')

    <ul class="sidebar-menu" data-widget="tree">
        <li class="active"><a href="/quotationMessages"><i class="fa fa-envelope-open-o"></i> <span>Quotation Messages</span></a></li>
        <li><a href="/manageProducts"><i class="fa fa-shopping-bag"></i> <span>Manage Products</span></a></li>
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
        <h1>
            Quotation Message
        </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-info-circle"></i>&nbsp; Message details</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    @foreach($message as $msg)
                    <tr>
                        <th>Customer name</th>
                        <td>{{ $msg->customer_name }} </td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $msg->customer_email }} </td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td>{{ $msg->phone }} </td>
                    </tr>
                    <tr>
                        <th>Date/Time</th>
                        <td>{{ $msg->created_at }} </td>
                    </tr>
                    <tr>
                        <th>Suburb</th>
                        <td>{{ $msg->suburb }} </td>
                    </tr>
                    <tr>
                        <th>Postcode</th>
                        <td>{{ $msg->postcode }} </td>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <td>
                            {{ $msg->message_subject }}
                        </td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td>
                            {{ $msg->message }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <button data-item-id="{{ $msg->id }}" data-item-subject="{{ $msg->message_subject }}" data-toggle="modal" data-target="#deleteMessage" type="button" class="btn btn-danger message-btn-delete">
                                <i class="fa fa-trash-o"></i> &nbsp;
                                Delete message
                            </button>
                        </th>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

    <div class="modal fade" id="deleteMessage">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Delete message</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete this message : " <span id="idToDelete"></span> " ?</p>
                </div>
                <div class="modal-footer">
                    <ul class="list-inline">
                        <li><form action="/btnDeleteMassage" method="get">
                                <input type="hidden" name="messageId" id="messageId">
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