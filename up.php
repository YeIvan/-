<?php

if(empty($_GET[submit]))

{

?><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<form enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']?>?submit=1" method="post">
ѡ��ͼƬ: <input name="filename" type="file">
<input type="submit" value="ȷ���ϴ�">
</form>
<?php 
}else{
    $path="upload/";        //�ϴ�·��

//echo $_FILES["filename"]["type"];


if(!file_exists($path))
{
    //����Ƿ��и��ļ��У����û�оʹ��������������Ȩ��
    mkdir("$path", 0700);
}//END IF
//�����ϴ���ͼƬ��ʽ
$tp = array('image/gif','image/jpeg','image/png','image/jpg','image/pjpeg'

    );

if($_FILES["filename"]["name"])
{
        $file1=$_FILES["filename"]["name"];
		$exten=pathinfo($_FILES["filename"]["name"]);
		$exten=$exten["extension"];
		//�ȵ��ϴ��ļ�������
        $file2 = $path.time().'.'.$exten;
		
        $flag=1;
}//END IF
    if($_FILES["filename"]["size"]>1*1024*1024){ //ͼƬ��С�ж�`
        echo "�ϴ�ͼƬ���ܴ���1M";
        echo "<meta http-equiv='REFRESH' CONTENT='1;URL=up.php'>";
        exit;
    }
if($flag) $result=move_uploaded_file($_FILES["filename"]["tmp_name"],$file2);
//�ر�ע�����ﴫ�ݸ�move_uploaded_file�ĵ�һ������Ϊ�ϴ����������ϵ���ʱ�ļ�
if($result)
{
    $file2=str_replace("../","",$file2);
    //echo "�ϴ��ɹ�!".$file2;
    echo "<script language='javascript'>";
    echo "alert(\"�ϴ��ɹ���\");";
    echo "parent.form10.pic.value='$file2'";
	
    echo "</script>";
}//END IF


}

?>
