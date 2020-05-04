<?php
   //接收ajax传递的form表单信息
   //1.普通表单域信息
   //2.上传的文件信息
   //echo "post:";
   //print_r($_POST);

   //echo "file:";
   //print_r($_FILES);
   
   //附件上传逻辑
   //A 附件存储目录和名字
   if($_FILES['photo']['error']>0){
   	exit("文件上传错误");
   }
   $dir = "./upload/";
   $ext = substr($_FILES['photo']['name'],strrpos($_FILES['photo']['name'],"."));//从文件找点的位置 附件后缀
   $name = date("YmdHis")."-".mt_rand(1000,9999).$ext;
   $dir_name = $dir.$name;

   //B move_uploaded_file()把附件从临时路径名移动到“真实路径名”
   if(move_uploaded_file($_FILES['photo']['tmp_name'],$dir_name)){
   	   echo "success";
   }else{
   	echo "failed";
   }

?>