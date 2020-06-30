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
            Quotation messages
        </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-info-circle"></i>&nbsp; All messages</h3>
            </div>
            <div class="box-body">
                <div class="box-body no-padding">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Name</th>
                            <th>Message Subject</th>
                            <th>Date and Time</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($messages as $msg)
                            @if($msg->msg_status == 'New')
                                <tr>
                                    <td><i class="fa fa-circle" style="color: #3c8dbc"></i> &nbsp;&nbsp;{{ $msg->customer_name }}</td>
                                    <td>{{ $msg->message_subject }}</td>
                                    <td>{{ $msg->created_at }}</td>
                                    <td><i title="View" onclick="window.location.href='/quotationMessage/{{ $msg->id }}'" class="fa fa-eye message-action message-action-edit"></i>
                                        <i title="Delete" data-item-id="{{ $msg->id }}" data-item-subject="{{ $msg->message_subject }}" data-toggle="modal" data-target="#deleteMessage" class="fa fa-trash-o message-action message-action-delete"></i>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $msg->customer_name }}</td>
                                    <td>{{ $msg->message_subject }}</td>
                                    <td>{{ $msg->created_at }}</td>
                                    <td><a target="_blank" href="/quotationMessage/{{ $msg->id }}"><i title="View" class="fa fa-eye message-action message-action-edit"></i></a>
                                        <i title="Delete" data-item-id="{{ $msg->id }}" data-item-subject="{{ $msg->message_subject }}" data-toggle="modal" data-target="#deleteMessage" class="fa fa-trash-o message-action message-action-delete"></i>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <!-- /.box -->

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
                        <li><form action="/deleteMassage" method="get">
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