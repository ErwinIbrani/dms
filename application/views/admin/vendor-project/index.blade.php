@extends('layouts.app')
@section('page_title', 'Vendor Project')

@section('content')
    <div class="page-inner">
        <div style="text-align: right"><?= $breadcrumb ?></div>
        <br/>
        <div class="page-section">
            <div class="card card-fluid">
                <!-- .card-header -->
                <div class="card-header">
                    <!-- .nav-tabs -->
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a href="<?= site_url("admin/vendorproject/index"); ?>" class="nav-link show active">
                                Vendor Project
                            </a>
                        </li>
                    </ul><!-- /.nav-tabs -->
                </div><!-- /.card-header -->
                <!-- .card-body -->
                <div class="card-body">
                    <form method='post' action="<?= base_url() ?>admin/vendorproject/index">
                        <div class="input-group input-group-alt">
                            <!-- .input-group -->
                            <div class="input-group has-clearable">
                                <button id="clear-search" type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                                </div>
                                <input type='text' name='search' value='<?= $search ?>' class='form-control' placeholder='All Types' autocomplete="off">
                            </div><!-- /.input-group -->
                            <!-- .input-group-append -->
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type='submit' name='submit' value='Cari'>Filter</button>
                            </div><!-- /.input-group-append -->
                        </div>
                    </form>
                    <br/>
                    <!-- .table-responsive -->
                    <div class="table-responsive">
                        <!-- .table -->
                        <table class="table">
                            <thead>
                            <tr>
                                <th> No </th>
                                <th> WBS ID</th>
                                <th> IRO Number </th>
                                <th> Vendo Name </th>
                                <th> Status </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($vendors as $key => $vendor)
                                <tr>
                                    <td class="align-middle"> {{ $i++ }} </td>
                                    <td class="align-middle"> {{ $vendor->wbs_id }} </td>
                                    <td class="align-middle"> {{ $vendor->iro_number }} </td>
                                    <td class="align-middle"> {{ $vendor->name }} </td>
                                    <td class="align-middle"> {{ $vendor->vendor_project_status }} </td>
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