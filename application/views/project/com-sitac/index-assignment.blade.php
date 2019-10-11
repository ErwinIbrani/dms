@extends('layouts.app')
@section('page_title', 'COM SITAC')

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
                            <a href="<?= site_url("project/comsitac/index"); ?>" class="nav-link show active">
                             COM SITAC UPLOAD
                            </a>
                        </li>
                    </ul><!-- /.nav-tabs -->
                </div><!-- /.card-header -->
                <!-- .card-body -->
                <div class="card-body">
                    <form method='post' action="<?= base_url() ?>project/comsitac/index">
                        <div class="input-group input-group-alt">
                            <!-- .input-group -->
                            <div class="input-group has-clearable">
                                <button id="clear-search" type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                                </div>
                                <input type='text' name='search' value='<?= $search ?>' class='form-control' placeholder='Search Vendor Name' autocomplete="off">
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
                                <th> WBS ID </th>
                                <th> IRO Number </th>
                                <th> Site ID</th>
                                <th> Vendor Name </th>
                                <th> Status Upload</th>
                                <th style="width:100px; min-width:100px;"> Create COM SITAC </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($projects as $key => $project)
                                <tr>
                                    <td class="align-middle"> {{ $i++ }} </td>
                                    <td class="align-middle"> {{ $project->wbs_id }} </td>
                                    <td class="align-middle"> {{ $project->iro_number }} </td>
                                    <td class="align-middle"> {{ $project->site_id_ibs }} </td>
                                    <td class="align-middle"> {{ $project->vendor_name }} </td>
                                    <td class="align-middle">
                                        <?php
                                        $CI =& get_instance();
                                        $CI->load->model('ComSitac_Model');
                                        $statusUpload = $CI->ComSitac_Model->status($project->project_id, $project->vendor_id)->row_array();
                                        if(empty($statusUpload)):
                                          echo 'Not Upload';
                                        else:
                                            echo 'Upload Done';
                                        endif;

                                        ?>
                                    </td>
                                    <td class="align-middle text-center">
                                        <a  href="<?= site_url("project/comsitac/create/".$project->project_id."/".$project->vendor_id.""); ?>" class="btn btn-sm btn-icon btn-primary"><i class="fa fa-plus" title="Create TSA"></i></a>
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