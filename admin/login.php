<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML><HEAD><TITLE>ADMIN</TITLE>
<META content="text/html; charset=gb2312" http-equiv=Content-Type>
<STYLE type=text/css>TD {
	COLOR: #003366; FONT-SIZE: 12px
}
INPUT {
	FONT-FAMILY: "Arial"; HEIGHT: 21px; COLOR: #003366; FONT-SIZE: 12px; PADDING-TOP: 2px
}
</STYLE>

<SCRIPT language=javascript>
<!--
function SetFocus()
{
if (document.Login.AdminName.value=="")
	document.Login.AdminName.focus();
else
	document.Login.AdminName.select();
}
function CheckForm()
{
	if(document.Login.AdminName.value=="")
	{
		alert("请输入用户名！");
		document.Login.AdminName.focus();
		return false;
	}
	if(document.Login.AdminPassword.value == "")
	{
		alert("请输入密码！");
		document.Login.AdminPassword.focus();
		return false;
	}
	if (document.Login.CheckCode.value==""){
       alert ("请输入您的验证码！");
       document.Login.CheckCode.focus();
       return(false);
    }
}

//-->
</SCRIPT>
<LINK rel=stylesheet href="inc/southidc.css">
<META name=GENERATOR content="MSHTML 8.00.6001.19222"></HEAD>
<BODY leftMargin=0 topMargin=0 bgColor=#ffffff text=#000000 marginheight="0" 
marginwidth="0">
<TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" height="100%" align="center">
  <TBODY>
  <TR>
    <TD vAlign=center align=middle>
      <TABLE width=400 border=0 align="center" cellPadding=5 cellSpacing=1 bgColor=#336699>
        <TBODY>
        <TR>
          <TD align=center>&nbsp;</TD>
        </TR>
        <TR>
          <TD bgColor=#ffffff height=150 vAlign=center align=middle>
            <FORM name=form1 action="findadmin.php" method="post">
            <TABLE width=240 border=0 align="center" cellPadding=0 cellSpacing=2>
              <TBODY>
              <TR>
                <TD width=50>用户名：</TD>
                <TD><INPUT 
                  style="BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; PADDING-BOTTOM: 1px; PADDING-LEFT: 4px; WIDTH: 160px; PADDING-RIGHT: 4px; BORDER-TOP: 1px solid; BORDER-RIGHT: 1px solid; PADDING-TOP: 1px" 
                  id=AdminName4 onFocus="this.select(); " 
                  onmouseover="this.style.background='#E1F4EE';" 
                  onmouseout="this.style.background='#FFFFFF'" maxLength=20 
                  name=username></TD></TR>
              <TR>
                <TD width=50>密　码：</TD>
                <TD><INPUT 
                  style="BORDER-BOTTOM: 1px solid; BORDER-LEFT: 1px solid; PADDING-BOTTOM: 1px; PADDING-LEFT: 4px; WIDTH: 160px; PADDING-RIGHT: 4px; BORDER-TOP: 1px solid; BORDER-RIGHT: 1px solid; PADDING-TOP: 1px" 
                  onfocus="this.select(); " 
                  onmouseover="this.style.background='#E1F4EE';" 
                  onmouseout="this.style.background='#FFFFFF'" maxLength=20 
                  type=password name=password></TD></TR>
              <TR>
                <TD width=50><BR><BR></TD>
                <TD><INPUT value=" 登 陆 " type=submit name=Submit> &nbsp; <INPUT value=" 取 消 " type=reset name=Submit2>            </TD></TR></TBODY></TABLE>
            </FORM></TD></TR>
        <TR>
        <TD align=middle>&nbsp;</TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
<SCRIPT language=JavaScript type=text/JavaScript>
SetFocus(); 
</SCRIPT>
</BODY></HTML>
