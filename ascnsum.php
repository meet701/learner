
<form method="post">
    <input type="text" name="txt1"><br><br>
    <input type="text" name="txt2"><br><br>
    <input type="text" name="txt3"><br><br>
    <input type="text" name="txt4"><br><br>
    <input type="text" name="txt5"><br><br>
    <button> sum </button><br><br>
</form>

<?php 
if($_POST){
    
    $a=$_POST["txt1"];
    $b=$_POST["txt2"];
    $c=$_POST["txt3"];
    $d=$_POST["txt4"];
    $e=$_POST["txt5"];
    
    $arr=array($a,$b,$c,$d,$e);
    $sum=array_sum($arr);
    echo $sum;
}
?>
    
    

