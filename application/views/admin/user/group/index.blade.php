@extends('layouts.app')
@section('page_title', 'User Groups')

@section('content')
<div class="" page>
    <div class="page-inner">
        <header class="page-title-bar">
            <!-- .breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>User</a>
                    </li>
                </ol>
            </nav><!-- /.breadcrumb -->
            <!-- floating action -->
            <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->
            <!-- title and toolbar -->
            <div class="d-md-flex align-items-md-start">
                <h1 class="page-title mr-sm-auto"> {{ $title }} </h1><!-- .btn-toolbar -->
                <div class="btn-toolbar">
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#userGroupFrom">
                        <i class="oi oi-plus"></i>
                        <span class="ml-1">Add New</span></button>
                </div><!-- /.btn-toolbar -->
            </div><!-- /title and toolbar -->
        </header>


        <div class="page-section">
            <!-- .card -->
            <div class="card card-fluid">
                <!-- .card-body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                            <!-- thead -->
                            <thead>
                                <tr>
                                    <th>
                                        Gorup Name
                                    </th>
                                    <th> Description </th>
                                    <th style="width:100px; min-width:100px;"> &nbsp; </th>
                                </tr>
                            </thead>
                            <!-- /thead -->

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal modal-alert fade" id="userGroupFrom" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="userGroupFromLabel" aria-hidden="true">
    <!-- .modal-dialog -->
    <div class="modal-dialog" role="document">
        <!-- .modal-content -->
        <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h5 id="userGroupFromLabel" class="modal-title">
                    <i class="fa fa-user text-success mr-1"></i> Add New User Group </h5>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body">
                <form id="user-group-from">

                    <div class="form-group">
                        <label for="tf1">Group Name</label> 
                        <input type="text" class="form-control" 
                        id="tf1" name="name" placeholder="e.g. Finance, Procurment">
                    </div>
                    <div class="form-group">
                        <label for="tf1">Description</label> 
                        <textarea class="form-control" name="description"></textarea>
                    </div>

                </form>
            </div><!-- /.modal-body -->
            <!-- .modal-footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-info" onclick="document.getElementById('user-group-from').submit()">Submit</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div><!-- /.modal-footer -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection