@extends('layouts.app')
@section('page_title', 'TOWER SITE APPROVAL')

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
                            <a href="<?= site_url("approval/tsa/index"); ?>" class="nav-link show active">
                                TOWER SITE APPROVAL : NEW BUILD
                            </a>
                        </li>
                    </ul><!-- /.nav-tabs -->
                </div><!-- /.card-header -->
                <!-- .card-body -->
                <div class="card-body">
                    <br/>
                    <!-- .table-responsive -->
                    <div class="table-responsive">

                        <table class="table">
                            <thead>
                            <tr>
                                <th> No </th>
                                <th> Vendor Name </th>
                                <th> WBS ID </th>
                                <th> Candidate Name</th>
                                <th> Status Approval</th>
                                <th> By</th>
                                <th style="width:100px; min-width:100px;">  </th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($candidates as $key => $candidate)
                                <tr>
                                    <td class="align-middle"> {{ $i++ }} </td>
                                    <td class="align-middle"> {{ $candidate->vendor_name }} </td>
                                    <td class="align-middle"> {{ $candidate->wbs_id }} </td>
                                    <td class="align-middle"> {{ $candidate->candidate_name }}</td>
                                    <td class="align-middle">
                                        @php
                                        $ci =& get_instance();
                                        $ci->load->Model('DocumentApprovalHistory_Model');
                                        $note =  $ci->DocumentApprovalHistory_Model->getLastApprove($candidate->document_candidate_id)->row();
                                        @endphp
                                        {{ $note->status_approval }}
                                    </td>
                                    <td class="align-middle">
                                        @php
                                            $ci =& get_instance();
                                            $ci->load->Model('User_Model');
                                            $user =  $ci->User_Model->findOne($candidate->user_id)->row();
                                        @endphp
                                        {{ $user->email }}
                                    </td>
                                    <td class="align-middle text-center">
                                          <a href="<?= site_url("approval/tsa/view/".$candidate->document_candidate_id.""); ?>" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-eye" title="Preview"></i> <span class="sr-only">View</span></a>
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