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
    $this -> senha = $senha;
  }

  public function getAtivo() {
    return $this -> ativo;
  }

  public function setAtivo($ativo) {
    $this -> ativo = $ativo;
  }

  public function criptografia($senha) {
    return md5($senha . $this -> token);
  }

  public function login($email, $senha) {
    $sql = new SQL();
    $stmt = $sql -> query("SELECT * FROM tb_users WHERE email = :EMAIL AND senha = :SENHA");
    $stmt -> bindParam(":EMAIL", $email);
    $senha = $this -> criptografia($senha);
    $stmt -> bindParam(":SENHA", $senha);
    return $stmt;
  }

  public function editarPerfil($id) {
    $sql = new SQL();
    $stmt = $sql -> query("UPDATE tb_users SET nome = :NOME, email = :EMAIL WHERE id = $id");
    $nome = ucwords($this -> nome);
    $stmt -> bindParam(":NOME", $nome);
    $stmt -> bindParam(":EMAIL", $this -> email);
    return $stmt;
  }

  public function editarSenha($id, $senha) {
    $sql = new SQL();
    $stmt = $sql -> query("UPDATE tb_users SET senha = :SENHA WHERE id = $id");
    $senha = $this -> criptografia($senha);
    $stmt -> bindParam(":SENHA", $senha);
    return $stmt;
  }

  public function getPerfil($id) {
    $sql = new SQL();
    $stmt = $sql -> query("SELECT * FROM tb_users WHERE id = $id");
    return $stmt;
  }

}

?>