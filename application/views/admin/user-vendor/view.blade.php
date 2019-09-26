@extends('layouts.app')
@section('page_title', 'User Vendor')

@section('content')
    <div class="page-inner">
        <div style="text-align: right"><?= $breadcrumb ?></div>
        <br/>
        <div class="page-section">
            <div class="col-lg-12">
                <div id="base-style" class="card">
                    <div class="card-body">
                        <table class="table table-striped table-bordered detail-view">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td><?= $model->id ?></td>
                            </tr>
                            <tr>
                                <th>Vendor Name</th>
                                <td>
                                    <?= $group->group_name ?>
                                </td>
                            </tr>
                            <tr>
                                <th>User Vendor Name</th>
                                <td><?= $model->name ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?= $model->email ?></td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td><?= $model->phone ?></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><?= $model->address ?></td>
                            </tr>
                            <tr>
                                <th>Region</th>
                                <td><?= $region->name ?></td>
                            </tr>
                            <tr>
                                <th>Province</th>
                                <td><?= $province->name ?></td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td><?= $city->name ?></td>
                            </tr>
                            <tr>
                                <th>Created By</th>
                                <td><?= $created['email'] ?></td>
                            </tr>
                            <tr>
                                <th>Updated By</th>
                                <td><?= $updated['email'] ?></td>
                            </tr>
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection