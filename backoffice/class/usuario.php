<?php

class Usuario {

  private $id;
  private $nome;
  private $email;
  private $senha;
  private $ativo;
  private $token = "b@ck0ff!c3";

  public function getId() {
    return $this -> id;
  }

  public function getNome() {
    return $this -> nome;
  }

  public function setNome($nome) {
    $this -> nome = $nome;
  }

  public function getEmail() {
    return $this -> email;
  }

  public function setEmail($email) {
    $this -> email = $email;
  }

  public function getSenha() {
    return $this -> senha;
  }

  public function setSenha($senha) {
    $this -> senha = md5($senha . $this -> token);
  }

  public function getAtivo() {
    return $this -> ativo;
  }

  public function setAtivo($ativo) {
    $this -> ativo = $ativo;
  }

  public function login($email, $senha) {
    $sql = new SQL();
    $stmt = $sql -> query("SELECT nome, ativo FROM tb_users WHERE email = :EMAIL AND senha = :SENHA");
    $stmt -> bindParam(":EMAIL", $email);
    $stmt -> bindParam(":SENHA", $senha);
    return $stmt;
  }

}

?>