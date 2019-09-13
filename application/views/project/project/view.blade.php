@extends('layouts.app')
@section('page_title', 'Project')

@section('content')
    <div class="page-inner">
        <div style="text-align: right"><?= $breadcrumb ?></div>
        <br/>
        <div class="page-section">
                <div id="base-style" class="card">
                    <div class="card-body">
                     <div class="row">

                       <div class="col-lg-8">
                        <table class="table table-striped table-bordered detail-view">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td><?= $model->id ?></td>
                            </tr>
                            <tr>
                                <th>Vendor Name</th>
                                <td>
                                    <?= $vendor->name ?>
                                </td>
                            </tr>
                            <tr>
                                <th>WBS ID</th>
                                <td><?= $model->wbs_id ?></td>
                            </tr>
                            <tr>
                                <th>IRO Number</th>
                                <td><?= $model->iro_number ?></td>
                            </tr>
                            <tr>
                                <th>Site ID</th>
                                <td><?= $model->site_id_ibs ?></td>
                            </tr>
                           {{----}}
                            <tr>
                                <th>Project</th>
                                <td><?= $model->project ?></td>
                            </tr>
                            <tr>
                                <th>Work Group</th>
                                <td><?= $model->work_group ?></td>
                            </tr>
                            <tr>
                                <th>Owner Project</th>
                                <td><?= $model->owner_project ?></td>
                            </tr>
                            <tr>
                                <th>Project Type</th>
                                <td><?= $model->project_type ?></td>
                            </tr>
                            <tr>
                                <th>PIC Type</th>
                                <td><?= $model->pic_type ?></td>
                            </tr>
                            <tr>
                                <th>Tenant</th>
                                <td><?= $model->tenant ?></td>
                            </tr>
                            <tr>
                                <th>Tenant</th>
                                <td><?= $model->sa_type ?></td>
                            </tr>
                            <tr>
                                <th>Start Date</th>
                                <td><?= $model->start_date ?></td>
                            </tr>
                            <tr>
                                <th>End Date</th>
                                <td><?= $model->end_date ?></td>
                            </tr>
                            <tr>
                                <th>Tenant</th>
                                <td><?= $model->tenant ?></td>
                            </tr>
                            <tr>
                                <th>Tenant</th>
                                <td><?= $model->tenant ?></td>
                            </tr>
                            <tr>
                                <th>Status Planning</th>
                                <td><?= $model->status_planning ?></td>
                            </tr>
                            <tr>
                                <th>Created By</th>
                                <td><?= $user_ceated->email ?></td>
                            </tr>
                            <tr>
                                <th>Updated By</th>
                                <td><?= $user_updated['email'] ?></td>
                            </tr>
                            <tr>
                                <th>Company Code</th>
                                <td><?= $model->company_code ?></td>
                            </tr>
                            <tr>
                                <th>Spk Number</th>
                                <td><?= $model->spk_number ?></td>
                            </tr>
                            <tr>
                                <th>Site ID Tenant</th>
                                <td><?= $model->site_id_tenant ?></td>
                            </tr>
                            <tr>
                                <th>Site Name</th>
                                <td><?= $model->site_name ?></td>
                            </tr>
                            <tr>
                                <th>Site Type</th>
                                <td><?= $model->site_type ?></td>
                            </tr>
                            <tr>
                                <th>Tower Height</th>
                                <td><?= $model->tower_height ?></td>
                            </tr>
                            <tr>
                                <th>Building Height</th>
                                <td><?= $model->building_height ?></td>
                            </tr>
                            <tr>
                                <th>Region</th>
                                <td><?= $model->region ?></td>
                            </tr>
                            <tr>
                                <th>Province Code</th>
                                <td><?= $model->province_code ?></td>
                            </tr>
                            <tr>
                                <th>City Code</th>
                                <td><?= $model->city_code ?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?= $model->address ?></td>
                            </tr>
                            <tr>
                                <th>Longitude</th>
                                <td><?= $model->longitude ?></td>
                            </tr>
                            <tr>
                                <th>Latitude</th>
                                <td><?= $model->latitude ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4">
                            <!-- .card -->
                            <div class="card card-reflow">
                                <div class="card-body border-top">
                                    <h4 class="card-title"> Progress </h4>
                                    <ul class="timeline timeline-dashed-line">


                                       <li class="timeline-item">
                                            <div class="timeline-figure">
                                                <span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
                                            </div>

                                            <div class="timeline-body">
                                                <h6 class="timeline-heading"> COM SITAC
                                                    @if($model->status == 'COM SITAC')
                                                    <a href="<?= site_url("project/komsitac/create/$model->id"); ?>" class="text-muted"><small class="text-yellow">Upload</small></a>
                                                    @elseif($model->status != 'COM SITAC' && empty($model->flag))
                                                    <a href="javascript:void(0)" class="text-muted"><small class="text-blue">Done</small></a>
                                                    @elseif(!empty($model->flag))
                                                    <a href="<?= site_url("project/komsitac/create/$model->id"); ?>" class="text-muted"><small class="text-red">Revision</small></a>
                                                    @endif()
                                                </h6>
                                                <span class="timeline-date">08/18/2018 – 12:42 PM</span>
                                            </div>
                                        </li>


                                        <li class="timeline-item">
                                            <div class="timeline-figure">
                                                <span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
                                            </div>
                                            <div class="timeline-body">
                                                <h6 class="timeline-heading"> SITAC SURVEY </h6>
                                                <span class="timeline-date">08/19/2018 – 09:11 AM</span>
                                            </div>
                                        </li>

                                        <li class="timeline-item">
                                            <div class="timeline-figure">
                                                <span class="tile tile-circle tile-xs"><i class="fa fa-check d-none"></i></span>
                                            </div>
                                            <div class="timeline-body">
                                                <h6 class="timeline-heading"> Invoice viewed </h6>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                           </div>


                    </div>
                </div>
                        <div class="card card-fluid">
                            <div class="card-header border-0">
                                <div class="d-flex align-items-center">
                                    <span class="mr-auto">PIC Project</span>
                                </div>
                            </div>
                            <div class="table-responsive">
                                @if(!empty($pics))
                                    <table class="table table-striped">
                                        <thead class="thead-">
                                        <tr>
                                            <th> Layer </th>
                                            <th> Username </th>
                                            <th> Email </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pics as $key => $value)
                                            <tr>
                                                <td> {{ $value['layer']  }} </td>
                                                <td> {{ $value['username']  }} </td>
                                                <td> {{ $value['email']  }} </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <div style="text-align: center"> {{ 'Pic Not Set ' }} </div>
                                @endif
                            </div>
                        </div>

            </div>
         </div>
       </div>
    </div>

@endsection