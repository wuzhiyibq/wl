<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>管理页面</TITLE>
<STYLE type=text/css>
BODY {
  BACKGROUND: #799ae1; MARGIN: 0px; FONT: 9pt 宋体
}
TABLE {
  BORDER-RIGHT: 0px; BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px
}
TD {
  FONT: 12px 宋体
}
IMG {
  BORDER-RIGHT: 0px; BORDER-TOP: 0px; VERTICAL-ALIGN: bottom; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px
}
A {
  FONT: 12px 宋体; COLOR: #000000; TEXT-DECORATION: none
}
A:hover {
  COLOR: #428eff; TEXT-DECORATION: underline
}
.sec_menu {
  BORDER-RIGHT: white 1px solid; BACKGROUND: #d6dff7; OVERFLOW: hidden; BORDER-LEFT: white 1px solid; BORDER-BOTTOM: white 1px solid
}
.menu_title {
  
}
.menu_title SPAN {
  FONT-WEIGHT: bold; LEFT: 7px; COLOR: #215dc6; POSITION: relative; TOP: 2px
}
.menu_title2 {
  
}
.menu_title2 SPAN {
  FONT-WEIGHT: bold; LEFT: 8px; COLOR: #428eff; POSITION: relative; TOP: 2px
}
.STYLE3 {color: #FFFFFF}
</STYLE>

<SCRIPT language=javascript1.2>
function showsubmenu(sid)
{
whichEl = eval("submenu" + sid);
if (whichEl.style.display == "none")
{
eval("submenu" + sid + ".style.display=\"\";");
}
else
{
eval("submenu" + sid + ".style.display=\"none\";");
}
}


function closed(){
var a = confirm("确定要关闭页面吗?");
if(a){
window.top.close();
}
else
{ 

 }
}
</SCRIPT>

<META http-equiv=Content-Type content="text/html; charset=gb2312">
<META content="MSHTML 6.00.2900.2180" name=GENERATOR></HEAD>

<BODY leftMargin=0 topMargin=0 marginwidth="0" marginheight="0"  >
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=left border=0>
  <TBODY>
  <TR>
    <TD vAlign=top bgColor=#799ae1>
      <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR>
          <TD  vAlign=bottom height=42>&nbsp;&nbsp;<span class="STYLE3">物流系统管理</span></TD>
        </TR></TBODY></TABLE>
      <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR>
          <TD class=menu_title onMouseOver="this.className='menu_title2';" 
          onmouseout="this.className='menu_title';" background="" height=25>
      <SPAN>| <A  href="#"   onClick="closed()"><B>退出</B></A></SPAN></TD>
        </TR>
        <TR>
          <TD class=menu_title onMouseOver="this.className='menu_title2';" 
          onmouseout="this.className='menu_title';" background="" 
            height=25>&nbsp;</TD>
       </TR>
        </TBODY>
</TABLE>
    
     <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR>
          <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(0) 
          onmouseout="this.className='menu_title';" 
          background=images/admin_left_1.gif height=25>
      <span><B>客户管理</B></span></TD>
        </TR>
        <TR>
          <TD id=submenu0 style="display:none">
            <DIV class=sec_menu style="WIDTH: 158px ">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD height=20><A  href="/wl/user/userList" target=mainFrame>用户信息浏览</A></TD>
              </TR>
              </TBODY></TABLE>
            </DIV>
            <DIV style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD height=20></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
   
    

      <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
          <TR>
            <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(1) 
          onmouseout="this.className='menu_title';" 
          background=images/admin_left_2.gif height=25><SPAN>订单管理</SPAN> </TD>
          </TR>
          <TR>
            <TD id=submenu1 style="display:none "><DIV class=sec_menu style="WIDTH: 158px">
                <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
                  <TBODY>
                    <TR>
                      <TD height=20><a href="OrderManagement/manageorder.htm" target="mainFrame">订单管理</a></TD>
                    </TR>
                    <TR>
                      <TD height=20><a href="OrderManagement/addorder.htm" target="mainFrame">订单增加</a></TD>
                    </TR>
          
                  </TBODY>
                </TABLE>
  
            </DIV>
                <DIV style="WIDTH: 158px">
                  <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
                    <TBODY>
                      <TR>
                        <TD 
                            height=20></TD>
                      </TR>
                    </TBODY>
                  </TABLE>
                </DIV></TD>
          </TR>
        </TBODY>
      </TABLE>
       <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR>
          <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(2) 
          onmouseout="this.className='menu_title';" 
          background=images/admin_left_2.gif height=25>
      <span><B>配送管理</B></span></TD>
        </TR>
        <TR>
          <TD id=submenu2 style="display:none ">
            <DIV class=sec_menu style="WIDTH: 158px ">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD height=20><A  href="AreaManagement/AreaManage.htm" target=mainFrame>配送范围管理</A></TD>
              </TR>
               <TR>
                <TD height=20><A href="CostManagement/CostCheck.htm"target=mainFrame>配送费用管理</A></TD>
              </TR>
         <TR>
                <TD height=20><A href="CostManagement/CostSelect.htm"target=mainFrame>配送费用设置</A></TD>
              </TR>
              </TBODY></TABLE>
            </DIV>
            <DIV style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD height=20></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
  
    <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR>
          <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(3) 
          onmouseout="this.className='menu_title';" 
          background=images/admin_left_2.gif height=25><SPAN>交接单管理</SPAN> 
          </TD>
        </TR>
        <TR>
          <TD id=submenu3 style="display:none ">
            <DIV class=sec_menu style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD height=20><a href="TransferOrder/transfer.htm" target="mainFrame">交接单管理</a></TD>
              </TR>
               <TR>
                <TD height=20><a href="TransferOrder/orderforline.htm" target="mainFrame">交接单增加</a></TD>
              </TR>

              </TBODY></TABLE>
            </DIV>
            <DIV style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD 
              height=20></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
  
   <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
          <TR>
            <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(4) 
          onmouseout="this.className='menu_title';" 
          background=images/admin_left_2.gif height=25><SPAN>线路管理</SPAN> </TD>
          </TR>
          <TR>
            <TD id=submenu4 style="display:none "><DIV class=sec_menu style="WIDTH: 158px">
                <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
                  <TBODY>
                     <TR>
                      <TD height=20><a href="LineManagement/PeiSongDianShow.html" target="mainFrame">配送点浏览|删除</a></TD>
                    </TR>
                    <TR>
                      <TD height=20><a href="LineManagement/addPeiSongDian.html" target="mainFrame">配送点添加</a></TD>
                    </TR>
           <TR>
                      <TD height=20><a href="LineManagement/transRouteShow.html" target="mainFrame">浏览运输路线|删除</a></TD>
                    </TR>
            <TR>
                      <TD height=20><a href="LineManagement/chooseRoute.html" target="mainFrame">选择运输路线</a></TD>
                    </TR>
           <TR>
                      <TD height=20><a href="LineManagement/linesearch.htm" target="mainFrame">查询运输费用</a></TD>
                    </TR>
           <TR>
                      <TD height=20><a href="LineManagement/addline.htm" target="mainFrame">增加线路</a></TD>
                    </TR>
           <TR>
                      <TD height=20><a href="LineManagement/delline.htm" target="mainFrame">线路修改|删除</a></TD>
                    </TR>
            
                  </TBODY>
                </TABLE>
            </DIV>
                <DIV style="WIDTH: 158px">
                  <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
                    <TBODY>
                      <TR>
                        <TD 
      height=20></TD>
                      </TR>
                    </TBODY>
                  </TABLE>
                </DIV></TD>
          </TR>
        </TBODY>
      </TABLE>  
  
   <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR>
          <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(5) 
          onmouseout="this.className='menu_title';" 
          background=images/admin_left_2.gif height=25>
      <span><B>配送定价审核</B></span></TD>
        </TR>
        <TR>
          <TD id=submenu5 style="display:none ">
            <DIV class=sec_menu style="WIDTH: 158px ">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD height=20><A  href="SendManagement/SendSet.htm" target=mainFrame>配送范围|费定价管理</A></TD>
              </TR>
              </TBODY></TABLE>
            </DIV>
            <DIV style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD height=20></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>
         <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
          <TR>
            <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(6) 
          onmouseout="this.className='menu_title';" 
          background=images/admin_left_2.gif height=25><SPAN>利润分配管理</SPAN> </TD>
          </TR>
          <TR>
            <TD id=submenu6 style="display:none "><DIV class=sec_menu style="WIDTH: 158px">
                <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
                  <TBODY>
                    <TR>
                      <TD height=20><a href="ProfitManagement/ProfitSearch.htm" target="mainFrame">利润查询/分配</a></TD>
                    </TR>
          <TR>
                      <TD height=20><a href="ProfitManagement/Profit.htm" target="mainFrame">利润分配结果</a></TD>
                    </TR>
                  </TBODY>
                </TABLE>
  
            </DIV>
                <DIV style="WIDTH: 158px">
                  <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
                    <TBODY>
                      <TR>
                        <TD 
                            height=20></TD>
                      </TR>
                    </TBODY>
                  </TABLE>
                </DIV></TD>
          </TR>
        </TBODY>
      </TABLE>
        
         <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR>
          <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(7) 
          onmouseout="this.className='menu_title';" 
          background=images/admin_left_2.gif height=25>
      <span><B>车辆管理</B></span></TD>
        </TR>
        <TR>
          <TD id=submenu7 style="display:none ">
            <DIV class=sec_menu style="WIDTH: 158px ">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                      <TD height=20><a href="CarManagement/addcar.htm" target="mainFrame">车辆添加</a></TD>
 <!--                   </TR>
<TR>
                      <TD height=20><a href="CarManagement/changecar.htm" target="mainFrame">修改车辆信息</a></TD>
                    </TR>
-->
                    <TR>
                      <TD height=20><a href="CarManagement/updatecar.html" target="mainFrame">车辆信息查询|删除</a></TD>
                    </TR>
           <TR>
                      <TD height=20><a href="CarManagement/addbanci.htm" target="mainFrame">增加班次</a></TD>
                    </TR>
            <TR>
                      <TD height=20><a href="CarManagement/allbanci.htm" target="mainFrame">浏览班次信息|删除</a></TD>
                    </TR>
           <TR>
                      <TD height=20><a href="CarManagement/ebanquestview.htm" target="mainFrame">审核紧急加班次信息</a></TD>
                    </TR>
           <TR>
                      <TD height=20><a href="CarManagement/updateeban.htm" target="mainFrame">浏览审核紧急班次</a></TD>
                    </TR>
              </TBODY></TABLE>
            </DIV>
            <DIV style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD height=20></TD></TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE>

   <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
          <TR>
            <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(8) 
          onmouseout="this.className='menu_title';" 
          background=images/admin_left_2.gif height=25><SPAN>员工管理</SPAN> </TD>
          </TR>
          <TR>
            <TD id=submenu8  style="display:none "><DIV class=sec_menu style="WIDTH: 158px">
                <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
                  <TBODY>
           <TR>
                      <TD height=20><a href="StaffManagement/add_staff.htm" target="mainFrame">员工添加</a></TD>
                    </TR>
           <TR>
                      <TD height=20><a href="StaffManagement/search_staff.htm" target="mainFrame">员工查看</a></TD>
                    </TR>
           <TR>
                      <TD height=20><a href="PowerManagement/search_power.htm" target="mainFrame">权限查询</a></TD>
                    </TR>
          <TR>
                      <TD height=20><a href="PowerManagement/add_power.htm" target="mainFrame">权限添加</a></TD>
                    </TR>
                  </TBODY>
                </TABLE>
        
  
            </DIV>
                <DIV style="WIDTH: 158px">
                  <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
                    <TBODY>
                      <TR>
                        <TD 
                            height=20></TD>
                      </TR>
                    </TBODY>
                  </TABLE>
                </DIV></TD>
          </TR>
        </TBODY>
      </TABLE>
   
    <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
          <TR>
            <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(9) 
          onmouseout="this.className='menu_title';" 
          background=images/admin_left_2.gif height=25><SPAN>公告管理</SPAN> </TD>
          </TR>
          <TR>
            <TD id=submenu9 style="display:none "><DIV class=sec_menu style="WIDTH: 158px">
                <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
                  <TBODY>
                    <TR>
                      <TD height=20><a href="NewsManagement/addnews.htm" target="mainFrame">增加新闻</a></TD>
                    </TR>
                    <TR>
                      <TD height=20><a href="NewsManagement/addreport.htm" target="mainFrame">增加公告</a></TD>
                    </TR>
           <TR>
                      <TD height=20><a href="NewsManagement/managenews.html" target="mainFrame">管理新闻</a></TD>
                    </TR>
            <TR>
                      <TD height=20><a href="NewsManagement/managereport.html" target="mainFrame">管理公告</a></TD>
                    </TR>
          
                  </TBODY>
                </TABLE>
            </DIV>
                <DIV style="WIDTH: 158px">
                  <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
                    <TBODY>
                      <TR>
                        <TD 
      height=20></TD>
                      </TR>
                    </TBODY>
                  </TABLE>
                </DIV></TD>
          </TR>
        </TBODY>
      </TABLE>  
      <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
          <TR>
            <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" onclick=showsubmenu(10) 
          onmouseout="this.className='menu_title';" 
          background=images/admin_left_2.gif height=25><SPAN>加班次管理</SPAN> </TD>
          </TR>
          <TR>
            <TD id=submenu10 style="display:none "><DIV class=sec_menu style="WIDTH: 158px">
                <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
                  <TBODY>
                    <TR>
                      <TD height=20><a href="EmergencyBan/addeban.htm" target="mainFrame">增加紧急班次</a></TD>
                    </TR>
                    <TR>
                      <TD height=20><a href="EmergencyBan/ebanview.htm" target="mainFrame">紧急班次浏览|删除</a></TD>
                    </TR>
                  </TBODY>
                </TABLE>
            </DIV>
                <DIV style="WIDTH: 158px">
                  <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
                    <TBODY>
                      <TR>
                        <TD 
      height=20></TD>
                      </TR>
                    </TBODY>
                  </TABLE>
                </DIV></TD>
          </TR>
        </TBODY>
      </TABLE>  
  
  
      <TABLE cellSpacing=0 cellPadding=0 width=158 align=center>
        <TBODY>
        <TR>
          <TD class=menu_title id=menuTitle1 
          onmouseover="this.className='menu_title2';" 
          onmouseout="this.className='menu_title';" 
          background=images/admin_left_9.gif 
          height=25><SPAN>版权信息</SPAN></TD>
        </TR>
        <TR>
          <TD>
            <DIV class=sec_menu style="WIDTH: 158px">
            <TABLE cellSpacing=0 cellPadding=0 width=135 align=center>
              <TBODY>
              <TR>
                <TD height=20 bgcolor="#D6DFF7" style="LINE-HEIGHT: 150%">版权:421软件开发小组</TD>
              </TR></TBODY></TABLE></DIV></TD></TR></TBODY></TABLE></TR></TBODY></TABLE>
</BODY></HTML>