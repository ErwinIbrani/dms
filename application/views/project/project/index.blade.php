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
                            <a href="<?= site_url("project/project/index"); ?>" class="nav-link show active">
                               Project
                            </a>
                        </li>
                    </ul><!-- /.nav-tabs -->
                </div><!-- /.card-header -->
                <!-- .card-body -->
                <div class="card-body">
                    <form method='post' action="<?= base_url() ?>project/project/index">
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
                                <th>Status</th>
                                <th style="width:100px; min-width:100px;"> &nbsp; </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($projects as $key => $project)
                                <tr>
                                    <td class="align-middle"> {{ $i++ }} </td>
                                    <td class="align-middle"> {{ $project->name }} </td>
                                    <td class="align-middle"> {{ $project->wbs_id }} </td>
                                    <td class="align-middle"> {{ $project->iro_number }} </td>
                                    <td class="align-middle"> {{ $project->site_id_ibs }} </td>
                                    <td class="align-middle">
                                    @if($project->status == 'COM SITAC')
                                        {{ 'UPLOAD COM SITAC' }}
                                    @elseif($project->status == 'SITAC SURVEY')
                                        {{ 'UPLOAD SITAC SURVEY' }}
                                    @elseif($project->status == 'SITAC BAP')
                                        {{ 'UPLOAD SITAC BAP' }}
                                    @elseif($project->status == 'SITAC TSA')
                                         {{ 'UPLOAD SITAC TSA' }}
                                    @elseif($project->status == 'SITAC BAK')
                                          {{ 'UPLOAD SITAC BAK' }}
                                    @elseif($project->status == 'SITAC IW')
                                          {{ 'UPLOAD SITAC IW' }}
                                    @elseif($project->status == 'SITAC LAST CHECKLIST')
                                          {{ 'UPLOAD SITAC LAST CHECKLIST' }}
                                    @elseif($project->status == 'SITAC PKS')
                                          {{ 'UPLOAD SITAC PKS' }}
                                    @endif
                                    </td>
                                    <td class="align-middle text-right">
                                        <a href="<?= site_url("project/project/view/".$project->id.""); ?>" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-cloud-upload-alt"></i> <span class="sr-only">View</span></a>
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