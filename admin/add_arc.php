<?
session_start();
include("../inc/checkadmin.php");
include("../inc/conn.php");
date_default_timezone_set('Asia/Shanghai');
date_default_timezone_set("PRC");
$time=date("Y-m-d");
?>
<HTML><HEAD>
<META content="text/html; charset=gb2312" http-equiv=Content-Type><LINK 
rel=stylesheet type=text/css href="css.css">
<STYLE type=text/css>
.STYLE1 {
	COLOR: #ffffff; FONT-WEIGHT: bold
}
</STYLE>

<STYLE>
.x:link {
	COLOR: white; TEXT-DECORATION: none
}
.x:visited {
	COLOR: white; TEXT-DECORATION: none
}
.x:active {
	COLOR: red; TEXT-DECORATION: none
}
.x:hover {
	COLOR: red
}
TR {
	FONT-SIZE: 10pt
}
TD {
	FONT-SIZE: 10pt
}
BODY {
	FONT-SIZE: 10pt
}
A:link {
	COLOR: red; TEXT-DECORATION: underline
}
A:visited {
	COLOR: red; TEXT-DECORATION: underline
}
A:active {
	COLOR: red; TEXT-DECORATION: underline
}
A:hover {
	COLOR: red; TEXT-DECORATION: underline
}
</STYLE>

<STYLE fprolloverstyle>
A:hover {
	COLOR: #ff0000; FONT-SIZE: 10pt; TEXT-DECORATION: none
}
.STYLE4 {
	color: #FF6633;
	font-size: 18pt;
}
</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.19222"></HEAD>
<BODY>
<p>&nbsp;</p>
<TABLE width="66%" border=0 align="center" cellPadding=5 cellSpacing=1 bgColor=#336699>
 <form name="form10" action="save_arc.php?act=add" method="post">
  <TBODY>
  <TR>
    <TD colSpan=2 align=middle>&nbsp;</TD>
  </TR>
  <TR class=tr_southidc>
    <TD height=31 align="right" bgColor=#ecf5ff>标题：</TD>
    <TD height=31 bgColor=#ecf5ff><input name="title" type="text" id="title" size="50"></TD>
  </TR>
  <TR class=tr_southidc>
    <TD width="13%" height=40 align="right" bgColor=#ecf5ff>内容：</TD>
    <TD width="87%" height=40 bgColor=#ecf5ff>
	<div>
	<script charset="utf-8" src="kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kindeditor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				cssPath : 'kindeditor/plugins/code/prettify.css',
				uploadJson : 'kindeditor/php/upload_json.php',
				fileManagerJson : 'kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterBlur : function() {
this.sync();
K.ctrl(document, 13, function() {
K('form[name=form10]')[0].submit();
});
K.ctrl(this.edit.doc, 13, function() {
K('form[name=form10]')[0].submit();
});
}
			});
			prettyPrint();
		});
	</script>
     <textarea name="content" display="none" style="width:500px;height:360px;"><?=$rs["content"]?></textarea>
      </div></TD>
  </TR>
  
  <TR class=tr_southidc>
    <TD height=32 align="right" bgColor=#ecf5ff>日期：</TD>
    <TD bgColor=#ecf5ff height=32><input name="rq" type="text" id="rq" value="<?=$time?>"></TD>
  </TR>
  <TR class=tr_southidc>
    <TD height=40 align="right" bgColor=#ecf5ff>&nbsp;</TD>
    <TD bgColor=#ecf5ff height=40><input type="submit" name="Submit" value="提交">
      <input type="reset" name="Submit2" value="重置"></TD></TR>
  </TBODY>
  </form>
</TABLE>
</BODY></HTML>
