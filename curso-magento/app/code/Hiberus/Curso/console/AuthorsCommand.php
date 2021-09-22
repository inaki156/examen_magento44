<?php
use Symfony\Component\Console\Command\Command;
namespace Hiberus\Curso\console;

class AuthorsCommand extends Command
{
    /**
     * @param string|null $name
     */
    public function __construc(string $name=null)
    {

    }
public fuction configure(){
    $this->setName('hiberus:author:show')->setDescription("mostrar autores");
    parent::construct($name);
}
protected
/**
 * @param InputInterface $input
 * @param outputInterface $output
 */
function execute(
    InputInterface $input,
    outputInterface $output
){
    $output->writtenln(<info>mensaje de pruebas</info>);
}

}
