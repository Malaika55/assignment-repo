<!-- BY USING IFELSE STATEMENT -->
<?php
$x=4;
if($x==1){
    echo "we have 1";
}
elseif($x==2){
    echo "we have 2";
}
elseif($x==3){
    echo "we have 3";
}
elseif($x==4){
    echo "we have 4";
}
else{
    echo "we have greater number than 4";
}
?>

<!-- BY USING SWITCH STATEMENT -->
<?php
$y=4;
switch ($y){
      case "1":
      echo "we have value 1";
      break;
      case "2":
      echo "we have value 2";
      break;
      case "3":
      echo "we have value 3";
      break;
      case "4":
        echo "we have value 4";
        break;
        default:
        echo "our number is greater than 4";
}
?>