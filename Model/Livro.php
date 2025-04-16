<?php
namespace App\Model\Livro;

use App\Model\Genero\Genero;
use App\Model\Usuario\Usuario;
use DateTime;

abstract class Livro{



    protected string $titulo;
    protected string $autor;
    protected float $preco;
    protected Genero $genero;
    protected ?Usuario $livroCom;
    private ?\DateTime $datapdevolucao;


    

    public function __construct($titulo, $autor, $preco, $genero, $livroCom = null)
    {
        $this->titulo = $titulo;
        $this-> autor = $autor;
        $this-> preco = $preco;
        $this-> genero = $genero;
        $this-> livroCom = $livroCom;
    }


    public function setLivroCom(Usuario $usuario):void{
        $this->livroCom = $usuario;
    }
    public function getLivroCom(){
        return $this->livroCom;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getGenero(){
        return $this->genero;
    }

    public function getDataPDevolucao(){
        return $this->datapdevolucao;
       }
    public function setDataPDevolucao(DateTime $datapdevolucao):void{
        $this->datapdevolucao = $datapdevolucao;
    }



}




?>
