<?php

class ProdutoModelo {
    private string $nome;
    private string $descricao;
    private float $preco;

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void {
        $this->descricao = $descricao;
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function setPreco(float $preco): void {
        $this->preco = $preco;
    }
}

class Produtos {
    private array $produtos = [];

    public function adicionar(ProdutoModelo $produto): void {
        $this->produtos[] = $produto;
    }

    public function listar(): array {
        return $this->produtos;
    }

    public function exibir(ProdutoModelo $produto): string {
        return "Produto: {$produto->getNome()}, 
        Preço: {$produto->getPreco()},
        Descrição: {$produto->getDescricao()}";
    }
}


$produtoModelo = new ProdutoModelo();
$produtoModelo->setNome("Teste");
$produtoModelo->setDescricao("Teste");
$produtoModelo->setPreco(10000.55);

$produtoModelo2 = new ProdutoModelo();
$produtoModelo2->setNome("Teste2");
$produtoModelo2->setDescricao("Teste2");
$produtoModelo2->setPreco(1111.55);


$produtos = new Produtos();
$produtos->adicionar($produtoModelo);
$produtos->adicionar($produtoModelo2);


foreach($produtos->listar() as $item) {
    echo $produtos->exibir($item) . "<br/>";
}
