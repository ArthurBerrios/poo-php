<?php
namespace App\Model;
use DateTime;

trait CalcularData{
    public function calcularDataDevolucao(){
    $devolucao = new DateTime();
    $devolucao->modify('+7 days');
    return $devolucao;
    }
}   