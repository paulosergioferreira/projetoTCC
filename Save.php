<?php

require_once'GerenteController.php';
require_once'ClienteController.php';
require_once'VendedorController.php';
require_once'VendaController.php';
$c = new ClienteController();
$g = new GerenteController();
$v = new VendedorController();
$vc = new VendaController();
//Pegando os valores inseridos no layout, que serão usados no controller, através da função insert.
if(isset($_POST['salvandoCliente'])){
    $c->insert($_POST['nome'], $_POST['rg'], $_POST['cpf'], $_POST['sexo'], $_POST['datanasc'], $_POST['telefone'],$_POST['numero_casa'],
        $_POST['rua'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['cep'], $_POST['login'], $_POST['senha'], $_POST['situacao'] );
        require_once'listaClientes.php';
}

if(isset($_POST['editarCliente'])){
    $c->update($_POST['id'], $_POST['nome'], $_POST['rg'], $_POST['cpf'], $_POST['sexo'], $_POST['datanasc'], $_POST['telefone'],$_POST['numero_casa'],
        $_POST['rua'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['cep'], $_POST['login'], $_POST['senha'], $_POST['situacao'] );
        require_once'listaClientes.php';
}
    

if(isset($_POST['salvandoGerente'])){
    $g->insert($_POST['nome'], $_POST['rg'], $_POST['cpf'], $_POST['sexo'], $_POST['datanasc'], $_POST['telefone'],$_POST['numero_casa'],
        $_POST['rua'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['cep'], $_POST['login'], $_POST['senha'], $_POST['nivel_func'], $_POST['cargo'] );
        require_once'listaGerentes.php';
}

if(isset($_POST['editarGerente'])){  
    $g->update($_POST['id'], $_POST['nome'], $_POST['rg'], $_POST['cpf'], $_POST['sexo'], $_POST['datanasc'], $_POST['telefone'],$_POST['numero_casa'],
        $_POST['rua'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['cep'], $_POST['login'], $_POST['senha'],  $_POST['nivel_func'], $_POST['cargo'] );
        require_once'listaGerentes.php';
    
}

if(isset($_POST['salvandoVendedor'])){
    $v->insert($_POST['nome'], $_POST['rg'], $_POST['cpf'], $_POST['sexo'], $_POST['datanasc'], $_POST['telefone'],$_POST['numero_casa'],
        $_POST['rua'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['cep'], $_POST['login'], $_POST['senha'], $_POST['nivel_func'], $_POST['cargo'] );
        require_once'listaVendedores.php';
}

if(isset($_POST['editarVendedor'])){  
    $v->update($_POST['id'], $_POST['nome'], $_POST['rg'], $_POST['cpf'], $_POST['sexo'], $_POST['datanasc'], $_POST['telefone'],$_POST['numero_casa'],
        $_POST['rua'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['cep'], $_POST['login'], $_POST['senha'],  $_POST['nivel_func'], $_POST['cargo'] );
        require_once'listaVendedores.php';
    
}



if(isset($_POST['comprar'])){ 
    $destino = $_POST['destino'];
        
        if($destino == "Pernambuco" && $_POST['nivelHotel'] == 1){
            $valor = 100;
            $_POST['preco'] = $valor;

        }else if($destino == "Pernambuco" && $_POST['nivelHotel'] == 2){
            $valor = 150;
            $_POST['preco'] = $valor;
    
        }else if($destino == "Pernambuco" && $_POST['nivelHotel'] == 3){
            $valor = 200;
            $_POST['preco'] = $valor;
    
        }else if($destino == "Pernambuco" && $_POST['nivelHotel'] == 4){
            $valor = 250;
            $_POST['preco'] = $valor;
    
        }else if($destino == "Pernambuco" && $_POST['nivelHotel'] == 5){
            $valor = 300;
            $_POST['preco'] = $valor;
    
        }








    $vc->insert($_POST['destino'], $_POST['preco'], $_POST['transporte'], $_POST['nivelHotel'], $_POST['translado'], $_POST['descricao'], 
    $_POST['diaria'], $_POST['tipo'], $_POST['clienteId']);
}




?>
