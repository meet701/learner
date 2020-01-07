<?php
$arr=array(
    'c'=>"meet",
    'd'=>1,
    'e'=>"shah");
 //print_r ($a);

?>

<form method="post">
    <input type="text" name="txt">
    <br> <button><h3> submit </h3> </button>
</form>

<?php
if($_POST)
{
    
    $a = $_POST['txt'];
   // echo $a;
    $check=array_search($a,$arr);
    if($check==null){
        echo "not found";
    }
    else{
        echo $check;
    }
    
}



?>