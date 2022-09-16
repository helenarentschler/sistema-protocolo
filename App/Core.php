<?php

require_once 'Model/Connection.php';
require_once 'Model/Solicitacao.php';
require_once 'Model/SolicitacaoDao.php';

$solicitacao = new Solicitacao();
$crud = new SolicitacaoDao();

if (isset($_POST['enviar'])) {

    $solicitacao->nome = $_POST['nome'];
    $solicitacao->email = $_POST['email'];
    $solicitacao->desc = $_POST['desc'];
    $solicitacao->ano = date('Y');
    $solicitacao->date = date('d/m/Y');
    $solicitacao->status = 1;

    $crud->create($solicitacao);

    header("Location: View/exibir.php?solicitante=$solicitacao->nome&email=$solicitacao->email&desc=$solicitacao->desc&ano=$solicitacao->ano&date=$solicitacao->date&status=$solicitacao->status");
}

if (isset($_POST['buscar'])) {
    
    $solicitacao = $crud->read($_POST['num']);

    if (!empty($solicitacao)) {
        $codigo = $solicitacao['id'];
        $solicitante = $solicitacao['solicitante'];
        $email = $solicitacao['email'];
        $desc = $solicitacao['descricao'];    
        $ano = $solicitacao['ano'];    
        $status = $solicitacao['dataCadastro'];
        $status = $solicitacao['status'];
    }

    header("Location: View/exibir.php?codigo=$codigo&solicitante=$solicitante&email=$email&desc=$desc&ano=$ano&date=$date&status=$status");
}
