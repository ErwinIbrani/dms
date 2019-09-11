@extends('layouts.app')
@section('page_title', 'Project')

@section('content')

    <div class="page-inner">
        <div style="text-align: right"><?/*= $breadcrumb */?></div>
        <br/>
        <div class="page-section">
            <div class="card card-fluid">
                <!-- .card-header -->
                <div class="card-header">
                    <!-- .nav-tabs -->

                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a href="<?= site_url("procurement/project/index"); ?>" class="nav-link show active">
                               Project
                            </a>
                        </li>
                    </ul><!-- /.nav-tabs -->
                </div><!-- /.card-header -->
                <!-- .card-body -->
                <div class="card-body">
                    <form method='post' action="<?= base_url() ?>procurement/project/index">
                        <div class="input-group input-group-alt">
                            <!-- .input-group -->
                            <div class="input-group has-clearable">
                                <button id="clear-search" type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                                </div>
                                <input type='text' name='search' value='<?= $search ?>' class='form-control' placeholder='Search All Type' autocomplete="off">
                            </div><!-- /.input-group -->
                            <!-- .input-group-append -->
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type='submit' name='submit' value='Cari'>Filter</button>
                            </div><!-- /.input-group-append -->
                        </div>
                    </form>
                    <br/>
                    <a href="<?= site_url("procurement/project/create"); ?>" class="btn btn-primary">
                        Create New
                    </a>
                    <!-- .table-responsive -->
                    <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                            <thead>
                            <tr>
                                <th> No </th>
                                <th> Vendor Name </th>
                                <th> WBS ID </th>
                                <th> IRO Number </th>
                                <th>Site ID</th>
                                <th style="width:100px; min-width:100px;"> &nbsp; </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($projects as $key => $roject)
                                <tr>
                                    <td class="align-middle"> {{ $i++ }} </td>
                                    <td class="align-middle"> {{ $roject->name }} </td>
                                    <td class="align-middle"> {{ $roject->wbs_id }} </td>
                                    <td class="align-middle"> {{ $roject->iro_number }} </td>
                                    <td class="align-middle"> {{ $roject->site_id_ibs }} </td>
                                    <td class="align-middle text-right">
                                        <a href="<?= site_url("procurement/project/edit/".$roject->id.""); ?>" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a>
                                        <a href="<?= site_url("procurement/project/view/".$roject->id.""); ?>" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-eye"></i> <span class="sr-only">View</span></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="dataTables_paginate paging_simple_numbers" id="myTable_paginate">
                            <?= $pagination; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection