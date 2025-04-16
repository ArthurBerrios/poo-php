<?php
namespace App\Model\Livro;



use App\Model\Biblioteca\Biblioteca;
use App\Model\Livro\Livro;
use App\Model\Usuario\Usuario;
use DateTime;


class LivroFisico extends Livro{
  

    public function __construct($titulo, $autor, $preco, $genero, $livrocom)
    {
       
        parent::__construct($titulo, $autor,$preco,$genero,$livrocom);
    }

    
}