@extends('layouts.app')
@section('page_title', ucwords($candidate->name))

@section('content')
    <div class="page">
        <div class="page-inner">
            <header class="page-title-bar">
                <!-- .breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                            <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Candidate TSA Document</a>
                        </li>
                    </ol>
                </nav><!-- /.breadcrumb -->

                <!-- title and toolbar -->
                <div class="d-md-flex align-items-md-start">
                    <h1 class="page-title mr-sm-auto"> {{ ucwords($candidate->name) }} </h1><!-- .btn-toolbar -->
                </div><!-- /title and toolbar -->
            </header>

            <div class="card card-fluid">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link show active" href="{{ site_url('/project/tsa/index') }}">Document Tsa</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="candidate-survey" role="tabpanel">
                            <?php
                            $data  = [
                                'name' => 'candidate-form'
                            ];
                            echo form_open_multipart('project/tsa/store', $data);
                            ?>
                            <input type="hidden" class="form-control" name="candidate_id" value="<?= $candidate->id ?>">
                            <input type="hidden" class="form-control" name="project_id" value="<?= $project['id'] ?>">
                            <input type="hidden" class="form-control" name="vendor_id" value="<?= $vendor['id'] ?>">
                            <!-- .fieldset -->
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h2>  <label for="tf1" class="badge badge-secondary">
                                                Tower Site Approval New Build
                                                </label></h2>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Project Name</label>
                                            <input type="text" class="form-control" name="project_name" autocomplete="off" required/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Operator</label>
                                            <select class="form-control" name="operator" required>
                                                <option value="" selected="selected">.:Choose:.</option>
                                                <option value="SF">SF</option>
                                                <option value="TSEL">TSEL</option>
                                                <option value="ISAT">ISAT</option>
                                                <option value="HCPT">HCPT</option>
                                                <option value="HCPT">XL</option>
                                                <option value="HCPT">FM</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">TSA Number</label>
                                            <input type="text" class="form-control" name="tsa_number" autocomplete="off" required/>
                                        </div>
                                    </div>

                                    <hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h2><label for="tf1" class="badge badge-secondary">Site Information</label></h2>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Site ID IBS</label>
                                            <input type="text" class="form-control" name="site_id_ibs" value="{{ $project['site_id_ibs'] }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Site Name</label>
                                            <input type="text" class="form-control" name="site_id_ibs" value="{{ $project['site_name'] }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Topology</label>
                                            <select class="form-control" name="topology" required>
                                                <option value="" selected="selected">.:Choose:.</option>
                                                <option value="Hub">Hub</option>
                                                <option value="Sub Hub">Sub Hub</option>
                                                <option value="End Site">End Site</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Coordinates Longitude</label>
                                            <input type="text" class="form-control" name="long" value="{{ $candidate->long }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Coordinates Latitude</label>
                                            <input type="text" class="form-control" name="long" value="{{ $candidate->lat }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Region</label>
                                            <input type="text" class="form-control" name="region" value="{{ $project['region'] }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Ownen Name</label>
                                            <input type="text" class="form-control" name="owner_name" value="{{ $candidate->owner_name }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Contact Person</label>
                                            <input type="text" class="form-control" name="contact_person"/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Phone Number</label>
                                            <input type="text" class="form-control" name="phone_number" value="{{ $candidate->phone_number }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Site Type</label>
                                            <input type="text" class="form-control" name="site_type" value="{{ $project['site_type'] }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Tower Type</label>
                                            <input type="text" class="form-control" name="tower_type" value="{{ $content['tower_type'] }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Tower/Pole Height</label>
                                            <input type="text" class="form-control" name="tower_height" value="{{ $content['tower_height'] }} m" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Status Site</label>
                                            <select class="form-control" name="topology" required>
                                                <option value="" selected="selected">.:Choose:.</option>
                                                <option value="Ren">Rent</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Land Status</label>
                                            <select class="form-control" name="topology" required>
                                                <option value="" selected="selected">.:Choose:.</option>
                                                <option value="SHM">SHM</option>
                                                <option value="SHGB">SHGB</option>
                                                <option value="SKT">SKT</option>
                                                <option value="AJB">AJB</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Initial Price(BAP) Include PPh, Excl, PPN(Per Year)</label>
                                            @php
                                                $per_year = $content_bap['bap']['rent_price']/$content_bap['bap']['rent_period'];
                                            @endphp
                                            <input type="text" class="form-control" name="initil_price_peryear" value="{{ number_format($per_year) }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="tf1">Land Size (Meter2)</label>
                                            @php
                                                $land_size = $content_bap['bap']['space_dimension']/2;
                                            @endphp
                                            <input type="text" class="form-control" name="land_size" value="{{ $content_bap['bap']['space_dimension'] }}" readonly/><br/>
                                        </div>
                                     </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                            <label for="tf1">Meter</label>
                                            <input type="text" class="form-control"  value="{{ $land_size }} x {{ $land_size }}" readonly/>
                                            </div>
                                       </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="tf1">Access Road (Meter2)</label>
                                            @php
                                                $land_road = $content_bap['bap']['access_road']/2;
                                            @endphp
                                            <input type="text" class="form-control" name="access_road" value="{{ $content_bap['bap']['access_road'] }}" readonly/><br/>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="tf1">Meter</label>
                                            <input type="text" class="form-control"  value="{{ $land_road }} x {{ $land_road }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Time Access</label>
                                            <select class="form-control" name="time_access" required>
                                                <option value="" selected="selected">.:Choose:.</option>
                                                <option value="24">24 Jam</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>

                                    <hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h2><label for="tf1" class="badge badge-secondary">Site Acqusitions Information</label></h2>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Rental Period (IBS LO) Start Year</label>
                                            <input type="number" class="form-control" name="start_year" autocomplete="off" required/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Rental Period (IBS LO) End Year</label>
                                            <input type="number" class="form-control" name="end_year" autocomplete="off" required/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Acquition Status (Year)</label>
                                            <input type="text" class="form-control" name="acquition_status" value="{{ $content_bap['bap']['rent_period'] }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Purchased Option</label>
                                            <select class="form-control" name="purchased_option" required>
                                                <option value="" selected="selected">.:Choose:.</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                     </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Final Price Per Year, Include PPh, Excl, PPN</label>
                                            @php
                                                $per_year = $content_bap['bap']['rent_price']/$content_bap['bap']['rent_period'];
                                            @endphp
                                            <input type="text" class="form-control" name="final_per_year" value="{{ number_format($per_year) }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Total Price, Include PPh, Excl, PPN</label>
                                            <input type="text" class="form-control" name="total_price" value="{{ number_format($content_bap['bap']['rent_price']) }}" readonly/>
                                        </div>
                                    </div>

                                       <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="tf1">Total Price, Include PPh, Excl, PPN</label><br/>
                                                <input type="checkbox" name="other_condition[]" value="Menara Bersama"><label for="tf1">Menara Bersama</label><br/>
                                                <input type="checkbox" name="other_condition[]" value="Upgrade Perangkat"><label for="tf1">Upgrade Perangkat</label><br/>
                                                <input type="checkbox" name="other_condition[]" value="Penambahan Perangkat di Objek Wisata"><label for="tf1">Penambahan Perangkat di Objek Wisata</label><br/>
                                                 <input type="checkbox" name="other_condition[]" value="Fiber Optic"><label for="tf1">Fiber Optic</label><br/>
                                           </div>
                                       </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="tf1">Location Site</label>
                                                <select class="form-control" name="location_site" required>
                                                    <option value="" selected="selected">.:Choose:.</option>
                                                    <option value="DKI Jakarta">DKI Jakarta</option>
                                                    <option value="Ibu Kota Provinsi">Ibu Kota Provinsi</option>
                                                    <option value="Kota Madya/Kabupaten">Kota Madya/Kabupaten</option>
                                                    <option value="Pedesaan/Rural">Pedesaan/Rural</option>
                                                </select>
                                            </div>
                                        </div>


                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Vendor PIC</label>
                                            <input type="text" class="form-control" name="vendor_pic" value="{{ $vendorUser['name'] }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">Vendor PIC Phone</label>
                                            <input type="text" class="form-control" name="vendor_phone" value="{{ $vendorUser['phone'] }}" readonly/>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tf1">IBST Sitac PIC</label>
                                            <input type="text" class="form-control" name="ibs_pic" />
                                        </div>
                                    </div>

                                    <hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h2><label for="tf1" class="badge badge-secondary">Term Of Payment</label></h2>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dynamic_field">
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="tf1">Phase</label>
                                                            <input type="number" class="form-control" name="phase[]" required/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="tf1">Percen</label>
                                                            <input type="number" class="form-control" name="percen[]" required/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="tf1">Amount</label>
                                                            <input type="number" class="form-control" name="amount[]" required/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="tf1">Description</label>
                                                            <input type="text" class="form-control" name="description[]" required/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>


                                    <hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h2><label for="tf1" class="badge badge-secondary">Additional Information</label></h2>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dynamic_fields">
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="tf1">Jarak dari Kandidat</label>
                                                            <input type="text" class="form-control" name="jarak_dari_kandidat[]" required/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="tf1">Tower Existing (Tenant)</label>
                                                            <input type="text" class="form-control" name="tower_existing[]" required/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="tf1">Potensi Market</label>
                                                            <input type="text" class="form-control" name="potensi_market[]" required/>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <button type="button" name="adds" id="adds" class="btn btn-success">Add More</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>


                                </div>
                                <div class="publisher-actions">
                                    <!-- .publisher-tools -->
                                    <div class="publisher-tools mr-auto">
                                    </div>
                                    <!-- /.publisher-tools -->
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </fieldset>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script type="text/javascript">
        $(document).ready(function(){
            var i=1;
            $('#adds').click(function(){
                i++;
                $('#dynamic_fields').append('<tr id="rows'+i+'" class="dynamic-addeds">' +
                    '<td>' +
                    ' <div class="form-group">\n' +
                    ' <label for="tf1">Jarak dari Kandidat</label>\n' +
                    ' <input type="text" class="form-control" name="jarak_dari_kandidat[]" required/>\n' +
                    ' </div>' +
                    '</td>' +
                    '<td> ' +
                    ' <div class="form-group">\n' +
                    ' <label for="tf1">Tower Existing (Tenant)</label>\n' +
                    ' <input type="text" class="form-control" name="tower_existing[]" required/>\n' +
                    ' </div>' +
                    '<td> ' +
                    '<div class="form-group">\n' +
                    '<label for="tf1">Potensi Market</label>\n' +
                    '<input type="text" class="form-control" name="potensi_market[]" required/>\n' +
                    '</div>' +
                    '<td> ' +
                    '<td><button type="button" name="removes" id="'+i+'" class="btn btn-danger btn_removes">X</button></td></tr>');
            });

            $(document).on('click', '.btn_removes', function(){
                var button_id = $(this).attr("ids");
                $('#rows'+button_id+'').remove();
            });

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            var i=1;
            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added">' +
                    '<td>' +
                    '<div class="form-group">\n' +
                    '    <label for="tf1">Phase</label>\n' +
                    '    <input type="number" class="form-control" name="phase[]" required/>\n' +
                    '    </div>' +
                    '</td>' +
                    '<td> ' +
                    '<div class="form-group">\n' +
                    '     <label for="tf1">Percent</label>\n' +
                    '     <input type="number" class="form-control" name="percent[]" required/>\n' +
                    '     </div>' +
                    '</td>' +
                    '<td> ' +
                    '<div class="form-group">\n' +
                    '     <label for="tf1">Amount</label>\n' +
                    '     <input type="number" class="form-control" name="amount[]" required/>\n' +
                    '     </div>' +
                    '</td>' +
                    '<td> ' +
                    '<div class="form-group">\n' +
                    '     <label for="tf1">Description</label>\n' +
                    '     <input type="text" class="form-control" name="description[]" required/>\n' +
                    '     </div>' +
                    '</td>' +
                    '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });

        });
    </script>
@endsection