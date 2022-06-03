<?php


$imovel1 = [
    'nome' => 'Casa',
    'preco' => '500.000,00',
    'descricao' => 'com 4 quartos, 2 garangens, 3 banheiros, churrasqueira, area de lazer, piscina, energia solar',
    'foto' => "<img width='100px' src=casa.jpg >",
];

$imovel2 = [
    'nome' => 'Apartamento',
    'preco' => '180.000,00',
    'descricao' => 'com 2 quartos, 1 garangens, 2 banheiros, gás embutido, sem condominio',
    'foto' => "<img width='100px' src=apartamento.jpg>",
 
];

$imovel3 = [
    'nome' => 'Casa de Praia',
    'preco' => '400.000,00',
    'descricao' => 'com 5 quartos, 3 garangens, 4 banheiros, churrasqueira, area de lazer, piscina, energia solar, quadra de futebel, playgraud',
    'foto' => "<img width='100px' src=casadepraia.jpg>",
];

$imovel4 = [
    'nome' => 'Ponto Comercial',
    'preco' => '250.000,00',
    'descricao' => '20m², excelente localização, boa vizibilidade, muito fluxo de pessoas e automoveis',
    'foto' => "<img width='100px' src=pontocomercial.jpg>",
];

$imovel5 = [
    'nome' => 'Chalé',
    'preco' => '350.000,00',
    'descricao' => 'lugar de descanso e trânquilidade, com 3 quartos, 2 garangens, 2 banheiros, churrasqueira, piscina, poço, trilhas, excelente vista pra natureza',
    'foto' => "<img width='100px' src=chalé.jpg>",
];

$imoveis = [
    $imovel1,
    $imovel2,
    $imovel3,
    $imovel4,
    $imovel5,
];
?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class= 'mt-5'>Seu Sonho da Casa Própria:</h1>
    <hr>
    <table class="table table-hover table-striped mt-5" >
        <thead class="background-color:#808080" align="center">
            <tr>
                <th>Imoveis</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Imagem</th>
                              
        </thead>
     <tbody align="center" > 
        <?php
            foreach ( $imoveis as $listaImoveis ) {
                echo "<tr>";
                echo '<td>' . $listaImoveis['nome'] . "</td>";
                echo '<td>' . $listaImoveis['descricao'] . "</td>";
                echo '<td>' . $listaImoveis['preco'] . "</td>";
                echo '<td>' . $listaImoveis['foto'] . "</td>";
                echo "</tr>";
                }
        ?>
     </tbody>
    </table>
</div>