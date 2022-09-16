<?php

class SolicitacaoDao {

    public function create(Solicitacao $s) {

        $sql = "INSERT INTO solicitacoes (solicitante, email, descricao, ano, status) VALUES (?,?,?,?,?)";

        $stmt = Connection::getConn()->prepare($sql);

        $stmt->bindValue(1, $s->nome);

        $stmt->bindValue(2, $s->email);

        $stmt->bindValue(3, $s->desc);

        $stmt->bindValue(4, $s->ano);

        $stmt->bindValue(5, $s->status);

        $stmt->execute();
    }

    public function read($id) {
        
        $sql = "SELECT * FROM solicitacoes WHERE numero = ?";

        $stmt = Connection::getConn()->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        if ($stmt->rowCount() == 1) {

            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $resultado;

        } else {
            
            return [];
        }
    }
}