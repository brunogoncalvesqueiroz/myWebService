<?php

/******************************************************************************
 Nome do Arquivo   : Dao.php
 Descrição         : Classe genérica de manipulação de dados
 Programador       : José Gabriel
 CRC               : 49682	
 Data              : 19/01/2015
 Diretório         : ./dao/
 Alteração  : Nome - Data - numero crc
              # Descrição das alteração...
******************************************************************************/

    require_once __DIR__ . '/../util/Conexao.php';

class Dao {

    protected $connPDO;
    protected $stmtPDO;
    protected $sql;
    protected $connOCI;
    protected $stmtOCI;
    protected $plsql;

    protected function __construct() {
        try {
            $this->connPDO = Conexao::getInstanceMysql();
           // $this->connOCI = Conexao::getOciInstance();
        } catch (Exception $e) {
            header("Location:index.php?p=notConnect");
        }
    }

    protected function OCI_parse($plsql) {
        $this->plsql = $plsql;
        $this->stmtOCI = oci_parse($this->connOCI, $this->plsql);
        return $this->stmtOCI;
    }

    protected function OCI_bind($statement, $campo, $valor) {
        oci_bind_by_name($statement, $campo, $valor);
    }

    protected function OCI_executar($statement) {
        $result = @oci_execute($statement);
    }

    protected function OCI_fetch_array($statement) {
        return oci_fetch_array($statement, OCI_ASSOC + OCI_RETURN_NULLS);
    }

    protected function OCI_null($campo) {
        if (empty($campo) || !isset($campo)) {
            $campo = '--';
        } else {
            $campo = $campo;
        }

        return $campo;
    }

    protected function OCI_free_statement($statement) {
        oci_free_statement($statement);
    }

    protected function OCI_close($conexao) {
        oci_close($conexao);
    }

    protected function prepare() {
        $this->stmtPDO = $this->connPDO->prepare($this->sql);
    }

    protected function bind($campo, $valor) {
        $this->stmtPDO->bindValue($campo, $valor);
    }

    protected function executar() {
        return $this->stmtPDO->execute();
    }

    protected function buscarDoResultadoAssoc() {
        return $this->stmtPDO->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function iniciarTransacao() {
        $this->connPDO->beginTransaction();
    }

    protected function comitarTransacao() {
        $this->connPDO->commit();
    }

    protected function desfazerTransacao() {
        $this->connPDO->rollBack();
    }

    protected function adicionarErro($mensagem) {
        $_SESSION['erros'][] = $mensagem;
    }

    protected function retornarUltimoIDInserido() {
        return $this->connPDO->lastInsertId();
    }

    protected function tratarDataParaBanco($data) {
        return implode("-", array_reverse(explode("/", '' . $data)));
    }

    protected function tratarDataParaExibir($data) {
        return implode("/", array_reverse(explode("-", '' . $data)));
    }

}

?>