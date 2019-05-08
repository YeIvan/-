<table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">
            <tr>
              <td height="35" background="images/lm1.jpg"><table width="70%" height="24" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="11%" align="center" valign="middle">&nbsp;</td>
                    <td width="89%" align="left" valign="middle" class="hei14">产品分类</td>
                  </tr>
              </table></td>
            </tr>
            <tr>
              <td height="191" align="center" valign="middle"><table width="95%" border="0" cellspacing="0" cellpadding="0">
			  <?
		$sql="select * from category order by  c_id desc";
		$query=mysqli_query($conn,$sql);
		while($rs=mysqli_fetch_array($query))
		{
		?>
                 
                  <tr>
                    <td width="15%" height="20" align="center" valign="middle"><img src="images/oic_02.gif" width="7" height="7" /></td>
                    <td width="85%" align="left" valign="middle" class="text12"><a href="product.php?c_id=<?=$rs["c_id"]?>" class="text12"><?=$rs["category"]?></a></td>
                  </tr>
             
               
             <?
		}
		mysqli_free_result($query);
	?>           
                  
              </table></td>
            </tr>
        </table>
