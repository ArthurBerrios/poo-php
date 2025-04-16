<?php
namespace App\Model;

use App\Model\Biblioteca\Biblioteca;
use App\Model\Livro\Livro;
use App\Model\Usuario\Usuario;

interface EmprestarPara{

    public function emprestarPara(Usuario $nome, Livro $titulo):void;
}