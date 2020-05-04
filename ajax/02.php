<?php
//设置header头，禁止浏览器缓存此页面
header("Cache-Control:no-cache");
header("Pragma:no-cache");
header("Expires:-1");
//打开一个文件，给文件追加内容
$fp = fopen('./02.txt','a');

//追加方式打开02.txt，文件不在会自动创建
fwrite($fp,'ldc write');

//关闭文件
fclose($fp);
?>