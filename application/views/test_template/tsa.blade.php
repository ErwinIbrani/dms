<?php
$contentText   = json_decode($model['attribute'], true);
echo $raw_html ='<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
.tg .tg-p8sp{font-size:20px;border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-btxf{background-color:#f9f9f9;border-color:inherit;text-align:left;vertical-align:top}
</style>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#93a1a1;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#93a1a1;color:#002b36;background-color:#fdf6e3;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#93a1a1;color:#fdf6e3;background-color:#657b83;}
.tg .tg-vxds{background-color:#eee8d5;border-color:#000000;text-align:left;vertical-align:top}
.tg .tg-xwva{font-weight:bold;font-size:15px;border-color:#000000;text-align:center;vertical-align:top}
.tg .tg-73oq{border-color:#000000;text-align:left;vertical-align:top}
</style>
</head>
<body>
<table class="tg" style="width: 100%">
  <tr>
    <th class="tg-p8sp" colspan="6"><span style="font-weight:bold">TOWER SITE APPROVAL : NEW BUILD</span></th>
  </tr>
  <tr>
    <td class="tg-btxf">Project Name</td>
    <td class="tg-btxf">'.$contentText['project_name'].'<br></td>
    <td class="tg-btxf">Operator</td>
    <td class="tg-btxf">'.$contentText['operator'].'<br></td>
    <td class="tg-btxf">TSA Number</td>
    <td class="tg-btxf">'.$contentText['tsa_number'].'<br></td>
  </tr>
</table>
<br/>
<table class="tg">
  <tr>
    <th class="tg-xwva" colspan="2">I. Site Information (to be filled by Regional Project Manager)</th>
  </tr>
  <tr>
    <td class="tg-vxds">Site ID IBS</td>
    <td class="tg-vxds">'.$contentText['site_id_ibs'].'<br></td>
  </tr>
  <tr>
    <td class="tg-73oq">Site Name</td>
    <td class="tg-73oq">'.$contentText['site_name'].'</td>
  </tr>
  <tr>
    <td class="tg-vxds">Topology</td>
    <td class="tg-vxds">'.$contentText['topology'].'<br></td>
  </tr>
  <tr>
    <td class="tg-73oq">Coordinate</td>
    <td class="tg-73oq">Degress/Decimal '.$contentText['long'].' E(Longitude) / Degress/Decimal '.$contentText['lat'].' N/S(Latitude)</td>
  </tr>
  <tr>
    <td class="tg-vxds">Region</td>
    <td class="tg-vxds">'.$contentText['region'].'</td>
  </tr>
  <tr>
    <td class="tg-73oq">Owner Name</td>
    <td class="tg-73oq">'.$contentText['owner_name'].'</td>
  </tr>
  <tr>
    <td class="tg-vxds">Contact Person</td>
    <td class="tg-vxds">'.$contentText['contact_persons'].'</td>
  </tr>
  <tr>
    <td class="tg-73oq">Phone/HP</td>
    <td class="tg-73oq">'.$contentText['phone_number'].'</td>
  </tr>
  <tr>
    <td class="tg-vxds">Address</td>
    <td class="tg-vxds">'.$contentText['address'].'</td>
  </tr>
  <tr>
    <td class="tg-73oq">Site Type</td>
    <td class="tg-73oq">'.$contentText['site_type'].'</td>
  </tr>
  <tr>
    <td class="tg-vxds">Tower Type</td>
    <td class="tg-vxds">'.$contentText['tower_type'].'</td>
  </tr>
  <tr>
    <td class="tg-73oq">Tower/Pole Height</td>
    <td class="tg-73oq">'.$contentText['tower_height'].'</td>
  </tr>
  <tr>
    <td class="tg-vxds">Status Site</td>
    <td class="tg-vxds">'.$contentText['status_site'].'</td>
  </tr>
  <tr>
    <td class="tg-73oq">Land Status</td>
    <td class="tg-73oq">'.$contentText['land_status'].'</td>
  </tr>
  <tr>
    <td class="tg-vxds">Initial Price (BAP)(Inc PPh, Excl, PPN)</td>
    <td class="tg-vxds">Rp. '.$contentText['initil_price_peryear'].' /-Year</td>
  </tr>
  <tr>
    <td class="tg-73oq">Land Size</td>
    <td class="tg-73oq">'.$contentText['land_size'].' Meter2 </td>
  </tr>
  <tr>
    <td class="tg-vxds">Accsess Road</td>
    <td class="tg-vxds">'.$contentText['access_road'].' Meter2</td>
  </tr>
  <tr>
    <td class="tg-73oq">Time Access</td>
    <td class="tg-73oq">'.$contentText['time_access'].'</td>
  </tr>
</table>
</body>
</html>';
?>

