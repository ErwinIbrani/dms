@extends('layouts.app')
@section('page_title', 'User Groups')

@section('content')
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
            <button type="button" class="btn btn-light"><i class="oi oi-data-transfer-download"></i> <span class="ml-1">Export</span></button> <button type="button" class="btn btn-light"><i class="oi oi-data-transfer-upload"></i> <span class="ml-1">Import</span></button>
            <div class="dropdown">
                <button type="button" class="btn btn-light" data-toggle="dropdown"><span>More</span> <span class="fa fa-caret-down"></span></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-arrow"></div><a href="#" class="dropdown-item">Add tasks</a> <a href="#" class="dropdown-item">Invite members</a>
                    <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Share</a> <a href="#" class="dropdown-item">Archive</a> <a href="#" class="dropdown-item">Remove</a>
                </div>
            </div>
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
                                Group
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

@endsection