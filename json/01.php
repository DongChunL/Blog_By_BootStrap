<?php
  //php语言生成json信息
  //json_encode(数组/对象)
  
  //① 索引数组-->js数组
  $color = array('gold','yellow','blue');
  echo json_encode($color).'<br />';   //["GOld","yellow","blue"]
   
   //② 关联数组-->json信息(js里是json对象)
   $city = array('sandong'=>'jinan','henan'=>'zhenzhou','hebei'=>'shijiazhuang');
   echo json_encode($city).'<br />';  //{"sandong":"jinan","henan":"zhenzhou","hebei":"shijiazhuang"}

   //③ 索引关联数组
   $city2 = array('sandong'=>'jinan','henan'=>'zhenzhou','shenyang','hebei'=>'shijiazhuang');
   echo json_encode($city2).'<br />';
   //④ 对象生成json信息 只考虑属性
   //类内部的成员属性需要有修饰符(var/public/protected/private) 固定语法
   class Person{
   	 public $color = 'yellow';
   	var $height = '171';
   	function run(){
   		echo "is running";
   	}
   }
   $tom = new Person();
   echo json_encode($tom);
?>