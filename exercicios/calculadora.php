<?php
$primeiro = 0;
$segundo = 0;
$resultado = 0;
$calcular = 'somar';
if (isset($_GET['primeiro'], $_GET['segundo'], $_GET['calcular'])){
   $primeiro = $_GET['primeiro'];
   $segundo = $_GET['segundo'];
   $calcular = $_GET['calcular']; 

   switch($calcular){
        case 'somar':
        $resultado = $primeiro+$segundo;
        break;
        case 'subtrair':
        $resultado = $primeiro-$segundo;
        break;
        case 'multiplicar':
        $resultado = $primeiro*$segundo;
        break;
        case 'dividir':
        $resultado = $primeiro/$segundo;
        break;
               
   }
}
?>

<body>
<title>Calculadora Básica</title>
<form>
   1º Número <br />
    <input type="number" name="primeiro"  value=<?= $primeiro?> required><br/>
   2º Número <br />
    <input type="number" name="segundo"  value=<?= $segundo?> required><br/>
   <select name="calcular">
       <option value="somar"<?= ($calcular=='somar')?'selected':'';?>>Somar</option>
       <option value="subtrair"<?= ($calcular=='subtrair')?'selected':'';?>>Subtrair</option>
       <option value="multiplicar"<?= ($calcular=='multiplicar')?'selected':'';?>>Multiplicar</option>
       <option value="dividir"<?= ($calcular=='dividir')?'selected':'';?>>Dividir</option>
   </select>
   <br /><br />   
    <input type="submit" value="calcular"/>
    <br /><br />   
   <p> O Resultado é <?= $resultado?></p>
  </form>
</body>
