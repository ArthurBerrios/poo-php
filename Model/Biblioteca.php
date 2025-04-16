<?php
namespace App\Model\Biblioteca;

use App\Model\CalcularData;
use App\Model\EmprestarPara;
use App\Model\Livro\Livro;
use App\Model\Usuario\Usuario;



use DateTime;

class Biblioteca implements EmprestarPara{
    use CalcularData;

    private float $valorapagar;
    private ?\DateTime $datadevolvida;
    
    public function __construct($datadevolvida = null, $valorapagar = 0){
        $this->datadevolvida = $datadevolvida;
        $this-> valorapagar = $valorapagar;
    }
   
    public function setDataDevolvida(Livro $livro):void{
        $data = new DateTime();
        $this->datadevolvida = $data;
    }
    public function CalcularValorAPagar(Livro $livro):void{

        $valor = $livro->getPreco();
        $datapdevolucao = $livro->getDataPDevolucao();
        $datadevolvida = $this->getDataDevolvida();
        $valorComMulta = $valor + 100;

        if($datadevolvida > $datapdevolucao){
            $this->valorapagar = $valorComMulta; 
        }
        else{
            $this->valorapagar = $valor;
        }

    }       
    
    public function getValorAPagar(): float{
        return $this->valorapagar;
    }

    public function getDataDevolvida():DateTime{
        return $this->datadevolvida;
    }
 

    function emprestarPara(Usuario $usuario, Livro $livro): void
    {
        $devolucao = $this->calcularDataDevolucao();
        $livro->setDataPDevolucao($devolucao);
        $livro->setLivroCom($usuario);
        $usuario->setLivrosPegos($livro);

    }

    
}