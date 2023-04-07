<?php
 class Calculo{
 var $variavel;
 public function Calcular($o, $x, $y){
if($o == '+'){
    $this->variavel = $x + $y;
}else if($o == '-' ){
    $this->variavel = $x - $y;
}else if($o == '/'){
    $this->variavel = ($x / $y);
}else if($o == '*'){
    $this->variavel = $x * $y;
}

 echo "<div class='result'>O resultado é : $this->variavel</div>";
}
}
?>