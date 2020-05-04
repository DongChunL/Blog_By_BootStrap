<?PHP
$exists = array('丁','东');


$name = $_GET['name'];
   if(in_array($name,$exists)==true){
     echo "<span><font color='red'>用户名已经存在，请换一个</font></span>";
    }else{
    	     echo "<span><font color='green'>恭喜，可以使用此名字</font></span>";
    }
    ?>