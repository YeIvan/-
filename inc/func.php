<?
//���ú�������ȡ�ַ���,����ר��
function left($title,$length){  
$encoding='gb2312'; 
if(mb_strlen($title,$encoding)>$length){ 
$title=mb_substr($title,0,$length,$encoding); 
} 
return $title; 
} 
//�������ã����ݴ���ID��ֵ�жϳ���Ӧ�ķ���
function category($conn,$id)
{
         $fenlei="";
		 $result=mysqli_query($conn,"select * from category");
	      while($row=mysqli_fetch_array($conn,$result))
	      {
		    if($row["c_id"]==$id)
			  {
			    $fenlei=$row["category"];
			  }
	      }
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
//��֤��Ա�ʺ��Ƿ����
function exist_member($conn,$userid)
{
  $query=mysqli_query($conn,"select * from hy where userid='$userid'");
  $num=mysqli_num_rows($query);
   mysqli_free_result($query);
   return $num;
}
//��֤��Ա�ʺ��Ƿ����
function exist_sh($conn,$userid)
{
  $query=mysqli_query($conn,"select * from sh where zh='$userid'");
  $num=mysqli_num_rows($query);
   mysqli_free_result($query);
   return $num;
}
//����session�����õ���ԱID
function getmemberid($conn,$userid)
{
$query=mysqli_query($conn,"select * from shop_member where userid='$userid'");
$rs=mysqli_fetch_assoc($query);
$member_id=$rs["member_id"];
mysqli_free_result($query);
return $member_id;
}
//����ID�����õ���Ա����
function get_hy($conn,$id)
{
$query=mysqli_query($conn,"select * from hy where hy_id='$id'");
$rs=mysqli_fetch_assoc($query);
return $rs;
}
//
//����ID�����õ���Ա����
function turn_sh($conn,$id)
{
$query=mysqli_query($conn,"select * from hy where hy_id='$id'");
$rs=mysqli_fetch_assoc($query);
return $rs;
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
function init_prono($conn)
{
  $query=mysqli_query($conn,"select product_id from shop_product");
  $num=mysqli_num_rows($query);
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

//���ݱ��������ַ���ͷ����
function query($conn,$sql)
{
$query=mysqli_query($conn,$sql);
return $query;
}
//�رղ�ѯ
function closequery($query)
{
  mysqli_free_result($query);
}
?>
