<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>修改用户信息</title>
<link rel="stylesheet" href="/wl/Public/css/css.css" type="text/css" />
<script language="JavaScript" src="link.js" type="text/javascript"></script>

</head>
<body leftmargin="0" topmargin="25" >
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr> <th align="center">修改用户信息</th>
      </tr>
</table>
     
    <div align="justify"></div>  
	
    <table width="60%"  align="center"  >
  <tr align="center" bgcolor="#FFFFFF">
	     <td height="16" colspan="2"><hr>         </td>
      </tr>
	  <tr bgcolor="#FFFFFF">
	    <td width="45%" height="16" align="left">发件人姓名：  
	      <input name="name" type="text" value="张三"></td>

		  
      </tr>
	  <tr bgcolor="#FFFFFF">
	    <td height="16" align="left">性别：
		  <label><input type="radio" name="sex" value="单选">男</label>
          <label><input name="sex" type="radio" value="单选" checked>女</label>	   
       </td>
	  </tr>
	  <tr align="center" bgcolor="#FFFFFF"><td width="55%" align="left">联系方式：
          <input type="text" name="phonenumber">
          (手机号码)        
      </tr>
	  <tr bgcolor="#FFFFFF">
	    <td height="16" align="left">所在城市：
          <select name="fromcity" size="1">
            <option selected>北京</option>
            <option>天津</option>
            <option>石家庄</option>
            <option>郑州</option>
          </select>        </td>
	   
      </tr>
	  <tr bgcolor="#FFFFFF"> 
		<td height="16" align="left">详细地址：	    
	    <input name="fromaddr" type="text" size="45"></td> 
			
      </tr>
	  
		 <tr bgcolor="#FFFFFF"> 
		<td height="16" align="left">电子邮件：	    
	      <input name="email" type="text" size="20">
	      @
	      <input name="email2" type="text" size="20">
	      </td>
		 
      </tr>
	   <tr bgcolor="#FFFFFF"> 
		<td height="16" align="left">备注：	    
	    
	      </td>
		 
      </tr>
	   
		 
	  
	   <tr valign="middle" bgcolor="#FFFFFF">
		 <td height="16" colspan="2" align="left">  
	     <textarea name="goodsdescription" cols="64"rows="4"></textarea>	     </td>
	 
	   <tr align="center" bgcolor="#FFFFFF">
	     <td height="16" colspan="2"><hr>         </td>
      </tr>
      <tr  bgcolor="#FFFFFF"> 
		<td height="16" colspan="2" align="left">
&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="Submit" value="提交信息">            
&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;       
        <input type="reset" name="reset" value="重置输入">        </td>
	  </tr>
  </table> 
 </form>
</body>
</html>