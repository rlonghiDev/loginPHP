<?php

    require_once ('verificaAcesso.php'); /*Verifica Sessão Ativa*/
    require_once ('cabecalho.php'); /*Padrão de apresentação do cabeçalho*/

    require_once ('conexaoBD.php');

    //Usuario
    $sql1 = "SELECT * FROM usuario WHERE idusuario = '".$_SESSION['idusuario']."';";
    $resultadoUsuario = $conexao->query($sql1);
    $arrayUsuario = mysqli_fetch_array($resultadoUsuario);

    //Endereço
    $sql2 = "SELECT * FROM endereco WHERE idusuario = '".$_SESSION['idusuario']."';";
    $resultadoEndereco = $conexao->query($sql2);
    $arrayEndereco = mysqli_fetch_array($resultadoEndereco);

    //listaEstado
    
    $sql6 = "SELECT * FROM listaEstado where idlistaEstado = 1;";
    $resultadolistaEstado = $conexao->query($sql6);
    $arraylistaEstado = mysqli_fetch_array($resultadolistaEstado);
    $k = 2;
    $combolistaEstado = array($arraylistaEstado['siglaEstado']);

    //while ($arraylistaEstado['siglaEstado'] != null){
    //for ($i = 0; $i < 26 ; $i++)

    while ($arraylistaEstado['siglaEstado'] != null){        
        
        $sql6 = "SELECT * FROM listaEstado where idlistaEstado = '".$k."';";
        $resultadolistaEstado = $conexao->query($sql6);
        $arraylistaEstado = mysqli_fetch_array($resultadolistaEstado);
        $k++;
        array_push($combolistaEstado, $arraylistaEstado['siglaEstado']);


    }

    //Nome usuário
    if($arrayUsuario['nomeUsuario'] != null){
        $valorPrevioNomeUsuario = $arrayUsuario['nomeUsuario'];
    }
    else{
        $valorPrevioNomeUsuario = '';
    }

    //CPF
    if($arrayUsuario['cpf'] != null){
        $valorPrevioCpf = $arrayUsuario['cpf'];
    }
    else{
        $valorPrevioCpf = '""';
    }

    //RG
    if($arrayUsuario['rg'] != null){
        $valorPrevioRg = $arrayUsuario['rg'];
    }
    else{
        $valorPrevioRg = '""';
    }


    
    //Logradouro
    if($arrayEndereco['logradouro'] != null){
        $valorPrevioLogradouro = $arrayEndereco['logradouro'];
    }
    else{
        $valorPrevioLogradouro = '""';
    }

    //Número
    if($arrayEndereco['numero'] != null){
        $valorPrevioNumero = $arrayEndereco['numero'];
    }
    else{
        $valorPrevioNumero = '""';
    }
   
    //CEP
    if($arrayEndereco['CEP'] != null){
        $valorPrevioCEP = $arrayEndereco['CEP'];
    }
    else{
        $valorPrevioCEP = '""';
    }

    //Bairro
    if($arrayEndereco['bairro'] != null){
        $valorPrevioBairro = $arrayEndereco['Bairro'];
    }
    else{
        $valorPrevioBairro = '""';
    }

    //Cidade
    if($arrayEndereco['nomeCidade'] != null){
        $valorPrevioCidade = $arrayCidade['nomeCidade'];
    }
    else{
        $valorPrevioCidade = '""';
    }

     //Estado
     if($arrayEndereco['nomeEstado'] != null){
         $valorPrevioEstado = $arrayEstado['nomeEstado'];
     }
     else{
         $valorPrevioEstado = 'SP';
     }

     //Pais
     if($arrayEndereco['nomePais'] != null){
         $valorPrevioPais = $arrayPais['nomePais'];
     }
     else{
         $valorPrevioPais = '""';
     }

     //email
     if($arrayUsuario['email'] != null){
        $valorPrevioEmail = $arrayUsuario['email'];
     }
     else{
        $valorPrevioEmail = '""';
     }

     //Telefone 
     if($arrayUsuario['telefone'] != null){
        $valorPrevioTelefone = $arrayUsuario['telefone'];
     }
     else{
        $valorPrevioTelefone = '""';
     }

    $conexao->close();
?>
<br>

