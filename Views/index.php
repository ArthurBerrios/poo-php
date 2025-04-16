<?php
require_once __DIR__ . '/../Model/CalcularData.php';
require_once __DIR__ . '/../Model/Livro.php';
require_once __DIR__ . '/../Model/EmprestarPara.php';
require_once __DIR__ . '/../Model/Biblioteca.php';
require_once __DIR__ . '/../Model/LivroFisico.php';
require_once __DIR__ . '/../Model/Usuario.php';
require_once __DIR__ . '/../Model/LivroFisico.php';
require_once __DIR__ . '/../Model/Genero.php';




use App\Model\Biblioteca\Biblioteca;
use App\Model\Genero\Genero;
use App\Model\Livro\Livro;
use App\Model\Livro\LivroFisico;
use App\Model\Usuario\Usuario;


$biblioteca = new Biblioteca();
$usuario = new Usuario('Arthur', '5545444', 'arthur@gmail.com','123');
$livro = new LivroFisico('THE FLASH', 'Flash', 30, Genero::Drama,null);

$biblioteca->emprestarPara($usuario,$livro);

echo $livro->getLivroCom()->getNome() . "\n";

$livros = $usuario->getLivrosPegos();
foreach ($livros as $livros){
    echo $livro->getTitulo() . "\n";
}

echo $livro->getDataPDevolucao()->format('Y-m-d H:i:s') . "\n";

echo $biblioteca->setDataDevolvida($livro);

echo $biblioteca->CalcularValorAPagar($livro);
echo $biblioteca->getValorAPagar(). "\n" . "\n" . "\n";










$usuario2 = new Usuario('Jao', '5545444', 'arthur@gmail.com','123');
$livro2 = new LivroFisico('Batman', 'Bat', 100, Genero::Acao,null);

$biblioteca->emprestarPara($usuario2,$livro2);

echo $livro2->getLivroCom()->getNome() . "\n";

$livros = $usuario2->getLivrosPegos();
foreach ($livros as $livros){
    echo $livro2->getTitulo() . "\n";
}

echo $livro2->getDataPDevolucao()->format('Y-m-d H:i:s') . "\n";

echo $biblioteca->setDataDevolvida($livro2);

echo $biblioteca->CalcularValorAPagar($livro2);
echo $biblioteca->getValorAPagar(). "\n" . "\n" . "\n";


?>