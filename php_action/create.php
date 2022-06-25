<?php

session_start();

include "../conecta_mysqli.inc";

if(isset($_POST['btn-adicionar'])) :
    $marca = mysqli_escape_string($conexao, $_POST['marca']);
    $modelo = mysqli_escape_string($conexao, $_POST['modelo']);
    $descricao = mysqli_escape_string($conexao, $_POST['descricao']);
    $mod_fab = mysqli_escape_string($conexao, $_POST['mod_fab']);
    $cor = mysqli_escape_string($conexao, $_POST['cor']);
    $placa = mysqli_escape_string($conexao, $_POST['placa']);
    $valor = mysqli_escape_string($conexao, $_POST['valor']);

    $sql = "INSERT INTO carros (marca, modelo, descricao, mod_fab, cor, placa, valor) VALUES ('$marca', '$modelo', '$mod_fab', '$descricao', '$cor', '$placa', '$valor')";
    $resultado = mysqli_query($conexao, $sql);
    $linhasafetadas = mysqli_affected_rows($conexao);

    if($linhasafetadas == 1) :
        mysqli_close($conexao);

        echo "<script> location.replace('../estoque.php?incsucesso'); </script>";
    else : 
        mysqli_close($conexao);

        echo "<script> location.replace('../estoque.php?erro'); </script>";
    endif;
endif;

?>