<?php
namespace App\Model\Livro;




use App\Model\Livro\Livro;
use App\Model\Usuario\Usuario;
use DateTime;

class LivroDigital extends Livro{
    private ?Usuario $emprestadoPara;
    private ?\DateTime $datapdevolucao;


    public function __construct($titulo, $autor, $preco, $genero, $emprestadoPara=null, $datapdevolucao = null)
    {
        $this->emprestadoPara = $emprestadoPara;
        $this -> datapdevolucao = $datapdevolucao;
        parent::__construct($titulo, $autor,$preco,$genero);
    }

    public function getEmprestadoPara(Usuario $emprestadoPara){
        return $this->emprestadoPara;
    }
    
    public function getDevolucao(DateTime $devolucao){
        return $this->datapdevolucao;
    }

}