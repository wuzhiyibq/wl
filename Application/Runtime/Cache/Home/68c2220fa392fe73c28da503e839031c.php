<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<script>
	function showTime()
	{
		
		myTime = new Date();		
		var monthArray = new Array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");		
		var dayArray = new Array("星期日","星期一","星期二","星期三","星期四","星期五","星期六");

		year = myTime.getYear();
		date = myTime.getDate();
		hours = myTime.getHours();
		minutes = myTime.getMinutes();
		seconds = myTime.getSeconds();

		suf = "AM";

		if(hours>12)
		{
			suf = "PM";
			hours =hours - 12;
		}

		if(hours == 0)
		{
			hours = 12;
		}

		if(minutes <= 9)
		{
			minutes = "0" + minutes;
		}
		
		if(seconds <= 9)
		{
			seconds = "0" + seconds;
		}
	
	theTime = "今天是：" + year + "年 " + monthArray[myTime.getMonth()] + date + "日 " + dayArray[myTime.getDay()] + " 当前时间 " + hours + ":" + minutes + ":" + seconds +  suf;

	DT.innerHTML = theTime;
	setTimeout("showTime()",1000);
	//window.clearTimeout(5000):
	
	}
</script>
<link rel="stylesheet" href="css/css.css" type="text/css">

<META http-equiv=Content-Type content="text/html; charset=gb2312">
<META content="MSHTML 6.00.2900.2180" name=GENERATOR></HEAD>
<BODY bgColor=#d6dff7 leftMargin=0 topMargin=0 marginwidth="0" marginheight="0" onload = "showTime()" >
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  <TBODY>
  <TR>
    <TD class=txlHeaderBackgroundAlternate id=TableTitleLink  
    width="43%" height=23>→ 欢迎你进入物流管理<div id="buttom"></TD>
    <TD class=txlHeaderBackgroundAlternate id=TableTitleLink  width="29%" value="button"><font color ="#FFFFF"><div id = "DT"></div></TD>
    <TD class=txlHeaderBackgroundAlternate id=TableTitleLink vAlign=center align=right width="28%">
	<A href="mainpage.htm"  target=mainFrame>返回主窗口</A></TD>
  </TR></TBODY></TABLE></BODY></HTML>