@extends('layouts.app')
@section('page_title', 'Vendor')

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
                    <a href="<?= site_url("admin/groupvendor/index"); ?>" class="nav-link show">
                       Group Vendor
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url("admin/vendor/index"); ?>" class="nav-link show active">
                        Vendor
                    </a>
                </li>
            </ul><!-- /.nav-tabs -->
        </div><!-- /.card-header -->
        <!-- .card-body -->
        <div class="card-body">
            <form method='post' action="<?= base_url() ?>admin/vendor/index">
                <div class="input-group input-group-alt">
                    <!-- .input-group -->
                    <div class="input-group has-clearable">
                        <button id="clear-search" type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                        </div>
                        <input type='text' name='search' value='<?= $search ?>' class='form-control' placeholder='Group Name or Vendor Name' autocomplete="off">
                    </div><!-- /.input-group -->
                    <!-- .input-group-append -->
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type='submit' name='submit' value='Cari'>Filter</button>
                    </div><!-- /.input-group-append -->
                  </div>
              </form>
            <br/>
            <a href="<?= site_url("admin/vendor/create"); ?>" class="btn btn-primary">
                Create New
            </a>
            <!-- .table-responsive -->
            <div class="table-responsive">
                <!-- .table -->
                <table class="table">
                    <thead>
                    <tr>
                        <th> No </th>
                        <th> Group Name</th>
                        <th> Vendor Name </th>
                        <th> Email </th>
                        <th> Phone </th>
                        <th> Address </th>
                        <th style="width:100px; min-width:100px;"> &nbsp; </th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                    $i = 1;
                    @endphp
                    @foreach($vendors as $key => $vendor)
                        <tr>
                            <td class="align-middle"> {{ $i++ }} </td>
                            <td class="align-middle"> {{ $vendor->group_name }} </td>
                            <td class="align-middle"> {{ $vendor->vendor_name }} </td>
                            <td class="align-middle"> {{ $vendor->vendor_email }} </td>
                            <td class="align-middle"> {{ $vendor->vendor_phone }} </td>
                            <td class="align-middle"> {{ $vendor->vendor_address }} </td>
                            <td class="align-middle text-right">
                                <a href="<?= site_url("admin/vendor/edit/".$vendor->vendor_id.""); ?>" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a>
                                <a href="<?= site_url("admin/vendor/destroy/".$vendor->vendor_id.""); ?>" class="btn btn-sm btn-icon btn-secondary" onClick="javascript:return confirm('Delete this row ?');"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                                <a href="<?= site_url("admin/vendor/view/".$vendor->vendor_id.""); ?>" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-eye"></i> <span class="sr-only">View</span></a>
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