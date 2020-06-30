@extends('layouts.admin')

{{--@section('header-links')--}}
{{--@endsection--}}

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
            Change Password
        </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="box box-primary">
            <div class="box-body">
                <div class="col-md-offset-3 col-md-6">
                    <div class="box-body">
                        <form action="/updatePassword" method="post">
                            {{ csrf_field() }}
                            <h4>Enter current password</h4>
                            <input required type="password" name="currentPassword" class="form-control">
                            <h4>Enter new password</h4>
                            <input required type="password" name="newPassword" class="form-control">
                            @if ($errors->has('newPassword'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('newPassword') }}</strong>
                                </span>
                            @endif
                            <h4>Confirm new password</h4>
                            <input required type="password" name="newPassword_confirmation" class="form-control">
                            <br>
                            <button class="btn btn-primary" type="submit">
                                <b>Submit</b>
                            </button>
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