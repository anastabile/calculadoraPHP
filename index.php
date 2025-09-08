<?php

class pessoa
{
    public $nome;
    public $telefone;
    public $endereco;

    public function __construct($nome, $telefone, $endereco) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }
}

class pessoaFisica extends pessoa
{
    public $cpf;

    public function __construct($nome, $telefone, $endereco, $cpf) {
        parent::__construct($nome, $telefone, $endereco);
        $this->cpf = $cpf;
    }
}

class pessoaJuridica extends pessoa
{
    public $CNPJ;
    public $socios;

    public function __construct($nome, $telefone, $endereco, $CNPJ) {
        parent::__construct($nome, $telefone, $endereco);
        $this->CNPJ = $CNPJ;
        $this->socios = array();  // inicia como array vazio
    }

    public function adicionarSocio(pessoaFisica $socio) {
        array_push($this->socios, $socio); // corrige aqui para usar $this
    }
}

// exemplo de uso
$pf1 = new pessoaFisica("joao", "11111-2222", "Rua A", "123.321.222-32");
$pf2 = new pessoaFisica("ana", "33333-4444", "Rua B", "223.332.123-11");

$pj = new pessoaJuridica("tecnologia", "55555-6666", "Rua C", "11.222.123/0001-99");
$pj->adicionarSocio($pf1);
$pj->adicionarSocio($pf2);

var_dump($pf1);
echo "<br><br>";
var_dump($pf2);
echo "<br><br>";
var_dump($pj);
echo "<br><br>";
