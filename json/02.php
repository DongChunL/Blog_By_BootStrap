<?php
    //php反编码解析json信息
    //json_decode（json信息,boolean [false]|true）; false-->object true-->array
    $city = array('sandong'=>'jinan','henan'=>'zhenzhou','hebei'=>'shijiazhuang');
    $jn_city = json_encode($city);
    
    //反编码json
    $dejn_city = json_decode($jn_city,true);
    var_dump($dejn_city); 
  //array (size=3)
  //'sandong' => string 'jinan' (length=5)
  //'henan' => string 'zhenzhou' (length=8)
  //'hebei' => string 'shijiazhuang' (length=12)
     
 ?>