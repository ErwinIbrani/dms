<?php
$contentText    = json_decode($model['attribute'], true);

$other_condition = '';
foreach($contentText['other_condition'] as $index => $key){
    $other_condition  .= '<br/>'.$key;
}


$phase = '';
if(!empty($contentText['phase'])){
    foreach($contentText['phase'] as $index => $key){
        $phase  .= '<br/>'.$key;
    }
  }
 else{
     $phase = ' ';
 }

$percent = '';
if(!empty($contentText['percen'])){
    foreach($contentText['percen'] as $index => $key){
        $percent .= '<br/>'.$key;
    }
}
else{
    $percent = ' ';
}

$amount = '';
if(!empty($contentText['amount'])){
    foreach($contentText['amount'] as $index => $key){
        $amount  .= '<br/>'.$key;
    }
  }
  else{
      $amount = ' ';
  }

$description = ' ';
if(!empty($contentText['description'])){
    foreach($contentText['description'] as $index => $key){
        $description  .= '<br/>'.$key;
    }
 }
 else{
     $description = ' ';
 }

$jarak_dari_kandidat = '';
if(!empty($contentText['jarak_dari_kandidat'])){
    foreach($contentText['jarak_dari_kandidat'] as $index => $key){
        $jarak_dari_kandidat  .= '<br/>'.$key;
    }
}else{
    $jarak_dari_kandidat = ' ';
}


$tower_existing = '';
if(!empty($contentText['tower_existing'])){
    foreach($contentText['tower_existing'] as $index => $key){
        $tower_existing  .= '<br/>'.$key;
    }
}else{
    $tower_existing = ' ';
}

$potensi_market = '';
if(!empty($contentText['potensi_market'])){
    foreach($contentText['potensi_market'] as $index => $key){
        $potensi_market  .= '<br/>'.$key;
    }
}else{
    $potensi_market = ' ';
}

$kandidates = '';
if(!empty($contentText['kandidates'])){
    foreach($contentText['kandidates'] as $index => $key){
        $kandidates  .= '<br/>'.$key;
    }
 }else{
    $kandidates = ' ';
}


$e_longiude = '';
if(!empty($contentText['e_longiude'])){
    foreach($contentText['e_longiude'] as $index => $key){
        $e_longiude  .= '<br/>'.$key;
    }
}else{
    $e_longiude = ' ';
}

$ns_latitude = '';
if(!empty($contentText['ns_latitude'])){
    foreach($contentText['ns_latitude'] as $index => $key){
        $ns_latitude  .= '<br/>'.$key;
    }
}else{
    $ns_latitude = ' ';
}


$contact_person = '';
if(!empty($contentText['contact_person'])){
    foreach($contentText['contact_person'] as $index => $key){
        $contact_person  .= '<br/>'.$key;
    }
}else{
    $contact_person = ' ';
}


$masa_sewa = '';
if(!empty($contentText['masa_sewa'])){
    foreach($contentText['masa_sewa'] as $index => $key){
        $masa_sewa  .= '<br/>'.$key;
    }
}else{
    $masa_sewa = ' ';
}


$harga_sewa = '';
if(!empty($contentText['harga_sewa'])){
    foreach($contentText['harga_sewa'] as $index => $key){
        $harga_sewa  .= '<br/>'.$key;
    }
}else{
    $harga_sewa = ' ';
}


$cancelation_remarks = '';
if(!empty($contentText['cancelation_remarks'])){
    foreach($contentText['cancelation_remarks'] as $index => $key){
        $cancelation_remarks  .= '<br/>'.$key;
    }
}else{
    $cancelation_remarks = ' ';
}


$approval_document = '';
if(empty($approvals)):
    $approval_document .= '<TR>
                           <TD class="tr7 td154"><P class="p2 ft21">&nbsp;</P></TD>
                           <TD class="tr7 td52"><P class="p0 ft22">&nbsp;</P></TD>
                           <TD colspan=2 class="tr7 td155"><P class="p0 ft21">&nbsp;</P></TD>
                           <TD class="tr7 td156"><P class="p4 ft21">&nbsp;</P></TD>
                           <TD class="tr7 td157"><P class="p4 ft21"><NOBR>&nbsp;</NOBR></P></TD>
                           </TR>';


else:
    foreach ($approvals as $index => $approval):
        $approval_document .=
                           '<TR>
                            <TD class="tr7 td154"><P class="p2 ft21">'.$approval->document_type.'</P></TD>
                            <TD class="tr7 td52"><P class="p0 ft22">&nbsp;</P></TD>
                            <TD colspan=2 class="tr7 td155"><P class="p0 ft21">'.$approval->role_name.'</P></TD>
                            <TD class="tr7 td156"><P class="p4 ft21">'.$approval->email.'</P></TD>
                            <TD class="tr7 td157"><P class="p4 ft21"><NOBR>'.date('d-M-Y', strtotime                   ($approval->approved_at)).'</NOBR></P></TD>
                         </TR>';

    endforeach;
endif;

echo $raw_html  ='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META http-equiv="X-UA-Compatible" content="IE=8">
<TITLE>bcl_1986054059.htm</TITLE>
<META name="generator" content="BCL easyConverter SDK 5.0.140">
<STYLE type="text/css">

body {margin-top: 0px;margin-left: 0px;}

#page_1 {position:relative; overflow: hidden;margin: 47px 0px 65px 49px;padding: 0px;border: none;width: 745px;}

#page_1 #p1dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:727px;height:1009px;}
#page_1 #p1dimg1 #p1img1 {width:727px;height:1009px;}




#page_2 {position:relative; overflow: hidden;margin: 47px 0px 104px 49px;padding: 0px;border: none;width: 728px;}

#page_2 #p2dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:727px;height:176px;}
#page_2 #p2dimg1 #p2img1 {width:727px;height:176px;}




.dclr {clear:both;float:none;height:1px;margin:0px;padding:0px;overflow:hidden;}

.ft0{font: 1px "Times New Roman";line-height: 1px;}
.ft1{font: bold 12px "Times New Roman";line-height: 15px;}
.ft2{font: 12px "Times New Roman";line-height: 13px;}
.ft3{font: 1px "Times New Roman";line-height: 6px;}
.ft4{font: 1px "Times New Roman";line-height: 4px;}
.ft5{font: 12px "Times New Roman";line-height: 14px;}
.ft6{font: 1px "Times New Roman";line-height: 7px;}
.ft7{font: bold 13px "Times New Roman";line-height: 15px;}
.ft8{font: 12px "Times New Roman";line-height: 15px;}
.ft9{font: 13px "Times New Roman";line-height: 15px;}
.ft10{font: 1px "Times New Roman";line-height: 3px;}
.ft11{font: 1px "Times New Roman";line-height: 2px;}
.ft12{font: 13px "Times New Roman";line-height: 14px;}
.ft13{font: 1px "Times New Roman";line-height: 12px;}
.ft14{font: 1px "Times New Roman";line-height: 11px;}
.ft15{font: 1px "Times New Roman";line-height: 10px;}
.ft16{font: 1px "Times New Roman";line-height: 8px;}
.ft17{font: 1px "Times New Roman";line-height: 5px;}
.ft18{font: 1px "Times New Roman";line-height: 14px;}
.ft19{font: 1px "Times New Roman";line-height: 13px;}
.ft20{font: 16px "Times New Roman";line-height: 19px;}
.ft21{font: 16px "Times New Roman";line-height: 17px;}
.ft22{font: 1px "Times New Roman";line-height: 17px;}

.p0{text-align: left;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p1{text-align: left;padding-left: 90px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p2{text-align: left;padding-left: 8px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p3{text-align: left;padding-left: 5px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p4{text-align: left;padding-left: 6px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p5{text-align: right;padding-right: 184px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p6{text-align: left;padding-left: 16px;margin-top: 34px;margin-bottom: 0px;}
.p7{text-align: left;padding-left: 78px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p8{text-align: left;padding-left: 34px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p9{text-align: left;padding-left: 13px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p10{text-align: left;padding-left: 12px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p11{text-align: left;padding-left: 27px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p12{text-align: left;padding-left: 15px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p13{text-align: left;padding-left: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p14{text-align: left;padding-left: 10px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p15{text-align: left;padding-left: 14px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p16{text-align: center;padding-left: 17px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p17{text-align: center;padding-left: 16px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p18{text-align: left;padding-left: 29px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p19{text-align: left;padding-left: 30px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p20{text-align: right;padding-right: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p21{text-align: left;padding-left: 17px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p22{text-align: left;padding-left: 20px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}

.td0{padding: 0px;margin: 0px;width: 135px;vertical-align: bottom;}
.td1{padding: 0px;margin: 0px;width: 200px;vertical-align: bottom;}
.td2{padding: 0px;margin: 0px;width: 144px;vertical-align: bottom;}
.td3{padding: 0px;margin: 0px;width: 249px;vertical-align: bottom;}
.td4{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 135px;vertical-align: bottom;}
.td5{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 200px;vertical-align: bottom;}
.td6{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 144px;vertical-align: bottom;}
.td7{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 245px;vertical-align: bottom;}
.td8{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 4px;vertical-align: bottom;}
.td9{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 133px;vertical-align: bottom;}
.td10{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 199px;vertical-align: bottom;}
.td11{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 143px;vertical-align: bottom;}
.td12{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 248px;vertical-align: bottom;}
.td13{border-left: #000000 1px solid;border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 133px;vertical-align: bottom;}
.td14{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 199px;vertical-align: bottom;}
.td15{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 143px;vertical-align: bottom;}
.td16{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 248px;vertical-align: bottom;}
.td17{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 3px;vertical-align: bottom;}
.td18{padding: 0px;margin: 0px;width: 245px;vertical-align: bottom;}
.td19{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 3px;vertical-align: bottom;}
.td20{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 592px;vertical-align: bottom;}
.td21{padding: 0px;margin: 0px;width: 4px;vertical-align: bottom;}
.td22{padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;}
.td23{padding: 0px;margin: 0px;width: 161px;vertical-align: bottom;}
.td24{padding: 0px;margin: 0px;width: 180px;vertical-align: bottom;}
.td25{padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;}
.td26{padding: 0px;margin: 0px;width: 327px;vertical-align: bottom;}
.td27{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;}
.td28{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 161px;vertical-align: bottom;}
.td29{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 160px;vertical-align: bottom;}
.td30{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;}
.td31{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 8px;vertical-align: bottom;}
.td32{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;}
.td33{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 38px;vertical-align: bottom;}
.td34{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 133px;vertical-align: bottom;}
.td35{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 151px;vertical-align: bottom;}
.td36{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
.td37{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 332px;vertical-align: bottom;}
.td38{padding: 0px;margin: 0px;width: 8px;vertical-align: bottom;}
.td39{padding: 0px;margin: 0px;width: 374px;vertical-align: bottom;}
.td40{padding: 0px;margin: 0px;width: 160px;vertical-align: bottom;}
.td41{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;}
.td42{padding: 0px;margin: 0px;width: 224px;vertical-align: bottom;}
.td43{padding: 0px;margin: 0px;width: 145px;vertical-align: bottom;}
.td44{padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
.td45{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 11px;vertical-align: bottom;}
.td46{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 224px;vertical-align: bottom;}
.td47{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 145px;vertical-align: bottom;}
.td48{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 8px;vertical-align: bottom;}
.td49{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 160px;vertical-align: bottom;}
.td50{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 159px;vertical-align: bottom;}
.td51{padding: 0px;margin: 0px;width: 38px;vertical-align: bottom;}
.td52{padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
.td53{padding: 0px;margin: 0px;width: 34px;vertical-align: bottom;}
.td54{padding: 0px;margin: 0px;width: 99px;vertical-align: bottom;}
.td55{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 160px;vertical-align: bottom;}
.td56{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 159px;vertical-align: bottom;}
.td57{padding: 0px;margin: 0px;width: 91px;vertical-align: bottom;}
.td58{padding: 0px;margin: 0px;width: 40px;vertical-align: bottom;}
.td59{padding: 0px;margin: 0px;width: 93px;vertical-align: bottom;}
.td60{padding: 0px;margin: 0px;width: 125px;vertical-align: bottom;}
.td61{padding: 0px;margin: 0px;width: 150px;vertical-align: bottom;}
.td62{padding: 0px;margin: 0px;width: 127px;vertical-align: bottom;}
.td63{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 7px;vertical-align: bottom;}
.td64{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 46px;vertical-align: bottom;}
.td65{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 37px;vertical-align: bottom;}
.td66{border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
.td67{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 126px;vertical-align: bottom;}
.td68{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 144px;vertical-align: bottom;}
.td69{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 46px;vertical-align: bottom;}
.td70{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 37px;vertical-align: bottom;}
.td71{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
.td72{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 126px;vertical-align: bottom;}
.td73{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 144px;vertical-align: bottom;}
.td74{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 46px;vertical-align: bottom;}
.td75{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 37px;vertical-align: bottom;}
.td76{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 126px;vertical-align: bottom;}
.td77{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 144px;vertical-align: bottom;}
.td78{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 34px;vertical-align: bottom;}
.td79{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 92px;vertical-align: bottom;}
.td80{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 93px;vertical-align: bottom;}
.td81{padding: 0px;margin: 0px;width: 55px;vertical-align: bottom;}
.td82{padding: 0px;margin: 0px;width: 68px;vertical-align: bottom;}
.td83{padding: 0px;margin: 0px;width: 12px;vertical-align: bottom;}
.td84{padding: 0px;margin: 0px;width: 74px;vertical-align: bottom;}
.td85{padding: 0px;margin: 0px;width: 88px;vertical-align: bottom;}
.td86{padding: 0px;margin: 0px;width: 25px;vertical-align: bottom;}
.td87{padding: 0px;margin: 0px;width: 14px;vertical-align: bottom;}
.td88{padding: 0px;margin: 0px;width: 24px;vertical-align: bottom;}
.td89{padding: 0px;margin: 0px;width: 81px;vertical-align: bottom;}
.td90{padding: 0px;margin: 0px;width: 45px;vertical-align: bottom;}
.td91{padding: 0px;margin: 0px;width: 186px;vertical-align: bottom;}
.td92{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 55px;vertical-align: bottom;}
.td93{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 68px;vertical-align: bottom;}
.td94{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 74px;vertical-align: bottom;}
.td95{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 88px;vertical-align: bottom;}
.td96{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 39px;vertical-align: bottom;}
.td97{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 24px;vertical-align: bottom;}
.td98{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 81px;vertical-align: bottom;}
.td99{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 14px;vertical-align: bottom;}
.td100{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 45px;vertical-align: bottom;}
.td101{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 137px;vertical-align: bottom;}
.td102{border-left: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 54px;vertical-align: bottom;}
.td103{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 59px;vertical-align: bottom;}
.td104{border-left: #000000 1px solid;padding: 0px;margin: 0px;width: 54px;vertical-align: bottom;}
.td105{padding: 0px;margin: 0px;width: 59px;vertical-align: bottom;}
.td106{padding: 0px;margin: 0px;width: 137px;vertical-align: bottom;}
.td107{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 80px;vertical-align: bottom;}
.td108{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 49px;vertical-align: bottom;}
.td109{border-left: #000000 1px solid;padding: 0px;margin: 0px;width: 122px;vertical-align: bottom;}
.td110{padding: 0px;margin: 0px;width: 63px;vertical-align: bottom;}
.td111{padding: 0px;margin: 0px;width: 225px;vertical-align: bottom;}
.td112{padding: 0px;margin: 0px;width: 178px;vertical-align: bottom;}
.td113{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 189px;vertical-align: bottom;}
.td114{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 25px;vertical-align: bottom;}
.td115{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 86px;vertical-align: bottom;}
.td116{border-left: #000000 1px solid;padding: 0px;margin: 0px;width: 208px;vertical-align: bottom;}
.td117{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 136px;vertical-align: bottom;}
.td118{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 63px;vertical-align: bottom;}
.td119{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 95px;vertical-align: bottom;}
.td120{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 136px;vertical-align: bottom;}
.td121{border-left: #000000 1px solid;border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 53px;vertical-align: bottom;}
.td122{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 153px;vertical-align: bottom;}
.td123{padding: 0px;margin: 0px;width: 151px;vertical-align: bottom;}
.td124{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 13px;vertical-align: bottom;}
.td125{padding: 0px;margin: 0px;width: 164px;vertical-align: bottom;}
.td126{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 181px;vertical-align: bottom;}
.td127{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 53px;vertical-align: bottom;}
.td128{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 73px;vertical-align: bottom;}
.td129{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 13px;vertical-align: bottom;}
.td130{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 73px;vertical-align: bottom;}
.td131{padding: 0px;margin: 0px;width: 105px;vertical-align: bottom;}
.td132{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 101px;vertical-align: bottom;}
.td133{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 94px;vertical-align: bottom;}
.td134{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 67px;vertical-align: bottom;}
.td135{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 85px;vertical-align: bottom;}
.td136{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 87px;vertical-align: bottom;}
.td137{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 100px;vertical-align: bottom;}
.td138{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 93px;vertical-align: bottom;}
.td139{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 67px;vertical-align: bottom;}
.td140{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 87px;vertical-align: bottom;}
.td141{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 23px;vertical-align: bottom;}
.td142{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 44px;vertical-align: bottom;}
.td143{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 23px;vertical-align: bottom;}
.td144{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 44px;vertical-align: bottom;}
.td145{border-left: #000000 1px solid;border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 187px;vertical-align: bottom;}
.td146{border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 161px;vertical-align: bottom;}
.td147{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 49px;vertical-align: bottom;}
.td148{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 207px;vertical-align: bottom;}
.td149{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 111px;vertical-align: bottom;}
.td150{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 187px;vertical-align: bottom;}
.td151{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 210px;vertical-align: bottom;}
.td152{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 207px;vertical-align: bottom;}
.td153{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 111px;vertical-align: bottom;}
.td154{border-left: #000000 1px solid;border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 187px;vertical-align: bottom;}
.td155{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 210px;vertical-align: bottom;}
.td156{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 207px;vertical-align: bottom;}
.td157{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 111px;vertical-align: bottom;}
.td158{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 49px;vertical-align: bottom;}
.td159{padding: 0px;margin: 0px;width: 195px;vertical-align: bottom;}
.td160{padding: 0px;margin: 0px;width: 258px;vertical-align: bottom;}
.td161{padding: 0px;margin: 0px;width: 112px;vertical-align: bottom;}

.tr0{height: 16px;}
.tr1{height: 37px;}
.tr2{height: 13px;}
.tr3{height: 6px;}
.tr4{height: 4px;}
.tr5{height: 14px;}
.tr6{height: 7px;}
.tr7{height: 17px;}
.tr8{height: 18px;}
.tr9{height: 15px;}
.tr10{height: 3px;}
.tr11{height: 2px;}
.tr12{height: 12px;}
.tr13{height: 11px;}
.tr14{height: 10px;}
.tr15{height: 8px;}
.tr16{height: 5px;}
.tr17{height: 22px;}
.tr18{height: 24px;}
.tr19{height: 66px;}
.tr20{height: 65px;}
.tr21{height: 153px;}
.tr22{height: 182px;}
.tr23{height: 183px;}
.tr24{height: 20px;}
.tr25{height: 21px;}
.tr26{height: 204px;}
.tr27{height: 205px;}
.tr28{height: 122px;}
.tr29{height: 53px;}

.t0{width: 728px;margin-top: 16px;font: 12px "Times New Roman";}
.t1{width: 724px;margin-top: 27px;font: 13px "Times New Roman";}
.t2{width: 728px;margin-top: 16px;font: 13px "Times New Roman";}
.t3{width: 725px;margin-top: 32px;font: 16px "Times New Roman";}

</STYLE>
</HEAD>

<BODY>
<DIV id="page_1">
<DIV id="p1dimg1">
<IMG src="data:image/jpg;base64,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KKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAOf8Cf8AJPPDX/YKtf8A0UtdBXP+BP8Aknnhr/sFWv8A6KWugoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn7P/koes/9gqw/9G3dFFn/AMlD1n/sFWH/AKNu6KADwJ/yTzw1/wBgq1/9FLWH4L8F+FbrwL4euLjw1o008umWzySSWETM7GJSSSVySTzmtzwJ/wAk88Nf9gq1/wDRS0eBP+SeeGv+wVa/+iloAP8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCpof8A4Lof/ia6CigDn/8AhBPB/wD0Kmh/+C6H/wCJo/4QTwf/ANCp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/n61z/we3v8A8eroKKAOf/4Q3S/+frXP/B7e/wDx6rmleH9P0a4uLi0+1tPcIiSyXV7NcsVQsVAMrsQAXc4GOprUooA5+z/5KHrP/YKsP/Rt3RRZ/wDJQ9Z/7BVh/wCjbuigA8Cf8k88Nf8AYKtf/RS10Fc/4E/5J54a/wCwVa/+ilroKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA5+z/wCSh6z/ANgqw/8ARt3RRZ/8lD1n/sFWH/o27ooAPAn/ACTzw1/2CrX/ANFLXQVz/gT/AJJ54a/7BVr/AOilroKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA5+z/5KHrP/YKsP/Rt3RRZ/wDJQ9Z/7BVh/wCjbuigA8Cf8k88Nf8AYKtf/RS10Fc/4E/5J54a/wCwVa/+ilroKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA5+z/wCSh6z/ANgqw/8ARt3RRZ/8lD1n/sFWH/o27ooAPAn/ACTzw1/2CrX/ANFLXQVz/gT/AJJ54a/7BVr/AOilroKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA5+z/5KHrP/YKsP/Rt3RRZ/wDJQ9Z/7BVh/wCjbuigA8Cf8k88Nf8AYKtf/RS10Fc/4E/5J54a/wCwVa/+ilrcgnhureK4t5Y5oJUDxyRsGV1IyCCOCCOc0ASUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUVHBPDdW8VxbyxzQSoHjkjYMrqRkEEcEEc5oAkooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooqOCeG6t4ri3ljmglQPHJGwZXUjIII4II5zQBJRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f/JQ9Z/7BVh/6Nu6KLP8A5KHrP/YKsP8A0bd0UAHgT/knnhr/ALBVr/6KWugrn/An/JPPDX/YKtf/AEUtdBQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f8AyUPWf+wVYf8Ao27oos/+Sh6z/wBgqw/9G3dFAB4E/wCSeeGv+wVa/wDopa6Cuf8AAn/JPPDX/YKtf/RS10FABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAc/Z/8lD1n/sFWH/o27oos/wDkoes/9gqw/wDRt3RQAeBP+SeeGv8AsFWv/opa6Cuf8Cf8k88Nf9gq1/8ARS10FABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAc/Z/wDJQ9Z/7BVh/wCjbuiiz/5KHrP/AGCrD/0bd0UAHgT/AJJ54a/7BVr/AOilroK5/wACf8k88Nf9gq1/9FLXQUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBz9n/yUPWf+wVYf+jbuiiz/AOSh6z/2CrD/ANG3dFAB4E/5J54a/wCwVa/+ilroK5/wJ/yTzw1/2CrX/wBFLXQUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBz9n/AMlD1n/sFWH/AKNu6KLP/koes/8AYKsP/Rt3RQAeBP8Aknnhr/sFWv8A6KWugrn/AAJ/yTzw1/2CrX/0UtdBQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f/JQ9Z/7BVh/6Nu6KLP8A5KHrP/YKsP8A0bd0UAHgT/knnhr/ALBVr/6KWugrn/An/JPPDX/YKtf/AEUtdBQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f8AyUPWf+wVYf8Ao27oos/+Sh6z/wBgqw/9G3dFAB4E/wCSeeGv+wVa/wDopa6Cuf8AAn/JPPDX/YKtf/RS10FABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAc/Z/8lD1n/sFWH/o27oos/wDkoes/9gqw/wDRt3RQAeBP+SeeGv8AsFWv/opa6Cuf8Cf8k88Nf9gq1/8ARS10FABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAc/Z/wDJQ9Z/7BVh/wCjbuiiz/5KHrP/AGCrD/0bd0UAHgT/AJJ54a/7BVr/AOilroK5/wACf8k88Nf9gq1/9FLXQUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBz9n/yUPWf+wVYf+jbuiiz/AOSh6z/2CrD/ANG3dFAB4E/5J54a/wCwVa/+ilroK5/wJ/yTzw1/2CrX/wBFLXQUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBz9n/AMlD1n/sFWH/AKNu6KLP/koes/8AYKsP/Rt3RQAeBP8Aknnhr/sFWv8A6KWugrn/AAJ/yTzw1/2CrX/0UtdBQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f/JQ9Z/7BVh/6Nu6KLP8A5KHrP/YKsP8A0bd0UAHgT/knnhr/ALBVr/6KWugrn/An/JPPDX/YKtf/AEUtdBQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f8AyUPWf+wVYf8Ao27oos/+Sh6z/wBgqw/9G3dFAB4E/wCSeeGv+wVa/wDopa6Cuf8AAn/JPPDX/YKtf/RS10FABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAc/Z/8lD1n/sFWH/o27oos/wDkoes/9gqw/wDRt3RQAeBP+SeeGv8AsFWv/opa6Cuf8Cf8k88Nf9gq1/8ARS10FABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAc/Z/wDJQ9Z/7BVh/wCjbuiiz/5KHrP/AGCrD/0bd0UAHgT/AJJ54a/7BVr/AOilroK5/wACf8k88Nf9gq1/9FLXQUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBz9n/yUPWf+wVYf+jbuiiz/AOSh6z/2CrD/ANG3dFAB4E/5J54a/wCwVa/+ilroK5/wJ/yTzw1/2CrX/wBFLXQUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBz9n/AMlD1n/sFWH/AKNu6KLP/koes/8AYKsP/Rt3RQAeBP8Aknnhr/sFWv8A6KWugrn/AAJ/yTzw1/2CrX/0UtdBQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f/JQ9Z/7BVh/6Nu6KLP8A5KHrP/YKsP8A0bd0UAHgT/knnhr/ALBVr/6KWugrn/An/JPPDX/YKtf/AEUtdBQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f8AyUPWf+wVYf8Ao27oos/+Sh6z/wBgqw/9G3dFAB4E/wCSeeGv+wVa/wDopa6Cuf8AAn/JPPDX/YKtf/RS10FABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAc/Z/8lD1n/sFWH/o27oos/wDkoes/9gqw/wDRt3RQAeBP+SeeGv8AsFWv/opa6Cuf8Cf8k88Nf9gq1/8ARS10FABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAc/Z/wDJQ9Z/7BVh/wCjbuiiz/5KHrP/AGCrD/0bd0UAHgT/AJJ54a/7BVr/AOilroK5/wACf8k88Nf9gq1/9FLXQUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBz9n/yUPWf+wVYf+jbuiiz/AOSh6z/2CrD/ANG3dFAB4E/5J54a/wCwVa/+ilroK5/wJ/yTzw1/2CrX/wBFLXQUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBz9n/AMlD1n/sFWH/AKNu6KLP/koes/8AYKsP/Rt3RQAeBP8Aknnhr/sFWv8A6KWugrn/AAJ/yTzw1/2CrX/0UtdBQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f/JQ9Z/7BVh/6Nu6KLP8A5KHrP/YKsP8A0bd0UAHgT/knnhr/ALBVr/6KWugrn/An/JPPDX/YKtf/AEUtdBQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f8AyUPWf+wVYf8Ao27oos/+Sh6z/wBgqw/9G3dFAB4E/wCSeeGv+wVa/wDopa6Cuf8AAn/JPPDX/YKtf/RS10FABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAc/Z/8lD1n/sFWH/o27oos/wDkoes/9gqw/wDRt3RQAeBP+SeeGv8AsFWv/opa6Cuf8Cf8k88Nf9gq1/8ARS10FABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAc/Z/wDJQ9Z/7BVh/wCjbuiiz/5KHrP/AGCrD/0bd0UAHgT/AJJ54a/7BVr/AOilroK5/wACf8k88Nf9gq1/9FLXQUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBz9n/yUPWf+wVYf+jbuiiz/AOSh6z/2CrD/ANG3dFAB4E/5J54a/wCwVa/+ilroK5/wJ/yTzw1/2CrX/wBFLXQUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBz9n/AMlD1n/sFWH/AKNu6KLP/koes/8AYKsP/Rt3RQAeBP8Aknnhr/sFWv8A6KWugrn/AAJ/yTzw1/2CrX/0UtdBQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f/JQ9Z/7BVh/6Nu6KLP8A5KHrP/YKsP8A0bd0UAHgT/knnhr/ALBVr/6KWugrn/An/JPPDX/YKtf/AEUtdBQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f8AyUPWf+wVYf8Ao27oos/+Sh6z/wBgqw/9G3dFAB4E/wCSeeGv+wVa/wDopa6Cuf8AAn/JPPDX/YKtf/RS10FABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAc/Z/8lD1n/sFWH/o27oos/wDkoes/9gqw/wDRt3RQAeBP+SeeGv8AsFWv/opa6Cuf8Cf8k88Nf9gq1/8ARS10FABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAc/Z/wDJQ9Z/7BVh/wCjbuiiz/5KHrP/AGCrD/0bd0UAHgT/AJJ54a/7BVr/AOilroK5/wACf8k88Nf9gq1/9FLXQUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBz9n/yUPWf+wVYf+jbuiiz/AOSh6z/2CrD/ANG3dFAB4E/5J54a/wCwVa/+ilroK5/wJ/yTzw1/2CrX/wBFLXQUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBz9n/AMlD1n/sFWH/AKNu6KLP/koes/8AYKsP/Rt3RQAeBP8Aknnhr/sFWv8A6KWugrn/AAJ/yTzw1/2CrX/0UtdBQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f/JQ9Z/7BVh/6Nu6KLP8A5KHrP/YKsP8A0bd0UAHgT/knnhr/ALBVr/6KWugrn/An/JPPDX/YKtf/AEUtdBQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f8AyUPWf+wVYf8Ao27oos/+Sh6z/wBgqw/9G3dFAB4E/wCSeeGv+wVa/wDopa6Cuf8AAn/JPPDX/YKtf/RS10FABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAc/Z/8lD1n/sFWH/o27oos/wDkoes/9gqw/wDRt3RQAeBP+SeeGv8AsFWv/opa6Cuf8Cf8k88Nf9gq1/8ARS10FABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAc/Z/wDJQ9Z/7BVh/wCjbuiiz/5KHrP/AGCrD/0bd0UAHgT/AJJ54a/7BVr/AOilroK5/wACf8k88Nf9gq1/9FLXQUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBz9n/yUPWf+wVYf+jbuiiz/AOSh6z/2CrD/ANG3dFAB4E/5J54a/wCwVa/+ilroK5/wJ/yTzw1/2CrX/wBFLXQUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBz9n/AMlD1n/sFWH/AKNu6KLP/koes/8AYKsP/Rt3RQAeBP8Aknnhr/sFWv8A6KWugrn/AAJ/yTzw1/2CrX/0UtdBQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAHP2f/JQ9Z/7BVh/6Nu6KLP8A5KHrP/YKsP8A0bd0UAbkEENrbxW9vFHDBEgSOONQqooGAABwABxipKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAjEEK3D3CxRid0VHkCjcyqSVBPUgFmIHbcfWiiigD/9k=" id="p1img1"></DIV>


<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
	<TD class="tr0 td0"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td1"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td2"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr0 td3"><P class="p1 ft1">Document Name : TSA</P></TD>
</TR>
<TR>
	<TD class="tr1 td4"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td5"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td6"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td7"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td8"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td9"><P class="p2 ft2">No WBS</P></TD>
	<TD class="tr2 td10"><P class="p3 ft2">'.$wbs_id['wbs_id'].'</P></TD>
	<TD class="tr2 td11"><P class="p4 ft2">Tenant</P></TD>
	<TD colspan=2 class="tr2 td12"><P class="p3 ft2">'.$wbs_id['tenant'].'</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft2">SITE ID</P></TD>
	<TD class="tr2 td14"><P class="p3 ft2">'.$contentText['site_id_ibs'].'</P></TD>
	<TD class="tr2 td15"><P class="p4 ft2">Contractor Name</P></TD>
	<TD colspan=2 class="tr2 td16"><P class="p3 ft2">&nbsp;&nbsp;&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td9"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td10"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td11"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td7"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td17"><P class="p0 ft3">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft2">SITE Name</P></TD>
	<TD class="tr2 td14"><P class="p3 ft2"> '.$contentText['site_name'].'</P></TD>
	<TD class="tr2 td15"><P class="p4 ft2">Date</P></TD>
	<TD class="tr2 td18"><P class="p5 ft2"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
	<TD class="tr2 td19"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td9"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td10"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td11"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td7"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td17"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td9"><P class="p2 ft5">-</P></TD>
	<TD class="tr5 td10"><P class="p3 ft5">-</P></TD>
	<TD class="tr5 td11"><P class="p4 ft5">Page</P></TD>
	<TD class="tr5 td7"><P class="p4 ft5">1 - 2</P></TD>
	<TD class="tr5 td17"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft2">Address</P></TD>
	<TD colspan=4 class="tr2 td20"><P class="p3 ft2">'.$contentText['address'].'</P></TD>
</TR>
<TR>
	<TD class="tr6 td9"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td5"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td6"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td7"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td17"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr7 td4"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td5"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td6"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td7"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr8 td21"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
</TABLE>
<P class="p6 ft7">TOWER SITE APPROVAL : NEW BUILD</P>
<TABLE cellpadding=0 cellspacing=0 class="t1">
<TR>
	<TD class="tr0 td22"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td23"><P class="p0 ft8">Project Name : '.$contentText['project_name'].'</P></TD>
	<TD colspan=3 class="tr0 td24"><P class="p7 ft8">Operator: '.$contentText['operator'].'</P></TD>
	<TD class="tr0 td25"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=7 class="tr0 td26"><P class="p8 ft8">TSA Number:'.$contentText['tsa_number'].'</P></TD>
</TR>
<TR>
	<TD class="tr0 td27"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td28"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td29"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td30"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td31"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td32"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td33"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=3 class="tr0 td34"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr0 td35"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td36"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr9 td22"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=3 class="tr9 td37"><P class="p0 ft7">I. Site Information (to be filled by Regional Project</P></TD>
	<TD class="tr9 td38"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=8 class="tr9 td39"><P class="p9 ft7">II. Site Acquisition Information Information (to be filled</P></TD>
</TR>
<TR>
	<TD class="tr9 td22"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td23"><P class="p0 ft7">Manager)</P></TD>
	<TD class="tr9 td40"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td38"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=6 class="tr9 td42"><P class="p10 ft7">by Regional Project Manager)</P></TD>
	<TD class="tr9 td43"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td44"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td27"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td28"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td29"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td45"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td31"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=6 class="tr4 td46"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td47"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td36"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr0 td22"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td28"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td29"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td38"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=6 class="tr0 td42"><P class="p0 ft9">Regional <NOBR>Period(IBS-LO) :</NOBR> Start '.$contentText['start_year'].'</P></TD>
	<TD class="tr0 td43"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td44"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr8 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td49"><P class="p4 ft9">Site ID IBS</P></TD>
	<TD class="tr7 td50"><P class="p4 ft9">'.$contentText['site_id_ibs'].'</P></TD>
	<TD class="tr8 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr8 td38"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr8 td25"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr8 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr8 td52"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr8 td53"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr8 td54"><P class="p11 ft9">End '.$contentText['end_year'].'</P></TD>
	<TD class="tr8 td43"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr8 td44"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr9 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td55"><P class="p4 ft9">Site Name</P></TD>
	<TD class="tr9 td56"><P class="p4 ft9">'.$contentText['site_name'].'</P></TD>
	<TD class="tr9 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td38"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=3 class="tr9 td57"><P class="p0 ft9">Acquition Status</P></TD>
	<TD class="tr9 td53"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr9 td54"><P class="p10 ft9">: '.$contentText['acquition_status'].'</P></TD>
	<TD class="tr9 td43"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td44"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr10 td48"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr11 td49"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr11 td50"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr10 td41"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td38"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td25"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td51"><P class="p0 ft10">&nbsp;</P></TD>
	<TD colspan=2 class="tr10 td58"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td59"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td52"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td43"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td44"><P class="p0 ft10">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr0 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td49"><P class="p4 ft9">Topology</P></TD>
	<TD class="tr9 td50"><P class="p4 ft9">'.$contentText['topology'].'</P></TD>
	<TD class="tr0 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td38"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=4 class="tr0 td60"><P class="p0 ft9">Purchased Option</P></TD>
	<TD colspan=2 class="tr0 td54"><P class="p2 ft9">: '.$contentText['purchased_option'].'</P></TD>
	<TD class="tr0 td43"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td44"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr0 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td55"><P class="p4 ft9">Candidate Degress</P></TD>
	<TD class="tr0 td56"><P class="p4 ft9">'.$contentText['long'].' E(Longitude)</P></TD>
	<TD class="tr0 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td38"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=4 class="tr0 td60"><P class="p0 ft9">Final Price Per Year</P></TD>
	<TD colspan=4 class="tr0 td3"><P class="p12 ft9">: '.$contentText['final_per_year'].' -/Year</P></TD>
</TR>
<TR>
	<TD class="tr0 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td49"><P class="p4 ft9">Decimal</P></TD>
	<TD class="tr9 td50"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td38"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=4 rowspan=2 class="tr8 td60"><P class="p0 ft9">(Incl PPH, Excl PPN)</P></TD>
	<TD class="tr0 td59"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td52"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td43"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td44"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr11 td48"><P class="p0 ft11">&nbsp;</P></TD>
	<TD rowspan=2 class="tr5 td55"><P class="p4 ft12">Candidate Degress</P></TD>
	<TD rowspan=2 class="tr5 td56"><P class="p4 ft12">'.$contentText['lat'].' N/S(Latitude)</P></TD>
	<TD class="tr11 td41"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr11 td38"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr11 td59"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr11 td52"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr11 td43"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr11 td44"><P class="p0 ft11">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr12 td48"><P class="p0 ft13">&nbsp;</P></TD>
	<TD class="tr12 td41"><P class="p0 ft13">&nbsp;</P></TD>
	<TD class="tr12 td38"><P class="p0 ft13">&nbsp;</P></TD>
	<TD colspan=3 rowspan=2 class="tr8 td57"><P class="p0 ft9">Total Price</P></TD>
	<TD class="tr12 td53"><P class="p0 ft13">&nbsp;</P></TD>
	<TD colspan=4 rowspan=2 class="tr8 td3"><P class="p12 ft9">: '.$contentText['total_price'].'</P></TD>
</TR>
<TR>
	<TD class="tr3 td48"><P class="p0 ft3">&nbsp;</P></TD>
	<TD rowspan=2 class="tr0 td49"><P class="p4 ft9">Decimal</P></TD>
	<TD class="tr3 td56"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td41"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td38"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td53"><P class="p0 ft3">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr13 td48"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr14 td50"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr13 td41"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr13 td38"><P class="p0 ft14">&nbsp;</P></TD>
	<TD colspan=4 rowspan=2 class="tr8 td60"><P class="p0 ft9">(Incl PPH, Excl PPN)</P></TD>
	<TD class="tr13 td59"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr13 td52"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr13 td43"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr13 td44"><P class="p0 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr6 td48"><P class="p0 ft6">&nbsp;</P></TD>
	<TD rowspan=2 class="tr5 td55"><P class="p4 ft12">Region</P></TD>
	<TD rowspan=2 class="tr5 td56"><P class="p4 ft12">'.$contentText['region'].'</P></TD>
	<TD class="tr6 td41"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td38"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td59"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td52"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td43"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td44"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr6 td48"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td41"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td38"><P class="p0 ft6">&nbsp;</P></TD>
	<TD colspan=3 rowspan=3 class="tr7 td57"><P class="p13 ft9">Other Condition</P></TD>
	<TD class="tr6 td53"><P class="p0 ft6">&nbsp;</P></TD>
	<TD rowspan=3 class="tr7 td59"><P class="p14 ft9">:</P></TD>
	<TD class="tr6 td52"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td43"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td44"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr10 td48"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr11 td49"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr11 td50"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr10 td41"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td38"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td53"><P class="p0 ft10">&nbsp;</P></TD>
	<TD rowspan=2 class="tr14 td52"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr10 td43"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td44"><P class="p0 ft10">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr6 td48"><P class="p0 ft6">&nbsp;</P></TD>
	<TD rowspan=2 class="tr5 td55"><P class="p4 ft12">Owner Name</P></TD>
	<TD rowspan=2 class="tr5 td56"><P class="p4 ft12">'.$contentText['owner_name'].'</P></TD>
	<TD class="tr6 td41"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td38"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td53"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td43"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td44"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr6 td48"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td41"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td38"><P class="p0 ft6">&nbsp;</P></TD>
	<TD colspan=6 rowspan=3 class="tr8 td42"><P class="p0 ft9"><NOBR>-'.$other_condition.'</NOBR></P></TD>
	<TD class="tr6 td43"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td44"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td48"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr10 td49"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td50"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr4 td41"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td38"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td43"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td44"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr6 td48"><P class="p0 ft6">&nbsp;</P></TD>
	<TD rowspan=2 class="tr0 td49"><P class="p4 ft9">Contact Person</P></TD>
	<TD rowspan=2 class="tr0 td50"><P class="p4 ft9">'.$contentText['contact_persons'].'</P></TD>
	<TD class="tr6 td41"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td38"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td43"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td44"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr14 td48"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td41"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td38"><P class="p0 ft15">&nbsp;</P></TD>
	<TD colspan=6 rowspan=2 class="tr7 td42"><P class="p0 ft9"><NOBR>&nbsp;&nbsp;</NOBR></P></TD>
	<TD class="tr14 td43"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td44"><P class="p0 ft15">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr6 td48"><P class="p0 ft6">&nbsp;</P></TD>
	<TD rowspan=2 class="tr5 td55"><P class="p4 ft12">Phone/HP</P></TD>
	<TD rowspan=2 class="tr5 td56"><P class="p4 ft12">'.$contentText['phone_number'].'</P></TD>
	<TD class="tr6 td41"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td38"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td43"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td44"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr6 td48"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td41"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td38"><P class="p0 ft6">&nbsp;</P></TD>
	<TD colspan=6 rowspan=3 class="tr8 td42"><P class="p0 ft9"><NOBR>&nbsp;&nbsp;</NOBR></P></TD>
	<TD class="tr6 td43"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td44"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr10 td48"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr11 td49"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr11 td50"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr10 td41"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td38"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td43"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td44"><P class="p0 ft10">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr15 td48"><P class="p0 ft16">&nbsp;</P></TD>
	<TD rowspan=2 class="tr9 td49"><P class="p4 ft9">Address</P></TD>
	<TD rowspan=2 class="tr9 td50"><P class="p4 ft9">'.$contentText['address'].'</P></TD>
	<TD class="tr15 td41"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr15 td38"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr15 td43"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr15 td44"><P class="p0 ft16">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr15 td48"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr15 td41"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr15 td38"><P class="p0 ft16">&nbsp;</P></TD>
	<TD colspan=6 rowspan=2 class="tr8 td42"><P class="p0 ft9"><NOBR>&nbsp;&nbsp;</NOBR></P></TD>
	<TD class="tr15 td43"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr15 td44"><P class="p0 ft16">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr14 td48"><P class="p0 ft15">&nbsp;</P></TD>
	<TD rowspan=2 class="tr9 td55"><P class="p4 ft9">Site Type</P></TD>
	<TD rowspan=2 class="tr9 td56"><P class="p4 ft9">'.$contentText['site_type'].'</P></TD>
	<TD class="tr14 td41"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td38"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td43"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td44"><P class="p0 ft15">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td48"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr16 td41"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr16 td38"><P class="p0 ft17">&nbsp;</P></TD>
	<TD colspan=3 rowspan=3 class="tr8 td57"><P class="p0 ft9">Location Site</P></TD>
	<TD class="tr16 td53"><P class="p0 ft17">&nbsp;</P></TD>
	<TD colspan=2 rowspan=3 class="tr8 td54"><P class="p15 ft9">: '.$contentText['location_site'].'</P></TD>
	<TD class="tr16 td43"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr16 td44"><P class="p0 ft17">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr10 td48"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr11 td49"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr11 td50"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr10 td41"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td38"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td53"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td43"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td44"><P class="p0 ft10">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr14 td48"><P class="p0 ft15">&nbsp;</P></TD>
	<TD rowspan=2 class="tr5 td55"><P class="p4 ft12">Tower Type</P></TD>
	<TD rowspan=2 class="tr5 td56"><P class="p4 ft12">'.$contentText['tower_type'].'</P></TD>
	<TD class="tr14 td41"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td38"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td53"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td43"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td44"><P class="p0 ft15">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td48"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td41"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td38"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=3 rowspan=3 class="tr7 td57"><P class="p0 ft9">Vendor PIC</P></TD>
	<TD class="tr4 td53"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 rowspan=3 class="tr7 td54"><P class="p16 ft9">: '.$contentText['vendor_pic'].'</P></TD>
	<TD class="tr4 td43"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td44"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr10 td48"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr11 td49"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr11 td50"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr10 td41"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td38"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td53"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td43"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td44"><P class="p0 ft10">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr14 td48"><P class="p0 ft15">&nbsp;</P></TD>
	<TD rowspan=2 class="tr5 td55"><P class="p4 ft12">Tower/Pole Height</P></TD>
	<TD rowspan=2 class="tr5 td56"><P class="p4 ft12">'.$contentText['tower_height'].' Meter</P></TD>
	<TD class="tr14 td41"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td38"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td53"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td43"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td44"><P class="p0 ft15">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td48"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td41"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td38"><P class="p0 ft4">&nbsp;</P></TD>
	<TD rowspan=3 class="tr8 td25"><P class="p0 ft9">No Telp</P></TD>
	<TD class="tr4 td51"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td52"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td53"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 rowspan=3 class="tr8 td54"><P class="p17 ft9">: '.$contentText['vendor_phone'].'</P></TD>
	<TD class="tr4 td43"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td44"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td48"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr10 td49"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td50"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr4 td41"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td38"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td51"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td52"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td53"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td43"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td44"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr14 td48"><P class="p0 ft15">&nbsp;</P></TD>
	<TD rowspan=2 class="tr9 td49"><P class="p4 ft9">Status Site</P></TD>
	<TD rowspan=2 class="tr9 td50"><P class="p4 ft9">'.$contentText['status_site'].' Meter</P></TD>
	<TD class="tr14 td41"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td38"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td51"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td52"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td53"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td43"><P class="p0 ft15">&nbsp;</P></TD>
	<TD class="tr14 td44"><P class="p0 ft15">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td48"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td41"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td38"><P class="p0 ft3">&nbsp;</P></TD>
	<TD colspan=3 rowspan=2 class="tr17 td57"><P class="p0 ft9">IBS SITAC PIC</P></TD>
	<TD class="tr3 td53"><P class="p0 ft3">&nbsp;</P></TD>
	<TD colspan=2 rowspan=2 class="tr17 td54"><P class="p18 ft9">: '.$contentText['ibs_pic'].'</P></TD>
	<TD class="tr3 td43"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td44"><P class="p0 ft3">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr0 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td49"><P class="p4 ft9">Land Status</P></TD>
	<TD class="tr9 td50"><P class="p4 ft9">'.$contentText['land_status'].'</P></TD>
	<TD class="tr0 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td38"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td53"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td43"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td44"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr9 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td55"><P class="p4 ft9">Initial Price (BAP)(Inch</P></TD>
	<TD class="tr9 td56"><P class="p4 ft9">Rp. '.$contentText['initil_price_peryear'].' -/Year</P></TD>
	<TD class="tr9 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td38"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=6 class="tr9 td42"><P class="p0 ft9">Due Date Land Payment : 25 Hari Setelah</P></TD>
	<TD colspan=2 class="tr9 td61"><P class="p3 ft9">PKS Signed dan Invoice</P></TD>
</TR>
<TR>
	<TD class="tr7 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td49"><P class="p4 ft9">PPH, Excl PPN)</P></TD>
	<TD class="tr0 td50"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td38"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td25"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td52"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td53"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=4 class="tr7 td3"><P class="p19 ft9">Diterima dengan lengkap dan benar</P></TD>
</TR>
<TR>
	<TD class="tr0 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td49"><P class="p4 ft9">Land Size</P></TD>
	<TD class="tr9 td50"><P class="p4 ft9">'.$contentText['land_size'].' Meter2</P></TD>
	<TD class="tr0 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td38"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td25"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td52"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td53"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=4 class="tr0 td3"><P class="p19 ft9">(Untuk proses pembayaran pertama)</P></TD>
</TR>
<TR>
	<TD class="tr7 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td49"><P class="p4 ft9">Access Road</P></TD>
	<TD class="tr0 td50"><P class="p4 ft9">'.$contentText['access_road'].' Meter2</P></TD>
	<TD class="tr7 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td38"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=4 class="tr7 td60"><P class="p13 ft9">Term Of Payment</P></TD>
	<TD class="tr7 td59"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td52"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td43"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td44"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td48"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td55"><P class="p4 ft12">Time Access</P></TD>
	<TD class="tr5 td56"><P class="p4 ft12">'.$contentText['time_access'].'</P></TD>
	<TD class="tr5 td41"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td38"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td25"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td51"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td52"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td53"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td59"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td52"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td43"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td44"><P class="p0 ft18">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr10 td48"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr11 td49"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr11 td50"><P class="p0 ft11">&nbsp;</P></TD>
	<TD class="tr10 td41"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td38"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td25"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td51"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td52"><P class="p0 ft10">&nbsp;</P></TD>
	<TD colspan=2 class="tr10 td62"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td52"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td43"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td44"><P class="p0 ft10">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr18 td22"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr18 td23"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr18 td40"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr18 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr18 td38"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr18 td25"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr18 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr18 td52"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr18 td62"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr18 td52"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr18 td43"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr18 td44"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr0 td22"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td23"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td40"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td63"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td64"><P class="p4 ft9">Phase</P></TD>
	<TD class="tr9 td65"><P class="p4 ft9">%</P></TD>
	<TD class="tr9 td66"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr9 td67"><P class="p0 ft9">Amount</P></TD>
	<TD class="tr9 td66"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td68"><P class="p0 ft9">Description</P></TD>
	<TD class="tr0 td44"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr8 td22"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr8 td23"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr8 td40"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr8 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr8 td63"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td69"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td70"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td71"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr7 td72"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td71"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td73"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr8 td44"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td22"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td23"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td40"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td41"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td63"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td74"><P class="p4 ft12">'.$phase.'</P></TD>
	<TD class="tr5 td75"><P class="p4 ft12">'.$percent.'%</P></TD>
	<TD class="tr5 td52"><P class="p0 ft18">&nbsp;</P></TD>
	<TD colspan=2 class="tr5 td76"><P class="p0 ft12">'.$amount.'</P></TD>
	<TD class="tr5 td52"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr5 td77"><P class="p0 ft12">'.$description.'</P></TD>
	<TD class="tr5 td44"><P class="p0 ft18">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr9 td22"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td23"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td40"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td63"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td74"><P class="p4 ft9">&nbsp;</P></TD>
	<TD class="tr9 td75"><P class="p4 ft9">&nbsp;</P></TD>
	<TD class="tr9 td52"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr9 td76"><P class="p0 ft9">&nbsp;</P></TD>
	<TD class="tr9 td52"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td77"><P class="p0 ft9">&nbsp;</P></TD>
	<TD class="tr9 td44"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr19 td22"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr19 td23"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr19 td40"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr19 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr19 td63"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr20 td69"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr20 td70"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr20 td71"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr20 td78"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr20 td79"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr20 td71"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr20 td73"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr19 td44"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr21 td27"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td28"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td29"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td45"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td31"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td32"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td33"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td71"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td78"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td80"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td71"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td47"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td36"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
</TABLE>
</DIV>
<DIV id="page_2">
	<BR/>
	<BR/>
	<BR/>
	<BR/>
	<BR/>
	<BR/>
	<BR/>
	<BR/>
	<BR/>
	<BR/>
	<BR/>
	<BR/>
	<BR/>
	<BR/>
	<BR/>
	<BR/>
	<BR/>
<DIV id="p2dimg1">
<img src="'.base_url('uploads/surveysitac/logo_ibs.png').'" width="100px" height="40px" alt="">
</DIV>
<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t2">
<TR>
	<TD class="tr0 td81"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td82"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td83"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td84"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td85"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td86"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td87"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td88"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td89"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td87"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td90"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td21"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=3 class="tr0 td91"><P class="p11 ft1">Document Name : TSA</P></TD>
</TR>
<TR>
	<TD class="tr1 td92"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td93"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td30"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td94"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td95"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td33"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr1 td96"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td97"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td98"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td99"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td100"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td8"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td100"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td8"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td102"><P class="p2 ft2">No WBS</P></TD>
	<TD class="tr2 td93"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td45"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td94"><P class="p3 ft2">'.$wbs_id['wbs_id'].'</P></TD>
	<TD class="tr2 td95"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td70"><P class="p0 ft19">&nbsp;</P></TD>
	<TD colspan=4 class="tr2 td11"><P class="p4 ft2">Tenant</P></TD>
	<TD colspan=2 class="tr2 td103"><P class="p3 ft2">'.$wbs_id['tenant'].'</P></TD>
	<TD class="tr2 td8"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td100"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td101"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td17"><P class="p0 ft19">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td104"><P class="p2 ft2">SITE ID</P></TD>
	<TD class="tr2 td82"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td41"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td84"><P class="p3 ft2">fdsfd</P></TD>
	<TD class="tr2 td85"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td75"><P class="p0 ft19">&nbsp;</P></TD>
	<TD colspan=4 class="tr2 td15"><P class="p4 ft2">Contractor Name</P></TD>
	<TD colspan=2 class="tr2 td105"><P class="p3 ft2">&nbsp;&nbsp;&nbsp;</P></TD>
	<TD class="tr2 td21"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td90"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td106"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td19"><P class="p0 ft19">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td102"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td93"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td45"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td94"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td95"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td70"><P class="p0 ft3">&nbsp;</P></TD>
	<TD colspan=2 class="tr3 td96"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td97"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td107"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td99"><P class="p0 ft3">&nbsp;</P></TD>
	<TD colspan=2 class="tr3 td108"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td100"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td101"><P class="p0 ft3">&nbsp;</P></TD>
	<TD class="tr3 td17"><P class="p0 ft3">&nbsp;</P></TD>
</TR>
<TR>
	<TD colspan=2 class="tr2 td109"><P class="p2 ft2">SITE Name</P></TD>
	<TD class="tr2 td41"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td84"><P class="p3 ft2">S11dfds</P></TD>
	<TD class="tr2 td85"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td75"><P class="p0 ft19">&nbsp;</P></TD>
	<TD colspan=4 class="tr2 td15"><P class="p4 ft2">Date</P></TD>
	<TD colspan=3 class="tr2 td110"><P class="p20 ft2"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
	<TD class="tr2 td90"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td106"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td19"><P class="p0 ft19">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td102"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td93"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td45"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td94"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td95"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td70"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr4 td96"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td97"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td107"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td99"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td100"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td8"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td100"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td101"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr4 td17"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td102"><P class="p2 ft5">-</P></TD>
	<TD class="tr5 td93"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr5 td45"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr5 td94"><P class="p3 ft5">-</P></TD>
	<TD class="tr5 td95"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr5 td70"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=4 class="tr5 td11"><P class="p4 ft5">Page</P></TD>
	<TD colspan=2 class="tr5 td103"><P class="p4 ft5">2 - 2</P></TD>
	<TD class="tr5 td8"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr5 td100"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr5 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr5 td17"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td104"><P class="p2 ft2">Address</P></TD>
	<TD class="tr2 td82"><P class="p0 ft19">&nbsp;</P></TD>
	<TD class="tr2 td41"><P class="p0 ft19">&nbsp;</P></TD>
	<TD colspan=4 class="tr2 td111"><P class="p3 ft2">'.$contentText['address'].'</P></TD>
	<TD colspan=5 class="tr2 td112"><P class="p0 ft2">&nbsp;&nbsp;</P></TD>
	<TD colspan=4 class="tr2 td113"><P class="p0 ft2">&nbsp;&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr6 td102"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td93"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td45"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td94"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td95"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td33"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td114"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td99"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td97"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td98"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td99"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td100"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td8"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td100"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td101"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td17"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr7 td92"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td93"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr7 td115"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td95"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td33"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td114"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td99"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td97"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td98"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td99"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td100"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td8"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td100"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td8"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD colspan=4 class="tr9 td116"><P class="p2 ft7">III. Additional Information</P></TD>
	<TD class="tr9 td85"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td86"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td87"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td88"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td89"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td87"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td90"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td21"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td90"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td117"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td21"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr6 td102"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td93"><P class="p0 ft6">&nbsp;</P></TD>
	<TD colspan=2 class="tr6 td115"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td95"><P class="p0 ft6">&nbsp;</P></TD>
	<TD colspan=2 class="tr6 td118"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td99"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td97"><P class="p0 ft6">&nbsp;</P></TD>
	<TD colspan=2 class="tr6 td119"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td100"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td8"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td100"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td120"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr15 td21"><P class="p0 ft16">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td121"><P class="p2 ft12">No</P></TD>
	<TD colspan=3 class="tr5 td122"><P class="p4 ft12">Jarak dari Kandidate</P></TD>
	<TD colspan=3 class="tr5 td123"><P class="p21 ft12">Tower Existing(Tenant)</P></TD>
	<TD class="tr5 td124"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=4 class="tr5 td125"><P class="p9 ft12">Jarak dari Kandidat</P></TD>
	<TD class="tr5 td19"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr5 td126"><P class="p22 ft12">Potensial Market</P></TD>
	<TD class="tr5 td21"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr6 td127"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td93"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td30"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td128"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td95"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td33"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td114"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td129"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td97"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td98"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td99"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td100"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td17"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td100"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td120"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr15 td21"><P class="p0 ft16">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td121"><P class="p2 ft12">&nbsp;</P></TD>
	<TD class="tr5 td82"><P class="p4 ft12">'.$jarak_dari_kandidat.'</P></TD>
	<TD class="tr5 td83"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr5 td130"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr5 td85"><P class="p4 ft12">'.$tower_existing.'</P></TD>
	<TD class="tr5 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr5 td86"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr5 td124"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr5 td131"><P class="p4 ft12">'.$jarak_dari_kandidat.'</P></TD>
	<TD class="tr5 td87"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr5 td90"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr5 td19"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr5 td90"><P class="p4 ft12">'.$potensi_market.'</P></TD>
	<TD class="tr5 td117"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr5 td21"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr22 td127"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td93"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td30"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td128"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td95"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td33"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td114"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td129"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td97"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td98"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td99"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td100"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td17"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td100"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td120"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr23 td21"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD colspan=2 class="tr9 td109"><P class="p2 ft7">IV. Site Historical</P></TD>
	<TD class="tr9 td83"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td84"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td85"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td86"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td87"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td88"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td89"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td87"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td90"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td21"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td90"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td117"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td21"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr24 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td93"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr24 td115"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td95"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=4 class="tr24 td132"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td98"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td99"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=3 class="tr24 td133"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td120"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr25 td21"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr9 td121"><P class="p2 ft9">No</P></TD>
	<TD class="tr9 td134"><P class="p4 ft9">Kandidat</P></TD>
	<TD colspan=2 class="tr9 td135"><P class="p4 ft9">E(Longitude)</P></TD>
	<TD class="tr9 td136"><P class="p4 ft9">N/S(Latitude</P></TD>
	<TD colspan=4 class="tr9 td137"><P class="p4 ft9">Contact Person</P></TD>
	<TD class="tr9 td89"><P class="p4 ft9">Masa Sewa</P></TD>
	<TD class="tr9 td124"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=3 class="tr9 td138"><P class="p4 ft9">Harga Sewa</P></TD>
	<TD class="tr9 td117"><P class="p4 ft9">Cancelation Remarks</P></TD>
	<TD class="tr9 td21"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr0 td127"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td139"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td30"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td128"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td140"><P class="p4 ft9">)</P></TD>
	<TD class="tr0 td33"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td114"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td99"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td141"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td98"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td129"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td100"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td8"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td142"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td120"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr7 td21"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr9 td121"><P class="p2 ft9">&nbsp;</P></TD>
	<TD class="tr9 td134"><P class="p4 ft9">'.$kandidates.'</P></TD>
	<TD colspan=2 class="tr9 td135"><P class="p4 ft9">'.$e_longiude.'</P></TD>
	<TD class="tr9 td136"><P class="p4 ft9">'.$ns_latitude.'</P></TD>
	<TD colspan=2 class="tr9 td110"><P class="p4 ft9">'.$contact_person.'</P></TD>
	<TD class="tr9 td87"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td143"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td89"><P class="p4 ft9">'.$masa_sewa.'</P></TD>
	<TD class="tr9 td124"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=3 class="tr9 td138"><P class="p4 ft9">'.$harga_sewa.'</P></TD>
	<TD class="tr9 td117"><P class="p4 ft9">'.$cancelation_remarks.'</P></TD>
	<TD class="tr9 td21"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr9 td121"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td134"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td83"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td130"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td136"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td86"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td87"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td143"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td89"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td124"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td90"><P class="p4 ft9">&nbsp;</P></TD>
	<TD class="tr9 td21"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td144"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td117"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr9 td21"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr26 td127"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr26 td139"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr26 td30"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr26 td128"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr26 td140"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr26 td33"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr26 td114"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr26 td99"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr26 td141"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr26 td98"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr26 td129"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr26 td100"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr26 td8"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr26 td142"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr26 td120"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr27 td21"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
</TABLE>
<TABLE cellpadding=0 cellspacing=0 class="t3">
<TR>
	<TD class="tr24 td145"><P class="p2 ft20">Type</P></TD>
	<TD class="tr24 td66"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td146"><P class="p0 ft20">Role</P></TD>
	<TD class="tr24 td147"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td148"><P class="p4 ft20">Name</P></TD>
	<TD class="tr24 td149"><P class="p4 ft20">Date</P></TD>
</TR>
<TR>
	<TD class="tr10 td150"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td71"><P class="p0 ft10">&nbsp;</P></TD>
	<TD colspan=2 class="tr10 td151"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td152"><P class="p0 ft10">&nbsp;</P></TD>
	<TD class="tr10 td153"><P class="p0 ft10">&nbsp;</P></TD>
</TR>
'.$approval_document.'
<TR>
	<TD class="tr28 td150"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td71"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td28"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td158"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td152"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td153"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD colspan=2 class="tr29 td159"><P class="p2 ft20">Note : '.$contentText['note'].'</P></TD>
	<TD class="tr29 td23"><P class="p10 ft20"></P>&nbsp;</TD>
	<TD colspan=2 class="tr29 td160"><P class="p0 ft20">&nbsp;</P></TD>
	<TD class="tr29 td161"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
</TABLE>
</DIV>
</BODY>
</HTML>';



$api_endpoint  = "https://selectpdf.com/api2/convert/";
$key           =  'b53a60b8-7af2-4a9f-bf0c-c03fbde4911a';
$helper        =& get_instance();
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