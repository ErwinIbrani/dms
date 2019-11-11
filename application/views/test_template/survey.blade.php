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
<IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAK6ApUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD13xh4y07wbpn2m8zJcShhbWy8NMwx37AZGSf1OAfANf8AiT4o8QORNqDWkGMeRZExJyMHPO5s+hJFO8f67cah8R7+6kjRhZXP2eKGbEibYmxgg8EMQWI/2jXqlx4eNtdeGzavYXKXV/A0bDDhY0Uys0eflGRH1jWMYbGG4I74RhRScldsnc+fVYqwZSQQcgjtXa+G/il4k8PzKst22pWmRvgu3LnHGdr/AHlOBgdQM5wa7vxX8OIvF/i/V7q28R2EeobVKWAAd1CxooMmGyuW77TgEfSuW034Syf2NFqXiPXrTQkmIEaXABPOSAxLKASBnAJ4645FbOrSnH3hWZ7l4f8AEGneJtJj1LTJjJC/ysrDDRvgZVh2IyP5jIINaleBfCi/bQviPc6FFdpeWl0JIfNhb92zRgssg9RhWHH97qa9lj1O6m1S9tY402W86QL8jMctEsm4kHAAz0OM465IB8+tT9nKy2KTNiis/Sbq4vbeSacxYWeaEKiEf6uRkzkk9ducds96zJPE8kN66PaA28VzLHNKrcxxp5Y8wj0BkBPooJ7VkM6Oiuft9ZvbuDTZkFvGL25kg2lC2zasrZzuGc+XjHHWpZ9cki0OW/8AKG5L0220Iz8C58nO0cscc4HU8UAbdFclfeNFsdIFzLFClyZ5YlhnkMRZY1L7irDchYBcKRkGROuebereJ102E3KJHJZy2LXFtPuIDyhSyoeOAyjIPsR3FAHRUVhHXszXMhaOC1tro2rM8TyGRgF6leIxlsc5zwe9PXW5ClifJT/SdRmsjyeFQygN9T5Q/OgDaormdI8UTagmnJcWqQ3N1Im9AxI8t4HlR1JHP3Np91b0p914jms11U3US28trHM9tBIjD7QEUsGWTO1sjkqBlec9KAOjorFOtOsNm4Vn8+8W2JktZLcqCpOQr8np16flWVb+OI7jTr26RIXaGWExpE/mEwSyBFJC5Icc5XqDj1oA6+isBNfku7jU0tIzGllBHNm5tpEZ93mZG1tpH3Bz7mpE1a4/4SF9KkK5jijkMiWsjBtxfIJBIjwEGCx5J/CgDborjrTxwH0yW9ngULHYfa3BDQ7WJwkY3D5wxyA444963tB1iPWtONwjws0crwyeS+9NysRkH0Iww9mFAGnRXPa1rN9pk1ykf2dxHp9xepujbrHtwp+bnO7rx09+I77xalm1uZ7aWzXzVNwLpRuELRysGXYx5zERg88HjkUAdLRTIZGlgjkaJ4mZQTG+Ny+xwSM/Q0+gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPlz4iaPcaV4/1SGXkXU7XMTsNoZZCW6nsCSufVTXsS654X/4TTRLSHU9PFlpWmy+RN9sj2B3KRqgOeWCK/wCDVu+MfBeneMtNEF3mK5iDfZrleTETjPGcMDgZB/DHWvn7xD8O/Evht2NzYPcW4G77TaAyR4AGcnGVxnHzAdDjNd8JRrRSbs0Tsei+Gk0PwTf32uah4o0zU9a1B/IEVvcDYju+5i7ZOFyFJYgbQD1JArU0TV1s7K+tfGHizwzrGklWkjAmWWZwGzgr0YDBwoDHPAPAFfPtdn4a+GPiPxFOhe0fT7PI3XF0hT5TjlVPLcHI7e4rSdGKV5y/L8Aua/wd0k6j49fU4UkitLCOSQZ+blwUVCfXDMc/7Ne0y6ra6fqUqLYXO+4uVSSZEypbZGNzHPACk8/9M274zN4e8Pad4Y0iPTdMiKQqdzMxy0j4ALMfU4Ht6YFam1cEYGD1461w1qntJ3Q0jnLfXtLihaS3trpZo/Pd7bBDh9yPIu0nBctIgA7luOCTU0N3pMl5MsVshZ5ZIpXdlwWLbHBBOT8yxA8fxp6nG7tGc4GQc9O9GxcY2jGc9O+c/wA6yGc1DqWk2Vlpipp8kcKhJbJEHG+SOUhBkj5yoYYPd19atmaxOlTb7KZLYXbcEMuW83d5oP8AdLfOGBwAc8YONraoxwOOnFNEUYGBGmN277o6+v1oAx7K40tNRTy7fy7mYlEdmDM4O45PJPzCDOTyQqg9MLWE+iXPh6OIWkbabNDunhcj/R49nnfMOwAZcY6FlxgYx0PlR/3F+9u6d/X60vlpt27FxgjGPXrQBzV7qGlM8k8mnXM2GZpBCCQ7RyLGxdAfnIPTIORG2OAM2pLvS7YJqKwvJF5TXe+NiyRKQT5m3OF3AudwAJ+YdTg7m1QScDJOScUmxcEbRgjHTt6UAc5BdaS0tj5Omv51iPJtsrh0yZItq5OTxExOeijJ6HDLu+0mbzbibT7i5ieJmEjnMZjZZQxTc2F3CMjIxnzEyfm46YIoOQoB55x+NGxBt+Vfl6cdKAOduLvS3ERmgupQl29vGHkk3CTJjLDJxjcQoYHguOQSa2bnTLK8kjkuLdHeNQqk8YAZXx/30in8KsiOMHIRQc56d/8AIFOoAgNnbmaeUxKXnQRyn+8ozgH/AL6b86abC3N4bvYyzsFDMjsu4LkgEA4IGT19TVmigCimj6dGLYLaR4toxHCCM7FDKwH4FFP1FPOmwf2gLxTIkmdzqjYWRtu0Mw7kLkflnOFxbooArXOn2l4XNxAsheF7die8b43L9DgflUB0TTT9+0R8NkeZlsfKyhef4QHYBeg3HA5rQooAgtbOCzQJAhRFQIq7yQqjOAATx1/l6Cp6KKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAz9E1vTvEejwatpNx9osZ93ly7GTdtYqeGAI5BHIrQoooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAM/8AtvTv+Eh/sD7R/wATP7J9t8jY3+p37N27G373GM59q0KKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAr399b6Zp1zf3knl2trE80z7SdqKCWOBycAHpRYX1vqenW1/ZyeZa3USTQvtI3IwBU4PIyCOtWKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAz9b1vTvDmjz6tq1x9nsYNvmS7GfbuYKOFBJ5IHArQoooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiis+01X7XrGo6d9gvofsPlf6TNDthuN67v3TZ+bb0bpg0AaFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUVw/hi/vLj4pePbOa7nktbX+z/ALPC8hKRboGLbVPC5PJx1oA7iiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigD//2Q==" id="p1img1"></DIV>


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
<IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAN5ApUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD13xh4y07wbpn2m8zJcShhbWy8NMwx37AZGSf1OAfANf8AiT4o8QORNqDWkGMeRZExJyMHPO5s+hJFO8f67cah8R7+6kjRhZXP2eKGbEibYmxgg8EMQWI/2jXqlx4eNtdeGzavYXKXV/A0bDDhY0Uys0eflGRH1jWMYbGG4I74RhRScldsnc+fVYqwZSQQcgjtXa+G/il4k8PzKst22pWmRvgu3LnHGdr/AHlOBgdQM5wa7vxX8OIvF/i/V7q28R2EeobVKWAAd1CxooMmGyuW77TgEfSuW034Syf2NFqXiPXrTQkmIEaXABPOSAxLKASBnAJ4645FbOrSnH3hWZ7l4f8AEGneJtJj1LTJjJC/ysrDDRvgZVh2IyP5jIINaleBfCi/bQviPc6FFdpeWl0JIfNhb92zRgssg9RhWHH97qa9lj1O6m1S9tY402W86QL8jMctEsm4kHAAz0OM465IB8+tT9nKy2KTNiis/Sbq4vbeSacxYWeaEKiEf6uRkzkk9ducds96zJPE8kN66PaA28VzLHNKrcxxp5Y8wj0BkBPooJ7VkM6Oiuft9ZvbuDTZkFvGL25kg2lC2zasrZzuGc+XjHHWpZ9cki0OW/8AKG5L0220Iz8C58nO0cscc4HU8UAbdFclfeNFsdIFzLFClyZ5YlhnkMRZY1L7irDchYBcKRkGROuebereJ102E3KJHJZy2LXFtPuIDyhSyoeOAyjIPsR3FAHRUVhHXszXMhaOC1tro2rM8TyGRgF6leIxlsc5zwe9PXW5ClifJT/SdRmsjyeFQygN9T5Q/OgDaormdI8UTagmnJcWqQ3N1Im9AxI8t4HlR1JHP3Np91b0p914jms11U3US28trHM9tBIjD7QEUsGWTO1sjkqBlec9KAOjorFOtOsNm4Vn8+8W2JktZLcqCpOQr8np16flWVb+OI7jTr26RIXaGWExpE/mEwSyBFJC5Icc5XqDj1oA6+isBNfku7jU0tIzGllBHNm5tpEZ93mZG1tpH3Bz7mpE1a4/4SF9KkK5jijkMiWsjBtxfIJBIjwEGCx5J/CgDborjrTxwH0yW9ngULHYfa3BDQ7WJwkY3D5wxyA444963tB1iPWtONwjws0crwyeS+9NysRkH0Iww9mFAGnRXPa1rN9pk1ykf2dxHp9xepujbrHtwp+bnO7rx09+I77xalm1uZ7aWzXzVNwLpRuELRysGXYx5zERg88HjkUAdLRTIZGlgjkaJ4mZQTG+Ny+xwSM/Q0+gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPlz4iaPcaV4/1SGXkXU7XMTsNoZZCW6nsCSufVTXsS654X/4TTRLSHU9PFlpWmy+RN9sj2B3KRqgOeWCK/wCDVu+MfBeneMtNEF3mK5iDfZrleTETjPGcMDgZB/DHWvn7xD8O/Evht2NzYPcW4G77TaAyR4AGcnGVxnHzAdDjNd8JRrRSbs0Tsei+Gk0PwTf32uah4o0zU9a1B/IEVvcDYju+5i7ZOFyFJYgbQD1JArU0TV1s7K+tfGHizwzrGklWkjAmWWZwGzgr0YDBwoDHPAPAFfPtdn4a+GPiPxFOhe0fT7PI3XF0hT5TjlVPLcHI7e4rSdGKV5y/L8Aua/wd0k6j49fU4UkitLCOSQZ+blwUVCfXDMc/7Ne0y6ra6fqUqLYXO+4uVSSZEypbZGNzHPACk8/9M274zN4e8Pad4Y0iPTdMiKQqdzMxy0j4ALMfU4Ht6YFam1cEYGD1461w1qntJ3Q0jnLfXtLihaS3trpZo/Pd7bBDh9yPIu0nBctIgA7luOCTU0N3pMl5MsVshZ5ZIpXdlwWLbHBBOT8yxA8fxp6nG7tGc4GQc9O9GxcY2jGc9O+c/wA6yGc1DqWk2Vlpipp8kcKhJbJEHG+SOUhBkj5yoYYPd19atmaxOlTb7KZLYXbcEMuW83d5oP8AdLfOGBwAc8YONraoxwOOnFNEUYGBGmN277o6+v1oAx7K40tNRTy7fy7mYlEdmDM4O45PJPzCDOTyQqg9MLWE+iXPh6OIWkbabNDunhcj/R49nnfMOwAZcY6FlxgYx0PlR/3F+9u6d/X60vlpt27FxgjGPXrQBzV7qGlM8k8mnXM2GZpBCCQ7RyLGxdAfnIPTIORG2OAM2pLvS7YJqKwvJF5TXe+NiyRKQT5m3OF3AudwAJ+YdTg7m1QScDJOScUmxcEbRgjHTt6UAc5BdaS0tj5Omv51iPJtsrh0yZItq5OTxExOeijJ6HDLu+0mbzbibT7i5ieJmEjnMZjZZQxTc2F3CMjIxnzEyfm46YIoOQoB55x+NGxBt+Vfl6cdKAOduLvS3ERmgupQl29vGHkk3CTJjLDJxjcQoYHguOQSa2bnTLK8kjkuLdHeNQqk8YAZXx/30in8KsiOMHIRQc56d/8AIFOoAgNnbmaeUxKXnQRyn+8ozgH/AL6b86abC3N4bvYyzsFDMjsu4LkgEA4IGT19TVmigCimj6dGLYLaR4toxHCCM7FDKwH4FFP1FPOmwf2gLxTIkmdzqjYWRtu0Mw7kLkflnOFxbooArXOn2l4XNxAsheF7die8b43L9DgflUB0TTT9+0R8NkeZlsfKyhef4QHYBeg3HA5rQooAgtbOCzQJAhRFQIq7yQqjOAATx1/l6Cp6KKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAz9E1X+29Hg1H7BfWHnbv8ARr+HypkwxX5lycZxkexFaFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBn/wBq/wDFQ/2R9gvv+PT7V9t8n/Rvv7fL35/1nfbjpzWhRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAFe/uvsOnXN59nnuPIieXybdN8km0E7UXuxxgDuaLC6+3adbXn2ee38+JJfJuE2SR7gDtdezDOCOxqxRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAGfreq/2Jo8+o/YL6/8AJ2/6NYQ+bM+WC/KuRnGcn2BrQoooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAoqGS7tobmC2luIknn3eTEzgNJtGW2jqcDk46VNQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFVn1Gxjv47CS8t1vJV3x27SqJHXnkLnJHB/I0AWaKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKhuLu2tPK+03EUPnSCKPzHC73PRRnqT6damoAKKKKACiiigAooooAKKKKACiiigCGS0tprmC5lt4nng3eTKyAtHuGG2nqMjg461NRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFVn06xkv47+Szt2vIl2R3DRKZEXngNjIHJ/M1ZooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAhuLS2u/K+028U3kyCWPzEDbHHRhnoR69amoooAKKKKACiiigAooooAKKKKACiiigAoqnc217LqVlPBf+Taw+Z9otvJDfaMjC/MeV2nnjrVygAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKzZrLU3163vItW8rTY4ysth9mVvNb5vm8zqvVeB/d96ANKiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiqeoW17cfZfsd/wDZPLuEkm/ciTzoxndHz93PHzDkYq5QAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBDd2sN9ZT2dym+CeNopEyRuVhgjI5HBqHStKstF02LT9Ph8m1hzsj3FsZJY8kk9SauUUAFFFFAFO50/7RqVlefa7uL7L5n7iKTbFNuGP3i4+bHUehq5RRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFZs2j+dr1vqv9o6hH5EZj+xpPi3k+98zJjk/N1z/AAj0rSooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAz9V0TTtb+xf2jb+d9hu4723+dl2TJna3BGcZPByPatCiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAorH8W/8AIm65/wBg+4/9FtR4S/5E3Q/+wfb/APotaANiiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAorj/H//ADK//YwWn/s1dhQAUUUUAFFFFABRRRQB/9k=" id="p2img1"></DIV>


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
<IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCANpApUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD13xh4y07wbpn2m8zJcShhbWy8NMwx37AZGSf1OAfANf8AiT4o8QORNqDWkGMeRZExJyMHPO5s+hJFO8f67cah8R7+6kjRhZXP2eKGbEibYmxgg8EMQWI/2jXqlx4eNtdeGzavYXKXV/A0bDDhY0Uys0eflGRH1jWMYbGG4I74RhRScldsnc+fVYqwZSQQcgjtXa+G/il4k8PzKst22pWmRvgu3LnHGdr/AHlOBgdQM5wa7vxX8OIvF/i/V7q28R2EeobVKWAAd1CxooMmGyuW77TgEfSuW034Syf2NFqXiPXrTQkmIEaXABPOSAxLKASBnAJ4645FbOrSnH3hWZ7l4f8AEGneJtJj1LTJjJC/ysrDDRvgZVh2IyP5jIINaleBfCi/bQviPc6FFdpeWl0JIfNhb92zRgssg9RhWHH97qa9lj1O6m1S9tY402W86QL8jMctEsm4kHAAz0OM465IB8+tT9nKy2KTNiis/Sbq4vbeSacxYWeaEKiEf6uRkzkk9ducds96zJPE8kN66PaA28VzLHNKrcxxp5Y8wj0BkBPooJ7VkM6Oiuft9ZvbuDTZkFvGL25kg2lC2zasrZzuGc+XjHHWpZ9cki0OW/8AKG5L0220Iz8C58nO0cscc4HU8UAbdFclfeNFsdIFzLFClyZ5YlhnkMRZY1L7irDchYBcKRkGROuebereJ102E3KJHJZy2LXFtPuIDyhSyoeOAyjIPsR3FAHRUVhHXszXMhaOC1tro2rM8TyGRgF6leIxlsc5zwe9PXW5ClifJT/SdRmsjyeFQygN9T5Q/OgDaormdI8UTagmnJcWqQ3N1Im9AxI8t4HlR1JHP3Np91b0p914jms11U3US28trHM9tBIjD7QEUsGWTO1sjkqBlec9KAOjorFOtOsNm4Vn8+8W2JktZLcqCpOQr8np16flWVb+OI7jTr26RIXaGWExpE/mEwSyBFJC5Icc5XqDj1oA6+isBNfku7jU0tIzGllBHNm5tpEZ93mZG1tpH3Bz7mpE1a4/4SF9KkK5jijkMiWsjBtxfIJBIjwEGCx5J/CgDborjrTxwH0yW9ngULHYfa3BDQ7WJwkY3D5wxyA444963tB1iPWtONwjws0crwyeS+9NysRkH0Iww9mFAGnRXPa1rN9pk1ykf2dxHp9xepujbrHtwp+bnO7rx09+I77xalm1uZ7aWzXzVNwLpRuELRysGXYx5zERg88HjkUAdLRTIZGlgjkaJ4mZQTG+Ny+xwSM/Q0+gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPlz4iaPcaV4/1SGXkXU7XMTsNoZZCW6nsCSufVTXsS654X/4TTRLSHU9PFlpWmy+RN9sj2B3KRqgOeWCK/wCDVu+MfBeneMtNEF3mK5iDfZrleTETjPGcMDgZB/DHWvn7xD8O/Evht2NzYPcW4G77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" id="p3img1"></DIV>


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
<P class="p33 ft27"><img src="'.base_url('uploads/attachment/survey/'.$contentImage['site_location_map'].'').'" width="500" height="400" alt=""/></P>
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
<IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCANpApUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD13xh4y07wbpn2m8zJcShhbWy8NMwx37AZGSf1OAfANf8AiT4o8QORNqDWkGMeRZExJyMHPO5s+hJFO8f67cah8R7+6kjRhZXP2eKGbEibYmxgg8EMQWI/2jXqlx4eNtdeGzavYXKXV/A0bDDhY0Uys0eflGRH1jWMYbGG4I74RhRScldsnc+fVYqwZSQQcgjtXa+G/il4k8PzKst22pWmRvgu3LnHGdr/AHlOBgdQM5wa7vxX8OIvF/i/V7q28R2EeobVKWAAd1CxooMmGyuW77TgEfSuW034Syf2NFqXiPXrTQkmIEaXABPOSAxLKASBnAJ4645FbOrSnH3hWZ7l4f8AEGneJtJj1LTJjJC/ysrDDRvgZVh2IyP5jIINaleBfCi/bQviPc6FFdpeWl0JIfNhb92zRgssg9RhWHH97qa9lj1O6m1S9tY402W86QL8jMctEsm4kHAAz0OM465IB8+tT9nKy2KTNiis/Sbq4vbeSacxYWeaEKiEf6uRkzkk9ducds96zJPE8kN66PaA28VzLHNKrcxxp5Y8wj0BkBPooJ7VkM6Oiuft9ZvbuDTZkFvGL25kg2lC2zasrZzuGc+XjHHWpZ9cki0OW/8AKG5L0220Iz8C58nO0cscc4HU8UAbdFclfeNFsdIFzLFClyZ5YlhnkMRZY1L7irDchYBcKRkGROuebereJ102E3KJHJZy2LXFtPuIDyhSyoeOAyjIPsR3FAHRUVhHXszXMhaOC1tro2rM8TyGRgF6leIxlsc5zwe9PXW5ClifJT/SdRmsjyeFQygN9T5Q/OgDaormdI8UTagmnJcWqQ3N1Im9AxI8t4HlR1JHP3Np91b0p914jms11U3US28trHM9tBIjD7QEUsGWTO1sjkqBlec9KAOjorFOtOsNm4Vn8+8W2JktZLcqCpOQr8np16flWVb+OI7jTr26RIXaGWExpE/mEwSyBFJC5Icc5XqDj1oA6+isBNfku7jU0tIzGllBHNm5tpEZ93mZG1tpH3Bz7mpE1a4/4SF9KkK5jijkMiWsjBtxfIJBIjwEGCx5J/CgDborjrTxwH0yW9ngULHYfa3BDQ7WJwkY3D5wxyA444963tB1iPWtONwjws0crwyeS+9NysRkH0Iww9mFAGnRXPa1rN9pk1ykf2dxHp9xepujbrHtwp+bnO7rx09+I77xalm1uZ7aWzXzVNwLpRuELRysGXYx5zERg88HjkUAdLRTIZGlgjkaJ4mZQTG+Ny+xwSM/Q0+gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPlz4iaPcaV4/1SGXkXU7XMTsNoZZCW6nsCSufVTXsS654X/4TTRLSHU9PFlpWmy+RN9sj2B3KRqgOeWCK/wCDVu+MfBeneMtNEF3mK5iDfZrleTETjPGcMDgZB/DHWvn7xD8O/Evht2NzYPcW4G77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" id="p4img1"></DIV>


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
<IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAN9ApUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD13xh4y07wbpn2m8zJcShhbWy8NMwx37AZGSf1OAfANf8AiT4o8QORNqDWkGMeRZExJyMHPO5s+hJFO8f67cah8R7+6kjRhZXP2eKGbEibYmxgg8EMQWI/2jXqlx4eNtdeGzavYXKXV/A0bDDhY0Uys0eflGRH1jWMYbGG4I74RhRScldsnc+fVYqwZSQQcgjtXa+G/il4k8PzKst22pWmRvgu3LnHGdr/AHlOBgdQM5wa7vxX8OIvF/i/V7q28R2EeobVKWAAd1CxooMmGyuW77TgEfSuW034Syf2NFqXiPXrTQkmIEaXABPOSAxLKASBnAJ4645FbOrSnH3hWZ7l4f8AEGneJtJj1LTJjJC/ysrDDRvgZVh2IyP5jIINaleBfCi/bQviPc6FFdpeWl0JIfNhb92zRgssg9RhWHH97qa9lj1O6m1S9tY402W86QL8jMctEsm4kHAAz0OM465IB8+tT9nKy2KTNiis/Sbq4vbeSacxYWeaEKiEf6uRkzkk9ducds96zJPE8kN66PaA28VzLHNKrcxxp5Y8wj0BkBPooJ7VkM6Oiuft9ZvbuDTZkFvGL25kg2lC2zasrZzuGc+XjHHWpZ9cki0OW/8AKG5L0220Iz8C58nO0cscc4HU8UAbdFclfeNFsdIFzLFClyZ5YlhnkMRZY1L7irDchYBcKRkGROuebereJ102E3KJHJZy2LXFtPuIDyhSyoeOAyjIPsR3FAHRUVhHXszXMhaOC1tro2rM8TyGRgF6leIxlsc5zwe9PXW5ClifJT/SdRmsjyeFQygN9T5Q/OgDaormdI8UTagmnJcWqQ3N1Im9AxI8t4HlR1JHP3Np91b0p914jms11U3US28trHM9tBIjD7QEUsGWTO1sjkqBlec9KAOjorFOtOsNm4Vn8+8W2JktZLcqCpOQr8np16flWVb+OI7jTr26RIXaGWExpE/mEwSyBFJC5Icc5XqDj1oA6+isBNfku7jU0tIzGllBHNm5tpEZ93mZG1tpH3Bz7mpE1a4/4SF9KkK5jijkMiWsjBtxfIJBIjwEGCx5J/CgDborjrTxwH0yW9ngULHYfa3BDQ7WJwkY3D5wxyA444963tB1iPWtONwjws0crwyeS+9NysRkH0Iww9mFAGnRXPa1rN9pk1ykf2dxHp9xepujbrHtwp+bnO7rx09+I77xalm1uZ7aWzXzVNwLpRuELRysGXYx5zERg88HjkUAdLRTIZGlgjkaJ4mZQTG+Ny+xwSM/Q0+gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPlz4iaPcaV4/1SGXkXU7XMTsNoZZCW6nsCSufVTXsS654X/4TTRLSHU9PFlpWmy+RN9sj2B3KRqgOeWCK/wCDVu+MfBeneMtNEF3mK5iDfZrleTETjPGcMDgZB/DHWvn7xD8O/Evht2NzYPcW4G77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" id="p5img1"></DIV>


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
<IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAOPApUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD13xh4y07wbpn2m8zJcShhbWy8NMwx37AZGSf1OAfANf8AiT4o8QORNqDWkGMeRZExJyMHPO5s+hJFO8f67cah8R7+6kjRhZXP2eKGbEibYmxgg8EMQWI/2jXqlx4eNtdeGzavYXKXV/A0bDDhY0Uys0eflGRH1jWMYbGG4I74RhRScldsnc+fVYqwZSQQcgjtXa+G/il4k8PzKst22pWmRvgu3LnHGdr/AHlOBgdQM5wa7vxX8OIvF/i/V7q28R2EeobVKWAAd1CxooMmGyuW77TgEfSuW034Syf2NFqXiPXrTQkmIEaXABPOSAxLKASBnAJ4645FbOrSnH3hWZ7l4f8AEGneJtJj1LTJjJC/ysrDDRvgZVh2IyP5jIINaleBfCi/bQviPc6FFdpeWl0JIfNhb92zRgssg9RhWHH97qa9lj1O6m1S9tY402W86QL8jMctEsm4kHAAz0OM465IB8+tT9nKy2KTNiis/Sbq4vbeSacxYWeaEKiEf6uRkzkk9ducds96zJPE8kN66PaA28VzLHNKrcxxp5Y8wj0BkBPooJ7VkM6Oiuft9ZvbuDTZkFvGL25kg2lC2zasrZzuGc+XjHHWpZ9cki0OW/8AKG5L0220Iz8C58nO0cscc4HU8UAbdFclfeNFsdIFzLFClyZ5YlhnkMRZY1L7irDchYBcKRkGROuebereJ102E3KJHJZy2LXFtPuIDyhSyoeOAyjIPsR3FAHRUVhHXszXMhaOC1tro2rM8TyGRgF6leIxlsc5zwe9PXW5ClifJT/SdRmsjyeFQygN9T5Q/OgDaormdI8UTagmnJcWqQ3N1Im9AxI8t4HlR1JHP3Np91b0p914jms11U3US28trHM9tBIjD7QEUsGWTO1sjkqBlec9KAOjorFOtOsNm4Vn8+8W2JktZLcqCpOQr8np16flWVb+OI7jTr26RIXaGWExpE/mEwSyBFJC5Icc5XqDj1oA6+isBNfku7jU0tIzGllBHNm5tpEZ93mZG1tpH3Bz7mpE1a4/4SF9KkK5jijkMiWsjBtxfIJBIjwEGCx5J/CgDborjrTxwH0yW9ngULHYfa3BDQ7WJwkY3D5wxyA444963tB1iPWtONwjws0crwyeS+9NysRkH0Iww9mFAGnRXPa1rN9pk1ykf2dxHp9xepujbrHtwp+bnO7rx09+I77xalm1uZ7aWzXzVNwLpRuELRysGXYx5zERg88HjkUAdLRTIZGlgjkaJ4mZQTG+Ny+xwSM/Q0+gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPlz4iaPcaV4/1SGXkXU7XMTsNoZZCW6nsCSufVTXsS654X/4TTRLSHU9PFlpWmy+RN9sj2B3KRqgOeWCK/wCDVu+MfBeneMtNEF3mK5iDfZrleTETjPGcMDgZB/DHWvn7xD8O/Evht2NzYPcW4G77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Mkoqn42HiTxjrMOof8Ijqtp5dusHl/Z5JM4ZmznYP73T2ooA+haKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDB1v/hLftqf2D/Yn2Xyxv+3+bv35OcbOMY2++c0VvUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFQ2t3bX1slzZ3EVxA+dssLh1bBwcEcHkEUATUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFMmmit4ZJppEjijUu7uwCqoGSST0AohmiuIY5oZEkikUOjowKspGQQR1BoAfRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFUL3XNI0yYQ3+qWVpKy7wk9wkbFckZwT04P5UUAX6htbS2sbZLazt4reBM7YoUCKuTk4A4HJJqaigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAp6rpVlrWmy6fqEPnWs2N8e4rnBDDkEHqBVmGGK3hjhhjSOKNQiIigKqgYAAHQCn0UAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBQvdD0jU5hNf6XZXcqrsDz26SMFyTjJHTk/nRV+igAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACi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ADAP+3j/ANp0UfHX/mAf9vH/ALTooA9I8W/8ibrn/YPuP/RbVsVj+Lf+RN1z/sH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/8wD/t4/8AadFHx1/5gH/bx/7TooA9I8W/8ibrn/YPuP8A0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f8Ajr/zAP8At4/9p0UfHX/mAf8Abx/7TooA9I8W/wDIm65/2D7j/wBFtWxWP4t/5E3XP+wfcf8Aotq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/wDMA/7eP/adFHx1/wCYB/28f+06KAPSPFv/ACJuuf8AYPuP/RbVsVj+Lf8AkTdc/wCwfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/wAwD/t4/wDadFHx1/5gH/bx/wC06KAPSPFv/Im65/2D7j/0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f+Ov/MA/7eP/AGnRR8df+YB/28f+06KAPSPFv/Im65/2D7j/ANFtWxWP4t/5E3XP+wfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/AI6/8wD/ALeP/adFHx1/5gH/AG8f+06KAPSPFv8AyJuuf9g+4/8ARbVsVj+Lf+RN1z/sH3H/AKLatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f+Ov8AzAP+3j/2nRR8df8AmAf9vH/tOigD0jxb/wAibrn/AGD7j/0W1bFY/i3/AJE3XP8AsH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/8AMA/7eP8A2nRR8df+YB/28f8AtOigD0jxb/yJuuf9g+4/9FtWxWP4t/5E3XP+wfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/zAP+3j/wBp0UfHX/mAf9vH/tOigD0jxb/yJuuf9g+4/wDRbVsVj+Lf+RN1z/sH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/wCOv/MA/wC3j/2nRR8df+YB/wBvH/tOigD0jxb/AMibrn/YPuP/AEW1bFY/i3/kTdc/7B9x/wCi2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/AMwD/t4/9p0UfHX/AJgH/bx/7TooA9I8W/8AIm65/wBg+4/9FtWxWP4t/wCRN1z/ALB9x/6Larmlf2l/ZsX9r/ZPt/Pm/ZN3ldTjbu56YznvmgC5RRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUVT1X+0v7Nl/sj7J9v48r7Xu8rqM7tvPTOMd8VNafafsUH23yvtXlr53k52b8fNtzzjOcZ5xQBNRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAeP/HX/AJgH/bx/7ToqD45faftui7vK+y+XL5eM79+V357Yxsx3zuz2ooA9P8W/8ibrn/YPuP8A0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f8Ajr/zAP8At4/9p0UfHX/mAf8Abx/7TooA9U1aw/tTRr7T/M8r7VbyQeZt3bdylc44zjPSqf2bxJ/0FtK/8Fkn/wAfrYooAx/s3iT/AKC2lf8Agsk/+P0fZvEn/QW0r/wWSf8Ax+tiigDH+zeJP+gtpX/gsk/+P0fZvEn/AEFtK/8ABZJ/8frYooAx/s3iT/oLaV/4LJP/AI/R9m8Sf9BbSv8AwWSf/H62KKAMf7N4k/6C2lf+CyT/AOP0fZvEn/QW0r/wWSf/AB+tiigDH+zeJP8AoLaV/wCCyT/4/R9m8Sf9BbSv/BZJ/wDH62KKAMf7N4k/6C2lf+CyT/4/R9m8Sf8AQW0r/wAFkn/x+tiigDH+zeJP+gtpX/gsk/8Aj9H2bxJ/0FtK/wDBZJ/8frYooAx/s3iT/oLaV/4LJP8A4/R9m8Sf9BbSv/BZJ/8AH62KKAMf7N4k/wCgtpX/AILJP/j9H2bxJ/0FtK/8Fkn/AMfrYooAx/s3iT/oLaV/4LJP/j9H2bxJ/wBBbSv/AAWSf/H62KKAMf7N4k/6C2lf+CyT/wCP0fZvEn/QW0r/AMFkn/x+tiigDH+zeJP+gtpX/gsk/wDj9H2bxJ/0FtK/8Fkn/wAfrYooAx/s3iT/AKC2lf8Agsk/+P0fZvEn/QW0r/wWSf8Ax+tiigDH+zeJP+gtpX/gsk/+P0fZvEn/AEFtK/8ABZJ/8frYooAx/s3iT/oLaV/4LJP/AI/R9m8Sf9BbSv8AwWSf/H62KKAMf7N4k/6C2lf+CyT/AOP0fZvEn/QW0r/wWSf/AB+tiigDH+zeJP8AoLaV/wCCyT/4/R9m8Sf9BbSv/BZJ/wDH62KKAMf7N4k/6C2lf+CyT/4/R9m8Sf8AQW0r/wAFkn/x+tiigDH+zeJP+gtpX/gsk/8Aj9H2bxJ/0FtK/wDBZJ/8frYooAx/s3iT/oLaV/4LJP8A4/R9m8Sf9BbSv/BZJ/8AH62KKAMf7N4k/wCgtpX/AILJP/j9H2bxJ/0FtK/8Fkn/AMfrYooAx/s3iT/oLaV/4LJP/j9H2bxJ/wBBbSv/AAWSf/H62KKAMf7N4k/6C2lf+CyT/wCP0fZvEn/QW0r/AMFkn/x+tiigDH+zeJP+gtpX/gsk/wDj9H2bxJ/0FtK/8Fkn/wAfrYooAx/s3iT/AKC2lf8Agsk/+P0fZvEn/QW0r/wWSf8Ax+tiigDH+zeJP+gtpX/gsk/+P0fZvEn/AEFtK/8ABZJ/8frYooAx/s3iT/oLaV/4LJP/AI/R9m8Sf9BbSv8AwWSf/H62KKAMf7N4k/6C2lf+CyT/AOP0fZvEn/QW0r/wWSf/AB+tiigDH+zeJP8AoLaV/wCCyT/4/R9m8Sf9BbSv/BZJ/wDH62KKAMf7N4k/6C2lf+CyT/4/R9m8Sf8AQW0r/wAFkn/x+tiigDH+zeJP+gtpX/gsk/8Aj9H2bxJ/0FtK/wDBZJ/8frYooAx/s3iT/oLaV/4LJP8A4/R9m8Sf9BbSv/BZJ/8AH62KKAMf7N4k/wCgtpX/AILJP/j9H2bxJ/0FtK/8Fkn/AMfrYooAx/s3iT/oLaV/4LJP/j9H2bxJ/wBBbSv/AAWSf/H62KKAMf7N4k/6C2lf+CyT/wCP0fZvEn/QW0r/AMFkn/x+tiigDH+zeJP+gtpX/gsk/wDj9H2bxJ/0FtK/8Fkn/wAfrYooAx/s3iT/AKC2lf8Agsk/+P0fZvEn/QW0r/wWSf8Ax+tiigDH+zeJP+gtpX/gsk/+P0fZvEn/AEFtK/8ABZJ/8frYooAx/s3iT/oLaV/4LJP/AI/R9m8Sf9BbSv8AwWSf/H62KKAMf7N4k/6C2lf+CyT/AOP0fZvEn/QW0r/wWSf/AB+tiigDzHxx4D8VeLL20ZtU0p4LeMhF8p4MMx+Y4/eE5AXnd26Dkkr06igAorN8Q3U1j4Z1W8tn2TwWc0sb4B2sqEg4PB5FQ/2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM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" id="p6img1"></DIV>


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
<IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAOPApUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD13xh4y07wbpn2m8zJcShhbWy8NMwx37AZGSf1OAfANf8AiT4o8QORNqDWkGMeRZExJyMHPO5s+hJFO8f67cah8R7+6kjRhZXP2eKGbEibYmxgg8EMQWI/2jXqlx4eNtdeGzavYXKXV/A0bDDhY0Uys0eflGRH1jWMYbGG4I74RhRScldsnc+fVYqwZSQQcgjtXa+G/il4k8PzKst22pWmRvgu3LnHGdr/AHlOBgdQM5wa7vxX8OIvF/i/V7q28R2EeobVKWAAd1CxooMmGyuW77TgEfSuW034Syf2NFqXiPXrTQkmIEaXABPOSAxLKASBnAJ4645FbOrSnH3hWZ7l4f8AEGneJtJj1LTJjJC/ysrDDRvgZVh2IyP5jIINaleBfCi/bQviPc6FFdpeWl0JIfNhb92zRgssg9RhWHH97qa9lj1O6m1S9tY402W86QL8jMctEsm4kHAAz0OM465IB8+tT9nKy2KTNiis/Sbq4vbeSacxYWeaEKiEf6uRkzkk9ducds96zJPE8kN66PaA28VzLHNKrcxxp5Y8wj0BkBPooJ7VkM6Oiuft9ZvbuDTZkFvGL25kg2lC2zasrZzuGc+XjHHWpZ9cki0OW/8AKG5L0220Iz8C58nO0cscc4HU8UAbdFclfeNFsdIFzLFClyZ5YlhnkMRZY1L7irDchYBcKRkGROuebereJ102E3KJHJZy2LXFtPuIDyhSyoeOAyjIPsR3FAHRUVhHXszXMhaOC1tro2rM8TyGRgF6leIxlsc5zwe9PXW5ClifJT/SdRmsjyeFQygN9T5Q/OgDaormdI8UTagmnJcWqQ3N1Im9AxI8t4HlR1JHP3Np91b0p914jms11U3US28trHM9tBIjD7QEUsGWTO1sjkqBlec9KAOjorFOtOsNm4Vn8+8W2JktZLcqCpOQr8np16flWVb+OI7jTr26RIXaGWExpE/mEwSyBFJC5Icc5XqDj1oA6+isBNfku7jU0tIzGllBHNm5tpEZ93mZG1tpH3Bz7mpE1a4/4SF9KkK5jijkMiWsjBtxfIJBIjwEGCx5J/CgDborjrTxwH0yW9ngULHYfa3BDQ7WJwkY3D5wxyA444963tB1iPWtONwjws0crwyeS+9NysRkH0Iww9mFAGnRXPa1rN9pk1ykf2dxHp9xepujbrHtwp+bnO7rx09+I77xalm1uZ7aWzXzVNwLpRuELRysGXYx5zERg88HjkUAdLRTIZGlgjkaJ4mZQTG+Ny+xwSM/Q0+gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPlz4iaPcaV4/1SGXkXU7XMTsNoZZCW6nsCSufVTXsS654X/4TTRLSHU9PFlpWmy+RN9sj2B3KRqgOeWCK/wCDVu+MfBeneMtNEF3mK5iDfZrleTETjPGcMDgZB/DHWvn7xD8O/Evht2NzYPcW4G77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Mkoqn42HiTxjrMOof8Ijqtp5dusHl/Z5JM4ZmznYP73T2ooA+haKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDB1v/hLftqf2D/Yn2Xyxv+3+bv35OcbOMY2++c0VvUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFQ2t3bX1slzZ3EVxA+dssLh1bBwcEcHkEUATUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFMmmit4ZJppEjijUu7uwCqoGSST0AohmiuIY5oZEkikUOjowKspGQQR1BoAfRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFUL3XNI0yYQ3+qWVpKy7wk9wkbFckZwT04P5UUAX6htbS2sbZLazt4reBM7YoUCKuTk4A4HJJqaigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAp6rpVlrWmy6fqEPnWs2N8e4rnBDDkEHqBVmGGK3hjhhjSOKNQiIigKqgYAAHQCn0UAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBQvdD0jU5hNf6XZXcqrsDz26SMFyTjJHTk/nRV+igAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACi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ADAP+3j/ANp0UfHX/mAf9vH/ALTooA9I8W/8ibrn/YPuP/RbVsVj+Lf+RN1z/sH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/8wD/t4/8AadFHx1/5gH/bx/7TooA9I8W/8ibrn/YPuP8A0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f8Ajr/zAP8At4/9p0UfHX/mAf8Abx/7TooA9I8W/wDIm65/2D7j/wBFtWxWP4t/5E3XP+wfcf8Aotq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/wDMA/7eP/adFHx1/wCYB/28f+06KAPSPFv/ACJuuf8AYPuP/RbVsVj+Lf8AkTdc/wCwfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/wAwD/t4/wDadFHx1/5gH/bx/wC06KAPSPFv/Im65/2D7j/0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f+Ov/MA/7eP/AGnRR8df+YB/28f+06KAPSPFv/Im65/2D7j/ANFtWxWP4t/5E3XP+wfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/AI6/8wD/ALeP/adFHx1/5gH/AG8f+06KAPSPFv8AyJuuf9g+4/8ARbVsVj+Lf+RN1z/sH3H/AKLatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f+Ov8AzAP+3j/2nRR8df8AmAf9vH/tOigD0jxb/wAibrn/AGD7j/0W1bFY/i3/AJE3XP8AsH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/8AMA/7eP8A2nRR8df+YB/28f8AtOigD0jxb/yJuuf9g+4/9FtWxWP4t/5E3XP+wfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/zAP+3j/wBp0UfHX/mAf9vH/tOigD0jxb/yJuuf9g+4/wDRbVsVj+Lf+RN1z/sH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/wCOv/MA/wC3j/2nRR8df+YB/wBvH/tOigD0jxb/AMibrn/YPuP/AEW1bFY/i3/kTdc/7B9x/wCi2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/AMwD/t4/9p0UfHX/AJgH/bx/7TooA9I8W/8AIm65/wBg+4/9FtWxWP4t/wCRN1z/ALB9x/6Larmlf2l/ZsX9r/ZPt/Pm/ZN3ldTjbu56YznvmgC5RRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUVT1X+0v7Nl/sj7J9v48r7Xu8rqM7tvPTOMd8VNafafsUH23yvtXlr53k52b8fNtzzjOcZ5xQBNRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUU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0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM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" id="p7img1"></DIV>


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
<IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAOPApUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD13xh4y07wbpn2m8zJcShhbWy8NMwx37AZGSf1OAfANf8AiT4o8QORNqDWkGMeRZExJyMHPO5s+hJFO8f67cah8R7+6kjRhZXP2eKGbEibYmxgg8EMQWI/2jXqlx4eNtdeGzavYXKXV/A0bDDhY0Uys0eflGRH1jWMYbGG4I74RhRScldsnc+fVYqwZSQQcgjtXa+G/il4k8PzKst22pWmRvgu3LnHGdr/AHlOBgdQM5wa7vxX8OIvF/i/V7q28R2EeobVKWAAd1CxooMmGyuW77TgEfSuW034Syf2NFqXiPXrTQkmIEaXABPOSAxLKASBnAJ4645FbOrSnH3hWZ7l4f8AEGneJtJj1LTJjJC/ysrDDRvgZVh2IyP5jIINaleBfCi/bQviPc6FFdpeWl0JIfNhb92zRgssg9RhWHH97qa9lj1O6m1S9tY402W86QL8jMctEsm4kHAAz0OM465IB8+tT9nKy2KTNiis/Sbq4vbeSacxYWeaEKiEf6uRkzkk9ducds96zJPE8kN66PaA28VzLHNKrcxxp5Y8wj0BkBPooJ7VkM6Oiuft9ZvbuDTZkFvGL25kg2lC2zasrZzuGc+XjHHWpZ9cki0OW/8AKG5L0220Iz8C58nO0cscc4HU8UAbdFclfeNFsdIFzLFClyZ5YlhnkMRZY1L7irDchYBcKRkGROuebereJ102E3KJHJZy2LXFtPuIDyhSyoeOAyjIPsR3FAHRUVhHXszXMhaOC1tro2rM8TyGRgF6leIxlsc5zwe9PXW5ClifJT/SdRmsjyeFQygN9T5Q/OgDaormdI8UTagmnJcWqQ3N1Im9AxI8t4HlR1JHP3Np91b0p914jms11U3US28trHM9tBIjD7QEUsGWTO1sjkqBlec9KAOjorFOtOsNm4Vn8+8W2JktZLcqCpOQr8np16flWVb+OI7jTr26RIXaGWExpE/mEwSyBFJC5Icc5XqDj1oA6+isBNfku7jU0tIzGllBHNm5tpEZ93mZG1tpH3Bz7mpE1a4/4SF9KkK5jijkMiWsjBtxfIJBIjwEGCx5J/CgDborjrTxwH0yW9ngULHYfa3BDQ7WJwkY3D5wxyA444963tB1iPWtONwjws0crwyeS+9NysRkH0Iww9mFAGnRXPa1rN9pk1ykf2dxHp9xepujbrHtwp+bnO7rx09+I77xalm1uZ7aWzXzVNwLpRuELRysGXYx5zERg88HjkUAdLRTIZGlgjkaJ4mZQTG+Ny+xwSM/Q0+gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPlz4iaPcaV4/1SGXkXU7XMTsNoZZCW6nsCSufVTXsS654X/4TTRLSHU9PFlpWmy+RN9sj2B3KRqgOeWCK/wCDVu+MfBeneMtNEF3mK5iDfZrleTETjPGcMDgZB/DHWvn7xD8O/Evht2NzYPcW4G77TaAyR4AGcnGVxnHzAdDjNd8JRrRSbs0Tsei+Gk0PwTf32uah4o0zU9a1B/IEVvcDYju+5i7ZOFyFJYgbQD1JArU0TV1s7K+tfGHizwzrGklWkjAmWWZwGzgr0YDBwoDHPAPAFfPtdn4a+GPiPxFOhe0fT7PI3XF0hT5TjlVPLcHI7e4rSdGKV5y/L8Aua/wd0k6j49fU4UkitLCOSQZ+blwUVCfXDMc/7Ne0y6ra6fqUqLYXO+4uVSSZEypbZGNzHPACk8/9M274zN4e8Pad4Y0iPTdMiKQqdzMxy0j4ALMfU4Ht6YFam1cEYGD1461w1qntJ3Q0jnLfXtLihaS3trpZo/Pd7bBDh9yPIu0nBctIgA7luOCTU0N3pMl5MsVshZ5ZIpXdlwWLbHBBOT8yxA8fxp6nG7tGc4GQc9O9GxcY2jGc9O+c/wA6yGc1DqWk2Vlpipp8kcKhJbJEHG+SOUhBkj5yoYYPd19atmaxOlTb7KZLYXbcEMuW83d5oP8AdLfOGBwAc8YONraoxwOOnFNEUYGBGmN277o6+v1oAx7K40tNRTy7fy7mYlEdmDM4O45PJPzCDOTyQqg9MLWE+iXPh6OIWkbabNDunhcj/R49nnfMOwAZcY6FlxgYx0PlR/3F+9u6d/X60vlpt27FxgjGPXrQBzV7qGlM8k8mnXM2GZpBCCQ7RyLGxdAfnIPTIORG2OAM2pLvS7YJqKwvJF5TXe+NiyRKQT5m3OF3AudwAJ+YdTg7m1QScDJOScUmxcEbRgjHTt6UAc5BdaS0tj5Omv51iPJtsrh0yZItq5OTxExOeijJ6HDLu+0mbzbibT7i5ieJmEjnMZjZZQxTc2F3CMjIxnzEyfm46YIoOQoB55x+NGxBt+Vfl6cdKAOduLvS3ERmgupQl29vGHkk3CTJjLDJxjcQoYHguOQSa2bnTLK8kjkuLdHeNQqk8YAZXx/30in8KsiOMHIRQc56d/8AIFOoAgNnbmaeUxKXnQRyn+8ozgH/AL6b86abC3N4bvYyzsFDMjsu4LkgEA4IGT19TVmigCimj6dGLYLaR4toxHCCM7FDKwH4FFP1FPOmwf2gLxTIkmdzqjYWRtu0Mw7kLkflnOFxbooArXOn2l4XNxAsheF7die8b43L9DgflUB0TTT9+0R8NkeZlsfKyhef4QHYBeg3HA5rQooAgtbOCzQJAhRFQIq7yQqjOAATx1/l6Cp6KKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAz9E1X+29Hg1H7BfWHnbv8ARr+HypkwxX5lycZxkexFaFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBn/wBt6d/wkP8AYH2j/iZ/ZPtvkbG/1O/Zu3Y2/e4xnPtWhRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAFe/uvsOnXN59nnuPIieXybdN8km0E7UXuxxgDuaLC6+3adbXn2ee38+JJfJuE2SR7gDtdezDOCOxqxRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFAGfret6d4c0efVtWuPs9jBt8yXYz7dzBRwoJPJA4FaFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRWV4nmlt/CeszQyPHLHYzujoxDKwjYggjoRXK6H4Nl1Pw/pt/N4s8ULLdWsUzhNRIUMyAnGV6c0Ad/RXH/8ACAf9Td4r/wDBl/8AY0f8IB/1N3iv/wAGX/2NAHYUVx//AAgH/U3eK/8AwZf/AGNH/CAf9Td4r/8ABl/9jQB2FFcf/wAIB/1N3iv/AMGX/wBjR/wgH/U3eK//AAZf/Y0AdhRXH/8ACAf9Td4r/wDBl/8AY0f8IB/1N3iv/wAGX/2NAHYUVx//AAgH/U3eK/8AwZf/AGNH/CAf9Td4r/8ABl/9jQB2FFcf/wAIB/1N3iv/AMGX/wBjR/wgH/U3eK//AAZf/Y0AdhRXH/8ACAf9Td4r/wDBl/8AY0f8IB/1N3iv/wAGX/2NAHYUVx//AAgH/U3eK/8AwZf/AGNH/CAf9Td4r/8ABl/9jQB2FFcf/wAIB/1N3iv/AMGX/wBjR/wgH/U3eK//AAZf/Y0AdhRXH/8ACAf9Td4r/wDBl/8AY0f8IB/1N3iv/wAGX/2NAHYUVx//AAgH/U3eK/8AwZf/AGNH/CAf9Td4r/8ABl/9jQB2FFcf/wAIB/1N3iv/AMGX/wBjR/wgH/U3eK//AAZf/Y0AdhRXH/8ACAf9Td4r/wDBl/8AY0f8IB/1N3iv/wAGX/2NAHYUVx//AAgH/U3eK/8AwZf/AGNH/CAf9Td4r/8ABl/9jQB2FFcf/wAIB/1N3iv/AMGX/wBjR/wgH/U3eK//AAZf/Y0AdhRXH/8ACAf9Td4r/wDBl/8AY0f8IB/1N3iv/wAGX/2NAHYUVx//AAgH/U3eK/8AwZf/AGNH/CAf9Td4r/8ABl/9jQB2FFcf/wAIB/1N3iv/AMGX/wBjR/wgH/U3eK//AAZf/Y0AdhRXH/8ACAf9Td4r/wDBl/8AY0f8IB/1N3iv/wAGX/2NAHYUVx//AAgH/U3eK/8AwZf/AGNH/CAf9Td4r/8ABl/9jQB2FFcf/wAIB/1N3iv/AMGX/wBjR/wgH/U3eK//AAZf/Y0AdhRXH/8ACAf9Td4r/wDBl/8AY0f8IB/1N3iv/wAGX/2NAHYUVx//AAgH/U3eK/8AwZf/AGNH/CAf9Td4r/8ABl/9jQB2FFcf/wAIB/1N3iv/AMGX/wBjR/wgH/U3eK//AAZf/Y0AdhRXH/8ACAf9Td4r/wDBl/8AY0f8IB/1N3iv/wAGX/2NAHYUVx//AAgH/U3eK/8AwZf/AGNH/CAf9Td4r/8ABl/9jQB2FFcf/wAIB/1N3iv/AMGX/wBjR/wgH/U3eK//AAZf/Y0AdhRXH/8ACAf9Td4r/wDBl/8AY0f8IB/1N3iv/wAGX/2NAHYUVx//AAgH/U3eK/8AwZf/AGNH/CAf9Td4r/8ABl/9jQB2FFcf/wAIB/1N3iv/AMGX/wBjR/wgH/U3eK//AAZf/Y0AdhRXH/8ACAf9Td4r/wDBl/8AY0f8IB/1N3iv/wAGX/2NAHYUVx//AAgH/U3eK/8AwZf/AGNH/CAf9Td4r/8ABl/9jQB2FFcf/wAIB/1N3iv/AMGX/wBjR/wgH/U3eK//AAZf/Y0AdhRXH/8ACAf9Td4r/wDBl/8AY0f8IB/1N3iv/wAGX/2NAHYUVx//AAgH/U3eK/8AwZf/AGNH/CAf9Td4r/8ABl/9jQB2FFcf/wAIB/1N3iv/AMGX/wBjR/wgH/U3eK//AAZf/Y0AdhRXH/8ACAf9Td4r/wDBl/8AY0f8IB/1N3iv/wAGX/2NAHYUVx//AAgH/U3eK/8AwZf/AGNH/CAf9Td4r/8ABl/9jQB2FFcf/wAIB/1N3iv/AMGX/wBjR/wgH/U3eK//AAZf/Y0AdhRXH/8ACAf9Td4r/wDBl/8AY0f8IB/1N3iv/wAGX/2NAHYUV4H8Q5NX8JeIILCw8S67JFJarMTPfuW3F3HbHHyiigD2Txb/AMibrn/YPuP/AEW1HhL/AJE3Q/8AsH2//otaPFv/ACJuuf8AYPuP/RbUeEv+RN0P/sH2/wD6LWgDYooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8G+Nn/ACOVn/2D0/8ARklFHxs/5HKz/wCwen/oySigD2Hxb/yJuuf9g+4/9FtR4S/5E3Q/+wfb/wDotaf4nhluPCeswwxvJLJYzoiIpLMxjYAADqTXAaT458SaXo1jp/8AwgGqy/ZbeODzMSLu2qFzjyjjOOlAHqlFeb/8LI8Sf9E71X85P/jVH/CyPEn/AETvVfzk/wDjVAHpFFeb/wDCyPEn/RO9V/OT/wCNUf8ACyPEn/RO9V/OT/41QB6RRXm//CyPEn/RO9V/OT/41R/wsjxJ/wBE71X85P8A41QB6RRXm/8AwsjxJ/0TvVfzk/8AjVH/AAsjxJ/0TvVfzk/+NUAekUV5v/wsjxJ/0TvVfzk/+NUf8LI8Sf8ARO9V/OT/AONUAekUV5v/AMLI8Sf9E71X85P/AI1R/wALI8Sf9E71X85P/jVAHpFFeb/8LI8Sf9E71X85P/jVH/CyPEn/AETvVfzk/wDjVAHpFFeb/wDCyPEn/RO9V/OT/wCNUf8ACyPEn/RO9V/OT/41QB6RRXm//CyPEn/RO9V/OT/41R/wsjxJ/wBE71X85P8A41QB6RRXm/8AwsjxJ/0TvVfzk/8AjVH/AAsjxJ/0TvVfzk/+NUAekUV5v/wsjxJ/0TvVfzk/+NUf8LI8Sf8ARO9V/OT/AONUAekUV5v/AMLI8Sf9E71X85P/AI1R/wALI8Sf9E71X85P/jVAHpFFeb/8LI8Sf9E71X85P/jVH/CyPEn/AETvVfzk/wDjVAHpFFeb/wDCyPEn/RO9V/OT/wCNUf8ACyPEn/RO9V/OT/41QB6RRXm//CyPEn/RO9V/OT/41R/wsjxJ/wBE71X85P8A41QB6RRXm/8AwsjxJ/0TvVfzk/8AjVH/AAsjxJ/0TvVfzk/+NUAekUV5v/wsjxJ/0TvVfzk/+NUf8LI8Sf8ARO9V/OT/AONUAekUV5v/AMLI8Sf9E71X85P/AI1R/wALI8Sf9E71X85P/jVAHpFFeb/8LI8Sf9E71X85P/jVH/CyPEn/AETvVfzk/wDjVAHpFFeb/wDCyPEn/RO9V/OT/wCNUf8ACyPEn/RO9V/OT/41QB6RRXm//CyPEn/RO9V/OT/41R/wsjxJ/wBE71X85P8A41QB6RRXm/8AwsjxJ/0TvVfzk/8AjVH/AAsjxJ/0TvVfzk/+NUAekUV5v/wsjxJ/0TvVfzk/+NUf8LI8Sf8ARO9V/OT/AONUAekUV5v/AMLI8Sf9E71X85P/AI1R/wALI8Sf9E71X85P/jVAHpFFeb/8LI8Sf9E71X85P/jVH/CyPEn/AETvVfzk/wDjVAHpFFeb/wDCyPEn/RO9V/OT/wCNUf8ACyPEn/RO9V/OT/41QB6RRXm//CyPEn/RO9V/OT/41R/wsjxJ/wBE71X85P8A41QB6RRXm/8AwsjxJ/0TvVfzk/8AjVH/AAsjxJ/0TvVfzk/+NUAekUV5v/wsjxJ/0TvVfzk/+NUf8LI8Sf8ARO9V/OT/AONUAekUV5v/AMLI8Sf9E71X85P/AI1R/wALI8Sf9E71X85P/jVAHpFFeb/8LI8Sf9E71X85P/jVH/CyPEn/AETvVfzk/wDjVAHpFFeb/wDCyPEn/RO9V/OT/wCNUf8ACyPEn/RO9V/OT/41QB6RRXm//CyPEn/RO9V/OT/41R/wsjxJ/wBE71X85P8A41QB6RRXm/8AwsjxJ/0TvVfzk/8AjVH/AAsjxJ/0TvVfzk/+NUAekUV5v/wsjxJ/0TvVfzk/+NUf8LI8Sf8ARO9V/OT/AONUAekUV5v/AMLI8Sf9E71X85P/AI1R/wALI8Sf9E71X85P/jVAHpFFeb/8LI8Sf9E71X85P/jVH/CyPEn/AETvVfzk/wDjVAHpFFeb/wDCyPEn/RO9V/OT/wCNUf8ACyPEn/RO9V/OT/41QB6RRXm//CyPEn/RO9V/OT/41R/wsjxJ/wBE71X85P8A41QB6RRXm/8AwsjxJ/0TvVfzk/8AjVH/AAsjxJ/0TvVfzk/+NUAcd8bP+Rys/wDsHp/6Mkoqn42HiTxjrMOof8Ijqtp5dusHl/Z5JM4ZmznYP73T2ooA+haKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDB1v/hLftqf2D/Yn2Xyxv+3+bv35OcbOMY2++c0VvUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFQ2t3bX1slzZ3EVxA+dssLh1bBwcEcHkEUATUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFMmmit4ZJppEjijUu7uwCqoGSST0AohmiuIY5oZEkikUOjowKspGQQR1BoAfRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFUL3XNI0yYQ3+qWVpKy7wk9wkbFckZwT04P5UUAX6htbS2sbZLazt4reBM7YoUCKuTk4A4HJJqaigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAp6rpVlrWmy6fqEPnWs2N8e4rnBDDkEHqBVmGGK3hjhhjSOKNQiIigKqgYAAHQCn0UAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBQvdD0jU5hNf6XZXcqrsDz26SMFyTjJHTk/nRV+igAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACi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ADAP+3j/ANp0UfHX/mAf9vH/ALTooA9I8W/8ibrn/YPuP/RbVsVj+Lf+RN1z/sH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/8wD/t4/8AadFHx1/5gH/bx/7TooA9I8W/8ibrn/YPuP8A0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f8Ajr/zAP8At4/9p0UfHX/mAf8Abx/7TooA9I8W/wDIm65/2D7j/wBFtWxWP4t/5E3XP+wfcf8Aotq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/wDMA/7eP/adFHx1/wCYB/28f+06KAPSPFv/ACJuuf8AYPuP/RbVsVj+Lf8AkTdc/wCwfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/wAwD/t4/wDadFHx1/5gH/bx/wC06KAPSPFv/Im65/2D7j/0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f+Ov/MA/7eP/AGnRR8df+YB/28f+06KAPSPFv/Im65/2D7j/ANFtWxWP4t/5E3XP+wfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/AI6/8wD/ALeP/adFHx1/5gH/AG8f+06KAPSPFv8AyJuuf9g+4/8ARbVsVj+Lf+RN1z/sH3H/AKLatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f+Ov8AzAP+3j/2nRR8df8AmAf9vH/tOigD0jxb/wAibrn/AGD7j/0W1bFY/i3/AJE3XP8AsH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/8AMA/7eP8A2nRR8df+YB/28f8AtOigD0jxb/yJuuf9g+4/9FtWxWP4t/5E3XP+wfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/zAP+3j/wBp0UfHX/mAf9vH/tOigD0jxb/yJuuf9g+4/wDRbVsVj+Lf+RN1z/sH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/wCOv/MA/wC3j/2nRR8df+YB/wBvH/tOigD0jxb/AMibrn/YPuP/AEW1bFY/i3/kTdc/7B9x/wCi2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/AMwD/t4/9p0UfHX/AJgH/bx/7TooA9I8W/8AIm65/wBg+4/9FtWxWP4t/wCRN1z/ALB9x/6Larmlf2l/ZsX9r/ZPt/Pm/ZN3ldTjbu56YznvmgC5RRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUVT1X+0v7Nl/sj7J9v48r7Xu8rqM7tvPTOMd8VNafafsUH23yvtXlr53k52b8fNtzzjOcZ5xQBNRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUU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0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM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" id="p8img1"></DIV>


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
<IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAOPApUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD13xh4y07wbpn2m8zJcShhbWy8NMwx37AZGSf1OAfANf8AiT4o8QORNqDWkGMeRZExJyMHPO5s+hJFO8f67cah8R7+6kjRhZXP2eKGbEibYmxgg8EMQWI/2jXqlx4eNtdeGzavYXKXV/A0bDDhY0Uys0eflGRH1jWMYbGG4I74RhRScldsnc+fVYqwZSQQcgjtXa+G/il4k8PzKst22pWmRvgu3LnHGdr/AHlOBgdQM5wa7vxX8OIvF/i/V7q28R2EeobVKWAAd1CxooMmGyuW77TgEfSuW034Syf2NFqXiPXrTQkmIEaXABPOSAxLKASBnAJ4645FbOrSnH3hWZ7l4f8AEGneJtJj1LTJjJC/ysrDDRvgZVh2IyP5jIINaleBfCi/bQviPc6FFdpeWl0JIfNhb92zRgssg9RhWHH97qa9lj1O6m1S9tY402W86QL8jMctEsm4kHAAz0OM465IB8+tT9nKy2KTNiis/Sbq4vbeSacxYWeaEKiEf6uRkzkk9ducds96zJPE8kN66PaA28VzLHNKrcxxp5Y8wj0BkBPooJ7VkM6Oiuft9ZvbuDTZkFvGL25kg2lC2zasrZzuGc+XjHHWpZ9cki0OW/8AKG5L0220Iz8C58nO0cscc4HU8UAbdFclfeNFsdIFzLFClyZ5YlhnkMRZY1L7irDchYBcKRkGROuebereJ102E3KJHJZy2LXFtPuIDyhSyoeOAyjIPsR3FAHRUVhHXszXMhaOC1tro2rM8TyGRgF6leIxlsc5zwe9PXW5ClifJT/SdRmsjyeFQygN9T5Q/OgDaormdI8UTagmnJcWqQ3N1Im9AxI8t4HlR1JHP3Np91b0p914jms11U3US28trHM9tBIjD7QEUsGWTO1sjkqBlec9KAOjorFOtOsNm4Vn8+8W2JktZLcqCpOQr8np16flWVb+OI7jTr26RIXaGWExpE/mEwSyBFJC5Icc5XqDj1oA6+isBNfku7jU0tIzGllBHNm5tpEZ93mZG1tpH3Bz7mpE1a4/4SF9KkK5jijkMiWsjBtxfIJBIjwEGCx5J/CgDborjrTxwH0yW9ngULHYfa3BDQ7WJwkY3D5wxyA444963tB1iPWtONwjws0crwyeS+9NysRkH0Iww9mFAGnRXPa1rN9pk1ykf2dxHp9xepujbrHtwp+bnO7rx09+I77xalm1uZ7aWzXzVNwLpRuELRysGXYx5zERg88HjkUAdLRTIZGlgjkaJ4mZQTG+Ny+xwSM/Q0+gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPlz4iaPcaV4/1SGXkXU7XMTsNoZZCW6nsCSufVTXsS654X/4TTRLSHU9PFlpWmy+RN9sj2B3KRqgOeWCK/wCDVu+MfBeneMtNEF3mK5iDfZrleTETjPGcMDgZB/DHWvn7xD8O/Evht2NzYPcW4G77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Mkoqn42HiTxjrMOof8Ijqtp5dusHl/Z5JM4ZmznYP73T2ooA+haKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDB1v/hLftqf2D/Yn2Xyxv+3+bv35OcbOMY2++c0VvUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFQ2t3bX1slzZ3EVxA+dssLh1bBwcEcHkEUATUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFMmmit4ZJppEjijUu7uwCqoGSST0AohmiuIY5oZEkikUOjowKspGQQR1BoAfRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFUL3XNI0yYQ3+qWVpKy7wk9wkbFckZwT04P5UUAX6htbS2sbZLazt4reBM7YoUCKuTk4A4HJJqaigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAp6rpVlrWmy6fqEPnWs2N8e4rnBDDkEHqBVmGGK3hjhhjSOKNQiIigKqgYAAHQCn0UAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBQvdD0jU5hNf6XZXcqrsDz26SMFyTjJHTk/nRV+igAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACi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ADAP+3j/ANp0UfHX/mAf9vH/ALTooA9I8W/8ibrn/YPuP/RbVsVj+Lf+RN1z/sH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/8wD/t4/8AadFHx1/5gH/bx/7TooA9I8W/8ibrn/YPuP8A0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f8Ajr/zAP8At4/9p0UfHX/mAf8Abx/7TooA9I8W/wDIm65/2D7j/wBFtWxWP4t/5E3XP+wfcf8Aotq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/wDMA/7eP/adFHx1/wCYB/28f+06KAPSPFv/ACJuuf8AYPuP/RbVsVj+Lf8AkTdc/wCwfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/wAwD/t4/wDadFHx1/5gH/bx/wC06KAPSPFv/Im65/2D7j/0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f+Ov/MA/7eP/AGnRR8df+YB/28f+06KAPSPFv/Im65/2D7j/ANFtWxWP4t/5E3XP+wfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/AI6/8wD/ALeP/adFHx1/5gH/AG8f+06KAPSPFv8AyJuuf9g+4/8ARbVsVj+Lf+RN1z/sH3H/AKLatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f+Ov8AzAP+3j/2nRR8df8AmAf9vH/tOigD0jxb/wAibrn/AGD7j/0W1bFY/i3/AJE3XP8AsH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/8AMA/7eP8A2nRR8df+YB/28f8AtOigD0jxb/yJuuf9g+4/9FtWxWP4t/5E3XP+wfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/zAP+3j/wBp0UfHX/mAf9vH/tOigD0jxb/yJuuf9g+4/wDRbVsVj+Lf+RN1z/sH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/wCOv/MA/wC3j/2nRR8df+YB/wBvH/tOigD0jxb/AMibrn/YPuP/AEW1bFY/i3/kTdc/7B9x/wCi2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/AMwD/t4/9p0UfHX/AJgH/bx/7TooA9I8W/8AIm65/wBg+4/9FtWxWP4t/wCRN1z/ALB9x/6Larmlf2l/ZsX9r/ZPt/Pm/ZN3ldTjbu56YznvmgC5RRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUVT1X+0v7Nl/sj7J9v48r7Xu8rqM7tvPTOMd8VNafafsUH23yvtXlr53k52b8fNtzzjOcZ5xQBNRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAeP/HX/AJgH/bx/7ToqD45faftui7vK+y+XL5eM79+V357Yxsx3zuz2ooA9P8W/8ibrn/YPuP8A0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f8Ajr/zAP8At4/9p0UfHX/mAf8Abx/7TooA9U1aw/tTRr7T/M8r7VbyQeZt3bdylc44zjPSqf2bxJ/0FtK/8Fkn/wAfrYooAx/s3iT/AKC2lf8Agsk/+P0fZvEn/QW0r/wWSf8Ax+tiigDH+zeJP+gtpX/gsk/+P0fZvEn/AEFtK/8ABZJ/8frYooAx/s3iT/oLaV/4LJP/AI/R9m8Sf9BbSv8AwWSf/H62KKAMf7N4k/6C2lf+CyT/AOP0fZvEn/QW0r/wWSf/AB+tiigDH+zeJP8AoLaV/wCCyT/4/R9m8Sf9BbSv/BZJ/wDH62KKAMf7N4k/6C2lf+CyT/4/R9m8Sf8AQW0r/wAFkn/x+tiigDH+zeJP+gtpX/gsk/8Aj9H2bxJ/0FtK/wDBZJ/8frYooAx/s3iT/oLaV/4LJP8A4/R9m8Sf9BbSv/BZJ/8AH62KKAMf7N4k/wCgtpX/AILJP/j9H2bxJ/0FtK/8Fkn/AMfrYooAx/s3iT/oLaV/4LJP/j9H2bxJ/wBBbSv/AAWSf/H62KKAMf7N4k/6C2lf+CyT/wCP0fZvEn/QW0r/AMFkn/x+tiigDH+zeJP+gtpX/gsk/wDj9H2bxJ/0FtK/8Fkn/wAfrYooAx/s3iT/AKC2lf8Agsk/+P0fZvEn/QW0r/wWSf8Ax+tiigDH+zeJP+gtpX/gsk/+P0fZvEn/AEFtK/8ABZJ/8frYooAx/s3iT/oLaV/4LJP/AI/R9m8Sf9BbSv8AwWSf/H62KKAMf7N4k/6C2lf+CyT/AOP0fZvEn/QW0r/wWSf/AB+tiigDH+zeJP8AoLaV/wCCyT/4/R9m8Sf9BbSv/BZJ/wDH62KKAMf7N4k/6C2lf+CyT/4/R9m8Sf8AQW0r/wAFkn/x+tiigDH+zeJP+gtpX/gsk/8Aj9H2bxJ/0FtK/wDBZJ/8frYooAx/s3iT/oLaV/4LJP8A4/R9m8Sf9BbSv/BZJ/8AH62KKAMf7N4k/wCgtpX/AILJP/j9H2bxJ/0FtK/8Fkn/AMfrYooAx/s3iT/oLaV/4LJP/j9H2bxJ/wBBbSv/AAWSf/H62KKAMf7N4k/6C2lf+CyT/wCP0fZvEn/QW0r/AMFkn/x+tiigDH+zeJP+gtpX/gsk/wDj9H2bxJ/0FtK/8Fkn/wAfrYooAx/s3iT/AKC2lf8Agsk/+P0fZvEn/QW0r/wWSf8Ax+tiigDH+zeJP+gtpX/gsk/+P0fZvEn/AEFtK/8ABZJ/8frYooAx/s3iT/oLaV/4LJP/AI/R9m8Sf9BbSv8AwWSf/H62KKAMf7N4k/6C2lf+CyT/AOP0fZvEn/QW0r/wWSf/AB+tiigDH+zeJP8AoLaV/wCCyT/4/R9m8Sf9BbSv/BZJ/wDH62KKAMf7N4k/6C2lf+CyT/4/R9m8Sf8AQW0r/wAFkn/x+tiigDH+zeJP+gtpX/gsk/8Aj9H2bxJ/0FtK/wDBZJ/8frYooAx/s3iT/oLaV/4LJP8A4/R9m8Sf9BbSv/BZJ/8AH62KKAMf7N4k/wCgtpX/AILJP/j9H2bxJ/0FtK/8Fkn/AMfrYooAx/s3iT/oLaV/4LJP/j9H2bxJ/wBBbSv/AAWSf/H62KKAMf7N4k/6C2lf+CyT/wCP0fZvEn/QW0r/AMFkn/x+tiigDH+zeJP+gtpX/gsk/wDj9H2bxJ/0FtK/8Fkn/wAfrYooAx/s3iT/AKC2lf8Agsk/+P0fZvEn/QW0r/wWSf8Ax+tiigDH+zeJP+gtpX/gsk/+P0fZvEn/AEFtK/8ABZJ/8frYooAx/s3iT/oLaV/4LJP/AI/R9m8Sf9BbSv8AwWSf/H62KKAMf7N4k/6C2lf+CyT/AOP0fZvEn/QW0r/wWSf/AB+tiigDzHxx4D8VeLL20ZtU0p4LeMhF8p4MMx+Y4/eE5AXnd26Dkkr06igAorN8Q3U1j4Z1W8tn2TwWc0sb4B2sqEg4PB5FQ/2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM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" id="p9img1"></DIV>


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
<IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAOPApUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD13xh4y07wbpn2m8zJcShhbWy8NMwx37AZGSf1OAfANf8AiT4o8QORNqDWkGMeRZExJyMHPO5s+hJFO8f67cah8R7+6kjRhZXP2eKGbEibYmxgg8EMQWI/2jXqlx4eNtdeGzavYXKXV/A0bDDhY0Uys0eflGRH1jWMYbGG4I74RhRScldsnc+fVYqwZSQQcgjtXa+G/il4k8PzKst22pWmRvgu3LnHGdr/AHlOBgdQM5wa7vxX8OIvF/i/V7q28R2EeobVKWAAd1CxooMmGyuW77TgEfSuW034Syf2NFqXiPXrTQkmIEaXABPOSAxLKASBnAJ4645FbOrSnH3hWZ7l4f8AEGneJtJj1LTJjJC/ysrDDRvgZVh2IyP5jIINaleBfCi/bQviPc6FFdpeWl0JIfNhb92zRgssg9RhWHH97qa9lj1O6m1S9tY402W86QL8jMctEsm4kHAAz0OM465IB8+tT9nKy2KTNiis/Sbq4vbeSacxYWeaEKiEf6uRkzkk9ducds96zJPE8kN66PaA28VzLHNKrcxxp5Y8wj0BkBPooJ7VkM6Oiuft9ZvbuDTZkFvGL25kg2lC2zasrZzuGc+XjHHWpZ9cki0OW/8AKG5L0220Iz8C58nO0cscc4HU8UAbdFclfeNFsdIFzLFClyZ5YlhnkMRZY1L7irDchYBcKRkGROuebereJ102E3KJHJZy2LXFtPuIDyhSyoeOAyjIPsR3FAHRUVhHXszXMhaOC1tro2rM8TyGRgF6leIxlsc5zwe9PXW5ClifJT/SdRmsjyeFQygN9T5Q/OgDaormdI8UTagmnJcWqQ3N1Im9AxI8t4HlR1JHP3Np91b0p914jms11U3US28trHM9tBIjD7QEUsGWTO1sjkqBlec9KAOjorFOtOsNm4Vn8+8W2JktZLcqCpOQr8np16flWVb+OI7jTr26RIXaGWExpE/mEwSyBFJC5Icc5XqDj1oA6+isBNfku7jU0tIzGllBHNm5tpEZ93mZG1tpH3Bz7mpE1a4/4SF9KkK5jijkMiWsjBtxfIJBIjwEGCx5J/CgDborjrTxwH0yW9ngULHYfa3BDQ7WJwkY3D5wxyA444963tB1iPWtONwjws0crwyeS+9NysRkH0Iww9mFAGnRXPa1rN9pk1ykf2dxHp9xepujbrHtwp+bnO7rx09+I77xalm1uZ7aWzXzVNwLpRuELRysGXYx5zERg88HjkUAdLRTIZGlgjkaJ4mZQTG+Ny+xwSM/Q0+gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPlz4iaPcaV4/1SGXkXU7XMTsNoZZCW6nsCSufVTXsS654X/4TTRLSHU9PFlpWmy+RN9sj2B3KRqgOeWCK/wCDVu+MfBeneMtNEF3mK5iDfZrleTETjPGcMDgZB/DHWvn7xD8O/Evht2NzYPcW4G77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Mkoqn42HiTxjrMOof8Ijqtp5dusHl/Z5JM4ZmznYP73T2ooA+haKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDB1v/hLftqf2D/Yn2Xyxv+3+bv35OcbOMY2++c0VvUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFQ2t3bX1slzZ3EVxA+dssLh1bBwcEcHkEUATUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFMmmit4ZJppEjijUu7uwCqoGSST0AohmiuIY5oZEkikUOjowKspGQQR1BoAfRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFUL3XNI0yYQ3+qWVpKy7wk9wkbFckZwT04P5UUAX6htbS2sbZLazt4reBM7YoUCKuTk4A4HJJqaigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAp6rpVlrWmy6fqEPnWs2N8e4rnBDDkEHqBVmGGK3hjhhjSOKNQiIigKqgYAAHQCn0UAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQBQvdD0jU5hNf6XZXcqrsDz26SMFyTjJHTk/nRV+igAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACi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ADAP+3j/ANp0UfHX/mAf9vH/ALTooA9I8W/8ibrn/YPuP/RbVsVj+Lf+RN1z/sH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/8wD/t4/8AadFHx1/5gH/bx/7TooA9I8W/8ibrn/YPuP8A0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f8Ajr/zAP8At4/9p0UfHX/mAf8Abx/7TooA9I8W/wDIm65/2D7j/wBFtWxWP4t/5E3XP+wfcf8Aotq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/wDMA/7eP/adFHx1/wCYB/28f+06KAPSPFv/ACJuuf8AYPuP/RbVsVj+Lf8AkTdc/wCwfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/wAwD/t4/wDadFHx1/5gH/bx/wC06KAPSPFv/Im65/2D7j/0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f+Ov/MA/7eP/AGnRR8df+YB/28f+06KAPSPFv/Im65/2D7j/ANFtWxWP4t/5E3XP+wfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/AI6/8wD/ALeP/adFHx1/5gH/AG8f+06KAPSPFv8AyJuuf9g+4/8ARbVsVj+Lf+RN1z/sH3H/AKLatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA8f+Ov8AzAP+3j/2nRR8df8AmAf9vH/tOigD0jxb/wAibrn/AGD7j/0W1bFY/i3/AJE3XP8AsH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/46/8AMA/7eP8A2nRR8df+YB/28f8AtOigD0jxb/yJuuf9g+4/9FtWxWP4t/5E3XP+wfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/zAP+3j/wBp0UfHX/mAf9vH/tOigD0jxb/yJuuf9g+4/wDRbVsVj+Lf+RN1z/sH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDx/wCOv/MA/wC3j/2nRR8df+YB/wBvH/tOigD0jxb/AMibrn/YPuP/AEW1bFY/i3/kTdc/7B9x/wCi2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPH/jr/AMwD/t4/9p0UfHX/AJgH/bx/7TooA9I8W/8AIm65/wBg+4/9FtWxWP4t/wCRN1z/ALB9x/6Larmlf2l/ZsX9r/ZPt/Pm/ZN3ldTjbu56YznvmgC5RRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUVT1X+0v7Nl/sj7J9v48r7Xu8rqM7tvPTOMd8VNafafsUH23yvtXlr53k52b8fNtzzjOcZ5xQBNRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUU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0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM0f2Nf/8AQzar/wB+7X/4zQBsUVj/ANjX/wD0M2q/9+7X/wCM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" id="p10img1"></DIV>


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
<IMG src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAN0Ap0DASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD13xh4y07wbpn2m8zJcShhbWy8NMwx37AZGSf1OAfANf8AiT4o8QORNqDWkGMeRZExJyMHPO5s+hJFO8f67cah8R7+6kjRhZXP2eKGbEibYmxgg8EMQWI/2jXqlx4eNtdeGzavYXKXV/A0bDDhY0Uys0eflGRH1jWMYbGG4I74RhRScldsnc+fVYqwZSQQcgjtXa+G/il4k8PzKst22pWmRvgu3LnHGdr/AHlOBgdQM5wa7vxX8OIvF/i/V7q28R2EeobVKWAAd1CxooMmGyuW77TgEfSuW034Syf2NFqXiPXrTQkmIEaXABPOSAxLKASBnAJ4645FbOrSnH3hWZ7l4f8AEGneJtJj1LTJjJC/ysrDDRvgZVh2IyP5jIINaleBfCi/bQviPc6FFdpeWl0JIfNhb92zRgssg9RhWHH97qa9lj1O6m1S9tY402W86QL8jMctEsm4kHAAz0OM465IB8+tT9nKy2KTNiis/Sbq4vbeSacxYWeaEKiEf6uRkzkk9ducds96zJPE8kN66PaA28VzLHNKrcxxp5Y8wj0BkBPooJ7VkM6Oiuft9ZvbuDTZkFvGL25kg2lC2zasrZzuGc+XjHHWpZ9cki0OW/8AKG5L0220Iz8C58nO0cscc4HU8UAbdFclfeNFsdIFzLFClyZ5YlhnkMRZY1L7irDchYBcKRkGROuebereJ102E3KJHJZy2LXFtPuIDyhSyoeOAyjIPsR3FAHRUVhHXszXMhaOC1tro2rM8TyGRgF6leIxlsc5zwe9PXW5ClifJT/SdRmsjyeFQygN9T5Q/OgDaormdI8UTagmnJcWqQ3N1Im9AxI8t4HlR1JHP3Np91b0p914jms11U3US28trHM9tBIjD7QEUsGWTO1sjkqBlec9KAOjorFOtOsNm4Vn8+8W2JktZLcqCpOQr8np16flWVb+OI7jTr26RIXaGWExpE/mEwSyBFJC5Icc5XqDj1oA6+isBNfku7jU0tIzGllBHNm5tpEZ93mZG1tpH3Bz7mpE1a4/4SF9KkK5jijkMiWsjBtxfIJBIjwEGCx5J/CgDborjrTxwH0yW9ngULHYfa3BDQ7WJwkY3D5wxyA444963tB1iPWtONwjws0crwyeS+9NysRkH0Iww9mFAGnRXPa1rN9pk1ykf2dxHp9xepujbrHtwp+bnO7rx09+I77xalm1uZ7aWzXzVNwLpRuELRysGXYx5zERg88HjkUAdLRTIZGlgjkaJ4mZQTG+Ny+xwSM/Q0+gAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAPlz4iaPcaV4/1SGXkXU7XMTsNoZZCW6nsCSufVTXsS654X/4TTRLSHU9PFlpWmy+RN9sj2B3KRqgOeWCK/wCDVu+MfBeneMtNEF3mK5iDfZrleTETjPGcMDgZB/DHWvn7xD8O/Evht2NzYPcW4G77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/wCBsf8AjXH/ANpeG/8AomOq/wDggj/xo/tLw3/0THVf/BBH/jQB2H/CW+G/+hg0r/wNj/xo/wCEt8N/9DBpX/gbH/jXH/2l4b/6Jjqv/ggj/wAaP7S8N/8ARMdV/wDBBH/jQB2H/CW+G/8AoYNK/wDA2P8Axryr4zatpuqf2J/Z+oWl35fn7/s8yybc+XjOCcZwfyrpf7S8N/8ARMdV/wDBBH/jVO/8U+CdL8v+0PAN3aeZnZ9o0eGPdjGcZIzjI/OgDvPFv/Im65/2D7j/ANFtWxWP4t/5E3XP+wfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA4/8A5rL/ANy//wC3FdhXH/8ANZf+5f8A/biuwoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAK8f8Ajr/zAP8At4/9p17BXj/x1/5gH/bx/wC06APSPFv/ACJuuf8AYPuP/RbVsVj+Lf8AkTdc/wCwfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA4//msv/cv/APtxXYVx/wDzWX/uX/8A24rsKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACvH/jr/wAwD/t4/wDadewV4/8AHX/mAf8Abx/7ToA9I8W/8ibrn/YPuP8A0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDj/wDmsv8A3L//ALcV2Fcf/wA1l/7l/wD9uK7CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigArx/wCOv/MA/wC3j/2nXsFeP/HX/mAf9vH/ALToA9I8W/8AIm65/wBg+4/9FtWxWP4t/wCRN1z/ALB9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDj/+ay/9y/8A+3FdhXH/APNZf+5f/wDbiuwoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAK8f+Ov/ADAP+3j/ANp17BXj/wAdf+YB/wBvH/tOgD0jxb/yJuuf9g+4/wDRbVsVj+Lf+RN1z/sH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAOP/AOay/wDcv/8AtxXYVx//ADWX/uX/AP24rsKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACvH/AI6/8wD/ALeP/adewV4/8df+YB/28f8AtOgD0jxb/wAibrn/AGD7j/0W1bFY/i3/AJE3XP8AsH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAOP/5rL/3L/wD7cV2Fcf8A81l/7l//ANuK7CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigArx/46/8AMA/7eP8A2nXsFeP/AB1/5gH/AG8f+06APSPFv/Im65/2D7j/ANFtWxWP4t/5E3XP+wfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA4/8A5rL/ANy//wC3FdhXH/8ANZf+5f8A/biuwoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAK8f8Ajr/zAP8At4/9p17BXj/x1/5gH/bx/wC06APSPFv/ACJuuf8AYPuP/RbVsVj+Lf8AkTdc/wCwfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA4//msv/cv/APtxXYVx/wDzWX/uX/8A24rsKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACvH/jr/wAwD/t4/wDadewV4/8AHX/mAf8Abx/7ToA9I8W/8ibrn/YPuP8A0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDj/wDmsv8A3L//ALcV2Fcf/wA1l/7l/wD9uK7CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigArx/wCOv/MA/wC3j/2nXsFeP/HX/mAf9vH/ALToA9I8W/8AIm65/wBg+4/9FtWxWP4t/wCRN1z/ALB9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDj/+ay/9y/8A+3FdhXH/APNZf+5f/wDbiuwoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAK8f+Ov/ADAP+3j/ANp17BXj/wAdf+YB/wBvH/tOgD0jxb/yJuuf9g+4/wDRbVsVj+Lf+RN1z/sH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAOP/AOay/wDcv/8AtxXYVx//ADWX/uX/AP24rsKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACvH/AI6/8wD/ALeP/adewV4/8df+YB/28f8AtOgD0jxb/wAibrn/AGD7j/0W1bFY/i3/AJE3XP8AsH3H/otq2KACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKAOP/5rL/3L/wD7cV2Fcf8A81l/7l//ANuK7CgAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigArx/46/8AMA/7eP8A2nXsFeP/AB1/5gH/AG8f+06APSPFv/Im65/2D7j/ANFtWxWP4t/5E3XP+wfcf+i2o+0+JP8AoE6V/wCDOT/4xQBsUVj/AGnxJ/0CdK/8Gcn/AMYo+0+JP+gTpX/gzk/+MUAbFFY/2nxJ/wBAnSv/AAZyf/GKPtPiT/oE6V/4M5P/AIxQBsUVj/afEn/QJ0r/AMGcn/xij7T4k/6BOlf+DOT/AOMUAbFFY/2nxJ/0CdK/8Gcn/wAYo+0+JP8AoE6V/wCDOT/4xQBsUVj/AGnxJ/0CdK/8Gcn/AMYo+0+JP+gTpX/gzk/+MUAbFFY/2nxJ/wBAnSv/AAZyf/GKPtPiT/oE6V/4M5P/AIxQBsUVj/afEn/QJ0r/AMGcn/xij7T4k/6BOlf+DOT/AOMUAbFFY/2nxJ/0CdK/8Gcn/wAYo+0+JP8AoE6V/wCDOT/4xQBsUVj/AGnxJ/0CdK/8Gcn/AMYo+0+JP+gTpX/gzk/+MUAbFFY/2nxJ/wBAnSv/AAZyf/GKPtPiT/oE6V/4M5P/AIxQBsUVj/afEn/QJ0r/AMGcn/xij7T4k/6BOlf+DOT/AOMUAbFFY/2n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FY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn7P8A5KHrP/YKsP8A0bd10Fc/Z/8AJQ9Z/wCwVYf+jbuugoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAK8f8Ajr/zAP8At4/9p17BXj/x1/5gH/bx/wC06APSPFv/ACJuuf8AYPuP/RbVsVj+Lf8AkTdc/wCwfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA5+z/5KHrP/AGCrD/0bd10Fc/Z/8lD1n/sFWH/o27roKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACvH/jr/wAwD/t4/wDadewV4/8AHX/mAf8Abx/7ToA9I8W/8ibrn/YPuP8A0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn7P8A5KHrP/YKsP8A0bd10Fc/Z/8AJQ9Z/wCwVYf+jbuugoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAK8f8Ajr/zAP8At4/9p17BXj/x1/5gH/bx/wC06APSPFv/ACJuuf8AYPuP/RbVsVj+Lf8AkTdc/wCwfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA5+z/5KHrP/AGCrD/0bd10Fc/Z/8lD1n/sFWH/o27roKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACvH/jr/wAwD/t4/wDadewV4/8AHX/mAf8Abx/7ToA9I8W/8ibrn/YPuP8A0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn7P8A5KHrP/YKsP8A0bd10Fc/Z/8AJQ9Z/wCwVYf+jbuugoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAK8f8Ajr/zAP8At4/9p17BXj/x1/5gH/bx/wC06APSPFv/ACJuuf8AYPuP/RbVsVj+Lf8AkTdc/wCwfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA5+z/5KHrP/AGCrD/0bd10Fc/Z/8lD1n/sFWH/o27roKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACvH/jr/wAwD/t4/wDadewV4/8AHX/mAf8Abx/7ToA9I8W/8ibrn/YPuP8A0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn7P8A5KHrP/YKsP8A0bd10Fc/Z/8AJQ9Z/wCwVYf+jbuugoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAK8f8Ajr/zAP8At4/9p17BXj/x1/5gH/bx/wC06APSPFv/ACJuuf8AYPuP/RbVsVj+Lf8AkTdc/wCwfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA5+z/5KHrP/AGCrD/0bd10Fc/Z/8lD1n/sFWH/o27roKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACvH/jr/wAwD/t4/wDadewV4/8AHX/mAf8Abx/7ToA9I8W/8ibrn/YPuP8A0W1bFY/i3/kTdc/7B9x/6LatigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigDn7P8A5KHrP/YKsP8A0bd10Fc/Z/8AJQ9Z/wCwVYf+jbuugoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAK8f8Ajr/zAP8At4/9p17BXj/x1/5gH/bx/wC06APSPFv/ACJuuf8AYPuP/RbVsVj+Lf8AkTdc/wCwfcf+i2rYoAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooA5+z/5KHrP/AGCrD/0bd10Fc/Z/8lD1n/sFWH/o27roKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACvH/jr/wAwD/t4/wDadewV4/8AHX/mAf8Abx/7ToA7n4iXsun+ANYmiVGZoRCQ4JG2RhG344Y4968t/wCF2eJP+fLSv+/Un/xyiigA/wCF2eJP+fLSv+/Un/xyj/hdniT/AJ8tK/79Sf8AxyiigA/4XZ4k/wCfLSv+/Un/AMco/wCF2eJP+fLSv+/Un/xyiigA/wCF2eJP+fLSv+/Un/xyj/hdniT/AJ8tK/79Sf8AxyiigA/4XZ4k/wCfLSv+/Un/AMco/wCF2eJP+fLSv+/Un/xyiigA/wCF2eJP+fLSv+/Un/xyj/hdniT/AJ8tK/79Sf8AxyiigA/4XZ4k/wCfLSv+/Un/AMco/wCF2eJP+fLSv+/Un/xyiigA/wCF2eJP+fLSv+/Un/xyj/hdniT/AJ8tK/79Sf8AxyiigA/4XZ4k/wCfLSv+/Un/AMco/wCF2eJP+fLSv+/Un/xyiigA/wCF2eJP+fLSv+/Un/xyj/hdniT/AJ8tK/79Sf8AxyiigA/4XZ4k/wCfLSv+/Un/AMco/wCF2eJP+fLSv+/Un/xyiigA/wCF2eJP+fLSv+/Un/xyj/hdniT/AJ8tK/79Sf8AxyiigA/4XZ4k/wCfLSv+/Un/AMco/wCF2eJP+fLSv+/Un/xyiigA/wCF2eJP+fLSv+/Un/xyj/hdniT/AJ8tK/79Sf8AxyiigA/4XZ4k/wCfLSv+/Un/AMco/wCF2eJP+fLSv+/Un/xyiigA/wCF2eJP+fLSv+/Un/xyj/hdniT/AJ8tK/79Sf8AxyiigA/4XZ4k/wCfLSv+/Un/AMco/wCF2eJP+fLSv+/Un/xyiigA/wCF2eJP+fLSv+/Un/xyj/hdniT/AJ8tK/79Sf8AxyiigA/4XZ4k/wCfLSv+/Un/AMco/wCF2eJP+fLSv+/Un/xyiigA/wCF2eJP+fLSv+/Un/xyj/hdniT/AJ8tK/79Sf8AxyiigA/4XZ4k/wCfLSv+/Un/AMco/wCF2eJP+fLSv+/Un/xyiigA/wCF2eJP+fLSv+/Un/xyj/hdniT/AJ8tK/79Sf8AxyiigCnH8Wtei1m51RbTTfPuLeG3dTG+0LG0jKR8+c5lbPPYdO9z/hdniT/ny0r/AL9Sf/HKKKAD/hdniT/ny0r/AL9Sf/HKP+F2eJP+fLSv+/Un/wAcoooAP+F2eJP+fLSv+/Un/wAco/4XZ4k/58tK/wC/Un/xyiigA/4XZ4k/58tK/wC/Un/xyj/hdniT/ny0r/v1J/8AHKKKAD/hdniT/ny0r/v1J/8AHKP+F2eJP+fLSv8Av1J/8coooAP+F2eJP+fLSv8Av1J/8co/4XZ4k/58tK/79Sf/AByiigA/4XZ4k/58tK/79Sf/AByj/hdniT/ny0r/AL9Sf/HKKKAD/hdniT/ny0r/AL9Sf/HKP+F2eJP+fLSv+/Un/wAcoooAP+F2eJP+fLSv+/Un/wAco/4XZ4k/58tK/wC/Un/xyiigA/4XZ4k/58tK/wC/Un/xyj/hdniT/ny0r/v1J/8AHKKKAD/hdniT/ny0r/v1J/8AHKP+F2eJP+fLSv8Av1J/8coooAP+F2eJP+fLSv8Av1J/8co/4XZ4k/58tK/79Sf/AByiigA/4XZ4k/58tK/79Sf/AByj/hdniT/ny0r/AL9Sf/HKKKAD/hdniT/ny0r/AL9Sf/HKP+F2eJP+fLSv+/Un/wAcoooAP+F2eJP+fLSv+/Un/wAco/4XZ4k/58tK/wC/Un/xyiigA/4XZ4k/58tK/wC/Un/xyj/hdniT/ny0r/v1J/8AHKKKAD/hdniT/ny0r/v1J/8AHKP+F2eJP+fLSv8Av1J/8coooAP+F2eJP+fLSv8Av1J/8co/4XZ4k/58tK/79Sf/AByiigA/4XZ4k/58tK/79Sf/AByj/hdniT/ny0r/AL9Sf/HKKKAD/hdniT/ny0r/AL9Sf/HK5vxZ421Lxj9j/tCC0i+y79n2dGXO7bnOWP8AdFFFAH//2Q==" id="p11img1"></DIV>


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



exit();
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