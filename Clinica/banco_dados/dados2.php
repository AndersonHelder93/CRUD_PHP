<?php 

require_once "dados.php";


if (isset($_POST['matricula'])){
    cadastro_funcionarios($conexao);
}
if (isset($_POST['cpf'])){
        cadastro_clientes($conexao);
    }
if (isset($_POST['login'])){
        $email = $_POST['email']; 
        $senha = $_POST['senha'];  
        login ($conexao, $email, $senha);
    }

function cadastro_clientes($conexao){

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];


    $stmt = "INSERT INTO dados_pessoais (cpf, nome, idade, peso, altura) VALUES ('{$cpf}','{$nome}','{$idade}','{$peso}','{$altura}','{$imc}')";
    mysqli_query($conexao, $stmt);
    if (mysqli_affected_rows($conexao) > 0) {
        echo "Adicionado com sucesso!";
        header("Location:../sucesso.html");
    } else {
        echo "Erro ao adicionar ao banco de dados do cliente!";
        
    }
    mysqli_close($conexao);
    
}
function listagem ($conexao){  //função, nome definido pelo desenvolvedor.

    $stmt = "SELECT * FROM dados_pessoais "; // selecione tudo que tem dentro da tabela = dados_pessoais
    $resultadobd = $conexao->query($stmt) ; // faz a consulta do banco e retorna com o resultado da busca em uma query e armazena o resultado na variavél resultadosbd 
    
    while ($paciente = $resultadobd->fetch_assoc()) {  //
        $pesopac = $paciente['peso'];
        $alturapac = $paciente['altura'];
        $alturapac2 = $alturapac*$alturapac;
        $imc = $pesopac/$alturapac2;
        $nascimento = $paciente['idade'];
        $ano = 2020;
        $idade = ($ano-$nascimento);

        echo "<tr><td> {$paciente['nome']}</td>" ;
        echo "<td> {$paciente['cpf']}</td>" ;
        echo "<td> {$paciente['peso']}</td>" ;
        echo "<td> {$paciente['altura']}</td>" ;
        echo "<td> {$paciente['idade']}</td>";
        echo "<td> $idade </td>";
        echo "<td> $imc </td></tr>";
    } 
    mysqli_close($conexao);

}


function cadastro_funcionarios ($conexao){

    $matricula = $_POST['matricula'];
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $stmt = "INSERT INTO funcionarios (matricula, nome, cargo, email, senha) VALUES ('{$matricula}','{$nome}','{$cargo}','{$email}', '{$senha}')";
    mysqli_query($conexao, $stmt);
    if (mysqli_affected_rows($conexao) > 0) {
        echo "Adicionado com sucesso no banco de funcionarios!";
        header("Location:../sucesso.html");
    } else {
        echo "Erro ao adicionar ao banco de dados!";
        header("Location:../erro.html");
    }
    mysqli_close($conexao);

}
function login ($conexao,$email, $senha){  //função, nome definido pelo desenvolvedor.

    
    $verificar = "SELECT * FROM funcionarios WHERE email='$email' AND senha='$senha'"; 
    $query = mysqli_query($conexao,$verificar);
    if (mysqli_num_rows($query)!=1){
        echo "Erro de Login.";
        header ("Location:../erro.html");
        
    } else {
        header ("Location:../autenticado.html");
        
    }
    mysqli_close($conexao);

}

?>