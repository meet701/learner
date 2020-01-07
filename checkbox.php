<form method="post">
    dancing <input type="checkbox" name="c1"  value="dancing">
   reading <input type="checkbox" name="c2" value="reading">  
   fighting <input type="checkbox" name="c3" value="fighting"> 
   <button> submit </button>
</form>
<?php
if($_POST){
    
    $a=$_POST["c1"];
    $b=$_POST["c2"];
    $c=$_POST["c3"];
    
    $arr=array($a,$b,$c);
   $string = implode ($arr);
    echo $string;
}
?>
