<?php

// $nome = "1";
// $senha = "1";
// $prof = "1";
// $estado = "1";
// $nome = "1";
// $sexo = "1";


$nome = $_POST['nome'];
$senha = $_POST['senha'];
$prof = $_POST['junior'];
$estado = $_POST['estado'];
$sexo = $_POST['sexo'];

?>


<div style="width:500px; height: 300px; margin-left: 25em; margin-rigth: 9em;background-color: gray; border-radius: 0.3em;border-color: black; font-family:Andale Mono, monospace; text-align: center;">

<h1>Resultados do Formulario</h1>

    <div style="margin: 1em ; margin-left: 3em; margin-right: 3em; border-radius: 0.3em; background-color: white;border-style: solid; border-color: black;" >
        Nome: <?php echo $nome;?>
        <br>
</div>
    <div style="margin: 1em ; margin-left: 3em; margin-right: 3em; border-radius: 0.3em; background-color: white;border-style: solid; border-color: black; ">
        Senha: <?php echo $senha;?>
        <br>
</div>
    <div style="margin: 1em ; margin-left: 3em; margin-right: 3em; border-radius: 0.3em; background-color: white;border-style: solid; border-color: black; ">
        Profissão: Programador<?php $prof;?>
        <br>
</div>
    <div style="margin: 1em ; margin-left: 3em; margin-right: 3em; border-radius: 0.3em; background-color: white;border-style: solid; border-color: black; ">
        Estado de Origem: <?php echo $estado;?>
        <br>
</div>
    <div style="margin: 1em ; margin-left: 3em; margin-right: 3em; border-radius: 0.3em; background-color: white;border-style: solid; border-color: black; ">
        Sexo: <?php echo $sexo;?>
        <br>
</div>
   

</div>
