<?php
     //不同PHP版本，对“纯json字符串”解析存在问题
     //使用双引号定义的json字符串反编码操作变成null
     //$jn ="{'name'=>'ldc','age'=>21}";
     //$fan_jn = json_decode($jn);
     //var_dump($fan_jn);
     
     //使用单引号定义的json字符串反编码操作会成功
     $jn ='{"name":"ldc","age":21}';
     $fan_jn = json_decode($jn,true);
     var_dump($fan_jn);
?>