<?
//���ú�������ȡ�ַ���,����ר��
function chgtitle($title,$length){  
$encoding='gb2312'; 
if(mb_strlen($title,$encoding)>$length){ 
$title=mb_substr($title,0,$length,$encoding); 
} 
return $title; 
} 
//�������ã����ݴ���ID��ֵ�жϳ���Ӧ�ķ���
function category($id)
{
         $fenlei="";
		 $result=mysql_query("select * from shop_category");
	      while($row=mysql_fetch_array($result))
	      {
		    if($row["small_id"]==$id)
			  {
			    $fenlei=$row["small_class"];
			  }
	      }
  return $fenlei;
}
//�������ã�����С��ID��ֵ�жϳ���Ӧ�ķ���
function convert_small($id)
{
         $fenlei="";
		 $result=mysql_query("select * from shop_smallclass");
	      while($row=mysql_fetch_array($result))
	      {
		    if($row["small_id"]==$id)
			  {
			    $fenlei=$row["small_class"];
			  }
	      }
  return $fenlei;
}
//�������ã����ݰ����ĵ�����ID��ֵ�жϳ���Ӧ�ķ���
function bighelp($id)
{
         $fenlei="";
		 $result=mysql_query("select * from shop_helpbig");
	      while($row=mysql_fetch_array($result))
	      {
		    if($row["big_id"]==$id)
			  {
			    $fenlei=$row["bighelp"];
			  }
	      }
	mysql_free_result($result);
  return $fenlei;
}
//�Զ����ɶ�����
function get_dingdan()
{
$dingdanhao=date("Y-m-dH-i-s");
$dingdanhao=str_replace("-","",$dingdanhao);
$dingdanhao .= rand(1000,2000);
return $dingdanhao;
}
//���ݻ�Ա�ȼ������ʾ��Ӧ�ĵȼ�
function grade($grade_id)
{
   $dj="";
   switch($grade_id){
       case 1:$dj="��ѻ�Ա";break;
	   case 2:$dj="<span class='cop'>ͭ�ƻ�Ա</span>";break;
	   case 3:$dj="<span class='sil'>���ƻ�Ա</span>";break;
	   case 4:$dj="<span class='gold'>���ƻ�Ա</span>";break;
	}
	return $dj;
}
//��֤��Ա�ʺ��Ƿ����
function exist_member($userid)
{
  $query=mysql_query("select * from shop_member where userid='$userid'");
  $num=mysql_num_rows($query);
   mysql_free_result($query);
   return $num;
}
//����session�����õ���ԱID
function getmemberid($userid)
{
$query=mysql_query("select * from shop_member where userid='$userid'");
$rs=mysql_fetch_assoc($query);
$member_id=$rs["member_id"];
mysql_free_result($query);
return $member_id;
}
//����ID�����õ���Ա����
function getmembername($id)
{
$query=mysql_query("select * from shop_member where member_id='$id'");
$rs=mysql_fetch_assoc($query);
$name=$rs["name"];
mysql_free_result($query);
return $name;
}
//����Ƿ�Ϊ�ջ��Ƿ�������
function isint($id)
{
  if(empty($id))
   {
   echo "<script>";
   echo "location.href='error.php';";
   echo "</script>";
   }
   //�����Ϊ�գ��ж��Ƿ�������
   if(!is_numeric($id))
   {
   echo "<script>";
   echo "location.href='error.php';";
   echo "</script>";
   }
   return $id;
}
//ʵ����Ʒ��ŵ��Զ�(5λ����)
function init_prono()
{
  $query=mysql_query("select product_id from shop_product");
  $num=mysql_num_rows($query);
  $autoid="";
  if($num==0){
       $autoid=1;
       }
   else{
        $autoid=$num+1;
        }
	$autoid=(string)$autoid;
	 switch (strlen($autoid)){
	     case 1:$autoid="p000".$autoid;
		 break;
		 case 2: $autoid="p00".$autoid;
		 break;
		 case 3: $autoid="p0".$autoid;
		 break;
		 case 4: $autoid="p".$autoid;
		 break;
	        }
		return $autoid;
}
//���ݶ�������״̬���ض����Ĳ���״̬
function get_orderstage($state)
{
   $order_state="";
   switch($state){
       case 0:$order_state="���ڴ���";break;
	   case 1:$order_state="�ѷ���";break;
	   case 2:$order_state="���Ѿ��յ�";break;
	   case 3:$order_state="�������";break;
	}
	return $order_state;
}
//���ݱ��������ַ���ͷ����
function query($sql)
{
$query=mysql_query($sql);
return $query;
}
//�رղ�ѯ
function closequery($query)
{
  mysql_free_result($query);
}
?>
