<?php if (!defined('THINK_PATH')) exit();?>  <html>
  <head>
  <link rel="stylesheet" href="/wl/Public/css/css.css" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
  <body>
  <form action="#" >
  <table width="1052" border=0 align=center cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
      <tbody>
        <tr>
          <th align=center colspan="16" style="height: 23px">根据日期查询</th>
        </tr>
        <tr bgcolor="#DEE5FA">
          <td colspan="16" align="center" class=txlrow>&nbsp;</td>
        </tr>
        <tr align="center" bgcolor="#799AE1">
          <td width="6%" align="center" class="txlHeaderBackgroundAlternate">客户名</td>
      <td width="6%" align="center" class=txlHeaderBackgroundAlternate>操作</td>
          <td width="7%" align="center" class=txlHeaderBackgroundAlternate>起始日期 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 结束日期</td>
          <td width="6%" align="center" class=txlHeaderBackgroundAlternate>操作</td>
        </tr>
         <tr bgcolor="#DEE5FA">
          <td align="center" class="txlrow"><input type="text" name="name" id="start" /></td>
       <td align=center class=txlrow><a href="#">查找</a></td>
          <td align=center class=txlrow>
     <OBJECT   classid="clsid:20DD1B9E-87C4-11D1-8BE3-0000F8754DA1"   id=DTPicker2   style="HEIGHT:   25px;   LEFT:   0px;   TOP:   0px;   WIDTH:   110px"   VIEWASTEXT>  
      <PARAM   NAME="_ExtentX"   VALUE="2910">  
      <PARAM   NAME="_ExtentY"   VALUE="661">  
      <PARAM   NAME="_Version"   VALUE="393216">  
      <PARAM   NAME="MousePointer"   VALUE="0">  
      <PARAM   NAME="Enabled"   VALUE="1">  
      <PARAM   NAME="OLEDropMode"   VALUE="0">  
      <PARAM   NAME="CalendarBackColor"   VALUE="-2147483643">  
      <PARAM   NAME="CalendarForeColor"   VALUE="-2147483630">  
      <PARAM   NAME="CalendarTitleBackColor"   VALUE="-2147483633">  
      <PARAM   NAME="CalendarTitleForeColor"   VALUE="-2147483630">  
      <PARAM   NAME="CalendarTrailingForeColor"   VALUE="-2147483631">  
      <PARAM   NAME="CheckBox"   VALUE="0">  
      <PARAM   NAME="CustomFormat"   VALUE="">  
      <PARAM   NAME="DateIsNull"   VALUE="0">  
      <PARAM   NAME="Format"   VALUE="662831105">  
      <PARAM   NAME="UpDown"   VALUE="0">  
      <PARAM   NAME="CurrentDate"   VALUE="37243">  
      <PARAM   NAME="MaxDate"   VALUE="2958465">  
      <PARAM   NAME="MinDate"   VALUE="-109205"></OBJECT> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <OBJECT   classid="clsid:20DD1B9E-87C4-11D1-8BE3-0000F8754DA1"   id=DTPicker2   style="HEIGHT:   25px;   LEFT:   0px;   TOP:   0px;   WIDTH:   110px"   VIEWASTEXT>  
      <PARAM   NAME="_ExtentX"   VALUE="2910">  
      <PARAM   NAME="_ExtentY"   VALUE="661">  
      <PARAM   NAME="_Version"   VALUE="393216">  
      <PARAM   NAME="MousePointer"   VALUE="0">  
      <PARAM   NAME="Enabled"   VALUE="1">  
      <PARAM   NAME="OLEDropMode"   VALUE="0">  
      <PARAM   NAME="CalendarBackColor"   VALUE="-2147483643">  
      <PARAM   NAME="CalendarForeColor"   VALUE="-2147483630">  
      <PARAM   NAME="CalendarTitleBackColor"   VALUE="-2147483633">  
      <PARAM   NAME="CalendarTitleForeColor"   VALUE="-2147483630">  
      <PARAM   NAME="CalendarTrailingForeColor"   VALUE="-2147483631">  
      <PARAM   NAME="CheckBox"   VALUE="0">  
      <PARAM   NAME="CustomFormat"   VALUE="">  
      <PARAM   NAME="DateIsNull"   VALUE="0">  
      <PARAM   NAME="Format"   VALUE="662831105">  
      <PARAM   NAME="UpDown"   VALUE="0">  
      <PARAM   NAME="CurrentDate"   VALUE="37243">  
      <PARAM   NAME="MaxDate"   VALUE="2958465">  
      <PARAM   NAME="MinDate"   VALUE="-109205"></OBJECT> 
      </td>
          <td align=center class=txlrow><a href="#">查找</a></td>
        </tr>
         <tr bgcolor="#DEE5FA">
          <td colspan="16" align=center bgcolor="#DEE5FA" class=txlrow>&nbsp;</td>
        </tr>
      </tbody></table>
  </form>
    <table width="1052" border=0 align=center cellpadding=2 cellspacing=1 bordercolor="#799AE1" class=tableBorder>
      <tbody>
        <tr>
          <th align=center colspan=16 style="height: 23px">客户信息浏览</th>
        </tr>
        <tr bgcolor="#DEE5FA">
          <td colspan="16" align="center" class=txlrow>&nbsp;</td>
        </tr>
        <tr align="center" bgcolor="#799AE1">
          <td width="6%" align="center" class="txlHeaderBackgroundAlternate">客户ID</td>
          <td width="7%" align="center" class=txlHeaderBackgroundAlternate>客户名</td>
      <td width="4%" align="center" class=txlHeaderBackgroundAlternate>性别</td>
      <td width="7%" align="center" class=txlHeaderBackgroundAlternate>地址</td>
          <td width="9%" align="center" class=txlHeaderBackgroundAlternate>注册时间</td>
        <td width="9%" align="center" class=txlHeaderBackgroundAlternate>电子邮件</td>  
          <td width="3%" align="center" class=txlHeaderBackgroundAlternate>联系电话</td>
          <td width="6%" align="center" class=txlHeaderBackgroundAlternate>操作</td>
          <td width="4%" align="center" class=txlHeaderBackgroundAlternate>选定</td>
        </tr>
     
      <?php if(is_array($userList)): $i = 0; $__LIST__ = $userList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><tr bgcolor="#DEE5FA">
          <td align="center" class="txlrow"><?php echo ($user["id"]); ?></td>
          <td align=center class=txlrow><?php echo ($user["real_name"]); ?></td>
      <td align=center class=txlrow><?php if($user["sex"] == 1): ?>男<?php else: ?>女<?php endif; ?></td>
          <td align=center class=txlrow><?php echo ($user["address"]); ?></td>
      <td align=center class=txlrow><?php echo ($user["reg_time"]); ?></td>
        <td align=center class=txlrow><?php echo ($user["email"]); ?></td>
      <td align=center class=txlrow><?php echo ($user["mobile"]); ?></td>
          <td align=center class=txlrow><a href="#">删除</a></td>
          <td align=center class=txlrow><a href="/wl/User/editUser?uid=<?php echo ($user["id"]); ?>">修改</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

        <tr bgcolor="#DEE5FA">
          <td colspan="16" align=center bgcolor="#DEE5FA" class=txlrow>&nbsp;</td>
        </tr>
      
      </tbody></table>
    
  </BODY>
    </HTML>