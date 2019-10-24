<?php

$contentText    = json_decode($model['attribute'], true);
$other_condition = '';
foreach($contentText['other_condition'] as $index => $key){
    $other_condition  .= '<br/>'.$key;
}

$phase = '';
foreach($contentText['phase'] as $index => $key){
    $phase  .= '<br/>'.$key;
}

$percent = '';
foreach($contentText['percen'] as $index => $key){
    $percent .= '<br/>'.$key;
}

$amount = '';
foreach($contentText['amount'] as $index => $key){
    $amount  .= '<br/>'.$key;
}

$description = '';
foreach($contentText['description'] as $index => $key){
    $description  .= '<br/>'.$key;
}

$jarak_dari_kandidat = '';
foreach($contentText['jarak_dari_kandidat'] as $index => $key){
    $jarak_dari_kandidat  .= '<br/>'.$key;
}


$tower_existing = '';
foreach($contentText['tower_existing'] as $index => $key){
    $tower_existing  .= '<br/>'.$key;
}

$potensi_market = '';
foreach($contentText['potensi_market'] as $index => $key){
    $potensi_market  .= '<br/>'.$key;
}

$kandidates = '';
foreach($contentText['kandidates'] as $index => $key){
    $kandidates  .= '<br/>'.$key;
}

$e_longiude = '';
foreach($contentText['e_longiude'] as $index => $key){
    $e_longiude  .= '<br/>'.$key;
}

$ns_latitude = '';
foreach($contentText['ns_latitude'] as $index => $key){
    $ns_latitude  .= '<br/>'.$key;
}

$contact_person = '';
foreach($contentText['contact_person'] as $index => $key){
    $contact_person  .= '<br/>'.$key;
}


$masa_sewa = '';
foreach($contentText['masa_sewa'] as $index => $key){
    $masa_sewa  .= '<br/>'.$key;
}


$harga_sewa = '';
foreach($contentText['harga_sewa'] as $index => $key){
    $harga_sewa  .= '<br/>'.$key;
}


$cancelation_remarks = '';
foreach($contentText['cancelation_remarks'] as $index => $key){
    $cancelation_remarks  .= '<br/>'.$key;
}



$approval_document = '';
if(empty($approvals)):
     $approval_document .= '<tr>
                            <td class="tg-on52"><span style="font-weight:700"></span><br></td>
                            <td class="tg-7j3r"></td>
                            <td class="tg-on52"></td>
                            <td class="tg-on52"></td>
                          </tr>';
else:
    foreach ($approvals as $index => $approval):
       $approval_document .= '<tr>
                                    <td class="tg-on52"><span style="font-weight:700">'.$approval->document_type.'</span><br></td>
                                    <td class="tg-7j3r">'.$approval->role_name.'</td>
                                    <td class="tg-on52">'.$approval->email.'</td>
                                    <td class="tg-on52">'.date('d-M-Y', strtotime($approval->approved_at)).'</td>
                                  </tr>';
    endforeach;
endif;

$raw_html  ='<!DOCTYPE html>
                  <html>
                            <head>
                            <meta charset="UTF-8">
                            <title>Title of the document</title>
                            <style type="text/css">
                            .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;margin:0px auto;}
                            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                            .tg .tg-wp8o{border-color:#000000;text-align:center;vertical-align:top}
                            .tg .tg-i817{background-color:#f9f9f9;border-color:#000000;text-align:left;vertical-align:top}
                            .tg .tg-73oq{border-color:#000000;text-align:left;vertical-align:top}
                            @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}
                            </style>
                            <style type="text/css">
                            .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;margin:0px auto;}
                            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                            .tg .tg-2tu2{font-size:16px;border-color:#000000;text-align:center;vertical-align:top}
                            .tg .tg-i817{background-color:#f9f9f9;border-color:#000000;text-align:left;vertical-align:top}
                            @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}
                            </style>
                            <style type="text/css">
                            .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;margin:0px auto;}
                            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                            .tg .tg-aa13{background-color:#f9f9f9;border-color:#000000;text-align:center;vertical-align:top}
                            .tg .tg-mqa1{font-weight:bold;border-color:#000000;text-align:center;vertical-align:top}
                            .tg .tg-73oq{border-color:#000000;text-align:left;vertical-align:top}
                            @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}
                            </style>
                            <style type="text/css">
                            .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;margin:0px auto;}
                            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                            .tg .tg-c10m{background-color:#f9f9f9;font-weight:bold;border-color:#000000;text-align:left;vertical-align:top}
                            .tg .tg-mya0{font-size:18px;border-color:#000000;text-align:center;vertical-align:top}
                            .tg .tg-73oq{border-color:#000000;text-align:left;vertical-align:top}
                            @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}
                            </style>
                            <style type="text/css">
                            .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;margin:0px auto;}
                            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                            .tg .tg-c10m{background-color:#f9f9f9;font-weight:bold;border-color:#000000;text-align:left;vertical-align:top}
                            .tg .tg-4n8x{font-size:20px;border-color:#000000;text-align:center;vertical-align:top}
                            .tg .tg-73oq{border-color:#000000;text-align:left;vertical-align:top}
                            @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}
                            </style>
                            <style type="text/css">
                            .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;margin:0px auto;}
                            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                            .tg .tg-mqa1{font-weight:bold;border-color:#000000;text-align:center;vertical-align:top}
                            .tg .tg-i817{background-color:#f9f9f9;border-color:#000000;text-align:left;vertical-align:top}
                            .tg .tg-73oq{border-color:#000000;text-align:left;vertical-align:top}
                            @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}
                            </style>
                            <style type="text/css">
                            .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;}
                            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                            .tg .tg-a255{background-color:#f9f9f9;color:#333333;border-color:#000000;text-align:left;vertical-align:top}
                            .tg .tg-a5n9{font-weight:bold;font-size:16px;color:#333333;border-color:#000000;text-align:center;vertical-align:top}
                            .tg .tg-tlzq{background-color:#f9f9f9;font-weight:bold;color:#333333;border-color:#000000;text-align:left;vertical-align:top}
                            .tg .tg-on52{color:#333333;border-color:#000000;text-align:left;vertical-align:top}
                            .tg .tg-7j3r{font-weight:bold;color:#333333;border-color:#000000;text-align:left;vertical-align:top}
                            @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;}}
                            </style>
                            </head>
                            <body>
                            <div class="tg-wrap">
                            <table class="tg" width="100%">
                              <tr>
                                <th class="tg-2tu2" colspan="6"><span style="font-weight:bold">TOWER SITE APPROVAL : NEW BUILD</span></th>
                              </tr>
                              <tr>
                                <td class="tg-i817">Project Name<br></td>
                                <td class="tg-i817">'.$contentText['project_name'].'<br></td>
                                <td class="tg-i817">Operator</td>
                                <td class="tg-i817">'.$contentText['operator'].'</td>
                                <td class="tg-i817">TSA Number</td>
                                <td class="tg-i817">'.$contentText['tsa_number'].'<br></td>
                              </tr>
                            </table>
                            </div>
                            <br/>
                            <!--from here-->
                            <div class="tg-wrap">
                            <table class="tg" width="100%">
                              <tr>
                                <th class="tg-wp8o" colspan="2"><span style="font-weight:700">I. Site Information (to be filled by Regional Project Manager)</span></th>
                                <th class="tg-wp8o" colspan="2"><span style="font-weight:bold">II. Site Acqusition Information (to be filled by Regional Project Manager)</span></th>
                              </tr>
                              <tr>
                                <td class="tg-i817">Site ID IBS</td>
                                <td class="tg-i817">'.$contentText['site_id_ibs'].'</td>
                                <td class="tg-i817">Rental Period (IBS-LO)<br></td>
                                <td class="tg-i817">Start Year: '.$contentText['start_year'].' / End Year: '.$contentText['end_year'].'</td>
                              </tr>
                              <tr>
                                <td class="tg-73oq">Site Name</td>
                                <td class="tg-73oq">'.$contentText['site_name'].'</td>
                                <td class="tg-73oq">Acquition Status<br></td>
                                <td class="tg-73oq">'.$contentText['acquition_status'].'</td>
                              </tr>
                              <tr>
                                <td class="tg-i817">Topology<br></td>
                                <td class="tg-i817">'.$contentText['topology'].'</td>
                                <td class="tg-i817">Purchased Option</td>
                                <td class="tg-i817">'.$contentText['purchased_option'].'<br></td>
                              </tr>
                              <tr>
                                <td class="tg-73oq">Coordinate<br></td>
                                <td class="tg-73oq">Degress/Decimal '.$contentText['long'].' E(Longitude) / Degress/Decimal '.$contentText['lat'].' N/S(Latitude)</td>
                                <td class="tg-73oq">Final Price Per Year, Include PPh, Excl, PPN<br></td>
                                <td class="tg-73oq">'.$contentText['final_per_year'].' -/Year<br></td>
                              </tr>
                              <tr>
                                <td class="tg-i817">Region</td>
                                <td class="tg-i817">'.$contentText['region'].'</td>
                                <td class="tg-i817">Total Price, Include PPh, Excl, PPN</td>
                                <td class="tg-i817">'.$contentText['total_price'].'</td>
                              </tr>
                              <tr>
                                <td class="tg-73oq">Owner Name</td>
                                <td class="tg-73oq">'.$contentText['owner_name'].'</td>
                                <td class="tg-73oq">Other Condition</td>
                                <td class="tg-73oq">'.$other_condition.'</td>
                              </tr>
                              <tr>
                                <td class="tg-i817">Contact Person</td>
                                <td class="tg-i817">'.$contentText['contact_persons'].'</td>
                                <td class="tg-i817">Location Site</td>
                                <td class="tg-i817">'.$contentText['location_site'].'</td>
                              </tr>
                              <tr>
                                <td class="tg-73oq">Phone/HP</td>
                                <td class="tg-73oq">'.$contentText['phone_number'].'</td>
                                <td class="tg-73oq">Vendor PIC</td>
                                <td class="tg-73oq">'.$contentText['vendor_pic'].'</td>
                              </tr>
                              <tr>
                                <td class="tg-i817">Address</td>
                                <td class="tg-i817">'.$contentText['address'].'</td>
                                <td class="tg-i817">Vendor Phone</td>
                                <td class="tg-i817">'.$contentText['vendor_phone'].'</td>
                              </tr>
                              <tr>
                                <td class="tg-73oq">Site Type</td>
                                <td class="tg-73oq">'.$contentText['site_type'].'</td>
                                <td class="tg-73oq">IBST SITAC PIC</td>
                                <td class="tg-73oq">'.$contentText['ibs_pic'].'</td>
                              </tr>
                              <tr>
                                <td class="tg-i817">Tower Type</td>
                                <td class="tg-i817">'.$contentText['tower_type'].'</td>

                                <td class="tg-i817"><b>Due Date Land Payment</b></td>
                                <td class="tg-i817"><b>25 hari setelah PKS Signed dan invoice/Doc diterima dengan lengkap dan benar (Untuk proses pembayaran pertama)</b></td>

                              </tr>
                              <tr>
                                <td class="tg-73oq">Tower/Pole Height</td>
                                <td class="tg-73oq">'.$contentText['tower_height'].' Meter</td>
                                <td class="tg-73oq" colspan="2" rowspan="7"></td>
                              </tr>
                              <tr>
                                <td class="tg-i817">Status Site</td>
                                <td class="tg-i817">'.$contentText['status_site'].'</td>
                              </tr>
                              <tr>
                                <td class="tg-73oq">Land Status</td>
                                <td class="tg-73oq">'.$contentText['land_status'].'</td>
                              </tr>
                              <tr>
                                <td class="tg-i817">Initial Price (BAP)(Inc PPh, Excl, PPN)<br></td>
                                <td class="tg-i817">Rp. '.$contentText['initil_price_peryear'].' -/Year</td>
                              </tr>
                              <tr>
                                <td class="tg-73oq">Land Size</td>
                                <td class="tg-73oq">'.$contentText['land_size'].' Meter2</td>
                              </tr>
                              <tr>
                                <td class="tg-i817">Accsess Road<br></td>
                                <td class="tg-i817">'.$contentText['access_road'].' Meter2</td>
                              </tr>
                              <tr>
                                <td class="tg-73oq">Time Access</td>
                                <td class="tg-73oq">'.$contentText['time_access'].'</td>
                              </tr>
                            </table>
                            </div>

                            <br/>
                            <div class="tg-wrap">
                            <table class="tg" width="100%">
                              <tr>
                                <th class="tg-mqa1" colspan="4">Term Of Payment</th>
                              </tr>
                              <tr>
                                <td class="tg-aa13">Phase</td>
                                <td class="tg-aa13">%</td>
                                <td class="tg-aa13">Amount</td>
                                <td class="tg-aa13">Description</td>
                              </tr>
                              <tr>
                                <td class="tg-73oq">'.$phase.'</td>
                                <td class="tg-73oq">'.$percent.'%</td>
                                <td class="tg-73oq">'.$amount.'</td>
                                <td class="tg-73oq">'.$description.'</td>
                              </tr>
                             </table>
                            </div>
                            <br/>
                            <div class="tg-wrap">
                            <table class="tg" width="100%">
                              <tr>
                                <th class="tg-wp8o" colspan="5"><span style="font-weight:bold">III. Additional Information</span></th>
                              </tr>
                              <tr>
                                <td class="tg-c10m">Jarak Dari Kandidat</td>
                                <td class="tg-c10m">Tower Existing (Tenant)</td>
                                <td class="tg-c10m">Jarak dari Kandidat</td>
                                <td class="tg-c10m">Potensi Market</td>
                              </tr>
                              <tr>
                                <td class="tg-73oq">'.$jarak_dari_kandidat.'</td>
                                <td class="tg-73oq">'.$tower_existing.'</td>
                                <td class="tg-73oq">'.$jarak_dari_kandidat.'</td>
                                <td class="tg-73oq">'.$potensi_market.'</td>
                              </tr>
                            </table>
                            </div>
                            <br/>
                            <div class="tg-wrap">
                            <table class="tg" width="100%">
                              <tr>
                                <th class="tg-wp8o" colspan="8"><span style="font-weight:bold">IV.Site Historical</span></th>
                              </tr>
                              <tr>
                                <td class="tg-c10m">Kandidat</td>
                                <td class="tg-c10m">E(Longitude)</td>
                                <td class="tg-c10m">N/S(Latitude)</td>
                                <td class="tg-c10m">Contact Person</td>
                                <td class="tg-c10m">Mas Sewa</td>
                                <td class="tg-c10m">Harga Sewa</td>
                                <td class="tg-c10m">Cancelation Remarks</td>
                              </tr>
                              <tr>
                                <td class="tg-73oq">'.$kandidates.'</td>
                                <td class="tg-73oq">'.$e_longiude.'</td>
                                <td class="tg-73oq">'.$ns_latitude.'</td>
                                <td class="tg-73oq">'.$contact_person.'</td>
                                <td class="tg-73oq">'.$masa_sewa.'</td>
                                <td class="tg-73oq">'.$harga_sewa.'</td>
                                <td class="tg-73oq">'.$cancelation_remarks.'</td>
                              </tr>
                            </table>
                            </div>
                            <br/>
                            <div class="tg-wrap">
                            <!--approval disini-->
                            <table class="tg" width="100%">
                                  <tr>
                                    <th class="tg-a5n9" colspan="4">Approval</th>
                                  </tr>
                                  <tr>
                                    <td class="tg-tlzq">Type</td>
                                    <td class="tg-tlzq">Role</td>
                                    <td class="tg-a255">Name</td>
                                    <td class="tg-a255">Date</td>
                                  </tr>
                              '.$approval_document.'
                              </table>
                            <!--end-->
                            </div>
                            <br/>
                            <table width="100%">
                             <tr  style="text-align:left">
                                <th colspan="6">Notes</th>
                              </tr>
                              <tr>
                                <td colspan="6">'.$contentText['note'].'</td>
                              </tr>
                            </table>
                            </html>';

$api_endpoint  = "https://selectpdf.com/api2/convert/";
$key           = 'd4ca505b-0ca6-4f33-a075-afce3e313e82';
$helper =& get_instance();
$helper->load->helper('string');
$file_name  =  $model['project_id'] . 'SITAC_TSA'.$model['id'].'_'.$model['vendor_id'].'_'.random_string('alnum', 16).'.pdf';
$local_file = 'tes' .$file_name;
$parameters = array('key' => $key, 'html' => $raw_html);
$options    = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($parameters),
    ),
);
$context = stream_context_create($options);
$result = @file_get_contents($api_endpoint, false, $context);
if (!$result) {
    echo "HTTP Response: " . $http_response_header[0] . "<br/>";
    $error = error_get_last();
    echo "Error Message: " . $error['message'];
} else {
    file_put_contents($local_file, $result);
}
 ?>