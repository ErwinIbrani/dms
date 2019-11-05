@extends('layouts.app')
@section('page_title', 'User Groups')

@section('content')
<div class="page">
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

		@if(!empty(validation_errors()))
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-danger alert-dismissible fade show">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong><?php echo validation_errors(); ?></strong>
					</div>
				</div>
			</div>
		@endif

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
							<tbody>
							@foreach($data as $list)
								<tr>
									<td>{{ $list->name }}</td>
									<td>{{ $list->description }}</td>
									<td>
										<a href="{{ site_url('/admin/userGroup/edit/'. $list->id) }}"
										   data-toggle="modal" data-target={{"#userGroupFrom-".$list->id }}
										   class="btn btn-sm btn-icon btn-secondary">
											<i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span>
										</a>
										<a href="{{ site_url('/admin/userGroup/delete/'. $list->id) }}" class="btn btn-sm btn-icon btn-secondary">
											<i class="fa fa-trash-alt"></i> <span class="sr-only">Delete</span>
										</a>
									</td>
								</tr>
								<div class="modal modal-alert fade" id="userGroupFrom-{{ $list->id }}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="userGroupFromLabel" aria-hidden="true">
									<!-- .modal-dialog -->
									<div class="modal-dialog" role="document">
										<!-- .modal-content -->
										<div class="modal-content">
											<!-- .modal-header -->
											<div class="modal-header">
												<h5 id="userGroupFromLabel" class="modal-title">
													<i class="fa fa-user text-success mr-1"></i> Edit User Group {{ $list->name }} </h5>
											</div><!-- /.modal-header -->
											<!-- .modal-body -->
											<div class="modal-body">
												{!! form_open('/admin/userGroup/edit/'.$list->id, array('id'=> 'user-group-form-'.$list->id)) !!}

												<div class="form-group">
													<label for="tf1">Group Name</label>
													<input type="text" class="form-control"
														   value="{{ $list->name }}"
														   id="tf1" name="name" placeholder="e.g. Finance, Procurment">
												</div>
												<div class="form-group">
													<label for="tf1">Description</label>
													<textarea class="form-control" name="description">{{ $list->description }}</textarea>
												</div>

												{!! form_close() !!}
											</div><!-- /.modal-body -->
											<!-- .modal-footer -->
											<div class="modal-footer">
												<button type="button" class="btn btn-info" id="submit{{$list->id}}" onclick="document.getElementById('user-group-form-{{$list->id}}').submit()">Submit</button>
												<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
											</div><!-- /.modal-footer -->
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
							@endforeach
							</tbody>
                        </table>

						{!! $pagination !!}
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
				{!! form_open('/admin/userGroup/store', array('id'=> 'user-group-form')) !!}

                    <div class="form-group">
                        <label for="tf1">Group Name</label> 
                        <input type="text" class="form-control" 
                        id="tf1" name="name" placeholder="e.g. Finance, Procurment">
                    </div>
                    <div class="form-group">
                        <label for="tf1">Description</label> 
                        <textarea class="form-control" name="description"></textarea>
                    </div>

                {!! form_close() !!}
            </div><!-- /.modal-body -->
            <!-- .modal-footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-info" onclick="document.getElementById('user-group-form').submit()">Submit</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div><!-- /.modal-footer -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection
