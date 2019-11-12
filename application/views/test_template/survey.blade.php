<?php
$contentImage  = json_decode($model["attachment"], true);
$contentText   = json_decode($model["attribute"], true);

echo $raw_html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META http-equiv="X-UA-Compatible" content="IE=8">
<TITLE>TSSR</TITLE>
<META name="generator" content="BCL easyConverter SDK 5.0.140">
<STYLE type="text/css">

body {margin-top: 0px;margin-left: 0px;}

#page_1 {position:relative; overflow: hidden;margin: 23px 0px 99px 49px;padding: 0px;border: none;width: 745px;}

#page_1 #p1dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:662px;height:698px;}
#page_1 #p1dimg1 #p1img1 {width:662px;height:698px;}




#page_2 {position:relative; overflow: hidden;margin: 23px 0px 209px 49px;padding: 0px;border: none;width: 664px;}

#page_2 #p2dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:662px;height:890px;}
#page_2 #p2dimg1 #p2img1 {width:662px;height:890px;}




#page_3 {position:relative; overflow: hidden;margin: 23px 0px 210px 49px;padding: 0px;border: none;width: 745px;}

#page_3 #p3dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:662px;height:873px;}
#page_3 #p3dimg1 #p3img1 {width:662px;height:873px;}




#page_4 {position:relative; overflow: hidden;margin: 23px 0px 210px 49px;padding: 0px;border: none;width: 745px;}

#page_4 #p4dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:662px;height:873px;}
#page_4 #p4dimg1 #p4img1 {width:662px;height:873px;}




#page_5 {position:relative; overflow: hidden;margin: 23px 0px 190px 49px;padding: 0px;border: none;width: 745px;}

#page_5 #p5dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:662px;height:893px;}
#page_5 #p5dimg1 #p5img1 {width:662px;height:893px;}




#page_6 {position:relative; overflow: hidden;margin: 23px 0px 188px 49px;padding: 0px;border: none;width: 745px;}

#page_6 #p6dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:662px;height:911px;}
#page_6 #p6dimg1 #p6img1 {width:662px;height:911px;}




#page_7 {position:relative; overflow: hidden;margin: 23px 0px 188px 49px;padding: 0px;border: none;width: 745px;}

#page_7 #p7dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:662px;height:911px;}
#page_7 #p7dimg1 #p7img1 {width:662px;height:911px;}




#page_8 {position:relative; overflow: hidden;margin: 23px 0px 188px 49px;padding: 0px;border: none;width: 745px;}

#page_8 #p8dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:662px;height:911px;}
#page_8 #p8dimg1 #p8img1 {width:662px;height:911px;}




#page_9 {position:relative; overflow: hidden;margin: 23px 0px 188px 49px;padding: 0px;border: none;width: 745px;}

#page_9 #p9dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:662px;height:911px;}
#page_9 #p9dimg1 #p9img1 {width:662px;height:911px;}




#page_10 {position:relative; overflow: hidden;margin: 23px 0px 188px 49px;padding: 0px;border: none;width: 745px;}

#page_10 #p10dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:662px;height:911px;}
#page_10 #p10dimg1 #p10img1 {width:662px;height:911px;}




#page_11 {position:relative; overflow: hidden;margin: 23px 0px 215px 49px;padding: 0px;border: none;width: 745px;height: 884px;}

#page_11 #p11dimg1 {position:absolute;top:0px;left:0px;z-index:-1;width:669px;height:884px;}
#page_11 #p11dimg1 #p11img1 {width:669px;height:884px;}




.dclr {clear:both;float:none;height:1px;margin:0px;padding:0px;overflow:hidden;}

.ft0{font: 1px "Times New Roman";line-height: 1px;}
.ft1{font: bold 11px "Times New Roman";line-height: 13px;}
.ft2{font: 12px "Times New Roman";line-height: 14px;}
.ft3{font: 12px "Times New Roman";line-height: 13px;}
.ft4{font: 1px "Times New Roman";line-height: 13px;}
.ft5{font: 1px "Times New Roman";line-height: 4px;}
.ft6{font: 1px "Times New Roman";line-height: 5px;}
.ft7{font: 1px "Times New Roman";line-height: 3px;}
.ft8{font: 1px "Times New Roman";line-height: 6px;}
.ft9{font: bold 16px "Times New Roman";line-height: 19px;}
.ft10{font: bold 16px "Times New Roman";line-height: 24px;}
.ft11{font: bold 13px "Times New Roman";line-height: 15px;}
.ft12{font: 13px "Times New Roman";line-height: 14px;}
.ft13{font: 13px "Times New Roman";line-height: 15px;}
.ft14{font: 1px "Times New Roman";line-height: 8px;}
.ft15{font: bold 12px "Times New Roman";line-height: 15px;}
.ft16{font: 1px "Times New Roman";line-height: 12px;}
.ft17{font: 1px "Times New Roman";line-height: 11px;}
.ft18{font: 1px "Times New Roman";line-height: 10px;}
.ft19{font: 12px "Times New Roman";line-height: 15px;}
.ft20{font: bold 7px "Times New Roman";line-height: 8px;}
.ft21{font: 1px "Times New Roman";line-height: 7px;}
.ft22{font: 1px "Times New Roman";line-height: 9px;}
.ft23{font: 11px "Times New Roman";line-height: 14px;}
.ft24{font: bold 6px "Times New Roman";line-height: 6px;}
.ft25{font: 1px "Times New Roman";line-height: 2px;}
.ft26{font: bold 12px "Times New Roman";line-height: 13px;}
.ft27{font: bold 19px "Arial";line-height: 22px;}
.ft28{font: 11px "Arial";line-height: 14px;}
.ft29{font: bold 14px "Times New Roman";line-height: 17px;}
.ft30{font: bold 14px "Arial";text-decoration: underline;line-height: 16px;}
.ft31{font: bold 14px "Arial";line-height: 16px;}
.ft32{font: 14px "Arial";line-height: 16px;}
.ft33{font: bold 17px "Arial";line-height: 19px;}
.ft34{font: 7px "Arial";line-height: 7px;position: relative; bottom: 5px;}

.p0{text-align: left;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p1{text-align: left;padding-left: 64px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p2{text-align: left;padding-left: 8px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p3{text-align: left;padding-left: 6px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p4{text-align: left;padding-left: 4px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p5{text-align: left;padding-left: 7px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p6{text-align: left;padding-left: 195px;margin-top: 21px;margin-bottom: 0px;}
.p7{text-align: left;padding-left: 26px;padding-right: 57px;margin-top: 37px;margin-bottom: 0px;}
.p8{text-align: left;padding-left: 83px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p9{text-align: left;padding-left: 47px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p10{text-align: left;padding-left: 16px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p11{text-align: left;padding-left: 80px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p12{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:75px;height:17px;}
.p13{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:80px;height:18px;}
.p14{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:99px;height:17px;}
.p15{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:94px;height:18px;}
.p16{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:66px;height:22px;}
.p17{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:52px;height:17px;}
.p18{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:52px;height:18px;}
.p19{text-align: left;padding-left: 61px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p20{text-align: left;padding-left: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p21{text-align: left;padding-left: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p22{text-align: right;padding-right: 80px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p23{text-align: left;padding-left: 5px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p24{text-align: left;padding-left: 32px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p25{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:51px;height:23px;}
.p26{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:32px;height:18px;}
.p27{text-align: left;padding-left: 46px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p28{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:30px;height:16px;}
.p29{text-align: left;margin-top: 0px;margin-bottom: 0px;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);direction: rtl;block-progression: lr;width:44px;height:23px;}
.p30{text-align: right;padding-right: 47px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p31{text-align: right;padding-right: 116px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p32{text-align: left;padding-left: 55px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p33{text-align: left;padding-left: 233px;margin-top: 23px;margin-bottom: 0px;}
.p331{text-align: left;padding-left: 103px;margin-top: 23px;margin-bottom: 0px;}
.p34{text-align: left;padding-left: 11px;margin-top: 709px;margin-bottom: 0px;}
.p35{text-align: left;padding-left: 273px;margin-top: 23px;margin-bottom: 0px;}
.p36{text-align: left;padding-left: 258px;margin-top: 23px;margin-bottom: 0px;}
.p37{text-align: left;padding-left: 12px;padding-right: 452px;margin-top: 693px;margin-bottom: 0px;}
.p38{text-align: left;padding-left: 11px;margin-top: 0px;margin-bottom: 0px;}
.p39{text-align: left;padding-left: 158px;margin-top: 24px;margin-bottom: 0px;}
.p40{text-align: left;padding-left: 128px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p41{text-align: left;padding-left: 129px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p42{text-align: left;padding-left: 123px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p43{text-align: left;padding-left: 121px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p44{text-align: left;padding-left: 126px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p45{text-align: left;padding-left: 120px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p46{text-align: left;padding-left: 109px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p47{text-align: left;padding-left: 111px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p48{text-align: left;padding-left: 85px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p49{text-align: left;padding-left: 90px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p50{text-align: left;padding-left: 84px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p51{text-align: left;padding-left: 78px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p52{text-align: left;padding-left: 59px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p53{text-align: left;padding-left: 44px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p54{text-align: left;padding-left: 60px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p55{text-align: left;padding-left: 41px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p56{text-align: left;padding-left: 42px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p57{text-align: left;padding-left: 189px;margin-top: 34px;margin-bottom: 0px;}
.p58{text-align: left;padding-left: 88px;margin-top: 227px;margin-bottom: 0px;}
.p59{text-align: left;padding-left: 81px;margin-top: 241px;margin-bottom: 0px;}

.td0{padding: 0px;margin: 0px;width: 133px;vertical-align: bottom;}
.td1{padding: 0px;margin: 0px;width: 148px;vertical-align: bottom;}
.td2{padding: 0px;margin: 0px;width: 137px;vertical-align: bottom;}
.td3{padding: 0px;margin: 0px;width: 53px;vertical-align: bottom;}
.td4{padding: 0px;margin: 0px;width: 3px;vertical-align: bottom;}
.td5{padding: 0px;margin: 0px;width: 190px;vertical-align: bottom;}
.td6{border-left: #000000 1px solid;border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 131px;vertical-align: bottom;}
.td7{border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 147px;vertical-align: bottom;}
.td8{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 137px;vertical-align: bottom;}
.td9{border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 52px;vertical-align: bottom;}
.td10{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 3px;vertical-align: bottom;}
.td11{border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 187px;vertical-align: bottom;}
.td12{padding: 0px;margin: 0px;width: 2px;vertical-align: bottom;}
.td13{border-left: #000000 1px solid;border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 131px;vertical-align: bottom;}
.td14{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 147px;vertical-align: bottom;}
.td15{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 52px;vertical-align: bottom;}
.td16{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 187px;vertical-align: bottom;}
.td17{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 131px;vertical-align: bottom;}
.td18{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 147px;vertical-align: bottom;}
.td19{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 137px;vertical-align: bottom;}
.td20{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 52px;vertical-align: bottom;}
.td21{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 3px;vertical-align: bottom;}
.td22{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 187px;vertical-align: bottom;}
.td23{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 190px;vertical-align: bottom;}
.td24{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 55px;vertical-align: bottom;}
.td25{padding: 0px;margin: 0px;width: 285px;vertical-align: bottom;}
.td26{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 243px;vertical-align: bottom;}
.td27{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 148px;vertical-align: bottom;}
.td28{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 53px;vertical-align: bottom;}
.td29{padding: 0px;margin: 0px;width: 81px;vertical-align: bottom;}
.td30{padding: 0px;margin: 0px;width: 146px;vertical-align: bottom;}
.td31{padding: 0px;margin: 0px;width: 227px;vertical-align: bottom;}
.td32{border-left: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 26px;vertical-align: bottom;}
.td33{border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 19px;vertical-align: bottom;}
.td34{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 23px;vertical-align: bottom;}
.td35{border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 146px;vertical-align: bottom;}
.td36{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;}
.td37{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 127px;vertical-align: bottom;}
.td38{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 89px;vertical-align: bottom;}
.td39{border-right: #000000 1px solid;border-top: #000000 1px solid;padding: 0px;margin: 0px;width: 188px;vertical-align: bottom;}
.td40{border-left: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 26px;vertical-align: bottom;}
.td41{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 19px;vertical-align: bottom;}
.td42{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 23px;vertical-align: bottom;}
.td43{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 146px;vertical-align: bottom;}
.td44{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;}
.td45{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 127px;vertical-align: bottom;}
.td46{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 89px;vertical-align: bottom;}
.td47{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 188px;vertical-align: bottom;}
.td48{border-left: #000000 1px solid;padding: 0px;margin: 0px;width: 26px;vertical-align: bottom;}
.td49{padding: 0px;margin: 0px;width: 19px;vertical-align: bottom;}
.td50{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 23px;vertical-align: bottom;}
.td51{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;}
.td52{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 127px;vertical-align: bottom;}
.td53{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 89px;vertical-align: bottom;}
.td54{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 188px;vertical-align: bottom;}
.td55{padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;}
.td56{padding: 0px;margin: 0px;width: 28px;vertical-align: bottom;}
.td57{padding: 0px;margin: 0px;width: 96px;vertical-align: bottom;}
.td58{padding: 0px;margin: 0px;width: 4px;vertical-align: bottom;}
.td59{padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;}
.td60{padding: 0px;margin: 0px;width: 61px;vertical-align: bottom;}
.td61{padding: 0px;margin: 0px;width: 77px;vertical-align: bottom;}
.td62{padding: 0px;margin: 0px;width: 187px;vertical-align: bottom;}
.td63{border-left: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 8px;vertical-align: bottom;}
.td64{border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 123px;vertical-align: bottom;}
.td65{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 4px;vertical-align: bottom;}
.td66{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;}
.td67{border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 60px;vertical-align: bottom;}
.td68{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 77px;vertical-align: bottom;}
.td69{border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 19px;vertical-align: bottom;}
.td70{border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 95px;vertical-align: bottom;}
.td71{border-right: #000000 1px solid;border-top: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 184px;vertical-align: bottom;}
.td72{border-left: #000000 1px solid;padding: 0px;margin: 0px;width: 8px;vertical-align: bottom;}
.td73{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 123px;vertical-align: bottom;}
.td74{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 60px;vertical-align: bottom;}
.td75{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 191px;vertical-align: bottom;}
.td76{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 184px;vertical-align: bottom;}
.td77{border-left: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 8px;vertical-align: bottom;}
.td78{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 28px;vertical-align: bottom;}
.td79{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 95px;vertical-align: bottom;}
.td80{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 4px;vertical-align: bottom;}
.td81{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;}
.td82{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 60px;vertical-align: bottom;}
.td83{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 77px;vertical-align: bottom;}
.td84{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 2px;vertical-align: bottom;}
.td85{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 45px;vertical-align: bottom;}
.td86{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 95px;vertical-align: bottom;}
.td87{padding: 0px;margin: 0px;width: 141px;vertical-align: bottom;}
.td88{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 45px;vertical-align: bottom;}
.td89{border-left: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 36px;vertical-align: bottom;}
.td90{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 141px;vertical-align: bottom;}
.td91{padding: 0px;margin: 0px;width: 221px;vertical-align: bottom;}
.td92{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 303px;vertical-align: bottom;}
.td93{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 157px;vertical-align: bottom;}
.td94{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 96px;vertical-align: bottom;}
.td95{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 28px;vertical-align: bottom;}
.td96{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 96px;vertical-align: bottom;}
.td97{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 4px;vertical-align: bottom;}
.td98{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 83px;vertical-align: bottom;}
.td99{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 157px;vertical-align: bottom;}
.td100{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 137px;vertical-align: bottom;}
.td101{padding: 0px;margin: 0px;width: 46px;vertical-align: bottom;}
.td102{border-right: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 8px;vertical-align: bottom;}
.td103{padding: 0px;margin: 0px;width: 253px;vertical-align: bottom;}
.td104{border-right: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 136px;vertical-align: bottom;}
.td105{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 100px;vertical-align: bottom;}
.td106{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 138px;vertical-align: bottom;}
.td107{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 19px;vertical-align: bottom;}
.td108{border-right: #3e3e3e 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 136px;vertical-align: bottom;}
.td109{border-right: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 27px;vertical-align: bottom;}
.td110{padding: 0px;margin: 0px;width: 100px;vertical-align: bottom;}
.td111{border-right: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 82px;vertical-align: bottom;}
.td112{padding: 0px;margin: 0px;width: 138px;vertical-align: bottom;}
.td113{border-right: #3e3e3e 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 82px;vertical-align: bottom;}
.td114{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 61px;vertical-align: bottom;}
.td115{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 77px;vertical-align: bottom;}
.td116{border-right: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 182px;vertical-align: bottom;}
.td117{border-right: #3e3e3e 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 27px;vertical-align: bottom;}
.td118{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 2px;vertical-align: bottom;}
.td119{border-right: #3e3e3e 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 182px;vertical-align: bottom;}
.td120{padding: 0px;margin: 0px;width: 50px;vertical-align: bottom;}
.td121{border-right: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td122{border-right: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 3px;vertical-align: bottom;}
.td123{border-right: #3e3e3e 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 156px;vertical-align: bottom;}
.td124{border-right: #3e3e3e 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 99px;vertical-align: bottom;}
.td125{border-right: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 393px;vertical-align: bottom;}
.td126{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 136px;vertical-align: bottom;}
.td127{border-right: #000000 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 136px;vertical-align: bottom;}
.td128{border-right: #3e3e3e 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td129{border-right: #3e3e3e 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 3px;vertical-align: bottom;}
.td130{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 253px;vertical-align: bottom;}
.td131{border-right: #3e3e3e 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 393px;vertical-align: bottom;}
.td132{border-left: #3e3e3e 1px solid;border-right: #3e3e3e 1px solid;border-top: #3e3e3e 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 319px;vertical-align: bottom;}
.td133{border-right: #3e3e3e 1px solid;border-top: #3e3e3e 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 332px;vertical-align: bottom;}
.td134{border-left: #3e3e3e 1px solid;border-right: #3e3e3e 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 319px;vertical-align: bottom;}
.td135{border-right: #3e3e3e 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 332px;vertical-align: bottom;}
.td136{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 321px;vertical-align: bottom;}
.td137{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 333px;vertical-align: bottom;}
.td138{border-left: #3e3e3e 1px solid;border-right: #3e3e3e 1px solid;border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 318px;vertical-align: bottom;}
.td139{border-bottom: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 320px;vertical-align: bottom;}
.td140{border-left: #3e3e3e 1px solid;border-right: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 319px;vertical-align: bottom;}
.td141{border-right: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 332px;vertical-align: bottom;}
.td142{border-left: #3e3e3e 1px solid;border-right: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 318px;vertical-align: bottom;}
.td143{border-left: #3e3e3e 1px solid;border-right: #3e3e3e 1px solid;border-top: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 319px;vertical-align: bottom;}
.td144{border-right: #3e3e3e 1px solid;border-top: #3e3e3e 1px solid;padding: 0px;margin: 0px;width: 332px;vertical-align: bottom;}

.tr0{height: 16px;}
.tr1{height: 14px;}
.tr2{height: 13px;}
.tr3{height: 4px;}
.tr4{height: 5px;}
.tr5{height: 3px;}
.tr6{height: 6px;}
.tr7{height: 22px;}
.tr8{height: 27px;}
.tr9{height: 29px;}
.tr10{height: 17px;}
.tr11{height: 44px;}
.tr12{height: 89px;}
.tr13{height: 88px;}
.tr14{height: 80px;}
.tr15{height: 15px;}
.tr16{height: 23px;}
.tr17{height: 99px;}
.tr18{height: 8px;}
.tr19{height: 67px;}
.tr20{height: 66px;}
.tr21{height: 52px;}
.tr22{height: 18px;}
.tr23{height: 12px;}
.tr24{height: 21px;}
.tr25{height: 11px;}
.tr26{height: 10px;}
.tr27{height: 51px;}
.tr28{height: 19px;}
.tr29{height: 32px;}
.tr30{height: 20px;}
.tr31{height: 24px;}
.tr32{height: 7px;}
.tr33{height: 9px;}
.tr34{height: 30px;}
.tr35{height: 28px;}
.tr36{height: 2px;}
.tr37{height: 202px;}
.tr38{height: 203px;}

.t0{width: 664px;margin-top: 21px;font: 12px "Times New Roman";}
.t1{width: 227px;margin-left: 26px;margin-top: 41px;font: bold 16px "Times New Roman";}
.t2{width: 670px;margin-left: 19px;margin-top: 32px;font: 13px "Times New Roman";}
.t3{width: 653px;margin-left: 7px;margin-top: 16px;font: 7px "Arial";}
.t4{width: 652px;margin-left: 8px;margin-top: 1px;font: 7px "Arial";}
.t5{width: 653px;margin-left: 7px;margin-top: 1px;font: 7px "Arial";}
.t6{width: 653px;margin-left: 7px;margin-top: 16px;font: 11px "Arial";}
.t7{width: 652px;margin-left: 8px;margin-top: 1px;font: 11px "Arial";}
.t8{width: 653px;margin-left: 7px;margin-top: 1px;font: 11px "Arial";}

</STYLE>
</HEAD>

<BODY>
<DIV id="page_1">
<DIV id="p1dimg1">
<img src="'.base_url('uploads/surveysitac/logo_ibs.png').'" width="100px" height="40px" alt="">
</DIV>


<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
	<TD class="tr0 td0"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td1"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td2"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td3"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td4"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr0 td5"><P class="p1 ft1">Document Name : TSSR</P></TD>
</TR>
<TR>
	<TD class="tr1 td6"><P class="p2 ft2">No WBS</P></TD>
	<TD class="tr1 td7"><P class="p3 ft2">'.$wbs_id['wbs_id'].'</P></TD>
	<TD class="tr1 td8"><P class="p3 ft2">Tenant</P></TD>
	<TD class="tr1 td9"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td10"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td11"><P class="p4 ft2">'.$wbs_id['tenant'].'</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE ID</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_id'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Contractor Name</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td4"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td16"><P class="p4 ft3">'.$contentText['contractor'].'</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td17"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td18"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td19"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td20"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td21"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td22"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE Name</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_name'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Date</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td23"><P class="p5 ft3"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td17"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td18"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td19"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td20"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td21"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td22"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr3 td12"><P class="p0 ft5">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td17"><P class="p2 ft3">-</P></TD>
	<TD class="tr2 td18"><P class="p3 ft3">-</P></TD>
	<TD class="tr2 td19"><P class="p3 ft3">Page</P></TD>
	<TD colspan=2 class="tr2 td24"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td22"><P class="p4 ft3">1 - 11</P></TD>
	<TD class="tr1 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">Address</P></TD>
	<TD colspan=2 class="tr2 td25"><P class="p3 ft3">'.$contentText['site_address'].'</P></TD>
	<TD colspan=3 class="tr2 td26"><P class="p0 ft3">&nbsp;&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td17"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td27"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td19"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td28"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td21"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td22"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td12"><P class="p0 ft8">&nbsp;</P></TD>
</TR>
</TABLE>
<P class="p6 ft9">TECHNICAL SITE SURVEY REPORT ( TSSR )</P>
<TABLE cellpadding=0 cellspacing=0 class="t1">
<TR>
	<TD class="tr7 td29"><P class="p0 ft9">SITE ID</P></TD>
	<TD class="tr7 td30"><P class="p0 ft9">: '.$contentText['site_id'].'</P></TD>
</TR>
<TR>
	<TD colspan=2 class="tr8 td31"><P class="p0 ft9">SITE NAME: '.$contentText['site_name'].'</P></TD>
</TR>
<TR>
	<TD class="tr8 td29"><P class="p0 ft9">REGION</P></TD>
	<TD class="tr8 td30"><P class="p0 ft9">: '.$contentText['region'].'</P></TD>
</TR>
<TR>
	<TD class="tr9 td29"><P class="p0 ft9">SITE TYPE</P></TD>
	<TD class="tr9 td30"><P class="p0 ft9">: '.$contentText['site_type'].'</P></TD>
</TR>
</TABLE>
<P class="p7 ft10">We Hereby guarantee that approval proccess for ESSR can be conducted, for there shall be no significant difficulties in applying for the IMB For this site</P>
<TABLE cellpadding=0 cellspacing=0 class="t2">
<TR>
	<TD class="tr10 td32"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr10 td33"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr10 td34"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr10 td35"><P class="p8 ft11">Title</P></TD>
	<TD class="tr10 td36"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr10 td37"><P class="p9 ft11">Name</P></TD>
	<TD class="tr10 td38"><P class="p10 ft11">Signature</P></TD>
	<TD class="tr10 td39"><P class="p11 ft11">Date</P></TD>
</TR>
<TR>
	<TD class="tr11 td40"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr11 td41"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr11 td42"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr11 td43"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr11 td44"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr11 td45"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr11 td46"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr11 td47"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr1 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td50"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td30"><P class="p5 ft12">Contractor</P></TD>
	<TD class="tr1 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td52"><P class="p3 ft12">'.$contentText['contractor'].'</P></TD>
	<TD class="tr1 td53"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td54"><P class="p3 ft12"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
</TR>
<TR>
	<TD class="tr12 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr12 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr12 td50"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr13 td43"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr13 td44"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr13 td45"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr13 td46"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr13 td47"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr1 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td50"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td30"><P class="p5 ft12">Project Manager</P></TD>
	<TD class="tr1 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td52"><P class="p3 ft12">'.$contentText['project_manger'].'</P></TD>
	<TD class="tr1 td53"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td54"><P class="p3 ft12"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
</TR>
<TR>
	<TD class="tr14 td48"><!--[if lte IE 7]><P style="margin-left:9px;margin-top:-5px;margin-right:-67px;margin-bottom:5px;" class="p12 ft1"><![endif]--><!--[if gte IE 8]><P style="margin-left:-49px;margin-top:-5px;margin-right:-9px;margin-bottom:63px;" class="p12 ft1"><![endif]--><![if ! IE]><P style="margin-left:-20px;margin-top:24px;margin-right:-38px;margin-bottom:34px;" class="p12 ft1"><![endif]>Prepared By</P></TD>
	<TD class="tr14 td49"><!--[if lte IE 7]><P style="margin-left:1px;margin-top:0px;margin-right:-63px;margin-bottom:0px;" class="p13 ft1"><![endif]--><!--[if gte IE 8]><P style="margin-left:-61px;margin-top:0px;margin-right:-1px;margin-bottom:62px;" class="p13 ft1"><![endif]--><![if ! IE]><P style="margin-left:-30px;margin-top:31px;margin-right:-32px;margin-bottom:31px;" class="p13 ft1"><![endif]>(By Contacor)</P></TD>
	<TD class="tr14 td50"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr14 td30"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr14 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr14 td52"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr14 td53"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr14 td54"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td40"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td41"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td42"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td43"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td44"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td45"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td46"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td47"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr15 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td50"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td30"><P class="p5 ft13">SITAC HO</P></TD>
	<TD class="tr15 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td52"><P class="p3 ft13">'.$contentText['sitac_ho'].'</P></TD>
	<TD class="tr15 td53"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td54"><P class="p3 ft13"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
</TR>
<TR>
	<TD class="tr16 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr16 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr16 td50"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr16 td30"><P class="p5 ft13">(Initial by Sitac & CME</P></TD>
	<TD class="tr16 td51"><P class="p0 ft13">Reg)</P></TD>
	<TD class="tr16 td52"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr16 td53"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr16 td54"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr17 td48"><!--[if lte IE 7]><P style="margin-left:9px;margin-top:0px;margin-right:-91px;margin-bottom:0px;" class="p14 ft1"><![endif]--><!--[if gte IE 8]><P style="margin-left:-73px;margin-top:0px;margin-right:-9px;margin-bottom:82px;" class="p14 ft1"><![endif]--><![if ! IE]><P style="margin-left:-32px;margin-top:41px;margin-right:-50px;margin-bottom:41px;" class="p14 ft1"><![endif]>Checked By</P></TD>
	<TD class="tr17 td49"><!--[if lte IE 7]><P style="margin-left:1px;margin-top:-5px;margin-right:-77px;margin-bottom:5px;" class="p15 ft1"><![endif]--><!--[if gte IE 8]><P style="margin-left:-75px;margin-top:-5px;margin-right:-1px;margin-bottom:81px;" class="p15 ft1"><![endif]--><![if ! IE]><P style="margin-left:-37px;margin-top:33px;margin-right:-39px;margin-bottom:43px;" class="p15 ft1"><![endif]>(IBS Regional)</P></TD>
	<TD class="tr17 td50"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr17 td30"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr17 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr17 td52"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr17 td53"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr17 td54"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr18 td40"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td41"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td42"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td43"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td44"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td45"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td46"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td47"><P class="p0 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr1 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td50"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td30"><P class="p5 ft12">RF</P></TD>
	<TD class="tr1 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td52"><P class="p3 ft12">'.$contentText['rf'].'</P></TD>
	<TD class="tr1 td53"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td54"><P class="p3 ft12"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
</TR>
<TR>
	<TD class="tr19 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr19 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr19 td50"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr20 td43"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr20 td44"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr20 td45"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr20 td46"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr20 td47"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr1 td48"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD rowspan=2 class="tr20 td50"><!--[if lte IE 7]><P style="margin-left:1px;margin-top:0px;margin-right:-45px;margin-bottom:0px;" class="p16 ft1"><![endif]--><!--[if gte IE 8]><P style="margin-left:-43px;margin-top:0px;margin-right:-1px;margin-bottom:44px;" class="p16 ft1"><![endif]--><![if ! IE]><P style="margin-left:-21px;margin-top:22px;margin-right:-23px;margin-bottom:22px;" class="p16 ft1"><![endif]>(Operator)</P></TD>
	<TD class="tr1 td30"><P class="p5 ft12">TX</P></TD>
	<TD class="tr1 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td52"><P class="p3 ft12">'.$contentText['tx'].'</P></TD>
	<TD class="tr1 td53"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td54"><P class="p3 ft12"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
</TR>
<TR>
	<TD class="tr21 td48"><!--[if lte IE 7]><P style="margin-left:9px;margin-top:0px;margin-right:-44px;margin-bottom:0px;" class="p17 ft1"><![endif]--><!--[if gte IE 8]><P style="margin-left:-26px;margin-top:0px;margin-right:-9px;margin-bottom:35px;" class="p17 ft1"><![endif]--><![if ! IE]><P style="margin-left:-9px;margin-top:18px;margin-right:-26px;margin-bottom:17px;" class="p17 ft1"><![endif]>Approved</P></TD>
	<TD class="tr21 td49"><!--[if lte IE 7]><P style="margin-left:1px;margin-top:0px;margin-right:-35px;margin-bottom:0px;" class="p18 ft1"><![endif]--><!--[if gte IE 8]><P style="margin-left:-33px;margin-top:0px;margin-right:-1px;margin-bottom:34px;" class="p18 ft1"><![endif]--><![if ! IE]><P style="margin-left:-16px;margin-top:17px;margin-right:-18px;margin-bottom:17px;" class="p18 ft1"><![endif]>By</P></TD>
	<TD class="tr21 td30"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td51"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td52"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td53"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr21 td54"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr18 td40"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td41"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td42"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td43"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td44"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td45"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td46"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td47"><P class="p0 ft14">&nbsp;</P></TD>
</TR>
</TABLE>
</DIV>
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
<BR/>
<BR/>
<BR/>
<BR/>
<BR/>
<BR/>
<BR/>
<BR/>
<BR/>
<DIV id="page_2">
<DIV id="p2dimg1">
<img src="'.base_url('uploads/surveysitac/logo_ibs.png').'" width="100px" height="40px" alt="">
</DIV>


<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
	<TD class="tr0 td55"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td56"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td59"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td60"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td61"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=4 class="tr0 td62"><P class="p19 ft1">Document Name : TSSR</P></TD>
</TR>
<TR>
	<TD class="tr1 td63"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr1 td64"><P class="p0 ft2">No WBS</P></TD>
	<TD class="tr1 td65"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td66"><P class="p20 ft2">'.$wbs_id['wbs_id'].'</P></TD>
	<TD class="tr1 td67"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td68"><P class="p3 ft2">Tenant</P></TD>
	<TD class="tr1 td69"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td70"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td65"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=3 class="tr1 td71"><P class="p21 ft2">'.$wbs_id['tenant'].'</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td72"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td73"><P class="p0 ft3">SITE ID</P></TD>
	<TD class="tr2 td58"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td59"><P class="p20 ft3">'.$contentText['site_id'].'</P></TD>
	<TD class="tr2 td74"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=3 class="tr2 td75"><P class="p3 ft3">Contractor Name</P></TD>
	<TD class="tr2 td58"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=3 class="tr2 td76"><P class="p21 ft3">'.$contentText['contractor'].'</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td77"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td78"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td79"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td80"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td81"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td82"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td83"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td41"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td79"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td80"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td19"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td84"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td85"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td72"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td73"><P class="p0 ft3">SITE Name</P></TD>
	<TD class="tr2 td58"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td59"><P class="p20 ft3">'.$contentText['site_name'].'</P></TD>
	<TD class="tr2 td74"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td61"><P class="p3 ft3">Date</P></TD>
	<TD class="tr2 td49"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td86"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td87"><P class="p22 ft3"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td88"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td77"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td78"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td79"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td80"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td81"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td82"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td83"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td41"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td79"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td80"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td19"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td84"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td85"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr3 td12"><P class="p0 ft5">&nbsp;</P></TD>
</TR>
<TR>
	<TD colspan=2 class="tr2 td89"><P class="p2 ft3">-</P></TD>
	<TD class="tr2 td79"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td80"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td81"><P class="p20 ft3">-</P></TD>
	<TD class="tr2 td82"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td83"><P class="p3 ft3">Page</P></TD>
	<TD class="tr2 td41"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td79"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td90"><P class="p23 ft3">1 - 11</P></TD>
	<TD class="tr2 td84"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td85"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr1 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td72"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td73"><P class="p0 ft3">Address</P></TD>
	<TD class="tr2 td58"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=3 class="tr2 td91"><P class="p20 ft3">'.$contentText['site_address'].'</P></TD>
	<TD colspan=6 class="tr2 td92"><P class="p0 ft3">&nbsp;&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td77"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td78"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td79"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td80"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td81"><P class="p0 ft6">&nbsp;</P></TD>
	<TD colspan=3 class="tr4 td93"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td94"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td80"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td19"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td84"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td85"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td12"><P class="p0 ft8">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr22 td55"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr10 td95"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr10 td96"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr10 td97"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr10 td98"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=3 class="tr10 td99"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr10 td96"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr10 td97"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr10 td100"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr22 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td56"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td59"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=4 class="tr22 td103"><P class="p24 ft15">SITE IDENTIFICATION</P></TD>
	<TD class="tr22 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td102"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr23 td95"><P class="p0 ft16">&nbsp;</P></TD>
	<TD colspan=2 class="tr23 td105"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td98"><P class="p0 ft16">&nbsp;</P></TD>
	<TD colspan=2 class="tr23 td106"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td107"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td96"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td97"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td108"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td101"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr24 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr24 td110"><P class="p0 ft15">Site ID</P></TD>
	<TD class="tr24 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr24 td112"><P class="p20 ft15">'.$contentText['site_id'].'</P></TD>
	<TD class="tr24 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr25 td102"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td109"><P class="p0 ft17">&nbsp;</P></TD>
	<TD colspan=2 class="tr26 td105"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td113"><P class="p0 ft18">&nbsp;</P></TD>
	<TD colspan=2 class="tr26 td106"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td107"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td96"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td97"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td108"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr25 td12"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td101"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td12"><P class="p0 ft17">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr24 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD rowspan=3 class="tr27 td109"><!--[if lte IE 7]><P style="margin-left:4px;margin-top:0px;margin-right:-32px;margin-bottom:0px;" class="p25 ft1"><![endif]--><!--[if gte IE 8]><P style="margin-left:-24px;margin-top:0px;margin-right:-4px;margin-bottom:28px;" class="p25 ft1"><![endif]--><![if ! IE]><P style="margin-left:-10px;margin-top:14px;margin-right:-18px;margin-bottom:14px;" class="p25 ft1"><![endif]>Request</P></TD>
	<TD colspan=2 class="tr24 td110"><P class="p0 ft19">Site Name</P></TD>
	<TD class="tr24 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr24 td112"><P class="p20 ft15">'.$contentText['site_name'].'</P></TD>
	<TD class="tr24 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr24 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr25 td102"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr26 td96"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td97"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td113"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td114"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td115"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td107"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td96"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td97"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td108"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr25 td12"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td101"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td12"><P class="p0 ft17">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr28 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=3 rowspan=2 class="tr7 td116"><P class="p0 ft19">Nominal (Long / Lat)</P></TD>
	<TD colspan=2 rowspan=2 class="tr7 td112"><P class="p20 ft15">'.$contentText['nominal_long'].'° /  <NOBR>'.$contentText['nominal_lat'].'°</NOBR></P></TD>
	<TD class="tr28 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td102"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td109"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td49"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td57"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td58"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td104"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td12"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td101"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td12"><P class="p0 ft7">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr23 td102"><P class="p0 ft16">&nbsp;</P></TD>
	<TD rowspan=2 class="tr29 td109"><!--[if lte IE 7]><P style="margin-left:9px;margin-top:0px;margin-right:-23px;margin-bottom:0px;" class="p26 ft20"><![endif]--><!--[if gte IE 8]><P style="margin-left:-5px;margin-top:0px;margin-right:-9px;margin-bottom:14px;" class="p26 ft20"><![endif]--><![if ! IE]><P style="margin-left:2px;margin-top:7px;margin-right:-16px;margin-bottom:7px;" class="p26 ft20"><![endif]>Operator</P></TD>
	<TD class="tr25 td96"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td97"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td113"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td114"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td115"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td107"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td96"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td97"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td108"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr23 td12"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td101"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td12"><P class="p0 ft16">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr30 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 rowspan=2 class="tr16 td110"><P class="p0 ft19">Search Radius</P></TD>
	<TD class="tr30 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 rowspan=2 class="tr16 td112"><P class="p20 ft15">'.$contentText['search_radius'].'</P></TD>
	<TD class="tr30 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr30 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr30 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr30 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr30 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr30 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr30 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td102"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td109"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td111"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td49"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td57"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td58"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td104"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td12"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td101"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td12"><P class="p0 ft7">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td102"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td109"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr23 td105"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td113"><P class="p0 ft16">&nbsp;</P></TD>
	<TD colspan=2 class="tr23 td106"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td107"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td96"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td97"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td108"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td101"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr31 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr31 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr31 td110"><P class="p0 ft19">Antena Height</P></TD>
	<TD class="tr31 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr31 td112"><P class="p20 ft15">'.$contentText['antena_height'].' m</P></TD>
	<TD class="tr31 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr31 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr31 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr31 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr31 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr31 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr31 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr1 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr2 td117"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td96"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td97"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td113"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=3 class="tr2 td99"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td96"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td97"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td108"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td118"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr1 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr15 td55"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td95"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td96"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td97"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td98"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=3 class="tr1 td99"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td96"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td97"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td100"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td118"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr0 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td59"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=4 class="tr0 td103"><P class="p27 ft15">Candidate Information</P></TD>
	<TD class="tr0 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr25 td102"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td109"><P class="p0 ft17">&nbsp;</P></TD>
	<TD colspan=2 class="tr26 td105"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td98"><P class="p0 ft18">&nbsp;</P></TD>
	<TD colspan=2 class="tr26 td106"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td107"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td96"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td97"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td108"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr25 td12"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td101"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td12"><P class="p0 ft17">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr28 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr28 td110"><P class="p0 ft19">Candidate</P></TD>
	<TD class="tr28 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr28 td112"><P class="p20 ft15">'.$contentText['candidate'].'</P></TD>
	<TD class="tr28 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr18 td102"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td109"><P class="p0 ft14">&nbsp;</P></TD>
	<TD colspan=3 class="tr32 td119"><P class="p0 ft21">&nbsp;</P></TD>
	<TD colspan=2 class="tr32 td106"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td107"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td96"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td97"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td108"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr18 td12"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td101"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td12"><P class="p0 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr28 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=3 class="tr28 td116"><P class="p0 ft19">Coordinate (Long / Lat)</P></TD>
	<TD colspan=2 class="tr28 td112"><P class="p20 ft19">'.$contentText['candidate_long'].'°/ <NOBR>'.$contentText['candidate_lat'].'°</NOBR></P></TD>
	<TD class="tr28 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr33 td102"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td109"><P class="p0 ft22">&nbsp;</P></TD>
	<TD colspan=3 class="tr18 td119"><P class="p0 ft14">&nbsp;</P></TD>
	<TD colspan=2 class="tr18 td106"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td107"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td96"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td97"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td108"><P class="p0 ft14">&nbsp;</P></TD>
	<TD colspan=3 class="tr33 td120"><P class="p0 ft22">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr22 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=3 class="tr22 td116"><P class="p0 ft19">Distance From NOM</P></TD>
	<TD colspan=2 class="tr22 td112"><P class="p20 ft19">'.$contentText['distance_from_nom'].' m</P></TD>
	<TD class="tr22 td121"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td57"><P class="p21 ft19">Azimuth</P></TD>
	<TD class="tr22 td122"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td104"><P class="p21 ft19">'.$contentText['azimuth'].' Degree</P></TD>
	<TD colspan=3 class="tr22 td120"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr33 td102"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td109"><P class="p0 ft22">&nbsp;</P></TD>
	<TD colspan=2 class="tr18 td105"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td113"><P class="p0 ft14">&nbsp;</P></TD>
	<TD colspan=3 class="tr18 td123"><P class="p0 ft14">&nbsp;</P></TD>
	<TD colspan=2 class="tr18 td124"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td108"><P class="p0 ft14">&nbsp;</P></TD>
	<TD colspan=3 class="tr33 td120"><P class="p0 ft22">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr8 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr8 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr8 td110"><P class="p0 ft19">Site Address</P></TD>
	<TD class="tr8 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=6 class="tr8 td125"><P class="p20 ft23">'.$contentText['site_address'].'</P></TD>
	<TD colspan=3 class="tr8 td120"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr0 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr0 td112"><P class="p20 ft19"></P>&nbsp;&nbsp;&nbsp;</TD>
	<TD class="tr0 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr1 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td105"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td113"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td106"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td107"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td96"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td97"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td108"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr1 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr28 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr28 td110"><P class="p0 ft19">City / Province</P></TD>
	<TD class="tr28 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr28 td112"><P class="p20 ft19">'.$contentText['city'].'</P></TD>
	<TD class="tr28 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr15 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td96"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td97"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td113"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr1 td106"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td107"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td96"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td97"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td108"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td102"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td109"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td57"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td58"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td111"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td112"><P class="p21 ft3">'.$contentText['site_location'].'</P></TD>
	<TD class="tr2 td49"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td57"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td58"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td126"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td101"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr15 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD rowspan=2 class="tr34 td109"><!--[if lte IE 7]><P style="margin-left:11px;margin-top:0px;margin-right:-25px;margin-bottom:0px;" class="p28 ft24"><![endif]--><!--[if gte IE 8]><P style="margin-left:-3px;margin-top:0px;margin-right:-11px;margin-bottom:14px;" class="p28 ft24"><![endif]--><![if ! IE]><P style="margin-left:4px;margin-top:7px;margin-right:-18px;margin-bottom:7px;" class="p28 ft24"><![endif]>Candidate</P></TD>
	<TD colspan=2 class="tr1 td105"><P class="p0 ft2">Site Location</P></TD>
	<TD class="tr1 td113"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td114"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td115"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td107"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td96"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td97"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td127"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr15 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 rowspan=3 class="tr35 td105"><P class="p0 ft19">Tower Type</P></TD>
	<TD class="tr15 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 rowspan=2 class="tr10 td112"><P class="p20 ft19">'.$contentText['site_type'].'</P></TD>
	<TD class="tr15 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td126"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr36 td102"><P class="p0 ft25">&nbsp;</P></TD>
	<TD class="tr36 td109"><P class="p0 ft25">&nbsp;</P></TD>
	<TD class="tr36 td111"><P class="p0 ft25">&nbsp;</P></TD>
	<TD class="tr36 td49"><P class="p0 ft25">&nbsp;</P></TD>
	<TD class="tr36 td57"><P class="p0 ft25">&nbsp;</P></TD>
	<TD class="tr36 td58"><P class="p0 ft25">&nbsp;</P></TD>
	<TD class="tr36 td126"><P class="p0 ft25">&nbsp;</P></TD>
	<TD class="tr36 td12"><P class="p0 ft25">&nbsp;</P></TD>
	<TD class="tr36 td101"><P class="p0 ft25">&nbsp;</P></TD>
	<TD class="tr36 td12"><P class="p0 ft25">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr23 td102"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td109"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr25 td113"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td114"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td115"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td107"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td96"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td97"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr25 td127"><P class="p0 ft17">&nbsp;</P></TD>
	<TD class="tr23 td12"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td101"><P class="p0 ft16">&nbsp;</P></TD>
	<TD class="tr23 td12"><P class="p0 ft16">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr28 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD rowspan=3 class="tr11 td109"><!--[if lte IE 7]><P style="margin-left:4px;margin-top:0px;margin-right:-25px;margin-bottom:0px;" class="p29 ft1"><![endif]--><!--[if gte IE 8]><P style="margin-left:-17px;margin-top:0px;margin-right:-4px;margin-bottom:21px;" class="p29 ft1"><![endif]--><![if ! IE]><P style="margin-left:-7px;margin-top:11px;margin-right:-14px;margin-bottom:10px;" class="p29 ft1"><![endif]>Propose</P></TD>
	<TD colspan=2 class="tr28 td110"><P class="p0 ft19">Building Height (m)</P></TD>
	<TD class="tr28 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td60"><P class="p30 ft19">'.$contentText['building_height'].'</P></TD>
	<TD class="tr28 td61"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td121"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td57"><P class="p21 ft19">Floor No</P></TD>
	<TD class="tr28 td122"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td126"><P class="p31 ft19">'.$contentText['floor_no'].'</P></TD>
	<TD class="tr28 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr33 td102"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr18 td96"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td97"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td113"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td114"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td115"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td128"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td96"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td129"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td127"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr33 td12"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td101"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td12"><P class="p0 ft22">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr0 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=3 rowspan=2 class="tr28 td116"><P class="p0 ft19">Pole / Tower Height (m)</P></TD>
	<TD colspan=2 rowspan=2 class="tr28 td112"><P class="p20 ft19">'.$contentText['tower_height'].' m</P></TD>
	<TD class="tr0 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td126"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td102"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td109"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td49"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td57"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td58"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td126"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td12"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td101"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td12"><P class="p0 ft7">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr33 td102"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td109"><P class="p0 ft22">&nbsp;</P></TD>
	<TD colspan=2 class="tr18 td105"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td113"><P class="p0 ft14">&nbsp;</P></TD>
	<TD colspan=2 class="tr18 td106"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td107"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td96"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td97"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td127"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr33 td12"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td101"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td12"><P class="p0 ft22">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr22 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr22 td110"><P class="p0 ft19">Space Dimension</P></TD>
	<TD class="tr22 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr22 td112"><P class="p20 ft19">'.$contentText['space_dimension'].'</P></TD>
	<TD class="tr22 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td126"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr26 td102"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td109"><P class="p0 ft18">&nbsp;</P></TD>
	<TD colspan=2 class="tr33 td105"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td113"><P class="p0 ft22">&nbsp;</P></TD>
	<TD colspan=2 class="tr33 td106"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td107"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td96"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td97"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td127"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr26 td12"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td101"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td12"><P class="p0 ft18">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr22 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr22 td110"><P class="p0 ft19">Access Road</P></TD>
	<TD class="tr22 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr22 td112"><P class="p20 ft19">'.$contentText['access_road'].'</P></TD>
	<TD class="tr22 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr18 td102"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td109"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr32 td96"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td97"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td113"><P class="p0 ft21">&nbsp;</P></TD>
	<TD colspan=2 class="tr32 td106"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td107"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td96"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td97"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td108"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr18 td12"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td101"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td12"><P class="p0 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr15 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 rowspan=2 class="tr30 td110"><P class="p0 ft19">24/7 Access</P></TD>
	<TD class="tr15 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr15 td112"><P class="p21 ft19">'.$contentText['access'].'</P></TD>
	<TD class="tr15 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr15 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td102"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td109"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td111"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td60"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td61"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td49"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td57"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td58"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td104"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td101"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr26 td102"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td109"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr33 td96"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td97"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td113"><P class="p0 ft22">&nbsp;</P></TD>
	<TD colspan=4 class="tr33 td130"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td97"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td108"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr26 td12"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td101"><P class="p0 ft18">&nbsp;</P></TD>
	<TD class="tr26 td12"><P class="p0 ft18">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr0 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td59"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=4 class="tr0 td103"><P class="p32 ft15">Owner Information</P></TD>
	<TD class="tr0 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr32 td102"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td109"><P class="p0 ft21">&nbsp;</P></TD>
	<TD colspan=2 class="tr6 td105"><P class="p0 ft8">&nbsp;</P></TD>
	<TD class="tr6 td98"><P class="p0 ft8">&nbsp;</P></TD>
	<TD colspan=2 class="tr6 td106"><P class="p0 ft8">&nbsp;</P></TD>
	<TD class="tr6 td107"><P class="p0 ft8">&nbsp;</P></TD>
	<TD class="tr6 td96"><P class="p0 ft8">&nbsp;</P></TD>
	<TD class="tr6 td97"><P class="p0 ft8">&nbsp;</P></TD>
	<TD class="tr6 td108"><P class="p0 ft8">&nbsp;</P></TD>
	<TD class="tr32 td12"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td101"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td12"><P class="p0 ft21">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr22 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr22 td110"><P class="p0 ft19">Name (Institution)</P></TD>
	<TD class="tr22 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr22 td112"><P class="p20 ft15">'.$contentText['owner'].'</P></TD>
	<TD class="tr22 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr22 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr33 td102"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td109"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr18 td96"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td97"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td113"><P class="p0 ft14">&nbsp;</P></TD>
	<TD colspan=6 class="tr18 td131"><P class="p0 ft14">&nbsp;</P></TD>
	<TD colspan=3 class="tr33 td120"><P class="p0 ft22">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td102"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td109"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 rowspan=2 class="tr30 td110"><P class="p0 ft19">Address (Owner)</P></TD>
	<TD class="tr2 td111"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=6 class="tr2 td125"><P class="p20 ft26">'.$contentText['address_owner'].'</P></TD>
	<TD colspan=3 class="tr2 td120"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr32 td102"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td109"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td111"><P class="p0 ft21">&nbsp;</P></TD>
	<TD colspan=4 rowspan=2 class="tr15 td103"><P class="p20 ft15">'.$contentText['city'].'</P></TD>
	<TD class="tr32 td58"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td104"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td12"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td101"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td12"><P class="p0 ft21">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr18 td102"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td109"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td57"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td58"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td111"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td58"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td104"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td12"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td101"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td12"><P class="p0 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr18 td102"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td109"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr32 td96"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td97"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td113"><P class="p0 ft21">&nbsp;</P></TD>
	<TD colspan=2 class="tr32 td106"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td107"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td96"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td97"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr32 td108"><P class="p0 ft21">&nbsp;</P></TD>
	<TD class="tr18 td12"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td101"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td12"><P class="p0 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td102"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td109"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 rowspan=2 class="tr22 td110"><P class="p0 ft19">PIC (if institution)</P></TD>
	<TD class="tr2 td111"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td112"><P class="p21 ft26">'.$contentText['pic_owner'].'</P></TD>
	<TD class="tr2 td49"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td57"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td58"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td104"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td101"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td102"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td109"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td111"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td60"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td61"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td49"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td57"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td58"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td104"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td101"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td102"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td109"><P class="p0 ft5">&nbsp;</P></TD>
	<TD colspan=2 class="tr5 td105"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td113"><P class="p0 ft7">&nbsp;</P></TD>
	<TD colspan=2 class="tr5 td106"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td107"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td96"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td97"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td108"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr3 td12"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td101"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td12"><P class="p0 ft5">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr28 td102"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td109"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr28 td110"><P class="p0 ft19">Phone Number / HP</P></TD>
	<TD class="tr28 td111"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr28 td112"><P class="p20 ft15">'.$contentText['phone_owner'].'</P></TD>
	<TD class="tr28 td49"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td57"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td58"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td104"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td12"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td101"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr28 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr33 td102"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr18 td117"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td96"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td97"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td113"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td114"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td115"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td107"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td96"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td97"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td108"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr18 td118"><P class="p0 ft14">&nbsp;</P></TD>
	<TD class="tr33 td101"><P class="p0 ft22">&nbsp;</P></TD>
	<TD class="tr33 td12"><P class="p0 ft22">&nbsp;</P></TD>
</TR>
</TABLE>
</DIV>
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
<DIV id="page_3">
<DIV id="p3dimg1">
<img src="'.base_url('uploads/surveysitac/logo_ibs.png').'" width="100px" height="40px" alt="">
</DIV>


<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
	<TD class="tr0 td0"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td1"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td2"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td3"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td4"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr0 td5"><P class="p1 ft1">Document Name : TSSR</P></TD>
</TR>
<TR>
	<TD class="tr1 td6"><P class="p2 ft2">No WBS</P></TD>
	<TD class="tr1 td7"><P class="p3 ft2">'.$wbs_id['wbs_id'].'</P></TD>
	<TD class="tr1 td8"><P class="p3 ft2">Tenant</P></TD>
	<TD class="tr1 td9"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td10"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td11"><P class="p4 ft2">'.$wbs_id['tenant'].'</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE ID</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_id'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Contractor Name</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td4"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td16"><P class="p4 ft3">'.$contentText['contractor'].'</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td17"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td18"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td19"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td20"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td21"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td22"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE Name</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_name'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Date</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td23"><P class="p5 ft3"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td17"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td18"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td19"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td20"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td21"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td22"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr3 td12"><P class="p0 ft5">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td17"><P class="p2 ft3">-</P></TD>
	<TD class="tr2 td18"><P class="p3 ft3">-</P></TD>
	<TD class="tr2 td19"><P class="p3 ft3">Page</P></TD>
	<TD colspan=2 class="tr2 td24"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td22"><P class="p4 ft3">1 - 11</P></TD>
	<TD class="tr1 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">Address</P></TD>
	<TD colspan=2 class="tr2 td25"><P class="p3 ft3">'.$contentText['site_address'].'</P></TD>
	<TD colspan=3 class="tr2 td26"><P class="p0 ft3">&nbsp;&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td17"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td27"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td19"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td28"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td21"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td22"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td12"><P class="p0 ft8">&nbsp;</P></TD>
</TR>
</TABLE>
<P class="p33 ft27">SITE LOCATION / MAP</P>
<P class="p331 ft27"><img src="'.base_url('uploads/attachment/survey/'.$contentImage['site_location_map'].'').'" width="500" height="400" alt=""/></P>
<P class="p34 ft28">Notes : Fill with scale site location / map drawing within 300 meters radius from candidate included existing other TP / Operators.</P>
</DIV>
<DIV id="page_4">
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
<BR/>
<BR/>
<BR/>
<BR/>
<DIV id="p4dimg1">
<img src="'.base_url('uploads/surveysitac/logo_ibs.png').'" width="100px" height="40px" alt="">
</DIV>


<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
	<TD class="tr0 td0"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td1"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td2"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td3"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td4"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr0 td5"><P class="p1 ft1">Document Name : TSSR</P></TD>
</TR>
<TR>
	<TD class="tr1 td6"><P class="p2 ft2">No WBS</P></TD>
	<TD class="tr1 td7"><P class="p3 ft2">'.$wbs_id['wbs_id'].'</P></TD>
	<TD class="tr1 td8"><P class="p3 ft2">Tenant</P></TD>
	<TD class="tr1 td9"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td10"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td11"><P class="p4 ft2">'.$wbs_id['tenant'].'</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE ID</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_id'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Contractor Name</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td4"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td16"><P class="p4 ft3">'.$contentText['contractor'].'</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td17"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td18"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td19"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td20"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td21"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td22"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE Name</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_name'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Date</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td23"><P class="p5 ft3"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td17"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td18"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td19"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td20"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td21"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td22"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr3 td12"><P class="p0 ft5">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td17"><P class="p2 ft3">-</P></TD>
	<TD class="tr2 td18"><P class="p3 ft3">-</P></TD>
	<TD class="tr2 td19"><P class="p3 ft3">Page</P></TD>
	<TD colspan=2 class="tr2 td24"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td22"><P class="p4 ft3">1 - 11</P></TD>
	<TD class="tr1 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">Address</P></TD>
	<TD colspan=2 class="tr2 td25"><P class="p3 ft3">'.$contentText['site_address'].'</P></TD>
	<TD colspan=3 class="tr2 td26"><P class="p0 ft3">&nbsp;&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td17"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td27"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td19"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td28"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td21"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td22"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td12"><P class="p0 ft8">&nbsp;</P></TD>
</TR>
</TABLE>
<P class="p35 ft27">SITE LAYOUT</P>
<p class="p331 ft27"><img src="'.base_url('uploads/attachment/survey/'.$contentImage['site_layout'].'').'" width="500" height="400" alt=""/></P>
<P class="p34 ft28">Notes : Fill with scale site location / map drawing within 300 meters radius from candidate included existing other TP / Operators.</P>
</DIV>
</DIV>
<BR/>
<BR/>
<BR/>
<BR/>
<BR/>
<BR/>
<BR/>
<DIV id="page_5">
<DIV id="p5dimg1">
<img src="'.base_url('uploads/surveysitac/logo_ibs.png').'" width="100px" height="40px" alt="">
</DIV>


<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
	<TD class="tr0 td0"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td1"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td2"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td3"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td4"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr0 td5"><P class="p1 ft1">Document Name : TSSR</P></TD>
</TR>
<TR>
	<TD class="tr1 td6"><P class="p2 ft2">No WBS</P></TD>
	<TD class="tr1 td7"><P class="p3 ft2">'.$wbs_id['wbs_id'].'</P></TD>
	<TD class="tr1 td8"><P class="p3 ft2">Tenant</P></TD>
	<TD class="tr1 td9"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td10"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td11"><P class="p4 ft2">'.$wbs_id['tenant'].'</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE ID</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_id'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Contractor Name</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td4"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td16"><P class="p4 ft3">'.$contentText['contractor'].'</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td17"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td18"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td19"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td20"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td21"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td22"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE Name</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_name'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Date</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td23"><P class="p5 ft3"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td17"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td18"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td19"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td20"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td21"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td22"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr3 td12"><P class="p0 ft5">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td17"><P class="p2 ft3">-</P></TD>
	<TD class="tr2 td18"><P class="p3 ft3">-</P></TD>
	<TD class="tr2 td19"><P class="p3 ft3">Page</P></TD>
	<TD colspan=2 class="tr2 td24"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td22"><P class="p4 ft3">1 - 11</P></TD>
	<TD class="tr1 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">Address</P></TD>
	<TD colspan=2 class="tr2 td25"><P class="p3 ft3">'.$contentText['site_address'].'</P></TD>
	<TD colspan=3 class="tr2 td26"><P class="p0 ft3">&nbsp;&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td17"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td27"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td19"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td28"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td21"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td22"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td12"><P class="p0 ft8">&nbsp;</P></TD>
</TR>
</TABLE>
<P class="p36 ft27">SITE COUNTOUR</P>
<p class="p331 ft27"><img src="'.base_url('uploads/attachment/survey/'.$contentImage['site_contour'].'').'" width="500" height="400" alt=""/>
<P class="p37 ft31"><NOBR><SPAN class="ft29">-</SPAN>Main</NOBR> Road Elevation as Datum ( <SPAN class="ft30">+</SPAN> 0.00m ) <NOBR><SPAN class="ft29">-</SPAN>Note</NOBR></P>
<P class="p38 ft32">Notes : Fill with scale site elevation / contour drawing.</P>
</DIV>
<DIV id="page_6">
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
<BR/>
<BR/>
<BR/>
<BR/>
<DIV id="p6dimg1">
<img src="'.base_url('uploads/surveysitac/logo_ibs.png').'" width="100px" height="40px" alt="">
</DIV>


<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
	<TD class="tr0 td0"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td1"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td2"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td3"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td4"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr0 td5"><P class="p1 ft1">Document Name : TSSR</P></TD>
</TR>
<TR>
	<TD class="tr1 td6"><P class="p2 ft2">No WBS</P></TD>
	<TD class="tr1 td7"><P class="p3 ft2">'.$wbs_id['wbs_id'].'</P></TD>
	<TD class="tr1 td8"><P class="p3 ft2">Tenant</P></TD>
	<TD class="tr1 td9"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td10"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td11"><P class="p4 ft2">'.$wbs_id['tenant'].'</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE ID</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_id'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Contractor Name</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td4"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td16"><P class="p4 ft3">'.$contentText['contractor'].'</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td17"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td18"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td19"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td20"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td21"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td22"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE Name</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_name'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Date</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td23"><P class="p5 ft3"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td17"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td18"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td19"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td20"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td21"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td22"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr3 td12"><P class="p0 ft5">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td17"><P class="p2 ft3">-</P></TD>
	<TD class="tr2 td18"><P class="p3 ft3">-</P></TD>
	<TD class="tr2 td19"><P class="p3 ft3">Page</P></TD>
	<TD colspan=2 class="tr2 td24"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td22"><P class="p4 ft3">1 - 11</P></TD>
	<TD class="tr1 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">Address</P></TD>
	<TD colspan=2 class="tr2 td25"><P class="p3 ft3">'.$contentText['site_address'].'</P></TD>
	<TD colspan=3 class="tr2 td26"><P class="p0 ft3">&nbsp;&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td17"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td27"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td19"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td28"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td21"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td22"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td12"><P class="p0 ft8">&nbsp;</P></TD>
</TR>
</TABLE>
<P class="p39 ft33">Site Photographs - Panoramic Photographs</P>
<TABLE cellpadding=0 cellspacing=0 class="t3">
<TR>
	<TD class="tr37 td132"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr37 td133"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td134"><P class="p40 ft28">Panoramic 0<SPAN class="ft34">0</SPAN></P></TD>
	<TD class="tr16 td135"><P class="p41 ft28">Panoramic 30<SPAN class="ft34">0</SPAN></P></TD>
</TR>
<TR>
	<TD class="tr16 td136"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr16 td137"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr38 td134"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr38 td135"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
</TABLE>
<TABLE cellpadding=0 cellspacing=0 class="t4">
<TR>
	<TD class="tr24 td138"><P class="p42 ft28">Panoramic 60<SPAN class="ft34">0</SPAN></P></TD>
	<TD class="tr24 td135"><P class="p41 ft28">Panoramic 90<SPAN class="ft34">0</SPAN></P></TD>
</TR>
<TR>
	<TD class="tr31 td139"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr31 td137"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr37 td138"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr37 td135"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
</TABLE>
<TABLE cellpadding=0 cellspacing=0 class="t5">
<TR>
	<TD class="tr24 td132"><P class="p43 ft28">Panoramic 120<SPAN class="ft34">0</SPAN></P></TD>
	<TD class="tr24 td133"><P class="p44 ft28">Panoramic 150<SPAN class="ft34">0</SPAN></P></TD>
</TR>
</TABLE>
</DIV>
<DIV id="page_7">
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
<BR/>
<BR/>
<BR/>
<BR/>
<DIV id="p7dimg1">
<img src="'.base_url('uploads/surveysitac/logo_ibs.png').'" width="100px" height="40px" alt="">
</DIV>


<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
	<TD class="tr0 td0"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td1"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td2"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td3"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td4"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr0 td5"><P class="p1 ft1">Document Name : TSSR</P></TD>
</TR>
<TR>
	<TD class="tr1 td6"><P class="p2 ft2">No WBS</P></TD>
	<TD class="tr1 td7"><P class="p3 ft2">'.$wbs_id['wbs_id'].'</P></TD>
	<TD class="tr1 td8"><P class="p3 ft2">Tenant</P></TD>
	<TD class="tr1 td9"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td10"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td11"><P class="p4 ft2">'.$wbs_id['tenant'].'</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE ID</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_id'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Contractor Name</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td4"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td16"><P class="p4 ft3">'.$contentText['contractor'].'</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td17"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td18"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td19"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td20"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td21"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td22"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE Name</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_name'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Date</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td23"><P class="p5 ft3"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td17"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td18"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td19"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td20"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td21"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td22"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr3 td12"><P class="p0 ft5">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td17"><P class="p2 ft3">-</P></TD>
	<TD class="tr2 td18"><P class="p3 ft3">-</P></TD>
	<TD class="tr2 td19"><P class="p3 ft3">Page</P></TD>
	<TD colspan=2 class="tr2 td24"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td22"><P class="p4 ft3">1 - 11</P></TD>
	<TD class="tr1 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">Address</P></TD>
	<TD colspan=2 class="tr2 td25"><P class="p3 ft3">'.$contentText['site_address'].'</P></TD>
	<TD colspan=3 class="tr2 td26"><P class="p0 ft3">&nbsp;&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td17"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td27"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td19"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td28"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td21"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td22"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td12"><P class="p0 ft8">&nbsp;</P></TD>
</TR>
</TABLE>
<P class="p39 ft33">Site Photographs - Panoramic Photographs</P>
<TABLE cellpadding=0 cellspacing=0 class="t3">
<TR>
	<TD class="tr37 td132"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr37 td133"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td134"><P class="p43 ft28">Panoramic 180<SPAN class="ft34">0</SPAN></P></TD>
	<TD class="tr16 td135"><P class="p44 ft28">Panoramic 210<SPAN class="ft34">0</SPAN></P></TD>
</TR>
<TR>
	<TD class="tr16 td136"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr16 td137"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr38 td134"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr38 td135"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
</TABLE>
<TABLE cellpadding=0 cellspacing=0 class="t4">
<TR>
	<TD class="tr24 td138"><P class="p45 ft28">Panoramic 240<SPAN class="ft34">0</SPAN></P></TD>
	<TD class="tr24 td135"><P class="p44 ft28">Panoramic 270<SPAN class="ft34">0</SPAN></P></TD>
</TR>
<TR>
	<TD class="tr31 td139"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr31 td137"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr37 td138"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr37 td135"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
</TABLE>
<TABLE cellpadding=0 cellspacing=0 class="t5">
<TR>
	<TD class="tr24 td132"><P class="p43 ft28">Panoramic 300<SPAN class="ft34">0</SPAN></P></TD>
	<TD class="tr24 td133"><P class="p44 ft28">Panoramic 330<SPAN class="ft34">0</SPAN></P></TD>
</TR>
</TABLE>
</DIV>
</DIV>
<BR/>
<BR/>
<BR/>
<BR/>
<BR/>
<BR/>
<DIV id="page_8">
<DIV id="p8dimg1">
<img src="'.base_url('uploads/surveysitac/logo_ibs.png').'" width="100px" height="40px" alt="">
</DIV>


<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
	<TD class="tr0 td0"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td1"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td2"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td3"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td4"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr0 td5"><P class="p1 ft1">Document Name : TSSR</P></TD>
</TR>
<TR>
	<TD class="tr1 td6"><P class="p2 ft2">No WBS</P></TD>
	<TD class="tr1 td7"><P class="p3 ft2">'.$wbs_id['wbs_id'].'</P></TD>
	<TD class="tr1 td8"><P class="p3 ft2">Tenant</P></TD>
	<TD class="tr1 td9"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td10"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td11"><P class="p4 ft2">'.$wbs_id['tenant'].'</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE ID</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_id'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Contractor Name</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td4"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td16"><P class="p4 ft3">'.$contentText['contractor'].'</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td17"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td18"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td19"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td20"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td21"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td22"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE Name</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_name'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Date</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td23"><P class="p5 ft3"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td17"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td18"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td19"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td20"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td21"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td22"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr3 td12"><P class="p0 ft5">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td17"><P class="p2 ft3">-</P></TD>
	<TD class="tr2 td18"><P class="p3 ft3">-</P></TD>
	<TD class="tr2 td19"><P class="p3 ft3">Page</P></TD>
	<TD colspan=2 class="tr2 td24"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td22"><P class="p4 ft3">1 - 11</P></TD>
	<TD class="tr1 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">Address</P></TD>
	<TD colspan=2 class="tr2 td25"><P class="p3 ft3">'.$contentText['site_address'].'</P></TD>
	<TD colspan=3 class="tr2 td26"><P class="p0 ft3">&nbsp;&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td17"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td27"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td19"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td28"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td21"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td22"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td12"><P class="p0 ft8">&nbsp;</P></TD>
</TR>
</TABLE>
<P class="p39 ft33">Site Photographs – View Of Site</P>
<TABLE cellpadding=0 cellspacing=0 class="t6">
<TR>
	<TD class="tr37 td132"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr37 td133"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr22 td140"><P class="p32 ft28">Front View Of Building / Land (Front View)</P></TD>
	<TD class="tr22 td141"><P class="p19 ft28">Front View Of Building / Land (Back View)</P></TD>
</TR>
<TR>
	<TD class="tr4 td134"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td135"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td136"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr16 td137"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr38 td134"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr38 td135"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
</TABLE>
<TABLE cellpadding=0 cellspacing=0 class="t7">
<TR>
	<TD class="tr0 td142"><P class="p46 ft28">Left View of Building</P></TD>
	<TD class="tr0 td141"><P class="p47 ft28">Right View of Building</P></TD>
</TR>
<TR>
	<TD class="tr6 td138"><P class="p0 ft8">&nbsp;</P></TD>
	<TD class="tr6 td135"><P class="p0 ft8">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td139"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr16 td137"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr37 td138"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr37 td135"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
</TABLE>
<TABLE cellpadding=0 cellspacing=0 class="t8">
<TR>
	<TD class="tr0 td143"><P class="p48 ft28">Main Access road / Stairway 1</P></TD>
	<TD class="tr0 td144"><P class="p49 ft28">Main Access road / Stairway 2</P></TD>
</TR>
<TR>
	<TD class="tr4 td134"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td135"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
</TABLE>
</DIV>
</DIV>
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
<DIV id="page_9">
<DIV id="p9dimg1">
<img src="'.base_url('uploads/surveysitac/logo_ibs.png').'" width="100px" height="40px" alt="">
</DIV>


<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
	<TD class="tr0 td0"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td1"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td2"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td3"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td4"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr0 td5"><P class="p1 ft1">Document Name : TSSR</P></TD>
</TR>
<TR>
	<TD class="tr1 td6"><P class="p2 ft2">No WBS</P></TD>
	<TD class="tr1 td7"><P class="p3 ft2">'.$wbs_id['wbs_id'].'</P></TD>
	<TD class="tr1 td8"><P class="p3 ft2">Tenant</P></TD>
	<TD class="tr1 td9"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td10"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td11"><P class="p4 ft2">'.$wbs_id['tenant'].'</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE ID</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_id'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Contractor Name</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td4"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td16"><P class="p4 ft3">'.$contentText['contractor'].'</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td17"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td18"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td19"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td20"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td21"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td22"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE Name</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_name'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Date</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td23"><P class="p5 ft3"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td17"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td18"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td19"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td20"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td21"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td22"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr3 td12"><P class="p0 ft5">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td17"><P class="p2 ft3">-</P></TD>
	<TD class="tr2 td18"><P class="p3 ft3">-</P></TD>
	<TD class="tr2 td19"><P class="p3 ft3">Page</P></TD>
	<TD colspan=2 class="tr2 td24"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td22"><P class="p4 ft3">1 - 11</P></TD>
	<TD class="tr1 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">Address</P></TD>
	<TD colspan=2 class="tr2 td25"><P class="p3 ft3">'.$contentText['site_address'].'</P></TD>
	<TD colspan=3 class="tr2 td26"><P class="p0 ft3">&nbsp;&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td17"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td27"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td19"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td28"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td21"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td22"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td12"><P class="p0 ft8">&nbsp;</P></TD>
</TR>
</TABLE>
<P class="p39 ft33">Site Photographs – View Of Site</P>
<TABLE cellpadding=0 cellspacing=0 class="t6">
<TR>
	<TD class="tr37 td132"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr37 td133"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr22 td140"><P class="p48 ft28">Main Access road / Stairway 3</P></TD>
	<TD class="tr22 td141"><P class="p49 ft28">Main Access road / Stairway 4</P></TD>
</TR>
<TR>
	<TD class="tr4 td134"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td135"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td136"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr16 td137"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr38 td134"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr38 td135"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
</TABLE>
<TABLE cellpadding=0 cellspacing=0 class="t7">
<TR>
	<TD class="tr0 td142"><P class="p50 ft28">Main Access road / Stairway 1</P></TD>
	<TD class="tr0 td141"><P class="p49 ft28">Main Access road / Stairway 2</P></TD>
</TR>
<TR>
	<TD class="tr6 td138"><P class="p0 ft8">&nbsp;</P></TD>
	<TD class="tr6 td135"><P class="p0 ft8">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td139"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr16 td137"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr37 td138"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr37 td135"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
</TABLE>
<TABLE cellpadding=0 cellspacing=0 class="t8">
<TR>
	<TD class="tr0 td143"><P class="p51 ft28">Existing Nearest PLN Pole (20m)</P></TD>
	<TD class="tr0 td144"><P class="p51 ft28">Existing Nearest Trafo PLN (570m)</P></TD>
</TR>
<TR>
	<TD class="tr4 td134"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td135"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
</TABLE>
</DIV>
</DIV>
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
<DIV id="page_10">
<DIV id="p10dimg1">
<img src="'.base_url('uploads/surveysitac/logo_ibs.png').'" width="100px" height="40px" alt="">
</DIV>


<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
	<TD class="tr0 td0"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td1"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td2"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td3"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td4"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr0 td5"><P class="p1 ft1">Document Name : TSSR</P></TD>
</TR>
<TR>
	<TD class="tr1 td6"><P class="p2 ft2">No WBS</P></TD>
	<TD class="tr1 td7"><P class="p3 ft2">'.$wbs_id['wbs_id'].'</P></TD>
	<TD class="tr1 td8"><P class="p3 ft2">Tenant</P></TD>
	<TD class="tr1 td9"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td10"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td11"><P class="p4 ft2">'.$wbs_id['tenant'].'</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE ID</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_id'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Contractor Name</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td4"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td16"><P class="p4 ft3">'.$contentText['contractor'].'</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td17"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td18"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td19"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td20"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td21"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td22"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE Name</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_name'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Date</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td23"><P class="p5 ft3"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td17"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td18"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td19"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td20"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td21"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td22"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr3 td12"><P class="p0 ft5">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td17"><P class="p2 ft3">-</P></TD>
	<TD class="tr2 td18"><P class="p3 ft3">-</P></TD>
	<TD class="tr2 td19"><P class="p3 ft3">Page</P></TD>
	<TD colspan=2 class="tr2 td24"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td22"><P class="p4 ft3">1 - 11</P></TD>
	<TD class="tr1 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">Address</P></TD>
	<TD colspan=2 class="tr2 td25"><P class="p3 ft3">'.$contentText['site_address'].'</P></TD>
	<TD colspan=3 class="tr2 td26"><P class="p0 ft3">&nbsp;&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td17"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td27"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td19"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td28"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td21"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td22"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td12"><P class="p0 ft8">&nbsp;</P></TD>
</TR>
</TABLE>
<P class="p39 ft33">Site Photographs - Potential Market</P>
<TABLE cellpadding=0 cellspacing=0 class="t6">
<TR>
	<TD class="tr37 td132"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr37 td133"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr22 td140"><P class="p52 ft28">Islamic Centre 140m/98˚ from Candidate</P></TD>
	<TD class="tr22 td141"><P class="p53 ft28">Gardenia Residential 400m/150˚ from Candidate</P></TD>
</TR>
<TR>
	<TD class="tr4 td134"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td135"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td136"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr16 td137"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr38 td134"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr38 td135"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
</TABLE>
<TABLE cellpadding=0 cellspacing=0 class="t7">
<TR>
	<TD class="tr0 td142"><P class="p24 ft28">Perumahan Puri Lestari 300m/240˚ from Candidate</P></TD>
	<TD class="tr0 td141"><P class="p54 ft28">Areal Pertokoan 300m / 6˚ from Candidate</P></TD>
</TR>
<TR>
	<TD class="tr6 td138"><P class="p0 ft8">&nbsp;</P></TD>
	<TD class="tr6 td135"><P class="p0 ft8">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td139"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr16 td137"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr37 td138"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr37 td135"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
</TABLE>
<TABLE cellpadding=0 cellspacing=0 class="t8">
<TR>
	<TD class="tr0 td143"><P class="p55 ft28">SPBU Bojong Gede 700m/ 176˚ from Candidate</P></TD>
	<TD class="tr0 td144"><P class="p56 ft28">Pemukiman Penduduk 300m/ 90˚ from Candidate</P></TD>
</TR>
<TR>
	<TD class="tr4 td134"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td135"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
</TABLE>
</DIV>
</DIV>
<BR/>
<BR/>
<BR/>
<BR/>
<BR/>
<BR/>
<DIV id="page_11">
<DIV id="p11dimg1">
<img src="'.base_url('uploads/surveysitac/logo_ibs.png').'" width="100px" height="40px" alt="">
</DIV>


<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
	<TD class="tr0 td0"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td1"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td2"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td3"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr0 td4"><P class="p0 ft0">&nbsp;</P></TD>
	<TD colspan=2 class="tr0 td5"><P class="p1 ft1">Document Name : TSSR</P></TD>
</TR>
<TR>
	<TD class="tr1 td6"><P class="p2 ft2">No WBS</P></TD>
	<TD class="tr1 td7"><P class="p3 ft2">'.$wbs_id['wbs_id'].'</P></TD>
	<TD class="tr1 td8"><P class="p3 ft2">Tenant</P></TD>
	<TD class="tr1 td9"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td10"><P class="p0 ft0">&nbsp;</P></TD>
	<TD class="tr1 td11"><P class="p4 ft2">'.$wbs_id['tenant'].'</P></TD>
	<TD class="tr0 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE ID</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_id'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Contractor Name</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td4"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td16"><P class="p4 ft3">'.$contentText['contractor'].'</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr3 td17"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td18"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td19"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td20"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td21"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr3 td22"><P class="p0 ft5">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p0 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">SITE Name</P></TD>
	<TD class="tr2 td14"><P class="p3 ft3">'.$contentText['site_name'].'</P></TD>
	<TD class="tr2 td2"><P class="p3 ft3">Date</P></TD>
	<TD class="tr2 td15"><P class="p0 ft4">&nbsp;</P></TD>
	<TD colspan=2 class="tr2 td23"><P class="p5 ft3"><NOBR>'.date('d-M-Y', strtotime($model['created_at'])).'</NOBR></P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr5 td17"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td18"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td19"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td20"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td21"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr5 td22"><P class="p0 ft7">&nbsp;</P></TD>
	<TD class="tr3 td12"><P class="p0 ft5">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td17"><P class="p2 ft3">-</P></TD>
	<TD class="tr2 td18"><P class="p3 ft3">-</P></TD>
	<TD class="tr2 td19"><P class="p3 ft3">Page</P></TD>
	<TD colspan=2 class="tr2 td24"><P class="p0 ft4">&nbsp;</P></TD>
	<TD class="tr2 td22"><P class="p4 ft3">1 - 11</P></TD>
	<TD class="tr1 td12"><P class="p0 ft0">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr2 td13"><P class="p2 ft3">Address</P></TD>
	<TD colspan=2 class="tr2 td25"><P class="p3 ft3">'.$contentText['site_address'].'</P></TD>
	<TD colspan=3 class="tr2 td26"><P class="p0 ft3">&nbsp;&nbsp;</P></TD>
	<TD class="tr2 td12"><P class="p0 ft4">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td17"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td27"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td19"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td28"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td21"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr4 td22"><P class="p0 ft6">&nbsp;</P></TD>
	<TD class="tr6 td12"><P class="p0 ft8">&nbsp;</P></TD>
</TR>
</TABLE>
<P class="p57 ft33">Site Photographs - Existing Tower</P>
<P class="p58 ft28">Existing Tower Telkomsel : 106.804200°; <NOBR>-6.468360° /</NOBR> Distance 180 meter 55˚ from Candidate</P>
<P class="p59 ft28">Existing Tower Telkomsel : 106.799740°; <NOBR>-6.461110° /</NOBR> Distance 1090 meter 332˚ from Candidate</P>
</DIV>
</BODY>
</HTML>
';

$api_endpoint  = "https://selectpdf.com/api2/convert/";
$key           = 'b53a60b8-7af2-4a9f-bf0c-c03fbde4911a';//    'd4ca505b-0ca6-4f33-a075-afce3e313e82';
$local_file = 'nam'.time().'.pdf';
$parameters = array('key' => $key, 'html' => $raw_html, 'web_page_width' => '998', 'page_numbers' => 'False');
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
    echo 'oke';
}