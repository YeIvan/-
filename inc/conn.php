<?
$conn=mysqli_connect ("localhost", "root", "root");
mysqli_select_db($conn,"db");
mysqli_query($conn,"set names gb2312");
function txtClean($valueString){
            $txt=array("\n","\r");
            $html=array(" "," ");
            return str_replace($txt,$html,$valueString);
        }
?> 
