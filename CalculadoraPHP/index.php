<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/media.css">
   <style>
/*@import url("https://fonts.googleapis.com/css2?family= Delicious +Handdrawn & display=swap");
* {
  margin: 0;
  padding: 0;
}
body {
  font-family: "Delicious Handrawn", cursive;
  background-color: rgb(224, 201, 245);
}
@media screen and (min-width: 768px) {
.container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 40px;
  background: rgba(255, 255, 255, 0.25);
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  border-radius: 10px;
  border: 1px solid rgba(255, 255, 255, 0.18);
}
.result {
  top: 50%;
  left: 50%;
  transform: translate(-50%, +470%);
  position: absolute;
}
.btn {
  display: inline-block;
}
input {
  width: 100%;
  height: 25px;
  outline: none;
  background-color: rgba(238, 231, 245, 0.822);
  border-radius: 3px;
  border: none;
}
.btn > input {
  width: 80px;
  height: 30px;
  cursor: pointer;
  background-color: rgb(139, 53, 165);
  outline: none;
  border: none;
  border-radius: 3px;
  margin-top: 10px;
  font-size: 25px;
}

.btn > input:hover {
  background-color: rgb(95, 37, 112);
}
h3 {
  text-align: center;
  padding: 10px;
  transform: translateY(-15px);
}

}
@media screen and (max-width: 767px){

.container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 40px;
  background: rgba(255, 255, 255, 0.25);
  box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  border-radius: 10px;
  border: 1px solid rgba(255, 255, 255, 0.18);
}
.result {
  top: 50%;
  left: 50%;
  transform: translate(-50%, +750%);
  position: absolute;
}
.btn {
  display: inline-block;
}
input {
  width: 100%;
  height: 25px;
  outline: none;
  background-color: rgba(238, 231, 245, 0.822);
  border-radius: 3px;
  border: none;
}
.btn > input {
  
  width: 150px;
  height: 30px;
  cursor: pointer;
  background-color: rgb(139, 53, 165);
  outline: none;
  border: none;
  border-radius: 3px;
  margin-top: 10px;
  font-size: 25px;
  
}
.btn > input:hover {
  background-color: rgb(95, 37, 112);
}
h3 {
  text-align: center;
  padding: 10px;
  transform: translateY(-15px);

}

}*/
   </style>
</head>
<body>
<div class="container">
    <h3>Calculadora</h3>
    <form action="" method="POST">
    <label for="n1">Digite um número:</label>
    <input type="number" name="n1" required> <br>
    <label for="n2">Digite outro número:</label>
    <input type="number" name="n2" required> <br>
    <div class="btn"><input type="submit" name="button" value="+" ></div>
    <div class="btn"><input type="submit" name="button" value="-"></div>
    <div class="btn"><input type="submit" name="button" value="*"></div>
    <div class="btn"><input type="submit" name="button" value="/"></div>
      
</div>


</form>
</body>
</html>
<?php
 require('estrutura.class.php');//referenciando o arquivo
 $n1= @$_POST['n1'];
 $n2= @$_POST['n2'];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
if($n1 ==='' || $n1 ===''|| $n2 === '0') {
    echo"<div class='result'> inválido <div>";
}/*if( $n2 === '0'){
      echo"<div class='result'> Essa operação não é possivel! <div>";
}*/
else{
 
 $operacao = @$_POST['button'];
 $obj = new Calculo; //instanciando o objeto
 $obj->Calcular($operacao,$n1,$n2); // usando o metodo 
}
}

 ?>