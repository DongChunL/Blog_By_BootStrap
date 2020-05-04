<?PHP

$exists = array('linken','mary','jim');
//print_r($_POST);
$name = $_POST['name'];
   if(in_array($name,$exists)){
     echo "<span><font color='red'>用户名已经存在请换一个</font></span>";
    }else{
    	     echo "<span><font color='green'>恭喜，可以使用此名字</font></span>";
    }