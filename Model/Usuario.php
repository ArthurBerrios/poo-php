<?php
namespace App\Model\Usuario;

use App\Model\Livro\Livro;

class Usuario{
    private string $nome;
    private string $cpf;
    private string $email;
    private string $senha;
    private array $livrosPegos = [];



    public function __construct($nome, $cpf, $email, $senha, )
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;

    }


    public function setLivrosPegos(Livro $titulo): void{
        $this->livrosPegos[] = $titulo;
    }

    public function getNome(): string{
        return $this->nome; 
    }
    public function getCpf(): string{
        return $this->cpf;
    }
    public function getEmail(): string{
        return $this->email;
    }
    public function getSenha(): string{
        return $this->senha;
        }
    public function getLivrosPegos(){
        return $this->livrosPegos;
    }

    
}


